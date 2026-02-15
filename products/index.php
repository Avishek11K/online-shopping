<?php
 require_once("../auth.php");
 require_once("../db.php"); ?>

<h2>Products</h2>
<?php if($_SESSION['role']=='admin'){ ?>
<a href="create.php">Add Product</a>
<?php } ?>
<table border="1">
<tr><th>Name</th><th>Category</th><th>Price</th><th>Action</th></tr>


<?php
      $res=mysqli_query($connect,"SELECT * FROM products");
       while($r=mysqli_fetch_assoc($res)){
echo "<tr>
<td>{$r['name']}</td>
<td>{$r['category']}</td>
<td>{$r['price']}</td>
<td>
<a href='view.php?id={$r['product_id']}'>View</a>
";
if($_SESSION['role']=='admin'){
echo "
<a href='edit.php?id={$r['product_id']}'>Edit</a>
<a href='delete.php?id={$r['product_id']}'>Delete</a>";
}
echo "</td></tr>";
}
?>
</table>
