<?php require_once("../admin_auth.php"); require_once("../db.php");
$id=$_GET['id'];
$r=mysqli_fetch_assoc(mysqli_query($connect,"SELECT * FROM suppliers WHERE supplier_id=$id"));
?>

<form method="post">
<input name="supplier_name" value="<?= $r['supplier_name'] ?>"><br>
<input name="phone" value="<?= $r['phone'] ?>"><br>
<select name="status">
<option <?= $r['status']=='active'?'selected':'' ?>>active</option>
<option <?= $r['status']=='inactive'?'selected':'' ?>>inactive</option>
</select><br>
<button name="update">Update</button>
</form>

<?php
if(isset($_POST['update'])){
mysqli_query($connect,"
UPDATE suppliers SET
supplier_name='{$_POST['supplier_name']}',
phone='{$_POST['phone']}',
status='{$_POST['status']}'
WHERE supplier_id=$id");
header("Location: index.php");
}
?>
