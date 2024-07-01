<?php
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $dbname = "dreambikes";
$conn1 = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname) or die("Unable to connect to database");
$sql1 = "SELECT * FROM booking ";
$result1 = mysqli_query($conn1, $sql1) or die(mysqli_error($conn1));



$sql2 = "SELECT * FROM bikes ";
$result2 = mysqli_query($conn1, $sql2) or die(mysqli_error($conn1));

?>
<html>
<head>
    <title>Rent A Bike</title>
    <link type="text/css" rel="stylesheet" href="./admin.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">    
</head>
<body>
<header class="head">
        <h1><img src="images/home1.png" style="width:80px; height:80px; vertical-align:middle;"/>RENT A BIKE (ADMIN)</h1>
        
    </header>
    <!-- hamburger menu -->
    <div id="sideNav">
            <nav>
            <div id="uli" >
                <ul >
                    <li id="btn" ><a href="#" >HOME</a></li>
                    <li id="btn1" ><a href="#booking">BOOKINGS</a></li>
                    <li id="btn2" ><a href="#vehicle">UPDATE VEHICLE</a></li>
                    <li id="btn3" ><a href="log.php">LOG OUT</a></li> 
                    
                </ul>
                </div>
            </nav>
        </div>
        <div id="menuBtn">
            <img src="images/menu.png" id="menu" onclick="function()">
        
        </div>

        <section id="booking"class="booking">
        <h1 style="text-align: center; padding:5px;" >BOOKINGS</h1>
       
        <table border="2" cellspacing="0" cellpadding="20px" style="color:white ">
            <tr>
                <th>BOOKING ID</th>
                <th>BIKE ID</th>
                <th>USER NAME</th>
                <th>RENT PRICE</th>
                <th>PICK UP DATE</th>
                <th>DROP DATE</th>
                
                </tr>
            <?php
            while($det = mysqli_fetch_assoc($result1)){
                print "<tr><td>";
                echo $det["id"];
                print "</td><td>";
                echo $det["bikeid"];
                print "</td><td>";
                $id = $det["userid"];
                $sql3 = "SELECT * FROM users where id='$id' ";
                $result3 = mysqli_query($conn1, $sql3) or die(mysqli_error($conn1));

                $det1 = mysqli_fetch_assoc($result3);
              
                echo $det1["username"];
                print "</td><td>";
                echo $det["price"];
                print "</td><td>";
                echo $det["pdate"];
                print "</td><td>";
                echo $det["ddate"];
                print "</td></tr>";?>
                 

            <?php }?>

        </table>
        
        </section>
        <section id="vehicle" class="vehicle">
        <h1 style="text-align: center; padding:5px;" >UPDATE VEHICLE STATUS</h1>
       
        <table border="2" cellspacing="0" cellpadding="20px" style="color:white">
            <tr>
                <th>VEHICLE ID</th>
                <th>VEHICLE NAME</th>
                <th>UPDATE STATUS</th>
                <th></th>
                
                </tr>
            <?php
            while($det2 = mysqli_fetch_assoc($result2)){
                print "<tr><td>";
                echo $det2["id"];
                print "</td><td>";
                echo $det2["name"];
                print "</td><td>";
                if($det2["status"] === "available"){
                    $booked = false;
                    $avail = true;
                }else{
                    $booked = true;
                    $avail = false;
                }
                
                ?>
                 <form action="update.php" method="post">
                 <lable>available
                 <input type="radio" value="available" name="status" <?php  if($avail){echo("checked");}  ?>/></lable>
                 <lable>booked

                 <input type="radio" value="booked" name="status" <?php if($booked){echo("checked");}  ?>/></lable>
            <!-- <input type="text" name="status" value="<?php echo $det2["status"]; ?> "></input> -->
                <input type="hidden" value="<?php echo $det2["id"]?>" name="id"></input>
                <?php print "</td><td>";?> 
                <button type="submit">UPDATE</button>
                <!-- <input type="button" value="PICKED UP" onclick="return change(this);" /> -->
                

                </form>
                 <?php print "</td></tr>";

            ?>
            <?php } ?> 
            </table>
        </section>
        <div id="about" class="about">
        <h1 style="text-align: center; padding:5px;" >CONTACT US</h1>
        <div class="footer-container">
        <div class="footbox">
            <h4 style="text-align: center; text-decoration-line: underline ;">RENT A BIKE</h4>
            <h5 style="text-align: center;  padding:0px; color:#d6d6d6;">Privacy Policy</h5>
            <h5 style="text-align: center;  padding:0px; color:#d6d6d6;">Terms & Conditions</h5>
            <h5 style="text-align: center;  padding:0px; color:#d6d6d6;">Payment Methods</h5>
            <h5 style="text-align: center;  padding:0px; color:#d6d6d6;">Earn with us</h5>
        </div>
            <div class="footbox" >
                    <h4 style="text-align: center; text-decoration-line: underline ;  ">FOLLOW US ON</h4>
                    <div class="social">
                    
                   <a href="https://www.facebook.com/" > <h5 style=" padding:0px; color:#d6d6d6;"><img style="width:auto;height:30px; vertical-align:middle;" src="./images/social/facebook.png"></img></a>    FACEBOOK</h5>
                    
                    
                   <a href="https://www.instagram.com/"  ><h5 style=" padding:0px; color:#d6d6d6;"><img style="width:auto;height:30px; vertical-align:middle;"src="./images/social/instagram.png"></img></a> INSTAGRAM</h5>

                   
                   <a href="https://twitter.com/?lang=en " ><h5 style=" padding:0px; color:#d6d6d6;"><img style="width:auto;height:30px; vertical-align:middle;"src="./images/social/twitter.png"></img></a> TWITTER</h5>

                  

                    
                    </div>
            </div>
            <div class="footbox" >
                    <h4 style="text-align: center; text-decoration-line: underline ;">FOR QUERIES</h4>
                   <h5 style=" padding:0px; color:#d6d6d6;"><img style="width:auto;height:30px; vertical-align:middle;"src="./images/social/gmail.png"></img></a> rentabike@gmail.com</h5>
                   <h5 style=" padding:0px; color:#d6d6d6;"><img style="width:auto;height:30px; vertical-align:middle;"src="./images/social/call.png"></img></a> xxxxx - xxxxx</h5>
                   <h5 style=" padding:0px; color:#d6d6d6;"><img style="width:auto;height:30px; vertical-align:middle;"src="./images/social/whatsapp.png"></img></a> +91 xxxxxxxx49</h5>

        </div>
                </div>
                


</div>
        </div>
</body>
<script type="text/javascript" src="index.js">
 
</script>
</html>