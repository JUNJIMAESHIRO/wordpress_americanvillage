

<?php 
if(have_posts()) :
    while (have_posts()) :
        the_post(); ?>
        <div id='post-<? the_ID(); ?>' <?php post_class(); ?>>
                <h2 <?php the_title(); ?>></h2>
                <ul>
                    <li>
                        <date><?php echo get_the_date(); ?></date>
                    </li>
                    <li><?php the_category(); ?></li>
                </ul>
                <?php the_content(); ?>
            </div>
        <?php endwhile;
    else : ?>
        <p>表示する記事がありません</p>
    <?php endif; ?>