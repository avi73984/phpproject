<?php

session_start();
if (isset($_SESSION['username'])) {
	# code...
	$_SESSION['msg']="you must log in first to view this page";
	header("location: login.php");
}
if (isset($_GET['logout'])) {
	# code...
	session_destroy();
	unset($_SESSION['username']);
	header("location: login.php");
}

?>
 <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
     <h1> this is home page</h1>
     <?php
      if (isset($_SESSION['sucess'])):?>
      <div>
      	<h3>
      		<?php
      		echo $_SESSION['sucess'];
      		unset($_SESSION['sucess']);



      		?>

      	</h3>

      </div>
    <?php endif ?> 
 //if the user logs in print information about this
 <?php  if (isset($_SESSION['username'])):?> 
 <h3>welcome<strong><?php echo $_SESSION['username'];?></strong></h3>
 <button><a href="index.php?logout='1'"></a></button>   

 <?php endif?>

</body>
</html>