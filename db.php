<?php
$host="localhost";
$user="root";
$password="mysql@11";
$db="assgn";
$connect=mysqli_connect($host,$user,$password,$db);
if(!$connect){
    echo"Error in connection".mysqli_connect_error($connect);
}
?>