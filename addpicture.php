<?php
session_start();

if($_SESSION['username']=="")
{
        header('Location:http://storithy.com/index.php');   
}

include ("./inc/header.inc.php");


$link = mysqli_connect('pdb31.awardspace.net','2908296_encounter', 'aDDN3M9MR2zzE9E', '2908296_encounter');
mysqli_select_db($link, '2908296_encounter');


if($_FILES['uploading']['size']!='0')
{
        $owner=$_SESSION['username'];
        $name=$_FILES['uploading']['name'];
        $data=$_FILES['uploading']['tmp_name'];
        $size=intval($_FILES['uploading']['size']);

        $urlpath="/home/www/storithy.com/public_upload/";
        $newname=tempnam($urlpath, "");
        $url=$urlpath.$name;

        $newfile="INSERT INTO file(name, size, data, created, owner) VALUES('$name', '$size', '$data', NOW(), '$owner')";


        if(mysqli_query($link, $newfile))
        {
                copy($data, $url);
        
                echo "<center>";
                echo "<br>";
                echo "<br>";
                echo "Your file is now uploaded";
                echo "<br>";
                echo "Click <a href='http://storithy.com/showpicture.php'>here</a> if you want to search for your document";
                echo "<br><br> Or <br><br>";
                echo "Click <a href='http://storithy.com/uploadpicture.html'>here</a> to upload a new document";
                echo "</center>";
        }
        else
        {
                echo "<center>";
                echo "<br>";
                echo "<br>";
                echo "Error inserting file ".mysqli_error($link);
                echo "<center>";
        }

}

mysqli_close($link);

include ("./inc/footer.inc.php");
?>
