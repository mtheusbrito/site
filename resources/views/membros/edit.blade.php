@extends('template.adm_template.base') @section('conteudo')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Editar membro</h1>
</div>

<div class="card">
        <div class="card-body">
{!! Form::model($membro, ['route' => ['membros.update', $membro->id], 'method' => 'put', 'enctype' => 'multipart/form-data' ,'class' => '']) !!}
@include('membros.form')


@include('template.formulario.submit',['input' => 'Atualizar', 'attributes'=> [ 'class'=> 'btn btn-primary', 'required' => true]])

{!! Form::close() !!}
        </div>
</div>

@endsection