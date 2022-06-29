<html>
<head>
<title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style type="text/css">
   *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  font-family: 'poppins',sans-serif;   
  }
  nav{
    background: url(Images/bg.jpg);
    height: 75px;
  }
  nav div img{
    height: 72px;
    width: 560px;
  }
  nav ul {
position: relative;
  display: flex;
  justify-content: right;
  align-items: right; 
  margin-top: -40px;
  }
  nav ul li{
    position: relative;
    list-style: none;

  }
  nav ul li a{
    position: relative;
    margin:0 14px;
    text-decoration: none;
    color: #fff;
    letter-spacing: 2px;
    font-weight: 500px;
    transition: 0.5s;
    font-size: 20px;
    transition-duration: 0.5s;
  }
  nav ul li a:hover{
    color: orange;
    text-shadow: 0px 2px 2px 0px black;
  }
  .banner{
    position: relative;
    width: 100%;
    height: 35vh;
    background: url(Images/bg.jpg);
    background-size: cover;
  }
    .cards{
      position: relative;
      display: inline-flex;
      width: auto;
      justify-content: space-between;
      margin-left: 30px;
      padding-left: 100px;
    }
    #c1{
      margin-left: 200px;
      transition-duration:0.9s;
    }
    #c2{
      margin-left: 200px;
      transition-duration:0.9s;
    }
    #c3{
      
      margin-left: 60px;
      transition-duration:0.9s;
    }
    #c4{
      
      margin-left: 60px;
      transition-duration:0.9s;
    }
 /*Bliunking Button*/
     @keyframes blinking {
      0%   { background-color: rgb(224,23,23); }
      50%  { background-color: rgb(1,196,239); }
      100% { background-color: rgb(224,23,23); }
    }
    #blink{
      font-size: 15px;
      padding-left: -10px;
      animation : blinking 2s infinite;
    }
    /*Blinking element ends here*/
    #c1:hover{
      box-shadow: 5px 1px 20px 10px grey;

    }
    #c2:hover{
      box-shadow: 5px 1px 20px 10px grey;
    }
    #c3:hover{
      box-shadow: 5px 1px 20px 10px grey;
    }
    #c4:hover{
      box-shadow: 5px 1px 20px 10px grey;
    }
    .btn btn-primary{
        padding-top: 40px;
    }
    #Instant1{
      transition-duration: 0.4s;
    }
     #Instant2{
       transition-duration: 0.4s;
    }
     #Instant3{
       transition-duration: 0.4s;
      margin-top: 20px;
    }
     #Instant4{
       transition-duration: 0.4s;
      margin-top: 20px;
    }
    #Instant1:hover{
      background-color: rgb(224,23,23);
      color: white;
    }
    #Instant2:hover{
      background-color: rgb(224,23,23);
      color: white;
    }
    #Instant3:hover{
      background-color: rgb(224,23,23);
      color: white;
    }
    #Instant4:hover{
      background-color: rgb(224,23,23);
      color: white;
    }
    /*Centered Text On Image*/
    .centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
/*______________Text Effect*/

.box {
width: 700px;
margin: 240px auto;
font-size: 30px;
font-weight: bold;
font-family: lato;
text-align: center;
}
.typed {
color: orange;
}
.box h2 {
font-size: 80px;
color: orange;
margin: 0;
font-family: lato;
font-weight: 900;
text-transform: uppercase;
-webkit-text-stroke: 1px black;
}
#example {
margin: 0;
}

/*________________________________*/
  /*______________Footer_____________*/
    footer{
      
  background-color:  #003366;
  height:600px;
  width: 100%;
  padding-top: 100px;
}
.singlecol #icons img{
  margin-left: 20px;
  height: 30px;
  width: 25px;
}

.singlecol{
  color: white;
  margin-left: 40px;
  line-height: 35px;
  font-family: 'Prompt', sans-serif;
  margin-top: 5px;

}
.singlecol p{
   margin-left: 60px;
   margin-top: -30px;
}
.singlecol a{
   color: white;
   text-decoration: none;
}
.singlecol a:hover{
   color: orange;
   cursor: pointer;
}
.singlecol h3{
  font-family: 'Prompt', sans-serif;
  font-weight: 100;
  padding-left: 40px;
  margin-top: -50px;
  padding-top: 100px;
  padding-bottom: 0px;
}
  
