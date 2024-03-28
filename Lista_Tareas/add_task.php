<?php
// Verifica si se ha enviado una nueva tarea
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['task'])) {
    // Obtiene la tarea ingresada por el usuario
    $new_task = $_POST['task'];

    // Abre o crea el archivo tasks.txt para agregar la nueva tarea
    $file = fopen("tasks.txt", "a");
    fwrite($file, $new_task . PHP_EOL);
    fclose($file);
}

// Redirecciona a la página principal
header("Location: index.php");
?>