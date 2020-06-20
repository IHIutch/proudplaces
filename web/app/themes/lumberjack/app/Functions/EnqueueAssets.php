<?php

namespace App\Functions;

class EnqueueAssets
{
    public static function enqueueAssets()
    {
        add_filter('wp_enqueue_scripts', function () {
            $style_path = get_template_directory() . '/dist/css/style.min.css';
            wp_register_style('main-css', get_template_directory_uri() . '/dist/css/style.min.css', [], filemtime($style_path), null);
            wp_enqueue_style('main-css');

            $js_path = get_template_directory() . '/dist/js/script.min.js';
            wp_register_script('main-scripts', get_template_directory_uri() . '/dist/js/script.min.js', ['jquery'], filemtime($js_path), true);
            wp_enqueue_script('main-scripts');
        });
    }
}
