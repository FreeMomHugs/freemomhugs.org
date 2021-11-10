<?php
/**
 * WP-FreeMomHugs functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WP-FreeMomHugs
 */

require get_template_directory() . '/WordPress-Extended-Bootstrap-Nav-Walker/extendednav.php';


if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'wp_freemomhugs_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function wp_freemomhugs_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on WP-FreeMomHugs, use a find and replace
		 * to change 'wp-freemomhugs' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'wp-freemomhugs', get_template_directory() . '/languages' );

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

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'wp-freemomhugs' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'wp_freemomhugs_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'wp_freemomhugs_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wp_freemomhugs_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wp_freemomhugs_content_width', 640 );
}
add_action( 'after_setup_theme', 'wp_freemomhugs_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wp_freemomhugs_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'wp-freemomhugs' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'wp-freemomhugs' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'wp_freemomhugs_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function wp_freemomhugs_scripts() {
//	wp_enqueue_style( 'wp-freemomhugs-style', get_stylesheet_uri(), array(), _S_VERSION );
    wp_enqueue_style( 'feather', get_template_directory_uri() . '/assets/fonts/Feather/feather.css',false,'1.1','all');
    wp_enqueue_style( 'jquery.fancybox', get_template_directory_uri() . '/assets/libs/@fancyapps/fancybox/dist/jquery.fancybox.min.css',false,'1.1','all');
    wp_enqueue_style( 'aos', get_template_directory_uri() . '/assets/libs/aos/dist/aos.css',false,'1.1','all');
    wp_enqueue_style( 'choices', get_template_directory_uri() . '/assets/libs/choices.js/public/assets/styles/choices.min.css',false,'1.1','all');
    wp_enqueue_style( 'flickity-fade', get_template_directory_uri() . '/assets/libs/flickity-fade/flickity-fade.css',false,'1.1','all');
    wp_enqueue_style( 'flickity', get_template_directory_uri() . '/assets/libs/flickity/dist/flickity.min.css',false,'1.1','all');
    wp_enqueue_style( 'vs2015', get_template_directory_uri() . '/assets/libs/highlightjs/styles/vs2015.css',false,'1.1','all');
    wp_enqueue_style( 'jarallax', get_template_directory_uri() . '/assets/libs/jarallax/dist/jarallax.css',false,'1.1','all');
    wp_enqueue_style( 'quill', get_template_directory_uri() . '/assets/libs/quill/dist/quill.core.css',false,'1.1','all');
    wp_enqueue_style( 'theme', get_template_directory_uri() . '/assets/css/theme.css',false,'1.1','all');



    wp_enqueue_script( 'script1', get_template_directory_uri() . '/assets/libs/jquery/dist/jquery.min.js',  1.1, true);
    wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js',  1.1, true);
    wp_enqueue_script( 'script3', get_template_directory_uri() . '/assets/js/theme.min.js',  1.1, true);
    wp_enqueue_script( 'script4', get_template_directory_uri() . '/assets/libs/@fancyapps/fancybox/dist/jquery.fancybox.min.js', 1.1, true);
    wp_enqueue_script( 'script5', get_template_directory_uri() . '/assets/libs/aos/dist/aos.js', 1.1, true);
    wp_enqueue_script( 'script6', get_template_directory_uri() . '/assets/libs/countup.js/dist/countUp.min.js', 1.1, true);
    wp_enqueue_script( 'script7', get_template_directory_uri() . '/assets/libs/dropzone/dist/min/dropzone.min.js', 1.1, true);
    wp_enqueue_script( 'script8', get_template_directory_uri() . '/assets/libs/flickity/dist/flickity.pkgd.min.js', 1.1, true);
    wp_enqueue_script( 'script9', get_template_directory_uri() . '/assets/libs/imagesloaded/imagesloaded.pkgd.min.js', 1.1, true);
    wp_enqueue_script( 'script10', get_template_directory_uri() . '/assets/libs/isotope-layout/dist/isotope.pkgd.min.js', 1.1, true);
    wp_enqueue_script( 'script11', get_template_directory_uri() . '/assets/libs/jarallax/dist/jarallax.min.js', 1.1, true);
    wp_enqueue_script( 'script12', get_template_directory_uri() . '/assets/libs/jarallax/dist/jarallax-video.min.js', 1.1, true);
    wp_enqueue_script( 'script13', get_template_directory_uri() . '/assets/libs/jarallax/dist/jarallax-element.min.js', 1.1, true);
    wp_enqueue_script( 'script14', get_template_directory_uri() . '/assets/libs/quill/dist/quill.min.js', 1.1, true);
    wp_enqueue_script( 'script15', get_template_directory_uri() . '/assets/libs/smooth-scroll/dist/smooth-scroll.min.js', 1.1, true);
    wp_enqueue_script( 'script16', get_template_directory_uri() . '/assets/libs/typed.js/lib/typed.min.js', 1.1, true);

    wp_style_add_data( 'wp-freemomhugs-style', 'rtl', 'replace' );

//	wp_enqueue_script( 'wp-freemomhugs-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wp_freemomhugs_scripts' );

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
  * Custom Post Type Events
  */

// register custom post type to work with
function lc_create_post_type() {
    // set up labels
    $labels = array (
        'name' => 'Events',
        'singular_name' => 'Event',
        'add_new' => 'Add New Event',
        'add_new_item' => 'Add New Event',
        'edit_item' => 'Edit Event',
        'new_item' => 'New Event',
        'all_items' => 'All Events',
        'view_item' => 'View Event',
        'search_items' => 'Search Events',
        'not_found' => 'No Events Found',
        'not_found_in_trash' => 'No Events found in Trash',
        'parent_item_colon' => '',
        'menu_name' => 'Events',
    );
    //register post type
    register_post_type ( 'event', array(
            'labels' => $labels,
            'has_archive' => false,
            'public' => true,
            'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail','page-attributes' ),
            'taxonomies' => array( 'post_tag', 'category' ),
            'exclude_from_search' => true,
            'capability_type' => 'post',
            'menu_icon' => 'dashicons-calendar-alt',
            'rewrite' => array( 'slug' => 'events' ),
            'show_in_rest' => true,
        )
    );
}
add_action( 'init', 'lc_create_post_type' );

/**
 * Custom Post Type Leadership
 */

// register custom post type to work with
function lc_create_post_type_leadership() {
    // set up labels
    $labels = array (
        'name' => 'Leadership',
        'singular_name' => 'Leadership',
        'add_new' => 'Add New Member',
        'add_new_item' => 'Add New Member',
        'edit_item' => 'Edit Person',
        'new_item' => 'New Member',
        'all_items' => 'All Leadership',
        'view_item' => 'View Leadership',
        'search_items' => 'Search Leadership',
        'not_found' => 'No Leadership Found',
        'not_found_in_trash' => 'No Leadership found in Trash',
        'parent_item_colon' => '',
        'menu_name' => 'Leadership',
    );
    //register post type
    register_post_type ( 'leadership', array(
            'labels' => $labels,
            'has_archive' => false,
            'public' => true,
            'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail','page-attributes' ),
            'taxonomies' => array( 'post_tag', 'category' ),
            'exclude_from_search' => true,
            'capability_type' => 'post',
            'menu_icon' => 'dashicons-businesswoman',
            'rewrite' => array( 'slug' => 'leadership' ),
            'show_in_rest' => true,
        )
    );
}
add_action( 'init', 'lc_create_post_type_leadership' );

