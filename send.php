<?php
$name = $_POST['nameUser'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$sub = $_POST['subject'];

$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$tel = htmlspecialchars($tel);
$sub = htmlspecialchars($sub);
$name = urldecode($name);
$email = urldecode($email);
$tel = urldecode($tel);
$sub = urldecode($sub);

$name = trim($name);
$email = trim($email);
$sub = trim($email);
$tel = trim($email);

if (mail("email1", "Заявка с сайта", "Имя: ".$name."Телефон: ".$tel."\nE-mail: ".$email."\nИмя товара: ".$sub."\r\n", "From: email2 \r\n"))
 {     echo "сообщение успешно отправлено"; 
} else { 
    echo "при отправке сообщения возникли ошибки";
}
?>