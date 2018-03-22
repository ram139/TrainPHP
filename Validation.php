<?php include 'config.php';

$name = $_GET['uname'];
$pass = $_GET['pass'];

$sql = "SELECT ID FROM users WHERE Username = '$name' and Password = '$pass'";

include 'query.php';


      
      
      $count = mysqli_num_rows($query);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
     

if($count == 1 ){
    session_start();
    $_SESSION['name'] = $name;
    header('Location: Home.php');
    
}else{
    
    header('Location: Invalid.html');
}
?>
