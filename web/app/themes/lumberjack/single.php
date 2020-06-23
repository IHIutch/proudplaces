<?php

/**
 * The Template for displaying all single posts
 */

namespace App;

use App\Http\Controllers\Controller;
use Rareloop\Lumberjack\Http\Responses\TimberResponse;
use Rareloop\Lumberjack\Post;
use Timber\Timber;

class SingleController extends Controller
{
    public function handle()
    {
        $context = Timber::get_context();
        $post = new Post();
        $word_count = str_word_count(strip_tags($post->content));
        $read_time =  ceil($word_count / 200);

        $context['post'] = $post;
        $context['read_time'] = $read_time . " Minute" . ($read_time > 1 ? "s" : "");


        return new TimberResponse('templates/post.twig', $context);
    }
}
