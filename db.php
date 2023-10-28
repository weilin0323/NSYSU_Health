<?php 

    $server="localhost"; 
    $user="root"; //要改
    $pass="ec0000"; //要改
    $db="cart"; 

    // connect to mysql 
    $conn = mysqli_connect($server, $user, $pass, $db) or die(mysqli_error());
    /*if($conn){
        echo"sucess";
    }*/
    /*$sql="SELECT * FROM products "; 
    $result=mysqli_query($conn, $sql); 
    $t=mysqli_num_rows($result) ;
    echo "$t";*/

?>