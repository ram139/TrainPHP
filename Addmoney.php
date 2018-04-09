<?php include 'config.php'; 
$name=$_SESSION['name'];
$sql="UPDATE wallet SET Balance=Balance+100 WHERE Username='$name'";
include 'query.php';
header('Location: Home.php');
?>
