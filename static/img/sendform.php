<?php
//Сбор данных из полей формы.
$name = $_POST['name'];// Берём данные из input c атрибутом name="name"
$phone = $_POST['phone']; // Берём данные из input c атрибутом name="phone"
$message = $_POST['message']; // Берём данные из input c атрибутом name="message"

$token = "5845562471:AAHWRPE2UlXuL9VFYmIL6XJClVrDqgs1Ays"; // Тут пишем токен
$chat_id = "285861621"; // Тут пишем ID группы, куда будут отправляться сообщения
$sitename = "xxx"; //Указываем название сайта

$arr = array(

  'Заказ с сайта: ' => $sitename,
  'Имя клиента: ' => $name,
  'Телефон: ' => $phone,
  'Сообщение' => $message
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");

?>

