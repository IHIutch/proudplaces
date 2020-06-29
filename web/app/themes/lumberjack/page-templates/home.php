<?php

/* 
Template Name: Home Template 
*/

namespace App;

use App\Http\Controllers\Controller;
use Rareloop\Lumberjack\Http\Responses\TimberResponse;
use Rareloop\Lumberjack\Post;
use Timber\Timber;


class HomeController extends Controller
{
    public function handle()
    {

        $context = Timber::get_context();

        $featured = Post::builder()->limit(1)->get();
        $posts = Post::builder()->offset(1)->limit(6)->get();

        $context['featured'] = $featured;
        $context['posts'] = $posts;

        return new TimberResponse('templates/home.twig', $context);
    }
}
