<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Note</title>
    <link rel="stylesheet" href="/public/css/style.css">
</head>
<body>
    <h1>Create Note</h1>
    <form action="/notes" method="POST">
        <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']; ?>">
        <label for="category">Category:</label>
        <input type="text" name="category" required><br>
        <label for="access_types">Access Types:</label><br>
        <input type="checkbox" name="access_types[]" value="admin"> Admin<br>
        <input type="checkbox" name="access_types[]" value="editor"> Editor<br>
        <input type="checkbox" name="access_types[]" value="viewer"> Viewer<br>
        <label for="content">Content:</label>
        <textarea name="content" required></textarea><br>
        <button type="submit">Save Note</button>
    </form>
</body>
</html>
