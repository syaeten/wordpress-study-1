<?php get_header(); ?>

<main class="page-front">

  <!-- Top画像の部分 -->
  <div class='right-banner'>
    <img class='banner-svg' src="<?php echo get_template_directory_uri() . '/image/banner.svg' ?>" alt="banner_svg">
    <a href="" class='contact-btn'>
      <img src="<?php echo get_template_directory_uri() . '/image/contact_btn.svg' ?>" alt="contact_btn">
    </a>
  </div>
  <img class='bg-img' src="<?php echo get_template_directory_uri() . '/image/top_main_img.png' ?>" alt="top_main_img">

  <!-- サービス一覧の部分 -->
  <div class='service-page flex-center-box'>
    <div class='service-page-title'>
      <img src="<?php echo get_template_directory_uri() . '/image/service_text.svg' ?>" alt="service_text">
      <h2>サービス一覧</h2>
    </div>
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
        <p>デモを通して機能を紹介させていただきます。一部の機能からでも導入いただけますのでご興味のある機能に絞ったご提案も可能です。</p>
      </div>
      <div class='flow-page-item'>
        <img class='flow-title' src="<?php echo get_template_directory_uri() . '/image/flow_title2.svg' ?>" alt="flow_title2">
        <img class='flow-figure' src="<?php echo get_template_directory_uri() . '/image/flow_figure2.png' ?>" alt="flow_figure2">
        <p>利用する機能やライセンス数を決定いただき発注いただきます。 クラウドサインを利用した電子契約でお願いしております。</p>
      </div>
      <div class='flow-page-item'>
        <img class='flow-title' src="<?php echo get_template_directory_uri() . '/image/flow_title3.svg' ?>" alt="flow_title3">
        <img class='flow-figure' src="<?php echo get_template_directory_uri() . '/image/flow_figure3.png' ?>" alt="flow_figure3">
        <p>導入のスケジュールや進め方について打ち合わせします。</p>
      </div>
      <div class='flow-page-item'>
        <img class='flow-title' src="<?php echo get_template_directory_uri() . '/image/flow_title4.svg' ?>" alt="flow_title4">
        <img class='flow-figure' src="<?php echo get_template_directory_uri() . '/image/flow_figure4.png' ?>" alt="flow_figure4">
        <p>導入支援サービスを申込みいただいたお客様に現地またはオンラインでの支援をさせていただきます。</p>
      </div>
    </div>
  </div>


  <div class='qa-page flex-center-box'>
    <div>
      <h3>Q&A</h3>
      <h2>よくあるご質問</h2>
      <div class="qa-item">
        <h4>Q1. セキュリティはどうなっていますか?</h4>
        <p>A.世界シェアNo.1のAWS（Amazon Web Service）サーバー上にデータを保管しているので、安全で快適に利用可能です。</p>
      </div>
      <div class="qa-item">
        <h4>Q2. 対応するデバイスについて教えてください。</h4>
        <p>A.現場で記録するには、iOS・Androidに対応するスマートフォン・タブレットが必要となります。</p>
        <p>iOS 12.0 以上（100MB以上のメモリ空き容量） Android 7.0 以上（100MB以上のメモリ空き容量）</p>
      </div>
    </div>
  </div>


</main>
<?php get_footer(); ?>
</body>