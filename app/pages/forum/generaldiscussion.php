
<?php 
    session_start();

    //Check if the user is logged in
    if (isset($_SESSION['email'])) {
        include '/laragon/www/pup-engage/app/components/header-loggedin.php';
    } else {
        include '/laragon/www/pup-engage/app/components/header-default.php';
    }


// Database connection
$servername = "localhost";
$username = "root";
$dbpassword = "";
$dbname = "pup_engage";

$conn = new mysqli($servername, $username, $dbpassword, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch total posts
$postCountSQL = "SELECT COUNT(*) AS totalPosts FROM threads";
$postCountResult = $conn->query($postCountSQL);
$postCount = $postCountResult->fetch_assoc()['totalPosts'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/dist/styles.css">
    <link rel="shortcut icon" href="/app/img/PUPLogo.png" type="image/x-icon">
    <title>General Discussion</title>
</head>
<body>
<section class="general_discussion">
    <h1>General Discussion </h1>
    
<div class="forum-body">
    <div class="posts-container">
        <?php
        // Fetch all threads with user details, vote count, and comment count
        $sql = "SELECT t.id, t.title, t.content, t.createdAt, t.postType, u.firstName, u.lastName,
                    (SELECT COUNT(*) FROM votes WHERE threadID = t.id AND voteType = 'upvote') AS upvotes,
                    (SELECT COUNT(*) FROM votes WHERE threadID = t.id AND voteType = 'downvote') AS downvotes,
                    (SELECT COUNT(*) FROM comments WHERE threadID = t.id) AS commentCount
                FROM threads t
                JOIN users u ON t.userID = u.id
                ORDER BY t.createdAt DESC"; // Show latest first

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $threadID = $row['id'];
                $title = htmlspecialchars($row['title']);
                $content = htmlspecialchars($row['content']); // You might not need to display the content here
                $author = htmlspecialchars($row['firstName'] . " " . $row['lastName']);
                $postType = $row['postType'];
                $createdAt = date("F j, Y, g:i a", strtotime($row['createdAt']));
                $upvotes = $row['upvotes'];
                $downvotes = $row['downvotes'];
                $commentCount = $row['commentCount'];

                echo "<a href='/app/pages/forum/thread.php?id=$threadID'>  <div class='post-card'>
                            <div class='post-card-info'>
                                <img src='/app/img/profile-pic-blank.png' alt='profile'>
                                <div class='post-card-info-text'>
                                    <p><strong>$title</strong></p>  <p>By $author • $createdAt</p>
                                
                                </div>
                            </div>
                            <div class='post-stats'>
                                <span><img src='/app/img/icons8-upvote-96.png' alt='upvote'>$upvotes</span> 
                                <span><img src='/app/img/icons8-downvote-96.png' alt='downvote'>$downvotes</span> 
                                <span><img src='/app/img/icons8-message-96.png' alt='comments'>$commentCount</span>
                            </div>
                        </div>
                    </a>";
            }
        } else {
            echo "<p>No posts yet. Be the first to create one!</p>";
        }

        // Close connection  (Consider moving this to the end of your script or handling it differently)
        $conn->close(); 
        ?>
    </div>
</div>
</section>
</body>
</html>


<?php
    include '/laragon/www/pup-engage/app/components/footer.php';
?>