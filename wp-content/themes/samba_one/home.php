<?php get_header(); ?>


<section class="contents">


    <?php if (have_posts()) :

        while (have_posts()) : the_post(); ?>
            <article class="title-item">
                <h2><?php the_title() ?></h2>
                <div>
                    <?php the_content(); ?>
                </div>
            </article>


    <?php endwhile;
    endif; ?>

    <article class="post">

        <?php

        $arg = array(
            'post_type' => 'post',
            'category_name' => 'formations',
            'posts_per_page' => 1,
            'name' => 'centre-de-readaptation-de-mulhouse'  // correspond au  slug de l'article
        );

        $wp_query = new WP_Query($arg); ?>

        <article class="item">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <h2><?php the_title() ; ?></h2>
                    <div><?php the_content(); ?></div>


            <?php endwhile;
            endif; ?>

        </article>
    </article>


</section>

<?php get_footer(); ?>