<?php 
    session_start(); 
    //echo"$_SESSION[islogin]";
    require("db.php");
    $sql2 = "DELETE FROM `cart_his` WHERE member_id=$_SESSION[islogin]";
    mysqli_query($conn, $sql2);
    unset($_SESSION['cart']);
    
    
    
?> 
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>NSYSUHealth</title>
  <link href="img/logo-dark2.png" type="image/x-icon" rel="shortcut icon">
  <link rel="stylesheet" href="assets/style/success.css">
  <link rel="stylesheet" href="assets/style/rwd.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <style>
  header nav {
    padding: 30px 20px;
    width: 1024px;
  }
  header nav ul li {
  margin: 0 30px;
  padding: 5px 5px;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}
  </style>
</head>

<body>
  <header>
  <nav class="pc_menu">
      <div class="logo">
        <a href="index.php"><img src="img/logo-all.png" alt="logo"></a>
      </div>
      <ul>
        <li><a href="index.php">首頁</a></li>
        <li><a href="product.php">所有商品</a></li>
        <li><a href="video.php">我的教練</a></li>
        <?php
					if(isset($_SESSION['islogin'])=="0"){
				?>
          <li><a href="login.php">登入</a></li>
          <li><a href="cart.php"><i class="material-icons">shopping_cart</i></a></li>
        <?php
					}    
					if(isset($_SESSION['islogin'])=="1"){				 
				?>
          <li><a href="logout.php">登出</a></li>
          <li><a href="cart.php"><i class="material-icons">shopping_cart</i></a></li>
          <li><a href="center.php"><svg class="responsiveAccountHeader_accountIcon" width="1rem" height="24px" viewBox="0 0 24 24">
              <path d="M12,10.5 C13.6568542,10.5 15,9.15685425 15,7.5 C15,5.84314575 13.6568542,4.5 12,4.5 C10.3431458,4.5 9,5.84314575 9,7.5 C9,9.15685425 10.3431458,10.5 12,10.5 Z M12,12.5 C9.23857625,12.5 7,10.2614237 7,7.5 C7,4.73857625 9.23857625,2.5 12,2.5 C14.7614237,2.5 17,4.73857625 17,7.5 C17,10.2614237 14.7614237,12.5 12,12.5 Z M5,21.5 L3,21.5 C3,17.6340068 7.02943725,14.5 12,14.5 C16.9705627,14.5 21,17.6340068 21,21.5 L19,21.5 C19,18.8641562 15.9603707,16.5 12,16.5 C8.03962935,16.5 5,18.8641562 5,21.5 Z"></path>
                </svg><?php echo $_SESSION["username"];?>，歡迎</a></li>
        <?php
					}
		?>
        
      </ul>
    </nav>
    <nav class="mobile_menu">
      <div class="hamburger">
        <span></span>
      </div>
      <img src="img/logo-all.png" alt="logo">
      <a href="cart.html"><i class="material-icons">shopping_cart</i></a>
      <ul>
        <li><a href="index.php">首頁</a></li>
        <li><a href="product.php">所有商品</a></li>
        <li><a href="video.php">我的教練</a></li>
        <?php
					if(isset($_SESSION['islogin'])=="0"){
				?>
          <li><a href="login.php">登入</a></li>
        <?php
					}    
					if(isset($_SESSION['islogin'])=="1"){				 
				?>
          <li><a href="logout.php">登出</a></li>
          <li><a href="center.php"><svg class="responsiveAccountHeader_accountIcon" width="1rem" height="24px" viewBox="0 0 24 24">
              <path d="M12,10.5 C13.6568542,10.5 15,9.15685425 15,7.5 C15,5.84314575 13.6568542,4.5 12,4.5 C10.3431458,4.5 9,5.84314575 9,7.5 C9,9.15685425 10.3431458,10.5 12,10.5 Z M12,12.5 C9.23857625,12.5 7,10.2614237 7,7.5 C7,4.73857625 9.23857625,2.5 12,2.5 C14.7614237,2.5 17,4.73857625 17,7.5 C17,10.2614237 14.7614237,12.5 12,12.5 Z M5,21.5 L3,21.5 C3,17.6340068 7.02943725,14.5 12,14.5 C16.9705627,14.5 21,17.6340068 21,21.5 L19,21.5 C19,18.8641562 15.9603707,16.5 12,16.5 C8.03962935,16.5 5,18.8641562 5,21.5 Z"></path>
                </svg><?php echo $_SESSION["username"];?>，歡迎</a></li>
        <?php
					}
		?>
      </ul>
    </nav>
  </header>
  <div class="success">
    <ul>
      <li class="done"><i class="material-icons">check</i></li>
      <li class="done"><i class="material-icons">check</i></li>
      <li class="done"><i class="material-icons">check</i></li>
    </ul>
    <img src="img/success.png" alt="">
    <a href="product.php">繼續逛逛</a>
  </div>
  <footer>
    <div class="subscribe">
      <div class="container">
        <div class="logo">
          <img src="img/logo-light2.png" alt="">
          <p>訂閱最新健康資訊</p>
        </div>
        <div class="email">
          <div class="icon">
            <i class="material-icons">email</i>
          </div>
          <input type="text" id="email" name="email">
          <label for="email">
            <i class="material-icons">arrow_forward</i>
          </label>
        </div>
      </div>
    </div>
    <div class="bottom">
      <div class="left">
        <div class="logo">
          <img src="img/logotype2.png" alt="logo">
        </div>
        <div class="info">
          <p>07-1234-5678</p>
          <p>nsysuhealth@email.com</p>
          <p>804 高雄市鼓山區蓮海路70號</p>
        </div>
        <div class="icon">
          <img src="img/ic-facebook.png" alt="fb">
          <img src="img/ic-line@.png" alt="line">
        </div>
      </div>
      <div class="right">
        <img src="img/footer.png" alt="">
        <p>© 2021 nsysuHealth All Rights Reserved</p>
      </div>
    </div>
  </footer>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
  <script src="js/all.js"></script>

</body>

</html>