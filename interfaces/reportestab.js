$(document).ready(function() {
    tablaReportes = $('#tablaReportes').DataTable({
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
        },
        //para usar los botones   
        responsive: "true",
        dom: 'Bfrtilp',
        buttons: [{
                extend: 'excelHtml5',
                text: '<i class="fas fa-file-excel"></i> ',
                titleAttr: 'Exportar a Excel',
                className: 'btn btn-success'
            },
            {
                extend: 'pdfHtml5',
                text: '<i class="fas fa-file-pdf"></i> ',
                titleAttr: 'Exportar a PDF',
                className: 'btn btn-danger',
                customize: function(doc) {
                    doc.styles.title = {
                        color: 'black',
                        fontSize: '40',
                        alignment: 'center'
                    }
                    doc.styles.tableHeader = {
                        color: 'red',
                        alignment: 'center'
                    }
                    doc.styles.tableBodyEven = {
                        alignment: 'center'
                    }
                    doc.styles.tableBodyOdd = {
                        alignment: 'center'
                    }
                    doc.styles.tableFooter = {
                        alignment: 'center'
                    }

                }
            },
            {
                extend: 'print',
                text: '<i class="fa fa-print"></i> ',
                titleAttr: 'Imprimir',
                className: 'btn btn-primary'
            },
        ]
    });
});