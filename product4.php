<?php 
    session_start(); 
    require("db.php"); 

    if(isset($_GET['action']) && $_GET['action']=="add"){ //點擊加入購物車

        $id=intval($_GET['id']); 
        
        
        if(isset($_SESSION['cart'][$id])){ //如果該商品已加入購物車

            $_SESSION['cart'][$id]['quantity']++; 
            

        }else{ //若該商品還未在購物車 就加到購物車中

            $sql_s="SELECT * FROM product_health WHERE product_id={$id}"; 
            $query_s=mysqli_query($conn, $sql_s); 
            
            if(mysqli_num_rows($query_s)!=0){ 
                $row_s=mysqli_fetch_array($query_s); 

                $_SESSION['cart'][$row_s['product_id']]=array( //建立該商品的session到購物車中
                        "quantity" => 1, 
                        "price" => $row_s['product_price'] 
                    ); 
                    
            }

        } 

    } 

?> 
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>NSYSUHealth</title>
  <link href="img/logo-dark2.png" type="image/x-icon" rel="shortcut icon">
  <link rel="stylesheet" href="assets/style/products.css">
  <link rel="stylesheet" href="assets/style/rwd.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <style type="text/css">
    .slide {
      
      background-image: url("img/slide4.png");
    }
    /*搜尋*/
    .search_form{
      display: flex; 
      justify-content: center; 
      margin:20px;
    }
    .search{
      background-color:#D0D0D0; 
      margin-right:10px; 
      height:25px;
    }

    .now{
      background: #eaf0ed;
    }

    .btn_back{
      border:none;
      outline:none;
      float:right;
      height:30px;
      width:40px;
    }
    .btn_back:hover {
      color: #fff;
      background: #3f5d45;
    }
    header nav ul li {
    margin: 0 15px;
    padding: 5px 10px;
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
  <div class="slide"></div>
  
    
  <div class="product_search">
    <form class="search_form" action="product.php" method="post">
          <!--<input type="radio" name="method" value="no">編號-->
          <input class="search" type="text" name="value" >
          <input type="submit" value="搜尋">
    </form>
  </div>

  


  
  
  <div class="product_contain">
    <div class="list">
      <ul>
        <li>商品類別</li>
        <li>
          <a href="product.php">所有商品</a>
        </li>
        <li>
          <a href="product2.php">乳清</a>
        </li>
        <li>
          <a href="product3.php">奶昔</a>
        </li>
        <li class="now">
          <a href="#">機能保健</a>
        </li>
        <li>
          <a href="product5.php">其它</a>
        </li>
      </ul>
    </div>
    <div class="products_box">
      <div class="items">
        <?php 
              mysqli_query("set names 'utf8'");
              if($_POST["value"]!=""){
                $value = $_POST["value"];
                $sql="SELECT * FROM product_health WHERE product_name like '%$value%'"; 
                $query=mysqli_query($conn, $sql);
                if($row=mysqli_fetch_array($query)==0){
                  echo "您搜尋的產品不存在!";
                }
              }else{
                $value = $_POST["value"];
                $sql="SELECT * FROM product_health "; 
                $query=mysqli_query($conn, $sql);
              }
                while ($row=mysqli_fetch_array($query)) { 

        ?> 
                  <div class="item">
                    <div class="img_box">
                      <img src="img/product_health/item<?php echo $row['product_id'] ?>.jpg" alt="">
                      <p class="cate">本日精選</p>
                      <i class="far fa-heart"></i>
                    </div>
                    <div class="item_info">
                      <div class="title"><?php echo $row['product_name'] ?></div>
                      <div class="price">NT$ <?php echo $row['product_price'] ?></div>
                    </div>
                    <div class="addcart"><a href="product.php?action=add&id=<?php echo $row['product_id'] ?>">加入購物車</a></div>
                  </div>
        <?php 

        } 

        ?>        
      </div>
      <?php
        if($_POST["value"]!=""){
      ?>
          <div class="back">
            <button style="margin-left:100px;" type="button" onclick="history.back()" class="btn_back ">返回</button>
          </div>    
      <?php
        }
      
      ?>
      
      
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
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
  <script src="js/all.js"></script>
</body>

</html>