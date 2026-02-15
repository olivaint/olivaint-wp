<?php
/**
 * Title: Page Title
 * Slug: olivaint/title
 * Categories: featured, title
 */

declare(strict_types=1) ?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top: 0px">
    <!-- wp:cover {"url":"","dimRatio":60,"overlayColor":"contrast","isUserOverlayColor":true,"minHeight":169,"minHeightUnit":"px","layout":{"type":"constrained"}} -->
    <div class="wp-block-cover" style="min-height: 169px">
        <span
            aria-hidden="true"
            class="wp-block-cover__background has-contrast-background-color has-background-dim-60 has-background-dim"
        ></span>
        <div class="wp-block-cover__inner-container">
            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
            <div class="wp-block-group">
                <!-- wp:post-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} /-->

                <!-- wp:paragraph {"placeholder":"Add subtitle…","style":{"typography":{"textTransform":"none","fontStyle":"normal","fontWeight":"500"}},"fontSize":"medium"} -->
                <p class="has-medium-font-size" style="font-style: normal; font-weight: 500; text-transform: none;"></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
    </div>
    <!-- /wp:cover -->
</div>
<!-- /wp:group -->
