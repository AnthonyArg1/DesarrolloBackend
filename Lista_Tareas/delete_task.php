<?php
// Verifica si se ha enviado una tarea para eliminar
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['task'])) {
    // Obtiene la tarea a eliminar
    $task_to_delete = $_GET['task'];
    
    // Lee el archivo tasks.txt y elimina la tarea
    $tasks = file("tasks.txt", FILE_IGNORE_NEW_LINES);
    $index = array_search($task_to_delete, $tasks);
    if ($index !== false) {
        unset($tasks[$index]);
        file_put_contents("tasks.txt", implode(PHP_EOL, $tasks));
    }
}

// Redirecciona a la página principal
header("Location: index.php");
?>