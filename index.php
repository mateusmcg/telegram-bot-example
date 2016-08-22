<?php

require 'vendor/autoload.php';

$botToken = "184167750:AAGEJ6DQZKW9WHwJaNUwXffBLn6izGucQ-k";
$url = "https://api.telegram.org/bot".$botToken;

$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);

$chatId = $update["message"]["chat"]["id"];
$message = $update["message"]["text"];

echo $chatId;
echo $message;

// try {
//     switch($message){
//         case "/teste":
//             sendMessage($chatId, "Sou um teste !"); break;
//         case "/haha":
//             sendMessage($chatId, "HAHAHAHAHA"); break;
//         default
//             break;
//     }
// } catch (\Zelenin\Telegram\Bot\NotOkException $e) {
//     sendMessage($chatId, "Ocorreu um erro");
// }

// function sendMessage ($chatId, $message){
//     $url = $GLOBALS[website]."/sendMessage?chat_id=".$chatId."&text".urlencode($message);
//     file_get_contents($url);
// }

?>

<h2>Telegram Bot Teste - v0</h2>

<h4>Comandos disponíveis: '/teste' e '/haha'</h4>