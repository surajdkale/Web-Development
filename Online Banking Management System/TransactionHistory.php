<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
   <style type="text/css">
             /*______________NAVBAR_____________________________*/
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
  /*___________END OF NAVBAR___________________________*/
   </style>
</head>

<body style="background-color : white;">
<!-- Navigation Bar -->

<nav>
  <div><a href="index.php"><img src="Images/BankLogo.png"></a></div>
 <ul>
  <li><a href="index.php">Home</a></li>
   <li><a href="DisplayCustomers.php">Customers Info</a></li>
   <li><a href="TransferMoney.php">Select Customer</a></li>
    <li><a href="TransactionHistory.php">Transaction History</a></li>  
 </ul>

</nav>
<section class="banner"></section>

<!-- End of Navigation Bar -->

	<div class="container">
        <h2 class="text-center pt-4" style="color : black;">Transaction History</h2>
        
       <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered">
        <thead style="color : black;">
            <tr>
                <th class="text-center">S.No.</th>
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Date & Time</th>
            </tr>
        </thead>
        <tbody>
        <?php

            include 'Connection.php';

            $selectquery=" select * from baking_spark";

            $query=mysqli_query($con,$selectquery);

            $num=mysqli_num_rows($query);

            while($data=mysqli_fetch_array($query)){
        ?>

            <tr style="color : black;">
            <td class="py-2"><center><?php echo $data['ID']; ?></center></td>
            <td class="py-2"><center><?php echo $data['Sender']; ?></center></td>
            <td class="py-2"><center><?php echo $data['Reciever']; ?></center></td>
            <td class="py-2"><center><?php echo $data['Balance']; ?></center> </td>
            <td class="py-2"><center><?php echo $data['Date']; ?></center> </td>
                
        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
</div>
<footer class="text-center mt-5 py-2">
           <h6>&copy; 2022 , All rights reserved | Designed By Suraj Kale.BCA Indapur</h6>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>