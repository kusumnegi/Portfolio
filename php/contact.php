<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $message = $conn->real_escape_string($_POST['message']);

    $sql = "INSERT INTO contacts (name, email, message) 
            VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        // Redirect back with success flag (NO alert)
        header("Location: ../index.php?success=1#contact");
        exit();
    } else {
        // Optional error redirect
        header("Location: ../index.php?error=1#contact");
        exit();
    }
}

$conn->close();
