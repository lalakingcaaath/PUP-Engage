<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $studentID = $_POST['studentID'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Database connection credentials
    $servername = "localhost";
    $username = "root";
    $dbpassword = "";
    $dbname = "pup_engage";

    // Create connection
    $conn = new mysqli($servername, $username, $dbpassword, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("<script>alert('Connection failed: " . $conn->connect_error . "');</script>");
    }

    // Check for existing entry
    $check_sql = "SELECT * FROM users WHERE studentID = ? OR email = ?";
    $stmt = $conn->prepare($check_sql);
    $stmt->bind_param("ss", $studentID, $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<script>alert('User with this Student ID or Email already exists');</script>";
    } else {
        // Prepare and bind
        $stmt = $conn->prepare("INSERT INTO users (firstName, lastName, studentID, email, password) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $fname, $lname, $studentID, $email, $hashed_password);

        // Execute the statement
        if ($stmt->execute() === TRUE) {
            echo "<script>alert('You have been registered');</script>";
        } else {
            echo "<script>alert('Error: " . $stmt->error . "');</script>";
        }
    }

    // Close the statement and connection
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
    <title>Sign Up</title>
</head>
<body>
    <header class="header-signup">
        <nav>
            <ul>
                <li><a href="/index.php"><img src="/app/img/PUPLogo.png" alt="PUP Logo"></a></li>
                <li>PUP Engage</li>
                <li>Sign Up</li>
            </ul>
        </nav>
    </header>
    <section class="signup">
        <div class="signup-content">
            <div class="hero-text">
                <img src="/app/img/PUPLogo.png" alt="PUP Logo">
                <h2>PUP Engage: <br> Your Hub for Student Connections!</h2>
            </div>
            <div class="signup-form">
                <form method="POST" action="signup.php">
                    <label for="fname">First Name</label>
                    <input type="text" name="fname" placeholder="Enter your first name" id="fname" required>
                    <label for="lname">Last Name</label>
                    <input type="text" name="lname" placeholder="Enter your last name" id="lname" required>
                    <label for="studentID">Student ID</label>
                    <input type="text" name="studentID" placeholder="Enter your Student ID" id="studentID" required>
                    <label for="email">Email</label>
                    <input type="text" name="email" placeholder="Enter your email" id="email" required>
                    <label for="password">Password</label>
                    <input type="password" name="password" placeholder="Enter your password" id="password" required>
                    <button type="submit">Register</button>
                    <label for="checkbox"><input type="checkbox" name="checkbox" id="checkbox" required>I agree</label>
                    <p>By checking you agree that you are a student at the Polytechnic University of the Philippines.</p>
                </form>
            </div>
        </div>
    </section>
</body>
</html>

<?php
    include '../components/footer.php';
?>