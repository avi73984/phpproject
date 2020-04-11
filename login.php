<?php  include('server.php')?>
<!DOCTYPE html>
<html>
<head>
	<title> Registration</title>
</head>
<body>
  <div class="container">
  	<div class="header">
  		<h2>Log in</h2>
  	</div>
  	<form action="login.php" method="post">
  	<div>
  		<label for="username">username</label>
  		<input type="text" name="username" required>

  	</div>
  	<div>
  		<label for="password">password</label>
  		<input type="password" name="password_1" required>

  	</div>
  
  		<button type="submit" name="login_user">Log in</button>
  		<p>not a user<a href="registration.php"><b>Log in</b></a></p>
  	</form>



  </div>

</body>
</html>