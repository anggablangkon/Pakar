<?php

    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
        $name = strip_tags(trim($_POST["name"]));
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $message = trim($_POST["message"]);

        // ================================================================================
        // =================== Update this to your desired email address. =================
        // ================================================================================
        $recipient = "hello@example.com";

        // Set the email subject.
        $subject = "New contact from $name";

        // Build the email content.
        if($name !=""){ $email_content = "Name: $name\n"; }
        if($email !=""){ $email_content .= "Email: $email\n"; }
        if($message !=""){ $email_content .=  "Message: \n$message\n"; }

        // Build the email headers.
        $email_headers .= "From: $name <$email>";

        mail($recipient, $subject, $email_content, $email_headers);
    } 
?>