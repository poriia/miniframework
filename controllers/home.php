<?php
$tasks = $app['database']->selectAll('tasks');
$pageTitle = 'Home Page';

require 'views/client/home.view.php';