<?php
// Database Connection
$servername = "localhost";
$username = "root";
$dbpassword = "";
$dbname = "pup_engage";

$conn = new mysqli($servername, $username, $dbpassword, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Validate POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $organization_id = isset($_POST['organization_id']) ? intval($_POST['organization_id']) : 0;
    $user_id = isset($_POST['user_id']) ? intval($_POST['user_id']) : 0;
    $role = isset($_POST['role']) ? trim($_POST['role']) : '';

    // Check if all required fields are provided
    if ($organization_id <= 0 || $user_id <= 0 || empty($role)) {
        echo "<script>alert('Invalid input. Please fill in all required fields.'); window.history.back();</script>";
        exit();
    }

    // Check if the user exists in the users table
    $user_check_query = "SELECT id FROM users WHERE id = ?";
    $stmt = $conn->prepare($user_check_query);
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows == 0) {
        echo "<script>alert('Error: User does not exist.'); window.history.back();</script>";
        exit();
    }
    $stmt->close();

    // Check if the user is already a member of the organization
    $member_check_query = "SELECT id FROM members WHERE user_id = ? AND organization_id = ?";
    $stmt = $conn->prepare($member_check_query);
    $stmt->bind_param("ii", $user_id, $organization_id);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        echo "<script>alert('Error: This user is already a member of the organization.'); window.history.back();</script>";
        exit();
    }
    $stmt->close();

    // Insert new member
    $status = "Active";
    $date_joined = date("Y-m-d H:i:s");
    $insert_query = "INSERT INTO members (organization_id, user_id, role, status, date_joined) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($insert_query);
    $stmt->bind_param("iisss", $organization_id, $user_id, $role, $status, $date_joined);

    if ($stmt->execute()) {
        echo "<script>alert('Member added successfully!'); window.history.back();</script>";
        exit();
    } else {
        error_log("Database error: " . $stmt->error); // Log error for debugging
        echo "<script>alert('Error adding member. Please try again later.'); window.history.back();</script>";
        exit();
    }

    $stmt->close();
}

$conn->close();
?>
