<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<style type="text/css" media="screen">
		@import url('https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap');
		#nav-color{
			color: orange;
		}
		body{
			height: auto;
		}
		.center table input{
			line-height: 30px;
			border-radius: 3px;
			font-size: 15px;
			margin-right: 10px;
			margin-bottom: 10px;
			border-color: black;
			border-style:groove;
		}
		fieldset{
			padding-top: -500px;
			padding-left: 20px;
			margin-right: 150px;
			height: auto;
			padding-right: 100px;
			border-radius: 3px;
			padding-bottom: 30px;
			margin-bottom: 20px;

		}
		
		.login-link a{
			color: red;
		}
		.login-link a:hover{
			color: red;
		}
		table #submit-btn{
			padding-left: 6px;
			padding-right: 6px;
			cursor: pointer;
			background-color: #42c78d;
			border-radius: 3px solid black;
		}
		
		</style>
	<link rel="stylesheet" type="text/css" href="mainstyle.css">
	<link rel="stylesheet" type="text/css" href="img.css">

</head>
<body>
	<div class="top-main">
	<table>
		<tr>
			<td class="tele"><img src="IMG/call.png"></td>
			<td class="tele"><a href=""><p>02111-225602</p></a></td>
     		<td class="tele"><img src="IMG/mail.png"></td>
     		<td class="tele"><a href=""><p> principal@vpcscindapur.org</p></a></td>	
     	</tr>
     </table>
    <a href="https://vpcscmoodle.gnomio.com/"><button>Moodle</button></a>

</div>
<div class="topimage">
	<img src="IMG/logo2.jpg">
</div>
		<div class="menu">
			<div class="leftmenu">
				<a href="img.html"><h4>VIDYA PRATHISHTAN'S INDAPUR</h4></a>
			</div>

			<div class="rightmenu">
				<ul>
					<li><a href="img.html"> HOME</a> </li>
					<li id="firstlist"><a href="about us.html">Principal's Desk</a> </li>
					<li><a href="academics.html"> ACADEMICS</a> </li>
					<li><a href="official-gallery.html"> GALLERY</a></li>
					<li><a href="admission.html"> ADMISSION</a> </li>
					<li><a href="contact.html"> CONTACT </a></li>
					<li><a href="login.php">LOGIN</a></li>
					<li id="nav-color"><a href="Register.php">REGISTER</a></li>
				</ul>
			</div>
		</div>
		
		<fieldset>
			<legend>REGISTER</legend>
		<form action="" method="POST" accept-charset="utf-8" onsubmit="return validation()">
			<div class="center">
				<table>
					<tr>
						<td><label>Enter Name</label></td>
                        <td><input type="text" name="Name" value="" id="name" placeholder="Theo Joe"   autocomplete="off" size="50"><br>
                        	<span id="username"></span>
                        </td>
                    </tr>
                    <tr>
						<td><label>Enter Mobile No:</label></td>
						<td><input type="tel" name="rollno" id="rollno" pattern="^\d{10}$" autocomplete="off" size="50"></td>
					</tr>
					<tr>
						<td></td>
						<td><span id="roll"></span></td>
					</tr>
                    <tr>
                    	<td><label>Enter E-Mail</label></td>
                    	<td><input type="mail" name="Email" id="email" placeholder="abc@gmail.com"  autocomplete="off" size="50"></td>
      
                    </tr>
                    <tr>
                    	<td></td>
                    	<td><span id="usermail"></span></td>
                    </tr>
                    <tr>
                    	<td><label>Gender-</label></td>
                    	<td><input type="radio" name="gender" id="gender" value="Male">Male
				        <input type="radio" name="gender"  id="gender"  value="Female">Female</td>
				   			
                    </tr>
   
                    <tr>
                    	<td><label>Enter Adress</label></td>
                    	<td> <input type="text" id="address"  name="adress" autocomplete="off" size="50"></td>
                    </tr>
                    <tr>
                    	<td></td>
                    	<td><span id="useraddress"></span></td>
                    </tr>
                    <tr>
                    	<td><label>Enter Password</label></td>
                    	<td> <input type="password" id="password" name="password" autocomplete="off" size="50"></td>
                    </tr>
                    <tr>
                    	<td></td>
                    	<td><span id="userpassword"></span></td>
                    </tr>
                    <tr>
                    	<td><label>Confirm Password</label></td>
                    	<td><input type="password" id="confirmpass" name="con-pass" autocomplete="off" size="50"></td>
                    </tr>
                    
                    <tr>
                    <td></td> 	
                    <td><span id="userconpass"></span></td>
                    </tr>
                   <tr>
                   	<td></td>
                   <td><input id="submit-btn" type="submit" name="submit" value="REGISTER"></td>
                   </tr>
                </table>
            	<label>If You have an Already Account? <span class="login-link"><a href="login.php">Login Here!</a></span></label>
            </div>
		</form>
