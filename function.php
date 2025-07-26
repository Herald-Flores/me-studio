<?php
/**
 * Me Studio functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Me_Studio
 * @since Me Studio 1.0
 */

// Adds theme support for post formats.
if ( ! function_exists( 'me_studio_post_format_setup' ) ) :
	/**
	 * Adds theme support for post formats.
	 *
	 * @since Me Studio 1.0
	 *
	 * @return void
	 */
	function me_studio_post_format_setup() {
		add_theme_support( 'post-formats', array( 'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video' ) );
	}
endif;
add_action( 'after_setup_theme', 'me_studio_post_format_setup' );

// Enqueues editor-style.css in the editors.
if ( ! function_exists( 'me_studio_editor_style' ) ) :
	/**
	 * Enqueues editor-style.css in the editors.
	 *
	 * @since Me Studio 1.0
	 *
	 * @return void
	 */
	function me_studio_editor_style() {
		add_editor_style( 'assets/css/editor-style.css' );
	}
endif;
add_action( 'after_setup_theme', 'me_studio_editor_style' );

// Enqueues style.css on the front.
if ( ! function_exists( 'me_studio_enqueue_styles' ) ) :
	/**
	 * Enqueues style.css on the front.
	 *
	 * @since Me Studio 1.0
	 *
	 * @return void
	 */
	function me_studio_enqueue_styles() {
		wp_enqueue_style(
			'me-studio-style',
			get_parent_theme_file_uri( 'style.css' ),
			array(),
			wp_get_theme()->get( 'Version' )
		);
	}
endif;
add_action( 'wp_enqueue_scripts', 'me_studio_enqueue_styles' );


// Registers pattern categories.
if ( ! function_exists( 'me_studio_pattern_categories' ) ) :
	/**
	 * Registers pattern categories.
	 *
	 * @since Me Studio 1.0
	 *
	 * @return void
	 */
	function me_studio_pattern_categories() {

		register_block_pattern_category(
			'me_studio_page',
			array(
				'label'       => __( 'Pages', 'me_studio' ),
				'description' => __( 'A collection of full page layouts.', 'me_studio' ),
			)
		);

		register_block_pattern_category(
			'me_studio_post-format',
			array(
				'label'       => __( 'Post formats', 'me_studio' ),
				'description' => __( 'A collection of post format patterns.', 'me_studio' ),
			)
		);
	}
endif;
add_action( 'init', 'me_studio_pattern_categories' );
