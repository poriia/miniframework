<?php

$router->get('', 'controllers/home.php');
$router->get('contact', 'controllers/contact.php');
$router->get('about', 'controllers/about.php');
$router->post('user/store', 'controllers/user.php');