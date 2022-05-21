$(function() {
    // Initialize form validation on the registration form.
    // It has the name attribute "registration"
    $("#formulario").validate({
      // Specify validation rules
      rules: {
        // The key name on the left side is the name attribute
        // of an input field. Validation rules are defined
        // on the right side
        nombre: "required",
        apPat: "required",
        apMat: "required",
        edad: {
            required:true,
            number:true
        },
        usuario:"required",
        
        clave: {
          required: true,
          minlength: 5
        }
      },
      // Specify validation error messages
      messages: {
        nombre: "Por favor ingrese su nombre",
        apPat: "Por favor ingrese su apellido",
        apMat: "Por favor ingrese su apellido",
        edad:{required:"Por favor ingrese su edad",
        number:"Por favor ingrese un n"},
        usuario:"Por favor ingrese su usuario",
        clave: {
          required: "Por favor ingrese una contraseña",
          minlength: "La contraseña debe ser de 5 caracteres o más"
        },
        
      },
      // Make sure the form is submitted to the destination defined
      // in the "action" attribute of the form when valid
      submitHandler: function(form) {
        form.submit();
      }
    });
  });