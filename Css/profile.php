<html>
    <head>
        <style>
            body{
                margin : 0px;
                font-family:Arial, Helvetica, sans-serif;
                background-color: 
            }
            .nav-bar {
                overflow: hidden;
                background-color: #333;           
            }
            .hov a:hover {
                color: #000;
                background-color: #ddd;

            }
            .nav-bar a{
                color: #ddd;
                text-align: center;
                float: left;
                text-decoration: none;
                padding: 14px 16px;
                font-size: 17px;
            }
      
            .nav-bar a.img
        {
            float: right;  
            max-height:10px;
          
            padding-top:5px;
        }
            .data{
                padding-left:20px;
                padding-top:20px;
                border-style:ridge;
                border-color:#447;
                border-width: 20px;
                margin-left:430px;
                margin-right:580px;
                margin-top:10px;
                height:350px;
                background-color:#ddd;
            }
            #table{
                color:#333;
                
            }
            h1{
                text-align:center;
                text-shadow:2px 2px 5px red;
            }
            .lo .lo{
            float:right;
            background-color:#333;
            color:#fff;
            border-color: #333;
            margin-right:20px;
            padding-left:35px;
            padding-right:35px;
            padding-top:10px;
            padding-bottom:15px;
            border-bottom-left-radius: 12px;
            border-bottom-right-radius: 12px;
            border-style: none;
            font-size: 17px;
            
        }
        .lo .lo:hover
            {
                color:red;
            }
        </style>
    </head>
<body>
<div class="nav-bar">
<a class="img" href="about.php" ><img src="LOGO.jpg"></a>
        <div class="hov">
        <a href="home.php">Home</a>
     
        <a href="about.php">about</a>
        <a href="contact.html">Contact us</a>
        <a href="prof.php">Profile</a>        </diV>
</div>
<div class="lo">
            <a href="logout.php"><button class="lo">Logout</button></a>
    </div>
<h1>Details of professional</h1>
<div class="data">
    
    <?php 
  
    include("conf.php");
    if(isset($_GET['id']))
    {
        
         $pno=$_GET['id'];
            $sql="SELECT * FROM `profile` WHERE `No`=$pno";
            $op=mysqli_query($conn,$sql);
            $row=mysqli_fetch_assoc($op);?>
<table id="table">
    <tr>
        <td>  <b>  <?php echo "Name ";?></b></td><td><b><?php echo ":".$row['name'];?></b></td>
    </tr>
    <tr>
        <td>  <b>  <?php echo"e-mail ";?></b></td><td><b> :<?php echo $row['e-mail'];?> </b></td>
    </tr>
    <tr>
        <td>  <b>  <?php echo "works at"; ?></b></td><td><b> : Bhavani electronics </b></td>
    </tr>
    <?php
    }
    ?>
    </div>
</body>
</html>