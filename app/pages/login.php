<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Connecting to the database
    $servername = "localhost";
    $username = "root";
    $dbpassword = ""; // Updated variable name to avoid conflict
    $dbname = "pup_engage";

    // Create connection
    $conn = new mysqli($servername, $username, $dbpassword, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("<script>alert('Connection failed: " . $conn->connect_error . "');</script>");
    }

    // Prepare and bind
    $stmt = $conn->prepare("SELECT id, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);

    // Execute the statement
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Fetch the result
        $user = $result->fetch_assoc();

        // Verify the password
        if (password_verify($password, $user['password'])) {
            // Login successful, set session variables
            $_SESSION['user_id'] = $user['id']; // Store the user ID in the session
            $_SESSION['email'] = $email;

            echo "<script>alert('Login successful'); window.location.href = 'http://pup-engage.test/index.php';</script>";
            exit();
        } else {
            // Incorrect password
            echo "<script>alert('Invalid email or password');</script>";
        }
    } else {
        // No user found with this email
        echo "<script>alert('Invalid email or password');</script>";
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
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Noto+Sans:ital,wght@0,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/dist/styles.css">
    <link rel="shortcut icon" href="/app/img/PUPLogo.png" type="image/x-icon">
    <title>Login</title>
</head>
<body>
    <header class="header-login">
        <nav>
            <ul>
                <li><a href="/index.php"><img src="/app/img/PUPLogo.png" alt="PUP Logo"></a></li>
                <li>PUP Engage</li>
                <li>Log In</li>
            </ul>
        </nav>
    </header>
    <section class="login">
        <div class="login-content">
            <div class="hero-text">
                <img src="/app/img/PUPLogo.png" alt="PUP Logo">
                <h2>PUP Engage: <br> Your Hub for Student Connections!</h2>
            </div>
            <div class="login-form">
                <form method="POST" action="login.php">
                    <label for="email">Email</label>
                    <input type="text" placeholder="Enter your email" name="email" id="email">
                    <label for="password">Password</label>
                    <input type="password" placeholder="Enter your password" name="password" id="password">
                    <button type="submit">Sign In</button>
                </form>
                <a href="/app/pages/reset.php">Forgot password?</a>
            </div>
        </div>
    </section>
</body>
</html>

<?php
    include '../components/footer.php';
?>