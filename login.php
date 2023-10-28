<?php
// require 'header.php';
// require 'title.php';
// require 'js.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>NSYSUHealth</title>
  <link href="img/logo-dark2.png" type="image/x-icon" rel="shortcut icon">
  <link rel="stylesheet" href="assets/style/login.css">
  <link rel="stylesheet" href="assets/style/rwd.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
        <?php
					}    
					if(isset($_SESSION['islogin'])=="1"){				 
				?>
          <li><a href="logout.php">登出</a></li>
        <?php
					}
		?>
        <li><a href="cart.php"><i class="material-icons">shopping_cart</i></a></li>
      </ul>
    </nav>
    <nav class="mobile_menu">
      <div class="hamburger">
        <span></span>
      </div>
      <img src="img/logo-all.png" alt="logo">
      <a href="cart.php"><i class="material-icons">shopping_cart</i></a>
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
        <?php
					}
		?>
        <li><a href="cart.php"><i class="material-icons">shopping_cart</i></a></li>
      </ul>
    </nav>
  </header>
  <div class="login_area">
    <form name="formlogin" id="formlogin"action="_login.php" method="post">
      <div class="contain active">
        <h1>會員登入</h1>

        <div class="router">
          <label for="email"><i class="material-icons">person</i></label>
          <input type="email" placeholder="電子信箱" id="email" name="email">
        </div>
        <div class="router">
          <label for="password"><i class="material-icons">vpn_key</i></label>
          <input type="password" placeholder="請輸入使用者密碼" id="password" name="password">
        </div>
        <div class="checkbox">
          <a href="forgetpassword.php" style="color:white;">忘記密碼?</a>
        </div>

        <div class="login"><span id="login"onclick="loginfun();">登入帳號</span></div><br>
        <div class="login"><a href="editmember.php">註冊會員</a></div>
      </div>
      <!-- <div class="social">
        <h1>連結社群帳號</h1>
        <div class="router"><img src="img/facebook.png" alt=""></div>
        <div class="router"><img src="img/google.png" alt=""></div>
        <div class="router"><img src="img/yahoo.png" alt=""></div>
      </div> -->
    </form>
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
  <script>
    function loginfun(){
      
      if ( document.getElementById("email").value ==""||document.getElementById("password").value == ""){
        alert("帳號或密碼不可為空");
      }else{
        $("#formlogin").submit();
      }
    }
      //  alert("成功加入會員");
     
  </script>
</body>

</html>