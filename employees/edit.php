<?php 
require_once("../admin_auth.php"); 

require_once("../db.php");
$id=$_GET['id'];
$r=mysqli_fetch_assoc(mysqli_query($connect,"SELECT * FROM employees WHERE emp_id=$id"));
?>

<form method="post">
<input name="full_name" value="<?= $r['full_name'] ?>"><br>
<input name="email" value="<?= $r['email'] ?>"><br>
<input name="department" value="<?= $r['department'] ?>"><br>
<button name="update">Update</button>
</form>

<?php

    if(isset($_POST['update'])){
        mysqli_query($connect,"
UPDATE employees SET
full_name='{$_POST['full_name']}',
email='{$_POST['email']}',
department='{$_POST['department']}'
     WHERE emp_id=$id");
         header("Location: index.php");
}
?>
