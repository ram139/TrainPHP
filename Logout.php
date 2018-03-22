<?php include 'config.php'; 
echo $_SESSION['name'];
session_destroy(); 
?>

You have logged out. Please
<a href="Login.html"><b>Login</b></a>