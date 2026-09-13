<?php
/**
 * ULX-Studio Theme Functions
 *
 * @package ULX
 * @since 1.0.0
 */

defined('ABSPATH') || exit;

// Theme version
define('ULX_VERSION', '2.5.0');
define('ULX_DIR', get_template_directory());
define('ULX_URI', get_template_directory_uri());

// Vite dev mode - set to true during development
define('ULX_VITE_DEV', file_exists(ULX_DIR . '/vite-dev'));

/**
 * Core includes
 */
require_once ULX_DIR . '/inc/setup.php';
require_once ULX_DIR . '/inc/enqueue.php';
require_once ULX_DIR . '/inc/customizer.php';
require_once ULX_DIR . '/inc/customizer-output.php';
require_once ULX_DIR . '/inc/helpers.php';
require_once ULX_DIR . '/inc/template-tags.php';
require_once ULX_DIR . '/inc/inquiry.php';
require_once ULX_DIR . '/inc/schema.php';
require_once ULX_DIR . '/inc/page-builder.php';
require_once ULX_DIR . '/inc/seo.php';
require_once ULX_DIR . '/inc/seo-seed.php';

/**
 * Keep blog/archive lists at exactly the "Blog pages show at most" count.
 *
 * WordPress prepends sticky posts to the home/archive query *in addition to*
 * posts_per_page, which makes a 12-per-page setting display 13. Ignoring sticky
 * posts on the main list query keeps the grid count consistent.
 */
add_action( 'pre_get_posts', function ( $query ) {
	if ( is_admin() || ! $query->is_main_query() ) {
		return;
	}

	if ( $query->is_home() || $query->is_archive() ) {
		$query->set( 'ignore_sticky_posts', true );
	}
} );

