<?php
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $dbname = "dreambikes";
$conn1 = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname) or die("Unable to connect to database");
$username = $_POST['username'];
$password = $_POST['password'];
$emaid = $_POST['emailid'];
$password_confirm = $_POST['confirmpass'];
$phone = $_POST['phoneno'];
$aadhar = $_POST['aadhar'];
$dl = $_POST['driving'];

if($password != $password_confirm){
    header("Location: sign.php?err=0");
}
else{
$sql1 = "INSERT INTO users(username, email,phoneno,aadhar,driving,password,role) values('$username','$emaid','$phone','$aadhar','$dl','password','user')";
$res = mysqli_query($conn1, $sql1) or die(mysqli_error($conn1));
if($res)
   {
    header("Location: log.php?okay=0");
   }
else
   {
    header("Location: sign.php?error=0");
   }
}
?>