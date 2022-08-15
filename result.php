<?php
session_start();
include 'vlogic.php';
if($_SESSION['status']!= true){
  header('location:feedback.html');
  die();
}
$sql = "select * from votes where sno= 1";
$sql2 = "select * from votes where sno = 2";
$sql3 = "select * from votes where sno = 3";
$query1 = mysqli_query($conn, $sql);
    $query2 = mysqli_query($conn, $sql2);
    $query3 = mysqli_query($conn, $sql3);
    $out=mysqli_fetch_assoc($query1);
    $vote1=$out['vote'];
    $out2=mysqli_fetch_assoc($query2);
    $vote2=$out2['vote'];
    $out3=mysqli_fetch_assoc($query3);
    $vote3=$out3['vote'];
    // echo $vote1.$vote2.$vote3;
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['FeedbaCK', 'Votes'],
          ['Excellent',<?php echo $vote1?>],
          ['Good',<?php echo $vote2?>],
          ['Bad',<?php echo $vote3?>],
        ]);

        var options = {
          title: 'Feedbakc Chart',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
    
</head>
<body>
  <div class="session">
  <?php if ($_SESSION['status']==true){
        echo "welcome: ".$_SESSION['name1'];
        }else{}?>
        <?php  if($_SESSION['status']==true){?>
                <li class="nav-item"><a href="logout.php">Logout</a></li>
              <?php }else{ }?>
    </div>
    <div class="container">
    

    <table>
    <?php foreach($query1 as $q){?>
        <tr class="tr1">
            <td><h2 style="color:hsl(7, 88%, 48%);">Total Votes of Excellent</h2></td>
            <td><h2 class="col"><?php echo $q["vote"];?></h2></td>
        </tr>
    <?php } 
    foreach($query2 as $q){?>
        <tr class="tr2">
            <td><h2 style="color:green;">Total Votes of Good</h2></td>
            <td><h2 class="col"><?php echo $q["vote"];?></h2></td>
        </tr>
    <?php }
    foreach($query3 as $q){?>
        <tr class="tr3">
            <td><h2 style="color:blue;">Total Votes of Bad</h2></td>
            <td><h2 class="col"><?php echo $q["vote"];?></h2></td>
        </tr>
    <?php }
    // else() {?>
        <!-- <form action="vlogic.php" method="post"> -->
            <!-- <input type = "text"  value = "1" name = "vote5" style="display:none;"> -->
            <!-- <button class="btn2" name = "vot5" disabled>Reset</button> -->
          <!-- </form> -->
      <?php ?>
    </table>
   
     </div> 
     <div id="piechart_3d" style="width: 900px; height: 500px;"></div>   
</body>
</html>