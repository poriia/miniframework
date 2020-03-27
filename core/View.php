<?php

class View
{
    public static function load($view, $data = [])
    {
        return "views/{$view}";
    }
}