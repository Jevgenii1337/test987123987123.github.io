<?php
 /* Здесь проверяется существование переменных */
  // if (isset($_POST['subject'])) {$subject = $_POST['subject'];} 
  if (isset($_POST['name'])) {$name = $_POST['name'];}  
  if (isset($_POST['phone'])) {$phone = $_POST['phone'];}  
  if (isset($_POST['email'])) {$mes = $_POST['email'];} 
 

/* Сюда впишите свою эл. почту */
 $address = "lehamega2@yandex.ru";
 $token = "1579736779:AAH14YS0M1XolRMeRuScKx9gw9hnCmU_FMg";
 $chat_id = "-477698650";

 $arr = array(
  // 'Форма отправки: ' => $subject,
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Email:' => $email
  );

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};
