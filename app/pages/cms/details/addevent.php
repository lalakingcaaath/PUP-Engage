<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/dist/styles.css">
    <link rel="shortcut icon" href="/app/img/PUPLogo.png" type="image/x-icon">
    <title>Event Management</title>
</head>
<body>
    <header class="subheader">
        <nav>
            <ul>
                <li><a href="/index.php"><img src="/app/img/PUPLogo.png" alt="PUP Logo"></a></li>
                <li>PUP Engage</li>
                <li>Event Management</li>
            </ul>
        </nav>
    </header>
    <section class="main-content">
        <div class="sidenav">
            <div class="profile">
                <img src="/app/img/tpg-logo.jpg" alt="logo">
                <h2>Admin</h2>
            </div>
            <ul>
                <a href="/app/pages/cms/dashboard.php">
                    <li>Dashboard</li>
                </a>
                <a href="/app/pages/cms/usermanagement.php">
                    <li>User Management</li>
                </a>
                <a href="/app/pages/cms/orgmanagement.php">
                    <li>Organization Management</li>
                </a>
                <a href="/app/pages/cms/eventmanagement.php">
                    <li>Event Management</li>
                </a>
                <a href="/app/pages/cms/forummoderation.php">
                    <li>Forum Moderation</li>
                </a>
                <a href="/app/pages/cms/merchandiseapproval.php">
                    <li>Merchandise Approvals</li>
                </a>
                <a href="/app/pages/cms/report.php">
                    <li>Reports</li>
                </a>
            </ul>
        </div>
        <div class="content">
            <div class="content-header">
                <img src="/app/img/icons8-person-96.png" alt="dashboard">
                <h2>Event Management</h2>
            </div>
            <div class="event-content">
                <div class="event-deets">
                    <label for="eventName">Event Name</label>
                    <input type="text" name="eventName" id="eventName" placeholder="Event Name">
                    <label for="eventDesc">Event Description</label>
                    <input type="text" name="eventDesc" id="eventDesc" placeholder="Event Description">
                    <label for="eventType">Event Type</label>
                    <select name="eventType" id="eventType">
                        <option value="Online">Online</option>
                        <option value="Physical">Physical</option>
                    </select>                    
                    <label for="orgDeets">Organizer Details</label>
                    <input type="text" name="orgDeets" id="orgDeets" placeholder="Organizer Details">
                    <label for="startDate">Start Date</label>
                    <input type="date" name="startDate" id="startDate">
                    <label for="endDate">End Date</label>
                    <input type="date" name="endDate" id="endDate">
                    <label for="startTime">Start Time</label>
                    <input type="time" name="startTime" id="startTime">
                    <label for="endTime">End Time</label>
                    <input type="time" name="endTime" id="endTime">
                    <label for="venue">Venue Location</label>
                    <input type="text" name="venue" id="venue" placeholder="Virtual Meeting URL/Location">
                </div>
                <div class="upload-banner-container">
                    <div class="banner-placeholder">
                        <input type="file" name="upload" id="upload">
                        <img src="https://via.placeholder.com/40" alt="Upload Icon" class="upload-icon" />
                    </div>
                    <p>Upload Event Banner</p>
                  </div>
            </div>
            <button class="highlight">Add event</button>
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