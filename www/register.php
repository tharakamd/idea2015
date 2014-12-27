<?php

$host = "localhost"; // Host name 
$username = "idea_challenge"; // Mysql username 
$password = "Xhallenge0099-123Zx"; // Mysql password 
$db_name = "idea_challenge"; // Database name 
$tbl_name = "register_details"; // Table name 
// Connect to server and select databse.
$con = mysql_connect("$host", "$username", "$password") or die("cannot connect");
mysql_select_db("$db_name") or die("cannot select DB");

// username and password sent from form 

$school_name = $_POST['schoolname'];
$first_student_name = $_POST['firststudent'];
$first_student_email = $_POST['email1'];
$second_student_name = $_POST['secondstudent'];
$second_student_email = $_POST['email2'];
$third_student_name = $_POST['thirdstudent'];
$third_student_email = $_POST['email3'];
$fourth_student_name = $_POST['fourthtudent'];
$fourth_student_email = $_POST['email4'];
$group_leader_mobile = $_POST['number1'];
$mentor_name = $_POST['mentorname'];
$mentor_email = $_POST['email5'];
$mentor_mobile = $_POST['number2'];

if ($_POST['selectleader'] == 1) {
    $group_leader = $_POST['firststudent'];
} else if ($_POST['selectleader'] == 2) {
    $group_leader = $_POST['secondstudent'];
} else if ($_POST['selectleader'] == 3) {
    $group_leader = $_POST['thirdstudent'];
} else {
    $group_leader = $_POST['fourthtudent'];
}



//echo "School Name : ".$school_name;
//echo "First Student Name : ".$first_student_name."\n";
//echo "First Student E-mail : ".$first_student_email."\n";
//echo "Second Student Name : ".$second_student_name."\n";
//echo "Second Student E-mail : ".$second_student_email."\n";
//echo "Third Student Name : ".$third_student_name."\n";
//echo "Third Student E-mail : ".$third_student_email."\n";
//echo "Fourth Student Name : ".$fourth_student_name."\n";
//echo "Fourth Student E-mail : ".$fourth_student_email."\n";
//echo "Group Leader : ".$group_leader."\n";
//echo "Group Leader Mobile : ".$group_leader_mobile."\n";
//echo "Mentor`s Name : ".$mentor_name."\n";
//echo "Mentor`s E-mail : ".$mentor_email."\n";
//echo "Mentor`s Mobile : ".$mentor_mobile;

$sql = "INSERT INTO $tbl_name " .
        "(school_name,first_student_name,first_student_email,second_student_name,second_student_email,third_student_name,third_student_email,fourth_student_name,fourth_student_email,group_leader,group_leader_mobile,mentor_name,mentor_email,mentor_mobile) " .
        "VALUES ('$school_name','$first_student_name','$first_student_email','$second_student_name','$second_student_email','$third_student_name','$third_student_email','$fourth_student_name','$fourth_student_email','$group_leader','$group_leader_mobile','$mentor_name','$mentor_email','$mentor_mobile')";


$sql_result = mysql_query($sql);

if (!$sql_result) {
    die('Could not enter data: ' . mysql_error());
} else {
    mysql_close($con);
    header("location:register_idea_challange.php?status=1");
}
?>
