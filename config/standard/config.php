<?php
$host = $_SERVER["HTTP_HOST"];

$hostNames = explode(".", $host);

$db_host = 'localhost';

$db_name = $hostNames[0];

$db_user = 'root';

$db_pass = '123';

$db_driver = 'mysql';
