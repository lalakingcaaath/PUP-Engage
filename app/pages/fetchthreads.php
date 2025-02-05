<?php
session_start();

$servername = "localhost";
$username = "root";
$dbpassword = "";
$dbname = "pup_engage";

$conn = new mysqli($servername, $username, $dbpassword, $dbname);

if ($conn->connect_error) {
    die(json_encode(["status" => "error", "message" => "Database connection failed."]));
}

$filter = isset($_GET['filter']) ? $_GET['filter'] : 'latest';

if ($filter === "top") {
    $sql = "SELECT t.id, t.title, t.content, t.createdAt, u.firstName, u.lastName,
                (SELECT COUNT(*) FROM votes WHERE threadID = t.id AND voteType = 'upvote') AS upvotes,
                (SELECT COUNT(*) FROM votes WHERE threadID = t.id AND voteType = 'downvote') AS downvotes,
                (SELECT COUNT(*) FROM comments WHERE threadID = t.id) AS commentCount
            FROM threads t
            JOIN users u ON t.userID = u.id
            ORDER BY upvotes DESC, t.createdAt DESC"; // Sort by upvotes then latest
} else {
    $sql = "SELECT t.id, t.title, t.content, t.createdAt, u.firstName, u.lastName,
                (SELECT COUNT(*) FROM votes WHERE threadID = t.id AND voteType = 'upvote') AS upvotes,
                (SELECT COUNT(*) FROM votes WHERE threadID = t.id AND voteType = 'downvote') AS downvotes,
                (SELECT COUNT(*) FROM comments WHERE threadID = t.id) AS commentCount
            FROM threads t
            JOIN users u ON t.userID = u.id
            ORDER BY t.createdAt DESC"; // Default: Show latest first
}

$result = $conn->query($sql);

$posts = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $posts[] = [
            "id" => $row['id'],
            "title" => htmlspecialchars($row['title']),
            "author" => htmlspecialchars($row['firstName'] . " " . $row['lastName']),
            "createdAt" => date("F j, Y, g:i a", strtotime($row['createdAt'])),
            "upvotes" => $row['upvotes'],
            "downvotes" => $row['downvotes'],
            "commentCount" => $row['commentCount']
        ];
    }
}

echo json_encode(["status" => "success", "posts" => $posts]);

$conn->close();
?>
