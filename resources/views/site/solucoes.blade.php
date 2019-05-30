@extends('site_template.base') @section('conteudo')
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

    <section class="section-contato">
        <h2 class="featurette-heading">Quer saber mais? <br/>
                        Entre em contato com nossos consultores</h2> 
                        <a href="{{ route('site.contato') }}" class="btn btn-primary">Contate-nos agora</a>       
</section>
<hr class="featurette-divider">
</div>


@endsection