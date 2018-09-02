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
    else if($message=="menu" || $message == "เมนู"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "01 ระบนวนจริง
02  เซต
03  เลขยกกำลัง
04  ฟังก์ชั่น
05  อัตราส่วนตรีโกณมิติ
06  ลำดับและอนุกรม
07  ความน่าจะเป็น
08  สถิติ";
       replyMsg($arrayHeader,$arrayPostData); 
    }
    else if($message[0] == "q"||$message[0] == "Q"){
      $stringl=strlen($message);
      $count=0;
      while($count<$stringl-2){
        $mess.=$message[$count+2];
        $count++;
      }
      if($mess == "01"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "ระบบจำนวนจริง
-สมบัติของจำนวนจริง
-การเท่ากนในระบบจำนวนจริง
-การแก้สมการพหุนานตัวแปรเดยว
-การไม่เท่ากันในระบบจำนวนจริง
-ค่าสัมบูรณ์ของจำนวนจริง
-คุณสมบัติของอสมการค่าสัมบูรณ์";
        replyMsg($arrayHeader,$arrayPostData);
      }
      else if($mess == "02"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "เซต 
-ชนิดของเซต
-การเขียนเซต
-การกระทำของเซต
-สับเซต 
-พาวเวอร์เซตหรือเซตกำลัง
-คุณสมบัติของการ Operation
-สูตรลดทอน
-สูตรจำนวนสมาชิกของเซต
-แผนภาพเวนส์ & ออยเลอร์";
        replyMsg($arrayHeader,$arrayPostData);
      }
      else if($mess == "03"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "เลขยกกำลัง
-สมบัติของเลขยกกำลัง
-สมบัติของรากที่ n ";
        replyMsg($arrayHeader,$arrayPostData);
      }
      else if($mess == "04"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "ฟังก์ชั่น
-ผลคูณคาร์ทีเชียน
-ฟังก์ชั่น
-สมบัติของพาราโบลา";
        replyMsg($arrayHeader,$arrayPostData);
      }
      else if($mess == "05"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "อัตราส่วนตรีโกณมิติ
-พิจารณาสามเหลี่ยม ABC
-อัตรส่วนของความยาวด้านต่างๆ
-การยุบมุมที่ติดลบ
-ทฤษฏีบทพีธาโกรัส
-อัตราส่วนตรีโกณมิติที่ควรทราบ
";
        replyMsg($arrayHeader,$arrayPostData);
      }
      else if($mess == "06"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "ลำดับและอนุกรม
 -ลำดับเลขคณิต
-ลำเรขาคณิต
-สมบัติของซิกมา
-สูตรผลบวกสำคัญ
-ผลบวกของ n พจน์แรกของอนุกรม
-อนุกรมเลขคณติ
-อนุกรมเรขาคณิต";
        replyMsg($arrayHeader,$arrayPostData);
      }
      else if($mess == "07"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "ความน่าจะเป็น
-กฏการนับเบื้องต้น
-แฟคทอเรียล
-การสับเปลี่ยน
-สมบัติของการจัดหมู่
-ความน่าจะเป็น";
        replyMsg($arrayHeader,$arrayPostData);
      }
      else if($mess == "08"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "สถิติ
-การหาค่ากลางข้อมูล
-การวัดตำแหน่งของข้อมูล
-การวัดหการกระจายของข้อมูล";
        replyMsg($arrayHeader,$arrayPostData);
      }
    else if($mess == "ระบบจำนวนจริง"){
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
    else if($mess == "อัตราส่วนตรีโกณมิติ"){
      $image_url ="https://still-oasis-33130.herokuapp.com/pi.png";
      $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
      $arrayPostData['messages'][0]['type'] = "text";
      $arrayPostData['messages'][0]['text'] = "พิจารณาสามเหลี่ยม ABC
จากรูป ABC เป็นรูปสามเหลี่ยมที่มีมุม C เป็นมุมฉากและด้านตรงข้ามมุม A, B และ C ยาว a, b และ c
ตามลำดับโดยยึดมุม B เป็นมุมหลักจะได้ 
a เป็นความยาวของด้านตรงข้ามมุม A หรือ เรียกว่ํา \"ข้าม\"
b เป็นความยาวด้านประชิดมุม A หรือเรียกว่ํา\"ชิด\"
c เป็นความยาวด้านตรงข้ามมุมฉาก หรือเรียกว่ํา\"ฉาก\"";
       $arrayPostData['messages'][1]['type'] = "image";
      $arrayPostData['messages'][1]['originalContentUrl'] = $image_url;
      $arrayPostData['messages'][1]['previewImageUrl'] = $image_url;  
      $arrayPostData['messages'][2]['type'] = "text";
      $arrayPostData['messages'][2]['text'] ="อัตราส่วนของความยาวด้านต่างๆ
sin A =ข้าม/ฉาก		\ncos A = ชิด/ฉาก		\ntan A = ข้าม/ชิด
cosec A = 1/sin A		\nsec A = 1/cos A		\ncot A = 1/tan A
ข้อสังเกต!!!
1. tan A = sin A/cos Aและ cot A = cos A/sin A
2. (sin A)(cosec A) = 1, (cos A)(sec A) = 1, (tan A)(cot A) = 1
3. sin^2 A + cos^2 A = 1
4. 1 + cot^2 A = cosec^2 A
5. tan^2 A + 1 = sec^2 A";
      replyMsg($arrayHeader,$arrayPostData);
    }
  else if($mess == "มุมติดลบตรีโกณมิติ"){
      $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
      $arrayPostData['messages'][0]['type'] = "text";
      $arrayPostData['messages'][0]['text'] = "sin (-θ) = -sin θ \ncos (-θ) = cos θ  \ntan (-θ) = -tan θ";
      replyMsg($arrayHeader,$arrayPostData);
    }
  else if($mess == "ฟังก์ชั่นเอกซ์โพเนนเชียล"){
      $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
      $arrayPostData['messages'][0]['type'] = "text";
      $arrayPostData['messages'][0]['text'] = "รูปฟังก์ชั่น f = {(x,y) ∈ R×R+ | y = ax, a > 0, a ≠ 1}";
      replyMsg($arrayHeader,$arrayPostData);
    }
    else if($mess == "ฟังก์ชั่นเชิงเส้น"){
      $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
      $arrayPostData['messages'][0]['type'] = "text";
      $arrayPostData['messages'][0]['text'] = " y = f(x) = ax + b \nเมื่อ a,b ∈ R และ a ≠ 0 ";
      replyMsg($arrayHeader,$arrayPostData);
    }
    else if($mess == "ฟังก์ชั่นกำลังสอง"){
      $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
      $arrayPostData['messages'][0]['type'] = "text";
      $arrayPostData['messages'][0]['text'] = "กราฟของฟังก์ชั่นกำลังสอง \ny = ax^2 + bx + c เมื่อ a ≠ 0 \nและ y = a(x-h)^2 + k เป็นกราฟ พาราโบลา";
      replyMsg($arrayHeader,$arrayPostData);
    }
    else if($mess == "ชนิดของเซต"){
      $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
      $arrayPostData['messages'][0]['type'] = "text";
      $arrayPostData['messages'][0]['text'] = "1. เซตจำกัด เช่น {1, 2, 3, ..., 100}
2. เซตอนันต์ เชน [0, 1] หรือ {1, 2, 3, ...}
3. เซตวําง (∅, {}) เป็นเซตที่ไม่มีสมาชิกอยู่เลย
4. เอกภพสมพัทธ์ (μ) คือ เซตที่ประกอบด้วยสมาชิกทั้งหมด
ของสิ่งที่เรําต้องการ";
      replyMsg($arrayHeader,$arrayPostData);
}
    else if($mess == "การเขียนเซตด้วยวงเล็บปีกกา"){
      $image_url="https://still-oasis-33130.herokuapp.com/015.PNG";
      $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
      $arrayPostData['messages'][0]['type'] = "text";
      $arrayPostData['messages'][0]['text'] = "กำหนดตัวแปรแทนสมาชิกทั้งหมด
ตามด้วยเครื่องหมาย | (| อ่านว่า \"โดยที่\")่
แล้วตามด้วยเงื่อนไขของตัวแปรนั้น
ดังรูปแบบ {x | เงื่อนไขของ x}";
      $arrayPostData['messages'][1]['type'] = "text";
      $arrayPostData['messages'][1]['text'] = "ตัวอย่างเช่น";
      $arrayPostData['messages'][2]['type'] = "image";
      $arrayPostData['messages'][2]['originalContentUrl'] = $image_url;
      $arrayPostData['messages'][2]['previewImageUrl'] = $image_url;
      replyMsg($arrayHeader,$arrayPostData);
}
    else if($mess == "การกระทำของเซต"){
      $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
      $arrayPostData['messages'][0]['type'] = "text";
      $arrayPostData['messages'][0]['text'] = "การกระทำของเซต
1. การยูเนียน (∪) คือการรวมกันของสมาชิก เช่น A ∪ B จะไดวํา
2. การอินเตอร์เซคชัน (∩) คือ การซํ้ากันของสมาชิก เช่น A ∩ B จะไดวํา
3. ผลตํางเซต (-) คือเอาแค่เซตใดเซตหนึ่ง ไม่เอาเซตที่ซํ้ากัน เช่น A - B จะไดวํา
4. การคอมพลีเมนท์ (A’, Ac) คือ ไม่ต้องการเซตนั้นๆ เชน A’ คือไม่เอาเซต A
";
        $image_url="https://still-oasis-33130.herokuapp.com/s1.PNG";
       $arrayPostData['messages'][1]['type'] = "image";
      $arrayPostData['messages'][1]['originalContentUrl'] = $image_url;
      $arrayPostData['messages'][1]['previewImageUrl'] = $image_url;
         $image_url="https://still-oasis-33130.herokuapp.com/s2.PNG";
       $arrayPostData['messages'][2]['type'] = "image";
      $arrayPostData['messages'][2]['originalContentUrl'] = $image_url;
      $arrayPostData['messages'][2]['previewImageUrl'] = $image_url;
         $image_url="https://still-oasis-33130.herokuapp.com/s3.PNG";
       $arrayPostData['messages'][3]['type'] = "image";
      $arrayPostData['messages'][3]['originalContentUrl'] = $image_url;
      $arrayPostData['messages'][3]['previewImageUrl'] = $image_url;
         $image_url="https://still-oasis-33130.herokuapp.com/s5.PNG";
       $arrayPostData['messages'][4]['type'] = "image";
      $arrayPostData['messages'][4]['originalContentUrl'] = $image_url;
      $arrayPostData['messages'][4]['previewImageUrl'] = $image_url;
      replyMsg($arrayHeader,$arrayPostData);
    }
    else if($mess == "ผลคูณคาร์ทีเซียน"){
      #หน้าที่8-12
      $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
      $arrayPostData['messages'][0]['type'] = "text";
      $arrayPostData['messages'][0]['text'] = "ให้ A และ B แทนเซตใดๆ เขียนผลคูณคารฺ์ทีเซียนของ A ว่า A x B  อ่านว่า
“A Cross B” จะได้ว่า \nผลคูณคาร์ทีเซียน ของ A และ B (AxB) คือ เซตของคู่อันดับที่มีสมาชิกตัวหน้ามาจาก A และสมาชิกตัวหลังมาจาก B
A×B = {(x,y) | x ∈ A, y ∈ B} \nสมบัติที่ควรทราบ \n   1.ถ้า A มีสมาชิก m ตัว และ B มีสมาชิก n ตัว แล้ว AxB มีสมาชิก mn ตัว
(AxB) = n(A)xn(B) \n  2.  AxB ≠ BxA แต่จะเท่ากันก็ต่อเมื่อ A=B, A = ∅, B = ∅
3.  Ax∅ = ∅ = ∅xA \n  4.  Ax(B∪C) = (AxB)∪(AxC),(A∪B)xC = (AxC)∪(BxC)
5.  Ax(B∩C) = (AxB)∩(AxC),(A∩B)xC = (AxC)∩(BxC)
6.  Ax(B-C) = (AxB)-(AxC),(A-B)xC = (AxC)-(BxC)
7.  r แทน ความสัมพันธ์ที่สอดคล้องกับเงื่อนไขที่ต้องการจากผลคูณคาร์ทีเซียน
ข้อควรระวัง!!!!!
1.A∪(BxC) ≠ (A∪B)x(A∪C)
2.A∩(BxC) ≠ (A∩B)x(A∩C)
3.A-(BxC) ≠ (A-B)x(A-C)
";
      replyMsg($arrayHeader,$arrayPostData);
}
    else if($mess == "โดเมนและเรนจ์"){
      $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
      $arrayPostData['messages'][0]['type'] = "text";
      $arrayPostData['messages'][0]['text'] = "โดเมน(Domain) คือ เซตของ x ที่ทำให้ y หาค่าได้
เรนจ์(Range) คือ เซตของ y ที่ทำให้ x หาค่าได้
.....“โดเมน คือ x, เรนจ์ คือ  y” 
";
      replyMsg($arrayHeader,$arrayPostData);
}
            else if($mess == "การตรวจสอบฟังก์ชั่น"){
      $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
      $arrayPostData['messages'][0]['type'] = "text";
      $arrayPostData['messages'][0]['text'] = "1.ความสัมพันธ์แบบแจกแจงสมาชิก  
โดยดูว่าสมาชิกตัวหน้าจับคู่กับสมาชิกตัวหลัง
ถ้าจับคู่มากกว่า 1 คู่จะไม่เป้นฟังก์ชั่น
 ______เช่น
r1 = {(1,2),(2,4),(6,3),(7,2),(9,4)}
เป็นฟังก์ชั่น เพราะ ไม่มีสมาชิกตัวหน้าใดเลยที่จับคู่มากกว่า 1 คู่
r2 = {(2,2),(2,4),(4,1),(5,8),(7,1)}
ไม่เป็นฟังก์ชั่น เพราะสมาชิกตัวหน้าที่จับคู่กันมากกว่า 1 คู่ คือ สมาชิกตัวหน้า 2 จับคู่กับ 2 และ 4
2.ความสัมพันธ์ที่เป็นสมการ
เมื่อแทนค่า x ในสมการ จะต้องให้ค่า y ออกมาเพียงค่าเดียว 
ถ้าได้ y  มากกว่า 1 ค่าแสดงว่าไม่เป็น ฟังก์ชั่น เช่น 
r1 = {(x,y) ∈ R×R | y = x2} เป็นฟังก์ชั่น เพราะ
เมื่อแทน x = 1 , 2 , 3 , ... จะได ้ y เพียง 1 ค่าเสมอ 
r2 = {(x,y) ∈ R×R | x = y2} ไม่เป็นฟังก์ชั่น 
เพราะเมื่อแทนค่ํา x = 1 จะได ้ y มากกว่าหนึ่งค่า คือ 1 และ -1
3.กราฟของความสัมพันธ์
ทำได้โดยการลากเส้นตรงขนานแกน y ถ้าตัดกันมากกว่า 1 จุดแสดงว่าไม่เป็นฟังก์ชั่น";
          $image_url="https://still-oasis-33130.herokuapp.com/k01.png";
       $arrayPostData['messages'][1]['type'] = "image";
      $arrayPostData['messages'][1]['originalContentUrl'] = $image_url;
      $arrayPostData['messages'][1]['previewImageUrl'] = $image_url;
       
    replyMsg($arrayHeader,$arrayPostData);
    }
       else if($mess == "การหาค่าของฟังก์ชั่น"){
      $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
      $arrayPostData['messages'][0]['type'] = "text";
      $arrayPostData['messages'][0]['text'] = "การหาค่าของฟังก์ชั่น หาได ้จาก 3 วิธีได้แก่
1) หาจากเซตที่แจกแจงสมาชิก
2) อ่านจากกราฟ และ
3) แทนค่าในสมการโดยค่าที่หาได้จากฟังก์ชั่น จะเป็นค่า y";
      replyMsg($arrayHeader,$arrayPostData);
}

