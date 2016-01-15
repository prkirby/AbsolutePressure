<?php
/**
 * The template used for displaying page content in homepage.php
 *
 * @package Corpobox
 */
?>

<?php
	get_template_part( 'template-parts/home', 'hero' );
?>

<section id="homecontent">
	<div class="entry-content">

<?php if ( '' != get_the_content() ) : ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php the_content(); ?>
			<?php edit_post_link( __( 'Edit', 'corpobox' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
		</article>
<?php endif; ?>

<!-- ChildGrid -->
	<?php
		$child_pages = new WP_Query( array(
			'post_type'      => 'page',
			'orderby'        => 'menu_order',
			'order'          => 'ASC',
			'post_parent'    => $post->ID,
			'posts_per_page' => 9,
			'no_found_rows'  => true,
		) );
	?>

<?php
	if ( $child_pages->have_posts() ) : ?>
		<div class="grid2 clearfix">
			<?php while ( $child_pages->have_posts() ) : $child_pages->the_post(); ?>
				<div class="col">
				<?php get_template_part( 'content', 'childpage' ); ?>
				</div>
			<?php endwhile; ?>
		</div><!-- .grid2 -->

<?php
	endif;
	wp_reset_postdata();
?>
<!-- END ChildGrid -->

	</div><!-- .entry-content -->
</section><!-- .homecontent -->