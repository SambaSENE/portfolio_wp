<?php get_header(); ?>

<section class="contents banner">

    <?php if (have_posts()) :

        while (have_posts()) : the_post(); ?>

            <article class="content-item banner">

                <?php the_content(); ?>

                <a class="btn" href="http://">Me Contacter</a>
            </article>

    <?php
        endwhile;

    endif; ?>

</section>

<!-- <i class="fa fa-opera"></i> -->
<section class="contents a-propos">

    <?php

    $arg = array(
        'post_type' => 'post',
        'category_name' => 'a-propos',
        'posts_per_page' => 1,
        'name' => 'a-propos' // correspond au  slug de l'article
    );

    $wp_query = new WP_Query($arg);

    if (have_posts()) : while (have_posts()) : the_post();
    ?>
            <h2 class="title-item a-propos-title"><?php the_title(); ?></h2>

            <div class="content-item"><?php the_content(); ?></div>



    <?php endwhile;
    endif; ?>
</section>
<section class="contents contact-form">

    <?php

    $arg = array(
        'post_type' => 'post',
        'category_name' => 'me-contacter',
        'posts_per_page' => 1,
        'name' => 'me-contacter' // correspond au  slug de l'article
    );

    $wp_query = new WP_Query($arg);

    if (have_posts()) : while (have_posts()) : the_post();
    ?>
            <h2 class="title-item"><?php the_title(); ?></h2>
            <div class="content-item"><?php the_content(); ?></div>
    <?php endwhile;
    endif; ?>
</section>
<?php get_footer(); ?>