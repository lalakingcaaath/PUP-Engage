<?php
// Start session if needed
session_start();

// Database connection (Update credentials if necessary)
$host = "localhost"; // Change if using a remote server
$username = "root"; // Default for Laragon
$password = ""; // Default for Laragon
$database = "pup_engage"; // Update with your actual database name

$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $eventName = $_POST['eventName'];
    $eventDesc = $_POST['eventDesc'];
    $eventType = $_POST['eventType'];
    $orgDeets = $_POST['orgDeets'];
    $startDate = $_POST['startDate'];
    $endDate = $_POST['endDate'];
    $startTime = $_POST['startTime'];
    $endTime = $_POST['endTime'];
    $venue = $_POST['venue'];

    // Handle file upload
    $bannerFileName = NULL;
    if (!empty($_FILES['upload']['name'])) {
        $targetDir = "/laragon/www/pup-engage/uploads/"; // Update path
        $bannerFileName = basename($_FILES["upload"]["name"]);
        $targetFilePath = $targetDir . $bannerFileName;
        
        // Move uploaded file to server directory
        if (!move_uploaded_file($_FILES["upload"]["tmp_name"], $targetFilePath)) {
            $bannerFileName = NULL; // Reset if upload fails
        }
    }

    // Prepare & bind SQL statement
    $stmt = $conn->prepare("INSERT INTO events (event_name, event_desc, event_type, organizer_details, start_date, end_date, start_time, end_time, venue_location, event_banner) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssssss", $eventName, $eventDesc, $eventType, $orgDeets, $startDate, $endDate, $startTime, $endTime, $venue, $bannerFileName);

    if ($stmt->execute()) {
        echo "<script>alert('Event added successfully!');</script>";
    } else {
        echo "<script>alert('Error adding event: " . $conn->error . "');</script>";
    }

    $stmt->close();
    $conn->close();
}
?>

<?php
// Start session if needed
session_start();

// Database connection (Update credentials if necessary)
$host = "localhost"; // Change if using a remote server
$username = "root"; // Default for Laragon
$password = ""; // Default for Laragon
$database = "pup_engage"; // Update with your actual database name

$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $eventName = $_POST['eventName'];
    $eventDesc = $_POST['eventDesc'];
    $eventType = $_POST['eventType'];
    $orgDeets = $_POST['orgDeets'];
    $startDate = $_POST['startDate'];
    $endDate = $_POST['endDate'];
    $startTime = $_POST['startTime'];
    $endTime = $_POST['endTime'];
    $venue = $_POST['venue'];

    // Handle file upload
    $bannerFileName = NULL;
    if (!empty($_FILES['upload']['name'])) {
        $targetDir = "/laragon/www/pup-engage/uploads/"; // Update path
        $bannerFileName = basename($_FILES["upload"]["name"]);
        $targetFilePath = $targetDir . $bannerFileName;
        
        // Move uploaded file to server directory
        if (!move_uploaded_file($_FILES["upload"]["tmp_name"], $targetFilePath)) {
            $bannerFileName = NULL; // Reset if upload fails
        }
    }

    // Prepare & bind SQL statement
    $stmt = $conn->prepare("INSERT INTO events (event_name, event_desc, event_type, organizer_details, start_date, end_date, start_time, end_time, venue_location, event_banner) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssssss", $eventName, $eventDesc, $eventType, $orgDeets, $startDate, $endDate, $startTime, $endTime, $venue, $bannerFileName);

    if ($stmt->execute()) {
        echo "<script>alert('Event added successfully!');</script>";
    } else {
        echo "<script>alert('Error adding event: " . $conn->error . "');</script>";
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
                <img src="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/img/adminlogo.png" alt="logo">
                <h2>Admin</h2>
            </div>
            <ul>
                <a href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/pages/cms/dashboard.php"><li>Dashboard</li></a>
                <a href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/pages/cms/usermanagement.php"><li>User Management</li></a>
                <a href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/pages/cms/orgmanagement.php"><li>Organization Management</li></a>
                <a href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/pages/cms/eventmanagement.php"><li>Event Management</li></a>
                <a href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/pages/cms/forummoderation.php"><li>Forum Moderation</li></a>
                <a href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/pages/cms/merchandiseapproval.php"><li>Merchandise Approvals</li></a>
                <a href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/pages/cms/report.php"><li>Reports</li></a>
            </ul>
        </div>
        <div class="content">
            <div class="content-header">
                <img src="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/img/icons8-person-96.png" alt="dashboard">
                <h2>Event Management</h2>
            </div>
            <form method="POST" action="" enctype="multipart/form-data">
                <div class="event-content">
                    <div class="event-deets">
                        <label for="eventName">Event Name</label>
                        <input type="text" name="eventName" id="eventName" required>
                        
                        <label for="eventDesc">Event Description</label>
                        <input type="text" name="eventDesc" id="eventDesc" required>
                        
                        <label for="eventType">Event Type</label>
                        <select name="eventType" id="eventType" required>
                            <option value="Online">Online</option>
                            <option value="Physical">Physical</option>
                        </select>                    
                        
                        <label for="orgDeets">Organizer Details</label>
                        <input type="text" name="orgDeets" id="orgDeets" required>
                        
                        <label for="startDate">Start Date</label>
                        <input type="date" name="startDate" id="startDate" required>
                        
                        <label for="endDate">End Date</label>
                        <input type="date" name="endDate" id="endDate" required>
                        
                        <label for="startTime">Start Time</label>
                        <input type="time" name="startTime" id="startTime" required>
                        
                        <label for="endTime">End Time</label>
                        <input type="time" name="endTime" id="endTime" required>
                        
                        <label for="venue">Venue Location</label>
                        <input type="text" name="venue" id="venue" required>
                    </div>
                    <div class="upload-banner-container">
                        <div class="banner-placeholder">
                            <input type="file" name="upload" id="upload" accept="image/*">
                            <img src="https://via.placeholder.com/40" alt="Upload Icon" class="upload-icon" />
                        </div>
                        <p>Upload Event Banner</p>
                    </div>
                </div>
                <button type="submit" class="highlight">Add event</button>
            </form>
        </div>
    </section>
</body>
</html>

<?php include '/laragon/www/pup-engage/app/components/footer.php'; ?>
