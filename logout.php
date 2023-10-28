<?php

session_start();
session_destroy();
unset($_SESSION);
unset($_SESSION['cart']);
header('Location: index.php');
?>