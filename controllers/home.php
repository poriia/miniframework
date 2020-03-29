<?php
$users = $app['database']->selectAll('users');
$pageTitle = 'Home Page';

require 'views/client/home.view.php';