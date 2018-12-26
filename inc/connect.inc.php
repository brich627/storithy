<?php
$mysql_host = 'fdb24.awardspace.net';
$mysql_user = 'root';
$mysql_pass = 'aDDN3M9MR2zzE9E';
$conn_error = 'could not connect';
$mysql_db = '2908296_encounter';
$con = mysqli_connect($mysql_host, $mysql_user, $mysql_pass);

mysqli_select_db($con, $mysql_db);

//echo 'Connected';

?>
