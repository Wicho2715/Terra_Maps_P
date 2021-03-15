$(document).ready(function() {
    tablaPublicidad = $('#tablaPublicidad').DataTable({
        //Cambiar el lenguaje del pluggin
        "language": {
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "No se encontraron resultados",
            "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "infoEmpy": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "infofiltered": "(filtrado de un total de _max_ registros)",
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
});