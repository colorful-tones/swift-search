<?php
/**
 * Track List block.
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during backend preview render.
 * @param int $post_id The post ID the block is rendering content against.
 *          This is either the post ID currently being displayed inside a query loop,
 *          or the post ID of the post hosting this block.
 * @param array $context The context provided to the block by the post or it's parent block.
 */

$tracks = get_field( 'track_list', $post_id );
?>

<?php if ( $is_preview ) : ?>
	<p>Please assign some tracks to this album in the right sidebar.</p>
<?php endif; ?>

<?php
if ( ! $is_preview && $tracks ) :
	?>
	<ol>
	<?php
	foreach ( $tracks as $track ) :
		$permalink    = get_permalink( $track );
		$track_title  = get_the_title( $track );
		$track_length = get_field( 'length', $track );
		?>
		<li>
			<a href="<?php echo esc_url( $permalink ); ?>"><?php echo esc_html( $track_title ); ?></a>
			<?php if ( $track_length ) : ?>
				<span><?php echo esc_html( $track_length ); ?></span>
			<?php endif; ?>
		</li>
	<?php endforeach; ?>
	</ol>

	<?php
	endif;
?>
