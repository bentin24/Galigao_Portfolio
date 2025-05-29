<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "portfolio_db"); // Adjust database details

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

$successMessage = ""; // Variable to store success message

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    // Store message in the database
    $stmt = $conn->prepare("INSERT INTO messages (name, email, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $message);

    if ($stmt->execute()) {
        $successMessage = "Message sent successfully! 🎉"; // Set success message
    } else {
        $successMessage = "Oops! Something went wrong. 😞"; // Error message
    }

    $stmt->close();
    $conn->close();
}
?>

