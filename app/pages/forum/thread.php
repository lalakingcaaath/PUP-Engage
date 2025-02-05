<?php
session_start();

// Database connection
$servername = "localhost";
$username = "root";
$dbpassword = "";
$dbname = "pup_engage";

$conn = new mysqli($servername, $username, $dbpassword, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Ensure a thread ID is provided in the URL
if (!isset($_GET['id']) || empty($_GET['id'])) {
    echo "<script>alert('Invalid thread ID'); window.location.href = '/app/pages/forum.php';</script>";
    exit();
}

$threadID = intval($_GET['id']);

// Fetch thread details
$sql = "SELECT t.title, t.content, t.postType, t.createdAt, u.firstName, u.lastName 
        FROM threads t
        JOIN users u ON t.userID = u.id
        WHERE t.id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $threadID);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    echo "<script>alert('Thread not found'); window.location.href = '/app/pages/forum.php';</script>";
    exit();
}

$thread = $result->fetch_assoc();
$stmt->close();

// Fetch total upvotes & downvotes
$voteSQL = "SELECT 
    SUM(CASE WHEN voteType = 'upvote' THEN 1 ELSE 0 END) AS upvotes,
    SUM(CASE WHEN voteType = 'downvote' THEN 1 ELSE 0 END) AS downvotes
    FROM votes WHERE threadID = ?";
$voteStmt = $conn->prepare($voteSQL);
$voteStmt->bind_param("i", $threadID);
$voteStmt->execute();
$voteResult = $voteStmt->get_result();
$votes = $voteResult->fetch_assoc();
$voteStmt->close();

$upvotes = $votes['upvotes'] ?? 0;
$downvotes = $votes['downvotes'] ?? 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/dist/styles.css">
    <link rel="shortcut icon" href="/app/img/PUPLogo.png" type="image/x-icon">
    <title><?php echo htmlspecialchars($thread['title']); ?></title>
</head>
<body>
    <section class="thread-page">
        <div class="thread-header">
            <a href="/app/pages/forum.php" class="back-button"><img src="/app/img/icons8-back-96.png" alt="Go Back"></a>
            <h1><?php echo htmlspecialchars($thread['title']); ?></h1>
        </div>

        <div class="thread-meta">
            <p>Posted by <strong><?php echo htmlspecialchars($thread['firstName'] . " " . $thread['lastName']); ?></strong> • <?php echo date("F j, Y, g:i a", strtotime($thread['createdAt'])); ?></p>
        </div>

        <div class="thread-content">
            <p><?php echo nl2br(htmlspecialchars($thread['content'])); ?></p>
        </div>

        <div class="comment-section">
    <h3>Comments (<span id="comment-count">0</span>)</h3>
    <?php if (isset($_SESSION['user_id'])): ?>
        <form id="comment-form">
            <textarea name="comment" id="comment" placeholder="Write a comment..." required></textarea>
            <button type="submit">Post</button>
        </form>
    <?php else: ?>
        <p>You must be logged in to comment.</p>
    <?php endif; ?>
    
    <div id="comments-list">
        <?php
        $commentSQL = "SELECT c.content, c.createdAt, u.firstName, u.lastName 
                       FROM comments c
                       JOIN users u ON c.userID = u.id
                       WHERE c.threadID = ?
                       ORDER BY c.createdAt DESC";
        $commentStmt = $conn->prepare($commentSQL);
        $commentStmt->bind_param("i", $threadID);
        $commentStmt->execute();
        $commentResult = $commentStmt->get_result();
        $commentStmt->close();

        $commentCount = 0;
        while ($comment = $commentResult->fetch_assoc()) {
            $commentCount++;
            echo "<div class='comment'>
                    <p><strong>" . htmlspecialchars($comment['firstName'] . " " . $comment['lastName']) . "</strong> • " . date("F j, Y, g:i a", strtotime($comment['createdAt'])) . "</p>
                    <p>" . nl2br(htmlspecialchars($comment['content'])) . "</p>
                  </div>";
        }
        ?>
    </div>
</div>
<script>
document.getElementById("comment-count").textContent = "<?php echo $commentCount; ?>";
</script>



<div class="thread-actions">
    <button class="vote-button upvote" data-thread="<?php echo $threadID; ?>">
        <img src="/app/img/icons8-upvote-96.png" alt="upvote"> Upvote (<span id="upvote-count"><?php echo $upvotes; ?></span>)
    </button>
    <button class="vote-button downvote" data-thread="<?php echo $threadID; ?>">
        <img src="/app/img/icons8-downvote-96.png" alt="downvote"> Downvote (<span id="downvote-count"><?php echo $downvotes; ?></span>)
    </button>
</div>

    </section>
    <script>
document.addEventListener("DOMContentLoaded", function() {
    document.querySelectorAll(".vote-button").forEach(button => {
        button.addEventListener("click", function() {
            const threadID = this.getAttribute("data-thread");
            const voteType = this.classList.contains("upvote") ? "upvote" : "downvote";

            fetch("/app/pages/vote.php", {
                method: "POST",
                headers: { "Content-Type": "application/x-www-form-urlencoded" },
                body: `threadID=${threadID}&voteType=${voteType}`
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === "success") {
                    // Update vote counts immediately
                    document.getElementById("upvote-count").textContent = data.upvotes;
                    document.getElementById("downvote-count").textContent = data.downvotes;
                } else {
                    alert(data.message);
                }
            })
            .catch(error => console.error("Error:", error));
        });
    });
});

document.getElementById("comment-form").addEventListener("submit", function(e) {
    e.preventDefault();
    const threadID = <?php echo $threadID; ?>;
    const content = document.getElementById("comment").value.trim();

    if (content === "") {
        alert("Comment cannot be empty!");
        return;
    }

    fetch("/app/pages/comment.php", {
        method: "POST",
        headers: { "Content-Type": "application/x-www-form-urlencoded" },
        body: `threadID=${threadID}&content=${encodeURIComponent(content)}`
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === "success") {
            // Update comment count immediately
            document.getElementById("comment-count").textContent = data.commentCount;

            // Add new comment dynamically to the list
            const newComment = document.createElement("div");
            newComment.classList.add("comment");
            newComment.innerHTML = `<p><strong>You</strong> • Just now</p><p>${content}</p>`;
            document.getElementById("comments-list").prepend(newComment);

            // Clear the comment input field
            document.getElementById("comment").value = "";
        } else {
            alert(data.message);
        }
    })
    .catch(error => console.error("Error:", error));
});
    </script>
</body>
</html>

<?php
$conn->close();
?>
