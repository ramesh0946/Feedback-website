<!DOCTYPE html>
<html>
<head>
       <link rel="stylesheet" href="loginstyle.css">
	<title>Login</title>
	<!-- <link rel="stylesheet" type="text/css" href="projectstyle.css"> -->
	<link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body> 
    <?php if(isset($_REQUEST['info'])){ ?>
        <?php if($_REQUEST['info']=="failed"){ ?>
         <script>
         alert("Invalid Email-id or Password")
          </script>
          <?php } ?>
    
        <?php if($_REQUEST['info']=="already"){ ?>
         <script>
         alert("User Already Exist")
          </script>
          <?php } ?>
          <?php if($_REQUEST['info']=="pswd"){ ?>
         <script>
         alert("Password Cannot Match")
          </script>
          <?php } ?>
          <?php if($_REQUEST['info']=="register"){ ?>
         <script>
         alert("Registred Successfully")
          </script>
          <?php } ?>
          <?php } ?>

<div class="main-container">
        <input type="checkbox" id="chk" aria-hidden="true">
    <div class="signup">
        <form action="signup.php" method="POST">
            <label for="chk" aria-hidden="true">Sign Up</label>
            <input type="text" name="name" placeholder="Name" required /><br>
            <input type="email" name="email"  placeholder="Email" required/><br>
            <input type="password" name="password" placeholder="Password" required /><br>
            <input type="password"  name="Rpassword" placeholder="Confirm Password" required /><br>
            <button type="submit">Sign Up</button>
        </form>
    </div>
    
    <div class="login">
        <form action="login.php" method="POST">
            <div class="inpt">
            <label for="chk" aria-hidden="true">Log In</label>
            <input type="email" name="mail" placeholder="Enter mail" required>
            <input type="password" name="pass" placeholder="Enter password" required>
            <button type="submit">Log In</button>
        </div>
        </form>
    </div>
</div>
</body>
</html>
