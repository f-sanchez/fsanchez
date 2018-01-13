<?php

// $DB_HOST = 'sql112.byethost13.com';
// $DB_USER = 'b13_20385892';
// $DB_PASS = 'Fretzelgwapa!';
// $DB_NAME = 'b13_20385892_portfolio';

$DB_HOST = '127.0.0.1';
$DB_USER = 'root';
$DB_PASS = '';
$DB_NAME = 'portfolio';

$mysql = new mysqli();
$mysql->connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

?>