(function($, DataTable) {
    $.extend(true, DataTable.defaults, {
        "dom": '<"dt-buttons"Bf><"clear">lirtp',
        "buttons": [

            { extend: 'copy', text: 'Copiar' }, 'excel', 'pdf',
        ],
        "language": {
            "buttons": {
                "copyTitle": "Copiado para área de transferencia",
                "copySuccess": {
                    _: "%d item's copiado's",
                    1: "item's copiado's"
                }
            },
            "sEmptyTable": "Nenhum registro encontrado",
            "sProcessing": "A processar...",
            "sLengthMenu": "Mostrar _MENU_ registos",
            "sZeroRecords": "Não foram encontrados resultados",
            "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registos",
            "sInfoEmpty": "Mostrando de 0 até 0 de 0 registos",
            "sInfoFiltered": "(filtrado de _MAX_ registos no total)",
            "sInfoPostFix": "",
            "search": "<i class='fa fa-search'></i>",
            "sUrl": "",

            "oPaginate": {
                "sFirst": "Primeiro",
                "sPrevious": "Anterior",
                "sNext": "Seguinte",
                "sLast": "Último"
            },
            "oAria": {
                "sSortAscending": ": Ordenar colunas de forma ascendente",
                "sSortDescending": ": Ordenar colunas de forma descendente"
            }
        }
    });
})(jQuery, jQuery.fn.dataTable);