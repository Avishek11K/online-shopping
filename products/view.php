<?php
 require_once("../auth.php");
  require_once("../db.php");
$id=$_GET['id'];
$r=mysqli_fetch_assoc(mysqli_query($connect,"SELECT * FROM products WHERE product_id=$id"));
?>

<h3><?= $r['name'] ?></h3>
Category: <?= $r['category'] ?><br>
Price: <?= $r['price'] ?><br>
Stock: <?= $r['stock_qty'] ?>

