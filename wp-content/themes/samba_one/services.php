<?php

/*
  Template Name: a-propos
  Template Name: Full-width
Template Post Type: post, page, product
*/

get_header(); ?>

<h1>serives.php</h1>

<section class="contents">


    <?php if (have_posts()) :

        while (have_posts()) : the_post(); ?>


            <article>

                <h2><?php the_title(); ?></h2>
                
                <p><?php the_content(); ?></p>

            </article>

    <?php
        endwhile;
        
    endif; ?>
</section>
<?php get_footer(); ?>