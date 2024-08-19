
$(document).ready(function() {
    $("#miFormulario").validate({
        rules: {
            nombre: {
                required: true,
                minlength: 3
            }, 
            apellido: {
                required: true,
                minlength: 3
            },
            number: {
                required: true,
                number: true,
            },
            email: {
                required: true,
                email: true
            },
            edad: {
                required: true,
                number: true,
                min: 18
            },
            direccion: {
                required: true
            }
        },
        messages: {
            nombre: {
                required: "Por favor ingresa tu nombre",
                minlength: "Tu nombre debe tener al menos 3 caracteres"
            },
            apellido: {
                required: "Por favor ingresa tu apellido",
                minlength: "Tu apellido debe tener al menos 3 caracteres"
            },
            number: {
                required: "Por favor ingresa un número",
                number: "Por favor ingresa un número válido"
            },
            email: {
                required: "Por favor ingresa tu dirección de correo electrónico",
                email: "Por favor ingresa una dirección de correo electrónico válida"
            },
            edad: {
                required: "Por favor ingresa tu edad",
                number: "Por favor ingresa un número válido",
                min: "Debes tener al menos 18 años"
            },
            direccion: {
                required: "Por favor ingresa tu dirección"
            }
        },
        submitHandler: function(form) {
            form.submit();
        }
    });
});