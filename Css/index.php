<?php
    session_start();
?>
<html>
    <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <title>
            Login
        </title>
        <style>
            body{
                background-image: url("circle.jpg");
                font-family: Arial,Helvetica,sans-serif;
            }
            h1{
                text-align: center;
                color: rgb(255,255,0);
                margin-top:10px;
            }
            #table{
                margin-top:10px;
                margin-bottom: 10px;
                font-size: 20px;
                color:rgb(255,6,140);   
               
            }
            .button{
                border-color:#000;

            }
            .text{
                border-color:#000;
                border-style: groove;
                margin-top:5px;
            }
            .body{
                margin-top:30px;
                margin-left:500px;
                border-style:ridge;
                border-color:#fff;
                padding-left:10px;
                margin-right:520px;
                padding-bottom: 10px;
                background-color: rgba(20,20,20,0.8);
                border-width: 10px;
                height:350px;
                color: rgb(255,6,140);    
            }
            .php{
                color:rgb(255,255,255);
            }
            
        </style>
    </head>
    <body>
        <h1>Login here to go to home page</h1>
        <div class="body">
        <table id="table">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            
            <tr><td>email:</td><td> <input type="text" name="email" required class="text"></td></tr>
            <tr><td>password:</td><td> <input type="password" name="password" required class="text"></td></tr></table>
            <button id="log" name="Login" value="Login" class="button">Login</button><br>
           <div class="php">
           <?php
            include("conf.php");

if($_SERVER["REQUEST_METHOD"]=="POST")
{   
    $nErr=$pErr="";
    $email=$_POST['email'];
    
    $password=$_POST['password'];
    
    $sql="SELECT * from `user` where `e-mail`='$email'";
    $op=mysqli_query($conn,$sql);
    $r=mysqli_fetch_assoc($op);
if(mysqli_num_rows($op)==1)
{
   if($r['Role']==3 || $r['Role']==1)
   {
        
            if($password == $r['password'])
            {
                $_SESSION["name"]=$r['name'];
                $_SESSION["e-mail"]=$r['e-mail'];
                if(isset($_SESSION['e-mail']))
                {?>
                  
                <?php    header("location:http://localhost/php/Css/home.php");
                }
            }        
            else
            {
                $pErr="**invalid password";
                echo $pErr;     
                echo "<br>"; 
            }
        
        
    }
    else
    {

        $sql="SELECT * FROM `profile` WHERE `e-mail`='$email'";
        $lp=mysqli_query($conn,$sql);
        $y=mysqli_fetch_assoc($lp);
        if(mysqli_num_rows($lp)==1)
        {
            header("location:http://localhost/php/Css/home.php");
        }
        else
        {
            if($name == $r['name'])
            {
                if($password == $r['password'])
                {
                    $_SESSION["name"]=$r['name'];
                    $_SESSION["e-mail"]=$r['e-mail'];
                    if(isset($_SESSION['e-mail']))
                    {
                        header("location:http://localhost/php/Css/home3.php");
                    }
                }        
                else{
                $pErr="**invalid password";
                echo $pErr;     
                echo "<br>"; 
                }
            }
            else
            {
                $nErr="**invalid user-name";
                echo $nErr;
                echo "<br>";
            
            }
        }
    }
}
else
{
    echo "**invalid e-mail";
} 

    /*
    else
    {
        if($password != $r['password'])
        {
            $pErr="*invalid password";
            echo $pErr;      
            echo "<br>";
    
            if($pErr!="")
                {
                    ?>
                    <script>
                        $(document).ready(function(){
                            $('#log').mouseenter(function(){
                                alert("Please enter valid details");
                            })
                        })
                    </script>
                    <?php
                }
            else
                {
                    echo "Details are ok";
                    echo "<br>";
                }
        }
        else
        {
            if($nErr!="" || $pErr!="")
            {
                echo "*Please enter valid details";
                echo "<br>";
            }
            else
            {
                echo "Details are ok";
                echo "<br>";
            }
        }
    }*/
}?>
</div>
        
        </form>
        <br><br>
        <P>New user register First</p>
        <a href="reg.php"><button class="button">Go to Register</button></a>
</div>
    </body>
</html>