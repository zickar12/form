<?php
if(isset($_POST['submit'])){
    $to = "anze.zickar123@gmail.com"; // Enter your email address here
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $subject = "New Contact Form Submission";
    
    $mailBody = "Name: ".$name."\nEmail: ".$email."\nMessage: ".$message;
    
    mail($to, $subject, $mailBody);
    
    echo "Thank you for your message. We will get back to you soon.";
}
?>
