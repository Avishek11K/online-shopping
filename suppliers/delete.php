<?php require_once("../admin_auth.php"); require_once("../db.php");
$id=$_GET['id'];
mysqli_query($connect,"DELETE FROM suppliers WHERE supplier_id=$id");
header("Location: index.php");
