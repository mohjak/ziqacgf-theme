<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package ziqacgf-theme
 */

get_header();
?>

<div class="section">
    <div class="container">
        <div class="title"><?php _e('Page Not Found', 'ziqacgf') ?></div>
        <a href="<?php echo site_url('/') ?>"><?php _e('Go to homepage') ?></a>
    </div>
</div>

<?php
get_footer();
?>