<?php include ("./inc/header.inc.php"); ?>
<html>
<head>
</head>

<br>
<br>
<br>

<center><form action="signuppage.php" METHOD="POST" NAME="c_account">
First Name:
<input TYPE="text" NAME="first" ID="first" MAXLENGTH="20">
<br>
Last Name:
<input TYPE="text" NAME="last" ID="last" MAXLENGTH="20">
<br>
<br>
username:
<input TYPE="text" NAME="username" ID="u_name" MAXLENGTH="20">
<br>
<br>
Email:
<input TYPE="text" NAME="email" ID="email" MAXLENGTH="20">
<br>
<br>
Password:
<input TYPE="password" NAME="password" ID="password" MAXLENGTH="10">
<br>
<br>
<br>
<input TYPE="submit" NAME="give_info" VALUE="Submit">



</form></center>

<?php


$link=mysql_connect('fdb24.awardspace.net', '2908296_encounter', 'aDDN3M9MR2zzE9E') or die('Could not connect:'.mysql_());
mysql_select_db('2908296_encounter');
$first=isset($_POST['first']);
$last=isset($_POST['last']);
$u_name=isset($_POST['username']);
$email=isset($_POST['email']);
$passw=isset($_POST['password']);


if(!$first)
{
        //print "You forgot to type in your first name";
        print "<br>";
}

if(!$last)
{
        //print "You forgot to type in your last name";
        print "<br>";
}

if(!$u_name)
{
        //print "You forgot to type in your username";
        print "<br>";
}

if(!$email)
{
        //print "You forgot to type in email";
        print "<br>";
}

if(!$passw)
{
        //print "You forgot to type in password";
        print "<br>";
}

//The code below will enter the  new user
$new="INSERT INTO list(id, username, first_name, last_name, email, password, sign_up_date, activated) VALUES(AUTO_INCEREMENT, '$u_name', '$first', '$last', '$email', '$passw', CURDATE(), )";

if(!mysql_query($new))
{
        die('Error:'.mysql_error());
}
elseif($first)
{
        if($last)
        {
                if($u_name)
                {
                        if($passw)
                        {
                                header("Location: http://congrat.php");

    exit;
                        }
                }
        }
}


?>



</html>
<?php include ("./inc/footer.inc.php"); ?>

