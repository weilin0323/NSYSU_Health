<?php
// 載入db.php來連結資料庫
require_once 'db.php';
?>

<!--<h3>sql插入結果</h3>-->
<?php
    $host = 'localhost';
    $dbuser ='root';
    $dbpassword = 'ec0000';
    $dbname = 'cart';
    $link = mysqli_connect($host,$dbuser,$dbpassword,$dbname);
    // $sql = "SELECT account FROM member WHERE account='".$_POST["account"]."'";
    // $record = mysqli_query($link,$sql);
    
    $account=$_POST['account'];
    $sex=$_POST['sex'];
    $password=$_POST['password'];   
    $date=$_POST['birth'];
    $telephone=$_POST['telephone'];
    $email=$_POST['email'];

    // echo '接收到的內容為: '.$account;
    // echo '接收到的內容為: '.$sex;
    // echo '接收到的內容為: '.$password;
    // echo '接收到的內容為: '.$date;
    // echo '接收到的內容為: '.$telephone;
    // echo '接收到的內容為: '.$email;
    $sql = "INSERT INTO  `member`(`member_name`, `email`,`password`,`gender`,`birth`,`phone`)  VALUE ('$account','$email','$password','$sex','$date','$telephone') ";
    mysqli_query($link,$sql);
        
// $sql = "INSERT INTO  `member` (`member_id`,`member_name`, `email`,`password`,`gender`,`birth`,`phone`) VALUE (3,'Doe','john@example.com','4521ccc','男',1998-03-23,0921333222) ";
// 用mysqli_query方法執行(sql語法)將結果存在變數中

        // 如果有異動到資料庫數量(更新資料庫)
    if (mysqli_affected_rows($link)>0) {
        // 如果有一筆以上代表有更新
        // mysqli_insert_id可以抓到第一筆的id
        $new_id= mysqli_insert_id ($link);
        //echo "新增後的id為 {$new_id} ";
        echo'<script language="javascript">
            alert("成功加入會員");
            window.location.href="index.php"
            </script>';
    }elseif(mysqli_affected_rows($link)==0) {
            echo "無資料新增";
    }else {
            echo "{$sql} 語法執行失敗，錯誤訊息: " . mysqli_error($link);
    }
    mysqli_close($link); 

        
   
    // echo '接收到的內容為: '.$account;
    // echo '接收到的內容為: '.$sex;
    // echo '接收到的內容為: '.$password;
    // echo '接收到的內容為: '.$date;
    // echo '接收到的內容為: '.$telephone;
    // echo '接收到的內容為: '.$email;
// sql語法存在變數中

 ?>
