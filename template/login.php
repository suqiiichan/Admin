<?php 
include '../template/conn.php';
 
$username = $_POST['username'];
$password2 = md5($_POST['password2']);

echo $username;
echo $password2;
$login = mysqli_query($conn, " SELECT * FROM masuk 	WHERE username = '$username' AND password2 = '$password2'");
 
if($login > 0){
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:./pages/forms/admin.php");
}else{
	header("location:./index.php");	
}
 
?>