<!--Session-->
<?php  
session_start();  
if(!isset($_SESSION["user"]))
{
 header("location:login/login.php");
}

?> 
<!--/End Session-->