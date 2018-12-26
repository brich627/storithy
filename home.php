<?php 
session_start();

if($_SESSION['username']=="")
{
        header('Location:http://storithy.com/index.php');   
}


$user=$_SESSION['username'];

include ("./inc/header.inc.php");

echo " Hello, ".$user;
echo  "<br />   <a href='logout.php'>Logout</a>";

?>
<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<br>
<br>
<h2><center>file sharing</center></h2>
<br>
<p><center>...to upload a file click <a href="../uploadpicture.html">here!</a></center></p>
<br>
<p><center>...to view all files click <a href="../showpicture.php">here!</a></center></p>
</body>
</html>
<?php

include ("./inc/footer.inc.php");
?>