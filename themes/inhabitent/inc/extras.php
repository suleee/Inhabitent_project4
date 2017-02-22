<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}
	return $classes;
}

function inhabitent_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/logos/inhabitent-logo-text-dark.svg);
			width: 300px;
            background-size: 300px;
        }
		#login .button.button-primary {
 				background-color: #24BAB3;
			}
		.login a:active{
			
			}
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'inhabitent_login_logo' );

// function childtheme_custom_login() {
//     echo '<style type="text/css">                                                                   
//     h1 a { background: url('.get_stylesheet_directory_uri().'/images/logos/inhabitent-logo-text-dark.svg) !important;
//     background-size: 310px !important;
//     background-repeat: no-repeat !important;

//     background-position: bottom !important; 
//     height: 120px !important; width: 310px !important; margin-left: -40px;}                            
// </style>';

// }

// add_action('login_head', 'childtheme_custom_login');


add_filter( 'body_class', 'red_starter_body_classes' );


// Change WordPress Login Logo URL
/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
 //this is the logo link
function custom_loginlogo_url($url) {
    return home_url( );
}
add_filter( 'login_headerurl', 'custom_loginlogo_url' );


/**
 * Adds custom classes to the array of body classes.
 *
 * @return array
 */
 //this is the title link 
function custom_loginlogo_title() {
    return 'Inhabitent';
}
add_filter( 'login_headertitle', 'custom_loginlogo_title' );




// about page hero banner
function about_hero_banner() {
	wp_enqueue_style(
		'custom-style', get_template_directory_uri().'build/css/style.min.css'
	);
	$url = CFS()->get( 'about_header_image' );

	$custom_css = ".about_header{ background:
	linear-gradient( to bottom, rgba(0,0,0,0.5) 0%, rgba(0,0,0,0.5) 100% ), url($url) no-repeat center 0px;
	background-size: cover}";
	
	wp_add_inline_style( 'custom-style', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'about_hero_banner' );