</fieldset>
<footer>
	<div class="singlecol">
		<h3>Contact Us </h3>
		<a href="https://www.vpcscindapur.org/index.php"><span id="icons"><img src="IMG\location.png"></span><p>Vidyanagari,Indapur,Dist-Pune.Pin-413106.</p></a>
		<a href="https://www.vpcscindapur.org/index.php"><span id="icons"><img src="IMG\call.png"></span><p>Tel- 02111-255602</p></a>
		<a href="https://www.vpcscindapur.org/index.php#"><span id="icons"><img src="IMG\mail.png"></span><p>principle@vpcscindapur.org</p></a>
		<a href="https://www.vpcscindapur.org/index.php#facebook">	<span id="icons"><img src="IMG\facebook.png"></span><p>facebook</p></a>
		<a href="https://www.vpcscindapur.org/index.php"><span id="icons"><img src="IMG\location.png"></span><p>location</p></a>

	</div>
	<div class="doublecol">
		<ul>
			<li><h3>Featured Links</h3></li>
			<li><a href="http://www.unipune.ac.in/">University</a></li>
			<li><a href="https://vpcscmoodle.gnomio.com/">Swayam</a></li>
			<li><a href="https://vpcscmoodle.gnomio.com/">Moodle</a></li>
			<li><a href="https://courses.edx.org/login?next=/dashboard">EDX</a></li>
	</div>
	      <div class="foot"><br/><br/>
	      	<hr>
	      <h4>&copy; 2021 , All rights reserved | Designed By Suraj Kale | Concept : Rutuja Kale</h4>
	      <h4>VPCSC, Indapur.</h4>
	  </div>
</footer>
	<!--------------------------------------Javascript Validation------------------------------------------->
		<script type="text/javascript">
			
			function validation()
			{
				var name=document.getElementById("name").value;
				var Rollno=document.getElementById("rollno").value;
				var email=document.getElementById("email").value;
				var address=document.getElementById("address").value;
				var password=document.getElementById("password").value;
				var confirmpass=document.getElementById("confirmpass").value;

				// Now we taking one by one single variable to make a appropriate conditions to is regarding..

				if(name=="")
				{
					document.getElementById('username').innerHTML="Please Enter Your Name!";
					return false;
				}
				if(name.length<3)
				{
					document.getElementById('username').innerHTML="Atleast length should be 3"
				}
				if(Rollno=="")
				{
					document.getElementById('roll').innerHTML="Please Enter Your MobileNo!";
					return false;
				}
				if(Rollno.length<10)
				{
					document.getElementById("roll").innerHTML="length is not proper";
					return false;
				}
				
				if(isNaN(Rollno))
				{
					document.getElementById("roll").innerHTML="Characters are not allowded!";
				}
				
				if(email=="")
				{
					document.getElementById('usermail').innerHTML="Please Enter Your E-Mail!";
					return false;
				}
			
				if(email.indexOf('@')<= 0)
				{
					document.getElementById('usermail').innerHTML="Invalid position of @";
					return false;
				}

				if(address=="")
				{
					document.getElementById('useraddress').innerHTML="Please Enter Your address!";
					return false;
				}
			
				if(password=="")
				{
					document.getElementById("userpassword").innerHTML="Please ENter the password";
					return false;
				}
				if(password.length <= 8)
				{
					document.getElementById('userpassword').innerHTML="Password length should have min 8 ";
					return false;
				}
				if(confirmpass=="")
				{
					document.getElementById('userconpass').innerHTML="Please Confirm Your Password!";
					return false;
				}
				if(password!=confirmpass)
				{
					document.getElementById('userconpass').innerHTML="Password Not Matching As per Above !";
					return false;
				}
				
          	}
		</script>
</body>
</html>
<?php
include('connection.php');
 error_reporting(0);
 $name=$_POST['Name'];
 $rollno=$_POST['rollno'];
 $email=$_POST['Email'];
 $gender=$_POST['gender'];
 $address=$_POST['adress'];
 $password=$_POST['password'];
 $con_pass=$_POST['con-pass'];
 $query="INSERT INTO relation (Name, MobileNo, Email, Gender, Address, Password, Con_password)VALUES('$name','$rollno','$email','$gender','$address','$password','$con_pass')";
 
 $data=mysqli_query($conn,$query);
  
  header('location:After_login_section/img1.php');
  
  
 ?>
