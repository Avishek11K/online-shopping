<style>
.nav{
    display:flex;
    justify-content:space-between;
    background:#4CAF50; 
    color:white;
    padding:15px;
    align-items:center;  
}
 </style>
<?php require_once("auth.php"); ?>

<h2>Welcome <?= $_SESSION['username'] ?></h2>
<div class="nav">
<a href="products/index.php">Products</a><br>
<a href="employees/index.php">Employees</a><br>
<a href="suppliers/index.php">Suppliers</a><br>
<a href="logout.php">Logout</a>
</div>


