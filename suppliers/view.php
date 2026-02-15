<?php require_once("../auth.php"); require_once("../db.php");
$id=$_GET['id'];
$r=mysqli_fetch_assoc(mysqli_query($connect,"SELECT * FROM suppliers WHERE supplier_id=$id"));
?>

<h3><?= $r['supplier_name'] ?></h3>
Contact: <?= $r['contact_person'] ?><br>
Phone: <?= $r['phone'] ?><br>
Email: <?= $r['email'] ?><br>
Address: <?= $r['address'] ?><br>
Status: <?= $r['status'] ?>
