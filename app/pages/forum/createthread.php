<?php 
session_start();

// Database connection
$servername = "localhost";
$username = "root";
$dbpassword = "";
$dbname = "pup_engage";

$conn = new mysqli($servername, $username, $dbpassword, $dbname);

if ($conn->connect_error) {
    die("<script>alert('Connection failed: " . $conn->connect_error . "');</script>");
}

// Ensure user is logged in
if (!isset($_SESSION['user_id'])) {
    echo "<script>alert('You must be logged in to create a post.'); window.location.href = '/login.php';</script>";
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userID = $_SESSION['user_id'];
    $title = $_POST['title'] ?? '';
    $content = $_POST['createPost'] ?? '';
    $postType = $_POST['postType'] ?? '';

    $stmt = $conn->prepare("INSERT INTO threads (userID, title, content, postType) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("isss", $userID, $title, $content, $postType);

    if ($stmt->execute()) {
        echo "<script>alert('Post created successfully'); window.location.href = '/app/pages/forum.php';</script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/dist/styles.css">
    <link rel="shortcut icon" href="/app/img/PUPLogo.png" type="image/x-icon">
    <title>Create Thread</title>
</head>
<body>
    <section class="create-thread">
        <div class="thread-header">
            <a href="/app/pages/forum.php"><img src="/app/img/icons8-back-96.png" alt="go back"></a>
            <h1>Create post</h1>
            <p>Drafts</p>
        </div>
        <div class="thread-options">
            <button type="submit"class="option" data-type="text">Text</button>
            <button type="submit"class="option" data-type="image">Images & Videos</button>
            <button type="submit"class="option" data-type="link">Link</button>
        </div>
        <form action="createthread.php" method="POST" enctype="multipart/form-data">
        <div class="thread-title">
            <input type="text" name="title" placeholder="Title" required>
        </div>
        <div class="thread-post" id="dynamic-content">
            <textarea name="createPost" id="createPost" placeholder="Body" required></textarea>
            <input type="hidden" name="postType" value="text"> 
            <button type="submit" class="highlight">Post</button>
        </div>
    </form>
    </section>
    <script src="/app/js/createthreadbutton.js"></script>
</body>
</html>

<?php
    include '/laragon/www/pup-engage/app/components/footer.php';
?>