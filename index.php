<?php

require "functions.php";
require 'connection/Connection.php';
require 'connection/QueryBuilder.php';

$pdo = Connection::make();
$query = new QueryBuilder($pdo);
$tasks = $query->selectAll('tasks');

require 'index.view.php';


