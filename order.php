<?php 
    session_start();
    require("db.php");
    
?> 
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>NSYSUHealth</title>
  <link href="img/logo-dark.png" type="image/x-icon" rel="shortcut icon">
  <link rel="stylesheet" href="assets/style/checkout.css">
  <link rel="stylesheet" href="assets/style/rwd.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="js/all.js"></script>
</head>

<body>
  <form action="delete.php" method="post">
  <header>
  <nav class="pc_menu">
      <div class="logo">
      <a href="index.php"><img src="img/logo-all.png" alt="logo"></a>
      </div>
      <ul>
        <li><a href="order.php">出貨</a></li>
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
        
      </ul>
    </nav>
    <nav class="mobile_menu">
      <div class="hamburger">
        <span></span>
      </div>
      <img src="img/logo-all.png" alt="logo">
      <ul>
        <li><a href="order.php">出貨</a></li>
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
        
      </ul>
    </nav>
  </header>
  <?php 
    $records = mysqli_query($conn,"SELECT * FROM order_p "); // fetch data from database
    $data = mysqli_fetch_array($records);
    $_SESSION['ordernumber'] = $data['ordernumber'];
    ?>
  <div class="checkout">
    <div class="steps">
      <div class="title">
        <h2>訂單</h2>
      </div>
      <div class="set">
        <div>
          <label for="first">姓氏： <?php echo $data['first']; ?></label>
          <h2 type="text" id="first" >
        </div>
        <div>
          <label for="last">名字： <?php echo $data['last']; ?></label>
          <h2 type="text" id="last" >
        </div>
      </div>
      <div class="set">
        <div>
          <label for="pnumber">電話： <?php echo $data['pnumber']; ?></label>
          <h2 type="tel" id="pnumber" >
        </div>
      </div>
      <div class="set">
        <div>
          <label for = "add1">訂單編號： <?php echo $data['ordernumber']; ?></label>
          <h2 type="text" id="last" >
          </select>
        </div>
        
      </div>
      <center><input type="submit" value="出貨" class="next" style="width:230px;height:70px; href=""></center>
      
    </div>
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
  

  </form>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
  <script src="js/all.js"></script>
  <?php mysqli_close($db); // Close connection ?>
</body>

</html>