<?php

/**
 * Title: Header Banner Image
 * Slug:quext/header-banner-image
 * Categories:quext,header,featured
 */
?>

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() );?>/assets/images/header-banner.jpg","id":66,"dimRatio":30,"minHeight":600,"isDark":false,"align":"full","className":"banner-image","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","right":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|80"}}}} -->
<div class="wp-block-cover alignfull is-light banner-image" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80);min-height:600px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-30 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-66" alt="" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/header-banner.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"100%","layout":{"type":"default"}} -->
<div class="wp-block-column" style="flex-basis:100%"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"3.5em"}},"textColor":"white","className":"banner-title"} -->
<p class="has-text-align-center banner-title has-white-color has-text-color" id="div" style="font-size:3.5em"><?php esc_html_e('Welcome to Block Based Theme.','quext'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"100%"} -->
<div class="wp-block-column" style="flex-basis:100%"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.2em"}},"textColor":"white","className":"banner-description"} -->
<p class="has-text-align-center banner-description has-white-color has-text-color" id="span" style="font-size:1.2em"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisci elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum..','quext'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","style":{"border":{"radius":"0px"}},"fontSize":"medium"} -->
<div class="wp-block-button has-custom-font-size has-medium-font-size"><a class="wp-block-button__link has-primary-background-color has-background wp-element-button" href="#" style="border-radius:0px"><?php esc_html_e('Continue Reading.','quext'); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"background","textColor":"primary","style":{"border":{"radius":"0px"}},"fontSize":"medium"} -->
<div class="wp-block-button has-custom-font-size has-medium-font-size"><a class="wp-block-button__link has-primary-color has-background-background-color has-text-color has-background wp-element-button" href="#" style="border-radius:0px"><?php esc_html_e('Purchase Now.','quext'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover -->