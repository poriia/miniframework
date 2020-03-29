<?php

namespace App\Core;

class Redirect
{
    public static function route($uri = '')
    {
        header("location: /{$uri}");
    }
    
}