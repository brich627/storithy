<?php

session_start();

$link = mysqli_connect('pdb31.awardspace.net','2908296_encounter', 'aDDN3M9MR2zzE9E', '2908296_encounter');
mysqli_select_db($link, '2908296_encounter');

$username=$_POST['user_login'];
$password=$_POST['password_login'];

//$login="SELECT * FROM users WHERE username='$username' AND password='$password'";

$checklogin=mysqli_query($link, "SELECT * FROM users WHERE username ='$username' AND password = '$password'");

$count=mysqli_num_rows($checklogin);

if($count==1)
{
        $_SESSION['username']=$username;
        $_SESSION['wrong_password']=0;
        
        header('Location:http://storithy.com/home.php');
}
else
{
        $message="Either wrong Username or Password was enter. If you do not have an account, you can register for an account free.";
        $_SESSION['wrong_password']=1;
        header('Location:http://storithy.com/index.php');
        
}












?>