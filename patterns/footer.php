<?php
/**
 * Title: Default Footer
 * Slug: olivaint/footer
 * Categories: featured, footer
 * Block Types: core/template-part/footer
 */

declare(strict_types=1) ?>

<!-- wp:group {"templateLock":"all","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"primary","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-color has-primary-background-color has-text-color has-background has-link-color" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">

    <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
    <div class="wp-block-group alignwide">

        <!-- wp:group {"layout":{"type":"constrained","justifyContent":"left"}} -->
        <div class="wp-block-group">
        <!-- wp:image {"width":"150px","height":"auto","sizeSlug":"full","linkDestination":"none"} -->
        <figure class="wp-block-image size-full is-resized">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo-white.png" alt="Logo with text" style="width:150px;height:auto"/>
        </figure>
        <!-- /wp:image -->
        </div>
        <!-- /wp:group -->

        <!-- wp:site-title {"level":1,"align":"wide","style":{"typography":{"fontFamily":"playfair-display-sc","fontWeight":"700"}},"fontSize":"large"} /-->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"align":"wide"} -->
    <div class="wp-block-columns alignwide">
    	<!-- wp:column -->
    	<div class="wp-block-column">
    		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"},"typography":{"lineHeight":"1"}},"fontSize":"x-small","layout":{"type":"flex","orientation":"vertical"}} -->
    		<div class="wp-block-group has-x-small-font-size" style="line-height:1">
    			<!-- wp:paragraph -->
    			<p><?php echo esc_html__("Rue d'Egmont, 11", "olivaint"); ?></p>
    			<!-- /wp:paragraph -->
    			<!-- wp:paragraph -->
    			<p><?php echo esc_html__("1000 Brussels", "olivaint"); ?></p>
    			<!-- /wp:paragraph -->

    			<!-- wp:paragraph -->
    			<p>+32 484 24 36 99</p>
    			<!-- /wp:paragraph -->
    			<!-- wp:paragraph -->
    			<p>info@olivaint.be</p>
    			<!-- /wp:paragraph -->
    		</div>
    		<!-- /wp:group -->
    	</div>
    	<!-- /wp:column -->

    	<!-- wp:column -->
    	<div class="wp-block-column">
    		<!-- wp:columns -->
    		<div class="wp-block-columns">
    			<!-- wp:column {"width":"33.33%"} -->
    			<div class="wp-block-column" style="flex-basis:33.33%">
    				<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
    					<!-- wp:navigation-link {"label":"Cookie Policy","url":"#"} /-->
    					<!-- wp:navigation-link {"label":"Privacy Policy","url":"#"} /-->
    					<!-- wp:navigation-link {"label":"Policies","url":"#"} /-->
    				<!-- /wp:navigation -->
    			</div>
    			<!-- /wp:column -->

    			<!-- wp:column {"width":"33.33%"} -->
    			<div class="wp-block-column" style="flex-basis:33.33%">
    				<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
    					<!-- wp:navigation-link {"label":"Parent Portal","url":"#"} /-->
    					<!-- wp:navigation-link {"label":"Pupil Portal","url":"#"} /-->
    					<!-- wp:navigation-link {"label":"Stuff Portal","url":"#"} /-->
    				<!-- /wp:navigation -->
    			</div>
    			<!-- /wp:column -->

    			<!-- wp:column {"width":"33.33%"} -->
    			<div class="wp-block-column" style="flex-basis:33.33%">
    				<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
    					<!-- wp:navigation-link {"label":"Term Dates","url":"#"} /-->
    					<!-- wp:navigation-link {"label":"School Calendar","url":"#"} /-->
    					<!-- wp:navigation-link {"label":"Admissions","url":"#"} /-->
    				<!-- /wp:navigation -->
    			</div>
    			<!-- /wp:column -->
    		</div>
    		<!-- /wp:columns -->
    	</div>
    	<!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group alignwide">
    	<!-- wp:social-links {"iconColor":"base","iconColorValue":"#064626","size":"has-small-icon-size","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}},"className":"is-style-logos-only"} -->
    	<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only">
    		<!-- wp:social-link {"url":"https://www.facebook.com/OlivaintBE","service":"facebook"} /-->

    		<!-- wp:social-link {"url":"https://www.instagram.com/olivaint_be/","service":"instagram"} /-->

    		<!-- wp:social-link {"url":"https://www.linkedin.com/school/conf%C3%A9rence-olivaint-genootschap","service":"linkedin"} /-->

    		<!-- wp:social-link {"url":"https://www.youtube.com/channel/UCA6152emRJtr1Pn6apwRleA","service":"youtube"} /-->
    	</ul>
    	<!-- /wp:social-links -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->
