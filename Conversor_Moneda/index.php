<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moneda PhP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="converter">
        <h2>Conversor de Pesos Colombianos</h2>
        <p><b>*Nota: </b>Los Valores de cada una de las monedas estan actualizadas al <b>28 de Marzo del 2024</b></p>
        <!-- Formulario para ingresar el valor de la moneda y escojer el valor de moneda a convertir -->
        <form action="index.php" method="post">
            <label for="amount">Cantidad a Convertir en Pesos Colombianos:</label>
            <input type="number" id="amount" name="cop" required>
            <label for="currency">Selecciona la Moneda:</label>
            <select name="convert" id="currency" required>
                <option value="">Seleccione la moneda a la que va a convertir...</option>
                <option value="usd">Dólares (USD)</option>
                <option value="eur">Euros (EUR)</option>
                <option value="inr">Rupias Indias (INR)</option>
            </select>
            <button type="submit">Convertir</button>
        </form>
        <!-- Contenedor para mostrar el resultado -->
        <div class="result">
            <?php include ('convert.php') ?>
        </div>
    </div>
</body>

</html>