<!-- Tomori header -->
<?php get_header(); ?>
<!-- tomori headerここまで -->
<!-- Junji main_visual -->
<div class="main_visual_guideline">
  <div class="main_visual">
    <div class="main_sub_box1">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="AmericanVillage_logo">
    </div>
    <div class="main_swiper-container">
    <div class="main_swiper-wrapper">
      <!-- Slides1枚目 -->
      <div class="main-slide">
        <picture>
          <source media="(min-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/visual_1_sp.pngg">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/visual_1_pc.png" alt="AmericanVillageの写真" class="main_img alt="">
        </picture>
      </div>
      <!-- Slides2枚目 -->
      <div class="mainr-slide">
        <picture>
          <source media="(min-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/visual_2_sp.pngg">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/visual_2_pc.png" alt="AmericanVillageの写真" class="main_img alt="">
        </picture>
      </div>
      <!-- Slides3枚目 -->
      <div class="main-slide">
        <picture>
          <source media="(min-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/visual_3_sp.pngg">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/visual_3_pc.png" alt="AmericanVillageの写真" class="main_img alt="">
        </picture>
      </div>
      <!-- Slides4枚目 -->
      <div class="main-slide">
        <picture>
          <source media="(min-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/visual_4_sp.pngg">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/visual_4_pc.png" alt="AmericanVillageの写真" class="main_img alt="">
        </picture>
      </div>
      <!-- Slides5枚目 -->
      <div class="main-slide">
        <picture>
          <source media="(min-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/visual_5_sp.pngg">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/visual_5_pc.png" alt="AmericanVillageの写真" class="main_img alt="">
        </picture>
      </div>
      <!-- Slides6枚目 -->
      <div class="main-slide">
        <picture>
          <source media="(min-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/visual_6_sp.pngg">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/visual_6_pc.png" alt="AmericanVillageの写真" class="main_img alt="">
        </picture>
      </div>
      <!-- Slides7枚目 -->
      <div class="main-slide">
        <picture>
          <source media="(min-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/visual_7_sp.pngg">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/visual_7_pc.png" alt="AmericanVillageの写真" class="main_img alt="">
        </picture>
      </div>
    </div>
    </div>
    <!-- sliderのjsを読み込む -->

    <
    <picture class="main_sub_box2">
      <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/visual_text_sp.png">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/visual_text_pc.png" alt="">
    </picture>
  </div>
  <p class="main_textcontent">進化し続ける「街」<br class="sp_br">アメリカンビレッジマガジン</p>
</div>
<!-- Junji main_visualここまで -->
<!-- Erina blog -->
<div class="content">
  <h2>Latest Article</h2>
  <ul class="container">
    <?php
    if (have_posts()) :
      while (have_posts()) :
        the_post(); ?>
        <li class="item">
          <?php the_post_thumbnail(); ?>
          <date><?php echo get_the_date(); ?></date>
          <p><?php the_title(); ?></p>
          <div class="read_more">READ MORE
            <p></p>
          </div>
        </li>

<?php endwhile;
    else : ?>
<p>表示する記事がありません</p>
<?php endif; ?>
</ul>
</div>
<!-- Erina blog -->

<!-- Tomori footer -->
<?php get_footer(); ?>