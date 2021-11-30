// JavaScript Validation For Registration Page

$('document').ready(function()
{ 		 		

		  var nameregex = /^[A-Z0-9_\.\-\+\*\/,a-z,ñ,Ñ]+$/;
		 
		 $.validator.addMethod("validname", function( value, element ) {
		     return this.optional( element ) || nameregex.test( value );
		 }); 
	
		 var eregex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		 
		 $.validator.addMethod("validemail", function( value, element ) {
		     return this.optional( element ) || eregex.test( value );
		 });
		 
		 $("#formtec").validate({
					
		  rules:
		  {
				tecn: {
				required: true,
				validname: false,
				minlength: 5
				},
				pass: {
					required: true,
					minlength: 1,
					maxlength: 15
				},
		   },
		   messages:
		   {

				tecn: {
					required: "Favor de ingresar usuario",
					validname: "Utilice formato solicitado",
					minlength: "Su usuario es demasiado corto"
					  },
				pass:{
					required: "Favor de ingresar contraseña",
					minlength: "La contraseña tiene al menos 1 caracteres"
					},

		   },
		   errorPlacement : function(error, element) {
			  $(element).closest('.form-group').find('.help-block').html(error.html());
		   },
		   highlight : function(element) {
			  $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
		   },
		   unhighlight: function(element, errorClass, validClass) {
			  $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
			  $(element).closest('.form-group').find('.help-block').html('');
		   },
		   

		   
		   }); 
		   
		   
		
});


$('document').ready(function()
{ 		 		
		 // name validation
		 var number = /^\d{1,15}$/;
		 
		 $.validator.addMethod("validnumer", function( value, element ) {
		     return this.optional( element ) || number.test( value );
		 }); 
		 
		 // valid email pattern
		 var eregex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		 
		 $.validator.addMethod("correo", function( value, element ) {
		     return this.optional( element ) || eregex.test( value );
		 });
		 
		 $("#form").validate({
					
		  rules:
		  {
				correo: {
				required: true,
				validnumer: false,
				minlength: 15
				},

		   },
		   messages:
		   {

				correo: {
					required: "Favor de ingresar su correo",
					validnumer: "Utilice formato solicitado",
					minlength: "Su correo es demasiado corto"
					  }

		   },
		   errorPlacement : function(error, element) {
			  $(element).closest('.form-group').find('.help-block').html(error.html());
		   },
		   highlight : function(element) {
			  $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
		   },
		   unhighlight: function(element, errorClass, validClass) {
			  $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
			  $(element).closest('.form-group').find('.help-block').html('');
		   },
		   
		   
		   }); 
		   
});


$('document').ready(function()
{ 		 		

		  var nameregex = /^[A-Z0-9_\.\-\+\*\/,a-z,ñ,Ñ]+$/;
		 
		 $.validator.addMethod("validname", function( value, element ) {
		     return this.optional( element ) || nameregex.test( value );
		 }); 
	
		 var eregex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		 
		 $.validator.addMethod("validemail", function( value, element ) {
		     return this.optional( element ) || eregex.test( value );
		 });
		 
		 $("#formusu").validate({
					
		  rules:
		  {
				nombre: {
				required: true,
				validname: true,
				minlength: 5
				},
				n_empleado: {
				required: true,
				validnumer: true,
				minlength: 7
				},
		   },
		   messages:
		   {

				nombre: {
					required: "Favor de ingresar usuario",
					validname: "Utilice formato solicitado",
					minlength: "Su usuario es demasiado corto"
					  },
				n_empleado:{
					required: "Favor de ingresar su número",
					validnumer: "Utilice formato solicitado",
					minlength: "Su número es demasiado corto"
					},

		   },
		   errorPlacement : function(error, element) {
			  $(element).closest('.form-group').find('.help-block').html(error.html());
		   },
		   highlight : function(element) {
			  $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
		   },
		   unhighlight: function(element, errorClass, validClass) {
			  $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
			  $(element).closest('.form-group').find('.help-block').html('');
		   },
		   

		   
		   }); 
		   
		   
		
});


function mayus(e){ e.value=e.value.toUpperCase(); }  