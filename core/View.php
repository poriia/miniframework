<?php

namespace App\Core;

class View
{
    public static function load($name, $data = [])
    {
        extract($data);
        
        return require "app/views/{$name}.view.php";
    }
}