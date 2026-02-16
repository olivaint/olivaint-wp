<?php
/**
 * Title: Page Title
 * Slug: olivaint/title
 * Categories: featured, title
 * Inserter: yes
 * Sync: false
 */

declare(strict_types=1) ?>

<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0"}}}} -->
<div class="wp-block-group alignfull" style="margin-top:0">

  <!-- wp:cover {"useFeaturedImage":true,"dimRatio":60,"overlayColor":"contrast","isUserOverlayColor":true,"minHeight":169,"align":"full","layout":{"type":"constrained"}} -->
  <div class="wp-block-cover alignfull" style="min-height:169px">
    <span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim-60 has-background-dim"></span>

    <div class="wp-block-cover__inner-container">
      <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
      <div class="wp-block-group">
        <!-- wp:post-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} /-->

        <!-- wp:paragraph {"fontSize":"medium", "placeholder":"Automatic subtitle"} -->
        <?php do_action("plugins/wp_subtitle/the_subtitle", [
            "before" => '<p class="has-medium-font-size">',
            "after" => "</p>",
            "default_value" => "",
        ]); ?>
        <!-- /wp:paragraph -->

      </div>
      <!-- /wp:group -->
    </div>
  </div>
  <!-- /wp:cover -->

</div>
<!-- /wp:group -->
