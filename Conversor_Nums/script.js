document.addEventListener('DOMContentLoaded', function () {
    let actionSelect = document.getElementById('action');
    let numberInput = document.getElementById('number');

    // Verificar el valor inicial del menu desplegable al cargar el DOM
    if (actionSelect.value === '') {
        // Si es un valor vacio, deshabilitar el campo de entrada
        numberInput.disabled = true; 
    }

    // Agregar evento de input al cambio de value en el select
    actionSelect.addEventListener('change', function () {
        if (actionSelect.value === 'binaryToDecimal') {
            // Si la accion es Binario a Decimal, agregar evento de input al campo de entrada
            numberInput.addEventListener('input', restrictInputBinary);
        } else {
            // Si la accion no es Binario a Decimal, quitar el evento de input del campo de entrada
            numberInput.removeEventListener('input', restrictInputBinary);
        }
        if (actionSelect.value === '') {
            // Si no se ha seleccionado ningun value, deshabilitar el campo de entrada
            numberInput.disabled = true;
        } else {
            // Si se ha seleccionado algun value, habilitar el campo de entrada
            numberInput.disabled = false;
        }
    });

    // Funcion para restringir la entrada a solo 0 y 1 en caso de Binario a Decimal
    function restrictInputBinary(event) {
        let inputValue = event.target.value;
        // Filtrar caracteres que no sean 0 o 1
        let filteredValue = inputValue.replace(/[^01]/g, '');
        // Actualizar el valor del campo de entrada
        event.target.value = filteredValue; 
    }

    // Agregar evento de input al campo de entrada en caso de Decimal a Binario
    numberInput.addEventListener('input', restrictInputDecimal);

    // Funcion para restringir la entrada a solo numeros en caso de Decimal a Binario
    function restrictInputDecimal(event) {
        let inputValue = event.target.value;
        // Filtrar caracteres que no sean numeros
        let filteredValue = inputValue.replace(/\D/g, '');
        // Actualizar el valor del campo de entrada
        event.target.value = filteredValue; 
    }
});
