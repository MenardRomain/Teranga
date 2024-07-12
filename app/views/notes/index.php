<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Notes</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/notes.css">
    <style></style>
</head>
<body>
    <div class="notes-sidebar">
        <div class="notes-header">
            <h1>Notes</h1>
            <a href="/notes/create" class="create-btn">Create Note</a>
        </div>
        <div class="notes-list">
            <ul>
            <?php foreach ($notes as $note): ?>
                <li><a href="/notes/<?php echo $note['id']; ?>"><?php echo $note['category']; ?></a></li>
            <?php endforeach; ?>
            </ul>
        </div>
        <div class="chat-input">
            <input type="text" placeholder="Type your message...">
        </div>
        </div>

        <div class="note-details">
    <!-- Note details will be displayed here -->
    </div>
</body>
</html>
