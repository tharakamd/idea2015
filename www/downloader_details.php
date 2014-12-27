<?php

$host = "localhost"; // Host name 
$username = "root"; // Mysql username 
$password = ""; // Mysql password 
$db_name = "idea_challenge"; // Database name 
$tbl_name = "download_details"; // Table name 
// Connect to server and select databse.
mysql_connect("$host", "$username", "$password") or die("cannot connect");
mysql_select_db("$db_name") or die("cannot select DB");

// username and password sent from form 
$name = $_GET['name'];
date_default_timezone_set ("Asia/Colombo");

echo $name;

$date_time = date('l\, F jS\, Y - H:i:s ', time());

$sql = "INSERT INTO $tbl_name ".
        "(name,date_time) ".
        "VALUES ('$name','$date_time')";

$sql_result = mysql_query($sql);

if(!$sql_result )
{
  die('Could not enter data: ' . mysql_error());
}else{
  echo 'sucess';
}



?>

