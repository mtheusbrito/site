    var host = window.location.hostname;

    if (host == 'localhost') {
        //desenvolvimento
        host = 'http://' + host + ':8000';

    } else {
        //producao
    }


    function renderData(data, type, row) {

    }

    function renderCpf(data, type, row) {
        data.replace(/[^\d]/g, "");
        return data.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, "$1.$2.$3-$4");
    }

    function renderTelefone(data, type, row) {
        data.replace(/[^\d]/g, "");
        return data.replace(/(\d{2})(\d{9})/, "($1)$2");
    }

    function renderAtivo(data, type, row) {
        if (data == true) {
            return "Ativo"
        } else {
            return "Desativado"
        }
    }

    function eventDelete(link) {

        var crf_token = $('meta[name="csrf-token"]').attr('content');


        Swal.fire({
            title: 'Você tem certeza?',
            text: "Uma vez deletado, você não poderá recuperar este arquivo!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sim, exclua!',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url: link,
                    type: 'POST',
                    data: {
                        '_method': 'DELETE',
                        '_token': crf_token,

                    },
                    success: function(response) {
                        $('.table').DataTable().ajax.reload();
                        Swal.fire(
                            'Excluído!',
                            'Seu arquivo foi deletado.',
                            'success'
                        )

                    },
                    error: function(xhr) {
                        Swal.fire({
                            type: 'error',
                            title: 'Oops...',
                            text: 'Algo deu errado!',

                        })
                    }
                });


            } else {

            }
        })

        console.log(link);
    }
    var btn = function(link, icon, title, className) {
        if (className == undefined)
            className = 'btn-default';
        $('[data-toggle="tooltip"]').tooltip();

        return "<a class='btn " + className + " btn-round btn-sm' href='" + link +
            "'title='" + title + "' data-toggle='tooltip' data-placement='top' data-container='body'>" +
            "<i class='" + icon + "' aria-hidden='true'></i>" +
            "</a>";
    }
    var btnEdit = function(link) {
        return btn(link, 'fa fa-pencil', 'Editar');
    }
    var btnDetalhes = function(link) {
        return btn(link, 'fa fa-eye', 'Detalhes');
    }
    var btnDelete = function(link) {


        return '<button onClick="eventDelete(\'' + link + '\')" class="btn btn-default btn-round btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i></button>'
    }

    function renderProjetos(data, type, row) {
        return btnEdit(host + '/adm/projetos/' + data.id + '/edit') +
            btnDelete(host + '/adm/projetos/' + data.id);

    }
    $(function() {

        // $('.select2').select2();

        $('#projetos').DataTable({
            "ajax": {
                "url": host + '/projetos/paginate',
                "dataSrc": ''
            },
            'columns': [
                { title: "Titulo", data: 'titulo' },
                { title: "Subtitulo", data: 'subtitulo' },
                { title: "Descricao", data: 'descricao' },
                {
                    title: 'Opções',
                    data: null,
                    render: renderProjetos
                }

            ]
        });

    });