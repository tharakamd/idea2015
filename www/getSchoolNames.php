<?php

$host = "localhost"; // Host name 
$username = "idea_challenge"; // Mysql username 
$password = "Xhallenge0099-123Zx"; // Mysql password 
$db_name = "idea_challenge"; // Database name 
$tbl_name = "schoolnames"; // Table name 
// Connect to server and select databse.
mysql_connect("$host", "$username", "$password") or die("cannot connect");
mysql_select_db("$db_name") or die("cannot select DB");

$sql = "SELECT schoolname,district FROM $tbl_name";

$result = mysql_query($sql); 

?>
