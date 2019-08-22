<?php
/**
 * Template part for displaying posts
 *
 * @package WordPress
 * @subpackage Themx
 * @since 1.0.0
 */
?>
<?php  $sticky = !is_sticky() ? 'non-sticky' : 'sticky' ?>
<article id="post-<?php the_ID(); ?> <?php post_class($sticky); ?>">
<div class="b4_single_blog_item">
    <div class="col-md-5">
        <div class="b4_single_blog_img">
            <?php if(has_post_thumbnail()) the_post_thumbnail();?>
        </div>
    </div>
    <div class="col-md-7">
        <div class="b4_single_blog_content text-center">
            <div class="blog_standard_tite">
                <h4> <?php echo esc_html__('In', 'themx');?> <?php the_category(' , ');?></h4>
                <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                <h5 class="blog_standard_single_admin blog_standard_grid_admin">
                    <?php echo esc_html__('By', 'themx');?><a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'),get_the_author_meta('user_nicename')));?>">-<?php the_author();?></a>
                    <span><?php echo esc_html__('|', 'themx');?></span>  
                    <span class="color_same2"><?php echo esc_html__(get_the_time('F'));?></span> <?php echo esc_html__(get_the_time('d'));?>, <?php echo esc_html__(get_the_time('Y'));?>
                </h5>
            </div>

            <p><?php
            if( ! has_excerpt()){
                echo wp_trim_words( get_the_content(), 48, '...' );
            }else{
                the_excerpt();
            }
            ?></p>
        </div>
    </div>
</div>
<!-- b4_single_blog_item -->
</article>