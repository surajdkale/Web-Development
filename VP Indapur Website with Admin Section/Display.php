<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" />
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css2?family=Rubik&display=swap');
		*{
			padding: 0;
			margin:0;
			box-sizing: border-box;
			font-family: 'Rubik', sans-serif;
		}
		.main{
			width: 100%;
			height: 120vh;
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
		}
		.center{
			width: 99%;
			height: 95vh;
			background:-webkit-linear-gradient(left,#5DADE2,#00c6ff);
			padding: 20px 0 0 0;
			box-shadow: 0 10px 20px 0 rgba(0.0.0.03);
			border-radius: 10px;
		}
		h1{
			font-size: 18px;
			color: #000;
			text-align: center;
			margin-bottom: 20px;
		}
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
			font-size: 13px;
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
		 button{
		 	color: black;
		 	padding: 20px;
		 	background-color: #b1f0c0;
		 	border: 1px solid grey;
		 	box-shadow: 2px 3px  4px 4px grey;
		 	border-radius: 10px;
		 	margin-right: -1100px;
		 	margin-top: -40px;
		 	margin-bottom: 40px;
		 	transition-duration: 1s;
		 }
		 button:hover{
		 	cursor: pointer;
		 	background-color: white;
		 	color: black;
		 	box-shadow: 2px 3px  4px 4px grey;
		 }
	</style>
</head>
<body>
<div class="main">
	<h1>Admin Database Co-Manager Form</h1>
	<button><a href="After_login_section/img1.php">Home</a></button>
	<div class="center">
			<table>
				<thead>
					<tr>
						<th>SR.NO</th>
						<th>Name</th>
						<th>MobileNo</th>
						<th>Email</th>
						<th>Gender</th>
						<th>Address</th>
						<th>Password</th>
						<th>Confrim password</th>
						<th colspan="2">Operations</th>
					</tr>
				</thead>
				<tbody>
						<?php 
						include('connection.php');

						$selectquery=" select * from relation";

						$query=mysqli_query($conn,$selectquery);

						$num=mysqli_num_rows($query);

						while($data=mysqli_fetch_array($query)){
							?>

					<tr>
						<td><?php echo $data['s'];?></td>
						<td><?php echo $data['Name'];?></td>
						<td><?php echo $data['MobileNo'];?></td>
						<td><span class="email-style"><?php echo $data['Email'];?></span></td>
						<td><?php echo $data['Gender'];?></td>
						<td><?php echo $data['Address'];?></td>
						<td><?php echo $data['Password'];?></td>
						<td><?php echo $data['Con_password'];?></td>
						<td><a href="Update.php?serial=<?php echo $data['s'];?> " data-toggle="tooltip" data-placement="top" title="UPDATE">
							<i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
						<td><a href="Delete.php?serial=<?php echo $data['s'];?> " data-toggle="tooltip" data-placement="top" title="DELETE">
							<i class="fa fa-trash" aria-hidden="true"></i></td>
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