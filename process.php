<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["Name"];
    $email = $_POST["Email"];
    $message = $_POST["Message"];

    // You can now use the $email variable to do whatever you need, such as sending it to your email list or storing it in a database.
    
    // For example, you can send the email to yourself:
    $to = "panchalpavan800@gmail.com";
    $subject = "New Contact Form Submission";
    $messageBody = "Name: $name\nEmail: $email\nMessage: $message";

    // Use the mail() function to send the email
    mail($to, $subject, $messageBody);

    // Redirect the user to a thank you page or display a thank you message
    echo "<script>alert('Email send successfully.');</script> ";
    exit();
} else {
    // Handle other HTTP methods (GET, etc.) as needed
    echo "Invalid request method";
}
?>
