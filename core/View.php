<?php

class View
{
    public static function load($name, $data = [])
    {
        extract($data);
        
        return require "views/{$name}.view.php";
    }
}