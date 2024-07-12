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
    <div class="container">
        <h1>Notes</h1>
        <a href="/notes/create" class="create-btn">Create Note</a>
        <div class="notes-container">
            <ul class="notes-list">
                <?php foreach ($notes as $note): ?>
                    <li><a href="/notes/<?php echo $note['id']; ?>"><?php echo $note['category']; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="note-details">
            <!-- Contenu de la note détaillée sera inséré dynamiquement ici -->
        </div>
    </div>
    <div class="chat-input">
        <!-- Input de chat en bas -->
        <input type="text" placeholder="Type your message...">
    </div>
</body>
</html>
