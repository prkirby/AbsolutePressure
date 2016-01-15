<?php
/**
 * The template used for Home page
 *
 * @package Corpobox
 */
?>

<?php
	get_template_part( 'template-parts/home', 'hero' );
?>

<?php if ( is_active_sidebar( 'home-one-prebefore' ) ) { ?>
<section id="prebefore-home-widget">

<?php dynamic_sidebar( 'home-one-prebefore' ); ?>

</section>
<?php } ?>

<?php if ( is_active_sidebar( 'home-one-before' ) ) { ?>
<section id="before-home-widget">
<div class="entry-content">
<div class="grid<?php $sidebars_widgets = wp_get_sidebars_widgets(); echo count($sidebars_widgets['home-one-before']); ?> clearfix">
<?php dynamic_sidebar( 'home-one-before' ); ?>
</div>
</div><!-- .entry-content -->
</section>
<?php } ?>

<?php if ( '' != get_the_content() ) : ?>

<section id="home-content">
<div class="entry-content">

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php the_content(); ?>

	<?php edit_post_link( __( 'Edit', 'corpobox' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->
</div><!-- .entry-content -->
</section>

<?php endif; // home-content ?>

<?php if ( is_active_sidebar( 'home-one-after' ) ) { ?>
<section id="after-home-widget">
<div class="entry-content">
<div class="grid<?php $sidebars_widgets = wp_get_sidebars_widgets(); echo count($sidebars_widgets['home-one-after']); ?> clearfix">
<?php dynamic_sidebar( 'home-one-after' ); ?>
</div>
</div><!-- .entry-content -->
</section>
<?php } ?>