<?php
session_start();

// Add new task
if (isset($_POST['new_task'])) {
    $new_task = trim($_POST['new_task']);
    if ($new_task !== '') {
        $_SESSION['todos'][] = $new_task;
    }
}

// Redirect back to the main page
header("Location: index.php");
exit;
