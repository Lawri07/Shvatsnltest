<?php
$name=$_POST['username'];
$visitor_email = &_POST['email'];
$number = $_POST['number'];
$message = $_POST['comment'];

$email_from = 'lawrencearok007@gmail.com';
    $email_subject ='New Form Submission';
$email_body = "User Name:$name.\n".
                "User Email:$visitor_email.\n"
                "Phn Number:$number\n."
                "User Message:$message\n";

$to ='lawrencearok007@gmail.com';
$headers = "From:$email_from \r\n";    
$headers .="Reply-To:$visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("Location:contactdiv")
    
?>