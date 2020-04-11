<?php
session_start();
//initalising variable
 $username="";
 $email="";

$errors=array();

 //connect to db

 $db=mysqli_connect('localhost','root','','practise')or die("could not connect to user");
 //register user
 $username = mysqli_real_escape_string($db,$_POST['username']);
 $email = mysqli_real_escape_string($db,$_POST['email']);
 $password_1= mysqli_real_escape_string($db,$_POST['password_1']);
 $password_2= mysqli_real_escape_string($db,$_POST['password_2']);

 //form validation

 if (empty($username)){array_push($errors, "username is required");}
 if (empty($email)) {array_push($errors, "email is required");}
 if (empty($password_1)) {array_push($errors, "password is required");}
 if ($password_1 != $password_2) {array_push($errors, "password did not match");}
// check db for existing user for username
 $user_check_query ="SELECT * FROM user WHERE username='$username'or email='$email'LIMIT 1";
 $results =mysqli_query($db,$user_check_query);
$user =mysqli_fetch_assoc($results);
if ($user) {
	# code...
	if ($user['username']===$username) {
		# code...
		array_push($errors, "username already exists");
	}
if ($user['email']===$email) {
		# code...
		array_push($errors, "email already exists");
	}
}
//register the user if their is no error 
if (count($error)==0) {
	# code...
	$password=md5($password_1);//this will encrypt the password
	$query="INSERT INTO user (username,email,password) VALUES('$username','$email','password')";

	mysqli_query($db,$query);
	$_SESSION['username']=$username;
	$_SESSION['sucess']= "you are now logged in";

	header('location: index.php');
}
?>