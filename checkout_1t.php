<?php 
    session_start(); 
?> 
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sweetaste</title>
  <link href="img/logo-dark.png" type="image/x-icon" rel="shortcut icon">
  <link rel="stylesheet" href="assets/style/checkout.css">
  <link rel="stylesheet" href="assets/style/rwd.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="js/all.js"></script>
</head>

<body>
  <header>
    <nav class="pc_menu">
      <div class="logo">
          <a href="index.html"><img src="img/logo-all-dark.png" alt="logo"></a>
      </div>
      <ul>
        <li><a href="index.html">首頁</a></li>
        <li><a href="product.html">甜點</a></li>
        <li><a href="login.html">登入</a></li>
        <li><a href="cart.html"><i class="material-icons">shopping_cart</i></a></li>
      </ul>
    </nav>
    <nav class="mobile_menu">
      <div class="hamburger">
        <span></span>
      </div>
      <img src="img/logo-all-dark.png" alt="logo">
      <a href="cart.html"><i class="material-icons">shopping_cart</i></a>
      <ul>
        <li><a href="index.html">首頁</a></li>
        <li><a href="product.html">甜點</a></li>
        <li><a href="login.html">登入</a></li>
        <li><a href="cart.html"><i class="material-icons">shopping_cart</i></a></li>
      </ul>
    </nav>
  </header>
  <div class="checkout">
    <div class="steps">
      <div class="title">
        <h2>運送</h2>
        <ul>
          <li class="done"></li>
          <li></li>
          <li></li>
        </ul>
      </div>
      <div class="set">
        <div>
          <label for="firstname">姓氏</label>
          <input type="text" id="firstname" placeholder="王">
        </div>
        <div>
          <label for="lastname">名字</label>
          <input type="text" id="lastname" placeholder="小明">
        </div>
      </div>
      <div class="set">
        <div>
          <label for="phone">電話</label>
          <input type="tel" id="phone" placeholder="0912-345-678">
        </div>
      </div>
      <div class="set">
        <div>
          <label>地址</label>
          <select name="country" id="country">
            <option value="高雄市" selected>高雄市</option>
          </select>
        </div>
        <div>
          <label></label>
          <select name="area" id="area">
            <option value="新興區" selected>新興區</option>
          </select>
        </div>
      </div>
      <div class="set">
        <div>
          <input type="text" id="road" placeholder="幸福路520號">
        </div>
      </div>
      <a class="next" href="checkout_2.html">下一步</a>
    </div>
    <div class="order_info">
      <div class="order">
        <h2>訂單摘要</h2>
        <div class="price">
          <span>小計</span>
          <span>NT$<?php echo $_SESSION['total']; ?></span>
        </div>
        <div class="price">
          <span>運費</span>
          <span>NT$300</span>
        </div>
        <div class="total">
          <span>總計</span>
          <span>NT$<?php echo $_SESSION['total']+300; ?></span>
        </div>
      </div>
      <div class="list">
        <h2>購物清單</h2>
        <div class="items">
          <table>
            <tr>
              <td>
                <div class="pic">
                  <img src="img/item1.jpg" alt="">
                </div>
              </td>
              <td>
                <p>焦糖馬卡龍 (2)</p>
                <p>NT$900</p>
              </td>
            </tr>
          </table>
        </div>
      </div>
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
</body>

</html>