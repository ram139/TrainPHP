<?php include 'config.php'; ?>

<script>
function go() {
window.location.replace("Logout.php",'window','toolbar=1,location=1,directories=1,status=1,menubar=1,scrollbars=1,resizable=1');
self.close()
}
</script>
<head>
  <meta charset="UTF-8">
  <title>Simple, CSS only, responsive menu</title>
  
  <link rel="stylesheet" href="css/reset.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <head>
  <meta name="viewport" content="width=device-width">
</head>

<form>
<div class="wrap">
<span class="decor"></span>
<nav>
  <ul class="primary">
    <li>
      <a href="Home.php">Home</a>
    </li>
    <li>
      <a href="">Search</a>
      <ul class="sub">
        <li><a href='Timings.php'>Routes</a></li>
      </ul>
    </li>
   
    <li>
      <a href="">Profile</a>
      <ul class="sub">
        
        <li><a href='Profile.php'> View</a></li>
        <li><a href="Edit.php">Change</a></li>
      </ul>  
    </li>
    <li>
      <a href="">Wallet</a>
      <ul class="sub">
        <li><a href="Wallet.php">View</a></li>
        <li><a href="Addmoney.php">Add</a></li>
        
      </ul>  
    </li>
    <li>
      <a href="Book.php">BookTicket</a>
      <ul class="sub">
       <li><a href="History.php" >View History</a></li> 
        
      </ul>  
    </li>
    <li>
      <a href="">Contact us</a>
     </li>
    
   
  </ul>
</nav>
</div>

<div class="imgcontainer">
  <img src="css\Login.jpg" alt="Avatar" class="avatar" >
</div>

</form>

  
</body>



<a href="javascript:go()"><b>Logout</b></a>


