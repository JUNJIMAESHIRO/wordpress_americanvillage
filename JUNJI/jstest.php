<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/reset.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
  <title>wordpress_americanvillage</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script>
  $(function() {
      var mySwiper = new Swiper ('.swiper-container', {
        effect: "fade",
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false
        },
        speed: 1500,
        simulateTouch: false,
      })
    });
  </script>
</head>

<body>
  <header>
    <div class="header_right">
      <ul>
        <li>Menu01</li>
        <li>Menu02</li>
        <li>Menu03</li>
        <li>Menu04</li>
      </ul>
    </div>
  </header>
  <div class="main_visual_guideline">
    <div class="main_visual">
      <div class="main_sub_box1">
        <img src="./assets/img/logo.png" alt="AmericanVillage_logo">
      </div>
      <div class="main_swiper-container">
      <div class="main_swiper-wrapper">
      <!-- Slides1枚目 -->
        <div class="main-slide">
          <picture>
            <source media="(min-width: 767px)" srcset="./assets/img/visual_1_sp.pngg">
            <img src="./assets/img/visual_1_pc.png" alt="AmericanVillageの写真" class="main_img alt="">
          </picture>
        </div>
        <!-- Slides2枚目 -->
        <div class="mainr-slide">
          <picture>
            <source media="(min-width: 767px)" srcset="./assets/img/visual_2_sp.pngg">
            <img src="./assets/img/visual_2_pc.png" alt="AmericanVillageの写真" class="main_img alt="">
          </picture>
        </div>
        <!-- Slides3枚目 -->
        <div class="main-slide">
          <picture>
            <source media="(min-width: 767px)" srcset="./assets/img/visual_3_sp.pngg">
            <img src="./assets/img/visual_3_pc.png" alt="AmericanVillageの写真" class="main_img alt="">
          </picture>
        </div>
          <!-- Slides4枚目 -->
        <div class="main-slide">
          <picture>
            <source media="(min-width: 767px)" srcset="./assets/img/visual_4_sp.pngg">
            <img src="./assets/img/visual_4_pc.png" alt="AmericanVillageの写真" class="main_img alt="">
          </picture>
        </div>
          <!-- Slides5枚目 -->
        <div class="main-slide">
          <picture>
            <source media="(min-width: 767px)" srcset="./assets/img/visual_5_sp.pngg">
            <img src="./assets/img/visual_5_pc.png" alt="AmericanVillageの写真" class="main_img alt="">
          </picture>
        </div>
          <!-- Slides6枚目 -->
        <div class="main-slide">
          <picture>
            <source media="(min-width: 767px)" srcset="./assets/img/visual_6_sp.pngg">
            <img src="./assets/img/visual_6_pc.png" alt="AmericanVillageの写真" class="main_img alt="">
          </picture>
        </div>
          <!-- Slides7枚目 -->
        <div class="main-slide">
          <picture>
            <source media="(min-width: 767px)" srcset="./assets/img/visual_7_sp.pngg">
            <img src="./assets/img/visual_7_pc.png" alt="AmericanVillageの写真" class="main_img alt="">
          </picture>
        </div>
      </div>
      </div>
        <picture class="main_sub_box2">
          <source media="(max-width: 767px)" srcset="./assets/img/visual_text_sp.png">
          <img src="./assets/img/visual_text_pc.png" alt="">
        </picture>
      </div>
      <p class="main_textcontent">進化し続ける「街」<br class="sp_br">アメリカンビレッジマガジン</p>
    </div>
  <footer>
    <p>Copyright <small>&copy;</small> JUNJI ERINA TOMORI Inc.</p>
  </footer>
</body>

</html>

