<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action']) && isset($_POST['number'])) {
    $action = $_POST['action'];
    $number = $_POST['number'];
    $result = '';

    // Función para convertir de decimal a binario
    function decimalToBinary($number)
    {
        return decbin($number);
    }

    // Función para convertir de binario a decimal
    function binaryToDecimal($number)
    {
        return bindec($number);
    }

    // Realizar la conversión según la acción seleccionada
    switch ($action) {
        case 'decimalToBinary':
            $result = "<b>Decimal</b> a <b>Binario</b> es: <b>" . decimalToBinary($number);
            break;
        case 'binaryToDecimal':
            $result = "<b>Binario</b> a <b>Decimal</b> es: <b>" . binaryToDecimal($number);
            break;
        default:
            $result = 'Acción no válida';
            break;
    }

    // Mostrar el resultado
    echo "<p>El resultado de la conversión $result</p>";
}
?>