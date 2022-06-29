<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style type="text/css" media="screen">
		@import url('https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap');
		#blue{
			display: flex;
			position: relative;
			margin: 5% 3%;
			background-image: linear-gradient(to right,blue,cyan);
			height: 500px;
			width: 1300px;
			border-radius: 30px;
		}
		body{
			background-image: url('bg (3).jpg');
		}
		form{
			font-family: 'Rubik', sans-serif;
			position: fixed;
			margin-top: 7%;
			margin-left: 450px;
			height: 350px;
			width: 690px;
			background-image: linear-gradient(to right,cyan,blue);
			padding-left: 10px;
			padding-top: 10px; 
			border-radius: 15px;

		}

		input{
			margin-left: 20px;
			line-height: 27px;
			font-size: 20px;
			margin-bottom: 10px;
			border-radius: 5px;
			font-family: 'Rubik', sans-serif;
		}
		input:hover{
			border-color: cyan;
			box-shadow: 1px 1px 10px 2px cyan;
		}
		select{
			margin-left: 20px;
			
			margin-bottom: 10px;
			
			font-family: 'Rubik', sans-serif;
		}
		.center{
			
			height: 100%;
			width:100%;
			position: fixed;
			padding-top: 30px;
			margin-left: 50px;
		}
		/*.center img{
			height: 200px;
			width:300px;
			margin-top: -500px;
			position: relative;
			margin-left: 	 00px;
			border-radius: 15px;
			-webkit-transition-duration:1s;
			transition-duration: 1s;
		}*/
		
		#submit-btn{
			font-family: 'Rubik', sans-serif;
			background-image: linear-gradient(to right,blue,cyan);
			padding: 10px 20px 10px 20px;
			border-radius: 15px;
			border:none;
			transition-duration: 1s;
		}
		#submit-btn:hover{
			
			
			color:white;
			cursor: pointer;
		}
		
		h1{
			font-family: 'Rubik', sans-serif;
			letter-spacing: 5px;
			color: white;
		}
		span{
			color: black;
		}
		a {
			text-decoration:none;
			outline: none;
			color: white;
			
		}
		a:hover{
			color: red;
			cursor: pointer;
		}
		.reg-btn{
			color: white;
			margin-top: 50px;
			font-size: 15px;
		}
	</style>
</head>
<body>
	<div id="blue">
		<img src="logo.JPEG" alt="" usemap="#workmap"style="border-radius: 20px;">
<map name="workmap">
  <area shape="rect" coords="90,209,195,309" alt="Computer" href="login.php">
</map>
			<h1>ADMIN LOGIN</h1>
		<form action="" method="POST" accept-charset="utf-8">
			<div class="center">
				<table>
					<tr>
						<td>Enter Name</td>
                        <td><input type="text" name="Name" value="" id="name" placeholder="Enter" size="30"  autocomplete="off">
                        	<td><span id="username"></span></td>
                        </td>
                    </tr>
                    <tr>
                    	<td>Enter Password</td>
                    	<td> <input type="password" id="password" name="password" autocomplete="off" size="30"></td>
                    	<td><span id="userpassword"></span></td> 
                    
                    </tr>
                    
                   <tr>
                   	<td></td>
                   	<td><input id="submit-btn" type="submit" name="submit" value="LOGIN"></td>
                   </tr>
                </table>
                <label style="color: white;text-shadow: 1px 2px 3px red; border:1px solid green;margin-bottom: 40px; border-color: transparent transparent  transparent; padding: 3px;line-height: 30px;"><span style="color: red;">NOTICE</span>-:All information is very sensitive regarding to the database .<br> Then Manipulate the operations carefully This data will unrecoverable.!</label><br><br><br><br><span style="color: white;text-shadow: 1px 2px 3px red;">© 2021 , All rights reserved </span>
			</div>
			
		</form>

	</div>
	
		
</body>
</html>
<?php


include('connection.php');
 error_reporting(0);
 

 if(isset($_REQUEST["submit"]))
 {
 	$username=$_POST['Name'];
    $password=$_POST['password'];
 
	$check="SELECT * FROM sk WHERE Password='$password' AND Name='$username'";
	$query=mysqli_query($conn,$check);
	$num=mysqli_num_rows($query);
	if($num==true)
	{
		header("location:Display.php");
	}
	else{
		?><script>alert("Please Try Again");</script>
		<?php
	}
}	

	if(isset($_REQUEST['login'])){
		header("location:login.php");
	}

?>
