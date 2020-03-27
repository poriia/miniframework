<?php
$tasks = $app['database']->selectAll('tasks');

require 'views/client/home.view.php';