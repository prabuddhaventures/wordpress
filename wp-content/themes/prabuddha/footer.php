<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after. Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

<div class="footer">
    <div class="footer_l">All rights reserved to Prabuddha Techno Ventures</div>
    <div class="footer_r">
        <?php wp_nav_menu(array('menu' => 'Footer_Menu', 'items_wrap' => '<ul>%3$s</ul>', 'theme_location' => 'primary')); ?>
    </div>
</div>
</div>



<?php
/* Always have wp_footer() just before the closing </body>
 * tag of your theme, or you will break many plugins, which
 * generally use this hook to reference JavaScript files.
 */

wp_footer();
?>
</body>
</html>
