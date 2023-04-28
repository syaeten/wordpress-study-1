<?php get_header(); ?>

<main class="page-front">

  <!-- Top画像の部分 -->
  <img class='bg-img' src="<?php echo get_template_directory_uri() . '/image/top_main_img.png' ?>" alt="top_main_img">

  <!-- サービス一覧の部分 -->
  <div class='service-page flex-center-box'>
    <img src="<?php echo get_template_directory_uri() . '/image/service_text.svg' ?>" alt="service_text">
    <img class='service-img-main' src="<?php echo get_template_directory_uri() . '/image/service_saas.svg' ?>" alt="service_saas">
    <a href="">
      <img class='service-img' id='service_seizou' src="<?php echo get_template_directory_uri() . '/image/service_seizou.png' ?>" alt="service_seizou">
    </a>
    <a href="">
      <img class='service-img' id='service_zaiko' src="<?php echo get_template_directory_uri() . '/image/service_zaiko.png' ?>" alt="service_zaiko">
    </a>
    <a href="">
      <img class='service-img' id='service_zyuhattyu' src="<?php echo get_template_directory_uri() . '/image/service_zyuhattyu.png' ?>" alt="service_zyuhattyu">
      <a href="">
      </a>
      <img class='service-img' id='service_kiroku' src="<?php echo get_template_directory_uri() . '/image/service_kiroku.png' ?>" alt="service_kiroku">
    </a>
  </div>


  <!-- 導入流れの部分 -->
  <div class='flow-page'>
    <div class='flex-center-box flex-column '>
      <img src="<?php echo get_template_directory_uri() . '/image/flow_text.svg' ?>" alt="flow_text">
      <h2>導入までの流れ</h2>
    </div>
    <div class='flex-center-box flow-page-box'>
      <div class='flow-page-item'>
        <img class='flow-title' src="<?php echo get_template_directory_uri() . '/image/flow_title1.svg' ?>" alt="flow_title1">
        <img class='flow-figure' src="<?php echo get_template_directory_uri() . '/image/flow_figure1.png' ?>" alt="flow_figure1">
      </div>
      <div class='flow-page-item'>
        <img class='flow-title' src="<?php echo get_template_directory_uri() . '/image/flow_title2.svg' ?>" alt="flow_title2">
        <img class='flow-figure' src="<?php echo get_template_directory_uri() . '/image/flow_figure2.png' ?>" alt="flow_figure2">
      </div>
      <div class='flow-page-item'>
        <img class='flow-title' src="<?php echo get_template_directory_uri() . '/image/flow_title3.svg' ?>" alt="flow_title3">
        <img class='flow-figure' src="<?php echo get_template_directory_uri() . '/image/flow_figure3.png' ?>" alt="flow_figure3">
      </div>
      <div class='flow-page-item'>
        <img class='flow-title' src="<?php echo get_template_directory_uri() . '/image/flow_title4.svg' ?>" alt="flow_title4">
        <img class='flow-figure' src="<?php echo get_template_directory_uri() . '/image/flow_figure4.png' ?>" alt="flow_figure4">
      </div>
    </div>
  </div>


</main>
<?php get_footer(); ?>
</body>