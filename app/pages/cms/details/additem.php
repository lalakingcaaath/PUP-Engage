<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
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
                <a href="/app/pages/cms/report.php">
                    <li>Reports</li>
                </a>
            </ul>
        </div>
        <div class="content">
            <div class="content-header">
                <img src="/app/img/icons8-person-96.png" alt="dashboard">
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
    <footer>
        <div class="links">
            <ul>
                <li>Quick Links</li>
                <li><a href="/app/pages/directory.php">Organization Directory</a></li>
                <li><a href="/app/pages/generalcalendar.php">Event Calendar</a></li>
                <li><a href="/app/pages/forum.php">Forum</a></li>
                <li><a href="/app/pages/store/store.php">Mechandise Store</a></li>
                <li><a href="/app/pages/about.php">About Us</a></li>
            </ul>
        </div>
        <div class="socmed">
            <p class="touch">Keep in touch</p>
            <a href="https://www.facebook.com/ThePUPOfficial"><img src="/app/img/icons8-facebook-logo-50.png" alt="facebook"></a>
            <a href="https://x.com/ThePUPOfficial"><img src="/app/img/icons8-twitter-50.png" alt="twitter"></a>
            <a href="https://www.youtube.com/user/pupcreatv"><img src="/app/img/icons8-youtube-50.png" alt="youtube"></a>
            <a href="https://www.linkedin.com/school/polytechnic-university-of-the-philippines/posts/?feedView=all"><img src="/app/img/icons8-linkedin-50.png" alt="linkedin"></a>
            <p class="info">PUP Contact Information</p>
            <p>Phone: <span>(+63 2) 5335-1PUP (5335-1787) or 5335-1777</span></p>
            <p>Email: <span>inquire@pup.edu.ph</span></p>
        </div>
        <p class="copyright">&copy; 2024 PUP Engage. All rights reserved</p>
    </footer>
</body>
</html>