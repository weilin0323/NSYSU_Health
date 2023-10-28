<?php
  session_start();
  $link = mysqli_connect("localhost", "root", "ec0000","cart") 
  or die("無法開啟MySQL資料庫連接!<br/>");

  $email = $_POST['emailID'];
  $companyID= $_POST['companyID'];
  $visa = $_SESSION['visa'];
  $firstname = $_SESSION['firstname'];
  $lastname = $_SESSION['lastname'];
  $month = $_SESSION['month'];
  $year = $_SESSION['year'];
  $back = $_SESSION['back']; 
  $pnumber = $_SESSION['pnumber'];
  $first = $_SESSION['first'];
  $last = $_SESSION['last'];
  $add1 = $_SESSION['add1'];
  $add2 = $_SESSION['add2'];
  $add3 = $_SESSION['add3'];  
  $ordernum = $_SESSION['ordernum'];
  $name = $first.$last;
  $subtotal = $_SESSION['total'];
  $freight = 300;
  $TotalCost = $_SESSION['total']+$freight;
  $sql2 = "INSERT INTO `order_p`(`pnumber`,`first`,`last`,`ordernumber`) VALUE ('$pnumber','$first','$last','$ordernum')";

  $sql = "INSERT INTO `total`(`visa`,`firstname`,`lastname`,`month`,`year`,`back`,`pnumber`,`first`,`last`,`add1`,`add2`,`add3`,`email`,`companyID`,`ordernumber`,`name`,`subtotal`,`freight`,`TotalCost`) VALUE ('$visa','$firstname','$lastname','$month','$year','$back','$pnumber','$first','$last','$add1','$add2','$add3','$email','$companyID','$ordernum','$name','$subtotal','$freight','$TotalCost')";
  //$sql = "INSERT INTO `pay`(`visa`,`firstname`,`lastname`,`month`,`year`,`back`) VALUE ('7898-7895-8965-8965','跨','尛','10','2012','789')";
  //測試Mysql
  mysqli_query($link,$sql);
  mysqli_query($link,$sql2);
  mysqli_close($link);  // 關閉資料庫連接  

  
  //echo '$visa接收到的內容為: '.$visa,"<br>";
  //echo '$firstname接收到的內容為: '.$firstname,"<br>";
  //echo '$lastname接收到的內容為: '.$lastname,"<br>";
  //echo $_SESSION['firstname'];
  //echo $_SESSION['lastname'];
  //echo $_SESSION['month'];
  //echo $_SESSION['year'];
  //echo '$companyID接收到的內容為: '.$companyID;
  ?>
 <script language="javascript">
     window.location.href='success.php'
 </script>
