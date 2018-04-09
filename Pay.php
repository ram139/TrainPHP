<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php include 'config.php'; 
$name=$_SESSION['name'];
$doj=$_GET['doj'];
$Tname=$_GET['tname'];
$Source = $_GET['sstat'];
$Destination = $_GET['dstat'];


$sql  = 'INSERT INTO history '.
      '(Date,TrainName,SourceStation,DestinationStation) '."VALUES ('$doj','$Tname','$Source','$Destination')";


$sql1="UPDATE wallet SET Balance=Balance-100 WHERE Username='$name'";




$query1 = mysqli_query($conn, $sql1);
		
include 'query.php'; 

header('Location: Home.php');
?>

