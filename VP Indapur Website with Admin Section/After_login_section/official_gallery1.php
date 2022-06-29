<?php
session_start();
// if(!isset($_SESSION['username'])){
// 	if(isset($_REQUEST['Name']) || isset($_REQUEST['password']))
// 		{
// 			$victimname=$_REQUEST['Name'];
// 			$victimpassword=$_REQUEST['password'];
// 			$_SESSION['username']=$victimname;
// 			$_SESSION['userpassword']=$victimpassword;
// 			echo "<script>location.href='After_login_section/official_gallery1.php'</script>";
// 		}
// }
// else{
// 	echo "<script>location.href='After_login_section/official_gallery1.php'</script>";
// }
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="mainstyle.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Arvo:ital@1&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Arvo:ital@1&family=Questrial&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Play:wght@700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,400;1,300&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="about us.css">
</head>
<style type="text/css">
body{
	 height: 200vh;
}
	

	.homepage h1{
		font-family: 'Questrial', sans-serif;
		
		padding-bottom: 20px;
	}
	
	footer{
	background-color:  #003366;
	height: auto;
	width: 100%;
	padding-top: 20px;
	margin-top: 210px;
}
.singlecol{
	color: white;
	margin-left: 40px;
	line-height: 40px;
	font-family: 'Prompt', sans-serif;

}
.singlecol p{
	 margin-left: 40px;
	 margin-top: -40px;
}
.singlecol h5{
	font-family: 'Prompt', sans-serif;
	font-weight: 100;
}
#icons img{
	padding-top: 10px;
	height: 20px;
	width: 20px;

}
.doublecol{
	color: white;
	margin-left: 50%;
	line-height: 40px;
	margin-top: -240px;
	font-family: 'Prompt', sans-serif;
}
.doublecol ul{
	list-style-type: none;
	font-weight: 100;
}
.doublecol ul li h3{
	 font-weight: 100;
}
.foot h4{
	color: white;
	text-align: center;
		font-weight: 100;
	letter-spacing: 1px;
font-family: 'Prompt', sans-serif;
}
h4{
	width: 80%;
	margin-left: 5%;
	margin-right: 5%;
}
.menu{
	left: 0;
	margin-top: 3%;
	height: 60px;
	width: 100%;
	background-color:#052d52;
}
}
.singlecol h3{
	font-weight: 100;
}
#col1{
	 font-weight: 100;
	 font-family: 'Prompt', sans-serif;
}

.homepage table,h1{
	margin-left: 55px;
}
.homepage table tr td img{
			 height: 200px;
			 width: 300px;
		}
		.homepage table tr td
		{
			 padding: 7px;
		}
</style>
<body>
<div class="topimage">
	<img src="IMG/logo2.jpg">
	<p id="h31"><span id="icons"><img src="IMG/mail1.png"></span> principal@vpcscindapur.org</p>
	<p id="h32"><span id="icons"><img src="IMG/call1.png"></span>02111-225602</p>
</div>
		<div class="menu">
			<div class="leftmenu">
				<a href="img1.php"><h4>VIDYA PRATHISHTAN'S INDAPUR</h4></a>
			</div>

			<div class="rightmenu">
				<ul>
					<li><a href="img1.php"> HOME</a> </li>
					<li id="firstlist"><a href="about us1.php">Principal's Desk</a> </li>
					<li><a href="academics1.php"> ACADEMICS</a> </li>
					<li><a href="official_gallery1.php"> GALLERY</a></li>
					<li><a href="admission1.php"> ADMISSION</a> </li>
					<li><a href="contact1.php"> CONTACT </a></li>
					<li><a href="Logout.php">LOGOUT</a></li>
				</ul>
			</div>
		</div>
		
		<div class="homepage">
			<h1>Gallery:</h1>
			<table>
				<tr>
					<td><img src="IMG/1.jpeg"></td>
					<td><img src="IMG/2.jpeg"></td>
					<td><img src="IMG/3.jpg"></td>
					<td><img src="IMG/4.jpg"></td>
				</tr>
				<tr>
					<td><img src="IMG/5.jpg"></td>
					<td><img src="IMG/6.jpg"></td>
					<td><img src="IMG/7.jpg"></td>
					<td><img src="IMG/8.jpg"></td>
				</tr>
				<tr>
					<td><img src="IMG/9.jpg"></td>
					<td><img src="IMG/10.jpg"></td>
					<td><img src="IMG/11.jpg"></td>
					<td><img src="IMG/12.jpg"></td>
				</tr>
				<tr>
					<td><img src="IMG/13.jpg"></td>
					<td><img src="IMG/14.jpg"></td>
					<td><img src="IMG/15.jpg"></td>
					<td><img src="IMG/16.jpg"></td>
				</tr>
				<tr>
					<td><img src="IMG/17.jpg"></td>
					<td><img src="IMG/18.jpg"></td>
					<td><img src="IMG/19.jpg"></td>
					<td><img src="IMG/20.jpg"></td>
				</tr>
				<tr>
					<td><img src="IMG/21.jpg"></td>
					<td><img src="IMG/22.jpg"></td>
					<td><img src="IMG/gal2.png"></td>
					<td><img src="IMG/gal1.jpg"></td>
				</tr>
			</table>
		</div>
			
		<footer>
	<div class="singlecol">
		<h3>Contact Us </h3>
		<span id="icons"><img src="IMG/location.png"></span><p>Vidyanagari,Indapur,Dist-Pune.Pin-413106.</p>
		<a href="https://www.vpcscindapur.org/index.php"><span id="icons"><img src="IMG/call.png"></span><p>Tel- 02111-255602</p></a>
		<a href="https://www.vpcscindapur.org/index.php#"><span id="icons"><img src="IMG/mail.png"></span><p>principle@vpcscindapur.org</p></a>
		<a href="https://www.vpcscindapur.org/index.php#facebook">	<span id="icons"><img src="IMG/facebook.png"></span><p>facebook</p></a>
		<a href="https://www.vpcscindapur.org/index.php"><span id="icons"><img src="IMG/location.png"></span><p>location</p></a>

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
	</body>
	</html>
