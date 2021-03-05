<?php
//----Функция проверки и преобразования данных из формы----
function check_symbol($value, $field_name, $required, $pattern){
    if ($required == "1" && empty($value)) {
    $GLOBALS['alert'] = $GLOBALS['alert'].'Поле \"'.$field_name.'\" не заполнено'.'\n';
    return ;
    }
    $value = trim($value);
    $value = stripslashes($value);
    $value = strip_tags($value);
    $value = htmlspecialchars($value);
    if ($pattern != "0") {
    if (!empty($value) && !preg_match($pattern, $value, $matches)) $GLOBALS['alert'] = $GLOBALS['alert'].'Значение в поле \"'.$field_name.'\" не соответствует шаблону'.'\n';
    }
    return $value;
    }

    $to = "dvbochkov@ovk-auto.ru";
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $subject = $_REQUEST['subject'];
    $number = $_REQUEST['number'];
    $cmessage = $_REQUEST['message'];
	$data = $_REQUEST['data'];
	$time = $_REQUEST['time'];
    $value = $_REQUEST['value'];

	$subject = "Запись на сайт";
	
    $headers = "From: $from";
	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $from . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	
	
 	

    $logo = 'img/logo.png';
    $link = '#';

	$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";
	$body .= "<table style='width: 100%;'>";
	$body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
	$body .= "<a href='{$link}'><img src='{$logo}' alt=''></a><br><br>";
	$body .= "</td></tr></thead><tbody><tr>";
	$body .= "<td style='border:none;'><strong>Имя:</strong> {$name}</td>";
	$body .= "<td style='border:none;'><strong>Email:</strong> {$from}</td>";
	$body .= "</tr>";
	$body .= "<tr><td style='border:none;'><strong>Телефон:</strong> {$number}</td></tr>";
	$body .= "<tr><td style='border:none;'><strong>Тема:</strong> {$subject}</td></tr>";
	$body .= "<tr><td style='border:none;'><strong>Дата:</strong> {$data}</td></tr>";
	$body .= "<tr><td style='border:none;'><strong>Время:</strong> {$time}</td></tr>";
    $body .= "<tr><td style='border:none;'><strong>Вид работ:</strong> {$value}</td></tr>";
	$body .= "<tr><td></td></tr>";
	$body .= "<tr><td colspan='2' style='border:none;'><strong>Сообщение:</strong>{$cmessage}</td></tr>";
	$body .= "</tbody></table>";
	$body .= "</body></html>";

    $send = mail($to, $subject, $body, $headers);

?>