@extends('template.adm_template.base') @section('conteudo')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Projetos</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
    
    <a class="btn btn-sm btn-outline-secondary" href="{{route('projetos.create')}}">
            <span data-feather="plus-circle"></span> Adicionar projeto
        </a>
    </div>  
</div>
@include('template.adm_template.flash_messages')
<table id="projetos" class="table table-striped table-bordered" style="width:100%">
</table>

@endsection