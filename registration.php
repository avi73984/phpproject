<?php  include('server.php')?>
<!DOCTYPE html>
<html>
<head>
	<title> Registration</title>
</head>
<body>
  <div class="container">
  	<div class="header">
  		<h2>Register</h2>
  	</div>
  	<form action="registration.php" method="post">
  	<?php include('errors.php') ?>
  	<div>
  		<label for="username">username</label>
  		<input type="text" name="username" required>

  	</div>
  	<div>
  		<label for="email">email</label>
  		<input type="email" name="email" required>

  	</div>
  	<div>
  		<label for="password">password</label>
  		<input type="password" name="password_1" required>

  	</div>
  	<div>
  		<label for="password">confirm password</label>
  		<input type="password" name="password_2" required>

  	</div>
  		<button type="submit" name="reg_user">submit</button>
  		<p>already a user<a href="login.php"><b>Log in</b></a></p>
  	</form>



  </div>

</body>
</html>