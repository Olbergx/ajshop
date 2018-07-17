<?php

$sendto   = "al-nevsk@mail.ru"; // почта, на которую будет приходить письмо
$username =  trim($_POST["nam1"]);   // сохраняем в переменную данные полученные из поля c именем
$phone = trim($_POST["tel"]); // сохраняем в переменную данные полученные из поля c телефонным номером
$title = $_POST["title"]; 
$email = "al-nevsk@mail.ru";

//$_POST["email"]; // сохраняем в переменную данные полученные из поля c адресом электронной почты
// $question = $_POST["hiden1"];


if ($_POST["btn7"]!== ''){


 if(isset($_POST['g-recaptcha-response'])&& $_POST['g-recaptcha-response']){
        var_dump($_POST);
        $secret = "6LfAs2AUAAAAAIZoVUMiw8Tva_nAQb_z_XduS3W9";
        $ip = $_SERVER['REMOTE_ADDR'];
        $captcha = $_POST['g-recaptcha-response'];
        $rsp  = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha&remoteip$ip");
        var_dump($rsp);
        $arr = json_decode($rsp,TRUE);
        if($arr['success']){
            // echo 'Done';



// Формирование заголовка письма
$subject  = "Новое сообщение";
$headers  = "From: " . strip_tags("magaz") . "\r\n";
$headers .= "Reply-To: ". strip_tags($email) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";

// Формирование тела письма
$msg  = "<html><body style='font-family:Arial,sans-serif;'>\r\n";
$msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Заказ в интернет магазине ИП Берг О.В.</h2>\r\n";
$msg .= "<p><strong>Имя:</strong> ".$username."</p>\r\n";
$msg .= "<p><strong>Почта:</strong> ".$email."</p>\r\n";
$msg .= "<p><strong>Телефон:</strong> ".$phone."</p>\r\n";
$msg .= "<p>".$title."</p>\r\n";
$msg .= "</body></html>";

// отправка сообщения
mail($sendto, $subject, $msg, $headers);

} else {
echo "<center><img src='images/ne-otpravleno.png'></center>";
}


header('Location: http://a.tvc.su');
        



        }else{
            echo 'SPam';
        }
        
    }﻿





?>