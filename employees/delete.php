<?php require_once("../admin_auth.php"); require_once("../db.php");
$id=$_GET['id'];
mysqli_query($connect,"DELETE FROM employees WHERE emp_id=$id");
header("Location: index.php");
