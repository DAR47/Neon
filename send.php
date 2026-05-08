<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = "dudov.alim@bk.ru";
$subject = "Новая заявка с сайта";

$text = "Имя: $name\nEmail: $email\nСообщение: $message";

mail($to, $subject, $text);

echo "OK";
?>