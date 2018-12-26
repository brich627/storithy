<?php session_start();

$link = mysqli_connect('pdb31.awardspace.net','2908296_encounter', 'aDDN3M9MR2zzE9E', '2908296_encounter');
mysqli_select_db($link, '2908296_encounter');
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];


$_SESSION['checkusername']=0;
$_SESSION['fblank']=0;
$_SESSION['lblank']=0;
$_SESSION['emailblank']=0;
$_SESSION['usernameblank']=0;
$_SESSION['passwordblank']=0;
///////////// id code ///////////////////

$id=1;
$double=mysqli_query($link, "SELECT id from users WHERE id='$id'");
$d=mysqli_num_rows($double);

if($d!=0)
{
        while($d!=0)
        {
                $double=mysqli_query($link, "SELECT id FROM users WHERE id ='$id'");
                $d=mysqli_num_rows($double);
                
                if($d==1)
                {
                        $id=$id+1;
                 
                }
                
        
        }
}

///////////// id code ////////////////////

////////////////Check username code////////////
       
$check_username=mysqli_query($link, "SELECT username FROM users WHERE username ='$username'");
$c=mysqli_num_rows($check_username);

if($c==1)
{
        $_SESSION['checkusername']=1;
        header('Location:http://storithy.com/regpage.php');
                       
}
elseif($_POST['fname']=='')
{
       $_SESSION['fblank']=1;
       header('Location:http://storithy.com/regpage.php');
}
elseif($_POST['lname']=='')
{
       $_SESSION['lblank']=1;
       header('Location:http://storithy.com/regpage.php');
}
elseif($_POST['email']=='')
{
       $_SESSION['emailblank']=1;
       header('Location:http://storithy.com/regpage.php');
}
elseif($_POST['username']=='')
{
       $_SESSION['usernameblank']=1;
       header('Location:http://storithy.com/regpage.php');
}
elseif($_POST['password']=='')
{
       $_SESSION['passwordblank']=1;
       header('Location:http://storithy.com/regpage.php');
}
else
{
        //The code below will enter the  new user
        $new="INSERT INTO users(id, username, first_name, last_name, email, password, sign_up_date, activated) VALUES('$id', '$username','$fname', '$lname', '$email', '$password', CURDATE(), NOW() )";
        
} 
/////////////// Check username code ///////////
include ("./inc/header.inc.php"); 

echo "<html>";
echo "<head></head>";
echo "<body>";



if(!mysqli_query($link, $new))
{
        die('Error:'.mysqli_error());
        
}
else
{
        echo "<br><br><br><br><br>";
        echo "<center>";
        echo "<h1> Congratulations!!!! </h1>";
        echo "<br><br>";
        echo "you can now upload and view this websites content. ";
        echo "Click <a href='index.php'>here</a>";
        echo "</center>";
}


mysqli_close($link);


include ("./inc/footer.inc.php");
?>
</body>
</html>