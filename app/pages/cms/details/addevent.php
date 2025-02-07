<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/dist/styles.css">
    <link rel="shortcut icon" href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/img/PUPLogo.png" type="image/x-icon">
    <title>Event Management</title>
</head>
<body>
    <header class="subheader">
        <nav>
            <ul>
                <li><a href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/index.php"><img src="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/img/PUPLogo.png" alt="PUP Logo"></a></li>
                <li>PUP Engage</li>
                <li>Event Management</li>
            </ul>
        </nav>
    </header>
    <section class="main-content">
        <div class="sidenav">
            <div class="profile">
                <img src="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/img/tpg-logo.jpg" alt="logo">
                <h2>Admin</h2>
            </div>
            <ul>
                <a href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/pages/cms/dashboard.php">
                    <li>Dashboard</li>
                </a>
                <a href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/pages/cms/usermanagement.php">
                    <li>User Management</li>
                </a>
                <a href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/pages/cms/orgmanagement.php">
                    <li>Organization Management</li>
                </a>
                <a href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/pages/cms/eventmanagement.php">
                    <li>Event Management</li>
                </a>
                <a href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/pages/cms/forummoderation.php">
                    <li>Forum Moderation</li>
                </a>
                <a href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/pages/cms/merchandiseapproval.php">
                    <li>Merchandise Approvals</li>
                </a>
                <a href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/pages/cms/report.php">
                    <li>Reports</li>
                </a>
            </ul>
        </div>
        <div class="content">
            <div class="content-header">
                <img src="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/img/icons8-person-96.png" alt="dashboard">
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
</body>
</html>

<?php
    include '/laragon/www/pup-engage/app/components/footer.php';
?>