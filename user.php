<html>
<h1><center><u>ACCOUNT DETAILS</u></center><h1>
	<head>
	<link rel="stylesheet" href="css/style.css">

	<style>
		html, body {
    height: 100%;
					}

	html {
    display: table;
    margin: auto;
		}

	body {
    display: table-cell;
    vertical-align: middle;
	background-image: url("bg1.jpg");
		}

	table{
		font-size:35px;
	}
	table th{
		color:red;
	}
	h1{
		color:red;
	}
	</style>
</head>
<body  bgcolor="lightpink" align="center" >
<?php
include("connection.php");
error_reporting(0);
$query = "SELECT * FROM user";
$data = mysqli_query($con,$query);
$total = mysqli_num_rows($data);

if($total != 0)
{
	?>
	
	<table border="2" align="center">
	<tr>
	<th>ID</th>
	<th>NAME</th>
	<th>ADDRESS</th>
	<th>ACCOUNT NO.</th>
	<th>BALANCE</th>
	<th colspan="2">OPERATION</th>
	
	</tr>
	
	
	<?php
	while($result = mysqli_fetch_assoc($data))
	{
		echo "<tr>
				<td>".$result['id']."</td>
				<td>".$result['name']."</td>
				<td>".$result['address']."</td>
				<td>".$result['account_no']."</td>
				<td>".$result['balance']."</td>
				
				<td><a href='transfer.php?id=$result[id]&name=$result[name]&address=$result[address]&account_no=$result[account_no]&balance=$result[balance]'>Transfer Money</a></td>
				<td><a href='delete.php?id=$result[id]'>Delete Account</a></td>
			</tr>";
	}
}
	else
	{
		echo "";
	}
	?>
	</table>
	

	

</body>
<!-- Footer -->


  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-white" href="index.php">www.Banking.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

	<html>
