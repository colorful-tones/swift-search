<?php
/**
 * Plugin Name:       Demo ACF plugin
 * Description:       A demo WordPress plugin for custom ACF PRO Blocks, Post Types, Options Pages, Taxonomies  and more.
 * Requires at least: 6.3
 * Requires PHP:      7.4
 * Version:           0.1.3
 * Author:            ACF
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       demo-acf
 *
 * @package           demo-acf
 */

// Define our handy constants.
define( 'DEMO_ACF_VERSION', '0.1.3' );
define( 'DEMO_ACF_PLUGIN_DIR', __DIR__ );
define( 'DEMO_ACF_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'DEMO_ACF_PLUGIN_BLOCKS', DEMO_ACF_PLUGIN_DIR . '/blocks/' );

// Set custom load & save JSON points for ACF sync.
require 'includes/acf-json.php';
// Register blocks and other handy ACF Block helpers.
require 'includes/acf-blocks.php';
// Restrict access to ACF Admin screens.
require 'includes/acf-restrict-access.php';
// Display and template helpers.
require 'includes/template-tags.php';

/**
 * Pre-populate default content for Album post type.
 *
 * @link https://developer.wordpress.org/reference/hooks/default_content/
 *
 * @param string $content Default post content.
 * @param WP_Post $post Post object.
 *
 * @return string $content Modified post content.
 */
function demo_acf_filter_album_content( $content, $post ) {
	if ( 'album' === $post->post_type ) {
		$content = '<!-- wp:columns {"verticalAlignment":"top","align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top"} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:post-featured-image /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top"} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:post-title {"fontSize":"max-36"} /-->

<!-- wp:acf/album-track-list {"name":"acf/album-track-list","data":{"field_646e59da6f033":""},"mode":"auto"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->';
	}

	return $content;
}

add_filter( 'default_content', 'demo_acf_filter_album_content', 10, 2 );

/**
 * Loop through an Album post type's tracks and
 * assign featured image to each associated Song
 * post type.
 *
 * @link https://developer.wordpress.org/reference/hooks/save_post_post-post_type/
 *
 * @param integer $post_id Post ID.
 *
 * @return void
 */
function demo_acf_album_update_song_image( $post_id ) {
	$featured_img_id = get_post_thumbnail_id( $post_id );
	$tracks          = get_field( 'track_list', $post_id );

	if ( ! $tracks ) {
		return;
	}

	foreach ( $tracks as $track ) {
		update_post_meta( $track, '_thumbnail_id', $featured_img_id );
	}
}

add_action( 'save_post_album', 'demo_acf_album_update_song_image', 99, 2 );

/**
 * Filter and show additional columns for Album post type.
 *
 * @link https://developer.wordpress.org/reference/hooks/manage_post-post_type_posts_custom_column/
 */
add_filter(
	'manage_album_posts_columns',
	function ( $columns ) {
		$columns = array_merge( $columns, array( 'released' => __( 'Released', 'demo-acf' ) ) );
		$columns = array_merge( $columns, array( 'label' => __( 'Label', 'demo-acf' ) ) );

		return $columns;
	}
);

/**
 * Add custom columns to Album post type.
 *
 * @link https://developer.wordpress.org/reference/hooks/manage_posts_custom_column/
 */
add_action(
	'manage_album_posts_custom_column',
	function ( $column_key, $post_id ) {
		if ( 'released' === $column_key ) {
			$released = get_post_meta( $post_id, 'album_release_date', true );
			if ( $released ) {
				$formatted = date( 'M d, Y', strtotime( $released ) );
				echo esc_html( $formatted );
			}
		}
		if ( 'label' === $column_key ) {
			$label = get_post_meta( $post_id, 'label', true );
			if ( $label ) {
				echo esc_html( $label );
			}
		}
	},
	10,
	2
);

/**
 * Filter and show additional columns for Song post type.
 *
 * @link https://developer.wordpress.org/reference/hooks/manage_post-post_type_posts_custom_column/
 */
add_filter(
	'manage_song_posts_columns',
	function ( $columns ) {
		$columns = array_merge( $columns, array( 'album' => __( 'Album', 'demo-acf' ) ) );

		return $columns;
	}
);

/**
 * Add custom columns to Song post type.
 *
 * @link https://developer.wordpress.org/reference/hooks/manage_posts_custom_column/
 */
add_action(
	'manage_song_posts_custom_column',
	function ( $column_key, $post_id ) {
		if ( 'album' === $column_key ) {
			$album = get_post_meta( $post_id, 'associated_album', true );
			if ( $album && $album[0] ) {
				$album_title = get_the_title( $album[0] );
				echo esc_html( $album_title );
			}
		}
	},
	10,
	2
);
