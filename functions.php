<?php

function dd($data)
{
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';
}

function connectDb()
{
    try {
        return new PDO('mysql:host=localhost:3307;dbname=myframework', 'root', '');
    } catch (\Exception $exception) {
        die($exception->getMessage());
    }
}

function fetchAllTasks($pdo)
{
    $statement = $pdo->prepare('SELECT * FROM tasks');
    $statement->execute();
    
    return $statement->fetchAll(PDO::FETCH_OBJ);
}