/**
 * Custom Post Type Leadership
 */

// register custom post type to work with
function lc_create_post_type_books() {
    // set up labels
    $labels = array (
        'name' => 'Book',
        'singular_name' => 'book-item',
        'add_new' => 'Add New Book',
        'add_new_item' => 'Add New Book',
        'edit_item' => 'Edit Book',
        'new_item' => 'New Book',
        'all_items' => 'All Books',
        'view_item' => 'View Books',
        'search_items' => 'Search Books',
        'not_found' => 'No Books Found',
        'not_found_in_trash' => 'No Books found in Trash',
        'parent_item_colon' => '',
        'menu_name' => 'Books',
        'has_archive'   => true,
    );
    //register post type
    register_post_type ( 'book', array(
            'labels' => $labels,
            'has_archive' => false,
            'public' => true,
            'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail','page-attributes' ),
            'taxonomies' => array(),
            'exclude_from_search' => true,
            'capability_type' => 'post',
            'menu_icon' => 'dashicons-book',
            'rewrite' => array( 'slug' => 'book' ),
            'show_in_rest' => true,
        )
    );
}
add_action( 'init', 'lc_create_post_type_books' );

function bootstrap_pagination($paged, $max_num_pages, $echo = true) {
	$largerInt = 999999999; // need an unlikely integer
	$pages = paginate_links([
		'base'      => str_replace($largerInt, '%#%', esc_url(get_pagenum_link($largerInt))),
		'format'    => '?paged=%#%',
		'current'   => max(1, $paged),
		'total'     => $max_num_pages,
		'type'      => 'array',
		'prev_next' => true,
		'prev_text' => __('« Prev'),
		'next_text' => __('Next »'),
	]);

	if (is_array($pages)) {
		$paged = ($paged == 0) ? 1 : $paged;

		$pagination = '<ul class="pagination justify-content-center">';
		foreach ($pages as $page) {
			//$page = strip_tags($page);
			$pagination .= '<li class="page-item">' . str_replace('page-numbers', 'page-link', $page) . '</li>';
		}
		$pagination .= '</ul>';

		if ($echo) {
			echo $pagination;
		} else {
			return $pagination;
		}
	}
}

/**
 * Tests if any of a post's assigned categories are descendants of target categories
 *
 * @param int|array $cats The target categories. Integer ID or array of integer IDs
 * @param int|object $_post The post. Omit to test the current post in the Loop or main query
 * @return bool True if at least 1 of the post's categories is a descendant of any of the target categories
 * @see get_term_by() You can get a category by name or slug, then pass ID to this function
 * @uses get_term_children() Passes $cats
 * @uses in_category() Passes $_post (can be empty)
 * @version 2.7
 * @link http://codex.wordpress.org/Function_Reference/in_category#Testing_if_a_post_is_in_a_descendant_category
 */
if ( ! function_exists( 'post_is_in_descendant_category' ) ) {
	function post_is_in_descendant_category( $cats, $_post = null ) {
		foreach ( (array) $cats as $cat ) {
			// get_term_children() accepts integer ID only
			$descendants = get_term_children( (int) $cat, 'category' );
			if ( $descendants && in_category( $descendants, $_post ) )
				return true;
		}
		return false;
	}
}

function menu_set_dropdown( $sorted_menu_items ) {
	$last_top = 0;
	foreach ( $sorted_menu_items as $key => $obj ) {
		// it is a top lv item?
		if ( 0 == $obj->menu_item_parent ) {
			// set the key of the parent
			$last_top = $key;
		} else {
			$sorted_menu_items[$last_top]->classes['dropdown'] = 'dropdown';
		}
	}
	return $sorted_menu_items;
}
add_filter( 'wp_nav_menu_objects', 'menu_set_dropdown', 10, 2 );
