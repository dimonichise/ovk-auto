<?php

$dbhost = 'localhost';
$dbname = 'ovksantq_ovk_aut';
$password = 'a5770S1086@';
$username = 'ovksantq_ovk_aut';

$db = new PDO("mysql:host=$dbhost; dbname=$dbname", $username, $password);
// Получение всех статей
function get_news_all() {
    global $db;
    $news = $db->query("SELECT * FROM news");
    return $news;
}

//Получение статьи по её id
function get_new_by_id($id) {
    global $db;
    $news = $db->query("SELECT *FROM news WHERE id = $id");
    foreach ($news as $new) {
        return $new;
    }
}

//Получение название категорий по id
function get_category_id($id) {
    global $db;
    $categories = $db->query("SELECT * FROM news_category WHERE id = $id");
    foreach ($categories as $category) {
    return $category["categories"];
    }
}
?>
