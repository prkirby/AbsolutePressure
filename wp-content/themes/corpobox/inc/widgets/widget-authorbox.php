<?php
/**
 * Author Box Widget
 * @package Corpobox
 * @require add-profile-fields.php see functions.php
 */
add_action('widgets_init', create_function('', 'register_widget("corpobox_authorbox");'));

class corpobox_authorbox extends WP_Widget {
    function __construct() {
	parent::__construct(
			'corpobox_authorbox',
			__( 'Corpobox Author Box', 'corpobox' ),
        				array(
				'classname' => 'corpobox_authorbox',
				'description' => __( 'Corpobox theme widget to display a Author info', 'corpobox' )
				)
			);
    }

    function widget( $args, $instance ) {
        extract($args);
        $title = ( ! $instance['title'] ? false : apply_filters( 'widget_title', $instance['title'] ) );

        echo $before_widget;
        echo '<div class="author-info">';
        if ( $title )
            echo $before_title . $title . $after_title;

// Get Author Data
$author             = get_the_author();
$author_description = get_the_author_meta( 'description' );
$author_url         = esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) );
$author_avatar      = get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'ava_size', 75 ) );

// Only display if author has a description
if ( $author_description ) : ?>
		
    <div class="author-info">

        <div class="author-info-inner clearfix">

            <?php if ( $author_avatar ) { ?>
                <div class="author-avatar">
                    <a href="<?php echo $author_url; ?>" rel="author">
                        <?php echo $author_avatar; ?>
                    </a>
                </div><!-- .author-avatar -->
            <?php } ?>

            <div class="author-description">
	<h4><?php printf( __( '%s', 'corpobox' ), $author ); // the_author_meta( 'display_name' ); ?></h4>
                <p><?php echo $author_description; ?></p>
                <p><a href="<?php echo $author_url; ?>" title="<?php _e( 'View all author posts', 'corpobox' ); ?>"><?php printf( __( 'View all posts by %s', 'corpobox' ), $author ); ?></a></p>
            </div><!-- .author-description -->

        </div><!-- .author-info-inner -->

	<div class="author-follow">
		<?php if ( get_the_author_meta( 'twitter' ) ) { ?>
	<a href="http://twitter.com/<?php the_author_meta( 'twitter' ); ?>" title="<?php the_author_meta( 'display_name' ); ?> on Twitter"><i class="fa fa-twitter"></i></a>
		<?php } ?>
		<?php if ( get_the_author_meta( 'google' ) ) { ?>
	<a href="http://plus.google.com/<?php the_author_meta( 'google' ); ?>?rel=author" title="<?php the_author_meta( 'display_name' ); ?> on Google plus"><i class="fa fa-google-plus"></i></a>
		<?php } ?>
		<?php if ( get_the_author_meta( 'fb' ) ) { ?>
	<a href="http://www.facebook.com/<?php the_author_meta( 'fb' ); ?>" title="<?php the_author_meta( 'display_name' ); ?> on Facebook"><i class="fa fa-facebook"></i></a>
		<?php } ?>
	</div><!-- .author-follow -->

    </div><!-- .author-info -->

<?php endif; ?>

<?php
        echo '</div>';
        echo $after_widget;
    }

    function update( $new_instance, $old_instance ) {
        $instance = $old_instance;
        $instance['title'] = '' != $new_instance['title'] ? strip_tags( $new_instance['title'] ) : false;
        return $instance;
    }

    function form( $instance ) {
        $instance = wp_parse_args( (array) $instance, array( 'title' => __( 'Author info', 'corpobox' ) ) );
        $title = strip_tags( $instance['title'] );
?>

<p>This widget will show author info description and avatar.</p>

<p>
<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e( 'Title', 'corpobox' ); ?>:</label>
<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
</p>


<?php
    }
} 