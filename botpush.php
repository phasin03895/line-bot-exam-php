<?php



$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('fVTYgKqjwvwQtFKWhA2t+M5HYNe2Qw5n4zN5tuM9Vtf+bNI2r69cL1clRAwok4p5eZdTZBfLFMsPBEzzu/1e/lQItqc9cvb305G47YMuyzdg+MxWUii2Gj16JOlUiJRiImZcHPXLJwvuPGHHu/Uq8QdB04t89/1O/w1cDnyilFU=');
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => '6c2096554f1cfd23d4e61effa45c5b75']);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage('Uf3d584c146e3db13809b30d35665e105', $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
?>






