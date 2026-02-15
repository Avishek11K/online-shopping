<?php
 require_once("../admin_auth.php"); 
require_once("../db.php");
$id=$_GET['id'];
mysqli_query($connect,"DELETE FROM products WHERE product_id=$id");
header("Location: index.php");
?>
