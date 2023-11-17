<?php
 /**
  * Title: Header Top Bar
  * Slug: quext/header-top-bar
  * Categories: quext,header
  */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"12px","right":"10%","bottom":"12px","left":"10%"},"blockGap":"0px"}},"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:12px;padding-right:10%;padding-bottom:12px;padding-left:10%"><!-- wp:group {"align":"full","className":"mobile-aligncenter","layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between"}} -->
<div class="wp-block-group alignfull mobile-aligncenter"><!-- wp:group {"className":"mobile-aligncenter"} -->
<div class="wp-block-group mobile-aligncenter"><!-- wp:social-links {"iconColor":"white","iconColorValue":"#ffffff","size":"has-small-icon-size","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"blockGap":{"top":"20px","left":"20px"}}},"className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only" style="margin-top:0px;margin-bottom:0px"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"wordpress"} /-->

<!-- wp:social-link {"url":"#","service":"fivehundredpx"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"vk"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground","className":"mobile-aligncenter","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group mobile-aligncenter has-foreground-color has-text-color has-link-color"><!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:image {"id":8088,"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primarydefault-and-default"}},"className":"is-style-default vertical-aligncenter"} -->
<figure class="wp-block-image size-full is-style-default vertical-aligncenter"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/icon-phone.png" alt="" class="wp-image-8088"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="font-style:normal;font-weight:500"> <?php esc_html_e(' +123 456 789','quext');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"id":8087,"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primarydefault-and-default"}},"className":"is-style-default vertical-aligncenter"} -->
<figure class="wp-block-image size-full is-style-default vertical-aligncenter"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/icon-envelope.png" alt="" class="wp-image-8087"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="font-style:normal;font-weight:500"><a href="<?php esc_attr_e('mailto:support@example.com','quext');?>"><?php esc_html_e('support@example.com','quext');?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"id":8087,"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primarydefault-and-default"}},"className":"is-style-default vertical-aligncenter"} -->
<figure class="wp-block-image size-full is-style-default vertical-aligncenter"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/icon-location.png" alt="" class="wp-image-8087"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Your Location','quext');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->