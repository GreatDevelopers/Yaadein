<?php
$sqlquery  = "SELECT  CONCAT(firstname,"; $sqlquery .= "\" \",";
$sqlquery .= "middlename,"; $sqlquery .= "\" \",";
$sqlquery .= "lastname) AS NAME ,"; 
$sqlquery .= "CONCAT(fatherfirstname,"; $sqlquery .="\" \",";
$sqlquery .= " fathermiddlename,"; 
$sqlquery .= "\" \",";
$sqlquery .= "fatherlastname) AS FNAME ,";
$sqlquery .= "CONCAT(motherfirstname,"; $sqlquery .= "\" \","; 
$sqlquery .= " mothermiddlename,"; 
$sqlquery .= "\" \",";
$sqlquery .= "motherlastname) AS MNAME ,";
$sqlquery .= "classrollno,"; $sqlquery .= "dob,"; 
//$sqlquery .= "address_2,
// if(address_2 !=\"\",'address_2, ', '')";
// if(address_2 !="null")
// {
 // $sqlquery .= "address_2,', '"; 
// }

$sqlquery .= "address";$sqlquery .= "\" \","; 
$sqlquery .= "email,"; $sqlquery .= "mobile,";
$sqlquery .= "comment,"; 
$sqlquery .= "photo,";
$sqlquery .= "branch,";
$sqlquery .= "gender";
$sqlquery .= "  ";
$sqlquery .= "FROM $table ";
$sqlquery .= "where classrollno != ' ' and  ";
$sqlquery .= "branch = '$OneBranch'";

$sqltmp = $sqlquery;

?>
