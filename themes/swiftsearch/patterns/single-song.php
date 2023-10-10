<?php
/**
 * Title: Single song.
 * Slug: swiftsearch/single-song
 * Block Types: core/post-content
 * Post Types: song, wp_template
 * Template Types: single-song
 * Viewport width: 1400
 * Inserter: no
 */

?>
<!-- wp:group {"style":{"position":{"type":"sticky","top":"0px"}},"backgroundColor":"secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-secondary-background-color has-background"><!-- wp:template-part {"slug":"header-copy","theme":"swiftsearch","tagName":"header","align":"wide","className":"site-header"} /--></div>
<!-- /wp:group -->

<!-- wp:cover {"dimRatio":90,"overlayColor":"secondary","tagName":"main","style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|large"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-cover" style="padding-top:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--large)"><span aria-hidden="true" class="wp-block-cover__background has-secondary-background-color has-background-dim-90 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-396" alt="" src="https://swift-1982.local/wp-content/uploads/2023/09/reputation.webp" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-color has-text-color"><!-- wp:post-title {"level":1} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"5px","margin":{"bottom":"30px"}},"typography":{"fontSize":"18px"}},"className":"post-meta","layout":{"type":"flex"}} -->
<div class="wp-block-group post-meta" style="margin-bottom:30px;font-size:18px"><!-- wp:acf/associated-albums {"name":"acf/associated-albums","data":{},"mode":"preview"} /--></div>
<!-- /wp:group -->

<!-- wp:acf/song-lyrics {"name":"acf/song-lyrics","data":{},"mode":"preview"} /--></div>
<!-- /wp:group --></div></main>
<!-- /wp:cover -->

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|large"}}},"className":"site-content"} -->
<main class="wp-block-group site-content" style="margin-top:0;padding-top:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--large)"><!-- wp:acf/song-cover {"name":"acf/song-cover","data":{},"mode":"preview"} /--></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","theme":"swiftsearch","tagName":"footer","className":"site-footer"} /-->
