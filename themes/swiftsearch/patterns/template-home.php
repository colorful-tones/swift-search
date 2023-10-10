<?php
/**
 * Title: Home template
 * Slug: swiftsearch/template-home
 * Template Types: front-page, index, home, page
 * Viewport width: 1400
 * Inserter: no
 */
?>

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"primary","textColor":"base","layout":{"type":"constrained"}} -->
<main class="wp-block-group has-base-color has-primary-background-color has-text-color has-background has-link-color" style="margin-top:0"><!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/230705143236-01-taylor-swift-uncruel-summer-restricted.webp","id":259,"dimRatio":90,"overlayColor":"secondary","align":"full","style":{"color":{"duotone":"var:preset|duotone|black-and-white"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull"><span aria-hidden="true" class="wp-block-cover__background has-secondary-background-color has-background-dim-90 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-259" alt="" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/230705143236-01-taylor-swift-uncruel-summer-restricted.webp" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"31vh","bottom":"31vh"},"blockGap":"var:preset|spacing|x-small"}},"className":"welcome","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center","justifyContent":"stretch"}} -->
<div class="wp-block-group welcome" style="padding-top:31vh;padding-bottom:31vh"><!-- wp:heading {"textAlign":"center","style":{"typography":{"letterSpacing":"-1px"},"spacing":{"margin":{"bottom":"0px"}}},"className":"wp-block-heading","fontSize":"max-48"} -->
<h2 class="wp-block-heading has-text-align-center has-max-48-font-size" style="margin-bottom:0px;letter-spacing:-1px">Swift Results with <br>WP Engine Smart Search</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
<p class="has-text-align-center has-medium-font-size">Find your favorite Taylor Swift lyrics <br>and shower-sing at the top of your lungs!</p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"Search","showLabel":false,"width":100,"widthUnit":"%","buttonText":"Search","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"secondary","textColor":"base","fontSize":"medium"} /--></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","theme":"swiftsearch","tagName":"footer","className":"site-footer"} /-->