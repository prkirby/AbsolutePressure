<?php
/*
Pushes the services offered in a table format
*/

// The Query

$args = array (
    'post_type' => 'our-work',
    'orderby' => 'date',
    'order' => 'ASC'
);
$the_query = new WP_Query($args);
// The Loop
?>
<div class="our-work-content">
<?php if ( $the_query->have_posts() ) : ?>
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

    <div id="our-work--<?php the_ID(); ?>" class="our-work">
        <h2 class="our-work-title"><?php the_title() ?></h2>
        <div class="our-work-images">
            <div class="before-img">
                <img class="before-img" src="<?php the_field('image_before'); ?>"/>
            </div>
            <div class="after-img">
                <img src="<?php the_field('image_after'); ?>"/>
            </div>
        </div>
        <p class="our-work-description"><?php the_content() ?></p>
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
