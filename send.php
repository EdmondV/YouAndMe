<?php
$fio = $_POST['fio'];
$email = $_POST['email'];
$number = $_POST['number'];
$fio = htmlspecialchars($fio);
$email = htmlspecialchars($email);
$number = htmlspecialchars($number);
$fio = urldecode($fio);
$email = urldecode($email);
$number = urldecode($number);
$fio = trim($fio);
$email = trim($email);
$number = trim($number);
echo $fio;
echo "<br>";
echo $email;
echo "<br>";
echo $number;
if (mail("pajamacool@gmail.com", "Заявка с сайта", "ФИО:".$fio.". E-mail: ".$email. "Телефон".$number ,"From: example2@mail.ru \r\n"))
 {     echo "сообщение успешно отправлено"; 
} else { 
    echo "при отправке сообщения возникли ошибки";
}
?>
