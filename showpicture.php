<?php 

session_start();

if($_SESSION['username']=="")
{
        header('Location:http://storithy.com/index.php');   
}

include ("./inc/header.inc.php");


$name=$_SESSION['username'];


print "Welcome, ".$name." ";
?>
<html>
<br>
<br>
<!--<a href="http://storithy.com/deletefile.php">Delete a file</a>-->

&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

* <a href="http://storithy.com/uploadpicture.html">return to upload page</a>

&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

* <a href="http://storithy.com/home.php">return to main menu</a>

<br>
<br>

<?php

$link = mysqli_connect('pdb31.awardspace.net','2908296_encounter', 'aDDN3M9MR2zzE9E', '2908296_encounter');
mysqli_select_db($link, '2908296_encounter');


print "&nbsp; &nbsp; &nbsp; &nbsp;";


function alldoc()
{
$link = mysqli_connect('pdb31.awardspace.net','2908296_encounter', 'aDDN3M9MR2zzE9E', '2908296_encounter');
mysqli_select_db($link, '2908296_encounter');

$query="SELECT * FROM file";


$result=mysqli_query($link, "SELECT * FROM file");
$getarray=mysqli_num_rows($result);


        if($getarray==0)
        {
                print "<br>";
                print "<br>";
                print "<center>";
                print "There are no files";
                print "</center>";
        }
        else
        {
                print "<center><table border='5'>";
                print "<th>Name</th>";
                print "<th>Created on</th>";

                while($row=mysqli_fetch_assoc($result))
                {
                        print "<tr>";
                        print "<td>{$row['name']}</td>";
                        print "<td>{$row['created']}</td>";
                        print "<td><a href='http://storithy.com/public_upload/".$row['name']."'TARGET=_BLANK'>Download</a></td>";
                        print "</tr>";

                }
                print "</table></center>";
        }
        

 
        mysqli_free_result($result);
        
        


}



alldoc();

        
mysqli_close($link);



?>
<br>
<br>
</form>
</html>
<?php include ("./inc/footer.inc.php"); ?>