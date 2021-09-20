<?php
include("connect.php");

$name=$_POST['name'];
$address=$_POST['address'];
$city=$_POST['city'];
$mobile=$_POST['mobile'];
$agegroup=$_POST['agegroup'];
$username=$_POST['username'];
$password=$_POST['password'];
$comform=$_POST['comform'];

if($password==$comform){
    $insert=mysqli_query($connect,"INSERT INTO user (name, address, city, mobile, agegroup, username, password, status, votes) VALUES ('$name', '$address', '$city', '$mobile', '$agegroup', '$username', '$password', 0, 0)");
    if($insert){
    echo '
    <script>
             alert("Registration Successfull!");
             window.location="http://localhost/vaccination/login.html";
    </script>
    ';
    }
    else{
        echo'
        <script>
        alert("Some Error occured!");
        window.location="http://localhost/vaccination/Registration.html";
        </script>';
    }
}
else{
    echo'
    <script>
    alert("Password and Comform Password does not match!");
    window.location="http://localhost/vaccination/Registration.html";
    </script>';
}


?>