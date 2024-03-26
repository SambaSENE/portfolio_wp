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
<i class="fa fa-opera"></i>
<section class="contents a-propos">
    <h2 class="title-item"> A PROPOS</h2>

    <article class="the-content">
 
    <article class="picture">
            <!-- <img src="https://images.unsplash.com/photo-1710403690356-e651c9730491?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="tasse de cafe" srcset=""> -->
        </article>
        <?php

        $arg = array(
            'post_type' => 'post',
            'category_name' => 'a-propos',
            'posts_per_page' => 1,
            'name' => 'a-propos' // correspond au  slug de l'article
        );

        $wp_query = new WP_Query($arg); ?>

        <article class="item">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <div><?php the_content(); ?></div>
                    

            <?php endwhile;
            endif; ?>

        </article>
        
        
    </article>

</section>


<?php get_footer(); ?>