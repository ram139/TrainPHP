<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php include 'config.php'; 

$Username=$_GET['Uname'];
$Fname = $_GET['Fname'];
$Lname = $_GET['Lname'];
$Sex = $_GET['sex'];
$Age = $_GET['Age'];
$Mno = $_GET['Mno'];
$Add = $_GET['Add'];
$Email = $_GET['email'];
$psw = $_GET['psw'];

$sql  = 'INSERT INTO users '.
      '(Username,FirstName,LastName,Sex,Age,MobileNo,Address,Email,Password) '."VALUES ('$Username','$Fname','$Lname','$Sex','$Age','$Mno','$Add','$Email','$psw')";

$sql1  = 'INSERT INTO wallet '.
      '(Username,Balance) '."VALUES ('$Username',100)";

$query1 = mysqli_query($conn, $sql1);
		
include 'query.php'; 

header('Location: Successful.html');
?>
