<?php
session_start();
// if(isset($_SESSION['username'])){
// 	if(isset($_REQUEST['Name']) || isset($_REQUEST['password']))
// 		{
// 			$victimname=$_REQUEST['Name'];
// 			$victimpassword=$_REQUEST['password'];
// 			$_SESSION['username']=$victimname;
// 			$_SESSION['userpassword']=$victimpassword;
// 			header("location:img.php");
// 		}
// 	header("location:img1.php");
// }S

?>
<!DOCTYPE html>
<html>
<head>
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
				<a href="img1.php"><h4>VIDYA PRATHISHTAN'S INDAPUR</h4></a>
			</div>

			<div class="rightmenu">
				<ul>
					<li><a href="img.php"> HOME</a> </li>
					<li id="firstlist"><a href="about us1.php">Principal's Desk</a> </li>
					<li><a href="academics1.php"> ACADEMICS</a> </li>
					<li><a href="official_gallery1.php"> GALLERY</a></li>
					<li><a href="admission1.php"> ADMISSION</a> </li>
					<li><a href="contact1.php"> CONTACT </a></li>
					<li><a href="Logout.php">LOGOUT</a></li>
				</ul>
			</div>
		</div>
			<div class="slideshow-container">

<div class="mySlides fade">
 
  <img src="slider\mainbg.jpeg" style="width:100%">
  <div class="text"><b style="letter-spacing: 2px;">Explore The World Of Our Graduates</b></div>
</div>

<div class="mySlides fade">
  
  <img src="slider\second.jpeg" style="width:100%">
 <div class="text"><b style="letter-spacing: 2px;">Better Education For A Better World</b></div>
</div>

<div class="mySlides fade">
 
  <img src="slider\1.jpeg" style="width:100%">
 <div class="text"><b style="letter-spacing: 2px;">Explore The World Of Our Graduates</b></div>
</div>
<div class="mySlides fade">

  <img src="slider\7.jpeg" style="width:100%">
 <div class="text"><b style="letter-spacing: 2px;">Exceptional People,<br/>Exceptional Care</b></div>
</div>


<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>



<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

</div>
<div class="middle-slideshow">
	<table>
		<tr>
			<td><div id="principal">
				<img src="IMG\principal.jpg">
				<a href="about us1.php">
					<button id="button1">Principal's Desk</button>
				</a>
			</div>
		</td>
			<td>
				<div id="annoucement">
					<h3>Announcements</h3>
				<marquee behavior="scroll" direction="up" scrollamount="3" width="100%" height="80%" onmouseover="this.stop();" onmouseout="this.start();">
				<div style="height: 40px; width: auto; background-color: #ebe4e4;padding: 10px;">
					<a href="https://www.vpcscindapur.org/news/ap3/prelim2021_notice.jpeg">
					<table>
						<tr>
							<td><p id="blink">NEW!</p></td>
							<td><p>Prelim Examination Timetable 2021.</p></td>
						</a>
					</tr>
				</table>
				</div>
				<br/>			
					<div style="height: 40px; width: auto; background-color: #ebe4e4;padding: 10px;">
					<a href="https://swayam.gov.in/"><p>Register for free Swayam Courses.</p>
						</a>
				</marquee>
			</div>
			    </div>	
		    </td>
			<td>
				<div id="events">
					<h3>News&Events</h3>
					<marquee  behavior="scroll" direction="up" scrollamount="3" width="100%" height="80%" onmouseover="this.stop();" onmouseout="this.start();">
						<div style="height: 60px; width: auto; background-color: #ebe4e4;padding: 10px;">
				<a href="https://www.vpcscindapur.org/news.php?mp=1">
					<table>
						<tr>
							<td><img src="IMG/news1.jpg" height="40px" width="40px"></td>
							<td><p>The annual academic presentation of the teachers...</p></td>
						</a>
					</tr>
				</table>
					</div>
					<br/>
					<div style="height: 60px; width: 100%; background-color:#ebe4e4;padding: 10px;display: inline-block;">
						<a href="https://www.vpcscindapur.org/news.php?mp=2">
							<table>
								<tr>
									<td><img src="IMG/news2.jpeg" height="40px" width="40px"></td>
									<td><p>Voter Awareness Campaign 2021</p></td>
								</a>
							</tr>
						</table>
				</marquee>
			</div>

		</div>
	</td>
</tr>
</table>
</div>
<div class="middle-paragraph">
			<h1>Welcome to VPCSC.</h1>
			<p> Vidya Prathishtan's Commerce & science college established in June 2008 in a picturesque educational campus sprwaling over 70 acres, 135 KM away from Pune and 45 KM away from Baramati in Pune district.<br/><br/>
			
			The college is affiliated to University of Pune. Elaborate infrastructure , complete with modern laboratories , library , hostels, canteen and residential quarters for the staff, is the hall mark of  this sascent institution. 
<br/>
<br/>
We encourage the students by giving them the finest level of learning atmosphere and allowing them to participate in co-curricular and extracurricular activities.</p>

		
		</div>
		<div class="half-image">
			<img src="IMG\sniper.jpg">
		</div>
<div class="secondimage">
  		<div class="onlineplatformsforstudents">
  			<p>Online Platform For The Students</p>
  			<br/>
  			<div class="img1moodle">
  				<a href="https://vpcscmoodle.gnomio.com/"><img src="IMG\moodle.png"></a>
  			</div>
  			<div class="img2moodle">
  				<a href="https://courses.edx.org/login?next=/dashboard"><img src="IMG\edx2.jpg"></a>
  			</div>
  		</div>
<!--------There is an 3 dekstop bag and code -->
  <div class="courses">
  			<table>
  				<tr>
  					<td><a href="https://www.vpcscindapur.org/department.php?dept=1&val=11"><div id="c1"><img src="IMG\desktop.png"><p>B.Sc.(SC)</p></div></a></td>
  					<td><a href="https://www.vpcscindapur.org/department.php?dept=2&val=11"><div id="c2"><img src="IMG\code.png"><p>BBA(CA)</p></div></a></td>
  					<td><a href="https://www.vpcscindapur.org/department.php?dept=3&val=11"><div id="c3"><img src="IMG\bag.png"><p>BBA</p></div></a></td>
  		</tr>
  	</table>
  </div>
  </div>
  
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
</body>
</html>