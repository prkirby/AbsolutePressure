<?php
/*
Pushes the services offered in a table format
*/

// The Query

$args = array (
    'post_type' => 'services_offered',
    'orderby' => 'meta_value_num',
    'meta_key' => 'order',
    'order' => 'ASC'
);
$the_query = new WP_Query($args);

 ?>

<?php if ( $the_query->have_posts() ) : ?>
    <div class="services">
    <?php while ( $the_query->have_posts() ) : ?>
        <?php $the_query->the_post(); ?>
        <div id="service-<?php the_ID(); ?>" class="service">
                <h1 class="service-title"> <?php the_title() ?> </h1>
                <hr/>
                <div class="service-content">
                    <?php

                    $images = get_field('what_we_do_gallery');

                    if( $images ): ?>
                        <div id="service-<?php the_ID(); ?>-slider" class="flexslider services-offered-slider">
                            <ul class="slides">
                                <?php foreach( $images as $image ): ?>
                                    <li>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                        <p><?php echo $image['caption']; ?></p>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>

                    <?php endif; ?>
                    <div class="service-desc"> <?php the_content(); ?> </dvi>
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
