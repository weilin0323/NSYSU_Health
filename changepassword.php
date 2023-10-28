<?php
session_start();
//$_SESSION['email']=$_GET['email'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>修改密碼</title>
  <link href="img/logo-dark2.png" type="image/x-icon" rel="shortcut icon">
  <!-- <link rel="stylesheet" href="assets/style/editmember.css"> -->
  <link rel="stylesheet" href="assets/style/rwd.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<style>
    @charset "UTF-8";
    @import url(https://fonts.googleapis.com/earlyaccess/cwtexyen.css);
    .material-icons {
      font-family: "Material Icons";
      font-weight: normal;
      font-style: normal;
      font-size: 24px;
      /* Preferred icon size */
      display: inline-block;
      line-height: 28px;
      text-transform: none;
      letter-spacing: normal;
      word-wrap: normal;
      white-space: nowrap;
      direction: ltr;
      /* Support for all WebKit browsers. */
      -webkit-font-smoothing: antialiased;
      /* Support for Safari and Chrome. */
      text-rendering: optimizeLegibility;
      /* Support for Firefox. */
      -moz-osx-font-smoothing: grayscale;
      /* Support for IE. */
      -webkit-font-feature-settings: "liga";
              font-feature-settings: "liga";
    }

    body,
    html {
      width: 100%;
      min-height: 100vh;
      padding: 0;
      margin: 0;
      font-family: "cwTeXYen", sans-serif;
      font-size: 18px;
      color: #3f5d45;
    }

    * {
      position: relative;
      -webkit-box-sizing: border-box;
              box-sizing: border-box;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    p,
    span,
    ul,
    li {
      padding: 0;
      margin: 0;
    }

    input,
    select {
      -webkit-appearance: none;
        -moz-appearance: none;
              appearance: none;
      border-radius: 0px;
      outline: none;
      border: none;
      font-family: "cwTeXYen", sans-serif;
      font-size: 18px;
    }

    a {
      text-decoration: none;
      color: #3f5d45;
    }

    ul,
    li {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    /*頂部選單*/
    header {
      font-size: 1rem;
    }

    header .logo {
      width: 220px;
    }

    header .logo img {
      width: 100%;
    }

    header nav {
      padding: 30px 42px;
      width: 1024px;
      margin: auto;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-pack: justify;
          -ms-flex-pack: justify;
              justify-content: space-between;
    }

    header nav ul {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: center;
          -ms-flex-align: center;
              align-items: center;
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
          -ms-flex-direction: row;
              flex-direction: row;
    }

    header nav ul li {
      margin: 0 15px;
      padding: 5px 10px;
      -webkit-transition: all 0.3s;
      transition: all 0.3s;
    }

    header nav ul li:hover {
      -webkit-box-shadow: 0 3px 0 #3f5d45;
              box-shadow: 0 3px 0 #3f5d45;
    }

    header nav ul li img {
      width: 24px;
      height: 24px;
    }

    header .mobile_menu {
      display: none;
      width: 100%;
      -ms-flex-wrap: wrap;
          flex-wrap: wrap;
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
          -ms-flex-direction: row;
              flex-direction: row;
      -webkit-box-align: center;
          -ms-flex-align: center;
              align-items: center;
      -webkit-box-pack: justify;
          -ms-flex-pack: justify;
              justify-content: space-between;
    }

    header .mobile_menu .hamburger {
      cursor: pointer;
      display: inline-block;
    }

    header .mobile_menu .hamburger span {
      margin: 5px 0;
      display: inline-block;
      position: relative;
      width: 18px;
      height: 2px;
      border-radius: 2px;
      background: #3f5d45;
    }

    header .mobile_menu .hamburger span:before, header .mobile_menu .hamburger span:after {
      content: "";
      position: absolute;
      left: 0;
      width: 100%;
      height: 2px;
      background: #3f5d45;
    }

    header .mobile_menu .hamburger span:before {
      top: -5px;
    }

    header .mobile_menu .hamburger span:after {
      top: 5px;
    }

    header .mobile_menu ul {
      display: none;
      background: #fff;
      width: 100%;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
          -ms-flex-direction: column;
              flex-direction: column;
      text-align: left;
      padding: 20px 0;
    }

    header .mobile_menu ul li {
      margin: 0;
      padding: 10px 0;
      width: 100%;
      border-bottom: 1px solid #eaf0ed;
    }

    header .mobile_menu ul li a {
      display: block;
      width: 100%;
    }

    header .mobile_menu ul li:last-child {
      border: none;
    }

    /*首頁大圖*/
    .slide {
      width: 940px;
      height: 496px;
      margin: auto;
      background-image: url("../../img/slide.jpg");
      background-size: cover;
      background-position: center;
      margin-bottom: 40px;
    }

    /*三主題*/
    .topic_area {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-pack: center;
          -ms-flex-pack: center;
              justify-content: center;
      -webkit-transform: translateY(-60%);
              transform: translateY(-60%);
      margin-bottom: -80px;
    }

    .topic_area .topic {
      width: 260px;
      height: 260px;
      overflow: hidden;
    }

    .topic_area .topic .text {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-pack: center;
          -ms-flex-pack: center;
              justify-content: center;
      -webkit-box-align: center;
          -ms-flex-align: center;
              align-items: center;
      width: 100%;
      height: 100%;
      background: #3f5d45;
      color: #fff;
      opacity: 0.8;
      -webkit-transition: all 0.3s;
      transition: all 0.3s;
    }

    .topic_area .topic .text:hover {
      background: #ffe180;
      color: #3f5d45;
    }

    .topic_area .topic p {
      -webkit-writing-mode: vertical-rl;
          -ms-writing-mode: tb-rl;
              writing-mode: vertical-rl;
      text-align: center;
      letter-spacing: 10px;
      cursor: pointer;
      font-size: 1.5rem;
    }

    .topic_area .topic .blur_bg {
      -webkit-transform: scale(1.1);
              transform: scale(1.1);
      position: absolute;
      background-size: cover;
      background-position: center center;
      width: 100%;
      height: 100%;
      -webkit-filter: blur(3px);
              filter: blur(3px);
    }

    .topic_area .topic:nth-child(1) .blur_bg {
      background-image: url("../../img/topic_1.jpg");
    }

    .topic_area .topic:nth-child(2) .blur_bg {
      background-image: url("../../img/topic_2.jpg");
    }

    .topic_area .topic:nth-child(3) .blur_bg {
      background-image: url("../../img/topic_3.jpg");
    }

    /*介紹*/
    .mobile_pic {
      width: 100%;
      display: none;
      padding: 0 90px;
    }

    section {
      width: 100%;
      height: 420px;
      padding: 40px 35px;
      margin-bottom: 80px;
      background: #eaf0ed;
    }

    section .contain {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      position: relative;
      -webkit-box-align: center;
          -ms-flex-align: center;
              align-items: center;
      top: 50%;
      -webkit-transform: translateY(-50%);
              transform: translateY(-50%);
      width: 940px;
      margin: auto;
    }

    section .reason {
      -webkit-box-flex: 1;
          -ms-flex: 1;
              flex: 1;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: center;
          -ms-flex-align: center;
              align-items: center;
      height: 460px;
      margin: 0px 40px;
    }

    section .reason p {
      -webkit-writing-mode: vertical-rl;
          -ms-writing-mode: tb-rl;
              writing-mode: vertical-rl;
      display: inline-block;
      font-size: 1rem;
      line-height: 28px;
      max-height: 300px;
      color: #8da291;
      margin: 0px 15px;
    }

    section .reason img {
      position: absolute;
      top: 0;
      right: 0;
      width: 90px;
      height: 300px;
    }

    section .pic_1,
    section .pic_2 {
      -webkit-box-flex: 1;
          -ms-flex: 1;
              flex: 1;
      width: 460px;
      height: 460px;
      background-size: cover;
      background-position: center;
    }

    section .pic_1 {
      background-image: url("../../img/reason1.jpg");
    }

    section .pic_2 {
      background-image: url("../../img/reason2.jpg");
    }

    .noreason {
      width: 1024px;
      height: 360px;
      background-image: url("../../img/lg-想吃甜點是不需要理由的.png");
      background-size: contain;
      background-position: center;
      background-repeat: no-repeat;
      margin: 120px auto;
    }

    /*產品*/
    .products {
      width: 1024px;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      margin: 30px auto;
      -ms-flex-pack: distribute;
          justify-content: space-around;
    }

    .products .item {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
          -ms-flex-direction: column;
              flex-direction: column;
    }

    .products .item .img_box {
      width: 300px;
      height: 300px;
      overflow: hidden;
    }

    .products .item .img_box img {
      -webkit-transition: all 0.3s;
      transition: all 0.3s;
      width: 100%;
    }

    .products .item .img_box:hover img {
      -webkit-transform: scale(1.1);
              transform: scale(1.1);
    }

    .products .item .cate {
      font-size: 1rem;
      position: absolute;
      -webkit-writing-mode: vertical-lr;
          -ms-writing-mode: tb-lr;
              writing-mode: vertical-lr;
      top: 0;
      left: 0;
      letter-spacing: 3px;
      padding: 8px;
      background: #3f5d45;
      color: #fff;
      margin-left: 15px;
    }

    .products .item .item_info {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -ms-flex-pack: distribute;
          justify-content: space-around;
      padding: 10px;
      font-size: 1.25rem;
    }

    .products .item .item_info .price {
      font-weight: bold;
    }

    .products .item .addcart {
      cursor: pointer;
      background: #eaf0ed;
      font-size: 1.2rem;
      text-align: center;
      padding: 10px 90px;
      -webkit-transition: all 0.3s;
      transition: all 0.3s;
    }

    .products .item .addcart:hover {
      color: #fff;
      background: #3f5d45;
    }

    .products .item .addcart:hover a {
      color: #eaf0ed;
    }

    /*底部*/
    footer {
      margin-top: 40px;
      background: #eaf0ed;
    }

    footer .subscribe {
      background: #3f5d45;
    }

    footer .subscribe .container {
      width: 960px;
      margin: auto;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -ms-flex-pack: distribute;
          justify-content: space-around;
      -webkit-box-align: center;
          -ms-flex-align: center;
              align-items: center;
      padding: 30px 0px;
    }

    footer .subscribe .logo {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-pack: center;
          -ms-flex-pack: center;
              justify-content: center;
      -webkit-box-align: center;
          -ms-flex-align: center;
              align-items: center;
    }

    footer .subscribe p {
      color: #eaf0ed;
      font-size: 1.5rem;
      padding: 0 20px;
    }

    footer .subscribe img {
      width: 40px;
    }

    footer .email {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: center;
          -ms-flex-align: center;
              align-items: center;
      -webkit-box-pack: center;
          -ms-flex-pack: center;
              justify-content: center;
    }

    footer .email .icon {
      height: 56px;
      line-height: 56px;
      padding: 6px 20px;
      background: #fff;
    }

    footer .email label {
      cursor: pointer;
      background: #ffe180;
      height: 56px;
      line-height: 56px;
      padding: 6px 20px;
    }

    footer .email input {
      color: #3f5d45;
      font-size: 1.2rem;
      width: 300px;
      height: 56px;
      padding: 10px;
      outline: none;
      border: none;
    }

    footer .bottom {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      width: 960px;
      height: 340px;
      margin: auto;
      padding: 30px 0;
    }

    footer .bottom .left {
      -webkit-box-flex: 1;
          -ms-flex: 1;
              flex: 1;
      height: 100%;
      -ms-flex-pack: distribute;
          justify-content: space-around;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
          -ms-flex-direction: column;
              flex-direction: column;
    }

    footer .bottom .left .logo img {
      width: 170px;
    }

    footer .bottom .left .icon img {
      width: 32px;
    }

    footer .bottom .right {
      -webkit-box-flex: 1;
          -ms-flex: 1;
              flex: 1;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
          -ms-flex-direction: column;
              flex-direction: column;
      -webkit-box-align: end;
          -ms-flex-align: end;
              align-items: flex-end;
      -webkit-box-pack: justify;
          -ms-flex-pack: justify;
              justify-content: space-between;
    }

    footer .bottom .right img {
      width: 60px;
    }

    /*產品*/
    .login_area {
      -webkit-transition: all .3s;
      transition: all .3s;
      width: 940px;
      margin: 80px auto;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: center;
          -ms-flex-align: center;
              align-items: center;
      -ms-flex-pack: distribute;
          justify-content: space-around;
      height: 1000px;
      background: #eaf0ed;
    }

    .login_area .router {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -ms-flex-pack: distribute;
          justify-content: space-around;
      -webkit-box-align: center;
          -ms-flex-align: center;
              align-items: center;
      margin: 40px 0;
      height: 60px;
      line-height: 60px;
      width: 500px;
      text-align: center;
      background: #fff;
    }

    .login_area .router img {
      max-width: 100px;
      color: #3f5d45;
      opacity: .6;
      -webkit-filter: grayscale(1);
              filter: grayscale(1);
    }

    .contain, .social {
      width: 390px;
      -webkit-box-flex: 1;
          -ms-flex: 1;
              flex: 1;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: center;
          -ms-flex-align: center;
              align-items: center;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
          -ms-flex-direction: column;
              flex-direction: column;
    }

    .contain h1, .social h1 {
      color: #3f5d45;
      font-weight: normal;
      font-size: 1.5rem;
      margin: 30px 0;
    }

    .contain {
      /* -webkit-box-pack: justify; 
          -ms-flex-pack: justify;
              justify-content: space-between; */
    }

    .contain i {
      padding: 20px 10px;
    }

    .contain input {
      height: 60px;
      width: 80%;
      border: none;
      outline: none;
    }

    .contain .checkbox {
      width: 300px;
      padding: 20px 0;
    }

    .contain .checkbox input {
      width: auto;
      height: auto;
    }

    .contain .login {
      cursor: pointer;
      text-align: center;
      padding: 15px 0;
      font-weight: bold;
      font-size: 1.5rem;
      width: 100%;
    }

    .contain .mobile_social {
      display: none;
      background: #eaf0ed;
      /* -webkit-box-pack: center;
          -ms-flex-pack: center;
              justify-content: center; */
      -webkit-box-align: center;
          -ms-flex-align: center;
              align-items: center;
    }

    .contain .mobile_social img {
      margin: 0 10px;
      width: 25%;
    }

    .active {
      height: 1000px;
      background: #3f5d45;
    }

    .active .checkbox {
      color: #eaf0ed;
    }

    .active h1 {
      color: #eaf0ed;
      font-size: 2rem;
    }

    .active .login {
      color: #3f5d45;
      background: #ffe180;
    }

    .active .router img {
      opacity: 1;
      -webkit-filter: none;
              filter: none;
    }

</style>
<body>
  <header>
    <nav class="pc_menu">
      <div class="logo">
        <a href="index.html"><img src="img/logo-all-dark.png" alt="logo"></a>
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

  <div class="login_area">
    <div class="contain active">
      <h1>修改密碼</h1>

      <form name="formchangepassword" id="formchangepassword" action="./_changepassword.php"  method="post">
        <div class="router">
          <label for="email">信箱<font color="#FF0000">*</font></label>
          <input type="email" placeholder="請輸入信箱" id="email" name="email" required>
        </div>
        <div class="router">
          <label for="oldpassword">目前密碼<font color="#FF0000">*</font></label>
          <input type="password" placeholder="請輸入目前密碼" id="oldpassword" name="oldpassword" required>
        </div>
        <div class="router">
          <label for="password">新密碼<font color="#FF0000">*</font></label>
          <input type="password" placeholder="請輸入新密碼" id="newpassword" name="newpassword" required>
        </div>
        <div class="router">
          <label for="password">密碼確認<font color="#FF0000">*</font></label>
          <input type="password" placeholder="請再次輸入新密碼" id="assertpassword" name="assertpassword" required>
        </div>
      
        <div class="login"><span id="but" name="but" onclick="formsubmit();" type="submit">確定修改</span></div><br>
         <div class="login"><a href="center.php">取消</a></div>
      </form>
    </div>
    
  </div>

  <footer>
    <div class="subscribe">
      <div class="container">
        <div class="logo">
          <img src="img/logo-light.png" alt="">
          <p>訂閱你我的甜蜜郵件</p>
        </div>
        <div class="email">
          <div class="icon">
            <i class="material-icons">email</i>
          </div>
          <input type="text" id="emails" name="emails">
          <label for="email">
            <i class="material-icons">arrow_forward</i>
          </label>
        </div>
      </div>
    </div>
    <div class="bottom">
      <div class="left">
        <div class="logo">
          <img src="img/logotype.png" alt="logo">
        </div>
        <div class="info">
          <p>07-1234-5678</p>
          <p>sweetaste@email.com</p>
          <p>800 高雄市新興區幸福路 520 號</p>
        </div>
        <div class="icon">
          <img src="img/ic-facebook.png" alt="fb">
          <img src="img/ic-line@.png" alt="line">
        </div>
      </div>
      <div class="right">
        <img src="img/sm-今天是個吃甜點的好日子.png" alt="">
        <p>© 2018 Sweetaste* All Rights Reserved</p>
      </div>
    </div>
  </footer>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
  <script src="js/all.js"></script>
  <script>
    $('#but').on('click', function(){
      //alert("is work!")
      // if($("#email").val()==""){
      //     alert("警告訊息","你尚未填寫帳號");
      //     //return false;
      // }
      // if($("#oldpassword").val()==""){
      //     alert("警告訊息","你尚未填寫目前密碼");
      //     //return false;
      // }
      // if($("#newpassword").val()==""){
      //   alert("警告訊息","你尚未填寫新密碼");
      //    // return false;
      // }
      // if ($("#assertpassword").val()=="") {
      //     alert("警告訊息","兩密碼不相符");
      //    // return false;
      // }
      //return true;
      //$("#formchangepassword").submit();
    });
    function formsubmit(){
      //alert("新密碼與密碼確認錯誤");
      if($("#email").val()==""){
          alert("你尚未填寫帳號");
          return false;
      }
      if($("#oldpassword").val()==""){
          alert("你尚未填寫目前密碼");
          return false;
      }
      if($("#newpassword").val()==""){
        alert("你尚未填寫新密碼");
        return false;
      }
      var pd = document.getElementById("newpassword").value;
      var pd2 = document.getElementById("assertpassword").value;
      if(pd == pd2){
        $("#formchangepassword").submit();
      }else {
        alert("新密碼與密碼確認錯誤");
      }
    }

  </script>
</body>

</html>