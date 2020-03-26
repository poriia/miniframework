<?php

require "functions.php";

$query = require "bootstrap.php";
$tasks = $query->selectAll('tasks');

require 'index.view.php';


