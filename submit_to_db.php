<?php
// Establish a connection to your MySQL database
$servername = "your-db-host"; // Replace with your database host
$username = "your-db-username"; // Replace with your database username
$password = "your-db-password"; // Replace with your database password
$dbname = "your-db-name"; // Replace with your database name

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $comment = $_POST['message'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $attend = $_POST['attend'];
    $type1 = $_POST['type1'];
    $type2 = $_POST['type2'];
    $type3 = $_POST['type3'];

    // Build email content
    $field1 = "<b>Appointment Date:</b> " . $date;
    $field2 = "<b>Gender:</b> " . $gender . "<br><b>Age:</b> " . $age . "<br><b>Have you previously attended our facility?:</b> " . $attend;
    $field3 = "<b>Type of appointment:</b> " . $type1 . "," . $type2 . "," . $type3;
    $field4 = "<b>If Yes, state on which condition and when?:</b> " . $comment;

    // You need to handle the email sending part here, and possibly the database insertion if needed

    // Redirect to a thank-you page after processing
    header("Location: thanks.php");
    exit();
} else {
    // If the form is not submitted, display a message or redirect
    echo "Thanks";
    exit();
}
?>
