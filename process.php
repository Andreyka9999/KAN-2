<?php
// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the 'name' and 'email' fields are set
    if (isset($_POST['name']) && isset($_POST['email'])) {
        // Retrieve and sanitize input data
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        
        // Display the personalized greeting message
        echo "<h1>Hello, $name!</h1>";
        echo "<p>Your email address is: $email</p>";
    } else {
        // Display an error message if fields are missing
        echo "<p>Form data is missing.</p>";
    }
} else {
    // Display a message if the form is accessed without submission
    echo "<p>Please submit the form to see the result.</p>";
}
?>
