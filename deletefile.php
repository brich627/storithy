<?php
session_start();

if($_SESSION['username']=="")
{
        header('Location:http://storithy.com/index.php');   
}

include ("./inc/header.inc.php");

?>

<form action="deletefile.php" method="POST">

<?php
$link = mysqli_connect('pdb31.awardspace.net','2908296_encounter', 'aDDN3M9MR2zzE9E', '2908296_encounter');
mysqli_select_db($link, '2908296_encounter');


print "&nbsp; &nbsp; &nbsp; &nbsp;";


print "&nbsp; &nbsp; &nbsp; &nbsp;";

$auser=$_SESSION['username'];
showdoc($auser);


print "<br><br><br><br><br><br>";

print "<input type=\"submit\" name=\"sub\" value=\"DELETE\"> &nbsp;";



function file_delete($textname)
{

        $link = mysqli_connect('pdb31.awardspace.net','2908296_encounter', 'aDDN3M9MR2zzE9E', '2908296_encounter');
        mysqli_select_db($link, '2908296_encounter');
        
        
        $query = "DELETE FROM file WHERE name='$textname'";
        $result = mysqli_query($link, $query) or die('Query failed: ' . mysqli_error());
        
        unlink("storithy.com/public_upload".$row['name']);
        print "The file has been deleted";
                 

}

function showdoc($owner)
{
        $link = mysqli_connect('pdb31.awardspace.net','2908296_encounter', 'aDDN3M9MR2zzE9E', '2908296_encounter');
        mysqli_select_db($link, '2908296_encounter');

        $query= "SELECT * FROM file WHERE owner='$owner'";
        $result = mysqli_query($link, $query) or die('Query failed: ' . mysql_error());

 if($result)
 {

        print "<br>";

        if(mysqli_num_rows($result)==0)
        {
                print "There are no files";
        }
        else
        {

                print "<br>";;
                print "<table border='5'>";
                print "<tr>";
                print "<th></th>";
                print "<th>Name</th>";
                print "<th>Created on</th>";
                print "</tr>";


                while($row=mysqli_fetch_assoc($result))
                {
                        print "<tr>";
                        print "<td><input type='radio' name='pick' value='{$row['name']}'></td>";
                        print "<td>{$row['name']}</td>";
                        print "<td>{$row['created']}</td>";
                        print "</tr>";

                }
                print "</table>";
        }

 }

        mysqli_free_result($result);

}

if(isset($_POST['pick']))
{
        $p=$_POST['pick'];

        file_delete($p);

}

        mysqli_close($link);

?>

</form>
<br>
<br>

<a href="showpicture.php">Return</a>

<?php include ("./inc/footer.inc.php"); ?>