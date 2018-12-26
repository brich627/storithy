<?php session_start();

include ("./inc/header.inc.php");

$checkusername=$_SESSION['checkusername'];
$fblank=$_SESSION['fblank'];
$lblank=$_SESSION['lblank'];
$emailblank=$_SESSION['emailblank'];
$usernameblank=$_SESSION['usernameblank'];
$passworkblank=$_SESSION['passwordblank'];

if($checkusername==1)
{
        echo "This username is already taken";
}

if($fblank==1)
{
        echo "Please input First Name";
}

if($lblank==1)
{
        echo "Please input Last Name";
}

if($emailblank==1)
{
        echo "Please input your Email";
}

if($usernameblank==1)
{
        echo "Please input username";
}

if($passwork==1)
{
        echo "Please input passwork";
}

?>





	<div style="width: 600px; margin: 0px auto 0px auto;">
	<table>
		<tr>
                
                <td></td>
                        
                        <td width="40%" valign="top">
				<h2>Sign Up Below!</h2>
				<form action="congrat.php" name="reg" method="POST">
				<input type="text" name="fname" size="25" placeholder="First Name" id="fname"/><br /><br />
				<input type="text" name="lname" size="25" placeholder="Last Name" id="lname"/><br /><br />
				<input type="text" name="username" size="25" placeholder="Username" id="username"/><br /><br />
				<input type="text" name="email" size="25" placeholder="Email" id="email"/><br /><br />
				<input type="password" name="password" size="25" placeholder="Password" id="password"/><br /><br />
				<input type="submit" name="reg" value="Create Account" />
				</form>
			</td>
                        
                        
                       

		</tr>
	</table>
        
           
        
        
<?php include ("./inc/footer.inc.php"); ?>
