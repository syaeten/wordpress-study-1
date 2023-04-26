<?php
// ---------------------------　必須設定　必ず設定してください　-----------------------

//----------------------------------------------------------------------
//  GoogleFont読み込み
//----------------------------------------------------------------------


//----------------------------------------------------------------------
//  CSS読み込み
//----------------------------------------------------------------------



//----------------------------------------------------------------------
//  js読み込み
//----------------------------------------------------------------------



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
