<?php
// Check if the form is submitted
if (isset($_POST)) {
    // Retrieve form data and sanitize
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $comment = htmlspecialchars($_POST['message']);
    $date = htmlspecialchars($_POST['date']);
    $time = htmlspecialchars($_POST['time']);
    $gender = htmlspecialchars($_POST['gender']);
    $age = htmlspecialchars($_POST['age']);
    $attend = htmlspecialchars($_POST['attend']);
    $type1 = htmlspecialchars($_POST['type1']);
    $type2 = htmlspecialchars($_POST['type2']);
    $type3 = htmlspecialchars($_POST['type3']);

    // Validate data (you can add more validation as needed)

    // Compose email message
    $to = "amrsamy111@gmail.com"; // Replace with your email address
    $subject = "New Form Submission";
    $messageBody = "
    Name: $name\n  
    Email: $email\n  
    Phone: $phone\n
    Message: $comment\n 
    Date: $date\n
    Time: $time\n
    gender: $gender\n
    age: $age\n
    attend: $attend\n
    type1: $type1\n
    type2: $type2\n
    type3: $type3\n
    ";
    // Send email
    $headers = "From: $email";

    if (mail($to, $subject, $messageBody, $headers)) {
        // Email sent successfully
        echo "Thank";
        header("Location: thanks.php");
        exit();
    } else {
        // Email failed to send
        echo "Oops! Something went wrong, and we couldn't send your message.";
    }
} else {
    // If the form is not submitted, redirect or handle accordingly
    echo "Form not submitted.";
}
?>
