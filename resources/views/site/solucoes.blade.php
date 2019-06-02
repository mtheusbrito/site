@extends('template.site_template.base') @section('conteudo')
<div class="container marketing">
    <hr class="featurette-divider">
    <h2 class="featurette-heading" style="text-align: center">Soluções ágeis e confiáveis para gerir as mudanças e garantir a continuidade e rentabilidade de seu negócio.</h2>
    <p class="lead" style="text-align: center">Nossos sistemas são práticos e customizáveis, adequando-se à realidade de sua empresa, não importando o tamanho dela.</p>
        <div class="row">
            <div class="col-md-6">
                    <p class="lead">Os sistemas desenvolvidos por nós são altamente customizáveis. Além disso, personalizamos e adequamos nossos sistemas às necessidades de nossos clientes sem, contudo, gerar grande impacto de custo/tempo nessas mudanças. É a garantia de que terá um sistema que atenda em 100% suas expectativas.</p>
            </div>
            <div class="col-md-6">
                    <p class="lead">Por sermos Fábrica de Software e trabalharmos com os mais modernos Frameworks do mercado, temos agilidade e baixo custo tanto para desenvolvimento de novos projetos ou integração de novas aplicações aos sistemas legados, quanto para adequação dos sistemas desenvolvidos por nós para deixá-los com a "cara" da sua empresa.</p>
            </div>
        </div>

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
    <section class="section-contato">
        <h2 class="featurette-heading">Quer saber mais? <br/>
                        Entre em contato com nossos consultores</h2> 
                        <a href="{{ route('site.contato') }}" class="btn btn-primary">Contate-nos agora</a>       
</section>
<hr class="featurette-divider">
</div>


@endsection