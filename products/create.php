<?php 
require_once("../admin_auth.php"); 
require_once("../db.php"); ?>


<form method="post">
Name 
<input name="name"><br>
Category
 <input name="category"><br>
Price 
<input name="price"><br>
Qty 
<input name="stock_qty"><br>
Status
<select name="status">
<option>active</option>
<option>inactive</option>
</select><br>
<button name="save">Save</button>
</form>

<?php
     if(isset($_POST['save'])){
      mysqli_query($connect,
    "INSERT INTO products(name,category,price,stock_qty,status)
VALUES(
'{$_POST['name']}',
'{$_POST['category']}',
'{$_POST['price']}',
'{$_POST['stock_qty']}',
'{$_POST['status']}')");
header("Location: index.php");
}
?>
