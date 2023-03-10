<!DOCTYPE html>
<html>
  <head>
    <style>
      h1{
        text-align: center;
        margin-top:10px;
        color:rgb(255,255,0);
        
      }
      .ok{
        margin-top:30px;
        margin-left:500px;
        border-style:ridge;
        border-color:#fff;
        border-width:10px;
        margin-right:500px;
        padding-top:10px;
        height:350px;
        padding-left:10px;
        padding-right:10px;
        background-color: rgba(20,20,20,0.8);
        color:rgb(255,6,140);
      }
      body{
        font-family: Arial,Helvetica,sans-serif;
        background-image: url("circle.jpg");
      }
      #table{
        font-size: 20px;
      }
      .php{
        padding-top : 5px;
        color: #fff;
        text-shadow:1px 1px red;
        font-size: 20px;
      }
      </style>
</head>
<body>
<h1>Insert Data Here</h1>
<div class="ok">
<form method="post" action="">
    <table id="table">
        <tr>
<td>Name:</td><td> <input type="text" name="name" required></td></tr>
<tr>
<td>email:</td><td> <input type="text" name="email" required></td></tr>
<tr>
<td>Passsword:</td><td> <input type="password" name="password" required></td></tr>
<tr>
<td>Role:</td><td><select name="role"><option value="3">customer</option><option value="2">professional</option></td></tr>  
</table>
<br>

<input type="submit" name="submit" value="submit">
</form>
<p>Already registered</p>
<a href="index.php"><button>Go to login page</button></a>
<div class="php">
<?php
include "conf.php";
if (isset($_POST['submit'])) 
{
    $name=$_POST['name'];
    $email = $_POST['email'];

    $password = $_POST['password'];

    $role=$_POST['role'];
    $hql="SELECT * from `user` where `e-mail`='$email';";
    $op=mysqli_query($conn,$hql);

    if(mysqli_num_rows($op)==0)
    {
      $sql = "INSERT INTO `user`(`name`,  `e-mail`, `password`,`Role` ) VALUES ('$name','$email','$password','$role')";

      $result = $conn->query($sql);
//$r=mysqli_fetch_assoc($result);
     

      if ($result == TRUE) 
      {
        echo "New record created successfully.";
      }

      $conn->close(); 
    }
    else
    {
      echo "<br>";
      echo "Email already exist. Go to login page.";
    }
  }
 
  ?>
  </div>
    </div>
</body>
</html>
