<?php
session_start();

if (isset($_GET['index'])) {
    $index = $_GET['index'];
    $task = $_SESSION['tasks'][$index];

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $_SESSION['tasks'][$index] = [
            'name' => $_POST['task'],
            'priority' => $_POST['priority']
        ];
        header('Location: index.php');
        exit;
    }
} else {
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Task</title>
</head>
<body>
    <h1>Edit Task</h1>
    <form method="POST">
        <label>Task:</label><br>
        <input type="text" name="task" value="<?= htmlspecialchars($task['name']) ?>" required><br><br>
        <label>Priority:</label><br>
        <input type="text" name="priority" value="<?= htmlspecialchars($task['priority']) ?>" required><br><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
