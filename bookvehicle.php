<?php
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $dbname = "dreambikes";
$conn1 = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname) or die("Unable to connect to database");
$sql = "SELECT * from bikes";
$res = mysqli_query($conn1, $sql) or die("Unable to fetch");

?>
<html>
<head>
    <title>Rent A Bike</title>
    <link type="text/css" rel="stylesheet" href="./index.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">    
</head>
<body>
    <header class="head">
        <h1><img src="images/home1.png" style="width:80px; height:80px; vertical-align:middle;"/>RENT A BIKE</h1>
        <a href="index.php" class="bookbutton1" style="width: 130px;">HOME</a>

        
    </header>
    <!-- hamburger menu -->
    <div id="sideNav">
            <nav>
            <div id="uli" >
                <ul >
                    <li id="btn" ><a href="index.php" >HOME</a></li>
                    <!-- <li id="btn2" ><a href="#book">BOOK A VEHICLE</a></li>  -->
                    <li id="btn3" ><a href="#about">CONTACT US</a></li>
                    <li id="btn4" ><a href="log.php">LOG OUT</a></li>
                </ul>
                </div>
            </nav>
        </div>
        <div id="menuBtn">
            <img src="images/menu.png" id="menu" onclick="function()">
        
        </div>

        <!-- book a vehicle section -->
        <section id="book"class="book">
        <h1 style="text-align: center; padding:20px;" >BOOK A VEHICLE</h1>
        <div class="book-container">
       
        <?php
                while ($arr = mysqli_fetch_assoc($res)){?>
            <div class="bike">
            <form action="booked.php" method="post">
            
                <?php
                $bi = $arr['id'];
                    $url = "images/".$bi.".jpg"
                ?>
                <img style="width:200px; height:200px; border-radius:5px; border:2px; "src="<?php echo $url?>" alt="bike image">
                <input type="hidden" value="<?php echo $bi;?>" name="bikeid">

                <h4 style="padding:0px;">Vehicle: <?php echo $arr['name'];?></h4>
                <input type="hidden" value="<?php echo $arr['name'];?>" name="vehicle">

                <h4 style="padding:0px;">Rent: ₹<?php echo $arr['pph'];?> per Hour</h4>
                <input type="hidden" value="<?php echo $arr['pph'];?>" name="rents">

                <h4 style="padding:0px;">Status: <?php echo $arr['status'];?></h4>

                <?php if($arr['status']==="available"){?>
                    <label>Select pickup date:</br><input type="datetime-local" style="width:150px" name="pdate" required></input></label></br></br>
                    <label>Select drop date:</br><input type="datetime-local"style="width:150px" name="ddate" required></input></label></br></br>
                <?php } 

                else {  ?>
                 <label>Select pickup date:</br><input type="date" disabled="disabled"style="width:150px" name="pdate"></input></label></br></br>
                <label>Select drop date:</br><input type="date"style="width:150px" name="ddate" disabled="disabled" ></input></label></br></br>
                
                


                <?php } ?>
                <?php
                    if($arr['status']==="available"){?>
                        <button type="submit"class="btn">Book Now</button>
                <?php }
                else{?>
                    <button class="btndis" disabled="disabled" >Book Now</button>
               <?php }?>
                
               

               </form>
            </div>

                    


            <?php } ?>
            
        </div>



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



</body>
<script type="text/javascript" src="index.js"></script>
</html>