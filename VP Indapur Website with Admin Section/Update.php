<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<style type="text/css" media="screen">
		@import url('https://fonts.googleapis.com/css2?family=Nova+Oval&display=swap');
		@import url('https://fonts.googleapis.com/css2?family=Zilla+Slab+Highlight:wght@400;700&display=swap');
		#blue{
			display: flex;
			position: relative;
			margin: 5% 3%;
			background-image: linear-gradient(to right,blue,cyan);
			height: 500px;
			width: 1300px;
			border-radius: 30px;
		}
		form{
			font-family: 'Titillium Web', sans-serif;
			position: fixed;
			margin-top: 7%;
			margin-left: 230px;
			height: 350px;
			width: 1000px;
			background-image: linear-gradient(to right,cyan,blue);
			padding-left: 10px;
			padding-top: 10px; 
			border-radius: 15px;

		}
		input{
			margin-left: 20px;
			
			margin-bottom: 10px;
			
			font-family: 'Titillium Web', sans-serif;
		}
		select{
			margin-left: 20px;
			
			margin-bottom: 10px;
			
			font-family: 'Titillium Web', sans-serif;
		}
		.center{
			
			height: 100%;
			width:100%;
			position: absolute;
			padding-top: 30px;
			margin-left: 50px;
		}
		.center img{
			height: 300px;
			width:400px;
			margin-top: -500px;
			position: relative;
			margin-left: 500px;
			border-radius: 15px;
			-webkit-transition-duration:1s;
			transition-duration: 1s;
		}
		
		button{
			font-family: 'Titillium Web', sans-serif;
			background-image: linear-gradient(to right,blue,cyan);
			padding: 10px 20px 10px 20px;
			border-radius: 15px;
			border:none;
			transition-duration: 1s;
		}
		button:hover{
			
			background-image: linear-gradient(to right,green,#36e044);
			color:white;
			cursor: pointer;
		}
		
		h1{
			font-family: 'Titillium Web', sans-serif;
			letter-spacing: 5px;
		}
	</style>
</head>
<body>
	<div id="blue">
		<img src="logo.png" alt="" style="border-radius: 20px;">
			<h1>LOGIN</h1>
		<form action="" method="POST" accept-charset="utf-8">
			<div class="center">
				<table>
				<?php
						include('connection.php');
							error_reporting(0);
							if(isset($_POST['submit']))
							{
								
								$roll=$_GET['serial'];
								// ----------To Redirect to the display page-------------
							

							$name=$_POST['Name'];
							$rollno=$_POST['rollno'];
							 $email=$_POST['Email'];
							 $gender=$_POST['gender'];
							 $address=$_POST['adress'];
							 $password=$_POST['password'];
							 $con_pass=$_POST['con-pass'];

							 // $query="INSERT INTO relation (Rollno ,Name, Email, Gender, Address, Password, Con_password)VALUES('$rollno','$name','$email','$gender','$address','$password','$con_pass')";
							 
							 $update="UPDATE relation SET s=$roll, Name='$name',MobileNo='$rollno',Email='$email', Gender='$gender',Address='$address',Password='$password',Con_password='$con_pass' where s='$roll'";

							 $data=mysqli_query($conn,$update);

							 if($data)
							 {
							 	?> <script>alert("Data Updated ");</script>
							 	<?php
							 	header('location:Display.php');
							 }
							}

							// ----------To fetch data as per the request of user to update....
						$rolls=$_GET['serial'];

						 $show="SELECT * FROM  relation WHERE s='$rolls'";

						$query=mysqli_query($conn,$show);

						$num=mysqli_num_rows($query);

						$data=mysqli_fetch_array($query);

						
							?>
					
					<tr>
						<td>Enter Name</td>
                        <td><input type="text" name="Name" value="<?php echo $data['Name'];?>"></td>
                    </tr>
                    <tr>

						<td>Enter Mobile No</td>
						<td><input type="number" name="rollno" value="<?php echo $data['MobileNo'];?>" placeholder="1221.." required="">
						</td>
					</tr>
                    <tr>
                    	<td>Enter E-Mail</td>
                    	<td><input type="mail" name="Email"  value="<?php echo $data['Email'];?>"></td>
                    </tr>
                     <tr>
                    	<td>Gender-</td>
                    	<td><input type="radio" name="gender" value="Male">Male
			<input type="radio" name="gender" value="Female">Female</td>
                    </tr>
                    <tr>
                    	<td>Enter Adress</td>
                    	<td> <input type="text" value="<?php echo $data['Address']; ?>" name="adress"></td>
                    </tr>
                   
                    <tr>
                    	<td>Enter Password</td>
                    	<td> <input type="password" value="<?php echo $data['Password']; ?>" name="password"></td>
                    </tr>
                    <tr>
                    	<td>Confirm Password</td>
                    	<td><input type="password"  value="<?php echo $data['Con_password']; ?>" name="con-pass"></td>
                    </tr>
                   <tr>
                   	<td></td>
                   	<td><button name="submit">UPDATE</button></td>
                   </tr>
                </table>
			

			<img src="man.png" alt="">
			</div>
		</form>
	</div>
</body>
</html>
