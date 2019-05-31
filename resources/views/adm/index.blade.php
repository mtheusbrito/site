@extends('template.adm_template.base') @section('conteudo')
<h1 class="h2">Dashboard</h1>
<div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group mr-2">
        <button class="btn btn-sm btn-outline-secondary">Compartilhar</button>
        <button class="btn btn-sm btn-outline-secondary">Exportar</button>
    </div>
    <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
        <span data-feather="calendar"></span> Esta semana
    </button>
</div>

@endsection