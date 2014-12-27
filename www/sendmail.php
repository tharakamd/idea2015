<?php

function spamcheck($field) {
    //filter_var() sanitizes the e-mail
    //address using FILTER_SANITIZE_EMAIL
    $field = filter_var($field, FILTER_SANITIZE_EMAIL);

    //filter_var() validates the e-mail
    //address using FILTER_VALIDATE_EMAIL
    if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
        return TRUE;
    } else {
        return FALSE;
    }
}

if (isset($_POST['email'])) {//if "email" is filled out, proceed
    //check if the email address is invalid
    $mailcheck = spamcheck($_POST['email']);
    if ($mailcheck == FALSE) {
        header("location:Contacts.php");
    } else {//send email
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        mail("idea2013uom@gmail.com", "Subject: $subject", $message, "From: $email");

        header("location:Contacts.php?status=1");
    }
} else {//if "email" is not filled out, display the form 
    header("location:Contacts.php");
}
?>
