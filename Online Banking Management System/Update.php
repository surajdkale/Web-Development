<?php
include 'Connection.php';

if(isset($_POST['submit']))
{
    $from = $_GET['id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from customers where ID=$from";
    $query = mysqli_query($con,$sql);
    $sql1 = mysqli_fetch_array($query); 

    $sql = "SELECT * from customers where ID=$to";
    $query = mysqli_query($con,$sql);
    $sql2 = mysqli_fetch_array($query);



    
    if (($amount)<0)  
   {
        echo '<script type="text/javascript">';
        echo ' alert("Oops! Negative values cannot be transferred")'; 
        echo '</script>';
    }


  
    
    else if($amount > $sql1['Amount']) 
    {
        
        echo '<script type="text/javascript">';
        echo ' alert("Bad Luck! Insufficient Balance")'; 
        echo '</script>';
    }
    


    else if($amount == 0){

         echo "<script type='text/javascript'>";
         echo "alert('Oops! Zero value cannot be transferred')";
         echo "</script>";
     }


    else {
        
                
                $newbalance = $sql1['Amount'] - $amount;
                $sql = "UPDATE customers set Amount=$newbalance where id=$from";
                mysqli_query($con,$sql);
             

                
                $newbalance = $sql2['Amount'] + $amount;
                $sql = "UPDATE customers set Amount=$newbalance where id=$to";
                mysqli_query($con,$sql);
                
                $sender = $sql1['Name'];
                $receiver = $sql2['Name'];
                $sql = "INSERT INTO baking_spark(Sender, Reciever,Balance) VALUES ('$sender','$receiver','$amount')";
                $query=mysqli_query($con,$sql);

                // if($query){
                //    echo "Data inserted ";
                // }
                // else{
                //   echo "data not inserted";
                // }
                $newbalance= 0;
                $amount =0;
        }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
   

    <style type="text/css">
    	
		button{
			border:none;
			background: #d9d9d9;
		}
	    button:hover{
			background-color:#777E8B;
			transform: scale(1.1);
			color:white;
		}
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
  /*________________________Table__________________________ */
  table{
      border-collapse: collapse;
      background-color: #fff;
      box-shadow: 0 10px 20px 0 rgba(0.0.0.03);
      border-radius: 10px;
      margin: auto;
    }
    th,td{
      border:1px solid #f2f2f2;
      padding: 8px 20px;
      text-align: center;
      color:grey;
    }
    th{
      text-transform: uppercase;
      font-weight: 500;
    }
    td{
      font-size: 16px;
    }
    .email-style{
      font-size: 14px;
      color: grey;
      display: inline-block;
      background:#f2f2f2;
      -webkit-border-radius:2px;
      -moz-border-radius:2px;
      border-radius:2px;
      line-height: 30px;
      padding: 0 14px;
    }
    .post-class{
      text-transform: uppercase;
    }
    .fa{
      font-size: 18px;
    }
    .fa-pencil-square-o{color:#63c76a;}
    .fa-trash{color:#ff0000;}
    a{ text-decoration: none;
       display: flex;
       justify-content: center;
     }
  /*-----------------------Footer----------------------------*/
  /*______________Footer_____________*/
    footer{
      
  background-color:  #003366;
  height:auto;
  width: 100%;
  padding-bottom: 20px;
}
.foot{
    color: white;
    text-align: center;
    </style>
}
</head>

<body style="background-color :white;">
 
<!-- Navigation Bar -->

<nav>
  <div><img src="Images/BankLogo.png"></div>
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
        <h2 class="text-center pt-4" style="color : black;">Transaction</h2>
            <?php
                include 'Connection.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM  customers where ID=$sid";
                $result=mysqli_query($con,$sql);
                if(!$result)
                {
                    echo "Error : ".$sql."<br>".mysqli_error($con);
                }
                $rows=mysqli_fetch_assoc($result);
            ?>
            <form method="post" name="tcredit" class="tabletext" ><br>
        <div>
            <table class="table table-striped table-condensed table-bordered">
             
            <div class="center">
      <table>
        <thead>
          <tr>
            <th>SR.NO</th>
            <th>Name</th>
            <th>Email</th>
            <th>Amount Available</th>
           
          </tr>
        </thead>
        <tbody>
          <tr>
                    <td ><?php echo $rows['ID'] ?></td>
                    <td ><?php echo $rows['Name'] ?></td>
                    <td ><?php echo $rows['Email'] ?></td>
                    <td ><?php echo $rows['Amount'] ?></td>
                </tr>
          
        </tbody>
      </table>
  </div>
        </div>
        <br><br><br>
        <label style="color : black;"><b>Transfer To:</b></label>
        <select name="to" class="form-control" required>
            <option value="" disabled selected>Choose</option>
            <?php
                include 'Connection.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM customers where ID!=$sid";
                $result=mysqli_query($con,$sql);
                if(!$result)
                {
                    echo "Error ".$sql."<br>".mysqli_error($con);
                }
                while($rows = mysqli_fetch_assoc($result)) {
            ?>
                <option class="table" value="<?php echo $rows['ID'];?>" >
                
                    <?php echo $rows['Name'] ;?> (Balance: 
                    <?php echo $rows['Amount'] ;?> ) 
               
                </option>
            <?php 
                } 
            ?>
            <div>
        </select>
        <br>
        <br>

            <label style="color : black;"><b>Amount:</b></label>
            <input type="number" class="form-control" name="amount" required>   
            <br><br>
                <div class="text-center" >
            <button class="btn mt-3" name="submit" type="submit" id="myBtn" >Transfer</button>
            <br><br><br><br><br>
            </div>
        </form>
    </div>
    <!-------------------------- Footer ----------------------->
    <footer>
 
        <div class="foot"><br/><br/>
          <hr>
        <h6>&copy; 2022 , All rights reserved | Designed By Suraj Kale.BCA Indapur</h6>
        
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>