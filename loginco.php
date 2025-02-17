<?php
error_reporting(0);
$servername="localhost";
$username="root";
$password="";
$dbname="user";


$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
    echo '<script>alert("connection ok")</script>';
}
else
{
    echo '<script>alert("connection failed")</script>';
}
//getting values
if($_POST['login'])
{

$email      =$_POST['email'];
$password   =$_POST['password'];

$data="SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'";

$execute=mysqli_query($conn,$data);
$count=mysqli_num_rows($execute);


if($count>=1){
 $run=true;
 echo '<script>alert("login successfully")</script>';
}

else{
    echo '<script>alert("check email and password")</script>';
}

}
if($run){
    echo '<script>alert("excecuted")</script>';
    header("location:http://localhost/project2/index.php");
}

else{
    echo '<script>alert("not exececuted")</script>';
}


?>