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
    <link rel="stylesheet" href="/dist/styles.css">
    <link rel="shortcut icon" href="/app/img/PUPLogo.png" type="image/x-icon">
    <title>Create Thread</title>
</head>
<body>
    <section class="create-thread">
        <div class="thread-header">
            <a href="/app/pages/forum.php"><img src="/app/img/icons8-back-96.png" alt="go back"></a>
            <h1>Create post</h1>
            <p>Drafts</p>
        </div>
        <div class="thread-options">
            <button type="submit"class="option" data-type="text">Text</button>
            <button type="submit"class="option" data-type="image">Images & Videos</button>
            <button type="submit"class="option" data-type="link">Link</button>
        </div>
        <div class="thread-title">
            <input type="text" placeholder="Title">
        </div>
        <div class="thread-post">
            <textarea name="createPost" id="createPost" placeholder="Body"></textarea>
            <button type="submit" class="highlight">Post</button>
        </div>
    </section>
    <script src="/app/js/createthreadbutton.js"></script>
</body>
</html>

<?php
    include '/laragon/www/pup-engage/app/components/footer.php';
?>