<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header("Location: /assgn/login.php");
    exit;
}
?>
