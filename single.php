<?php get_header();?>
        
        <div class="page_title_banner blog_page_four_title_img">
            <div class="page_title_banner_overlay"></div>
            <div class="page_title_banner_cell">
                <div class="container">
                    <div class="row">
                        <div class="page_title_banner_cell_text text-center">
                            <h2 class="wow fadeInUp" data-wow-delay="300ms">Blog Single</h2>
                        </div>
                    </div>
                </div><!--container-->
            </div><!--B_latest_news-->
        </div><!--.Blog_1_title-->



        <div class="Blog_single_p_page_blog">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">

                    <?php
                        if(have_posts()):while(have_posts()):the_post();
                            get_template_part('template-parts/content','single');

                        endwhile;
                    ?>

                        
                    <?php
                        else:
                            get_template_part('template-parts/content','none');
                        endif;
                    ?>
                    </div><!-- col-md-8 -->
                    <?php if(is_active_sidebar('themx-blog-sidebar')) {?>
                    <div class="col-md-4">
                        <div class="blog_right_sidebaR">
                            <?php dynamic_sidebar('themx-blog-sidebar');?>
                        </div><!-- blog_right_sidebaR -->
                    </div><!-- col-md-4 -->
                <?php } ?>
                </div><!-- row -->
            </div><!-- containenr -->
        </div><!-- Blog_single_p_page_blog -->


<?php get_footer();?>