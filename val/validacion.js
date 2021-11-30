//estructura vasica envio peticion ajax -> primer parametro que resive es submit. el segundo -> es el identificador formlg. el tercero-> es una funcion que se ejecurara cuando el evento submit ocurra 
jQuery(document).on('submit','#form',function(event){
	event.preventDefault(); //esta linea toma los datos del formulario  

	jQuery.ajax({ //esta linea es el tipo de efecto el formulario envia los datos. los lee con ajax 
		url:'conexion/sesion.php', //primer parametro que toma es la url al archivo 
		type:'post', // tipo de envio de datos 
		dataType:'json',//tipo de dato que deseamos resivir 
		data:$(this).serialize(), //los datos que deseamois enviar al archivo php
		beforeSend:function(){
			$('.botton').val('Validando...');//*cambiamos el contenido del boton al darle clic aparecera (validando)
		}
	})
	.done(function(respuesta){ //espera como parametro una respuesta
		console.log(respuesta); //por consola se pone(respusta)

	   if(!respuesta.error){	//*resivimos objeto json desde php para la evaluacion
	   	
		   	  	location.href = 'usuario/';							   			

	   }else{	//*si no se encuentra datos, mecionar que no hay cooincidencia en la base de datos
	   	$('.error').fadeIn('slow');//*se mostrara div con classe .error que esta en el formulario haciendo referencia 
	   		setTimeout(function(){//*ocultaremos el mensaje con sitTimeout
	   			$('.error').fadeOut('slow');//*ocultaremos el div con clase error con slideUP
	   		},4000);//*se ejecutara al rededor de 3 segundos
	   		$('.botton').val('Iniciar Sesion');//*cambiaremos el valor de nuestro boton, que vuelva la estado normal como al principio
	   }						 
								
		})
	.fail(function(resp){
		console.log(resp.responseText);//por consola resp.responseText
		})
	.always(function(){
		console.log("complete");
	});
	
});
