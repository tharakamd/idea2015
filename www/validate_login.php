<?php

session_start();

$host = "localhost"; // Host name 
$username = "idea_challenge"; // Mysql username 
$password = "Xhallenge0099-123Zx"; // Mysql password 
$db_name = "idea_challenge"; // Database name 
$tbl_name = "idea_challenge_login"; // Table name 
// Connect to server and select databse.
mysql_connect("$host", "$username", "$password") or die("cannot connect");
mysql_select_db("$db_name") or die("cannot select DB");

// username and password sent from form 
$myusername = $_POST['username'];
$mypassword = $_POST['password'];

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$sql = "SELECT username,password FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$result = mysql_query($sql);

// Mysql_num_row is counting table row
$count = mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if ($count == 1) {

    session_regenerate_id(true);
    $_SESSION['username']=$myusername;
    $_SESSION['timestamp']=time();
    session_write_close();
    
	header("location:download.php");
	
} else {
    header("location:download_index.php");
}
?>
