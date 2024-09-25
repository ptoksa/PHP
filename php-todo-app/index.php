<?php
session_start();

// Initialize the to-do list if it doesn't exist
if (!isset($_SESSION['todos'])) {
    $_SESSION['todos'] = [];
}

// Handle the deletion of a task
if (isset($_GET['delete'])) {
    $index = intval($_GET['delete']);
    if (isset($_SESSION['todos'][$index])) {
        unset($_SESSION['todos'][$index]);
        $_SESSION['todos'] = array_values($_SESSION['todos']);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP To-Do List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>PHP To-Do List</h1>

        <!-- Display To-Do List -->
        <ul class="todo-list">
            <?php foreach ($_SESSION['todos'] as $index => $todo): ?>
                <li>
                    <?= htmlspecialchars($todo) ?>
                    <a href="index.php?delete=<?= $index ?>" class="delete-btn">Delete</a>
                </li>
            <?php endforeach; ?>
        </ul>

        <!-- Form to Add New Task -->
        <form action="add.php" method="post">
            <input type="text" name="new_task" placeholder="Add new task" required>
            <button type="submit">Add Task</button>
        </form>
    </div>
</body>
</html>
