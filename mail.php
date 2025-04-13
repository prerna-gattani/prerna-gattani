<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars(trim($_POST["name"]));
    $email   = htmlspecialchars(trim($_POST["email"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    $to      = "prernauxui30@gmail.com"; // Change this to your desired receiver
    $subject = "New Contact Form Submission";
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-type: text/plain; charset=UTF-8\r\n";

    $body = "Name: $name\nEmail: $email\nMessage:\n$message";

    if (mail($to, $subject, $body, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
} else {
    echo "Invalid Request";
}
?>
