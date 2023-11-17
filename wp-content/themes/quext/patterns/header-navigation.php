<?php
 /**
  * Title: Top Header & Navigation
  * Slug: quext/header-navigation
  * Categories: quext,header,featured
  */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"12px","right":"10%","bottom":"12px","left":"10%"},"blockGap":"0px"}},"backgroundColor":"background","className":"has-background-background-color","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group has-background-background-color has-background" style="padding-top:12px;padding-right:10%;padding-bottom:12px;padding-left:10%"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"bottom":"10px","top":"10px","right":"0px","left":"0px"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group alignfull" style="padding-top:10px;padding-right:0px;padding-bottom:10px;padding-left:0px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"className":"mobile-aligncenter","layout":{"type":"flex","justifyContent":"left","flexWrap":"wrap"}} -->
<div class="wp-block-group mobile-aligncenter"><!-- wp:site-logo {"width":49,"shouldSyncIcon":true,"style":{"color":{"duotone":["#000000","#9eef7c"]}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"},"fontSize":"tiny"} -->
<div class="wp-block-group has-tiny-font-size"><!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"1.6rem","letterSpacing":"2px","textTransform":"capitalize"}}} /-->

<!-- wp:paragraph {"fontSize":"extra-small"} -->
<p class="has-extra-small-font-size"><?php esc_html_e('Elegant Corporate Theme','quext');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group"><!-- wp:navigation {"ref":21,"textColor":"foreground","overlayBackgroundColor":"background","overlayTextColor":"foreground","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|60"},"typography":{"fontStyle":"normal","fontWeight":"500"},"layout":{"selfStretch":"fill","flexSize":null}},"fontSize":"small"} /-->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textColor":"foreground","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-foreground-color has-text-color wp-element-button" href="#" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><?php esc_html_e('Get Started','quext');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->