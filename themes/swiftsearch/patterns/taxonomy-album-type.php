<?php
/**
 * Title: taxonomy-album-type
 * Slug: swiftsearch/taxonomy-album-type
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:group {"style":{"position":{"type":"sticky","top":"0px"}},"backgroundColor":"secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-secondary-background-color has-background"><!-- wp:template-part {"slug":"header","area":"header","align":"wide"} /--></div>
<!-- /wp:group -->

<!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/Taylor-Swift.webp","id":261,"dimRatio":90,"overlayColor":"secondary","focalPoint":{"x":0.46000000000000002,"y":0.17000000000000001},"style":{"color":{"duotone":"var:preset|duotone|secondary-and-white"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
<div class="wp-block-cover" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><span aria-hidden="true" class="wp-block-cover__background has-secondary-background-color has-background-dim-90 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-261" alt="" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/Taylor-Swift.webp" style="object-position:46% 17%" data-object-fit="cover" data-object-position="46% 17%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|large"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:0;padding-top:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--large)"><!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|medium"},"blockGap":"10px"}}} -->
<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--medium)"><!-- wp:query-title {"type":"archive","showPrefix":false,"style":{"spacing":{"margin":{"bottom":"0"}}},"fontSize":"large"} /--></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":0,"query":{"pages":0,"offset":0,"postType":"album","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"perPage":12,"taxQuery":null,"parents":[]},"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"10px","margin":{"bottom":"var:preset|spacing|large"}}}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--large)"><!-- wp:post-featured-image {"isLink":true,"style":{"color":{"duotone":"var:preset|duotone|secondary-and-white"}}} /-->

<!-- wp:post-title {"isLink":true,"fontSize":"medium"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"paginationArrow":"chevron","align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></main>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:template-part {"slug":"footer","area":"footer"} /-->