else if($mess == "ฟังก์ชั่นเชิงเส้น"){
      $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
      $arrayPostData['messages'][0]['type'] = "text";
      $arrayPostData['messages'][0]['text'] = " y = f(x) = ax + b \nเมื่อ a,b ∈ R และ a ≠ 0";
      replyMsg($arrayHeader,$arrayPostData);
}
else if($mess == "การแปลงมุมที่ติดลบ"){
      $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
      $arrayPostData['messages'][0]['type'] = "text";
      $arrayPostData['messages'][0]['text'] = " การยุบมุมที่ติดลบ
sin (-θ) = -sin θ
cos (-θ) = cos θ
tan (-θ) = -tan θ";
      replyMsg($arrayHeader,$arrayPostData);
}
else if($mess == "ทฤษฏีบทพีธาโกรัส"){
      $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
      $arrayPostData['messages'][0]['type'] = "text";
      $arrayPostData['messages'][0]['text'] = "ให ้ ABC เป็นสํามเหลี่ยมมุมฉาก และ A,B,Cเป็นความยาวด้านแต่ละด้านดังรูป
			(c^2) = (a^2) + (b^2)
\"ด้านตรงข้ามมุมฉาก = ผลบวกกำลังสองของด้านประกอบมุมฉาก\"";
      $image_url="https://still-oasis-33130.herokuapp.com/pi.png";
       $arrayPostData['messages'][1]['type'] = "image";
      $arrayPostData['messages'][1]['originalContentUrl'] = $image_url;
      $arrayPostData['messages'][1]['previewImageUrl'] = $image_url;
      replyMsg($arrayHeader,$arrayPostData);
}
      else if($mess == "ลำดับและอนุกรม"){
      $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
      $arrayPostData['messages'][0]['type'] = "text";
      $arrayPostData['messages'][0]['text'] = "ลำดับเลขคณิต
ผลต่างร่วม d = a(n+1) − a((n))
พจน์ที่ n ของลำดับเลขคณิต คือ a((n)) = a((1)) + (n − 1)d
ลำดับเรขาคณิต
อัตราส่วนร่วม r =(a((n))+1)/a((n))
พจน์ที่ n ของลำดับเรขาคณิต คือ an = a1r((n−1))";
      replyMsg($arrayHeader,$arrayPostData);
}
    else if($mess == "สมบัติของพาราโบลา"){
      $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
      $arrayPostData['messages'][0]['type'] = "text";
      $arrayPostData['messages'][0]['text'] = "1.จุดยอด (vertex) หรือ จุดวกกลับ (turning point) หาได้จาก V = (-(b/2a),((4ac-(b^2))/4a)
2. สมการแกนสมมาตรของกราฟ คือ x = -(b/2a) และ ค่าสูงสุดหรือต่ำสุดของฟังก์ชั่น คือ y = ((4ac-(b^2))/4a)
3.เมื่อ y = ax2 + bx + c จะได ้ x = K เป็นแกนสมมาตร แล้ว f(k+Δ) = f(k−Δ) กล่าวคือ 
ค่าของฟัง์ชั่นที่อยู่ห่างจากแกนสมมาตรเท่ากันจะมีค่าเท่ากัน
4.จุดตัดแกน x หาได้จาก ให้ y = 0 และ จุดตัดแกน y ให้ x = 0";

 replyMsg($arrayHeader,$arrayPostData);
}
else if($mess == "สมบัติของซิกมา"){
      $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
      $image_url="https://still-oasis-33130.herokuapp.com/ada1.jpg";
       $arrayPostData['messages'][0]['type'] = "image";
      $arrayPostData['messages'][0]['originalContentUrl'] = $image_url;
      $arrayPostData['messages'][0]['previewImageUrl'] = $image_url;
      replyMsg($arrayHeader,$arrayPostData);
}
else if($mess == "สูตรผลบวกของซิกมา"){
      $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
      $image_url="https://still-oasis-33130.herokuapp.com/ada2.jpg";
       $arrayPostData['messages'][0]['type'] = "image";
      $arrayPostData['messages'][0]['originalContentUrl'] = $image_url;
      $arrayPostData['messages'][0]['previewImageUrl'] = $image_url;
      replyMsg($arrayHeader,$arrayPostData);
}
else if($mess == "สมบัติของการจัดหมู่"){
      $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
      $image_url="https://still-oasis-33130.herokuapp.com/ada3.jpg";
       $arrayPostData['messages'][0]['type'] = "image";
      $arrayPostData['messages'][0]['originalContentUrl'] = $image_url;
      $arrayPostData['messages'][0]['previewImageUrl'] = $image_url;
      replyMsg($arrayHeader,$arrayPostData);
}
else if($mess == "สูตรความน่าจะเป็น"){
      $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
      $image_url="https://still-oasis-33130.herokuapp.com/ada4.jpg";
       $arrayPostData['messages'][0]['type'] = "image";
      $arrayPostData['messages'][0]['originalContentUrl'] = $image_url;
      $arrayPostData['messages'][0]['previewImageUrl'] = $image_url;
      replyMsg($arrayHeader,$arrayPostData);
}

