<?php
session_start();
$servername = "localhost";
$username = "root";
$dbpassword = "";
$dbname = "pup_engage";

// Create connection
$conn = new mysqli($servername, $username, $dbpassword, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Validate POST data
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['member_id'], $_POST['organization_id'])) {
    $member_id = intval($_POST['member_id']);
    $organization_id = intval($_POST['organization_id']);

    // Remove member from the organization
    $delete_query = "DELETE FROM members WHERE user_id = ? AND organization_id = ?";
    $stmt = $conn->prepare($delete_query);
    $stmt->bind_param("ii", $member_id, $organization_id);

    if ($stmt->execute()) {
        // Redirect back to the organization page with success message
        header("Location: /app/pages/cms/details/orgtpu.php?org_id=$organization_id&success=Member removed");
        exit();
    } else {
        // Redirect with error message
        header("Location: /app/pages/cms/details/orgtpu.php?org_id=$organization_id&error=Failed to remove member");
        exit();
    }
} else {
    // Redirect if accessed incorrectly
    header("Location: /index.php");
    exit();
}

$conn->close();
?>
