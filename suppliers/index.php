<?php require_once("../auth.php"); require_once("../db.php"); ?>
<h2>Suppliers</h2>

<?php if($_SESSION['role']=='admin'){ ?>
<a href="create.php">Add Supplier</a>
<?php } ?>

<table border="1">
<tr>
<th>Name</th><th>Phone</th><th>Status</th><th>Action</th>
</tr>

<?php
$res=mysqli_query($connect,"SELECT * FROM suppliers");
while($r=mysqli_fetch_assoc($res)){
echo "<tr>
<td>{$r['supplier_name']}</td>
<td>{$r['phone']}</td>
<td>{$r['status']}</td>
<td>
<a href='view.php?id={$r['supplier_id']}'>View</a>";
if($_SESSION['role']=='admin'){
echo "
 | <a href='edit.php?id={$r['supplier_id']}'>Edit</a>
 | <a href='delete.php?id={$r['supplier_id']}'>Delete</a>";
}
echo "</td></tr>";
}
?>
</table>
