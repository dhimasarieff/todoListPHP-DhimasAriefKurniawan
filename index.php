<?php
session_start();

if (!isset($_SESSION['tasks'])) {
    $_SESSION['tasks'] = [];
}

// Menampilkan daftar tugas
?>

<!DOCTYPE html>
<html>
<head>
    <title>To-Do List</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>To-Do List</h1>
    <a href="add.php">Tambah Task</a>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Task</th>
            <th>Priority</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($_SESSION['tasks'] as $index => $task) : ?>
            <tr>
                <td><?= $index + 1 ?></td>
                <td><?= htmlspecialchars($task['name']) ?></td>
                <td><?= htmlspecialchars($task['priority']) ?></td>
                <td>
                    <a href="edit.php?index=<?= $index ?>">Edit</a> |
                    <a href="delete.php?index=<?= $index ?>" onclick="return confirm('Yakin ingin menghapus task ini?');">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
