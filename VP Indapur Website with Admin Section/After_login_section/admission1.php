<?php
session_start();
// if(!isset($_SESSION['username'])){
// 	if(isset($_REQUEST['Name']) || isset($_REQUEST['password']))
// 		{
// 			$victimname=$_REQUEST['Name'];
// 			$victimpassword=$_REQUEST['password'];
// 			$_SESSION['username']=$victimname;
// 			$_SESSION['userpassword']=$victimpassword;
// 			echo "<script>location.href='After_login_section/admission1.php'</script>";
// 		}
// }
// else{
// 	echo "<script>location.href='After_login_section/admission1.php'</script>";
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
<style type="text/css">
	*{
	margin: 0;
	padding: 0;
}
body{
	 width: 100%;
	 height: 200vh;
}
html
{
	scroll-behavior: smooth;
}
.menu{
	left: 0;
	margin-top: 3%;
	height: 60px;
	width: 100%;
	background-color:#052d52;
}

.leftmenu{
	width: 30%;
	line-height: 70px;
	float: left;
}

.leftmenu h4{
	padding-left: 70px;
	font-weight: bold;
	color: white;
	font-size: 18px;
	font-family:  'Arvo', serif;
}
.rightmenu{
		 	width: 70%;
		 	height: 100px;
		 	float: right;
		 
}

.rightmenu ul
{
	margin-left: 90px;
}
.rightmenu ul li{
	font-family: 'Arvo', serif;
font-family: 'Questrial', sans-serif;
	 display: inline-block;
	 list-style: none;
	 font-size: 15px;
	 
	 color: white;
	 font-weight: bold;
	 line-height: 70px;
	 margin-left: 40px;
	 text-transform: uppercase;
}

#firstlist{
	color: orange;
}
.rightmenu ul li:hover{

	color: orange;
}
.topimage img{
		padding-top: 0px;
}
#h31{
	
	margin-left: 61%;
	margin-top: -120px;
	font-size:20px;
	color: red;
	font-family: 'Arvo', serif;
font-family: 'Questrial', sans-serif;
}
#h32{
	margin-left: 61%;
	padding-top: 20px;
	font-size:20px;
	color: red;
	font-family: 'Arvo', serif;
font-family: 'Questrial', sans-serif;
}

.why p{
		font-size: 40px;
		color: #021136;
		padding-top: 200px;
			font-family: 'Play', sans-serif;
			margin-left: 490px;
}
#icons img{
	padding-top: 10px;
	height: 30px;
	width: 30px;
}

footer{
	background-color:  #003366;
	height: auto;
	width: 100%;
	padding-top: 30px;
	margin-top: 200px;
}
.singlecol{
	color: white;
	margin-left: 40px;
	line-height: 40px;
	font-family: 'Prompt', sans-serif;

}
.doublecol{
	color: white;
	margin-left: 50%;
	line-height: 40px;
	margin-top: -220px;
	font-family: 'Prompt', sans-serif;
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
a{
	text-decoration: none;
	color: white;	
}
a:hover{
	 text-decoration: none;
	 color: orange;

}
#icons img{
	padding-top: 10px;
	height: 20px;
	width: 20px;
	}
	.singlecol p{
	 margin-left: 40px;
	 margin-top: -49px;
}
.singlecol h5{
	font-family: 'Prompt', sans-serif;
	font-weight: 100;
}	
.admission-related-table table{
	border-collapse: collapse;
	padding-bottom: 200px;

	background-color: #c8cacc;
	margin-left: 17%;
	margin-right: 17%
}
.admission-related-table table tr td{
	 border: 1px solid grey;
	 border-radius: 5px;
	 font-family: 'Questrial', sans-serif;
	 padding:5px;
	 line-height: 25px;
	 padding-bottom: 50px;

}
.admission-related-table p{
	 padding-top: 50px;
	 font-family: 'Questrial', sans-serif;
	 font-size: 14px;
	 font-weight: bold;
	 letter-spacing: 1px;
	 padding-bottom: 20px;
	 text-align: center;
}
 #td2{
	padding: 20px;
	font-weight: bold;

}
#tr1{
	 font-weight: bold;
	 text-align: center;
	 padding-top: 20px;
}

</style>
</head>
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
		<div class="admission-related-table">
			<p>We offer following three year degree courses recognized by Savitribai Phule Pune University, Pune.</p>
			<table>
				<tr >
					<td id="tr1">Course Name</td>
					<td id="td2">Intake Capacity</td>
					<td id="tr1">Eligibility Criteria</td>
					<td id="tr1">Future Scope</td>
				</tr>
				<tr>
					<td><b>B.C.S.
                        B.Sc. (Computer
                        Science)</b>
                        Bachelor of
                        Computer
                        Science</td>
                    <td id="td2"><b>80 Seats</b></td>
                    <td>Passed H.S.C. Examination (minimum 40% marks) from Science Stream with Mathematics OR Diploma in Engineering</td>
                    <td>Better job Opportunities in IT and Software Industries. Eligible for M.Sc. (Computer Science), M.C.A., M.B.A. And M.P.S.C. / U.P.S.C. Competitive Exam.</td>
                </tr>
                <tr>
                	<td><b>B.C.A.
                        B.B.A(Computer Application)</b>
                        Bachelor of
                        Computer
                        Application</td>
                    <td id="td2"><b>80 Seats</b></td>
                    <td rowspan="2">Passed H.S.C. Examination (minimum 40% marks) from any Stream and English as one of the subject / Diploma in Engineering/ Diploma in Pharmacy/ MCVC</td>
                    <td>Opportunity for student of any stream to become IT professionals. Eligible for M.C.A., M.B.A. and M.P.S.C. / U.P.S.C. Competitive Exam.</td>
                </tr>
                <tr>
                	<td><b>B.B.A.</b><br/>
                        Bachelor of
                        Business
                        Administration
                    </td>
                    <td id="td2"><b>80 Seats</b></td>
                 
                    <td>Better job Opportunities in business organizations. Eligible for M.C.A., M.B.A. and M.P.S.C./U.P.S.C. Competitive Exam.</td>
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