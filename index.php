<?php

require "functions.php";

$pdo = connectDb();
$tasks = fetchAllTasks($pdo);

require 'index.view.php';


