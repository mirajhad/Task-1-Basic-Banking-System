<?php
include("connection.php");
error_reporting(0);

$id = $_GET['id'];
$query = "DELETE FROM user WHERE ID='$id'";
$data = mysqli_query($con, $query);

if($data)
{
    echo '<script> alert("deleted successfully")</script>';
    header("location:user.php");
    
}

?>