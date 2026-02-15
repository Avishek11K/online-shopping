<?php require_once("../auth.php"); require_once("../db.php");
$id=$_GET['id'];
$r=mysqli_fetch_assoc(mysqli_query($connect,"SELECT * FROM employees WHERE emp_id=$id"));
?>

<h3><?= $r['full_name'] ?></h3>
Email: <?= $r['email'] ?><br>
Phone: <?= $r['phone'] ?><br>
Department: <?= $r['department'] ?><br>
Salary: <?= $r['salary'] ?><br>
Joining Date: <?= $r['joining_date'] ?>
