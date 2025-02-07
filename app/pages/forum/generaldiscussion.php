<?php
session_start();

// Initialize session storage if not set
if (!isset($_SESSION['threads'])) {
    $_SESSION['threads'] = [];
}

// Handle new thread submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['thread_title']) && isset($_POST['thread_content'])) {
    $_SESSION['threads'][] = [
        'id' => count($_SESSION['threads']) + 1,
        'title' => htmlspecialchars($_POST['thread_title']),
        'content' => htmlspecialchars($_POST['thread_content']),
        'replies' => []
    ];
}

// Handle reply submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['reply_content']) && isset($_POST['thread_id'])) {
    $thread_id = (int)$_POST['thread_id'];
    if (isset($_SESSION['threads'][$thread_id - 1])) {
        $_SESSION['threads'][$thread_id - 1]['replies'][] = htmlspecialchars($_POST['reply_content']);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discussion Forum</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">

    <div class="max-w-3xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold text-center mb-4">General Discussion Forum</h1>

        <!-- Post a new thread -->
        <form method="POST" class="mb-6">
            <input type="text" name="thread_title" placeholder="Thread Title" required 
                class="w-full p-2 border border-gray-300 rounded mb-2">
            <textarea name="thread_content" placeholder="Write your discussion..." required 
                class="w-full p-2 border border-gray-300 rounded mb-2"></textarea>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">
                Post Thread
            </button>
        </form>

        <!-- Display all threads -->
        <?php foreach ($_SESSION['threads'] as $index => $thread): ?>
            <div class="bg-gray-50 p-4 rounded-lg shadow mb-4">
                <h2 class="text-lg font-semibold"><?= $thread['title'] ?></h2>
                <p class="text-gray-700"><?= nl2br($thread['content']) ?></p>

                <!-- Replies Section -->
                <div class="mt-4">
                    <h3 class="text-sm font-semibold">Replies:</h3>
                    <?php if (empty($thread['replies'])): ?>
                        <p class="text-gray-500 text-sm">No replies yet.</p>
                    <?php else: ?>
                        <?php foreach ($thread['replies'] as $reply): ?>
                            <div class="bg-white p-2 rounded mt-2 border border-gray-300">
                                <p class="text-gray-600"><?= nl2br($reply) ?></p>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>

                <!-- Reply Form -->
                <form method="POST" class="mt-3">
                    <input type="hidden" name="thread_id" value="<?= $thread['id'] ?>">
                    <textarea name="reply_content" placeholder="Write a reply..." required 
                        class="w-full p-2 border border-gray-300 rounded mb-2"></textarea>
                    <button type="submit" class="bg-green-500 text-white px-3 py-1 rounded text-sm hover:bg-green-700">
                        Reply
                    </button>
                </form>
            </div>
        <?php endforeach; ?>
    </div>

</body>
</html>
