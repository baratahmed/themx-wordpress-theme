<!DOCTYPE html>
<html <?php language_attributes();?>>
    <head>
        <!-- META DATA -->
        <meta charset="<?php bloginfo('charset');?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        
        <!-- TITLE OF SITE -->
        <title>Digital Home</title>
        <!-- FAVICON -->
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/images/favicon.ico" type="image/x-icon">
        
    <?php wp_head();?>
    </head>
    <body <?php body_class();?>>
        <!-- Pre-loader Start -->
        <div id="spinningSquaresG1">
            <div id="spinningSquaresG2">
                <div id="fountainTextG">
                    <div id="fountainTextG_1" class="fountainTextG">T</div>
                    <div id="fountainTextG_2" class="fountainTextG">H</div>
                    <div id="fountainTextG_3" class="fountainTextG">E</div>
                    <div id="fountainTextG_4" class="fountainTextG">M</div>
                    <div id="fountainTextG_6" class="fountainTextG">X</div>
                </div>
            </div>
        </div>
        <!-- Pre-loader End -->


        <nav id="main-menu" class="navbar opacity bg-opacity-transparent absolute inverse-text">
            <div class="container">
                <div class="flex-it">
                    <div class="navbar-header">
                        <div class="navbar-brand">
							<?php
								$custom_logo_id = get_theme_mod( 'custom_logo' );
								$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
								if ( has_custom_logo() ) {
										echo '<a href="'. esc_url( home_url('/')).'"><img src="' . esc_url( $logo[0] ) . '" alt="' . esc_html__( 'Logo', 'themx' ) . '"/></a>';
								} else {
										echo '<a href="'. esc_url( home_url('/')).'"><h2 class="themx-site-title">'. esc_attr( get_bloginfo( 'name' )) . '</h2></a>';
								}	
							?>
                        </div>
                        <div class="nav-bars-wrapper">
                            <div class="nav-bars-inner">
                                <div class="nav-bars" data-toggle="collapse" data-target=".navbar-collapse"><span></span></div>
                            </div> 
                        </div>
                    </div>
                    <div class="navbar-collapse collapse">
					
					<?php 	
						if ( has_nav_menu('header_menu')){
						wp_nav_menu( array(
						'menu' => 'header_menu',
						'theme_location' => 'header_menu',
						'menu_class' => 'nav navbar-nav',
						'depth' => 10,
						'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
						'walker' => new WP_Bootstrap_Navwalker()
					));}?>
                    </div>

                    <div class="navbar-other">
                        <ul class="nav">
                            <li>
                                <div class="btn-group btn-search"> <a href="#" data-toggle="dropdown" class="nav-link"><i class="et-magnifying-glass"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <form action="<?php echo esc_url(home_url('/'));?>" method="get" class="search-form">
                                            <div class="form-group mb-0">
                                                <input name="s" type="text" class="form-control" placeholder="<?php echo esc_attr('Search & Press Enter','themx');?>">
                                                <div class="search-icon"><input type="submit" value="&#xf002"></div>
                                            </div>
                                        </form> 
                                    </div> 
                                </div>
                            </li>

                            
                        </ul>
                    </div>
                </div>
            </div><!--Contaciner -->
        </nav><!--end Nav-->

  
