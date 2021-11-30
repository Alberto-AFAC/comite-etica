function lista_area(){

	var table = $("#area").DataTable({

		"destroy": true,
		"ajax":{
		"method":"POST",
		"url":"../../php/area.php"
		},

		"columns":[
			{"data":"id_area"},
			{"data":"adscripcion"},
			{"data":"id_sub"},
			{"defaultContent":"<button type='button' data-toggle='modal' data-target='#modalEditar' class='editar btn btn-primary'><i class='fa fa-pencil-square-o'></i></button>  <button type='button' class='eliminar btn btn-danger' data-toggle='modal' data-target='#modalEliminar'><i class='fa fa-trash-o'></i></button>"}
		],
	});

}

