function addTask() {
    const taskInput = document.getElementById("taskInput");
    const task = taskInput.value.trim();
    if (task === "") return;

    fetch('rmv.php', {
        method: 'POST',
        headers: {'Content-Type': 'application/json'},
        body: JSON.stringify({action: 'add', task: task})
    })
    .then(response => response.json())
    .then(data => location.reload());
}

function deleteTask(index) {
    fetch('rmv.php', {
        method: 'POST',
        headers: {'Content-Type': 'application/json'},
        body: JSON.stringify({action: 'delete', index: index})
    })
    .then(response => response.json())
    .then(data => location.reload());
}
