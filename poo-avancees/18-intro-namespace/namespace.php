<?php

require_once 'MySql/Connection.php';
require_once 'Postgres/Connection.php';

use MySql\Connection as MySql;
use Postgres\Connection as Postgres;

$mysqlConnection = new MySql();
print $mysqlConnection->connect().PHP_EOL;

$postgresConnection = new Postgres();
print $postgresConnection->connect().PHP_EOL;