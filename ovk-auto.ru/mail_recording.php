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
//----Скрипт отправки почты через SMTP с использованием PHPMailer----
//Импорт классов PHPMailer в глобальное пространство имен. Они должны быть в верхней части скрипта, а не внутри функции
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

if (!empty($_POST["contact-button"])) {
$name = $_POST["name_one"];
$name = check_symbol($name, "Имя", "1", "/^[A-ZА-ЯЁ]+\z/iu");
$tele = $_POST["tele"];
$tele = check_symbol($tele, "E-mail", "1", "/^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,6}\z/i");
$subject = $_POST["date_one"];
$subject = check_symbol($subject, "Тема сообщения", "1", "0");
$comment = $_POST["contact-comment"];
$comment = check_symbol($comment, "Текст сообщения", "1", "0");
if (!empty($GLOBALS['alert'])) {
$alert = 'Данные из формы не отправлены. Обнаружены следующие ошибки: \n'.$alert;
include "alert.php";
}
else {
//Подключение библиотеки
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/SMTP.php';
$mail = new PHPMailer(); //Инициализация класса
$from = 'dmitriy-bochkov@mail.ru'; //Адрес почты, с которой идет отправка письма
$to = 'dvbochkov@ovk-auto.ru'; //Адрес получателя
$mail -> isSMTP(); //Применение протокола SMTP
$mail -> Host = 'smtp.mail.ru';//Адрес почтового сервера
$mail -> SMTPAuth = true; //Включение режима авторизации
$mail -> Username = 'dmitriy-bochkov@mail.ru'; //Логин от доменной почты, подключенной к стороннему почтовому сервису (в данном случае в Яндекс.Почта)
$mail -> Password = 'a5770s1086'; //Пароль от доменной почты
$mail -> SMTPSecure = 'ssl'; //Протокол шифрования
$mail -> Port = '465'; //Порт сервера SMTP
$mail -> CharSet = 'UTF-8'; //Кодировка
$mail -> setFrom($from, 'Администратор'); //Адрес и имя отправителя
$mail -> addAddress($to, 'Администратор'); //Адрес и имя получателя
$mail -> isHTML (true); //Установка формата электронной почты в HTML
$mail -> Subject = 'Отправлена форма обратной связи'; //Тема письма (заголовок)
$mail -> Body = "
<html>
<body>
<p>Имя отправителя: $name</p>
<p>Адрес отправителя: $tele</p>
<p>Тема сообщения: $subject</p>
<p>Содержание сообщения: $comment</p>
</body>
</html>
"; //Содержимое письма
$mail -> AltBody = 'Текст альтернативного письма'; //Альтернативное письмо в случае, если почтовый клиент не поддерживает формат HTML
$mail -> SMTPDebug = 0; //Включение отладки SMTP: 0 - выкл (для штатного использования), 1 = сообщения клиента, 2 - сообщения клиента и сервера
if ($mail -> send()) {
$alert = 'Сообщение отправлено'; //Вывод сообщения в диалоговом окне браузера об успешной отправке письма
}
else {
$alert = 'Ошибка, письмо не может быть отправлено: '.$mail -> ErrorInfo; //Вывод сообщения об ошибке
}
include "alert.php";
}
}
?>