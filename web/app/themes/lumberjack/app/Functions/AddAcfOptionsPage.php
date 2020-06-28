<?php

namespace App\Functions;

class AddAcfOptionsPage
{
    public static function addAcfOptionsPage()
    {
        if (function_exists('acf_add_options_page')) {
            acf_add_options_page();
        }
    }

    public static function accessAcfOptionsGlobally()
    {
        add_filter('timber_context', function ($context) {
            $context['options'] = get_fields('option');
            return $context;
        });
    }
}
