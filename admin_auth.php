<?php
require_once("auth.php");
if($_SESSION['role'] !== 'admin'){
    echo "Access Denied";
    exit;
}
?>
