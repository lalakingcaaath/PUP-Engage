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
            </ul>
        </div>
        <div class="content">
            <div class="content-header">
                <img src="/app/img/icons8-person-96.png" alt="dashboard">
                <h2>Merchandise Approvals</h2>
            </div>
            <div class="search">
                <input type="text" placeholder="Search for merchandise">
            </div>
            <div class="card">
                <div class="card-item">
                    <img src="/app/img/icons8-submission-96.png" alt="users">
                    <p>100</p>
                    <p>Total submission</p>
                </div>
                <div class="card-item">
                    <img src="/app/img/icons8-loop-96.png" alt="orgs">
                    <p>35</p>
                    <p>Pending approval</p>
                </div>
                <div class="card-item">
                    <img src="/app/img/icons8-check-96.png" alt="events">
                    <p>35</p>
                    <p>Approved</p>
                </div>
                <div class="card-item">
                    <img src="/app/img/icons8-wrong-96.png" alt="sales">
                    <p>35</p>
                    <p>Rejected</p>
                </div>
            </div>
            <table>
                <caption>Merchandise List</caption>
                <tr>
                    <th></th>
                    <th>Item Name</th>
                    <th>Vendor Name</th>
                    <th>Submission Date</th>
                    <th>Status</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <select name="merchandisestatus" id="merchandisestatus">
                            <option value="Pending">Pending</option>
                            <option value="Approved">Approved</option>
                            <option value="Rejected">Rejected</option>
                            <option value="Flagged">Flagged</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <select name="merchandisestatus1" id="merchandisestatus1">
                        <option value="Pending">Pending</option>
                        <option value="Approved">Approved</option>
                        <option value="Rejected">Rejected</option>
                        <option value="Flagged">Flagged</option>
                    </select>
                    </td>
                </tr>
            </table>
            <a href="/app/pages/cms/details/additem.php"><button class="highlight">Add merchandise</button></a>
            <a href="/app/pages/cms/details/itemapproval.php"><button class="highlight">Item Approval</button></a>

        </div>
    </section>
</body>
</html>

<?php
    include '/laragon/www/pup-engage/app/components/footer.php';
?>