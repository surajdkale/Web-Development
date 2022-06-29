<?php

session_start();

if(isset($_REQUEST['logout']))
{
	session_unset();
	session_destroy();
     header("location:../img.html");
   
}

?>
<html>
<head>
	<title>LogOut</title>
	<style type="text/css">
		form input {
			padding: 30px;
			
		}
		form input:hover{
			cursor: pointer;
		}
	</style>
</head>
<body>
	<form action="" method="post">
		<input type="submit" name="logout" value="LOGOUT">
	</form>
	</body>
	</html>