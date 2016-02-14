<?php
/**
 * Template: page.php
 *
 * @package EvoLve
 * @subpackage Template
 */
get_header();
$xyz = "";
$evolve_layout = evolve_get_option('evl_layout', '2cl');
$evolve_post_layout = evolve_get_option('evl_post_layout', 'two');
$evolve_nav_links = evolve_get_option('evl_nav_links', 'after');
$evolve_header_meta = evolve_get_option('evl_header_meta', 'single_archive');
$evolve_category_page_title = evolve_get_option('evl_category_page_title', '1');
$evolve_excerpt_thumbnail = evolve_get_option('evl_excerpt_thumbnail', '0');
$evolve_share_this = evolve_get_option('evl_share_this', 'single');
$evolve_post_links = evolve_get_option('evl_post_links', 'after');
$evolve_similar_posts = evolve_get_option('evl_similar_posts', 'disable');
$evolve_featured_images = evolve_get_option('evl_featured_images', '1');
$evolve_edit_post = evolve_get_option('evl_edit_post', '0');
$evolve_thumbnail_default_images = evolve_get_option('evl_thumbnail_default_images', '0');
$evolve_posts_excerpt_title_length = intval(evolve_get_option('evl_posts_excerpt_title_length', '40'));
$evolve_blog_featured_image = evolve_get_option('evl_blog_featured_image', '0');
if (evolve_lets_get_sidebar_2() == true):
    get_sidebar('2');
endif;
?>

<!--BEGIN #primary .hfeed-->

<div id="primary" class="<?php evolve_layout_class($type = 1); ?>">

    <?php get_template_part('services_offered')?>


    <!--END #primary .hfeed-->
</div>


<?php if (evolve_lets_get_sidebar() == true): ?>
    <?php get_sidebar(); ?>
<?php endif; ?>

<?php get_footer(); ?>
