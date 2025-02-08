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

$upload_dir = "/laragon/www/pup-engage/uploads/"; // Ensure this directory exists
$image_path = "";

// Handle Form Submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $item_name = $_POST["item-name"];
    $item_desc = $_POST["item-desc"];
    $item_price = $_POST["item-price"];
    $item_quantity = $_POST["item-quantity"];
    $vendor_name = $_POST["vendor-name"];
    $vendor_email = $_POST["vendor-email"];

    // Handle File Upload
    if (isset($_FILES["upload"]) && $_FILES["upload"]["error"] == 0) {
        $file_name = basename($_FILES["upload"]["name"]);
        $target_file = $upload_dir . $file_name;

        if (move_uploaded_file($_FILES["upload"]["tmp_name"], $target_file)) {
            $image_path = $target_file; 
        }
    }

    // Insert into Database using Prepared Statement
    $stmt = $conn->prepare("INSERT INTO merchandise (item_name, item_desc, item_price, item_quantity, vendor_name, vendor_email, item_image) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssdiiss", $item_name, $item_desc, $item_price, $item_quantity, $vendor_name, $vendor_email, $image_path);
    
    if ($stmt->execute()) {
        echo "<script>alert('Item added successfully!'); window.location.href='additem.php';</script>";
    } else {
        echo "<script>alert('Error adding item.');</script>";
    }

    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/dist/styles.css">
    <link rel="shortcut icon" href="/app/img/PUPLogo.png" type="image/x-icon">
    <title>Merchandise Approvals</title>
</head>
<body>
    <header class="subheader">
        <nav>
            <ul>
                <li><a href="/index.php"><img src="/app/img/PUPLogo.png" alt="PUP Logo"></a></li>
                <li>PUP Engage</li>
                <li>Merchandise Approvals</li>
            </ul>
        </nav>
    </header>
    <section class="main-content">
        <div class="sidenav">
            <div class="profile">
                <img src="/app/img/adminlogo.png" alt="logo">
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

            </ul>
        </div>
        <div class="content">
            <div class="content-header">
                <img src="/app/img/icons8-person-96.png" alt="dashboard">
                <h2>Merchandise Approvals</h2>
            </div>
            <form method="POST" action="additem.php" enctype="multipart/form-data">
                <div class="item-content">
                    <div class="item-deets">
                        <label for="item-name">Item Name</label>
                        <input type="text" name="item-name" id="item-name" placeholder="Item Name" required>

                        <label for="item-desc">Item Description</label>
                        <input type="text" name="item-desc" id="item-desc" placeholder="Item Description" required>

                        <label for="item-price">Item Price</label>
                        <input type="number" step="0.01" name="item-price" id="item-price" placeholder="Item Price" required>

                        <label for="item-quantity">Item Quantity</label>
                        <input type="number" name="item-quantity" id="item-quantity" placeholder="Item Quantity" required>

                        <label for="vendor-name">Vendor Name</label>
                        <input type="text" name="vendor-name" id="vendor-name" placeholder="Vendor Name" required>

                        <label for="vendor-email">Vendor Email</label>
                        <input type="email" name="vendor-email" id="vendor-email" placeholder="Vendor Email" required>
                    </div>
                    <div class="upload-banner-container">
                        <div class="banner-placeholder">
                            <input type="file" name="upload" id="upload" required>
                            <img src="https://via.placeholder.com/40" alt="Upload Icon" class="upload-icon" />
                        </div>
                        <p>Upload Item Image</p>
                    </div>
                </div>
                <button type="submit" class="highlight">Add Item</button>
            </form>
        </div>
    </section>
</body>
</html>
<?php
    include '/laragon/www/pup-engage/app/components/footer.php';
?>