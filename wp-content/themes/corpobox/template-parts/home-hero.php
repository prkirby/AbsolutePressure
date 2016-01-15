<?php
/**
 * @package Corpobox
 */
?>

<section id="home-hero">
<div class="entry-content" <?php $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id(), 'corpobox-medium' ); ?> style="background:<?php echo esc_attr( get_theme_mod( 'corpobox_link_color', '#00a5e7' ) ); ?><?php if  ( $thumbnail ) { ?> url(<?php echo $thumbnail[0]; ?>) no-repeat; background-position: 50%; background-size: cover<?php } ?>;">

	<div class="hero">		
		<h1><?php the_title(); ?></h1>
		<?php the_excerpt(); ?>
	</div>

</div><!-- .entry-content -->
</section>