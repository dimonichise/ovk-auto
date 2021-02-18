<?php

$dbhost = 'sql312.xenn.xyz';
$dbname = ' xnnx_27958771_ovk_auto';
$username = 'xnnx_27958771';
$password = 'A5770s1086';

$db = new PDO("mysql:host=$dbhost; dbname=$dbname", $username, $password);


function get_name_pages_all () {
    global $db;
    $name_page = $db->query("SELECT * FROM name_pages");
    return $name_page;
};
