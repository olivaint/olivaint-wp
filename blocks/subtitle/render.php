<?php
$subtitle = get_post_meta(get_the_ID(), "olivaint_subtitle", true);

if ($subtitle): ?>
    <h4 class="page-subtitle"><?php echo esc_html($subtitle); ?></h4>
<?php endif;
