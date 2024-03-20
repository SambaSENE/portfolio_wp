<?php get_header(); ?>

<section class="contents">

    <?php if (have_posts()) :
        while (have_posts()) : the_post(); ?>

            <article>
                <h2 class="title"><?php the_title() ;?></h2>
                
            </article>

    <?php
        endwhile;
    endif; ?>
    <?php
    $arg = array(
        'post_type' => 'post',
        'category_name' => 'competences',
        'post_per_page' => 3
    );

    $wp_query =  new WP_Query( $arg);
    ?>
    <?php if( $wp_query->have_posts()) : while($wp_query->have_posts()) : $wp_query->the_post(); ?>
        <article class="content-article">
        <h2><?php the_title() ;?></h2>
        <ul>
            <li>
                <?php the_content() ;?>
            </li>
        </ul>
        </article>
    <?php endwhile; endif ?>
</section>
<?php get_footer(); ?>