<?php
/**
 * Album Meta block.
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during backend preview render.
 * @param int $post_id The post ID the block is rendering content against.
 *          This is either the post ID currently being displayed inside a query loop,
 *          or the post ID of the post hosting this block.
 * @param array $context The context provided to the block by the post or it's parent block.
 */

$release_date = get_field( 'album_release_date', $post_id );
$label        = get_field( 'label', $post_id );
?>

<?php if ( $is_preview ) : ?>
	<p>Just a placeholder for the Album's meta info, which will be displayed on the front end.</p>
<?php endif; ?>

<?php if ( ! $is_preview ) : ?>
	<?php if ( $release_date ) : ?>
		<p class="has-small-font-size" style="margin-top:0;"><strong>Original date of release:</strong> <?php echo esc_html( $release_date ); ?></p>
	<?php endif; ?>

	<?php if ( $label ) : ?>
		<p class="has-small-font-size" style="margin-top:0;"><strong>Label:</strong> <?php echo esc_html( $label ); ?></p>
	<?php endif; ?>

	<?php
endif;