else if($mess == "สมบัติของความน่าจะเป็น"){
      $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
      $arrayPostData['messages'][0]['type'] = "text";
      $arrayPostData['messages'][0]['text'] = "1. 0 ≤ P(E) ≤ 1 โดย P(E) = 0 หมายถึงไม่มีเหตุการณ์นั้นเกิดขึ้น 
2. P(S) = 1 หมายถึง ความน่าจะเป็นของแซมเปิ้ลสเปซเท่ากับ 1 เสมอ 
3. ถ้า P(E') แทนความน่าจะเป็นที่เหตุการณ์ E จะไม่เกิดขึ้นแล้ว P(E) = 1 – P(E')
";
      replyMsg($arrayHeader,$arrayPostData);
}
else if($mess == "ชนิดของเซต"){
      $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
      $arrayPostData['messages'][0]['type'] = "text";
      $arrayPostData['messages'][0]['text'] = "1. เซตจำกัด เช่น {1, 2, 3, ..., 100} 
2. เซตอนันต์ เชน [0, 1] หรือ {1, 2, 3, ...}
3. เซตวําง (∅, {}) เป็นเซตที่ไม่มีสมาชิกอยู่เลย 
4. เอกภพสมพัทธ์ (μ) คอ เซตที่ประกอบด้วยสมาชิกทั้งหมด ของสิ่งที่เรําต้องการ";
      replyMsg($arrayHeader,$arrayPostData);
}
else if($mess == "การเขียนเซต"){
      $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
      $arrayPostData['messages'][0]['type'] = "text";
      $arrayPostData['messages'][0]['text'] = "1. เขียนแบบแจกแจงสมาชิก (Tubular form) มีหลักการเขียน ดังนี้
ในกรณีที่จำนวนสมาชิกมากๆ ให้เขียนสมาชิกอยํางน้อย 3 ตัวแรก แล้วใช้จุด 3 จุด (Triple dot) แล้วจงเขียนสมาชิกตัวสุดท้าย 
2. เขียนแบบบอกเงื่อนไขของสมาชิก (Set builder form) หลักการเขียนมีดังนี้
-เขียนเซตด้วยวงเล็บปีกกา
-กำหนดตัวแปรแทนสมาชิกทั้งหมดตามด้วยเครื่องหมาย | (| อ่านว่า \"โดยที่\")่ แล้วตามด้วยเงื่อนไขของตัวแปรนั้น ดังรูปแบบ {x | เงื่อนไขของ x}
";
      replyMsg($arrayHeader,$arrayPostData);
}
else if($mess == "การยูเนียน"){
      $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
      $image_url="https://still-oasis-33130.herokuapp.com/ada5.jpg";
       $arrayPostData['messages'][0]['type'] = "image";
      $arrayPostData['messages'][0]['originalContentUrl'] = $image_url;
      $arrayPostData['messages'][0]['previewImageUrl'] = $image_url;
      replyMsg($arrayHeader,$arrayPostData);
}
else if($mess == "การอินเตอร์เซคชัน"){
      $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
      $image_url="https://still-oasis-33130.herokuapp.com/ada6.jpg";
       $arrayPostData['messages'][0]['type'] = "image";
      $arrayPostData['messages'][0]['originalContentUrl'] = $image_url;
      $arrayPostData['messages'][0]['previewImageUrl'] = $image_url;
      replyMsg($arrayHeader,$arrayPostData);
}
else if($mess == "ผลต่างเซต"){
      $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
     $image_url="https://still-oasis-33130.herokuapp.com/ada7.jpg";
       $arrayPostData['messages'][0]['type'] = "image";
      $arrayPostData['messages'][0]['originalContentUrl'] = $image_url;
      $arrayPostData['messages'][0]['previewImageUrl'] = $image_url;
      replyMsg($arrayHeader,$arrayPostData);
}
else if($mess == "การคอมพลีเมนท์"){
      $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
      $image_url="https://still-oasis-33130.herokuapp.com/ada8.jpg";
       $arrayPostData['messages'][0]['type'] = "image";
      $arrayPostData['messages'][0]['originalContentUrl'] = $image_url;
      $arrayPostData['messages'][0]['previewImageUrl'] = $image_url;
      replyMsg($arrayHeader,$arrayPostData);
}
else if($mess == "พาวเวอร์เซต"||$mess == "เซตกำลัง"){
      $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
      $arrayPostData['messages'][0]['type'] = "text";
      $arrayPostData['messages'][0]['text'] = "P(A) = {สบเซตทงหมดของ A} 
เช่น A= {1, 2, 3} ดังนั้น P(A) = {{1}, {2}, {3}, {1, 2}, {1, 3}, {2, 3}, {1, 2, 3}, ∅} 
ข้อสังเกต
1. จำนวนสมาชิกของ P(A) = n(P(A)) = 2n(A) 
2. เมื่อ A เป็นเซตจำกัดและ n(A) = K จะได้ 2K
     2.1 n(P(A)) = 2K 2.2 n(P(P(A))) = 22K
     2.3 n(P(P(P(A)))) = 22K
ดังนั้น จำนวนสมาชิกที่ต่ำที่สุดของพาวเวอร์เซตคือ P(A) = 20 = 1 = ∅";
      replyMsg($arrayHeader,$arrayPostData);
}
else if($mess == "การโอเปอเรชั่น"){
      $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
      $image_url="https://still-oasis-33130.herokuapp.com/Operation.png";
       $arrayPostData['messages'][0]['type'] = "image";
      $arrayPostData['messages'][0]['originalContentUrl'] = $image_url;
      $arrayPostData['messages'][0]['previewImageUrl'] = $image_url;
      replyMsg($arrayHeader,$arrayPostData);
}
 else if($mess == "สูตรลดทอน"){
      $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
      $image_url="https://still-oasis-33130.herokuapp.com/ton.png";
       $arrayPostData['messages'][0]['type'] = "image";
      $arrayPostData['messages'][0]['originalContentUrl'] = $image_url;
      $arrayPostData['messages'][0]['previewImageUrl'] = $image_url;
      replyMsg($arrayHeader,$arrayPostData);
}
    else {
      $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
      $arrayPostData['messages'][0]['type'] = "text";
      $arrayPostData['messages'][0]['text'] = "ขอโทษค่ะ ไม่เจอคำที่ให้ค้นหา\nลองค้นหาใหม่อีกครั้งนะค่ะ";
      replyMsg($arrayHeader,$arrayPostData);
    }
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
