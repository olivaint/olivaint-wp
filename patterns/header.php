<?php
/**
 * Title: Header
 * Slug: olivaint/header
 * Categories: featured, header
 * Block Types: core/template-part/header
 */

declare(strict_types=1) ?>

<!-- wp:group {"templateLock":"all","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group">

    <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"primary","textColor":"base","layout":{"type":"default"}} -->
    <div class="wp-block-group has-base-color has-primary-background-color has-text-color has-background has-link-color" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">

        <!-- wp:group {"style":{"dimensions":{"minHeight":""},"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
        <div class="wp-block-group">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"0rem","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"elements":{"link":{"color":{"text":"var:preset|color|base"},":hover":{"color":{"text":"var:preset|color|base"}}}}},"textColor":"base","layout":{"type":"default"}} -->
            <div class="wp-block-group has-base-color has-text-color has-link-color" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--50);padding-bottom:0rem;padding-left:var(--wp--preset--spacing--50)">
                <!-- wp:navigation {"overlayMenu":"never","overlayBackgroundColor":"primary","overlayTextColor":"base","layout":{"type":"flex","justifyContent":"center"},"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.03em"},"spacing":{"blockGap":"var:preset|spacing|40"}},"fontSize":"x-small"} /-->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"blockGap":"22px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
        <div class="wp-block-group">

            <!-- wp:site-logo {"width":100,"shouldSyncIcon":false} /-->

            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
            <div class="wp-block-group">

                <!-- wp:site-title {"level":0,"textAlign":"center","style":{"typography":{"textTransform":"none","fontWeight":"600"}},"fontSize":"x-large","fontFamily":"playfair-display-sc"} /-->

                <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1","fontStyle":"italic","fontWeight":"600"}},"fontSize":"large","fontFamily":"playfair-display"} -->
                <p class="has-playfair-display-font-family has-large-font-size" style="font-style:italic;font-weight:600;line-height:1">Royal Association</p>
                <!-- /wp:paragraph -->

            </div>
            <!-- /wp:group -->

        </div>
        <!-- /wp:group -->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->
