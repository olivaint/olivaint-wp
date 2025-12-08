<?php
/**
 * Title: Post Terms
 * Slug: olivaint/post-terms
 * Inserter: no
 */

declare( strict_types = 1 );
?>

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group">
	<!-- wp:post-terms {"term":"category","prefix":"<?php echo esc_html_x( 'Posted in: ', 'This is a prefix for the category', 'olivaint' ); ?>"} /-->

	<!-- wp:post-terms {"term":"post_tag","prefix":"<?php echo esc_html_x( 'Posted in: ', 'This is a prefix for the tags', 'olivaint' ); ?>"} /-->
</div>
<!-- /wp:group -->
