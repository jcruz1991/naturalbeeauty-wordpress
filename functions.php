<?php
/**
 * NaturalBeeauty functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package NaturalBeeauty
 */

if ( ! function_exists( 'naturalbeeauty_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function naturalbeeauty_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on NaturalBeeauty, use a find and replace
		 * to change 'naturalbeeauty' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'naturalbeeauty', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'naturalbeeauty-portfolio-thumb', 400, 400, true );
		add_image_size( 'naturalbeeauty-team-thumb', 350, 420, true );
		add_image_size( 'naturalbeeauty-blog-thumb', 400, 280, true );
		add_image_size( 'naturalbeeauty-thumb', 100, 100, true );
		add_image_size( 'naturalbeeauty-blog-header', 720, 360, true );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'naturalbeeauty' ),
			'menu-2' => esc_html__( 'Footer Menu', 'naturalbeeauty' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'naturalbeeauty_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
			'header-text' => array( '.ht-site-title', '.ht-site-description' ),
		) );
		
		add_theme_support( 'woocommerce' );
		add_theme_support( 'wc-product-gallery-zoom' );
    	add_theme_support( 'wc-product-gallery-lightbox' );
    	add_theme_support( 'wc-product-gallery-slider' );
	}
endif;
add_action( 'after_setup_theme', 'naturalbeeauty_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function naturalbeeauty_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'naturalbeeauty_content_width', 640 );
}
add_action( 'after_setup_theme', 'naturalbeeauty_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function naturalbeeauty_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'naturalbeeauty' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'naturalbeeauty' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'naturalbeeauty_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function naturalbeeauty_scripts() {

	//CSS Files
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.0' );

	// JS Scripts
	wp_enqueue_style( 'naturalbeeauty-style', get_stylesheet_uri() );

	wp_deregister_script('jquery');
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', array(), '20151215', true );

	wp_enqueue_script( 'superfish', get_template_directory_uri() . '/js/superfish.min.js', array(), '20151215', true );

	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '20151215', true );

	wp_enqueue_script( 'nb-custom', get_template_directory_uri() . '/js/main.js', array(), '20151215', true );

	wp_enqueue_script( 'naturalbeeauty-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'naturalbeeauty-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'naturalbeeauty_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


/**
 * 
 * CUSTOM WOOCOMMERCE ADD/REMOVE ACTIONS
 * 
 */

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

/**
 * 
 * Add Login and Logout to top menu
 */

add_filter( 'wp_nav_menu_main-menu_items', 'add_user_login_logout_nav_menu', 10, 2 );
function add_user_login_logout_nav_menu($items, $args) {
	// check is user is logged in
	// is logged in appened logout button to top nav else appent login to nav
	// .= is Concatenation assignment
	if(is_user_logged_in()) {
		$items .= '
			<li class="menu-item menu-item-type-post_type menu-item-object-page">
				<a href="' . get_permalink( get_option( 'woocommerce_myaccount_page_id' ) ) . '">My Account</a>
			</li>';
	} else {
		$items .= '
		<li class="menu-item menu-item-type-post_type menu-item-object-page">
			<a href="' . get_permalink( get_option( 'woocommerce_myaccount_page_id' ) ) . '">Sign in</a>
		</li>';
	}
	return $items;
}


//Append cart item (and cart count) to end of main menu.
add_filter( 'wp_nav_menu_main-menu_items', 'am_append_cart_icon', 10, 2 );
function am_append_cart_icon( $items, $args ) {
	// get current cart items count
	$cart_item_count = WC()->cart->get_cart_contents_count();
	$cart_count_span = '';
	// if their is cart items count add the count to the span
	if ( $cart_item_count ) {
		$cart_count_span = '<span class="count">'.$cart_item_count.'</span>'; // create span tag
	}
	// link output that is appended to the top menu
	$cart_link = '
		<li class="cart menu-item menu-item-type-post_type menu-item-object-page">
			<div class="cart-menu">
				<a href="' . get_permalink( wc_get_page_id( 'cart' ) ) . '">
				<img width=22 src="https://res.cloudinary.com/dd67kwah2/image/upload/v1549307411/shopping-bag_hrkog6.svg"/>
				'.$cart_count_span.'
				</a>
			</div>
		</li>';
	// Add the cart link to the end of the menu.
	$items = $items . $cart_link;
	return $items;
}
