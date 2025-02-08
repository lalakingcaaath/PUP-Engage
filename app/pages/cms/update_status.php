<?php
// Database Connection
$host = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "pup_engage"; 

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if ID and status are received
if (isset($_POST['id']) && isset($_POST['status'])) {
    $id = $_POST['id'];
    $status = $_POST['status'];

    // Update merchandise status
    $stmt = $conn->prepare("UPDATE merchandise SET status = ? WHERE id = ?");
    $stmt->bind_param("si", $status, $id);

    if ($stmt->execute()) {
        echo "Status updated to $status";
    } else {
        echo "Error updating status";
    }

    $stmt->close();
} else {
    echo "Invalid request";
}

$conn->close();
?>
