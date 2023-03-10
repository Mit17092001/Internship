<?php 
    session_start();
    if(isset($_SESSION["name"]))
    ?>
        

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
                margin-left: 600px;
                margin-top: 11px;           
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
            .dot 
            {
                cursor: pointer;
                height: 15px;
                width: 15px;
                margin: 0 2px;
                background-color: #bbb;
                border-radius: 50%;
                display: inline-block;
                transition: background-color 0.6s ease;
            }
            #active, .dot:hover 
            {
                background-color: #717171;
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
                margin-top: 160px;
                margin-left: auto;
                margin-right: auto;
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
        <!-- <script>
            function showHint(str) 
            {
                if (str.length == 0) 
                {
                    document.getElementById("txtHint").innerHTML = "";
                    return;
                }   
                else    
                {
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function() {
                    
                        if (this.readyState == 4 && this.status == 200) 
                        {
                            document.getElementById("txtHint").innerHTML = this.responseText;
                        }
                    }
                    xmlhttp.open("GET", "gethint.php?q="+str, true);
                    xmlhttp.send();
                }
            }
        </script> -->
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
        <table id="table">
            <tr>
                <td><a href="Plumber.php">Plumber</a></td>
                <td><a href="Electrician.php">&nbsp &nbsp  Electrician &nbsp &nbsp</a></td>
                <td><a href="mechanic.php">mechanic</a></td>
            </tr>
            <tr>
                <td><a href="mason.php">&nbspmason&nbsp</a></td>
                <td><a href="security-Guard.php">Security-Guard</a></td>
                <td><a href="gardner.php">&nbspgardener</a></td>
            </tr>
        </table>
        <div style="text-align:center">
            <a href="home.php"><span class="dot" id="active" onclick="currentSlide(1)"></span> </a>
            <a href="home2.php"><span class="dot" onclick="currentSlide(2)"></span> </a>
        </div>
        
    </body>
</html>