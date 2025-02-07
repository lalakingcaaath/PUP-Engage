<?php 
session_start();

// Check if the user is logged in and include the appropriate header
if (isset($_SESSION['email'])) {
    include '../components/header-loggedin.php';
} else {
    include '../components/header-default.php';
    $loginRedirectURL = 'login.php';
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


// Fetch total users
$userCountSQL = "SELECT COUNT(*) AS totalUsers FROM users";
$userCountResult = $conn->query($userCountSQL);
$userCount = $userCountResult->fetch_assoc()['totalUsers'];

// Fetch total posts
$postCountSQL = "SELECT COUNT(*) AS totalPosts FROM threads";
$postCountResult = $conn->query($postCountSQL);
$postCount = $postCountResult->fetch_assoc()['totalPosts'];

// Fetch online users (Active sessions)
$onlineUsers = 0;
if (isset($_SESSION['online_users'])) {
    $onlineUsers = count($_SESSION['online_users']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/dist/styles.css?v=2">
    <link rel="shortcut icon" href="/app/img/PUPLogo.png" type="image/x-icon">
    <title>Forum</title>
</head>
<body>
    <section class="forum">
        <div class="forum-hero">
            <div class="forum-hero-content">
                <h1>Welcome to PUP Engage Community!</h1>
                <input type="text" name="search-community" id="search-community" placeholder="Search the community">
            </div>
        </div>

        <div class="forum-content">
    <div class="forum-info">
        <div class="info-card">
            <img src="/app/img/icons8-information-96.png" alt="info">
            <h2><?php echo $userCount; ?> Members</h2>
        </div>
        <div class="info-card">
            <img src="/app/img/icons8-message-96.png" alt="posts">
            <h2><?php echo $postCount; ?> Posts</h2>
        </div>
        <div class="info-card">
            <img src="/app/img/icons8-person-96.png" alt="online">
            <h2><?php echo $onlineUsers; ?> Online</h2>
        </div>
    </div>

            <div class="forum-welcome">
                <div class="forum-card">
                    <div class="forum-items">
                        <h3>Welcome to the Forum</h3>
                        <a href="/app/pages/forum/announcement.php">Forum Announcement</a>
                        <a href="/app/pages/forum/gettingstarted.php">Getting Started with PUP Engage</a>
                    </div>
                </div>
                <div class="forum-card">
                    <div class="column-card">
                        <a href="/app//pages/forum/generaldiscussion.php">
                            <img src="/app/img/icons8-inbox-96.png" alt="discussion">
                            <h3>General Discussion</h3>
                        </a>
                    </div>
                    <div class="column-card">
                        <a href="/app/pages/forum/request.php">
                            <img src="/app/img/icons8-question-96.png" alt="requests and questions">
                            <h3>Requests and Questions</h3>
                        </a>
                    </div>
                </div>
                
                <!-- New Topics - Show Latest 2 Posts -->
                <div class="forum-card">
                    <div class="forum-items">
                        <h3>New Topics</h3>
                        <?php
                        $latestThreadsSQL = "SELECT id, title FROM threads ORDER BY createdAt DESC LIMIT 2";
                        $latestThreadsResult = $conn->query($latestThreadsSQL);

                        if ($latestThreadsResult->num_rows > 0) {
                            while ($latestThread = $latestThreadsResult->fetch_assoc()) {
                                $latestThreadID = $latestThread['id'];
                                $latestTitle = htmlspecialchars($latestThread['title']);
                                echo "<a href='/app/pages/forum/thread.php?id=$latestThreadID'>$latestTitle</a>";
                            }
                        } else {
                            echo "<p>No new topics available.</p>";
                        }
                        ?>
                    </div>
                </div>
            </div>

            <div class="forum-posts">
            <div class="post-header">
    <h3 class="filter-btn active" data-filter="latest">Latest Posts</h3>
    <h3 class="filter-btn" data-filter="top">Top Posts</h3>
</div>


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
                                $content = htmlspecialchars($row['content']);
                                $author = htmlspecialchars($row['firstName'] . " " . $row['lastName']);
                                $postType = $row['postType'];
                                $createdAt = date("F j, Y, g:i a", strtotime($row['createdAt']));
                                $upvotes = $row['upvotes'];
                                $downvotes = $row['downvotes'];
                                $commentCount = $row['commentCount'];

                                echo "<a href='/app/pages/forum/thread.php?id=$threadID'>
                                        <div class='post-card'>
                                            <div class='post-card-info'>
                                                <img src='/app/img/profile-pic-blank.png' alt='profile'>
                                                <div class='post-card-info-text'>
                                                    <p><strong>$title</strong></p>
                                                    <p>By $author • $createdAt</p>
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

                        // Close connection
                        $conn->close();
                        ?>
                    </div>

                    <!-- Thread Card Section -->
                    <div class="thread-card">
                        <div class="post-thread">
                            <a href="<?php echo isset($loginRedirectURL) ? $loginRedirectURL : '/app/pages/forum/createthread.php'; ?>">
                                <img src="/app/img/icons8-message-96.png" alt="post thread">
                                <h4>Post Thread</h4>
                            </a>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </section>
    <script>
document.addEventListener("DOMContentLoaded", function() {
    const filterButtons = document.querySelectorAll(".filter-btn");
    const postsContainer = document.querySelector(".posts-container");

    function fetchPosts(filter) {
        fetch(`/app/pages/fetchthreads.php?filter=${filter}`)
        .then(response => response.json())
        .then(data => {
            if (data.status === "success") {
                postsContainer.innerHTML = ""; // Clear previous posts

                data.posts.forEach(post => {
                    const postCard = document.createElement("a");
                    postCard.href = `/app/pages/forum/thread.php?id=${post.id}`;
                    postCard.innerHTML = `
                        <div class='post-card'>
                            <div class='post-card-info'>
                                <img src='/app/img/profile-pic-blank.png' alt='profile'>
                                <div class='post-card-info-text'>
                                    <p><strong>${post.title}</strong></p>
                                    <p>By ${post.author} • ${post.createdAt}</p>
                                </div>
                            </div>
                            <div class='post-stats'>
                                <span><img src='/app/img/icons8-upvote-96.png' alt='upvote'>${post.upvotes}</span> 
                                <span><img src='/app/img/icons8-downvote-96.png' alt='downvote'>${post.downvotes}</span> 
                                <span><img src='/app/img/icons8-message-96.png' alt='comments'>${post.commentCount}</span>
                            </div>
                        </div>
                    `;
                    postsContainer.appendChild(postCard);
                });
            }
        })
        .catch(error => console.error("Error fetching posts:", error));
    }

    // Event listener for filter buttons
    filterButtons.forEach(button => {
        button.addEventListener("click", function() {
            filterButtons.forEach(btn => btn.classList.remove("active"));
            this.classList.add("active");

            const filterType = this.getAttribute("data-filter");
            fetchPosts(filterType);
        });
    });

    // Load latest posts by default
    fetchPosts("latest");
});
</script>

</body>
</html>

<?php
    include '../components/footer.php';
?>
