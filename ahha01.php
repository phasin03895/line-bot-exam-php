<?php // callback.php

require "vendor/autoload.php";
require_once('vendor/linecorp/line-bot-sdk/line-bot-sdk-tiny/LINEBotTiny.php');

$access_token = 'fVTYgKqjwvwQtFKWhA2t+M5HYNe2Qw5n4zN5tuM9Vtf+bNI2r69cL1clRAwok4p5eZdTZBfLFMsPBEzzu/1e/lQItqc9cvb305G47YMuyzdg+MxWUii2Gj16JOlUiJRiImZcHPXLJwvuPGHHu/Uq8QdB04t89/1O/w1cDnyilFU=';

// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);
// Validate parsed JSON data
if (!is_null($events['events'])) {
	// Loop through each event
	foreach ($events['events'] as $event) {
		// Reply only when message sent is in 'text' format
		if ($event['type'] == 'message' && $event['message']['type'] == 'text') {

      $non=$event['message']['text'];
      $ni=0;
      $nj=0;
      $nk=0;
      $nl=0;
      $nchk=0;

      $nl=strlen($non);
        for($ni;$ni<$nl;$ni++)
        {
            if($nchk==0)
            {
                if($non[$ni]==' ')
                {
                    $nchk=1;
                }
            }
            else if($nchk==1)
            {
                if($non[$ni]!=' ')
                {
                  $nonb[$nj]=$non[$ni];
                  $nj++;

                }
              }
        }




      switch($nonb)
      {
      case "สวัสดี":

        $text = "สวัสดี";

			  $text .="\nสบายดีไหม";

			  break;

      case "้hello":

        $text = "hello";

			  $text .="\nhow are you";

			  break;
      }


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
echo "OK";
