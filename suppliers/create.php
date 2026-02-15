<?php 
require_once("../admin_auth.php"); 
require_once("../db.php"); ?>

<form method="post">
Supplier Name <input name="supplier_name"><br>
Contact Person <input name="contact_person"><br>
Phone <input name="phone"><br>
Email <input name="email"><br>
Address <textarea name="address"></textarea><br>
Status
<select name="status">
<option>active</option>
<option>inactive</option>
</select><br>
<button name="save">Save</button>
</form>

<?php
     if(isset($_POST['save'])){
      mysqli_query($connect,"
       INSERT INTO suppliers(supplier_name,contact_person,phone,email,address,status)
        VALUES(
         '{$_POST['supplier_name']}',
'{$_POST['contact_person']}',
'{$_POST['phone']}',
'{$_POST['email']}',
'{$_POST['address']}',
'{$_POST['status']}')");
header("Location: index.php");
}
?>
