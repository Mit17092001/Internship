<?php
    session_start();
    if(isset($_SESSION['name']))
    unset($_session['name']);
    unset($_session['password']);
    header("location:index.php");
?>

