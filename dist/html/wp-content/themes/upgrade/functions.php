<?php

	/*------------------------------------*\
		Defaults
	\*------------------------------------*/

	// Sets up theme defaults and registers support for various WordPress features.

	// Note that this function is hooked into the after_setup_theme hook, which
	// runs before the init hook. The init hook is too late for some features, such
	// as indicating support for post thumbnails.

	function upgrade_setup() {

		/* Translations
		--------------------------------------*/

		// Make theme available for translation.
	 	// Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/upgrade
	 	// If you're building a theme based on Twenty Seventeen, use a find and replace
	 	// to change 'upgrade' to the name of your theme in all the template files.

		load_theme_textdomain( 'upgrade' );

		/* RSS Feeds
		--------------------------------------*/

		// Add default posts and comments RSS feed links to head.

		// add_theme_support( 'automatic-feed-links' );

		/* Let WordPress manage <title>
		--------------------------------------*/

		// Let WordPress manage the document title.
		// By adding theme support, we declare that this theme does not use a
		// hard-coded <title> tag in the document head, and expect WordPress to
		// provide it for us.

		// add_theme_support( 'title-tag' );

		/* Post Thumbnails
		--------------------------------------*/

		// Enable support for Post Thumbnails on posts and pages.

		// Source: https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/

		// add_theme_support( 'post-thumbnails' );

		/* Image Sizes
		--------------------------------------*/

		// Notes...

		// add_image_size( 'upgrade-featured-image', 2000, 1200, true );

		// add_image_size( 'upgrade-thumbnail-avatar', 100, 100, true );

		/* Menus
		--------------------------------------*/

		// This theme uses wp_nav_menu() in two locations.

		register_nav_menus( array(

			'primary'	=> __( 'Primary Navigation', 'upgrade' ),
			'secondary'	=> __( 'Secondary Navigation', 'upgrade' ),

		) );

		/* HTML5
		--------------------------------------*/

		// Switch default core markup for search form, comment form, and comments
		// to output valid HTML5.

		add_theme_support( 'html5', array(

			'comment-form',
			'comment-list',
			'gallery',
			'caption',

		) );

		/* Post Formats
		--------------------------------------*/

		// Enable support for Post Formats.

		// Source: https://codex.wordpress.org/Post_Formats

		// add_theme_support( 'post-formats', array(

			// 'aside',
			// 'image',
			// 'video',
			// 'quote',
			// 'link',
			// 'gallery',
			// 'audio',

		// ) );

		/* Select Refresh Widgets
		--------------------------------------*/

		// Add theme support for selective refresh for widgets.

		// add_theme_support( 'customize-selective-refresh-widgets' );

		/* Editor Styles
		--------------------------------------*/

		// This theme styles the visual editor to resemble the theme style,
		// specifically font, colors, and column width.

		// add_editor_style( array( 'assets/css/editor-style.css', upgrade_fonts_url() ) );

		add_editor_style( array( 'assets/css/editor.css' ) );

	}

	add_action( 'after_setup_theme', 'upgrade_setup' );

	/*------------------------------------*\
		Widgets
	\*------------------------------------*/

	// Register widget area.

	// Source: https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar

	// function upgrade_widgets_init() {

		// register_sidebar( array(

			// 'name'			=> __( 'Blog Sidebar', 'upgrade' ),
			// 'id'			=> 'sidebar-1',
			// 'description'	=> __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'upgrade' ),
			// 'before_widget'	=> '<section id="%1$s" class="widget %2$s">',
			// 'after_widget'	=> '</section>',
			// 'before_title'	=> '<h2 class="widget-title">',
			// 'after_title'	=> '</h2>',

		// ) );

		// register_sidebar( array(

			// 'name'			=> __( 'Footer 1', 'upgrade' ),
			// 'id'			=> 'sidebar-2',
			// 'description'	=> __( 'Add widgets here to appear in your footer.', 'upgrade' ),
			// 'before_widget'	=> '<section id="%1$s" class="widget %2$s">',
			// 'after_widget'	=> '</section>',
			// 'before_title'	=> '<h2 class="widget-title">',
			// 'after_title'	=> '</h2>',

		// ) );

		// register_sidebar( array(

			// 'name'			=> __( 'Footer 2', 'upgrade' ),
			// 'id'			=> 'sidebar-3',
			// 'description'	=> __( 'Add widgets here to appear in your footer.', 'upgrade' ),
			// 'before_widget'	=> '<section id="%1$s" class="widget %2$s">',
			// 'after_widget'	=> '</section>',
			// 'before_title'	=> '<h2 class="widget-title">',
			// 'after_title'	=> '</h2>',

		// ) );

	// }

	// add_action( 'widgets_init', 'upgrade_widgets_init' );

	/*------------------------------------*\
		JavaScript Detection
	\*------------------------------------*/

	// Handles JavaScript detection.

	// Adds a `enhanced` class to the root `<html>` element when JavaScript is detected.

	// function upgrade_javascript_detection() {

		// echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'enhanced')})(document.documentElement);</script>\n";

	// }

	// add_action( 'wp_head', 'upgrade_javascript_detection', 0 );

	/*------------------------------------*\
		Pingback URL
	\*------------------------------------*/

	// Add a pingback url auto-discovery header for singularly identifiable articles.

	// function upgrade_pingback_header() {

		// if ( is_singular() && pings_open() ) {

			// printf( '<link rel="pingback" href="%s">' . "\n", get_bloginfo( 'pingback_url' ) );

		// }

	// }

	// add_action( 'wp_head', 'upgrade_pingback_header' );

	/*------------------------------------*\
		Enqueue Styles and Scripts
	\*------------------------------------*/

	// Notes...

	function upgrade_scripts() {

		/* Styles
		--------------------------------------*/

		// Theme stylesheet

		// wp_enqueue_style( 'upgrade-style', get_stylesheet_uri() );

		// Screen styles

		// wp_enqueue_style( 'upgrade-screen', get_theme_file_uri( '/assets/css/screen.css' ), array(), '1.0', 'all' );

		// Print styles

		// wp_enqueue_style( 'upgrade-print', get_theme_file_uri( '/assets/css/print.css' ), array(), '1.0', 'print' );

		/* HTML5 Shiv
		--------------------------------------*/

		// Load the html5 shiv.

		// wp_enqueue_script( 'html5', get_theme_file_uri( '/assets/js/html5.js' ), array(), '3.7.3' );

		// wp_script_add_data( 'html5', 'conditional', 'lt IE 9' );

		/* Scripts
		--------------------------------------*/

		// Notes...

		// wp_enqueue_script( 'upgrade-global', get_theme_file_uri( '/assets/js/global.js' ), array( 'jquery' ), '1.0', true );

		// wp_enqueue_script( 'jquery-scrollto', get_theme_file_uri( '/assets/js/jquery.scrollTo.js' ), array( 'jquery' ), '2.1.2', true );

		// jQuery

		// wp_deregister_script( 'jquery' );

		// wp_register_script( 'jquery', get_theme_file_uri( '' ), array(), '1.0', true );

		// wp_enqueue_script( 'jquery' );

		// Global Scripts

		// wp_enqueue_script( 'cgc-global', get_theme_file_uri( '/assets/js/global.js' ), array( 'jquery' ), '1.0', true );

		// wp_enqueue_script( 'cgc-global', get_theme_file_uri( '/assets/js/global.js' ), array( 'jquery' ), '1.0', true );

		/* Title
		--------------------------------------*/

		// Notes...

		// if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {

			// wp_enqueue_script( 'comment-reply' );

		// }

	}

	add_action( 'wp_enqueue_scripts', 'upgrade_scripts' );

	/*------------------------------------*\
		Support for SVG
	\*------------------------------------*/

	// Notes...

	function upgrade_mime_types( $mimes ) {

		$mimes['svg'] = 'image/svg+xml';

		return $mimes;

	}

	add_filter( 'upload_mimes', 'upgrade_mime_types' );

	/*------------------------------------*\
		Deregister Features
	\*------------------------------------*/

	// Notes...

	function upgrade_deregister_features() {

		/* Title
		--------------------------------------*/

		// Notes...

		wp_deregister_script( 'wp-embed' );

		/* Title
		--------------------------------------*/

		// Notes...

		remove_action( 'wp_head', 'print_emoji_detection_script', 7 );

		remove_action( 'wp_print_styles', 'print_emoji_styles' );

		/* Title
		--------------------------------------*/

		// Notes...

		global $wp_widget_factory;

		remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style' ) );

		/* Title
		--------------------------------------*/

		// Notes...

		remove_action( 'wp_head', 'wp_generator' );

		/* Title
		--------------------------------------*/

		// Notes...

		remove_action( 'wp_head', 'wlwmanifest_link' );

		/* Title
		--------------------------------------*/

		// Notes...

		remove_action( 'wp_head', 'rsd_link' );

		/* Title
		--------------------------------------*/

		// Notes...

		remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );

		/* Title
		--------------------------------------*/

		// Notes...

		remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );

		remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 );

		/* Title
		--------------------------------------*/

		// Notes...

		remove_action( 'wp_head', 'rel_canonical' );

		/* Title
		--------------------------------------*/

		// Notes...

		remove_action( 'wp_head', 'wp_resource_hints', 2 );

	}

	add_action( 'init', 'upgrade_deregister_features' );

	/*------------------------------------*\
		Contact Form 7
	\*------------------------------------*/

	// Disable initial loading of stylesheet and script.

	// add_filter( 'wpcf7_load_css', '__return_false' );

	// add_filter( 'wpcf7_load_js', '__return_false' );

	/*------------------------------------*\
		Advanced Custom Fields
	\*------------------------------------*/

	// Notes...

	if ( function_exists( 'acf_add_options_page' ) ) {

		acf_add_options_page(array(

			// 'page_title'	=> 'Theme General Settings',
			'menu_title'	=> 'Globals',
			'menu_slug'		=> 'globals',
			// 'capability'	=> 'edit_posts',
			// 'redirect'		=> false

		));

		acf_add_options_sub_page(array(

			'page_title'	=> 'About Upgrade',
			'menu_title'	=> 'About Upgrade',
			'parent_slug'	=> 'globals'

		));

		acf_add_options_sub_page(array(

			'page_title'	=> 'Contact Information',
			'menu_title'	=> 'Contact Information',
			'parent_slug'	=> 'globals'

		));

		acf_add_options_sub_page(array(

			'page_title'	=> 'Our Offices',
			'menu_title'	=> 'Our Offices',
			'parent_slug'	=> 'globals'

		));

		acf_add_options_sub_page(array(

			'page_title'	=> 'Brand Assets',
			'menu_title'	=> 'Brand Assets',
			'parent_slug'	=> 'globals'

		));

		acf_add_options_sub_page(array(

			'page_title'	=> 'Social Media',
			'menu_title'	=> 'Social Media',
			'parent_slug'	=> 'globals'

		));

		acf_add_options_sub_page(array(

			'page_title'	=> 'Badges',
			'menu_title'	=> 'Badges',
			'parent_slug'	=> 'globals'

		));

		acf_add_options_sub_page(array(

			'page_title'	=> 'Meta',
			'menu_title'	=> 'Meta',
			'parent_slug'	=> 'globals'

		));

	}

	/*------------------------------------*\
		Custom Menus
	\*------------------------------------*/

	// Notes...

	/* Primary Navigation
	--------------------------------------*/

	// Notes...

	class Primary_Navigation_Walker_Nav_Menu extends Walker_Nav_Menu {

		// Starts the list before elements are added.

		function start_lvl( &$output, $depth = 0, $args = array() ) {

			if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {

				$t = '';
				$n = '';

			} else {

				$t = "\t";
				$n = "\n";

			}

			$indent = str_repeat( $t, $depth );

			// Default class.

			$classes = array( 'c-primary-nav__sub-list' );

			/**
			 * Filters the CSS class(es) applied to a menu list element.
			 *
			 * @since 4.8.0
			 *
			 * @param array    $classes The CSS classes that are applied to the menu `<ul>` element.
			 * @param stdClass $args    An object of `wp_nav_menu()` arguments.
			 * @param int      $depth   Depth of menu item. Used for padding.
			 */

			$class_names = join( ' ', apply_filters( 'nav_menu_submenu_css_class', $classes, $args, $depth ) );
			$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

			$output .= "{$n}{$indent}<ul$class_names>{$n}";

		}

		// Starts the element output.

		function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {

			// Copy all the start_el code from source, and modify

			if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {

				$t = '';
				$n = '';

			} else {

				$t = "\t";
				$n = "\n";

			}

			$indent = ( $depth ) ? str_repeat( $t, $depth ) : '';

			$classes = empty( $item->classes ) ? array() : (array) $item->classes;
			$classes[] = 'c-primary-nav__item';

			/**
			 * Filters the arguments for a single nav menu item.
			 *
			 * @since 4.4.0
			 *
			 * @param stdClass $args  An object of wp_nav_menu() arguments.
			 * @param WP_Post  $item  Menu item data object.
			 * @param int      $depth Depth of menu item. Used for padding.
			 */

			$args = apply_filters( 'nav_menu_item_args', $args, $item, $depth );

			/**
			 * Filters the CSS class(es) applied to a menu item's list item element.
			 *
			 * @since 3.0.0
			 * @since 4.1.0 The `$depth` parameter was added.
			 *
			 * @param array    $classes The CSS classes that are applied to the menu item's `<li>` element.
			 * @param WP_Post  $item    The current menu item.
			 * @param stdClass $args    An object of wp_nav_menu() arguments.
			 * @param int      $depth   Depth of menu item. Used for padding.
			 */

			$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
			$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

			/**
			 * Filters the ID applied to a menu item's list item element.
			 *
			 * @since 3.0.1
			 * @since 4.1.0 The `$depth` parameter was added.
			 *
			 * @param string   $menu_id The ID that is applied to the menu item's `<li>` element.
			 * @param WP_Post  $item    The current menu item.
			 * @param stdClass $args    An object of wp_nav_menu() arguments.
			 * @param int      $depth   Depth of menu item. Used for padding.
			 */

			$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args, $depth );
			$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

			if ( $depth == 1 ) {

				$class_names = ' class="c-primary-nav__sub-item"';

			} else {

				$class_names = ' class="c-primary-nav__item"';

			}

			$output .= $indent . '<li' . $class_names .'>';

			$atts = array();
			$atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
			$atts['target'] = ! empty( $item->target )     ? $item->target     : '';
			$atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
			$atts['href']   = ! empty( $item->url )        ? $item->url        : '';

			/**
			 * Filters the HTML attributes applied to a menu item's anchor element.
			 *
			 * @since 3.6.0
			 * @since 4.1.0 The `$depth` parameter was added.
			 *
			 * @param array $atts {
			 *     The HTML attributes applied to the menu item's `<a>` element, empty strings are ignored.
			 *
			 *     @type string $title  Title attribute.
			 *     @type string $target Target attribute.
			 *     @type string $rel    The rel attribute.
			 *     @type string $href   The href attribute.
			 * }
			 * @param WP_Post  $item  The current menu item.
			 * @param stdClass $args  An object of wp_nav_menu() arguments.
			 * @param int      $depth Depth of menu item. Used for padding.
			 */

			$atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );

			$attributes = '';

			foreach ( $atts as $attr => $value ) {

				if ( ! empty( $value ) ) {

					$value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
					$attributes .= ' ' . $attr . '="' . $value . '"';

				}

			}

			/** This filter is documented in wp-includes/post-template.php */

			$title = apply_filters( 'the_title', $item->title, $item->ID );

			/**
			 * Filters a menu item's title.
			 *
			 * @since 4.4.0
			 *
			 * @param string   $title The menu item's title.
			 * @param WP_Post  $item  The current menu item.
			 * @param stdClass $args  An object of wp_nav_menu() arguments.
			 * @param int      $depth Depth of menu item. Used for padding.
			 */

			$title = apply_filters( 'nav_menu_item_title', $title, $item, $args, $depth );

			// $item_output = $args->before;
			// $item_output .= '<a'. $attributes .'>';
			// $item_output .= $args->link_before . $title . $args->link_after;
			// $item_output .= '</a>';
			// $item_output .= $args->after;

			if ( $depth == 1 ) {

				$item_output = $args->before;
				$item_output .= '<a'. $attributes . 'class="c-primary-nav__sub-link"' . '>';
				$item_output .= $args->link_before . $title . $args->link_after;
				$item_output .= '</a>';
				$item_output .= $args->after;

			} else {

				$item_output = $args->before;
				$item_output .= '<a'. $attributes . 'class="c-primary-nav__link"' . '>';
				$item_output .= $args->link_before . $title . $args->link_after;
				$item_output .= '</a>';
				$item_output .= $args->after;

			}

			/**
			 * Filters a menu item's starting output.
			 *
			 * The menu item's starting output only includes `$args->before`, the opening `<a>`,
			 * the menu item's title, the closing `</a>`, and `$args->after`. Currently, there is
			 * no filter for modifying the opening and closing `<li>` for a menu item.
			 *
			 * @since 3.0.0
			 *
			 * @param string   $item_output The menu item's starting HTML output.
			 * @param WP_Post  $item        Menu item data object.
			 * @param int      $depth       Depth of menu item. Used for padding.
			 * @param stdClass $args        An object of wp_nav_menu() arguments.
			 */

			$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );

		}

	}

	/* Secondary Navigation
	--------------------------------------*/

	class Secondary_Navigation_Walker_Nav_Menu extends Walker_Nav_Menu {

		// Starts the list before elements are added.

		function start_lvl( &$output, $depth = 0, $args = array() ) {

			if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {

				$t = '';
				$n = '';

			} else {

				$t = "\t";
				$n = "\n";

			}

			$indent = str_repeat( $t, $depth );

			// Default class.

			$classes = array( 'c-secondary-nav__sub-list' );

			/**
			 * Filters the CSS class(es) applied to a menu list element.
			 *
			 * @since 4.8.0
			 *
			 * @param array    $classes The CSS classes that are applied to the menu `<ul>` element.
			 * @param stdClass $args    An object of `wp_nav_menu()` arguments.
			 * @param int      $depth   Depth of menu item. Used for padding.
			 */

			$class_names = join( ' ', apply_filters( 'nav_menu_submenu_css_class', $classes, $args, $depth ) );
			$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

			$output .= "{$n}{$indent}<ul$class_names>{$n}";

		}

		// Starts the element output.

		function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {

			// Copy all the start_el code from source, and modify

			if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {

				$t = '';
				$n = '';

			} else {

				$t = "\t";
				$n = "\n";

			}

			$indent = ( $depth ) ? str_repeat( $t, $depth ) : '';

			$classes = empty( $item->classes ) ? array() : (array) $item->classes;
			$classes[] = 'c-secondary-nav__item';

			/**
			 * Filters the arguments for a single nav menu item.
			 *
			 * @since 4.4.0
			 *
			 * @param stdClass $args  An object of wp_nav_menu() arguments.
			 * @param WP_Post  $item  Menu item data object.
			 * @param int      $depth Depth of menu item. Used for padding.
			 */

			$args = apply_filters( 'nav_menu_item_args', $args, $item, $depth );

			/**
			 * Filters the CSS class(es) applied to a menu item's list item element.
			 *
			 * @since 3.0.0
			 * @since 4.1.0 The `$depth` parameter was added.
			 *
			 * @param array    $classes The CSS classes that are applied to the menu item's `<li>` element.
			 * @param WP_Post  $item    The current menu item.
			 * @param stdClass $args    An object of wp_nav_menu() arguments.
			 * @param int      $depth   Depth of menu item. Used for padding.
			 */

			$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
			$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

			/**
			 * Filters the ID applied to a menu item's list item element.
			 *
			 * @since 3.0.1
			 * @since 4.1.0 The `$depth` parameter was added.
			 *
			 * @param string   $menu_id The ID that is applied to the menu item's `<li>` element.
			 * @param WP_Post  $item    The current menu item.
			 * @param stdClass $args    An object of wp_nav_menu() arguments.
			 * @param int      $depth   Depth of menu item. Used for padding.
			 */

			$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args, $depth );
			$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

			if ( $depth == 1 ) {

				$class_names = ' class="c-secondary-nav__sub-item"';

			} else {

				$class_names = ' class="c-secondary-nav__item"';

			}

			$output .= $indent . '<li' . $class_names .'>';

			$atts = array();
			$atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
			$atts['target'] = ! empty( $item->target )     ? $item->target     : '';
			$atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
			$atts['href']   = ! empty( $item->url )        ? $item->url        : '';

			/**
			 * Filters the HTML attributes applied to a menu item's anchor element.
			 *
			 * @since 3.6.0
			 * @since 4.1.0 The `$depth` parameter was added.
			 *
			 * @param array $atts {
			 *     The HTML attributes applied to the menu item's `<a>` element, empty strings are ignored.
			 *
			 *     @type string $title  Title attribute.
			 *     @type string $target Target attribute.
			 *     @type string $rel    The rel attribute.
			 *     @type string $href   The href attribute.
			 * }
			 * @param WP_Post  $item  The current menu item.
			 * @param stdClass $args  An object of wp_nav_menu() arguments.
			 * @param int      $depth Depth of menu item. Used for padding.
			 */

			$atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );

			$attributes = '';

			foreach ( $atts as $attr => $value ) {

				if ( ! empty( $value ) ) {

					$value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
					$attributes .= ' ' . $attr . '="' . $value . '"';

				}

			}

			/** This filter is documented in wp-includes/post-template.php */

			$title = apply_filters( 'the_title', $item->title, $item->ID );

			/**
			 * Filters a menu item's title.
			 *
			 * @since 4.4.0
			 *
			 * @param string   $title The menu item's title.
			 * @param WP_Post  $item  The current menu item.
			 * @param stdClass $args  An object of wp_nav_menu() arguments.
			 * @param int      $depth Depth of menu item. Used for padding.
			 */

			$title = apply_filters( 'nav_menu_item_title', $title, $item, $args, $depth );

			// $item_output = $args->before;
			// $item_output .= '<a'. $attributes .'>';
			// $item_output .= $args->link_before . $title . $args->link_after;
			// $item_output .= '</a>';
			// $item_output .= $args->after;

			if ( $depth == 1 ) {

				$item_output = $args->before;
				$item_output .= '<a'. $attributes . 'class="c-secondary-nav__sub-link"' . '>';
				$item_output .= $args->link_before . $title . $args->link_after;
				$item_output .= '</a>';
				$item_output .= $args->after;

			} else {

				$item_output = $args->before;
				$item_output .= '';
				$item_output .= '<h3 class="c-secondary-nav__title">' . $title . '</h3>';
				$item_output .= '';
				$item_output .= $args->after;

			}

			/**
			 * Filters a menu item's starting output.
			 *
			 * The menu item's starting output only includes `$args->before`, the opening `<a>`,
			 * the menu item's title, the closing `</a>`, and `$args->after`. Currently, there is
			 * no filter for modifying the opening and closing `<li>` for a menu item.
			 *
			 * @since 3.0.0
			 *
			 * @param string   $item_output The menu item's starting HTML output.
			 * @param WP_Post  $item        Menu item data object.
			 * @param int      $depth       Depth of menu item. Used for padding.
			 * @param stdClass $args        An object of wp_nav_menu() arguments.
			 */

			$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );

		}

	}

	// Notes...

	/*------------------------------------*\
		Custom WYSIWYG Editors
	\*------------------------------------*/

	// Notes...

	function upgrade_toolbars( $toolbars ) {

		// Custom Toolbars

		// Available buttons are:
		// formatselect, bold, italic, underline, blockquote, strikethrough, bullist, numlist, blockquote, hr, alignleft, aligncenter, alignright, alignjustify, forecolor, pastetext, removeformat, charmap, outdent, indent, wp_more, spellchecker, justifyleft, justifycenter, justifyright, undo, redo, link, unlink, fullscreen, wp_adv, wp_help

		/* Very Simple
		--------------------------------------*/

		// Display buttons for bold, italic, underline, link, and remove link

		// Current used on
		// 1. Individual FAQ entries
		// 2. About Upgrade (within Globals)

		$toolbars[ 'Very Simple' ][1] = array( 'bold' , 'italic' , 'underline', 'link', 'unlink', 'undo', 'redo' );

		$toolbars[ 'Very Simple with List Option' ][1] = array( 'bullist', 'bold', 'italic', 'underline', 'link', 'unlink', 'undo', 'redo' );

		/* Title
		--------------------------------------*/

		// Notes...

		// Uncomment to view format of $toolbars

		/*
		echo '< pre >';
			print_r($toolbars);
		echo '< /pre >';
		die;
		*/

		// Add a new toolbar called "Very Simple"

		// - this toolbar has only 1 row of buttons

		// $toolbars['Very Simple' ] = array();

		// $toolbars[ 'Very Simple' ][1] = array('bold' , 'italic' , 'underline' );

		// Edit the "Full" toolbar and remove 'code'

		// - delet from array code from http://stackoverflow.com/questions/7225070/php-array-delete-by-value-not-key

		// if( ($key = array_search('code' , $toolbars['Full' ][2])) !== false ) {

			// unset( $toolbars['Full' ][2][$key] );

		// }

		// remove the 'Basic' toolbar completely

		// unset( $toolbars['Basic' ] );

		// return $toolbars - IMPORTANT!

		return $toolbars;

	}

	add_filter( 'acf/fields/wysiwyg/toolbars' , 'upgrade_toolbars'  );
