<?php
// 載入db.php來連結資料庫
require_once 'db.php';
session_start();

    $host = 'localhost';
    $dbuser ='root';
    $dbpassword = 'ec0000';
    $dbname = 'cart';
    $link = mysqli_connect($host,$dbuser,$dbpassword,$dbname);

    $account=$_POST['account'];
    $sex=$_POST['sex'];
    $date=$_POST['birth'];
    $telephone=$_POST['telephone'];
    $member_id = $_SESSION["islogin"]; 

    // echo '接收到的內容為: '.$account;
    // echo '接收到的內容為: '.$sex;
    // echo '接收到的內容為: '.$password;
    // echo '接收到的內容為: '.$date;
    // echo '接收到的內容為: '.$telephone;
    // echo '接收到的內容為: '.$email;
    //$sql = "INSERT INTO  `member`(`member_name`, `email`,`password`,`gender`,`birth`,`phone`)  VALUE ('$account','$email','$password','$sex','$date','$telephone') ";
    $sql = "UPDATE `member` SET member_name='$account',gender='$sex',birth='$date',phone='$telephone' WHERE member_id=$member_id";
    mysqli_query($link,$sql);
        

        // 如果有異動到資料庫數量(更新資料庫)
    if (mysqli_affected_rows($link)>0) {
        // 如果有一筆以上代表有更新
        // mysqli_insert_id可以抓到第一筆的id
        echo'<script language="javascript">
            alert("成功修改會員資料");
            window.location.href="center.php"
            </script>';
    }elseif(mysqli_affected_rows($link)==0) {
            //echo "無資料新增";
            echo'<script language="javascript">
            alert("無資料新增");
            window.location.href="center.php"
            </script>';
    }else {
            //echo "{$sql} 語法執行失敗，錯誤訊息: " . mysqli_error($link);
            echo'<script language="javascript">
            alert("資料新增失敗");
            window.location.href="center.php"
            </script>';
    }
    mysqli_close($link); 

        
    echo '接收到的內容為: '.$_SESSION["islogin"];
    //echo '接收到的內容為: '.$account;
    echo '接收到的內容為: '.$sex;
    //echo '接收到的內容為: '.$password;
    echo '接收到的內容為: '.$date;
    echo '接收到的內容為: '.$telephone;
    //echo '接收到的內容為: '.$email;
// sql語法存在變數中

 ?>
