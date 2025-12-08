<?php
/**
 * Title: Header Home
 * Slug: olivaint/header-home
 * Categories: featured, header
 * Block Types: core/template-part/header
 */

declare(strict_types=1) ?>

<!-- wp:cover {"url":"<?php echo esc_url(
    get_stylesheet_directory_uri(),
); ?>/assets/images/group.webp","dimRatio":50,"isUserOverlayColor":true,"focalPoint":{"x":0.5,"y":1},"minHeight":100,"minHeightUnit":"vh","customGradient":"linear-gradient(180deg,rgb(0,0,0) 12%,rgba(0,0,0,0.32) 51%,rgba(0,0,0,0.1) 70%,rgb(0,0,0) 87%)","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(180deg,rgb(0,0,0) 12%,rgba(0,0,0,0.32) 51%,rgba(0,0,0,0.1) 70%,rgb(0,0,0) 87%)"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr_e(
    "Group photo.",
    "olivaint",
); ?>" src="<?php echo esc_url(
    get_stylesheet_directory_uri(),
); ?>/assets/images/group.webp" style="object-position:50% 100%" data-object-fit="cover" data-object-position="50% 100%"/>
	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"style":{"dimensions":{"minHeight":"100vh"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
		<div class="wp-block-group" style="min-height:100vh">
            <!-- wp:group {"style":{"dimensions":{"minHeight":""},"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
            <div class="wp-block-group">
                <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"0rem","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"elements":{"link":{"color":{"text":"var:preset|color|base"},":hover":{"color":{"text":"var:preset|color|base"}}}}},"textColor":"base","layout":{"type":"default"}} -->
                <div class="wp-block-group has-base-color has-text-color has-link-color" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--50);padding-bottom:0rem;padding-left:var(--wp--preset--spacing--50)">
                    <!-- wp:navigation {"overlayMenu":"never","overlayBackgroundColor":"primary","overlayTextColor":"base","layout":{"type":"flex","justifyContent":"center"},"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.03em"},"spacing":{"blockGap":"var:preset|spacing|40"}},"fontSize":"x-small"} /-->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","flexWrap":"wrap"}} -->
            <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50)">
                <!-- wp:site-logo {"width":186} /-->

                <!-- wp:site-title {"level":1,"textAlign":"center","style":{"typography":{"textTransform":"none","fontWeight":"600"}},"fontSize":"xxx-large","fontFamily":"playfair-display-sc"} /-->

                <!-- wp:paragraph {"style":{"typography":{"fontStyle":"italic","fontWeight":"600"}},"fontSize":"x-large","fontFamily":"playfair-display"} -->
                <p class="has-playfair-display-font-family has-x-large-font-size" style="font-style:italic;font-weight:600">Royal Association</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60)">
				<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"1rem","bottom":"1rem"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
				<div class="wp-block-group" style="padding-top:1rem;padding-bottom:1rem">
					<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}}} -->
					<p class="has-text-align-center" style="font-style:normal;font-weight:400"><?php echo esc_html__(
         "Explore",
         "olivaint",
     ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"align":"center","fontSize":"x-large"} -->
					<p class="has-text-align-center has-x-large-font-size">&darr;</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
</div>
<!-- /wp:cover -->
