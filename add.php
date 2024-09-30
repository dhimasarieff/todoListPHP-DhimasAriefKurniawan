<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $task = [
        'name' => $_POST['task'],
        'priority' => $_POST['priority']
    ];
    $_SESSION['tasks'][] = $task;
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Task</title>
</head>
<body>
    <h1>Tambah Task Baru</h1>
    <form method="POST">
        <label>Task:</label><br>
        <input type="text" name="task" required><br><br>
        <label>Priority:</label><br>
        <input type="text" name="priority" required><br><br>
        <button type="submit">Tambah</button>
    </form>
</body>
</html>
