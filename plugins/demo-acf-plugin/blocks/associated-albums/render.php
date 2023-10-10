<?php
/**
 * Associated Albums block.
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during backend preview render.
 * @param int $post_id The post ID the block is rendering content against.
 *          This is either the post ID currently being displayed inside a query loop,
 *          or the post ID of the post hosting this block.
 * @param array $context The context provided to the block by the post or it's parent block.
 */

$album = get_field( 'associated_album', $post_id );

$album_info =
	sprintf(
		'<p class="has-small-font-size">Album: <a href="%1$s" rel="bookmark">%2$s</a></p>',
		esc_url( get_permalink( $album[0] ) ),
		esc_html( get_the_title( $album[0] ) )
	);
?>

<?php if ( $is_preview ) : ?>
	<p>Associated Album goes here. Remove this block from site editor to remove the ouput of the associated album info.</p>
<?php endif; ?>

<?php if ( ! $is_preview && $album_info ) : ?>
	<?php echo wp_kses_post( $album_info ); ?>
	<?php
endif;
