<?php
/**
 * Display helpers for template rendering.
 */

// Record SVG symbol inserted in footer for reference.
// @link https://developer.wordpress.org/reference/functions/wp_footer/
add_action( 'wp_footer', 'demo_acf_output_record_svg_ref' );
// Modify featured post image to insert SVG.
// @link https://developer.wordpress.org/reference/hooks/post_thumbnail_html/
add_filter( 'post_thumbnail_html', 'demo_acf_output_record_call' );
// Assign custom classes to Post Featured Image.
// @link https://developer.wordpress.org/reference/hooks/render_block/
add_filter( 'render_block', 'demo_acf_add_class_featured_img', 10, 2 );

/**
 * Add Album SVG symbol to footer.
 *
 * @link https://developer.wordpress.org/reference/functions/wp_footer/
 *
 * @return void
 */
function demo_acf_output_record_svg_ref() {
	?>

	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
		<symbol id="icon-vinyl-record" viewBox="0 0 800 800">
			<title>Vinyl Record</title>
			<g style="fill: #181819; stroke: #141415; stroke-width: 1.5;">
				<circle cx="400" cy="400" r="380"></circle>
				<circle cx="400" cy="400" r="370"></circle>
				<circle cx="400" cy="400" r="360"></circle>
				<circle cx="400" cy="400" r="350"></circle>
				<circle cx="400" cy="400" r="340"></circle>
				<circle cx="400" cy="400" r="330"></circle>
				<circle cx="400" cy="400" r="320"></circle>
				<circle cx="400" cy="400" r="310"></circle>
				<circle cx="400" cy="400" r="300"></circle>
				<circle cx="400" cy="400" r="290"></circle>
				<circle cx="400" cy="400" r="280"></circle>
				<circle cx="400" cy="400" r="270"></circle>
				<circle cx="400" cy="400" r="260"></circle>
				<circle cx="400" cy="400" r="250"></circle>
				<circle cx="400" cy="400" r="240"></circle>
				<circle cx="400" cy="400" r="230"></circle>
				<circle cx="400" cy="400" r="220"></circle>
				<circle cx="400" cy="400" r="210"></circle>
				<circle cx="400" cy="400" r="200"></circle>
			</g>
		</symbol>
	</svg>

	<?php
}

/**
 * Call and output the actual record SVG.
 *
 * @link https://developer.wordpress.org/reference/hooks/post_thumbnail_html/
 *
 * @param string $html The post thumbnail HTML.
 *
 * @return string $html New HTML.
 */
function demo_acf_output_record_call( $html ) {
	ob_start();
	?>

	<svg class="vinyl-record__icon icon icon--vinyl-record" focusable="false" aria-hidden="true"><use xlink:href="#icon-vinyl-record"></use></svg>

	<?php
	$record_svg = ob_get_clean();

	return $record_svg . $html;
}

/**
 * Use HTML API to assign classes to Post Featured Image
 *
 * @link https://developer.wordpress.org/reference/hooks/render_block/
 *
 * @param string $block_content The block content.
 * @param array $block The full block, including name and attributes.
 *
 * @return string $block_content The modified block content.
 */
function demo_acf_add_class_featured_img( $block_content, $block ) {

	if ( 'core/post-featured-image' === $block['blockName'] ) {
		$block_content = new WP_HTML_Tag_Processor( $block_content );
		$block_content->next_tag();
		$block_content->add_class( 'vinyl-record' );
		$block_content->next_tag( 'a' );
		$block_content->add_class( 'vinyl-record__cover' );
		$block_content->get_updated_html();
	}

	return $block_content;
}