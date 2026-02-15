
<?php
require_once("db.php");

if(isset($_POST['register'])){
    $username = $_POST['username'];
    $email    = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role     = $_POST['role'];

    mysqli_query($connect,
        "INSERT INTO users(username,email,password,role)
         VALUES('$username','$email','$password','$role')"
    );
    header("Location: login.php");
    exit;
}
?>

<h2>Register</h2>
<form method="post">
Username <input name="username" required><br>
Email <input name="email" required><br>
Password <input type="password" name="password" required><br>
<select name="role">
 <option value="user">User</option>
 <option value="admin">Admin</option>
</select><br>
<button name="register">Register</button>
</form>


