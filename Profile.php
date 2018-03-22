<?php include 'config.php'; 


$name=$_SESSION['name'];
$sql = "SELECT * 
		FROM users WHERE Username = '$name'";
	
include 'query.php';
$row = mysqli_fetch_array($query);
?>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

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
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="avatar-300x300.png" class="img-circle img-responsive"> </div>
                
                <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
                  <dl>
                    <dt>DEPARTMENT:</dt>
                    <dd>Administrator</dd>
                    <dt>HIRE DATE</dt>
                    <dd>11/12/2013</dd>
                    <dt>DATE OF BIRTH</dt>
                       <dd>11/12/2013</dd>
                    <dt>GENDER</dt>
                    <dd>Male</dd>
                  </dl>
                </div>-->
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
                        <td>D.O.B: </td>
                        <td><?php echo $row['DOB']; ?></td>
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
                        <td><?php echo $row['Password']; ?></td>
                      </tr>
                        
                           
                     
                    </tbody>
                  </table>
                  
                  <a href="Edit.php" class="btn btn-primary">Update Profile</a>
                  <a href="Home.php" class="btn btn-primary">Home</a>
                 
                </div>
              </div>
            </div>
               <!--  <div class="panel-footer">
                        <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                        <span class="pull-right">
                            <a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                            <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                        </span>
                    </div>
            
          </div>
        </div>
      </div>
    </div>-->


