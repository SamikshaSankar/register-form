<?php
$con = mysqli_connect('localhost','root');
    if($con){
        echo "Connection successful";
    }else{
        echo "no connection";
    }
mysqli_select_db($con, 'register');

$firstname = $_POST['firstname'];
$Email = $_POST['Email'];
$mobile = $_POST['mobile'];
$button = $_POST['button'];

$query = "insert into information (firstname, Email, mobile, button) values ('$firstname','$Email','$mobile','$button') ";

echo "$query";

mysqli_query($con,$query);

header('location:index.php');

?>