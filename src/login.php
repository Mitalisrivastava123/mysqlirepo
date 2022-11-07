<?php
include 'connection.php';

$name= $_POST["name"];
$email=$_POST["email"];
$password=$_POST["password"];
$cpassword = $_POST["cpassword"];

if($name=="" || $email==""|| $password=="")
{
    header("Location:index.php");    
}
else
{
if($password == $cpassword)
{
    $sql="INSERT INTO registertable(name,email,password) values('$name', '$email', '$password')";
    if (mysqli_query($conn, $sql)) {  
    header("Location:login1.php");
      } 
    }
    else
    {
        echo "password not match";
    }
}


?>