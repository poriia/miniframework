<?php

class Connection
{
    private function __construct()
    {
    }
    
    public static function make()
    {
        try {
            return new PDO('mysql:host=localhost:3307;dbname=myframework', 'root', '');
        } catch (\Exception $exception) {
            die($exception->getMessage());
        }
    }
}