<?php

class Connection
{
    private function __construct()
    {
    }
    
    public static function make($config)
    {
        try {
            return new PDO(
                $config['connection'].';dbname='.$config['name'],
                $config['username'],
                $config['password'],
                $config['options']
            );
        } catch (\Exception $exception) {
            die($exception->getMessage());
        }
    }
}