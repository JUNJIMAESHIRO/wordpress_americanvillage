<!-- Tomori header -->
<?php get_header(); ?>
<!-- tomori headerここまで -->
<!-- Junji main_visual -->
<div class="main_visual_guideline">
  <div class="main_visual">
    <div class="main_sub_box1">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="AmericanVillage_logo">
    </div>
    <picture>
      <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/visual_1_sp.png">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/visual_1_pc.png" alt="AmericanVillageの写真" class="main_img">
    </picture>
    <picture class="main_sub_box2">
      <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/visual_text_sp.png">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/visual_text_pc.png" alt="" class="sub_box2">
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
          <div class="read_more"><a href="<?php the_permalink(); ?>">READ MORE</a>  
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