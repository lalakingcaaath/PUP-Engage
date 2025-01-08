<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/dist/styles.css">
    <link rel="shortcut icon" href="/app/img/PUPLogo.png" type="image/x-icon">
    <title>Forum</title>
</head>
<body>
    <header class="main-header">
        <nav>
            <ul>
                <li><a href="/index.php"><img src="/app/img/PUPLogo.png" alt="PUP logo"></a></li>
                <li><a href="/index.php">Home</a></li>
                <li><a href="/app/pages/directory.php">Directory</a></li>
                <li><a href="/app/pages/generalcalendar.php">Calendar</a></li>
                <li><a href="/app/pages/forum.php">Forum</a></li>
                <li><a href="/app/pages/store/store.php">Store</a></li>
                <li><a href="/app/pages/login.php">Sign In</a></li>
                <li><a href="/app/pages/signup.php">Register</a></li>
            </ul>
        </nav>
    </header>
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
                    <h2>33 Members</h2>
                </div>
                <div class="info-card">
                    <img src="/app/img/icons8-message-96.png" alt="posts">
                    <h2>5 Posts</h2>
                </div>
                <div class="info-card">
                    <img src="/app/img/icons8-person-96.png" alt="online">
                    <h2>3 Online</h2>
                </div>
            </div>
            <div class="forum-welcome">
                <div class="forum-card">
                    <div class="forum-items">
                        <h3>Welcome to the Forum</h3>
                        <a href="#">Forum Announcements</a>
                        <a href="/app/pages/forum/gettingstarted.html">Getting Started with PUP Engage</a>
                    </div>
                </div>
                <div class="forum-card">
                    <div class="column-card">
                        <a href="#">
                            <img src="/app/img/icons8-inbox-96.png" alt="discussion">
                            <h3>General Discussion</h3>
                        </a>
                    </div>
                    <div class="column-card">
                        <a href="#">
                            <img src="/app/img/icons8-question-96.png" alt="requests and questions">
                            <h3>Requests and Questions</h3>
                        </a>
                    </div>
                </div>
                <div class="forum-card">
                    <div class="forum-items">
                        <h3>New Topics</h3>
                        <a href="#">Balik Sinta 2025</a>
                        <a href="#">COC x CEA</a>
                    </div>
                </div>
            </div>
            <div class="forum-posts">
                <div class="post-header">
                    <h3>Latest Posts</h3>
                    <h3>Top Posts</h3>
                </div>
                <div class="forum-body">
                    <div class="posts-container">
                        <a href="#">
                            <div class="post-card">
                                <div class="post-card-info">
                                    <img src="/app/img/profile-pic-blank.png" alt="profile">
                                    <div class="post-card-info-text">
                                        <p><strong>How to get to PUP Main?</strong></p>
                                        <p>Jericho Pio</p>
                                    </div>
                                </div>
                                <div class="post-stats">
                                    <a href="#"><span><img src="/app/img/icons8-upvote-96.png" alt="upvote">2</span> <span><img src="/app/img/icons8-downvote-96.png" alt="downvote">0</span> <span><img src="/app/img/icons8-message-96.png" alt="comments">5</span></a>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="post-card">
                                <div class="post-card-info">
                                    <img src="/app/img/profile-pic-blank.png" alt="profile">
                                    <div class="post-card-info-text">
                                        <p><strong>How to join an organization?</strong></p>
                                        <p>Clark John Mones</p>
                                    </div>
                                </div>
                                <div class="post-stats">
                                    <a href="#"><span><img src="/app/img/icons8-upvote-96.png" alt="upvote">2</span> <span><img src="/app/img/icons8-downvote-96.png" alt="downvote">0</span> <span><img src="/app/img/icons8-message-96.png" alt="comments">5</span></a>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="post-card">
                                <div class="post-card-info">
                                    <img src="/app/img/profile-pic-blank.png" alt="profile">
                                    <div class="post-card-info-text">
                                        <p><strong>Balik Sinta 2025</strong></p>
                                        <p>Diana Khyle Padullo</p>
                                    </div>
                                </div>
                                <div class="post-stats">
                                    <a href="#"><span><img src="/app/img/icons8-upvote-96.png" alt="upvote">2</span> <span><img src="/app/img/icons8-downvote-96.png" alt="downvote">0</span> <span><img src="/app/img/icons8-message-96.png" alt="comments">5</span></a>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="thread-card">
                        <div class="post-thread">
                            <a href="/app/pages/forum/createthread.html">
                                <img src="/app/img/icons8-message-96.png" alt="post thread">
                                <h4>Post Thread</h4>
                            </a>
                        </div>
                        <div class="post-thread">
                            <a href="#">
                                <img src="/app/img/icons8-message-96.png" alt="new posts">
                                <h4>New Posts</h4>
                            </a>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </section>
    <footer>
        <div class="links">
            <ul>
                <li>Quick Links</li>
                <li><a href="/app/pages/directory.php">Organization Directory</a></li>
                <li><a href="/app/pages/generalcalendar.php">Event Calendar</a></li>
                <li><a href="/app/pages/forum.php">Forum</a></li>
                <li><a href="/app/pages/store/store.php">Mechandise Store</a></li>
                <li><a href="/app/pages/about.php">About Us</a></li>
            </ul>
        </div>
        <div class="socmed">
            <p class="touch">Keep in touch</p>
            <a href="https://www.facebook.com/ThePUPOfficial"><img src="/app/img/icons8-facebook-logo-50.png" alt="facebook"></a>
            <a href="https://x.com/ThePUPOfficial"><img src="/app/img/icons8-twitter-50.png" alt="twitter"></a>
            <a href="https://www.youtube.com/user/pupcreatv"><img src="/app/img/icons8-youtube-50.png" alt="youtube"></a>
            <a href="https://www.linkedin.com/school/polytechnic-university-of-the-philippines/posts/?feedView=all"><img src="/app/img/icons8-linkedin-50.png" alt="linkedin"></a>
            <p class="info">PUP Contact Information</p>
            <p>Phone: <span>(+63 2) 5335-1PUP (5335-1787) or 5335-1777</span></p>
            <p>Email: <span>inquire@pup.edu.ph</span></p>
        </div>
        <p class="copyright">&copy; 2024 PUP Engage. All rights reserved</p>
    </footer>
</body>
</html>