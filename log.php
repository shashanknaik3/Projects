<?php
$err=false;
if(isset($_GET['error'])){
  $err=true;
}
$erro=false;
if(isset($_GET['okay'])){
  $erro=true;
}
?>

<html>
<head>
    <title>Rent A Bike Login</title>
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
          <?php if($erro){?>
                <p style="font-color: red">Signed up successfully! Login here</p>
              <?php } ?>
            <form class="login-form" action="login.php" method="post">
              <input type="text" name="username" placeholder="username"/>
              <input type="password" name="password" placeholder="password"/>
              
              <?php if($err){?>
                <p style="font-color: red">Invalid username or password</p>
              <?php } ?>
              <button>login</button>
              <p class="message">Not registered? <a href="sign.php">Create an account</a></p>
            </form>
          </div>
  </div>


<script src="login.js"></script>
</body>
</html>