<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){

$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$subject = htmlspecialchars($_POST['subject']);
$message = htmlspecialchars($_POST['message']);

$to = "sebindcunjalm10@gmail.com"; // CHANGE THIS

$email_subject = "New Contact Form Submission";

$body = "
Name: $name

Email: $email

Subject: $subject

Message:

$message
";

$headers = "From: $email";

if(mail($to,$email_subject,$body,$headers)){
    echo "<script>
    alert('Message Sent Successfully!');
    window.location='contact.html';
    </script>";
}else{
    echo "<script>
    alert('Failed to send message.');
    window.history.back();
    </script>";
}

}

?>