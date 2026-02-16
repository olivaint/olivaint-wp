<?php
$content = get_post_meta(get_the_ID(), "subtitle", true);
if ($content) {
    echo '<h4 class="subtitle">' . esc_html($content) . "</h4>";
}
