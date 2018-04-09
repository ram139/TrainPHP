<?php include 'config.php'; 

$name=$_SESSION['name'];
$Fname = $_GET['Fname'];
$Lname = $_GET['Lname'];
$Age = $_GET['Age'];
$Mno = $_GET['Mno'];
$Add = $_GET['Add'];
$email = $_GET['email'];
$psw = $_GET['psw'];


$sql = "UPDATE users SET FirstName='$Fname',LastName='$Lname',Age='$Age',MobileNo=$Mno,Address='$Add',Email='$email',Password='$psw' where Username='$name'";


include 'query.php';

header('Location: Profile.php');
?>