<?php get_header(); ?>
<section class="contents">
   
    <?php if (have_posts()) :
        while (have_posts()) : the_post(); ?>

            <article class="content-items">
                <h2><?php the_title(); ?></h2>
                <p><?php the_content() ; ?></p>
            </article>

    <?php
        endwhile;
    endif; ?>
</section>
<?php get_footer(); ?>