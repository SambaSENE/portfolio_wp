<?php get_header() ;?>
    <h1>ARCHIVE.PHP</h1>
    <section class="contents">
        <?php if(have_posts()) : while(have_posts()) : the_post()?>
            <article class="post">
                <h2><?php the_title(); ?></h2>
              
                <div class="content-post">
                <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile; endif?>
    </section>
<?php get_footer() ;?>