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

// Prepare and bind
$stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
$stmt->bind_param("s", $userEmail);

// Execute the statement
$stmt->execute();
$result = $stmt->get_result();

// Fetch user data
$user = $result->fetch_assoc();

?>

<?php
   include '../components/header-loggedin.php'; 
?>

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
            </div>
        </div>
        <div class="about-card">
           <div class="about-card-header">
             <h2>About</h2>
            <button id="editButton" onclick="editAboutContent()">Edit</button>
           </div>
            <div id="aboutContent" class="aboutContent">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, cupiditate aliquid quasi voluptatem dolor quibusdam, doloribus aspernatur libero ipsum laboriosam ea maiores, impedit quaerat? Unde consectetur cupiditate saepe omnis accusamus!</p>
            </div>
            <div id="editSection" class="edit-section">
                <textarea id="aboutTextArea" rows="5" cols="100"></textarea><br>
                <button onclick="updateAboutContent()">Save</button>
        </div>
        </div>
        <div class="course-card">
    <div class="course-card-header">
        <h2>Course</h2>
        <button id="editAffiliation" onclick="editCourseContent()">Edit</button>
    </div>
    <div class="courseContent" id="courseContent">
        <h3 id="courseTitle">Title</h3>
        <p id="courseDescription">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum id fuga dignissimos! Nam quasi molestiae, nemo in animi doloremque ad? Impedit, repudiandae quis eos beatae illum sequi cumque molestias vitae?
        </p>
    </div>
    <div id="editCourseSection" class="edit-section" style="display:none">
        <label for="courseTitleInput">Title:</label>
        <input type="text" id="courseTitleInput" value="Title"><br>
        <label for="courseDescriptionInput">Description:</label>
        <textarea id="courseDescriptionInput" rows="4" cols="50">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum id fuga dignissimos! Nam quasi molestiae, nemo in animi doloremque ad? Impedit, repudiandae quis eos beatae illum sequi cumque molestias vitae?
        </textarea><br>
        <button onclick="updateCourseContent()">Save</button>
    </div>
</div>
    </section>
    <script src="/app/js/editCourseContent.js"></script>
    <script src="/app/js/editAboutContent.js"></script>
</body>
</html>

<?php
   include '../components/footer.php'; 
?>


<?php
// Close the statement and connection
$stmt->close();
$conn->close();
?>

