<?php // callback.php
require "vendor/autoload.php";
require_once('vendor/linecorp/line-bot-sdk/line-bot-sdk-tiny/LINEBotTiny.php');

$access_token = 'fVTYgKqjwvwQtFKWhA2t+M5HYNe2Qw5n4zN5tuM9Vtf+bNI2r69cL1clRAwok4p5eZdTZBfLFMsPBEzzu/1e/lQItqc9cvb305G47YMuyzdg+MxWUii2Gj16JOlUiJRiImZcHPXLJwvuPGHHu/Uq8QdB04t89/1O/w1cDnyilFU=';




// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);
// Validate parsed JSON data

echo"\nunderfunc";
if (!is_null($events['events'])) {
	function getMBStrSplit($string, $split_length = 1){
	echo"\nfun 1 test";
mb_internal_encoding('UTF-8');

mb_regex_encoding('UTF-8');

$split_length = ($split_length <= 0) ? 1 : $split_length;
$mb_strlen = mb_strlen($string, 'utf-8');
$array = array();
$i = 0;
while($i < $mb_strlen)
{
$array[] = mb_substr($string, $i, $split_length);
$i = $i+$split_length;
}
return $array;
}

function getStrLenTH($string)
{
	echo"fun 2 test";
  $array = getMBStrSplit($string);
  $count = 0;
  foreach($array as $value)
  {
    $ascii = ord(iconv("UTF-8", "TIS-620", $value ));
    if( !( $ascii == 209 ||  ($ascii >= 212 && $ascii <= 218 ) || ($ascii >= 231 && $ascii <= 238 )) )
    {
      $count += 1;
    }
  }
  return $count;
}
	
	
	
	
	
	// Loop through each event
	foreach ($events['events'] as $event) {
		// Reply only when message sent is in 'text' format
		if ($event['type'] == 'message' && $event['message']['type'] == 'text') {

      $non = getMBStrSplit($event['message']['text']);
      $ni=0;
     $nl=getStrLenTH($event['message']['text']);
     $text = "hello";
        for($ni=0;$ni<$nl;$ni++)
        {
		 $text .="\n";
		$text .=$non[$ni];
        }
			$text .="\n";
		$text .= $nl;


        


      


			$messages = [
				'type' => 'text',
				'text' => $text
			];
      $replyToken = $event['replyToken'];
			$url = 'https://api.line.me/v2/bot/message/reply';
			$data = [
				'replyToken' => $replyToken,
				'messages' => [$messages],
			];
			$post = json_encode($data);
			$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			$result = curl_exec($ch);
			$result = curl_exec($ch);
			curl_close($ch);

			echo $result . "\r\n";
		}
		else{
			// Get text sent
			$text = "fail test";
			// Get replyToken
			$replyToken = $event['replyToken'];
			$text .="\nPhasin Aumwong";
			// Build message to reply back
			$messages = [
				'type' => 'text',
				'text' => $text
			];

			// Make a POST Request to Messaging API to reply to sender
			$url = 'https://api.line.me/v2/bot/message/reply';
			$data = [
				'replyToken' => $replyToken,
				'messages' => [$messages],
			];
			$post = json_encode($data);
			$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			$result = curl_exec($ch);
			$result = curl_exec($ch);
			curl_close($ch);

			echo $result . "\r\n";


		}

	}
}
echo "OK12";
