<?php
function after_post_content($content)
{
    
    $facebook_sh = '<hr>';
    $facebook_sh .= '<div class="share">
    <a href="https://www.facebook.com/sharer/sharer.php?u=' .  get_the_permalink() .
        '"><span class="dashicons dashicons-facebook">share</span></a></div>';

    return $content . $facebook_sh;
}
add_filter('the_content', 'after_post_content');
