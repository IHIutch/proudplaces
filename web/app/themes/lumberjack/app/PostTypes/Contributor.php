<?php

namespace App\PostTypes;

use Rareloop\Lumberjack\Post;

class Contributor extends Post
{
    /**
     * Return the key used to register the post type with WordPress
     * First parameter of the `register_post_type` function:
     * https://codex.wordpress.org/Function_Reference/register_post_type
     *
     * @return string
     */
    public static function getPostType()
    {
        return 'contributors';
    }

    /**
     * Return the config to use to register the post type with WordPress
     * Second parameter of the `register_post_type` function:
     * https://codex.wordpress.org/Function_Reference/register_post_type
     *
     * @return array|null
     */
    protected static function getPostTypeConfig()
    {
        return [

            'labels' => [
                'name' => __('Contributors'),
                'singular_name' => __('Contributors'),
                'add_new_item' => __('Add New Contributor'),
            ],
            'menu_icon' => __('dashicons-admin-users'),
            'public' => true,
            'has_archive' => 'projects',
            'supports' => ['title', 'thumbnail']
        ];
    }
}
