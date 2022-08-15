<?php
$conn = mysqli_connect("localhost","root","","project");

if(isset($_REQUEST["vot1"])){
    $sql = "select * from votes where sno = 1";
    $que = mysqli_query($conn, $sql);
    foreach($que as $q){
        echo $q["vote"];
    $res = $q["vote"] + 1;
    $sql2 = "UPDATE `votes` SET `vote`='$res' WHERE sno=1";
    mysqli_query($conn, $sql2);  
    
    }
    header('location:dashboard.php');

}

if(isset($_REQUEST["vot2"])){
    $sql = "select * from votes where sno = 2";
    $que = mysqli_query($conn, $sql);
    foreach($que as $q){
        echo $q["vote"];
    $res = $q["vote"] + 1;
    $sql2 = "UPDATE `votes` SET `vote`='$res' WHERE sno =2"; 
    mysqli_query($conn,$sql2);
    }
    header('location:dashboard.php');
}

if(isset($_REQUEST["vot3"])){
    $sql = "select * from votes where sno = 3";
    $que = mysqli_query($conn, $sql);
    foreach($que as $q){
        echo $q["vote"];
    $res = $q["vote"] + 1;
    $sql2 = "UPDATE `votes` SET `vote`='$res' WHERE sno =3";
    mysqli_query($conn, $sql2); 
    }
    header('location:dashboard.php');
    die();
}
if(isset($_REQUEST["vot4"])){
    $sql = "UPDATE `votes` SET `vote` = 0";
    mysqli_query($conn, $sql);  
    header("location:result.php");
    }
?>
