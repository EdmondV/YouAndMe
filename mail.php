<?php

$recepient = "pajamacool@gmail.com";
$sitename = "Ты и Я";

$name = trim($_POST["name"]);
$email = trim($_POST["email"]);
$phone = trim($_POST["phone"]);
$message = "Имя: $name \nТелефон: $phone \nE-mail: $email";

$pagetitle = "Новая заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");