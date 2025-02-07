<?php
session_start();

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Check if user is logged in
if (!isset($_SESSION['email'])) {
    header("Location: ../login.php");
    exit();
}

// Database connection credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pup_engage";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user email from session
$userEmail = $_SESSION['email'];

// Fetch user ID based on email
$stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
$stmt->bind_param("s", $userEmail);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
$userId = $user['id'] ?? null; // Get user ID
$stmt->close();

// Check if user_id exists in user_profiles
$checkProfileStmt = $conn->prepare("SELECT * FROM user_profiles WHERE user_id = ?");
$checkProfileStmt->bind_param("i", $userId);
$checkProfileStmt->execute();
$profileResult = $checkProfileStmt->get_result();
$profileExists = $profileResult->num_rows > 0;
$checkProfileStmt->close();

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Debugging: Print POST data
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    // Sanitize input data
    $about = mysqli_real_escape_string($conn, $_POST['about']);
    $courseTitle = mysqli_real_escape_string($conn, $_POST['course-title']);
    $courseDescription = mysqli_real_escape_string($conn, $_POST['course']);
    $affiliation = mysqli_real_escape_string($conn, $_POST['affiliation']);
    $affiliationStart = mysqli_real_escape_string($conn, $_POST['affiliation-start']);
    $affiliationEnd = mysqli_real_escape_string($conn, $_POST['affiliation-end']);
    $projectTitle = mysqli_real_escape_string($conn, $_POST['project-title']);
    $projectDescription = mysqli_real_escape_string($conn, $_POST['project-description']);
    $projectStart = mysqli_real_escape_string($conn, $_POST['project-start']);
    $projectEnd = mysqli_real_escape_string($conn, $_POST['project-end']);

    // Check if the user has an existing profile
    if ($profileExists) {
        // Update existing profile
        $stmt = $conn->prepare("UPDATE user_profiles SET 
            about = ?, 
            course_title = ?, 
            course_description = ?, 
            affiliation = ?, 
            affiliation_start = ?, 
            affiliation_end = ?, 
            project_title = ?, 
            project_description = ?, 
            project_start = ?, 
            project_end = ?
            WHERE user_id = ?");

        $stmt->bind_param("ssssssssssi", $about, $courseTitle, $courseDescription, $affiliation, $affiliationStart, $affiliationEnd, $projectTitle, $projectDescription, $projectStart, $projectEnd, $userId);
    } else {
        // Insert new profile if not exists
        $stmt = $conn->prepare("INSERT INTO user_profiles 
            (user_id, about, course_title, course_description, affiliation, affiliation_start, affiliation_end, project_title, project_description, project_start, project_end) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

        $stmt->bind_param("issssssssss", $userId, $about, $courseTitle, $courseDescription, $affiliation, $affiliationStart, $affiliationEnd, $projectTitle, $projectDescription, $projectStart, $projectEnd);
    }

    // Execute the query and check for errors
    if (!$stmt) {
        die("Error preparing statement: " . $conn->error);
    }

    if (!$stmt->execute()) {
        die("Error executing statement: " . $stmt->error);
    } else {
        echo "Update successful!";
        header("Location: profile.php");
        exit();
    }

    $stmt->close();
}

// Fetch user profile data
$stmt = $conn->prepare("SELECT * FROM user_profiles WHERE user_id = ?");
$stmt->bind_param("i", $userId);
$stmt->execute();
$result = $stmt->get_result();
$profile = $result->fetch_assoc();
$stmt->close();
$conn->close();
?>

<?php include '../components/header-loggedin.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/dist/styles.css">
    <link rel="shortcut icon" href="/app/img/PUPLogo.png" type="image/x-icon">
    <title>Edit Profile</title>
</head>
<body>
    <section class="edit-profile">
        <h1>Edit Profile</h1>
        
        <form action="/app/pages/editprofile.php" method="POST" class="edit-form">
            <input type="hidden" name="user_id" value="<?php echo $userId; ?>">
            
            <label for="about">Edit About</label>
            <textarea name="about" id="about"><?php echo htmlspecialchars($profile['about'] ?? ''); ?></textarea>
            
            <label for="course-title">Course Title</label>
            <input type="text" name="course-title" id="course-title" value="<?php echo htmlspecialchars($profile['course_title'] ?? ''); ?>">
            
            <label for="course">Course Description</label>
            <textarea name="course" id="course"><?php echo htmlspecialchars($profile['course_description'] ?? ''); ?></textarea>
            
            <label for="affiliation">Affiliation/Organization</label>
            <input type="text" name="affiliation" id="affiliation" value="<?php echo htmlspecialchars($profile['affiliation'] ?? ''); ?>">
            
            <label for="affiliation-start">Start Date</label>
            <input type="date" name="affiliation-start" id="affiliation-start" value="<?php echo $profile['affiliation_start'] ?? ''; ?>">
            
            <label for="affiliation-end">End Date</label>
            <input type="date" name="affiliation-end" id="affiliation-end" value="<?php echo $profile['affiliation_end'] ?? ''; ?>">
            
            <label for="project-title">Project Title</label>
            <input type="text" name="project-title" id="project-title" value="<?php echo htmlspecialchars($profile['project_title'] ?? ''); ?>">
            
            <label for="project-description">Project Description</label>
            <textarea name="project-description" id="project-description"><?php echo htmlspecialchars($profile['project_description'] ?? ''); ?></textarea>
            
            <label for="project-start">Project Start Date</label>
            <input type="date" name="project-start" id="project-start" value="<?php echo $profile['project_start'] ?? ''; ?>">
            
            <label for="project-end">Project End Date</label>
            <input type="date" name="project-end" id="project-end" value="<?php echo $profile['project_end'] ?? ''; ?>">
            
            <button type="submit">Save</button>
        </form>
    </section>
</body>
</html>

<?php include '../components/footer.php'; ?>
