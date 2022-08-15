<?php
session_start();
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
    // $a= $b= $c="";
    $p = $_POST['mail'];
    $q = $_POST['pass'];
    // $c = $_POST['password'];
    // $x= password_hash($c,PASSWORD_DEFAULT);
    // echo $p."<br>";
    // echo $q."<br>";
    // echo $x."<br>";

    $x1="SELECT * from `data` WHERE email='$p';";
    $temp1=mysqli_query($conn,$x1);
    $rslt=mysqli_fetch_assoc($temp1);
    $email1=$rslt['email'];
    if($rslt==true){
    $name=$rslt['name'];
    $email=$rslt['email'];
    $pswd=$rslt['password'];

    echo $name.$email.$pswd;
    // $r=mysqli_num_rows($result);
    $verify=password_verify($q,$pswd);
      if ($verify==true && $email==$p ) {
        $_SESSION['mail1']=$p;
        $_SESSION['status']=true;
        $_SESSION['name1']=$name;
        header("Location:dashboard.php?info=success");
    }
    }else{
        // header("Location:login-page.php?info=failed");
    }
}

?>