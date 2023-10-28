<?php
  session_start();
  $link = mysqli_connect("localhost", "root", "ec0000","cart") 
  or die("無法開啟MySQL資料庫連接!<br/>");

  $_SESSION['visa'] = $_POST['visa'];
  $_SESSION['firstname'] = $_POST['firstname'];
  $_SESSION['lastname'] = $_POST['lastname'];
  $_SESSION['month'] = $_POST['month'];
  $_SESSION['year'] = $_POST['year'];
  $_SESSION['back'] = $_POST['back'];    
  
  //$sql = "INSERT INTO `pay`(`visa`,`firstname`,`lastname`,`month`,`year`,`back`) VALUE ('$visa','$firstname','$lastname','$month','$year','$back')";
  //$sql = "INSERT INTO `pay`(`visa`,`firstname`,`lastname`,`month`,`year`,`back`) VALUE ('7898-7895-8965-8965','跨','尛','10','2012','789')";
  //測試Mysql
  //mysqli_query($link,$sql);
  //mysqli_close($link);  // 關閉資料庫連接  

  
 
  //echo '接收到的內容為: '.$visa;
  //echo '接收到的內容為: '.$firstname;
  //echo '接收到的內容為: '.$lastname;
  //echo '接收到的內容為: '.$month;
  //echo '接收到的內容為: '.$year;
  //echo '接收到的內容為: '.$back;
  
?>
 <script language="javascript">
     window.location.href='checkout_3.php'
 </script>
