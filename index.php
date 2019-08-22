<?php get_header();?>


<div class="page_title_banner blog_page_four_title_img">
    <div class="page_title_banner_overlay"></div>
    <div class="page_title_banner_cell">
        <div class="container">
            <div class="row">
                <div class="page_title_banner_cell_text text-center">
                    <h2 class="wow fadeInUp" data-wow-delay="500ms">Blog Standard</h2>
                </div>
            </div>
        </div><!--container-->
    </div><!--B_latest_news-->
</div><!--.Blog_1_title-->



<div class="Blog_standard_grid_page_blog B_page_four">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">
                <div class="blog_three_pd">
                    <div class="row">
                    <?php
                        if(have_posts()):while(have_posts()):the_post();

                        get_template_part('template-parts/content',get_post_format());
                    ?>
                        
                        <?php
                            endwhile;
                        ?>

						<div class="pageedit blog_standard_single">							
							<nav class="navigation pagination" role="navigation">
								<?php the_posts_pagination( array(
                                    'mid_size' => 3,
                                    'prev_text' => __( 'Previous', 'textdomain' ),
                                    'next_text' => __( 'Next', 'textdomain' ),
                                ) ); ?>

							</nav>						
						</div>	
                        <?php 
                            else:
                             get_template_part('template-parts/content','none');  
                            endif;
                            wp_reset_postdata(); 
                        ?>								
                    </div><!-- row -->
                </div><!-- blog_three_pd -->
            </div><!-- col-md-8 -->

            <div class="col-md-3">
                <div class="blog_right_sidebaR">
                    <?php 
                        dynamic_sidebar('themx-blog-sidebar');
                    ?>

                </div><!-- blog_right_sidebaR -->
            </div><!-- col-md-4 -->
        </div><!-- row -->
    </div><!-- container -->
</div><!-- Blog_standard_grid_page_blog -->



<?php get_footer();?>