<?php /* Template Name: Sexy template */ ?>
<?php
    if ( have_posts() ) :
        ?>
        <?php
        /* Start the Loop */
        while ( have_posts() ) :
            the_post();
            ?>
            <p><?php the_title() ?></p>
            <?php

        endwhile;
    endif;