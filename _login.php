<?php
require 'db.php';;//連接資料庫


//mysqli_query($conn,"SET NAMES 'utf8'");//設定語系
session_start();


$userEmail=$_POST["email"];
$userEmail=mysqli_real_escape_string($conn,$userEmail);
$userPassword=$_POST["password"];
$userPassword=mysqli_real_escape_string($conn,$userPassword);
// print($userEmail);
// print($userPassword);
// print($userPassword);

// echo '<script language="javascript">';
// echo 'alert("_login")';
// echo '</script>';



$sql = "SELECT member_name ,phone ,member_id FROM `member` where email='$userEmail' AND password='$userPassword' ";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
	$row = mysqli_fetch_array($result);
	if($userEmail == "root"){
		$_SESSION["islogin"]=$row["member_id"];
		header('Location: ./order.php');
	}else{
		$_SESSION["email"]=$userEmail;
		$_SESSION["passsword"]=$userPassword;
		$_SESSION["username"]=$row["member_name"];
		$_SESSION["userphone"]=$row["phone"];
		$_SESSION["islogin"]=$row["member_id"];
		//print($_SESSION["islogin"]);
		echo '<script language="javascript">';
		echo 'alert("登入成功")';
		echo '</script>';
		header('Location: ./index.php');
	}
	//echo "string".$sql;
	// $hash =$row['password'];
		
	
		
}else{
	// echo "string".$sql;
	echo '<script language="javascript">';
	echo 'alert("查無使用者或密碼錯誤")';
	echo '</script>';
	header("Refresh:0;url=./login.php");
}

?>


