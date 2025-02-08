<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/dist/styles.css">
    <link rel="shortcut icon" href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/img/PUPLogo.png" type="image/x-icon">
    <title>Organization Profile</title>
</head>
<body>
    <header class="subheader">
        <nav>
            <ul>
                <li><a href="https://60c5-136-158-24-254.ngrok-free.app/index.php"><img src="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/img/PUPLogo.png" alt="PUP Logo"></a></li>
                <li>PUP Engage</li>
                <li>Organization Profile</li>
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
                <img src="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/img/icons8-community-96.png" alt="organization">
                <h2>The Programmers Guild</h2>
            </div>

            <div class="org-details">
                <div class="image-upload">
                    <label for="file-input">
                        <img src="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/img/placeholder.jpg" alt="Upload Image" id="image-preview">
                    </label>
                    <input id="file-input" type="file" accept="image/*">
                </div>                

                <label for="orgName">Organization Name</label>
                <input type="text" name="orgName" id="orgName" placeholder="The Programmers Guild" disabled>

                <label for="orgDeets">Description</label>
                <textarea name="orgDeets" id="orgDeets" placeholder="Description of Org" disabled></textarea>

                <label for="orgMission">Mission</label>
                <textarea name="orgMission" id="orgMission" placeholder="Our mission..." disabled></textarea>

                <label for="orgVision">Vision</label>
                <textarea name="orgVision" id="orgVision" placeholder="Our vision..." disabled></textarea>

                <label for="orgEmail">Organization Email</label>
                <input type="email" name="orgEmail" id="orgEmail" placeholder="tpgpupmain@gmail.com" disabled>

                <label for="orgDate">Established Date</label>
                <input type="text" name="orgDate" id="orgDate" placeholder="January 1, 2020" disabled>
            </div>

            <h3>Members</h3>
            <table>
                <caption>Member List</caption>
                <tr>
                    <th></th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Status</th>
                    <th>Date Joined</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Diana Khyle Padullo</td>
                    <td>madamdayana@gmail.com</td>
                    <td>Moderator</td>
                    <td>Active</td>
                    <td>October 23, 2024</td>
                </tr>
                <!-- More members can be dynamically added here -->
            </table>
            <a href="#"><button class="highlight">Add Member</button></a>
            <a href="#"><button>Remove</button></a>

            <h3>Upcoming Events</h3>
            <table>
                <caption>Event List</caption>
                <tr>
                    <th>Event Name</th>
                    <th>Date</th>
                    <th>Location</th>
                    <th>Description</th>
                </tr>
                <tr>
                    <td>Programming Bootcamp</td>
                    <td>November 15, 2024</td>
                    <td>PUP Main Campus</td>
                    <td>Learn advanced programming skills.</td>
                </tr>
                <!-- More events can be dynamically added here -->
            </table>
        </div>
    </section>
    <script src="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/js/uploadorglogo.js"></script>
</body>
</html>

<?php
    include '/laragon/www/pup-engage/app/components/footer.php';
?>