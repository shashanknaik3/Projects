<?php
session_start();
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $dbname = "dreambikes";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname) or die("Unable to connect to database");
$username = $_POST['username'];
$password = $_POST['password'];



$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password' ";
$result = mysqli_query($conn, $sql) or die(mysqli_error());
$numrows = mysqli_num_rows($result);
$sess = mysqli_fetch_assoc($result);
if($numrows > 0)
   {
      if($sess['role']==="user"){
      $_SESSION['id']=$sess['id'];
    header("Location: index.php");
      }
      else{
         header("Location:admin.php");
      }
   }
else
   {
    header("Location: log.php?error=0");
   }
?>