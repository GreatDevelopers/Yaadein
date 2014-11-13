<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "satwant";
$dbname = "Yaad";
$table= "student";


$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die                     
 ('Error connecting to mysql');

mysql_select_db($dbname);

$result = mysql_query("SELECT * FROM student WHERE (classrollno IS NOT NULL) ORDER BY classrollno ");
$rows = mysql_num_rows($result);
?>
