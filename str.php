<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple To-Do List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>📝 My To-Do List</h1>

    <input type="text" id="taskInput" placeholder="Enter a new task">
    <button onclick="addTask()">Add</button>

    <ul id="taskList">
        <?php
        $tasks = json_decode(file_get_contents('new.json'), true);
        foreach ($tasks as $index => $task) {
            echo "<li data-id='$index'>" . htmlspecialchars($task) . 
                 " <button onclick='deleteTask($index)'>❌</button></li>";
        }
        ?>
    </ul>

    <script src="script.js"></script>
</body>
</html>
