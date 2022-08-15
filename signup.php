<?php
session_start();
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    echo "'connection failed";
}
// echo "connection established"."<br>";

if($_SERVER['REQUEST_METHOD']=='POST');
{
    $a= $b= $c="";
    $a = $_POST['name'];
    $b = $_POST['email'];
    $c = $_POST['password'];
    $e= $_POST['Rpassword'];
    $x= password_hash($c,PASSWORD_DEFAULT);
    // echo $a."<br>";
    // echo $b."<br>";
    // echo $x."<br>";

$x1="SELECT * from `data` where (email='$b');";
$temp1=mysqli_query($conn,$x1);
$row = mysqli_fetch_assoc($temp1);
// $resu=mysqli_num_rows($temp1);
$email=isset($row['email']);
// $name=isset($row['name']);
if($email>0){
    echo '<script>alert("User already exist")</script>';
    header("Location:login-page.php?info=already");
}elseif($c!=$e){
    echo '<script>alert("Password Cannot match")</script>';
    header("Location:login-page.php?info=pswd");
}else{
    
    $temp = "INSERT INTO `data` (`name`, `email`, `password`) VALUES ('$a', '$b', '$x')";
    mysqli_query($conn, $temp);
    // echo '<script>alert("Account created successfully")</script>';
    header("Location:login-page.php?info=register");
}
mysqli_close($conn);
}
?>