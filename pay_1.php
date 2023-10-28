<?php
  session_start();
  $link = mysqli_connect("localhost", "root", "ec0000","cart") 
  or die("無法開啟MySQL資料庫連接!<br/>");

  $_SESSION['pnumber'] = $_POST['pnumber'];
  $_SESSION['first'] = $_POST['first'];
  $_SESSION['last'] = $_POST['last'];
  $_SESSION['add1'] = $_POST['add1'];
  $_SESSION['add2'] = $_POST['add2'];
  $_SESSION['add3'] = $_POST['add3'];
  $_SESSION['ordernum'] =  uniqid();

  //$name = $_POST['name'];
  //$ordernum = $_POST['ordernum'];
  //$sql = "INSERT INTO `checkout`(`first`,`last`,`pnumber`,`add1`,`add2`,`add3`) VALUE ('$first','$last','$pnumber','$add1','$add2','$add3')";
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
     window.location.href='checkout_2.php'
 </script>