<?php
require 'db.php';;//連接資料庫
session_start();
mysqli_query($conn,"SET NAMES 'utf8'");//設定語系


$userEmail=$_POST["email"];
//$userEmail=mysqli_real_escape_string($conn,$userEmail);
$useroldPassword=$_POST["oldpassword"];
//$useroldPassword=mysqli_real_escape_string($conn,$useroldPassword);
$usernewPassword=$_POST["newpassword"];
//$usernewPassword=mysqli_real_escape_string($conn,$usernewPassword);
$userassertPassword=$_POST["assertpassword"];
//$userassertPassword=mysqli_real_escape_string($conn,$userassertPassword);

print("userEmail");
print($userEmail);
print("useroldPassword");
print($useroldPassword);
print("usernewPassword");
print($usernewPassword);
print("userassertPassword");
print($userassertPassword);

$sql = "SELECT password, member_name ,member_id FROM `member` where `email`='$userEmail' ";
$result = mysqli_query($conn, $sql);
$dbid = NULL;
if(mysqli_num_rows($result) > 0){
	$row = mysqli_fetch_array($result);
	if($row['password'] !=NULL){
		if ($useroldPassword == $row['password']) {

			$_SESSION["email"]=$userEmail;
			$_SESSION["oldpasssword"]=$useroldPassword;
	    	$_SESSION["newpassword"]=$usernewPassword;
			$_SESSION["assertpassword"]=$userassertPassword;
	    	$dbid = $row ["member_id"];

			if($userassertPassword != $usernewPassword){
					echo '<script language="javascript">';
					echo 'alert("兩密碼不相符")';
					echo '</script>';
					//header("Refresh:0;url=./changepassword.php");
			}else{

		    $updatepasswordsql = "UPDATE `member` SET password='$usernewPassword' WHERE member_id=$dbid";

		    if(mysqli_query($conn,$updatepasswordsql)=== true){
						echo '<script language="javascript">';
						echo 'alert("密碼修改成功")';
						echo '</script>';
						include("logout.php");
		        		header('Location: ./login.php');
				}else{
					echo '<script language="javascript">';
					echo 'alert("密碼修改失敗")';
					echo '</script>';
		      		header("Refresh:0;url=./changepassword.php");
				}
			}
		}else{
			echo '<script language="javascript">';
			echo 'alert("密碼錯誤")';
			echo '</script>';
			header("Refresh:0;url=./changepassword.php");
		}
	}
}else{
	echo '<script language="javascript">';
	echo 'alert("查無使用者!")';
	echo '</script>';
	header("Refresh:0;url=./changepassword.php");
}

?>
