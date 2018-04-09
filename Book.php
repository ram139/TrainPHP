<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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

<body>

<form method="get" action="Pay.php">   
    
    
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
    <input type="date" placeholder="Date of journey" name="doj" required>
    <button type="submit" >Submit</button>
 </form>      
    
        
        
</body>
</html>