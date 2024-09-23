<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Normally, you would send an email or save the data to a database here.
    echo "<h1>Thank you for your message, $name!</h1>";
    echo "<p>We will get back to you at <strong>$email</strong>.</p>";
    echo "<p>Your message: $message</p>";
    echo "<a href='contact.php'>Back to Contact Form</a>";
} else {
    header("Location: contact.php");
    exit();
}
?>
