<?php
function after_post_content($content)
{
    
    $facebook_sh = '<hr>';
    $facebook_sh .= '<div class="share">
    <a href="//www.facebook.com/dialog/share?' .  get_the_permalink() .
        '"><span class="dashicons dashicons-facebook">share</span></a></div>';

    return $content . $facebook_sh;
}
add_filter('the_content', 'after_post_content');
