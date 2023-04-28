<?php
show_admin_bar(false);
// ---------------------------　必須設定　必ず設定してください　-----------------------

//----------------------------------------------------------------------
//  GoogleFont読み込み
//  https://blog.nyanco.me/wp_c-theme-webfont/
//----------------------------------------------------------------------

function add_google_fonts()
{
  wp_register_style(
    'googleFonts',
    'https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap'
  );
  wp_enqueue_style('googleFonts');
}
add_action('wp_enqueue_scripts', 'add_google_fonts');

//----------------------------------------------------------------------
//  CSS読み込み
//----------------------------------------------------------------------

/*
wp_register_style と wp_enqueue_style の違い:
wp_register_style: css fileを登録のみ(使う時にwp_enqueue_styleが必要)
wp_enqueue_style: css fileを直接キューに入れる
*/
function add_css()
{
  $version = wp_get_theme()->get('Version');
  wp_register_style(
    'reset',
    get_template_directory_uri() . '/css/reset.min.css',
    array(),
    $version,
    false
  );
  wp_enqueue_style(
    'main',
    get_template_directory_uri() . '/css/style.css',
    array(),
    $version,
    false
  );
  wp_enqueue_style(
    'frequently',
    get_template_directory_uri() . '/css/frequently.css',
    array(),
    $version,
    false
  );
}

add_action('wp_enqueue_scripts', 'add_css');


//----------------------------------------------------------------------
//  js読み込み
//----------------------------------------------------------------------

function add_my_scripts()
{
  wp_enqueue_script(
    'base-script',
    get_theme_file_uri('/js/main.js'),
    array('jquery'),
    '1.0.0',
    false
  );
}
add_action('wp_enqueue_scripts', 'add_my_scripts');

//---------------------------　必須設定　ここまで　------------------------------------


/* 投稿アーカイブページの作成 */
function post_has_archive($args, $post_type)
{
  if ('post' == $post_type) {
    $args['rewrite'] = true;
    $args['has_archive'] = 'news'; //任意のスラッグ名
  }
  return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);


/* 管理画面にファビコンを設定 */
function ad_favicon_dashboard()
{
  echo '<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">';
}
add_action('admin_head', 'ad_favicon_dashboard');

if (!function_exists('lab_setup')) :

  function lab_setup()
  {
    /*
	 * 自動フィードリンク
	 */
    add_theme_support('automatic-feed-links');

    /*
	 * titleを自動で書き出し
	 */
    add_theme_support('title-tag');

    /*
	 * アイキャッチ画像を設定できるようにする
	 */
    add_theme_support('post-thumbnails');

    /*
	 * 検索フォーム、コメントフォーム、コメントリスト、ギャラリー、キャプションでHTML5マークアップの使用を許可します
	 */
    add_theme_support('html5', array(
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    ));

    /*
	 * テーマカスタマイザーにおける編集ショートカット機能の使用
	 */
    add_theme_support('customize-selective-refresh-widgets');

    /*
	 * カスタムメニュー位置を定義
	 */
    register_nav_menus(array(
      'global' => 'グローバルナビ',
    ));
  }
endif;
add_action('after_setup_theme', 'lab_setup');

add_action('init', 'remove_block_editor_options');
function remove_block_editor_options()
{

  remove_post_type_support('post', 'post-formats');        // 投稿フォーマット
  remove_post_type_support('post', 'revisions');           // リビジョン
  remove_post_type_support('post', 'excerpt');             // 抜粋
  remove_post_type_support('post', 'comments');            // コメント
  remove_post_type_support('post', 'trackbacks');          // トラックバック
  unregister_taxonomy_for_object_type('post_tag', 'post'); // タグ
}
