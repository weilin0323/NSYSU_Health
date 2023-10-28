<?php

//$method = $_POST["method"]; 
$server="localhost"; 
$user="root"; //要改
$pass="aileen3725"; //要改
$db="cart"; 


$db_link=mysqli_connect($server, $user, $pass, $db) or die(mysqli_error());
mysqli_query("set names 'utf8'");
if($_POST["value"]!=""){
    $value = $_POST["value"];
    $data = $mysqli_query("select * from sweet where product_name like '%$value%'");
    
}else{
    $data = $mysqli_query("select * from sweet ");
}


?>



<div class="items">
      <?php 
            mysqli_query("set names 'utf8'");
            $value = $_POST["value"];
            $sql="SELECT * FROM sweet WHERE product_name like '%$value%'"; 
            $query=mysqli_query($conn, $sql);
            while ($row=mysqli_fetch_array($query)) { 

      ?> 
                      <div class="item">
                          <div class="img_box">
                              <img src="img/item<?php echo $row['product_id'] ?>.jpg" alt="">
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