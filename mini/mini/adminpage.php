<?php
session_start();
error_reporting(~E_NOTICE);
$username = $_POST['username'];
$password = $_POST['password'];

	if (($username !='root') || ($password !='1234'))
    //if (($username !='thanawat') || ($password !='1234'))
    {
        echo "<script>";
        echo "alert(\"ชื่อเข้าระบบหรือรหัสผ่านไม่ถูกต้อง\");";
       echo "window.history.back()";
        echo "</script>";
        //echo "<h1><center>error login!";
        //header("location:login.php");
    }
    else
    {
        $_SESSION["ses_userid"] = session_id();
        $_SESSION["ses_username"] = $username;
        header("location:detail.php");
        
      
    }