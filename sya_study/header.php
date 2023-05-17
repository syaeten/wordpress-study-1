<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?php wp_head(); ?>

  <!-- Chromeのバグ対策用 -->
  <script>
  console.log("")
  </script>

  <!-- Global site tag (gtag.js) - Google Analytics -->
</head>

<body>

  <!-- ヘッダー -->
  <header class="header">
    <a href="<?php echo home_url(); ?>" class='header-logo'>
      <img src="<?php echo get_template_directory_uri() . '/image/logo.svg' ?>" alt="head-logo">

    </a>
    <nav>
      <ul>
        <li><a href="<?php echo home_url("/service/"); ?>">サービス一覧</a></li>
        <li><a href="<?php echo home_url("/price/"); ?>">料金</a></li>
        <li><a href="<?php echo home_url("/info/"); ?>">お知らせ</a></li>
      </ul>
    </nav>


  </header>