.doublecol{
  color: white;
  margin-left: 50%;
  line-height: 40px;
  margin-top: -250px;

  font-family: 'Prompt', sans-serif;
}
.doublecol ul{
  list-style-type: none;
  font-weight: 100;
}
.doublecol ul li h3{
  font-size: 20px;
  padding-top: -400px;
   font-weight: 100;
}
.doublecol ul li a{
  color: white;
  transition-duration: 0.2s;
  text-decoration: none;
}
.doublecol ul li a:hover{
  color: orange;
  text-shadow: 0px 2px 2px 0px black;
}
.foot h6{
  padding-top: 10px;
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
</style>
</head>
<body>
<nav>
  <div><a href="index.php"><img src="Images/BankLogo.png"></a></div>
 <ul>
  <li><a href="#" onclick="myFunction()">Home</a></li>
   <li><a href="DisplayCustomers.php">Customers Info</a></li>
   <li><a href="TransferMoney.php">Select Customer</a></li>
    <li><a href="TransactionHistory.php">Transaction History</a></li>  
 </ul>
<script>
function myFunction() {
  alert("This is Home Page!");//Alert!!
}
</script>
</nav>
<section class="banner">
<link href="https://fonts.googleapis.com/css?family=Raleway:200,100,400" rel="stylesheet" type="text/css" />
<center><h1 style="font-family: Helvetica, sans-serif;color: white;padding-top:70px; ">Go To 
  <span
     class="txt-rotate"
     data-period="10"
     data-rotate='[ "Customer Info", "Select cutomers", "Transaction History"]'></span>
</h1>
<h2 style="color: white;font-family: Helvetica, sans-serif;">Feel Free for Transaction</h2></center>
</section>
<!-- Texting effect Script -->
<script type="text/javascript">
var TxtRotate = function(el, toRotate, period) {
  this.toRotate = toRotate;
  this.el = el;
  this.loopNum = 0;
  this.period = parseInt(period, 10) || 2000;
  this.txt = '';
  this.tick();
  this.isDeleting = false;
};

TxtRotate.prototype.tick = function() {
  var i = this.loopNum % this.toRotate.length;
  var fullTxt = this.toRotate[i];

  if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
  } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
  }

  this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

  var that = this;
  var delta = 300 - Math.random() * 100;

  if (this.isDeleting) { delta /= 2; }

  if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
  } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
  }

  setTimeout(function() {
    that.tick();
  }, delta);
};

window.onload = function() {
  var elements = document.getElementsByClassName('txt-rotate');
  for (var i=0; i<elements.length; i++) {
    var toRotate = elements[i].getAttribute('data-rotate');
    var period = elements[i].getAttribute('data-period');
    if (toRotate) {
      new TxtRotate(elements[i], JSON.parse(toRotate), period);
    }
  }
  // INJECT CSS
  var css = document.createElement("style");
  css.type = "text/css";
  css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
  document.body.appendChild(css);
};
</script>
<section class="cards">
<!-- View List of cutomers -->
<div class="card" id="c2" style="width: 18rem;">
  <img class="card-img-top" src="Images/records.jfif" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">View Customers </h5>
    <p class="card-text">See the number's of customers who available for ready to do transaction</p>
    <a href="DisplayCustomers.php" class="btn btn-primary" id="blink" id="Instant2">Click here</a>
  </div>
</div>
<!-- Transaction Page -->
<div class="card" id="c3" style="width: 18rem;">
  <img class="card-img-top" src="Images/transaction.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Instant Money Transfer</h5>
    <p class="card-text">Do transaction with the available other's.</p>
    <a href="TransferMoney.php" class="btn btn-primary" id="blink" id="Instant3">Click here</a>
  </div>
</div>
<!--Transaction History-->
<div class="card" id="c4" style="width: 18rem;">
  <img class="card-img-top" src="Images/history.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Check Transaction History</h5>
    <p class="card-text">You can see the transaction histoy with their details and information</p>
    <a href="TransactionHistory.php" class="btn btn-primary" id="blink" id="Instant4">Click here</a>
  </div>
</div>

</div>
</section>
 <footer>
  <div class="singlecol">
    <h3>Contact Us </h3>
    <a href="https://www.vpcscindapur.org/index.php"><span id="icons"><img src="IMG\location.png"></span><p>Provide the Bank Address</p></a>
    <a href="https://www.vpcscindapur.org/index.php"><span id="icons"><img src="IMG\call.png"></span><p>Tel-02141-2566602</p></a>
    <a href="https://www.vpcscindapur.org/index.php#"><span id="icons"><img src="IMG\mail.png"></span><p>unionnationbank@gmail.org</p></a>
    <a href="https://www.vpcscindapur.org/index.php#facebook">  <span id="icons"><img src="IMG\facebook.png"></span><p>facebook</p></a>
    <a href="https://www.vpcscindapur.org/index.php"><span id="icons"><img src="IMG\location.png"></span><p>location</p></a>

  </div>
  <div class="doublecol">
    <ul>
      <li><h3>Featured Links</h3></li>
      <li><a href="index.php">Home</a></li>
      <li><a href="DisplayCustomers.php">Customer Information</a></li>
      <li><a href="TransferMoney.php">Select Customer for transaction</a></li>
      <li><a href="TransactionHistory.php">Transaction History</a></li>
      <li><a href="#">Guidelines</a></li>
  </div>
        <div class="foot"><br/><br/>
          <hr>
        <h6>&copy; 2022 , All rights reserved | Designed By Suraj Kale.BCA Indapur</h6>
        
    </div>
</footer>
</body>
</html>