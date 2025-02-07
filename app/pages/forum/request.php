<?php 
    session_start();

    //Check if the user is logged in
    if (isset($_SESSION['email'])) {
        include '/laragon/www/pup-engage/app/components/header-loggedin.php';
    } else {
        include '/laragon/www/pup-engage/app/components/header-default.php';
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/dist/styles.css">
    <link rel="shortcut icon" href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/img/PUPLogo.png" type="image/x-icon">
    <title>Requests and Questions</title>
</head>
<body>
    <section class="inquiry">
        <div class="forum">
            <div class="forum-hero">
                <div class="forum-hero-content">
                    <h1>Welcome to PUP Engage Community!</h1>
                    <input type="text" name="search-community" id="search-community" placeholder="Search the community">
                </div>
            </div>
        </div>
        <div class="inquiry-content">
            <div class="greetings">
                <h1>Welcome to the Request and Questions Page</h1>
                <p>Here, you can submit your questions or make requests related to the platform, student activities, events, or any concerns regarding your experience with PUP Engage. Please read through the guidelines below to ensure a smooth and productive interaction.</p>
            </div>
            <div class="guidelines">
                <h2>Posting Guidelines</h2>
                <ul>
                    <li>Before posting, please use the <strong>Search Bar</strong> to check
                        if your question has already been answered.
                    </li>
                    <li>Be clear and concise in your posts to help others 
                        understand your concern.
                    </li>
                    <li>Choose to appropriate category when submitting a request or question.</li>
                    <li>Respect forum etiquette. Offensive, spam, or off-topic posts will be moderated.</li>
                </ul>
            </div>
            <div class="categories">
                <h3>General Questions</h3>
                <p>For queries about using the platform or navigating its features.</p>
                <h3>Technical Support</h3>
                <p>Issues related to login, account management, or platform errors.</p>
                <h3>Feature Requests</h3>
                <p>Suggestions for new platform functionalities or improvements.</p>
                <h3>Event Related Queries</h3>
                <p>Questions about upcoming events or event details.</p>
                <h3>Organization-Related Requests</h3>
                <p>Inquiries or requests addressed to specific student organizations.</p>
                <h3>Merchandise Store Issues</h3>
                <p>Questions about product availability, purchases, or payment issues.</p> 
            </div>
            <div class="posting">
                <h2>Posting Template</h2>
                <h3>Title:</h3>
                <ul>
                    <li>Provide a brief and descriptive title for your request or question.</li>
                </ul>
                <h3>Category:</h3>
                <ul>
                    <li>Select the relevant category from the dropdown menu.</li>
                </ul>
                <h3>Description</h3>
                <ul>
                    <li>Provide detailed information about your request or question.</li>
                    <li>Include specific details such as dates, URLs, or affected features if applicable.</li>
                </ul>
                <h3>Attachments:</h3>
                <ul>
                    <li>Upload screenshots or files if they can help explain your concern.</li>
                </ul>
                <h3>Tags:</h3>
                <ul>
                    <li>Add keywords to make your post searchables?</li>
                </ul>
            </div>
            <div class="interact">
                <h2>How to Interact</h2>
                <ul>
                    <li><strong>Voting System: </strong>Upvote helpful posts and responses highlight the most valuable content.</li>
                    <li><strong>Reply Feature: </strong>Reply to posts and engage in structured discussions.</li>
                    <li><strong>Mark as Resolved: </strong>Original posters can indicate when their issue or request has been resolved.</li>
                </ul>
            </div>
            <div class="guidelines">
                <h2>Moderation Guidelines</h2>
                <ul>
                    <li>Posts are monitored to ensure compliance with forum rules.</li>
                    <li>Expect a response from admins or moderators within 24-48 hours.</li>
                    <li>Repeated violations of forum guidelines may result in account restrictions</li>
                </ul>
            </div>
            <div class="functionality">
                <h2>Search Functionality</h2>
                <p>Use the <strong>Search Bar</strong> at the top of the page 
                to find answers quickly. Enter keywords related to your question or request. <br>
                Thank you for contributing to a helpful and collaborative community at PUP Engage!
                </p>
            </div>
        </div>
    </section>
</body>
</html>

<?php
    include '/laragon/www/pup-engage/app/components/footer.php';
?>