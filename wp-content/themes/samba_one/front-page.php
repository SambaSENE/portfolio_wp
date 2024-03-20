<?php get_header(); ?>

<section class="contents">

    <?php if (have_posts()) :

        while (have_posts()) : the_post(); ?>

            <article class="banner">

                    <?php the_content() ; ?>

                    <a class="btn" href="http://">Me Contacter</a>
            </article>

    <?php
        endwhile;

    endif; ?>

</section>

<i class="fa fa-opera"></i>
<section class="content">
    
    <?php 

        $arg = array(
            'post_type' => 'post',
            'category_name' => 'a-propos',
            'posts_per_page' => 1 , 
            'name' => 'a-propos' // correspond au  slug de l'article
        );
    
        $wp_query = new WP_Query( $arg );
        
        if (have_posts()): while(have_posts()) : the_post();
    ?>

    <article>
        <h2><?php the_title(); ?></h2>
        <p><?php the_content(); ?></p>
    </article>

    <?php endwhile; endif; ?>
</section>

<?php get_footer(); ?>