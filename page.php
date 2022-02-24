<?php

/**
 * The page template
 * 
 * @package ziqacgf-theme
 */

get_header();
?>

<section class="section is-flex">
    <div class="container">
        <div class="is-flex is-justify-content-center">
            <?php the_content() ?>
        </div>
    </div>
</section>

<?php
get_footer()
?>