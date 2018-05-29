<?php
/**
* Template Name: Partido
*/
?>
<?php while (have_posts()) : the_post(); ?>
    <article <?php post_class('bgc--white pd_bottom--x20'); ?>>
        <header class="container ">
            <div class="bgc--red p-3 d-inline-block hidden">
                <div class="title cl--white txt_size--em3">
                    <?php the_title(); ?>
                </div>
            </div>
            <div class="bgc--red p-3 d-inline-block mg_bottom--x20">
                <div class="cl--white txt_size--em1 ">
                    <?php get_template_part('templates/entry-meta'); ?>
                </div>
            </div>
        </header>
        <div class="content_event container pd_top--x50">
            <div class="row align-items-center">
                <?php the_content(); ?>
            </div>
        </div>
    </article>
<?php endwhile; ?>

