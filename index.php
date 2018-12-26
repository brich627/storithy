<?php 
session_start();
                
include ("./inc/header.inc.php"); 

echo $password_check;

 $password_check=$_SESSION['wrong_password'];
                if($password_check==1)
                {
                        
                echo "<font color=red>Either wrong Username or Password was enter.
                If you do not have an account, you can register for an account free.</font>";
                }

?>



	<div style="width: 600px; margin: 0px auto 0px auto;">
        
        
	<table>
		<tr>

			<td width="160%" valign="top">
				<h2>Already a member? Sign in below! </h2>
				<form action="checklogin.php" method="POST">
					<input type="text" name="user_login" size="25" placeholder="Username" id="username"/><br /> <br />
					<input type="password" name="password_login" size="25" placeholder="Password" id="password"/><br /> 
					<input type="submit" name=login" size="25" placeholder="Login"/><br /><br />
			</td>
			<td width="40%" valign="top">
				<h2>Not a member? Click <a href="regpage.php">Here</a></h2>
			</td>
                        
                        

		</tr>
	</table>
        
           
        <br><br><br><br><br><br>


	
        
<?php include ("./inc/footer.inc.php"); ?>
