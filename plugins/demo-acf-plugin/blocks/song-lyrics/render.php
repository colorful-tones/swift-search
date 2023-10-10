<?php
/**
 * Song Lyrics block.
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during backend preview render.
 * @param int $post_id The post ID the block is rendering content against.
 *          This is either the post ID currently being displayed inside a query loop,
 *          or the post ID of the post hosting this block.
 * @param array $context The context provided to the block by the post or it's parent block.
 */

$lyrics = get_field( 'lyrics', $post_id );
?>

<?php if ( $is_preview ) : ?>
	<p>Song lyrics will be output here. Remove this block from site editor to remove the ouput of the lyrics.</p>
<?php endif; ?>

<?php if ( ! $is_preview && $lyrics ) : ?>
	<?php if ( 'song' === $context['postType'] ) : ?>
		<pre><?php echo esc_html( $lyrics ); ?></pre>
	<?php endif; ?>
<?php endif; ?>
