document.addEventListener('DOMContentLoaded', function() {
    let actionSelect = document.getElementById('action');
    let numberInput = document.getElementById('number');

    // Agregar evento de escucha al cambio de opción en el select
    actionSelect.addEventListener('change', function() {
        if (actionSelect.value === 'binaryToDecimal') {
            // Si la acción es "Binario a Decimal", agregar evento de escucha al campo de entrada
            numberInput.addEventListener('input', restrictInput);
        } else {
            // Si la acción no es "Binario a Decimal", quitar el evento de escucha del campo de entrada
            numberInput.removeEventListener('input', restrictInput);
        }
    });

    // Función para restringir la entrada a solo 0 y 1
    function restrictInput(event) {
        let inputValue = event.target.value;
        let filteredValue = inputValue.replace(/[^01]/g, ''); // Filtrar caracteres que no sean 0 o 1
        event.target.value = filteredValue; // Actualizar el valor del campo de entrada
    }
});
