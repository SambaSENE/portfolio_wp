<?php get_header(); ?>

<section class="contents">

    <h1>single.php</h1>

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
</section>

<?php get_footer(); ?>