<?php 
require_once("../auth.php"); 
require_once("../db.php"); ?>
<h2>Employees</h2>

<?php if($_SESSION['role']=='admin'){ ?>
<a href="create.php">Add Employee</a>
<?php } ?>

<table border="1">
<tr>
<th>Name</th><th>Email</th><th>Department</th><th>Action</th>
</tr>

<?php
$res = mysqli_query($connect,"SELECT * FROM employees");
while($r=mysqli_fetch_assoc($res)){
echo "<tr>
<td>{$r['full_name']}</td>
<td>{$r['email']}</td>
<td>{$r['department']}</td>
<td>
<a href='view.php?id={$r['emp_id']}'>View</a>";
if($_SESSION['role']=='admin'){
echo "
 | <a href='edit.php?id={$r['emp_id']}'>Edit</a>
 | <a href='delete.php?id={$r['emp_id']}'>Delete</a>";
}
echo "</td></tr>";
}
?>
</table>
