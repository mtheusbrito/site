@extends('template.adm_template.base') @section('conteudo')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Novo projeto</h1>
</div>
{!! Form::open(['route' => 'projetos.store', 'method' => 'post', 'enctype' => 'multipart/form-data' ,'class' => '']) !!}
@include('projetos.form')


@include('template.formulario.submit',['input' => 'Adicionar', 'attributes'=> [ 'class'=> 'btn btn-primary', 'required' => true]])

{!! Form::close() !!}

@endsection