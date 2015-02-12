<?php

$contact_name = $_POST['contact_name'];
$contact_email = $_POST['contact_email'];
$contact_month = $_POST['contact_month'];
$contact_day = $_POST['contact_day'];
$contact_year = $_POST['contact_year'];
$to = 'chris@spring215.com';
$subject = 'New Email Contact:' . $contact_name;

$message = 'CONTACT NAME: ' . $contact_name . "\n" . 'EMAIL: ' . $contact_email . "\n" . 'BIRTHDAY: ' . $contact_month . " " . $contact_day . ',' .  $contact_year;

mail ($to, $subject, $message, 'From: ' . $contact_name);
header("Location: thankyou.html");

?>


