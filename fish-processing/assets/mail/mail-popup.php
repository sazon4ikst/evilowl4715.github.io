<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$hidden = $_POST['hidden'];

$to      = 'info@metod-prodazh.ru';
$subject = "=?utf-8?B?".base64_encode("Перезвоните мне")."?=";
$headers = "От: $hidden $name, $phone";

$success = mail($to, $subject, $headers);
echo $success;
?>
