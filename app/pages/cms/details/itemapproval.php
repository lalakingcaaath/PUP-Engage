<?php
session_start();
$host = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "pup_engage"; 

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM merchandise";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/dist/styles.css">
    <link rel="shortcut icon" href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/img/PUPLogo.png" type="image/x-icon">
    <title>Item Approval</title>
</head>
<body>
    <header class="subheader">
        <nav>
            <ul>
                <li><a href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/index.php"><img src="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/img/PUPLogo.png" alt="PUP Logo"></a></li>
                <li>PUP Engage</li>
                <li>Merchandise Approvals</li>
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

            </ul>
        </div>
        <div class="content">
            <div class="content-header">
                <img src="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/img/icons8-person-96.png" alt="dashboard">
                <h2>Item Approval</h2>
            </div>
            <div class="item-approval">
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="item-card">
                                <div class="item">
                                    <a href="#"><img src="' . $row["item_image"] . '" alt="Item Image"></a>
                                    <strong>' . htmlspecialchars($row["item_name"]) . '</strong>
                                    <p>₱' . number_format($row["item_price"], 2) . '</p>
                                    <span>' . htmlspecialchars($row["item_desc"]) . '</span>
                                </div>
                                <div class="item-button">
                                    <button class="highlight" id="approve-btn">Approve</button>
                                    <button id="reject-btn">Reject</button>
                                </div>
                              </div>';
                    }
                } else {
                    echo "<p>No items available for approval.</p>";
                }
                ?>
            </div>
        </div>
    </section>
</body>

<script>
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll(".approve-btn, .reject-btn").forEach(button => {
                button.addEventListener("click", function() {
                    let itemId = this.getAttribute("data-id");
                    let action = this.classList.contains("approve-btn") ? "approve" : "reject";
                    let itemCard = document.getElementById("item-" + itemId);

                    if (itemCard) {
                        itemCard.remove();
                        alert(action === "approve" ? "Item approved!" : "You rejected this item.");
                    }
                });
            });
        });
    </script>
</html>

<?php
$conn->close();
include '/laragon/www/pup-engage/app/components/footer.php';
?>