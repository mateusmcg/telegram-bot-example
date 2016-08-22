<?php

$botTokem = getenv('TELEGRAM-TOKEN');
$url = "https://api.telegram.org/bot".$botTokem;
$update = json_decode(file_get_contents('php://input'));

$chatId = $update["message"]["chat"]["id"];
$message = $update["message"]["text"];

function sendMessage ($chatId, $message){
    $url = $GLOBALS[website]."/sendMessage?chat_id=".$chatId."&text".urlencode($message);
    file_get_contents($url);
}

try {

    switch($message){
        case "/teste":
            sendMessage($chatId, "Sou um teste !"); break;
        case "/haha":
            sendMessage($chatId, "HAHAHAHAHA"); break;
        default
            break;
    }
} catch (\Zelenin\Telegram\Bot\NotOkException $e) {
    sendMessage($chatId, "Ocorreu um erro");
}

?>

<h2>Telegram Bot Teste</h2>

<h4>Comandos disponíveis: '/teste' e '/haha'</h4>