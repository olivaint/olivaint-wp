<?php
/**
 * Title: Page Title
 * Slug: olivaint/title
 * Categories: featured, title
 */

declare(strict_types=1) ?>

<!-- wp:cover {"useFeaturedImage":true,"dimRatio":60,"overlayColor":"contrast","isUserOverlayColor":true,"minHeight":169,"minHeightUnit":"px","layout":{"type":"constrained"}} -->
<div class="wp-block-cover" style="min-height: 169px">
    <span
        aria-hidden="true"
        class="wp-block-cover__background has-contrast-background-color has-background-dim-60 has-background-dim"
    ></span>
    <div class="wp-block-cover__inner-container">
        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
        <div class="wp-block-group">
            <!-- wp:post-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} /-->

            <!-- wp:paragraph {"style":{"typography":{"textTransform":"none","fontStyle":"normal","fontWeight":"500"}},"fontSize":"medium"} -->
            <p
                class="has-medium-font-size"
                style="
                    font-style: normal;
                    font-weight: 500;
                    text-transform: none;
                "
            >
                Subtitle
            </p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
    </div>
</div>
<!-- /wp:cover -->
