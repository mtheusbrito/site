@extends('template.site_template.base') @section('conteudo')
<div class="container marketing">
    <hr class="featurette-divider">
    <div class="row featurette">
        <div class="row">
            <div class="col-lg-3">
                <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="100" height="100">
                <h2>Levantamento dos requisitos</h2>
                <p>Fazemos todo o levantamento e análise inicial dos requisitos do sistema.</p>

            </div>
            <div class="col-lg-3">
                <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="100" height="100">
                <h2>Modelagem do sistema</h2>
                <p>Modelamos o banco de dados, fazemos o caso de uso e desenvolvemos o sistema de acordo com a documentação levantada.</p>
            </div>
            <div class="col-lg-3">
                <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="100" height="100">
                <h2>Desenvolvimento da aplicação</h2>
                <p>Identificamos a melhor tecnologia para o desenvolvimento da aplicação e a equipe de análise e programação desenvolve todos os módulos definidos para o sistema.
                </p>
            </div>
            <div class="col-lg-3">
                <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="100" height="100">
                <h2>Documentação</h2>
                <p>Documentação técnica e de utilização do sistema desenvolvido de forma a dar total condições de manutenção à equipe do cliente assim como, facilitar a aprendizado or parte do usuário.</p>
            </div>
        </div>

    </div>

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