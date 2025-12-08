<?php
/**
 * Title: Header Home
 * Slug: olivaint/header-home
 * Categories: featured, header
 * Block Types: core/template-part/header
 */

declare( strict_types = 1 );
?>

<!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/group.webp","dimRatio":50,"isUserOverlayColor":true,"focalPoint":{"x":0.5,"y":1},"minHeight":100,"minHeightUnit":"vh","customGradient":"linear-gradient(180deg,rgb(0,0,0) 12%,rgba(0,0,0,0.32) 51%,rgba(0,0,0,0.1) 70%,rgb(0,0,0) 87%)","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(180deg,rgb(0,0,0) 12%,rgba(0,0,0,0.32) 51%,rgba(0,0,0,0.1) 70%,rgb(0,0,0) 87%)"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr_e( 'Group picture.', 'olivaint' ); ?>" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/group.webp" style="object-position:50% 100%" data-object-fit="cover" data-object-position="50% 100%"/>
    <div class="wp-block-cover__inner-container">
        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","flexWrap":"wrap"}} -->
        <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50)">
            <!-- wp:site-logo {"width":186} /-->

            <!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontStyle":"normal","lineHeight":"1"}},"fontSize":"xxx-large"} -->
            <h1 class="wp-block-heading has-text-align-center has-xxx-large-font-size" style="font-style:normal;line-height:1">Olivaint Conference of Belgium</h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"typography":{"fontStyle":"italic","fontWeight":"600"}},"fontSize":"x-large","fontFamily":"playfair-display"} -->
            <p class="has-playfair-display-font-family has-x-large-font-size" style="font-style:italic;font-weight:600">Royal Association</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60)">
            <!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}}} -->
            <p class="has-text-align-center" style="font-style:normal;font-weight:400">Explore</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"align":"center","fontSize":"x-large"} -->
            <p class="has-text-align-center has-x-large-font-size">↓</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
    </div>
</div>
<!-- /wp:cover -->