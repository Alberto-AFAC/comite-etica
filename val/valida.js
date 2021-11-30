//estructura vasica envio peticion ajax -> primer parametro que resive es submit. el segundo -> es el identificador formlg. el tercero-> es una funcion que se ejecurara cuando el evento submit ocurra 
jQuery(document).on('submit', '#formtec', function(event) {
    event.preventDefault(); //esta linea toma los datos del formulario  

    jQuery.ajax({ //esta linea es el tipo de efecto el formulario envia los datos. los lee con ajax 
            url: 'conexion/sesiones.php', //primer parametro que toma es la url al archivo 
            type: 'post', // tipo de envio de datos 
            dataType: 'json', //tipo de dato que deseamos resivir 
            data: $(this).serialize(), //los datos que deseamois enviar al archivo php
            beforeSend: function() {
                $('.botton').val('Validando...'); //*cambiamos el contenido del boton al darle clic aparecera (validando)
            }
        })
        .done(function(respuesta) { //espera como parametro una respuesta
            console.log(respuesta); //por consola se pone(respusta)
            if (!respuesta.error) { //*resivimos objeto json desde php para la evaluacion
               
                location.href = 'votar/';
               //  if (respuesta.tipo == 'ADMINISTRADOR' || respuesta.tipo == 'SUPER_ADMIN') { //*primera evaluacion si se encontraron datos, si la respuesta .tipo de usuario es verdad = admin,se redirecciona
               //      location.href = 'admin/'; //*redirecionado al directorio que le toca(carpeta)
               //  } else if (respuesta.tipo == 'INSPECTOR' || respuesta.tipo == 'ADMINISTRATIVO') { //*redireccion al manejador si el .tipo es manejador
               //      location.href = 'inspector/';
               //  } else if (respuesta.tipo == 'DIRECTOR' || respuesta.tipo == 'DIRECTOR_CIAAC' || respuesta.tipo == 'EJECUTIVO') { //*redireccion al manejador si el .tipo es manejador
               //      location.href = 'director/';
               // // } else if (respuesta.tipo == 'INSTRUCTOR') {
               //      //location.href = 'instructor/';
               //  } else if(respuesta.tipo == 'COORDINADOR' || respuesta.tipo == 'INSTRUCTOR'){
               //      location.href = 'coordinador/';                    
               //  }else if (respuesta.tipo == 'HUMANOS') {
               //      location.href = 'humanos/';
               //  }



            } else { //*si no se encuentra datos, mecionar que no hay cooincidencia en la base de datos
                $('.errortec').fadeIn('slow'); //*se mostrara div con classe .error que esta en el formulario haciendo referencia 
                setTimeout(function() { //*ocultaremos el mensaje con sitTimeout
                    $('.errortec').fadeOut('slow'); //*ocultaremos el div con clase error con slideUP
                }, 3000); //*se ejecutara al rededor de 3 segundos
                $('.botton').val('Iniciar Sesion'); //*cambiaremos el valor de nuestro boton, que vuelva la estado normal como al principio
            }

        })
        .fail(function(resp) {
            console.log(resp.responseText); //por consola resp.responseText
        })
        .always(function() {
            console.log("complete");
        });

});