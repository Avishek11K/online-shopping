<?php 
require_once("../admin_auth.php"); 
require_once("../db.php");

$id=$_GET['id'];
   $r=mysqli_fetch_assoc(mysqli_query($connect,"SELECT * FROM products WHERE product_id=$id"));
?>
<form method="post">
<input name="name" value="<?= $r['name'] ?>"><br>
<input name="category" value="<?= $r['category'] ?>"><br>
<input name="price" value="<?= $r['price'] ?>"><br>
<button name="update">Update</button>
</form>

<?php
   if(isset($_POST['update'])){
    mysqli_query($connect,
    "UPDATE products SET
     name='{$_POST['name']}',
     category='{$_POST['category']}',
   price='{$_POST['price']}'
WHERE product_id=$id");
header("Location: index.php");
}
?>

