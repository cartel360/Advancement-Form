<?php 
  session_start(); 

  if (!isset($_SESSION['RegNo'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
   if (!isset($_SESSION['RegNo'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: register.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
	<h2>Mount Kenya University</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
                	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['RegNo'])) : ?>
      <center>
    	<p>Welcome <strong><?php echo $_SESSION['RegNo']; ?></strong></p>
      <br> 
      <a href="advance.php"> Click here to fill your advancement form</a>
        <br> <br>
    	<p> <a href="index.php?logout='1'" style="color: red;">Logout</a> </p>
    <?php endif ?>
  </center>
</div>
</body>
</html>