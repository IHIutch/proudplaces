<?php

/* 
Template Name: Contributors Template 
*/

namespace App;

use App\Http\Controllers\Controller;
use Rareloop\Lumberjack\Http\Responses\TimberResponse;
use App\PostTypes\Contributor;
use Timber\Timber;

class ContributorsController extends Controller
{
    public function handle()
    {
        $context = Timber::get_context();
        $contributors = Contributor::builder()->get();

        $context['contributors'] = $contributors;


        return new TimberResponse('templates/contributors.twig', $context);
    }
}
