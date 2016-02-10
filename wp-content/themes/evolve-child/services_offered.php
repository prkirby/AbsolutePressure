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
// The Loop
if ( $the_query->have_posts() ) {
    echo '<div class="services">';
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
        echo '<div id="service-'.get_the_ID().'" class="service">
                <h1 class="service-title">' . get_the_title() . '</h1>
                <hr/>
                <div class="service-content">
                    <img class="service-img" src="' . get_the_post_thumbnail_url() . '">
                    <p class="service-desc">' . get_the_content() . '</p>
                </div>
              </div>';
    }
    echo '</div>';
} else {
    // no posts found
}
/* Restore original Post Data */
wp_reset_postdata();
 ?>
