<?php

$host = "localhost";
$username = "root";
$password = "satwant";
$dbname = "Yaad";
mysql_connect($host, $username, $password) 
    or die("cannot connect to database\n");
mysql_select_db($dbname) or die(mysql_error());

$stm = "SELECT * FROM student";

$result = mysql_query($stm)
    or die(mysql_error());



while ($row = mysql_fetch_assoc($result)) {
    echo "convert ";
    echo "/var/www/html/Yaad/Yaadein/uploads/activity_images/resized/",$row['photo'];
    echo " ";
    echo "/var/www/html/Yaad/Yaadein/uploads/activity_images/resized/S2014",$row['classrollno'];
    echo ".png";
    echo "\n";
}

mysql_close();

?>
