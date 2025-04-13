<?php
$data = json_decode(file_get_contents("php://input"), true);
$tasks = json_decode(file_get_contents('new.json'), true);

if ($data['action'] == 'add') {
    $tasks[] = $data['task'];
} elseif ($data['action'] == 'delete') {
    array_splice($tasks, $data['index'], 1);
}

file_put_contents('new.json', json_encode($tasks));
echo json_encode(['status' => 'success']);
?>