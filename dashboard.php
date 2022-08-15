<?php
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="dashboard.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
    function func1(){
      alert("Voted Sucessfully");
    }
    </script>
    </head> 
    <body>
      <div class="main">
      <?php if ($_SESSION['status']==true){
        echo "welcome: ".$_SESSION['name1'];
        }else{}?>

<div class="reset">
      <?php if($_SESSION['status']==true){?>
        <?php if($_SESSION['mail1']=="vishnu@gmail.com"){?>
        <form action="vlogic.php" method="post">
            <input type = "text"  value = "1" name = "vote5" style="display:none;">
            <button class="btn2" name = "vot4">Reset</button>
          </form>
      <?php }
      }?>
      </div>
      
        <div class="show">
        <?php  if($_SESSION['status']==true){?>
                <li class="nav-item"><a href="logout.php">Logout</a></li>
              <?php }else{ }?>
               <?php if ($_SESSION['status']==true){?>
                <?php if(($_SESSION['mail1']=="vishnu@gmail.com")){?>               
                  <li class="nav-item"><a href="result.php">Show Votes</a></li>
                <?php }else{ } 
                } else { }?>
        </div>
    <?php if(isset($_REQUEST['info'])){ ?>
     <?php if($_REQUEST['info']=="success"){ ?>
          <script>
            alert("You have logined successfully")
          </script>
     <?php } ?>
     <?php } ?>     
  
      <h1>Give Your Feedback</h1>
        <h2>For Excellent Vote</h2>
        <div class="excellent">  
        <form action="vlogic.php" method="post">
          <!-- <input type = "text"  value = "1" name = "vote1" style="display:none;"> -->
          <button class="btn" name = "vot1" onclick="func1()" onclick="disabled=true">excellent</button>
          </form>
          </div>
          <h2>For Good Vote</h2>
          <div class="good">
          <form action="vlogic.php" method="post">
            <!-- <input type = "text"  value = "1" name = "vote2" style="display:none;"> -->
            <button class="btn" name = "vot2" onclick="func1()">good</button>
            </form>
            </div>
            <h2>For Bad Vote</h2>
            <div class="bad">
          <form action="vlogic.php" method="post">
            <!-- <input type = "text"  value = "1" name = "vote3" style="display:none;"> -->
            <button class="btn" name = "vot3" onclick="func1()">bad</button>
          </form>
          </div>
      
      
  </div>
</body>
</html>