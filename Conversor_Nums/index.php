<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor Decimal-Binario</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script> 
</head>

<body>
    <div class="converter">
        <h2>Conversor Decimal-Binario</h2>
        <form action="index.php" method="post">
            <label for="action">Selecciona la acción:</label>
            <select name="action" id="action" required>
                <option value="">Seleccione...</option>
                <option value="decimalToBinary">Decimal a Binario</option>
                <option value="binaryToDecimal">Binario a Decimal</option>
            </select>
            <label for="number">Ingresa el número:</label>
            <input type="text" name="number" id="number" required>
            <button type="submit">Convertir</button>
        </form>
        <div class="result">
            <?php include ('convert.php'); ?>
        </div>
    </div>
</body>

</html>