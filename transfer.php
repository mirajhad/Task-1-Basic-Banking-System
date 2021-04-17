<?php
include("connection.php");
error_reporting(0);

?>

<?php
if($_POST['submit'])
{
    $id = $_POST['id'];
	$name = $_POST['name'];
	$address = $_POST['address'];
	$account_no = $_POST['account_no'];
	$balance = $_POST['balance'];
	$query=mysqli_query($con,"update user set  name='$name',address='$address',account_no='$account_no', balance='$balance' where id='$id'");
if($query)
{
	echo "<script>alert('Your money successfully transfered, your transaction Id is: MXAJDHHJ27HD ');</script>";
    //header('location:user.php');

	
}
}
?>
<html>
<head>
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
		font-size:20px;
	}
	table th{
		color:red;
	}
	h1{
		color:red;
	}
	</style>
<title>REGISTRATION FORM</title>
<center>
<body>
<table border="2" align="center">
<form name="registration" method="POST" action="">
<!-- we will create registration.php after registration.html -->
<center><h1><u>Transfer Money</u></h1></center>
<tr>
<th>ID</th>
<td><input type="text" name="id" value="<?php echo $_GET['id']; ?>"/></br></td>
</tr>
<tr>
<th>NAME:</th>
<td><input type="text" name="name" value="<?php echo $_GET['name']; ?>"/></br></td>
</tr>

<tr>
<th>ADDRESS:</th>
<td><input type="text" name="address" value="<?php echo $_GET['address']; ?>"/></br></td>
</tr>
<tr>
<th>ACCOUNT NO</th>
<td><input type="" name="account_no" value="<?php echo $_GET['account_no']; ?>"/></br></td>
</tr>
<tr>
<th>ENTER AMOUNT</th>
<td><input type="text" name="balance" value="<?php echo $_GET['balance']; ?>"/></br></td>
</tr>

<tr>
<th><input type="submit" name="submit" value="Transfer"></th>
<td><a href="user.php">View Transaction</a></td>
</tr>
</form>

</table>
</body>
</center>
</head>
</html>