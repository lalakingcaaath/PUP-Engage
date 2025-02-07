<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/dist/styles.css">
    <link rel="shortcut icon" href="/app/img/PUPLogo.png" type="image/x-icon">
    <title>Organization Profile</title>
</head>
<body>
    <header class="subheader">
        <nav>
            <ul>
                <li><a href="/index.php"><img src="/app/img/PUPLogo.png" alt="PUP Logo"></a></li>
                <li>PUP Engage</li>
                <li>Organization Profile</li>
            </ul>
        </nav>
    </header>

    <section class="main-content">
    <div class="sidenav">
            <div class="profile">
                <img src="/app/img/tpg-logo.jpg" alt="logo">
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
                <img src="/app/img/icons8-community-96.png" alt="organization">
                <h2>The Programmers Guild</h2>
            </div>

            <div class="org-details">
                <div class="image-upload">
                    <label for="file-input">
                        <img src="placeholder.jpg" alt="Upload Image" id="image-preview">
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

    <footer>
        <div class="links">
            <ul>
                <li>Quick Links</li>
                <li><a href="/app/pages/directory.php">Organization Directory</a></li>
                <li><a href="/app/pages/generalcalendar.php">Event Calendar</a></li>
                <li><a href="/app/pages/forum.php">Forum</a></li>
                <li><a href="/app/pages/store/store.php">Merchandise Store</a></li>
                <li><a href="/app/pages/about.php">About Us</a></li>
            </ul>
        </div>

        <div class="socmed">
            <p class="touch">Follow Us</p>
            <a href="#"><img src="/app/img/icons8-facebook-logo-50.png" alt="facebook"></a>
            <a href="#"><img src="/app/img/icons8-twitter-50.png" alt="twitter"></a>
            <a href="#"><img src="/app/img/icons8-youtube-50.png" alt="youtube"></a>
            <a href="#"><img src="/app/img/icons8-linkedin-50.png" alt="linkedin"></a>
            <p class="info">PUP Contact Information</p>
            <p>Phone: <span>(+63 2) 5335-1PUP (5335-1787) or 5335-1777</span></p>
            <p>Email: <span>inquire@pup.edu.ph</span></p>
        </div>

        <p class="copyright">&copy; 2024 PUP Engage. All rights reserved</p>
    </footer>

</body>
</html>
