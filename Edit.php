<?php include 'config.php'; 

$name=$_SESSION['name'];

$sql = "SELECT * 
		FROM users WHERE Username ='$name'";
		
include 'query.php';


$row = mysqli_fetch_array($query);
		
?>







<head>
    <link rel="stylesheet" href="css/Signup.css">
</head>
<form action="Update.php" method='get'>
  <div class="container">

    <label><b>First Name</b></label>
    <input type="text" placeholder="First Name" name="Fname" value=<?php echo $row['FirstName']; ?> pattern="[A-Z]{1}[a-z]{1,}" required>

    <label><b>Last Name</b></label>
    <input type="text" placeholder="Last Name" name="Lname" value=<?php echo $row['LastName']; ?> pattern="[A-Z]{1}[a-z]{1,}" required>
    
    
    
    <div style="margin-bottom: 10px;margin-top: 20px;">
        <label><b>Date Of Birth</b></label>
        <input type="date" placeholder="D.O.B" name="Dob" value=<?php echo $row['DOB']; ?> required>
    </div>

    
    <div style="margin-bottom: 10px;margin-top: 20px;">
        <label><b>Age</b></label>
        <input type="number" placeholder="Age" name="Age" min="18" max="120" value=<?php echo $row['Age']; ?>  required>
    </div>
    
   
    
    <div style="margin-bottom: 10px;margin-top: 20px;">
    <label><b>Mobile No</b></label>
    <input type="text" placeholder="Mob No" name="Mno"  pattern="[789]{1}[0-9]{9}" value=<?php echo $row['MobileNo']; ?> required>
    </div>
    
    <div style="margin-bottom: 10px;margin-top: 10px;">
    <label><b>Address</b></label>
    <input type="text" placeholder="Address" name="Add" value=<?php echo $row['Address']; ?> required>
    </div>
    
    
    <label><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" pattern="[a-z]{1}[a-z._]+@[a-z0-9.-]+\.[a-z]{2,3}" value=<?php echo $row['Email']; ?> required>

    <br/>
    <br/>
    
    

     
    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="password" pattern="(?=.*\d)(?=.*[A-Z])(?=.*\W+).{6,}" value=<?php echo $row['Password']; ?> required>

    <label><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="confirm_password" required>
    
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>



    <script>
      var password = document.getElementById("password")
        , confirm_password = document.getElementById("confirm_password");
      
      function validatePassword(){
        if(password.value != confirm_password.value) {
          confirm_password.setCustomValidity("Passwords Don't Match");
        } else {
          confirm_password.setCustomValidity('');
        }
      }
      
      password.onchange = validatePassword;
      confirm_password.onkeyup = validatePassword;
      </script>



    <div class="clearfix">
      <button class="cancelbtn" onclick="location.href='Home.php'">Cancel</button>
      <button type="submit" class="signupbtn">Apply</button>
      
  </div>
  </div>
</form>