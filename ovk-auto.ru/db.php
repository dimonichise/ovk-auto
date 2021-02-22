<?php

$dbhost = 'localhost';
$dbname = 'ovksantq_ovk_aut';
$username = 'ovksantq_ovk_aut';
$password = 'a5770S1086@';

$db = new PDO("mysql:host=$dbhost; dbname=$dbname", $username, $password);


function get_name_pages_all () {
    global $db;
    $name_page = $db->query("SELECT * FROM name_pages");
    return $name_page;
};
