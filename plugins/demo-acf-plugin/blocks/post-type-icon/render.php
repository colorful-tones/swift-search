<?php
/**
 * Post Type Icon block.
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during backend preview render.
 * @param int $post_id The post ID the block is rendering content against.
 *          This is either the post ID currently being displayed inside a query loop,
 *          or the post ID of the post hosting this block.
 * @param array $context The context provided to the block by the post or it's parent block.
 */

?>

<?php if ( ! $is_preview ) : ?>
	<?php if ( 'song' === $context['postType'] ) : ?>
		<div class="post-type-icon post-type-icon--song">
			<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 -1 32 32" aria-hidden="true" focusable="false"><path fill="currentColor" fill-rule="evenodd" d="M31 0c-.143.049-17 4-17 4-.553.135-1 .448-1 1v14.002c-2.101-1.366-5.478-1.364-8.49.238-3.803 2.023-5.55 5.791-3.904 8.419 1.647 2.627 6.064 3.117 9.866 1.095C12.923 27.45 14.615 24.981 15 23c.067-.135 0-17.235 0-17.235l15-3.53v12.767c-2.101-1.366-5.478-1.364-8.49.238-3.803 2.023-5.55 5.791-3.904 8.419 1.647 2.627 6.064 3.117 9.866 1.095C29.923 23.45 31.615 20.981 32 19V1c0-.553-.447-1.187-1-1"/></svg>
			<span>Song</span>
		</div>
	<?php endif; ?>

	<?php if ( 'album' === $context['postType'] ) : ?>
		<div class="post-type-icon post-type-icon--album">
			<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="-2 0 30 30" aria-hidden="true" focusable="false"><path fill="currentColor" fill-rule="evenodd" d="M25 0a1 1 0 0 0-1 1v16.371c-2.216-1.663-5.869-1.698-9.124.182-4.032 2.328-5.82 6.629-4.139 9.69 1.745 3.18 6.43 3.588 10.461 1.26 3.096-1.787 4.9-4.759 4.783-7.411L26 21V1a1 1 0 0 0-1-1ZM1 15h11a1 1 0 1 0 0-2H1a1 1 0 0 0 0 2Zm6 4H1a1 1 0 1 0 0 2h6a1 1 0 1 0 0-2ZM1 9h18a1 1 0 1 0 0-2H1a1 1 0 1 0 0 2Zm0-6h18a1 1 0 1 0 0-2H1a1 1 0 1 0 0 2Z"/></svg>
			<span>Album</span>
		</div>
	<?php endif; ?>
<?php endif; ?>
