<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['email'])) {
    header("Location: ../login.php");
    exit();
}

// Get user email from session
$userEmail = $_SESSION['email'];

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

// Fetch user details from users table
$stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
$stmt->bind_param("s", $userEmail);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
$stmt->close();

// Fetch user profile details from user_profiles table
$stmt = $conn->prepare("SELECT * FROM user_profiles WHERE user_id = ?");
$stmt->bind_param("i", $user['id']);
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
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/dist/styles.css">
    <link rel="shortcut icon" href="/app/img/PUPLogo.png" type="image/x-icon">
    <title>User Profile</title>
</head>
<body>
    <section class="profile-page">
        <div class="profile-card">
            <div class="cover-photo">
                <img src="/app/img/hero.jpg" alt="cover-photo">
            </div>
            <div class="profile-image">
                <img class="profile-image-container" src="/app/img/profile-pic-blank.png" alt="profile-pic">
                <h1><?php echo htmlspecialchars($user['firstName'] . ' ' . $user['lastName']); ?></h1>
                <a href="/app/pages/editprofile.php">Edit Profile</a>
            </div>
        </div>

        <!-- About Section -->
        <div class="about-card">
            <div class="about-card-header">
                <h2>About</h2>
            </div>
            <div id="aboutContent" class="aboutContent">
                <p><?php echo htmlspecialchars($profile['about'] ?? 'No about information provided.'); ?></p>
            </div>
        </div>

        <!-- Course Section -->
        <div class="course-card">
            <div class="course-card-header">
                <h2>Course</h2>
            </div>
            <div class="courseContent" id="courseContent">
                <h3 id="courseTitle"><?php echo htmlspecialchars($profile['course_title'] ?? 'No course title'); ?></h3>
                <p id="courseDescription"><?php echo htmlspecialchars($profile['course_description'] ?? 'No course description provided.'); ?></p>
            </div>
        </div>

        <!-- Affiliation Section -->
        <div class="affiliation-card">
            <div class="affiliation-card-header">
                <h2>Affiliation</h2>
            </div>
            <div class="affiliationContent" id="affiliationContent">
                <h3><?php echo htmlspecialchars($profile['affiliation'] ?? 'No affiliation'); ?></h3>
                <p>
                    Start Date: <?php echo htmlspecialchars($profile['affiliation_start'] ?? 'N/A'); ?> <br>
                    End Date: <?php echo htmlspecialchars($profile['affiliation_end'] ?? 'N/A'); ?>
                </p>
            </div>
        </div>

        <!-- Project Section -->
        <div class="project-card">
            <div class="project-card-header">
                <h2>Project</h2>
            </div>
            <div class="projectContent" id="projectContent">
                <h3><?php echo htmlspecialchars($profile['project_title'] ?? 'No project title'); ?></h3>
                <p><?php echo htmlspecialchars($profile['project_description'] ?? 'No project description provided.'); ?></p>
                <p>
                    Start Date: <?php echo htmlspecialchars($profile['project_start'] ?? 'N/A'); ?> <br>
                    End Date: <?php echo htmlspecialchars($profile['project_end'] ?? 'N/A'); ?>
                </p>
            </div>
        </div>
    </section>
</body>
</html>

<?php include '../components/footer.php'; ?>
