<!DOCTYPE html>
<html>

<head>
  <!--防止浏览器缓存,不然老是不更新css-->
  <meta http-equiv="cache-control" content="no-cache, must-revalidate, post-check=0, pre-check=0">


  <?php
  wp_nav_menu(array(
    'theme_location' => 'headerMunuLocation'
  ));
  wp_head();
  ?>

</head>

<body>