$(document).ready(function() {
    $("#miFormulario").validate({
        rules: {
            nombre: {
                required: true,
                minlength: 2
            },
            email: {
                required: true,
                email: true
            },
            edad: {
                required: true,
                number: true,
                min: 18
            }
        },
        messages: {
            nombre: {
                required: "Por favor ingresa tu nombre",
                minlength: "Tu nombre debe tener al menos 2 caracteres"
            },
            email: {
                required: "Por favor ingresa tu dirección de correo electrónico",
                email: "Por favor ingresa una dirección de correo electrónico válida"
            },
            edad: {
                required: "Por favor ingresa tu edad",
                number: "Por favor ingresa un número válido",
                min: "Debes tener al menos 18 años"
            }
        },
        submitHandler: function(form) {
            form.submit();
        }
    });
});