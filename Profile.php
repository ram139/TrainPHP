<?php include 'config.php'; 


$name=$_SESSION['name'];
$sql = "SELECT * 
		FROM users WHERE Username = '$name'";
	
include 'query.php';
$row = mysqli_fetch_array($query);
?>
<head>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

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
<div class="limiter">
		<div class="container-login100">
<div class="container">
      <div class="row">
      <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
      

      </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-heading"><?php echo $row['Username']; ?></h3>
            </div>
            <div class="panel-body">
              <div class="row">
                
               
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      
                      <tr>
                        <td>FirstName:</td>
                        <td><?php echo $row['FirstName']; ?></td>
                      </tr>
                      
                      <tr>
                        <td>LastName:</td>
                        <td><?php echo $row['LastName']; ?></td>
                      </tr>
                      
                      <tr>
                        <td>Sex:</td>
                        <td><?php echo $row['Sex']; ?></td>
                      </tr>
                      
                      
                      
                      <tr>
                        <td>Age: </td>
                        <td><?php echo $row['Age']; ?></td>
                      </tr>
                   
                     <tr>
                        <td>Mobile No: </td>
                        <td><?php echo $row['MobileNo']; ?></td>
                      </tr>    
                      
                        <tr>
                        <td>Address:</td>
                        <td><?php echo $row['Address']; ?></td>
                      </tr> 
                      
                      <tr>
                        <td>Email: </td>
                        <td><?php echo $row['Email']; ?></td>
                      </tr>
                      
                       <tr>
                        <td>Password: </td>
                        <td><?php echo "####"; ?></td>
                      </tr>
                        
                           
                     
                    </tbody>
                  </table>
                  
                  <a href="Edit.php" class="btn btn-primary">Update Profile</a>
                  <a href="Home.php" class="btn btn-primary">Home</a>
                 
                </div>
              </div>
            </div>
               

</div>
		
	</div>   