<?php

require 'connection/Connection.php';
require 'connection/QueryBuilder.php';


return new QueryBuilder(Connection::make());
