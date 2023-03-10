<?php
session_start();
?>
<html>
    <head>
        <style>
            body{
                margin:0px;
                background-color:#000;
                font-family: Arial, Helvetica, sans-serif;
                color:#fff;
                text-decoration:none;  
            }
            .nav a
            { 
                font-family: Arial, Helvetica, sans-serif;
                color:#fff;
                text-decoration:none;  
                text-align: center;
                font-size:17px;
                padding: 19px 28px;
            }
            .nav a:hover
            {
               
                text-align: center;
                background-color: #000;  
                font-size:17px;
                padding: 19px 28px;
                
            }
            .nav 
            {
                background-color: rgba(255,255,255,0.2);
                overflow: hidden;
                width: 100px;
                height: 100%;
            }
            p{
                color:#fff;
            }
            .main div
            {
                float:left;
                clear:none;
            }
            .pro{
                margin-left:450px;
                margin-top:25px;
                max-width: 300px;
                max-height:500px;
                text-align: center;
                font-family: arial;
                border-color: #eee;
                border-style: ridge;
                border-width:10px;
                padding-top:10px;
                padding-left:20px;
                padding-right:20px;
                height:600px;
                background-color:#222;
            }
            img
            {
                border-style:ridge;
                border-color:#fff;
                border-width:5px;
                border-radius:50%;
               
            }
            .nav a.active
            {
                text-align: center;
                background-color: #000;  
                font-size:17px;
                padding: 19px 28px;
            }
            .lo .lo{
                float:right;
                background-color:#333;
                color:#fff;
                border-color: #000;
                margin-left:380px;
                padding-left:35px;
                padding-right:35px;
                padding-top:10px;
                padding-bottom:15px;
                border-style: none;
                font-size: 17px;
            }
            .lo .lo:hover{
                color:#fff;
                background-color:#000;
            }
            #table{
                margin-top:20px;
                margin-left:20px;
            }
            
            </style>
    </head> 
    <body>
        <div class="main">
            <div class="nav">
                <br>
                <a href="home.php">Home</a><br><br><br>
                <a href="contact.html">Contact</a><br><br><br>
                <a href="about.php">About</a><br><br><br>
                <a href="prof.php" class="active">Profile</a>
            </div>
            <div class="pro">   
                <img src="avatar.jpg" alt="profile" style="border-color:#fff;">
                    <table id="table">
                        <?php
                        include("conf.php");
                        $email=$_SESSION["e-mail"];
                            $sql="SELECT * from `user` where `e-mail`='$email';";
                            $op=mysqli_query($conn,$sql);
                            $r=mysqli_fetch_assoc($op);
                        ?>
                        <tr><td>Name</td><td>:</td><td><?php echo $r["name"]; ?></td></tr>
                        <tr><td>E-mail</td><td>:</td><td><?php echo $r["e-mail"]; ?></td></tr>
                    </table>
                    <br>
                    <button>Edit Profile</button>
            </div>
            <div class="lo">
                <a href="logout.php"><button class="lo">Logout</button></a>
            </div>
        </div>
    </body>
</html>