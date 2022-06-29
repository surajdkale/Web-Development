
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" />
  <link rel="stylesheet" type="text/css" href="DisplayCustomers.css">
</head>
<body>
  <nav>
  <div><img src="Images/BankLogo.png"></div>
 <ul>
   <li><a href="index.php">Home</a></li>
   <li><a href="DisplayCustomers.php">Customers Info</a></li>
   <li><a href="TransferMoney.php">Select Customer</a></li>
    <li><a href="TransactionHistory.php">Transaction History</a></li>  
 </ul>

</nav>

<div class="main">
  <h1>Select Customer to transfer Money</h1>
  <div class="center">
      <table>
        <thead>
          <tr>
            <th>SR.NO</th>
            <th>Name</th>
            <th>Email</th>
            <th>Amount Available</th>
           <th colspan="2">Operations</th>
          </tr>
        </thead>
        <tbody>
            <?php 
            include('Connection.php');

            $selectquery=" select * from customers";

            $query=mysqli_query($con,$selectquery);

            $num=mysqli_num_rows($query);

            while($data=mysqli_fetch_array($query)){
              ?>

          <tr> 
            <td><?php echo $data['ID'];?></td>
            <td><?php echo $data['Name'];?></td>
            <td><span class="email-style"><?php echo $data['Email'];?></span></td>
            <td><?php echo $data['Amount'];?></td>
            <td><a href="Update.php?id=<?php echo $data['ID'];?> " data-toggle="tooltip" data-placement="top" title="Click to Transfer Money">
              Transfer</a></td>
          </tr>
          <?php
            }
            ?>
          
        </tbody>
      </table>
  </div>
</div>
 
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
</body>
</html>