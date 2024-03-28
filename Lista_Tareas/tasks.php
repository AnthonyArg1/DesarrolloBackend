<?php
// Lee el archivo tasks.txt y muestra las tareas almacenadas
if (file_exists("tasks.txt")) {
    $tasks = file("tasks.txt", FILE_IGNORE_NEW_LINES);
    //Si hay mas de una tarea muestra un boton para eliminar todas las tareas
    if (count($tasks) > 1) {
        echo "<form action='delete_all_tasks.php' method='post'>";
        echo "<button type='submit' class='delete-all'>Eliminar Todas las Tareas</button>";
        echo "</form>";
    }
    foreach ($tasks as $task) {
        echo "<li>$task <button class='delete-tasks'><a href='delete_task.php?task=$task'>Eliminar</a></button></li>";
    }
}
?>
