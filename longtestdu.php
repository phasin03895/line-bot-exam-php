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
        $arrayPostData['messages'][1]['type'] = "text";
        $arrayPostData['messages'][1]['text'] = "แต่เย็นแล้วจะไม่จ้านะ";
        $arrayPostData['messages'][2]['type'] = "sticker";
        $arrayPostData['messages'][2]['packageId'] = "1";
        $arrayPostData['messages'][2]['stickerId'] = "100";
        $arrayPostData['messages'][3]['type'] = "text";
        $arrayPostData['messages'][3]['text'] = "ขำ";
        $arrayPostData['messages'][4]['type'] = "text";
        $arrayPostData['messages'][4]['text'] = "5555(แห้งๆ)";
        replyMsg($arrayHeader,$arrayPostData);
        
    }
    else if($message[0] == "q"||$message[0] == "Q"){
      $stringl=strlen($message);
      $count=0;
      
      while($count<$stringl-2){
        $mess.=$message[$count+2];
        $count++;
      }
    if($mess == "ระบบจำนวนจริง"){
      $image_url = "https://still-oasis-33130.herokuapp.com/012.PNG";
      $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
      $arrayPostData['messages'][0]['type'] = "text";
      $arrayPostData['messages'][0]['text'] = "ระบบจำนวนจริง";
      $arrayPostData['messages'][1]['type'] = "image";
      $arrayPostData['messages'][1]['originalContentUrl'] = $image_url;
      $arrayPostData['messages'][1]['previewImageUrl'] = $image_url;
      replyMsg($arrayHeader,$arrayPostData);
    }
    else if($mess == "สมบัติของจำนวนจริง"){
      $image_url = "https://still-oasis-33130.herokuapp.com/013.PNG";
      $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
      $arrayPostData['messages'][0]['type'] = "text";
      $arrayPostData['messages'][0]['text'] = "กำหนด a,b,c เป็นจำนวนจริงใดๆ (a,b,c ∈ R)";
      $arrayPostData['messages'][1]['type'] = "image";
      $arrayPostData['messages'][1]['originalContentUrl'] = $image_url;
      $arrayPostData['messages'][1]['previewImageUrl'] = $image_url;
      replyMsg($arrayHeader,$arrayPostData);
    }
        else if($message == "ฟังก์ชั่นเชิงเส้น"){
      $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
      $arrayPostData['messages'][0]['type'] = "text";
      $arrayPostData['messages'][0]['text'] = " y = f(x) = ax + b";
      replyMsg($arrayHeader,$arrayPostData);
        }
    else if($mess == "กฎรวมแก็ส"){
      $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
      $arrayPostData['messages'][0]['type'] = "text";
      $arrayPostData['messages'][0]['text'] = "P1V1/T1 = P2V2/T2";
      replyMsg($arrayHeader,$arrayPostData);
    }
    else if($message == "การขยายตัวของของแข็ง"){
      $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
      $arrayPostData['messages'][0]['type'] = "text";
      $arrayPostData['messages'][0]['text'] = "ΔL = L0αΔT\n ΔA = P0ɣΔT\n ΔV = V0βΔT";
      replyMsg($arrayHeader,$arrayPostData);
    }
    else if($message == "อุณหพลศาสตร์"){
      $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
      $arrayPostData['messages'][0]['type'] = "text";
      $arrayPostData['messages'][0]['text'] = "Q = McΔt\n Q = mL ";
      replyMsg($arrayHeader,$arrayPostData);
    }
    #ตัวอย่าง Message Type "Sticker"
    else if($message == "ฝันดี"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "sticker";
        $arrayPostData['messages'][0]['packageId'] = "2";
        $arrayPostData['messages'][0]['stickerId'] = "46";
        replyMsg($arrayHeader,$arrayPostData);
    }
    else if($message == "การเท่ากันของจำนวนจริง" || $message == "การเท่ากันของระบบจำนวนจริง"){
      $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
      $arrayPostData['messages'][0]['type'] = "text";
      $arrayPostData['messages'][0]['text'] = "สมบัติการเท่ากันในระบบจำนวนจริง มีดังนี้\n1.สมบัติการสะท้อน \n\ta = a \n2.สมบัติสมมาตร \n\tถ้า a=b แล้ว b = a \n3.สมบัติการถ่ายทอด\n\tถ้า a = b และ b = c แล้ว a = c
4.สมบัติการบวกด้วยจำนวนที่เท่ากัน\n\tถ้า a = b แล้ว a + c = b + c \n5.สมบัติการคูณด้วยจำนวนที่เท่ากัน\n\tถ้า a = b และ c ≠ 0 แล้ว ac = bc";
      replyMsg($arrayHeader,$arrayPostData);
    } 
       else if($message == "การแก้สมการพหุนาม" || $message == "การแก้สมการพหุนามตัวแปรเดียว" || $message == "การแก้สมการ"){
      $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
      $arrayPostData['messages'][0]['type'] = "text";
      $arrayPostData['messages'][0]['text'] = "1. การแยกตัวประกอบ \n2. หาจากสูตร x = (−b±√(b^2−4ac))/2a
3. ทฤษฏีบทเศษเหลือ \n\t3.1. ทฤษฏีบทเศษเหลือ กล่าวว่า “ถ้าหารพหุนาม P(x) ด้วย x − a เมื่อ a เป็นจำนวนจริงแล้วเศษจากการหารจะเทำ่กับ P(a)” \n\t3.2. ทฤษฏีตัวประกอบ (factor theorem) กำหนดพหุนาม P(x) และ a เป็นจำนวนจริงใดๆ แล้ว \n\t\t3.2.1 ถ้า x − a เป็นตัวประกอบของ P(x) แลว้ P(a) = 0 \n\t\t3.2.2 ถ้า P(a) = 0 แล้ว x - a จะเป็นตัวประกอบของ P(x) \n\t\t3.2.3 พอได ้a จากข้อ 3.2.2 ก็นำไปหารสังเคราะห์";
      replyMsg($arrayHeader,$arrayPostData);
    }
  }
    else if($message == "ค่าสัมบูรณ์"){
      $image_url ="https://still-oasis-33130.herokuapp.com/014.PNG";
      $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
      $arrayPostData['messages'][0]['type'] = "text";
      $arrayPostData['messages'][0]['text'] = "ค่าสัมบูรณ์ หรือ |a| คือ ระยะห่างบนเส้นจำนวนจาก 0 ไปถึง a ";
      $arrayPostData['messages'][1]['type'] = "text";
      $arrayPostData['messages'][1]['text'] = "เงื่อนไขของค่าสัมบูรณ์\n_____| x ; x > 0\n|x| =| 0 ; x = 0\n_____| -x ; x < 0";
      $arrayPostData['messages'][2]['type'] = "text";
      $arrayPostData['messages'][2]['text'] = "สมบัติของค่าสัมบูรณ์";
      $arrayPostData['messages'][3]['type'] = "image";
      $arrayPostData['messages'][3]['originalContentUrl'] = $image_url;
      $arrayPostData['messages'][3]['previewImageUrl'] = $image_url;
      replyMsg($arrayHeader,$arrayPostData);
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
   exit;
?>
