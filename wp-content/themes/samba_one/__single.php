<?php get_header(); ?>

<section class="contents">

   <h1 >single.php</h1>

    <?php if (have_posts()) :

        while (have_posts()) : the_post(); ?>


            <article class="content-items">

                <h2 class="title-item"><?php the_title(); ?></h2>

                <p><?php the_content() ; ?></p>

            </article>

    <?php
        endwhile;
    endif; ?>
</section>


<?php get_footer(); ?>