<?php
//Declaro e inicializo las variables
$COP = 0;
$CONVERT = 0;

// Verifica si la solicitud es de tipo POST, esto va y verifica que tipo de metodo use, en este caso use un POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtengo los datos enviados desde el formulario
    $COP = $_POST['cop'];
    $CONVERT = $_POST['convert'];

    // Realiza la operación correspondiente según la selección del usuario
    switch ($CONVERT) {
        case 'usd':
            // Convierto el Valor a Dolares, y me muestra en pantalla el valor de $result concatenado
            $result = $COP * 0.00026;
            echo "<p><b>$ $COP Pesos Colombianos</b>, equivale a <b>$result Dólares (USD)</p>";
            break;
        case 'eur':
            // Convierto el Valor a Euros, y me muestra en pantalla el valor de $result concatenado
            $result = $COP * 0.00024;
            echo "<p><b>$ $COP Pesos Colombianos</b>, equivale a <b>$result Euros (EUR)</p>";
            break;
        case 'inr':
            // Convierto el Valor a Rupias, y me muestra en pantalla el valor de $result concatenado
            $result = $COP * 0.022;
            echo "<p><b>$ $COP Pesos Colombianos</b>, equivale a <b>$result Rupias Indias (INR)</p>";
            break;
        default:
            echo "<p>La moneda seleccionada no es válida.</p>";
    }
}
?>