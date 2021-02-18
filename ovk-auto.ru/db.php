<?php

$dbhost = 'localhost';
$dbname = 'ovk_auto';
$username = 'root';
$password = '';

$db = new PDO("mysql:host=$dbhost; dbname=$dbname", $username, $password);


function get_name_pages_all () {
    global $db;
    $name_page = $db->query("SELECT * FROM name_pages");
    return $name_page;
};
