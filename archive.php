<?php

/**
 * archive template
 * 
 * @package ziqacgf-theme
 */

get_header();
?>

<section class="section is-flex">
    <div class="container">
        <?php
        while (have_posts()) {
            the_post(); ?>
            <div>
                <h2><?php the_title(); ?></h2>
                <div>
                    <?php the_excerpt(); ?>
                </div>
            </div>
        <?php } ?>
    </div>
</section>

<?php
get_footer();
?>