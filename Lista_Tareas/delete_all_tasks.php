<?php
// Elimina todas las tareas del archivo tasks.txt
$file = fopen("tasks.txt", "w");
fclose($file);

// Redirecciona a la página principal
header("Location: index.php");
?>
