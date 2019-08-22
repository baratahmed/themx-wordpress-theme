<?php
add_action( 'widgets_init', 'themx_theme_register_sidebar' );
function themx_theme_register_sidebar() {
    register_sidebar( array(
        'name' => esc_html__( 'Main Sidebar', 'themx' ),
        'id' => 'themx-blog-sidebar',
        'description' => __( 'This Is Our Sidebar Widgets.', 'themx' ),
        'before_widget' => '<div class="Blog_standard_right_widget">',
	    'after_widget'  => '</div>',
	    'before_title'  => '<div class="right_widget_titles"><h4>',
	    'after_title'   => '</h4></div>',
    ) );
    register_sidebar( array(
        'name' => esc_html__( 'Footer Sidebar', 'themx' ),
        'id' => 'themx-footer-sidebar',
        'description' => esc_html__( 'Widgets in this area will be shown on all posts and pages.', 'themx' ),
        'before_widget' => '<div class="col-md-3 col-sm-6"><div class="footer_widget_single">',
	    'after_widget'  => '</div></div>',
	    'before_title'  => ' <h4 class="footer_title_">',
	    'after_title'   => '</h4>',
    ) );
}

//Themx - Recent Post Custom Widget

class themx_rcnt_post extends WP_Widget {

	function __construct() {
		parent::__construct(
			'themx_rcnt_post', // Base ID
			esc_html__( 'Theme - Recent Post', 'themx' ), // Name
			array( 'description' => esc_html__( 'This is custom recent post style', 'themx' ), ) // Args
		);
	}
	
	public function form( $instance ) {
		$recent_post_title = ! empty( $instance['recent_post_title'] ) ? $instance['recent_post_title'] : esc_html__( '', 'themx' );
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'recent_post_title' ) ); ?>"><?php esc_attr_e( 'Title:', 'themx' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'recent_post_title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'recent_post_title' ) ); ?>" type="text" value="<?php echo esc_attr( $recent_post_title ); ?>">
		</p>
		<?php 
	}

	public function widget( $args, $instance ) {
		echo $args['before_widget'];
		if ( ! empty( $instance['recent_post_title'] ) ) {
			echo $args['before_title'] . apply_filters( 'recent_post_title', $instance['recent_post_title'] ) . $args['after_title'];
		}
		?>
		<ul class="r-course">
			<?php
				query_posts('post_type=post&posts_per_page=3');
				if(have_posts()):while(have_posts()):the_post();
			?>
            <li>
                <div class="rcourse-img"><a href="<?php the_permalink();?>"><?php if(has_post_thumbnail()) the_post_thumbnail('themx-recent-post');?></a></div>
                <div class="rcourse-txt">
                    <p><?php the_category(' , ');?></p>
                    <a href="<?php the_permalink();?>"><h4><?php the_title();?></h4></a>
                    <a href="#"><?php echo esc_html(get_the_time('F'));?> <?php echo esc_html(get_the_time('d'));?>, <?php echo esc_html(get_the_time('Y'));?></a>
                </div>
            </li>
        <?php endwhile; endif;?>
        </ul>
        <?php
		echo $args['after_widget'];
	}

	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['recent_post_title'] = ( ! empty( $new_instance['recent_post_title'] ) ) ? sanitize_text_field( $new_instance['recent_post_title'] ) : '';

		return $instance;
	}

	
}

function themx_recent_post() {
	register_widget( 'themx_rcnt_post' );
}

add_action( 'widgets_init', 'themx_recent_post' );