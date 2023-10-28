<?php
  session_start();
  $link = mysqli_connect("localhost", "root", "ec0000","cart") 
  or die("無法開啟MySQL資料庫連接!<br/>");

  $ordernumber = $_SESSION['ordernumber'];
  
  $sql = "DELETE FROM order_p WHERE ordernumber='$ordernumber'";
  
  //$sql = "DELETE FROM total WHERE ordernum=".$ordernum;
  
  //測試Mysql
  mysqli_query($link,$sql);
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
     window.location.href='Shipment_success.php'
 </script>


