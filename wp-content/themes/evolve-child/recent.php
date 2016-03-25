<?php
/*
Output loop for Our Work post types
*/

// The Query

$args = array (
    'post_type' => 'post',
    'orderby' => 'date'
);
$the_query = new WP_Query($args);
// The Loop
?>
<div class="recent-content">
<?php if ( $the_query->have_posts() ) : ?>
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <div class="recent-post-single">
        <hr class="recent-hr"/>
        <h2 class="recent-title"><?php the_title() ?></h2>
        <div class="recent-post-content"><?php the_content() ?></div>
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
