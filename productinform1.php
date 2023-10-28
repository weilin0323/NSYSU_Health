<?php 
    session_start(); 
    require("db.php"); 

    if(isset($_GET['action']) && $_GET['action']=="add"){ //點擊加入購物車

        $id=intval($_GET['id']); 
        
        
        if(isset($_SESSION['cart'][$id])){ //如果該商品已加入購物車

            $_SESSION['cart'][$id]['quantity']++; 
            

        }else{ //若該商品還未在購物車 就加到購物車中

            $sql_s="SELECT * FROM product_all WHERE product_id={$id}"; 
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
    .title{
      font-size:30px;
    }
    .text{
      color:black;
    }
    .price{
      font-size:25px;
    }
    .score{
      width:200px;
    }
    .addcart {
      cursor: pointer;
      background: #eaf0ed;
      font-size: 1.2rem;
      text-align: center;
      padding: 10px 90px;
      -webkit-transition: all 0.3s;
      transition: all 0.3s;
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


  
  <div class="product_contain">
    
    <div class="products_box">
      <div class="items">
        <?php 
              
                $sql="SELECT * FROM product_all WHERE product_id=1 "; 
                $query=mysqli_query($conn, $sql);
              
                if($row=mysqli_fetch_array($query)) { 

        ?> 
                 <!-- <div class="pditem">-->
                   <div class="row">
                     <div class="col-md-7" style="width:300px; height:auto; float:left; display:inline;margin-right:50px;">
                    <span >
                      <img style="width:300px;"src="img/product_all/item<?php echo $row['product_id'] ?>.jpg" alt="">
                </span></div>
                <div class="col-md-5" style="width:400px; height:auto; float:left; display:inline;">
                    <span >
                      <br>
                      <div class="title"><?php echo $row['product_name'] ?></div>
                      <br>
                      <div class="text">
                      為您增加 ➕ 營養均衡的營養素、蛋白質+膳食纖維 <br>
                      為您消除 ➖ 食慾過大壓力、卡路里負擔、昂貴的餐點<br>
                      <br>
                      添加天然成分，一包就能補充您足夠的營養！<br>
                      🌿八種維生素(佔25%)：維他命A、B1、B2、B6 <br>
                      🌿三種礦物質(佔10%)：鈣,鋅,鐵 <br>
                      🌿分離大豆蛋白質<br>
                      🌿膳食纖維 <br>
                      <br>
                      ✅萃取藤黃果HCA粉末(25mg) <br>
                      ✅萃取巴拉圭東青粉末(0.25mg) <br>
                      ✅萃取綠茶茶葉粉末(0.25mg)<br>

                      </div>
                      <br>
                      <div class="price">NT$ <?php echo $row['product_price'] ?></div>
                      <br>
                      <div class="score" ><img style="width:300px;" src="img/score.jpg" alt=""></div>
                      <br>
                      <div class="addcart"><a href="product.php?action=add&id=<?php echo $row['product_id'] ?>">加入購物車</a></div>
                
                </span></div>
                  </div>
        <?php 

            } 

        ?>  
      </div>
      
      
      
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