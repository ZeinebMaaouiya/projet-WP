<?php declare( strict_types = 1 ); ?>
<?php
/**
 * Title: Header with Image
 * Slug: aether/header-image
 * Categories: featured
 * Inserter: no
 */
?>

<!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/aether_hero_img.jpg","dimRatio":20,"isUserOverlayColor":true,"focalPoint":{"x":0.5,"y":0.3},"minHeight":50,"minHeightUnit":"vh","customGradient":"linear-gradient(180deg,rgb(90,90,90) 4%,rgb(255,255,255) 22%)","contentPosition":"top center","isDark":false,"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|theme-1"}}}},"textColor":"theme-1","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull is-light has-custom-content-position is-position-top-center has-theme-1-color has-text-color has-link-color" style="min-height:50vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-20 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(180deg,rgb(90,90,90) 4%,rgb(255,255,255) 22%)"></span><img class="wp-block-cover__image-background " alt="" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/aether_hero_img.jpg" style="object-position:50% 60%" data-object-fit="cover" data-object-position="50% 60%"/><div class="wp-block-cover__inner-container">

<!-- wp:pattern {"slug":"aether/header-content"} /-->

<!-- wp:spacer {"height":"var:preset|spacing|80"} -->
<div style="height:var(--wp--preset--spacing--80)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"500px"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.1em"}},"fontSize":"custom-1","fontFamily":"chivo"} -->
<p class="has-text-align-center has-chivo-font-family has-custom-1-font-size" style="letter-spacing:0.1em;text-transform:uppercase">Light as air</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size">Delicate, ethereal designs crafted with nature’s finest materials.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->