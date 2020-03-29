<?php

$users = App::get('database')->selectAll('users');
$pageTitle = 'Home Page';

require 'views/client/home.view.php';;