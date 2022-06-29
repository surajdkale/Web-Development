<html>
<body>
	<form method="POST" action="">
		<label>Enter Name</label>
		<input type="text" name="username">
		<br>
		<label>Enter Password</label>
		<input type="password" name="password">
		<input type="submit">
	</form>
</body>
</html>
<?php

include('connection.php');
 error_reporting(0);
 $username=$_POST['username'];
 $password=$_POST['password'];
 extract($_POST);
 $for=password_verify($password,$str_pass);
$check="SELECT * FROM relation WHERE Password='$password'";
$query=mysqli_query($conn,$check);
$num=mysqli_num_rows($query);
$data=mysqli_fetch_array($query);
// ---------------------------DECRYPTING PASSWORD---------------------------------
if($for){
	echo "Logged In ";
}
else{
	echo "Logged IN Not ";
}

?>

