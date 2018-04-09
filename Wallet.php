<?php include 'config.php'; 


$name=$_SESSION['name'];
$sql = "SELECT * 
		FROM wallet WHERE Username = '$name'";
	
include 'query.php';
$row = mysqli_fetch_array($query);
?>

<tr>
                        <td>Balance:</td>
                        <td><?php echo $row['Balance']; ?></td>
                      </tr>

                      <a href="Home.php"><b>back</b></a>