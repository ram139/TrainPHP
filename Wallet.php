<?php include 'config.php'; 


$name=$_SESSION['name'];
$sql = "SELECT * 
		FROM wallet WHERE Username = '$name'";
	
include 'query.php';
$row = mysqli_fetch_array($query);
?>


<html>

    <head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
<div class="limiter">
		<div class="container-login100">
                    
                    <span class="login100-form-title">
					&nbsp &nbsp 	Wallet
			

<tr>
                        <td>Balance:</td>
                        <td><?php echo $row['Balance']; ?></td>
                      </tr>

                      &nbsp
                      &nbsp
                      
                      <a href="Home.php"><b>back</b></a>
                      
                     
                      </span>
                      
		</div>
	</div>  