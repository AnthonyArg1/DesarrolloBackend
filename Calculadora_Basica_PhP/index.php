<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="calculator">
        <h2>Calculadora Básica en PhP</h2>
        <!-- Formulario para ingresar los números y seleccionar la operación -->
        <form action="index.php" method="post">
            <input type="number" name="num1" placeholder="Número 1" required>
            <select name="operator" required>
                <option value="">Selecciona una operación</option>
                <option value="suma">Suma</option>
                <option value="resta">Resta</option>
                <option value="multiplicacion">Multiplicacion</option>
                <option value="division">Division</option>
            </select>
            <input type="number" name="num2" placeholder="Número 2" required>
            <button type="submit">Calcular</button>
        </form>
        <!-- Contenedor para mostrar el resultado -->
        <div class="result">
            <?php include ('calculator.php') ?>
        </div>
    </div>
</body>

</html>