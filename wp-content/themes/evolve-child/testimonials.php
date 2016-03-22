<?php
/*
Output loop for Our Work post types
*/

// The Query

$args = array (
    'post_type' => 'testimonials',
    'orderby' => 'rand'
);
$the_query = new WP_Query($args);
// The Loop
?>
<div class="testimonial-content">
<?php if ( $the_query->have_posts() ) : ?>
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

    <div id="testimonial--<?php the_ID(); ?>" class="testimonial">
        <div class="testimonial-image">
                <img src="<?php the_field('featured-image'); ?>"/>
        </div>
        <div class="testimonial-info">
            <h3 class="testimonial-reviewer"><?php the_field('reviewer'); ?></h3>
            <p class="testimonial-description"><?php the_field('testimonial'); ?></p>
        </div>
    </div>

<?php endwhile; ?>
</div>
<?php
/* Restore original Post Data */
wp_reset_postdata();
 ?>
<?php else : ?>
   <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
