<?php
$err=false;
if(isset($_GET['err'])){
  $err=true;
}
?>

<html>
<head>
    <title>Rent A Bike Sign up</title>
    <link type="text/css" rel="stylesheet" href="./style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
</head>
<body>

    <div class="login-page">
    <div class="image">
        <img src="images/rblogo.png" alt="logo" width="400px" height="400px">
    </div>  
    <div class="form">
    
    <form class="login-form" action="signup.php" method="post">
      <input type="text" name="username" placeholder="username"/>
      <input type="text" name="emailid" placeholder="email id"/>
      <input type="text" name="phoneno" placeholder="phone number"/>
      <input type="text" name="aadhaar" placeholder="aadhar number"/>
      <input type="text" name="driving" placeholder="D.L. number"/>
      <input type="password" name="password" placeholder="password"/>
      <input type="password" name="confirmpass"  placeholder="confirm password"/>
      <?php if($err){?>
        <p style="font-color: red">Password does not match! Please re-enter your password</p>
      <?php } ?>
      <button>Sign Up</button>
      <p class="message">Already have an account? <a href="log.php">Login here</a></p>
    </form>
  </div>
</div>


<script src="login.js"></script>
</body>
</html>