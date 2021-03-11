<?php

$dbhost = 'localhost';
$dbname = 'ovksantq_ovk_aut';
$password = 'a5770S1086@';
$username = 'ovksantq_ovk_aut';

$db = new PDO("mysql:host=$dbhost; dbname=$dbname", $username, $password);
// Получение всех статей
function get_news_all($art, $kol) {
    global $db;
    
    $news = $db->query("SELECT * FROM news ORDER BY id DESC LIMIT $art, $kol");
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

//Получение статьи по её категории
function get_new_by_cat($cat) {
    global $db;
    $news = $db->query("SELECT *FROM news WHERE category_id = '$cat' ORDER BY id DESC");
    return $news;
}

//Получение название категорий по id
function get_category_id($id) {
    global $db;
    $categories = $db->query("SELECT * FROM news_category WHERE id = $id");
    foreach ($categories as $category) {
    return $category["categories"];
    }
}
//Получение всех категорий
function get_category() {
    global $db;
    $categories = $db->query("SELECT * FROM news_category");
    return $categories;   
}
$new = get_new_by_id($_GET['id']); 


?>
