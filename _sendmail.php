<?php

require ("db.php");
require './email/Exception.php';
require './email/PHPMailer.php';
require './email/SMTP.php';
require './email/POP3.php';
require './email/OAuth.php';
// require 'vendor/autoload.php';

$link = $_POST['email'];



// echo "string";
   $mail = new PHPMailer\PHPMailer\PHPMailer();
   $mail->IsSMTP();
// echo "ok";
   $mail->CharSet="UTF-8";
   $mail->Host = "smtp.gmail.com";
   $mail->SMTPDebug = 1;
   $mail->Port = 465 ; //465 or 587

   $mail->SMTPSecure = 'ssl';
   $mail->SMTPAuth = true;
   $mail->IsHTML(true);

   //Authentication
   $mail->Username = "chufangtest@gmail.com";
   $mail->Password = "iftumqppfeqlsipn";

   //Set Params
   $mail->SetFrom("chufangtest@gmail.com");
   $mail->AddAddress($link);
   $mail->SMTPDebug = false;  //關閉除錯
   $mail->Subject = "NSYSU Health_重設密碼";
   $mail->Body = "

   ＊ 此信件為系統發出信件，請勿直接回覆，感謝您的配合。謝謝！＊<br/>
   親愛的會員 您好：<br/>
   這封認證信是由NSYSU Health發出，用以處理您忘記密碼，當您收到本「認證信函」後，請直接點選下方連結重新設置您的密碼，無需回信。<br/>
   請點連結重設密碼
   http://localhost/sweetaste/resetpassword.php?email=$link<br/>
   請注意，此網址僅能使用一次，1小時後將自動失效。<br/> 謝謝, <br/>NSYSU Health 敬上 <br/>
   NSYSU Health：http://localhost/sweetaste/index.php<br/>
   聯絡我們：chufangtest@gmail.com <br/>

   ";



// 紀錄寄信時間，並更新資料庫

date_default_timezone_set('Asia/Taipei');
$datetime = date('Y/m/d H:i:s');
$sql ="UPDATE member SET forgetpd_time='".$datetime."' WHERE email= '".$link."'";
 mysqli_query($conn , $sql);

   // echo "string";
    if(!$mail->Send()) {
       echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
       echo "<script>alert('密碼重設信寄出');</script>";
       header("Refresh:0;url=./index.php");

    }

 ?>
