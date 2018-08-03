<?php
    $accessToken = "fVTYgKqjwvwQtFKWhA2t+M5HYNe2Qw5n4zN5tuM9Vtf+bNI2r69cL1clRAwok4p5eZdTZBfLFMsPBEzzu/1e/lQItqc9cvb305G47YMuyzdg+MxWUii2Gj16JOlUiJRiImZcHPXLJwvuPGHHu/Uq8QdB04t89/1O/w1cDnyilFU=";//copy Channel access token ตอนที่ตั้งค่ามาใส่

    $content = file_get_contents('php://input');
    $arrayJson = json_decode($content, true);

    $arrayHeader = array();
    $arrayHeader[] = "Content-Type: application/json";
    $arrayHeader[] = "Authorization: Bearer {$accessToken}";

    //รับข้อความจากผู้ใช้
    $message = $arrayJson['events'][0]['message']['text'];
#ตัวอย่าง Message Type "Text"
    if($message == "สวัสดี"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "สวัสดีจ้าาา";
        replyMsg($arrayHeader,$arrayPostData);
    }
    else if($message[0] == "q"||$message[0] == "Q"){

      $stringl=strlen($message);
      $count=0;
      $mess = array();
      while($count<$stringl-3){
        $mess[$count]=$message[$count+2];
        $count++;
      }
      $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
      $arrayPostData['messages'][0]['type'] = "text";
      $arrayPostData['messages'][0]['text'] = $mess;
        $arrayPostData['messages'][1]['type'] = "text";
      $arrayPostData['messages'][1]['text'] = $stringl;
        $arrayPostData['messages'][2]['type'] = "text";
      $arrayPostData['messages'][2]['text'] = $count;
      replyMsg($arrayHeader,$arrayPostData);
        /*
      if($mess == "ของไหล"){
      $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
      $arrayPostData['messages'][0]['type'] = "text";
      $arrayPostData['messages'][0]['text'] = "P1V1/T1 = P2V2/T2";
      replyMsg($arrayHeader,$arrayPostData);
    }
    else if($mess == "การขยายตัวของของแข็ง"){
      $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
      $arrayPostData['messages'][0]['type'] = "text";
      $arrayPostData['messages'][0]['text'] = "ΔL = L0αΔT\n ΔA = P0ɣΔT\n ΔV = V0βΔT";
      replyMsg($arrayHeader,$arrayPostData);
    }
    else if($mess == "อุณหพลศาสตร์"){
      $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
      $arrayPostData['messages'][0]['type'] = "text";
      $arrayPostData['messages'][0]['text'] = "Q = McΔt\n Q = mL ";
      replyMsg($arrayHeader,$arrayPostData);
    }*/

    }




function replyMsg($arrayHeader,$arrayPostData){
        $strUrl = "https://api.line.me/v2/bot/message/reply";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$strUrl);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $arrayHeader);
        curl_setopt($ch, CURLOPT_POSTFIELDS,json_encode($arrayPostData));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $result = curl_exec($ch);
        curl_close ($ch);
    }
echo "it good";
   exit;
?>
