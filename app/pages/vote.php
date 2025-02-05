<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    echo json_encode(["status" => "error", "message" => "You must be logged in to vote."]);
    exit();
}

// Database connection
$servername = "localhost";
$username = "root";
$dbpassword = "";
$dbname = "pup_engage";
$conn = new mysqli($servername, $username, $dbpassword, $dbname);

if ($conn->connect_error) {
    die(json_encode(["status" => "error", "message" => "Connection failed."]));
}

$userID = $_SESSION['user_id'];
$threadID = intval($_POST['threadID']);
$voteType = $_POST['voteType']; // "upvote" or "downvote"

// Check if user already voted
$sql = "SELECT * FROM votes WHERE userID = ? AND threadID = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ii", $userID, $threadID);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Update existing vote
    $updateSQL = "UPDATE votes SET voteType = ? WHERE userID = ? AND threadID = ?";
    $updateStmt = $conn->prepare($updateSQL);
    $updateStmt->bind_param("sii", $voteType, $userID, $threadID);
    $updateStmt->execute();
    echo json_encode(["status" => "success", "message" => "Vote updated."]);
} else {
    // Insert new vote
    $insertSQL = "INSERT INTO votes (userID, threadID, voteType) VALUES (?, ?, ?)";
    $insertStmt = $conn->prepare($insertSQL);
    $insertStmt->bind_param("iis", $userID, $threadID, $voteType);
    $insertStmt->execute();
    echo json_encode(["status" => "success", "message" => "Vote added."]);
}

// Fetch updated vote counts
$voteCountSQL = "SELECT 
    SUM(CASE WHEN voteType = 'upvote' THEN 1 ELSE 0 END) AS upvotes,
    SUM(CASE WHEN voteType = 'downvote' THEN 1 ELSE 0 END) AS downvotes
    FROM votes WHERE threadID = ?";
$voteCountStmt = $conn->prepare($voteCountSQL);
$voteCountStmt->bind_param("i", $threadID);
$voteCountStmt->execute();
$voteCountResult = $voteCountStmt->get_result();
$voteCounts = $voteCountResult->fetch_assoc();
$voteCountStmt->close();

echo json_encode([
    "status" => "success",
    "message" => "Vote recorded!",
    "upvotes" => $voteCounts['upvotes'] ?? 0,
    "downvotes" => $voteCounts['downvotes'] ?? 0
]);

$conn->close();
?>
