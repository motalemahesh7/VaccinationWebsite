<?php
session_start();
include("connect.php");
$username=$_POST["username"];
$password=$_POST["password"];

$check=mysqli_query($connect,"SELECT * from user WHERE username='$username' AND password='$password'");

if(mysqli_num_rows($check)>0){
    $userdata = mysqli_fetch_array($check);
    
    $_SESSION['userdata']=$userdata;

    echo'
    <script>
    window.location="http://localhost/vaccination/dashboard.php";
    </script>';
}
else{
    echo'
    <script>
    alert("USER NOT FOUND !!!");
    window.location="http://localhost/vaccination/login.html";
    </script>';
}
?>