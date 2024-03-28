<?php
// Verifica si la solicitud es de tipo POST, esto va y verifica que tipo de metodo use, en este caso use un POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtengo los datos enviados desde el formulario
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];

   