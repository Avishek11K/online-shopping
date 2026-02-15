
<?php
require_once("db.php");
session_start();

if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $res=mysqli_query($connect,"SELECT * FROM users WHERE email='$email'");
    $row=mysqli_fetch_assoc($res);

    if($row && password_verify($password,$row['password'])){
        $_SESSION['user_id']=$row['id'];
        $_SESSION['username']=$row['username'];
        $_SESSION['role']=$row['role'];
        header("Location: dashboard.php");
        exit;
    }else{
        echo "Login Failed";
    }
}
?>

<h2>Login</h2>
<form method="post">
Email <input name="email"><br>
Password <input type="password" name="password"><br>
<button name="login">Login</button>
</form>


