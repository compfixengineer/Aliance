<?php 
$user_name = htmlspecialchars($_POST["username"]);
$user_phone = htmlspecialchars($_POST["userphone"]);

$token = "7144234716:AAGZsZOg1mQCFVAP8Q1wVvjk4vaa7JN8O3g";
$chat_id = "-4180955396";

$form_data = array(
    "Клиент: " => $user_name,
    "Телефон: " => $user_phone
);

foreach ($form_data as $key => $value) {
    $text .= $key . "<b>" . urlencode($value) . "</b>" . "%0A";
}

$send_to_telegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&text={$text}&parse_mode=HTML","r");

if ($send_to_telegram) {
    echo "Success";
} else {
    echo "Error";
}