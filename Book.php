<?php include 'config.php'; 
$sql = 'SELECT * 
		FROM timings';
		
include 'query.php'; 
$query1 = mysqli_query($conn, $sql);
if (!$query1) {
	die ('SQL Error: ' . mysqli_error($conn));
}
$query2 = mysqli_query($conn, $sql);
if (!$query2) {
	die ('SQL Error: ' . mysqli_error($conn));
}
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
			
				
<form method="get" action="Pay.php">   
    <span class="login100-form-title">
					&nbsp &nbsp 	Book a ticket
					  </span>
    
    <div class="wrap-input100 validate-input">
        <h><b>Train Name</b></h>
    <select id="tname" name="tname">
        
            <?php
            while ($row = mysqli_fetch_array($query)) {
            $tname=$row["Train Name"];
                echo "<option>
                    $tname
                </option>";
                
            
           }
            ?>
    
    </select>
        
        
						
					</div>
    
    <div class="wrap-input100 validate-input">
        <h><b>Source</b></h>
    
    <select id="sstat" name="sstat">
        
            <?php
            while ($row = mysqli_fetch_array($query1)) {
            $stat=$row["SourceStation"];
                echo "<option>
                    $stat
                </option>";
                
            
           }
            ?>
    
    </select>
    </div>
    
    
    <div class="wrap-input100 validate-input">
        <h><b>Destination</b></h>
    
      <select id="dstat" name="dstat">
        
            <?php
            while ($row = mysqli_fetch_array($query2)) {
            $stat=$row["DestinationStation"];
                echo "<option>
                    $stat
                </option>";
                
            
           }
            ?>
    
    </select>
        </div>
        
     <div class="wrap-input100 validate-input">
        <h><b>Date of journey     </b></h>
    <input type="date" placeholder="Date of journey" name="doj" required>
    </div>
    
    <b><button type="submit" >Submit</button></b>
    <b><a href="Home.php" >Cancel</a></b>
 </form>      
  
   </div>
		
	</div>     
        
</body>
</html>