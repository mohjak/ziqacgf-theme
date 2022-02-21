<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ziqacgf-theme
 */

?>

<footer class="footer py-3 mt-auto section">
    <div class="content has-text-centered">
        <div class="social-icons">
            <a href="https://www.facebook.com/IslamQAcom" target="_blank" title="Facebook" class="has-text-white"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="https://twitter.com/IslamQAcom" target="_blank" title="Twitter" class="has-text-white"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href="https://www.youtube.com/channel/UCNiLZ4Nq_eh1YeItHqahtVg" target="_blank" title="Youtube" class="has-text-white"><i class="fa fa-youtube" aria-hidden="true"></i></a>
            <a href="https://soundcloud.com/islamqa" target="_blank" title="Soundcloud" class="has-text-white"><i class="fa fa-soundcloud" aria-hidden="true"></i></a>
            <a href="https://www.instagram.com/islamqa/" target="_blank" title="instagram" class="has-text-white"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        </div>
        <div class="has-text-centered">
            <p>
                <?php printf(esc_html__('Copyright &copy; All rights reserved to website %1$s %2$s.', 'ziqacgf'), '<a class="has-text-white" href="https://islamqa.info/">' . __("IslamQA", "ziqacgf") . '</a>', '<span id="year">' . date("Y") . '</span>'); ?>
            </p>
            <p>
                <?php printf(esc_html__('Powered By %1$s', 'ziqacgf'), '<a class="has-text-white" href="https://zadgroup.net">' . __('ZAD Group', 'ziqacgf') . '</a>'); ?>
            </p>
        </div>
    </div>
</footer>

<script src="https://kit.fontawesome.com/aaa6391f98.js" crossorigin="anonymous"></script>

<?php wp_footer() ?>

</body>

</html>