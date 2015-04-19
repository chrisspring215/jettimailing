<?php

$contact_name_first = $_POST['contact_name_first'];
$contact_name_last = $_POST['contact_name_last'];
$contact_email = $_POST['contact_email'];
$contact_month = $_POST['contact_month'];
$contact_day = $_POST['contact_day'];
$contact_year = $_POST['contact_year'];
$to = 'domelife@gmail.com';
$subject = 'New Red Rock Email Contact:' . $contact_name_last;

$message = 'FIRSTNAME: ' . $contact_name_first . "\n" . 'LAST NAME: ' . $contact_name_last . "\n" . 'EMAIL: ' . $contact_email . "\n" . 'BIRTHDAY: ' . $contact_month . " " . $contact_day . ',' .  $contact_year;

mail ($to, $subject, $message, 'From: ' . $contact_name_last);
header("Location: thankyou.html");

?>


