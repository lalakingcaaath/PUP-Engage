<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    echo json_encode(["status" => "error", "message" => "You must be logged in to comment."]);
    exit();
}

$servername = "localhost";
$username = "root";
$dbpassword = "";
$dbname = "pup_engage";
$conn = new mysqli($servername, $username, $dbpassword, $dbname);

$userID = $_SESSION['user_id'];
$threadID = intval($_POST['threadID']);
$content = trim($_POST['content']);

$sql = "INSERT INTO comments (userID, threadID, content) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("iis", $userID, $threadID, $content);
$stmt->execute();
echo json_encode(["status" => "success", "message" => "Comment added."]);
$conn->close();

// Get updated comment count
$commentCountSQL = "SELECT COUNT(*) AS count FROM comments WHERE threadID = ?";
$countStmt = $conn->prepare($commentCountSQL);
$countStmt->bind_param("i", $threadID);
$countStmt->execute();
$countResult = $countStmt->get_result();
$countData = $countResult->fetch_assoc();
$countStmt->close();

echo json_encode(["status" => "success", "message" => "Comment added.", "commentCount" => $countData['count']]);

?>
