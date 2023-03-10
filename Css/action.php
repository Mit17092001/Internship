<html>
    <head>
        <title>home page</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            body 
            {
                margin: 0;
                font-family: Arial, Helvetica, sans-serif;
                background-image: url("pro.jpg");
                background-repeat: no-repeat;
            }
            .nav-bar
            {
                overflow: hidden;
                background-color: #333;
            

            }
            .hov a:hover 
            {
                color: #000;
                background-color: #ddd;

            }
            .nav-bar a
            {
                color: #ddd;
                text-align: center;
                float: left;
                text-decoration: none;
                padding: 14px 16px;
                font-size: 17px;
            }
            .nav-bar a.active
            {
                background-color: rgb(22, 120, 177);
                color: white;
            }
            .nav-bar a.img
            {
                float: right;  
                max-height:10px;
                
                padding-top:5px;
            }
            .nav-bar .search-bar
            {
                
                margin-top: 11px;
                margin-left:600px;
                
            }
            td a
            {
                border-style: outset;
                border-width: 10px;
                padding: 50px;
                line-height: 180px;
                margin-right: 50px;
                border-color: rgb(22, 120, 177);
                background-color:  rgba(22, 120, 177, 0.5);
                text-align: center;
                text-decoration: none;
                color: #026129;
                font-size: 30px;
        
            }
            .lo .lo
            {
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
            td a:hover
            {
                border-style: inset;
                border-width: 10px;
                padding: 50px;
                line-height: 180px;
                margin-right: 50px;
                border-color: rgb(120, 00, 120);
                background-color:  rgba(120, 00, 120, 0.5);
                text-align: center;
                text-decoration: none;
                color: #ddd;
                font-size: 30px;
        
            }

            #table
            {
                margin-top: 200px;
                margin-left: 550px;
            }
            h1
            {
                margin-top: 300px;
                margin-left: 450px;
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
        </style>
    </head>
    <body>
        <div class="nav-bar">
            <a class="img" href="about.php" ><img src="LOGO.jpg"></a>
            <div class="hov">
                <a class="active" href="home.php">Home</a>
                <a href="about.php">about</a>
                <a href="contact.html">Contact us</a>
                <a href="prof.php">Profile</a> 
            </div>
            <div class="search-bar">
                <form method="POST" action="action.php">
                    <input type="text" placeholder="search" name="search" >
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
            <div class="lo">
                <a href="logout.php"><button class="lo">Logout</button></a>
            </div>
       
        <?php 
            include("conf.php");
            $d=$_POST['search'];
            $sql="SELECT * FROM `profile` WHERE `profile`='$d';";
            $op=mysqli_query($conn,$sql);
            $row=mysqli_fetch_assoc($op);
            if(mysqli_num_rows($op)>=1)
            {
                $name=$d;
        ?>
        <table id="table">        
            <tr><td><a href="<?php echo $d;?>.php"><?php echo $d;?></a></td></tr>
        </table>
        <div class="err">
            <?php }
            else
            {
                ?><h1> Sorry, no professionals available </h1>
            <?php }?>     
        </div>
    </body>
</html>