document.addEventListener('DOMContentLoaded', function () {
    let actionSelect = document.getElementById('action');
    let numberInput = document.getElementById('number');

    // Verificar el valor inicial del menú desplegable al cargar la página
    if (actionSelect.value === '') {
        numberInput.disabled = true; // Si es una cadena vacía, deshabilitar el campo de entrada
    }

    // Agregar evento de escucha al cambio de opción en el select
    actionSelect.addEventListener('change', function () {
        if (actionSelect.value === 'binaryToDecimal') {
            // Si la acción es "Binario a Decimal", agregar evento de escucha al campo de entrada
            numberInput.addEventListener('input', restrictInputBinary);
        } else {
            // Si la acción no es "Binario a Decimal", quitar el evento de escucha del campo de entrada
            numberInput.removeEventListener('input', restrictInputBinary);
        }
        if (actionSelect.value === '') {
            // Si no se ha seleccionado ninguna opción, deshabilitar el campo de entrada
            numberInput.disabled = true;
        } else {
            // Si se ha seleccionado alguna opción, habilitar el campo de entrada
            numberInput.disabled = false;
        }
    });

    // Función para restringir la entrada a solo 0 y 1 en caso de "Binario a Decimal"
    function restrictInputBinary(event) {
        let inputValue = event.target.value;
        let filteredValue = inputValue.replace(/[^01]/g, ''); // Filtrar caracteres que no sean 0 o 1
        event.target.value = filteredValue; // Actualizar el valor del campo de entrada
    }

    // Agregar evento de escucha al campo de entrada en caso de "Decimal a Binario"
    numberInput.addEventListener('input', restrictInputDecimal);

    // Función para restringir la entrada a solo números en caso de "Decimal a Binario"
    function restrictInputDecimal(event) {
        let inputValue = event.target.value;
        let filteredValue = inputValue.replace(/\D/g, ''); // Filtrar caracteres que no sean números
        event.target.value = filteredValue; // Actualizar el valor del campo de entrada
    }
});
