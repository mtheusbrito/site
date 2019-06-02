@extends('template.site_template.base') @section('conteudo')
<div class="container marketing">

    <hr class="featurette-divider">
    @foreach ($projetos as $projeto)
    <div class="row featurette">
            <div class="col-md-8 order-md-1">
            <h2 class="featurette-heading">{{$projeto->titulo}}</h2>
            <h3>{{ $projeto->subtitulo }}</h3>
                <p class="lead"> {{$projeto->descricao}}</p>
            </div>
            <div class="col-md-4 order-md-2">
                <img class="featurette-image img-fluid mx-auto" src="{{ asset($projeto->imagem) }}" alt="Imagem">
            </div>
    
        </div>
        <hr class="featurette-divider">
    @endforeach
        {!! $projetos->links() !!}
   </div>
@endsection