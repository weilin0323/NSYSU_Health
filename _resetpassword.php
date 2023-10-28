<?php
session_start();
require 'db.php';//連接資料庫
mysqli_query($conn,"SET NAMES 'utf8'");//設定語系


$_SESSION["password"] = $_POST["password"];

$email=$_SESSION['email'];
// print($email);


$sql = "SELECT *  FROM `member` WHERE `email` = '".$email."'";
$res = mysqli_query($conn , $sql);
$row = mysqli_fetch_array($res);
// echo "string".$row['password'];

// date_default_timezone_set('Asia/Taipei');
// $datetime = date('Y/m/d H:i:s');

// echo "string".$row['forgetpd_time'];
// $zero1=strtotime ($row['forgetpd_time']); //申請時間
// $zero2=strtotime ($datetime); //當前時間 ,注意H 是24小時 h是12小時

//float ceil ( float $value )
//返回不小於 value 的下一個整數，value 如果有小數部分則進一位。
// $sub_time=floor(($zero2-$zero1)/3600);
// if($sub_time<1){
// print($row['password']);
// print($_SESSION["password"]);
  if($row['password'] == $_SESSION["password"]){
    echo "<script type='text/javascript'>alert('密碼與之前一樣，請重新設定!');</script>";
    header("Refresh:0;url=./resetpd.php?email=".$email);
  }else{
    $password = $_SESSION["password"];
    //print($password);
    $sqlStr="UPDATE `member` SET `password`= '".$password."' WHERE `email`= '".$email."'";
    //echo "string".$sqlStr;
    mysqli_query($conn,$sqlStr);
    echo "<script type='text/javascript'>alert('密碼更改成功');</script>";
    header("Refresh:0;url=./index.php");
  }

// }else{
//   echo "<script type='text/javascript'>alert('已經超過更改時間，請重新申請!');</script>";
//   header("Refresh:0;url=../forgetpd.php");
// }


 ?>
