<?php
    session_start();
?>
<html>
    <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
             body 
            {
                margin: 0;
                font-family: Arial, Helvetica, sans-serif;
                background-image: url("pro.jpg");
                background-repeat: no-repeat;
            }
            .wel
            {
                text-align:center;
                font-family: arialArial, Helvetica, sans-serif;
                margin-bottom:20px;
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
                margin-left: 600px;
                margin-top: 11px;           
            }
            .body
            {
                border-style: ridge;
                border-color: #333;
                border-width: 10px;    
                margin-top:200px;
                margin-left:400px;
                margin-right:400px;
              
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
        <div class="body">    
            <div class="wel">
                <?php
                    echo "Welcome professional PM&E is here to make your skills useful.";
                ?>
            </div>
            <div class="Det">
                    
                <form method="post" action="">
                    <table>
                        <tr><td>Name:</td><td> <input type="text" name="name"></td></tr>
                        <tr><td>city:</td><td> <input type="text" name="add"></td></tr>
                        <tr><td> profile:</td><td> <input type="text" name="profile"></td></tr>
                    </table>
                    <br>
                    <h2>Contact Details :</h2>
                    <table>
                        <tr><td>Mobile No.:</td><td><input type="text" name="number"></td></tr>
                        <tr><td>e-mail:</td><td> <input type="text"   name="e-mail" value="<?php echo $_SESSION["e-mail"] ; ?>"></td></tr>
                    </table>
                    <button type="submit" name="submit">submit</button>
                </form>
                <?php
                    include("conf.php");
                    if($_SERVER["REQUEST_METHOD"]=="POST")
                    {
                        
                        $name=$_POST['name'];
                        $address=$_POST['add'];
                        $profile=$_POST['profile'];
                        $mobile=$_POST['number'];
                        $email=$_POST['e-mail'];    
                        $sql="SELECT * FROM `profiles`where `profile`='$profile'";
                        $op=mysqli_query($conn,$sql);
                        $r=mysqli_fetch_assoc($op);
                        if(mysqli_num_rows($op)==1)
                        {
                            $pid=$r['p_id'];
                            $hql="INSERT INTO `profile`(`name`, `profile`, `p_id`, `city`,`e-mail`) VALUES ('$name','$profile','$pid','$address','$email')";
                            $hp=mysqli_query($conn,$hql);
                        }
                        else
                        {
                            $pql="INSERT into `profiles` (`profile`) VALUES ('$profile')";
                            $pp=mysqli_query($conn,$pql);
                            $sql="SELECT * FROM `profiles`where `profile`='$profile'";
                            $sp=mysqli_query($conn,$sql);
                            $t=mysqli_fetch_assoc($sp);
                            $pid=$t['p_id'];
                            $hql="INSERT INTO `profile`(`name`, `profile`, `p_id`, `city`,`e-mail`) VALUES ('$name','$profile','$pid','$address','$email')";
                            $hp=mysqli_query($conn,$hql);
                        }
                      
                    }
                ?>
            </div>
        </div>
    </body>
</html>