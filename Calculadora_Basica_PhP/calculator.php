<?php
//Declaro e inicializo las variables
$num1 = 0;
$num2 = 0;
$operator = 0;

// Verifica si la solicitud es de tipo POST, esto va y verifica que tipo de metodo use, en este caso use un POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtengo los datos enviados desde el formulario
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];

    // Realiza la operación correspondiente según la selección del usuario
    switch ($operator) {
        case "1":
            $result = $num1 + $num2; // Suma
            break;
        case "2":
            $result = $num1 - $num2; // Resta
            break;
        case "3":
            $result = $num1 * $num2; // Multiplicacion
            break;
        case "4":
            if ($num2 != 0) { // Verifica si el segundo número no es cero
                $result = $num1 / $num2; // Division
            } else {
                $result = "No se puede division por cero"; //Si es cero arrojar este error
            }
            break;
        default:
            $result = "Operación no válida";
    }
    // Dar el resultado con el echo lo envio al front donde lo recibo en el div result donde tengo el include
    echo "<p>El Resultado de la <b>$operator</b>  entre los numeros <b>$num1</b> y <b>$num2</b> es: <b>$result</b></p>";
}
?>