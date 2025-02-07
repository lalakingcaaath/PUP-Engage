<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/dist/styles.css">
    <link rel="shortcut icon" href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/img/PUPLogo.png" type="image/x-icon">
    <title>Merchandise Approvals</title>
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
                <h2>Merchandise Approvals</h2>
            </div>
            <div class="item-content">
                <div class="item-deets">
                    <label for="item-name">Item Name</label>
                    <input type="text" name="item-name" id="item-name" placeholder="Item Name">
                    <label for="item-desc">Item Description</label>
                    <input type="text" name="item-dexc" id="item-desc" placeholder="Item Description">
                    <label for="item-price">Item Price</label>
                    <input type="text" name="item-price" id="item-price" placeholder="Item Price">
                    <label for="item-quantity">Item Quantity</label>
                    <input type="text" name="item-quantity" id="item-quantity" placeholder="Item Quantity">
                    <label for="vendor-name">Vendor Name</label>
                    <input type="text" name="vendor-name" id="vendor-name" placeholder="Vendor Name">
                    <label for="vendor-email">Vendor Email</label>
                    <input type="text" name="vendor-email" id="vendor-email" placeholder="Vendor Email">
                </div>
                <div class="upload-banner-container">
                    <div class="banner-placeholder">
                        <input type="file" name="upload" id="upload">
                        <img src="https://via.placeholder.com/40" alt="Upload Icon" class="upload-icon" />
                    </div>
                    <p>Upload Event Banner</p>
                  </div>
            </div>
            <button class="highlight">Add Item</button>
        </div>
    </section>
</body>
</html>

<?php
    include '/laragon/www/pup-engage/app/components/footer.php';
?>