<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tareas</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="task-list">
        <h2>Lista de Tareas</h2>
        <!-- Formulario para agregar una nueva tarea -->
        <form action="add_task.php" method="post">
            <input type="text" name="task" placeholder="Ingrese una nueva tarea" required>
            <button type="submit">Agregar Tarea</button>
        </form>

        <!-- Lista de tareas -->
        <ul>
            <?php include ('tasks.php'); ?>
        </ul>
    </div>
</body>

</html>