<?php

$tasks = $database->selectAll('tasks');

$view = 'home';
require 'views/client/home.view.php';