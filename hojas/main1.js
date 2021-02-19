$(document).ready(function(){
	tablaSeguimiento = $("#tablaSeguimiento").DataTable({
		"columnDefs":[{
			"targets": -1,
			"data":null,
			"defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btnEditar' data-toggle='modal'>Editar</button><button class='btn btn-danger btnBorrar'>Borrar</button></div></div>"
		}],
		
	"language": {
		"lengthMenu": "Mostrar _MENU_ registros",
		"zeroRecords": "No se encontraron resultados",
		"info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
		"infoEmpy": "Mostrando registros del 0 al 0 de un total de 0 registros",
		"infoFiltered": "(filtrado de un total de _MAX_ registros)",
		"sSearch": "Buscar:",
		"oPaginate": {
			"sFirst": "Primero",
			"sLast": "Ultimo",
			"sNext": "Siguiente",
			"sPrevious": "Anterior"
		},
		"sProcessing": "Procesando...",
	}
	});
	$("#btnEditar").click(function(){
		$("#formSeguimiento").trigger("reset");
		$(".modal-header").css("background-color", "#198AF7");
		$(".modal-header").css("color", "white");
		$(".modal-title").text("Editar seguimiento");


		$("#modalSeguimiento").modal("show");
});
	$("#btnNuevos").click(function(){
		$("#formSeguimiento").trigger("reset");
		$(".modal-header").css("background-color", "#28a745");
		$(".modal-header").css("color", "white");
		$(".modal-title").text("Nuevo seguimiento");


		$("#modalSeguimiento").modal("show");
});
	
});