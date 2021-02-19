$(document).ready(function(){
	tablaClientes = $("#tablaClientes").DataTable({
		"columnDefs":[{
			"targets": -1,
			"data":null,
			"defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btnEditar'>Editar</button><button class='btn btn-danger btnBorrar'>Borrar</button></div></div>"
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



$("#btnNuevo").click(function(){
		$("#formClientes").trigger("reset");
		$(".modal-header").css("background-color", "#28a745");
		$(".modal-header").css("color", "white");
		$(".modal-title").text("Nuevo cliente");
		$("#modalCRUD").modal("show");
		id=null;
});
//variable para capturar la fila 
var fila;
// boton editar
$(document).on("click", ".btnEditar", function(){
	fila = $(this).closest("tr");
	
});
// noton borrar
$(document).on("click", ".btnBorrar", function(){

});
});