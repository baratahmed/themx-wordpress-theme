<?php

//enqueue CSS Include

function themx_theme_js_css(){
	
	//wp_enqueue_style('handler', get_template_directory_uri(). '/folder/sub_folder/file_name', array(), '1.0.0', 'all');
	
	wp_enqueue_style('font-awesome', get_template_directory_uri(). '/assets/css/font-awesome.min.css', array(), '1.0.0', 'all');
	wp_enqueue_style('flaticon-css', get_template_directory_uri(). '/assets/css/flaticon.css', array(), '1.0.0', 'all');
	wp_enqueue_style('animate-css', get_template_directory_uri(). '/assets/css/animate.css', array(), '1.0.0', 'all');
	wp_enqueue_style('owl-css', get_template_directory_uri(). '/assets/css/owl.carousel.min.css', array(), '1.0.0', 'all');
	wp_enqueue_style('jquery-ui-css', get_template_directory_uri(). '/assets/css/jquery-ui.min.css', array(), '1.0.0', 'all');
	wp_enqueue_style('jquery-ui-css', get_template_directory_uri(). '/assets/css/jquery-ui.min.css', array(), '1.0.0', 'all');
	wp_enqueue_style('layers-css', get_template_directory_uri(). '/rs-plugin/css/layers.css', array(), '1.0.0', 'all');
	wp_enqueue_style('settings-css', get_template_directory_uri(). '/rs-plugin/css/settings.css', array(), '1.0.0', 'all');
    wp_enqueue_style('ms-staff-style', get_template_directory_uri(). '/assets/css/ms-staff-style.css', array(), '1.0.0', 'all');
    wp_enqueue_style('ms-fullscreen', get_template_directory_uri(). '/assets/css/ms-fullscreen.css', array(), '1.0.0', 'all');
    wp_enqueue_style('masterslider-main', get_template_directory_uri(). '/assets/css/masterslider.main.css', array(), '1.0.0', 'all');
    wp_enqueue_style('video-js-css', get_template_directory_uri(). '/assets/css/video-js.css', array(), '1.0.0', 'all');
    wp_enqueue_style('bootstrap-css', get_template_directory_uri(). '/assets/css/bootstrap.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('plugins-css', get_template_directory_uri(). '/assets/css/plugins.css', array(), '1.0.0', 'all');
    wp_enqueue_style('icons-css', get_template_directory_uri(). '/assets/css/icons.css', array(), '1.0.0', 'all');
    wp_enqueue_style('main-menu', get_template_directory_uri(). '/assets/css/main-menu.css', array(), '1.0.0', 'all');
    wp_enqueue_style('themx-main-css', get_template_directory_uri(). '/assets/css/main.css', array(), '1.0.0', 'all');
    wp_enqueue_style('themx-responsive-css', get_template_directory_uri(). '/assets/css/responsive.css', array(), '1.0.0', 'all');
    wp_enqueue_style('themx-style', get_stylesheet_uri());
	if( is_singular()) wp_enqueue_script('comment-reply');
	
	//wp_enqueue_script('handler_name', get_template_directory_uri(). '/folder/sub_folder/file_name', array(), '1.0.0', true);
	
	wp_enqueue_script('jquery-ui', get_template_directory_uri(). '/assets/js/jquery-ui.min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('modernizr-js', get_template_directory_uri(). '/assets/js/modernizr.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('waypoints-js', get_template_directory_uri(). '/assets/js/waypoints.min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('bootstrap-js', get_template_directory_uri(). '/assets/js/bootstrap.min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('jquery-scrollUp', get_template_directory_uri(). '/assets/js/jquery.scrollUp.min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('jquery-scrollUp', get_template_directory_uri(). '/assets/js/jquery.scrollUp.min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('gmaps-api', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyB4RM7zOgOKq6n2fv407hX28xiL-M6vLdY');
	wp_enqueue_script('gmaps-js', get_template_directory_uri(). '/assets/js/gmaps.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('isotope-js', get_template_directory_uri(). '/assets/js/isotope.pkgd.min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('ripples-js', get_template_directory_uri(). '/assets/js/ripples-min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('jquery-counterup', get_template_directory_uri(). '/assets/js/jquery.counterup.min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('owl-carousel-js', get_template_directory_uri(). '/assets/js/owl.carousel.min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('wow-min-js', get_template_directory_uri(). '/assets/js/wow.min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('video-js', get_template_directory_uri(). '/assets/js/video.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('bxslider-js', get_template_directory_uri(). '/assets/js/jquery.bxslider.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('mixitup-js', get_template_directory_uri(). '/assets/js/jquery.mixitup.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('mixitup-js', get_template_directory_uri(). '/assets/js/jquery.mixitup.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('themepunch-tools-js', get_template_directory_uri(). '/rs-plugin/js/jquery.themepunch.tools.min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('themepunch-revolution-js', get_template_directory_uri(). '/rs-plugin/js/jquery.themepunch.revolution.min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('masterslider-js', get_template_directory_uri(). '/assets/js/masterslider.min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('masterslider-staff', get_template_directory_uri(). '/assets/js/masterslider.staff.carousel.js', array('jquery'), '1.0.0', true);
	
	wp_enqueue_script('revolution-video', get_template_directory_uri(). '/rs-plugin/js/extensions/revolution.extension.video.min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('revolution-slideanims', get_template_directory_uri(). '/rs-plugin/js/extensions/revolution.extension.slideanims.min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('revolution-actions', get_template_directory_uri(). '/rs-plugin/js/extensions/revolution.extension.actions.min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('revolution-layeranimation', get_template_directory_uri(). '/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('revolution-kenburn', get_template_directory_uri(). '/rs-plugin/js/extensions/revolution.extension.kenburn.min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('revolution-navigation', get_template_directory_uri(). '/rs-plugin/js/extensions/revolution.extension.navigation.min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('revolution-migration', get_template_directory_uri(). '/rs-plugin/js/extensions/revolution.extension.migration.min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('revolution-parallax', get_template_directory_uri(). '/rs-plugin/js/extensions/revolution.extension.parallax.min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('plugins-js', get_template_directory_uri(). '/assets/js/plugins.js', array('jquery'), '1.0', true);
	wp_enqueue_script('themx-custom-js', get_template_directory_uri(). '/assets/js/custom.js', array('jquery'), '1.0', true);
		
}
add_action('wp_enqueue_scripts','themx_theme_js_css');


//enqueue Google Fonts

function themx_theme_fonts_url() {
$fonts_url = '';

$lato = _x( 'on', 'Lato font: on or off', 'themx' );
$opensans = _x( 'on', 'Open+Sans font: on or off', 'themx' );
$roboto = _x( 'on', 'Roboto font: on or off', 'themx' );
$droidsans = _x( 'on', 'Droid+Sans font: on or off', 'themx' );
$droidserif = _x( 'on', 'Droid+Serif font: on or off', 'themx' );
$montserrat = _x( 'on', 'Montserrat font: on or off', 'themx' );

if ( 'off' !== $lato || 'off' !== $opensans || 'off' !== $roboto || 'off' !== $droidsans || 'off' !== $droidserif || 'off' !== $montserrat){
	
$font_families = array();
if ( 'off' !== $lato ) {
$font_families[] = 'Lato:100,300,400,700,700i,900';
}
if ( 'off' !== $opensans ) {
$font_families[] = 'Open+Sans:300,400,600,700,800';
}
if ( 'off' !== $roboto ) {
$font_families[] = 'Roboto:300,400,500,700,900';
}
if ( 'off' !== $droidsans ) {
$font_families[] = 'Droid+Sans:400,700';
}
if ( 'off' !== $droidserif ) {
$font_families[] = 'Droid+Serif:400,700';
}
if ( 'off' !== $montserrat ) {
$font_families[] = 'Montserrat:100,200,300,400,500,600,700,800,900';
}

$query_args = array(
'family' => urlencode( implode( '|', $font_families ) ),
'subset' => urlencode( 'latin,latin-ext' )
);

$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	
}
 
return esc_url_raw( $fonts_url );
}

//Enqueuing on the front end

function themx_scripts_styles() {
wp_enqueue_style( 'themx-fonts', themx_theme_fonts_url(), array(), null );
}
add_action( 'wp_enqueue_scripts', 'themx_scripts_styles' );

//Adding Google fonts to the editor

function themx_theme_editor_styles() {
add_editor_style( array( 'editor-style.css', '//fonts.googleapis.com/css?family=Lato:100,300,400,700,700i,900%7COpen+Sans:300,400,600,700,800%7CRoboto:300,400,500,700,900%7CDroid+Sans:400,700%7CDroid+Serif:400,700%7CMontserrat:100,200,300,400,500,600,700,800,900' ) );
}
add_action( 'after_setup_theme', 'themx_theme_editor_styles' );

//Adding fonts to the Custom Header screen

function themx_theme_custom_header_fonts() {
wp_enqueue_style( 'themx-custom-header-fonts', '//fonts.googleapis.com/css?family=Lato:100,300,400,700,700i,900%7COpen+Sans:300,400,600,700,800%7CRoboto:300,400,500,700,900%7CDroid+Sans:400,700%7CDroid+Serif:400,700%7CMontserrat:100,200,300,400,500,600,700,800,900', array(), null );
}
add_action( 'admin_print_styles-appearance_page_custom-header', 'themx_theme_custom_header_fonts' );

