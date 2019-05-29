@extends('site_template.base')
@section('conteudo')
<div id="myCarosel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarosel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarosel" data-slide-to="1"></li>
          <li data-target="#myCarosel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="/img/slide.jpg" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                    <h5>Lorem Ipsum</h5>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                  </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="/img/slide.jpg" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                    <h5>Lorem Ipsum</h5>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                  </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="/img/slide.jpg" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
                    <h5>Lorem Ipsum</h5>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                  </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarosel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarosel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>


    <div class="container marketing">
            <hr class="featurette-divider">
           

            <div class="row featurette">
                    <div class="col-md-7">
                      <h2 class="featurette-heading">Não é somente o que fazemos, mas como fazemos.</h2>
                    <p class="lead"><span class="text-muted">Nós não apenas desenvolvemos, nós criamos valor para o seu negócio!</span></p>
                    <p class="lead">Nossa empresa utiliza as mais modernas tecnologias de nível mundial, que garantem a melhor execução, segurança e usabilidade dos sistemas e aplicativos criados.</p>
                
                    <h4>Softwares sob demanda</h4>
                    <p class="lead"><span class="text-muted">Nós desenvolvemos softwares sob demanda do cliente, seja com a finalidade de integração com sistemas existentes, seja um sistema completamente novo para atender as necessidades de gestão da empresa</span></p>
                    
                    <h4>Inovação constante</h4>
                    <p class="lead"><span class="text-muted">Utilizamos as mais modernas ferramentas e frameworks do mercado. Estamos sempre em busca de novas tecnologias que auxiliem e agilizem o processo de desenvolvimento de sistemas.</span></p>
                
                    <h4>Expertise</h4>
                    <p class="lead"><span class="text-muted"> Contamos com profissionais experientes e capacitados, que dominam todas as etapas do processo de desenvolvimento de um sistema, desde o seu levantamento até sua documentação final.</span></p>
                </div>
                    <div class="col-md-5">
                      <img class="featurette-image img-fluid mx-auto" src="/img/500x500.jpg" alt="Imagem">
                    </div>
            </div>
          
            <hr class="featurette-divider">

            <h2 class="featurette-heading">Veja o que podemos fazer por seu negócio!</h2>
            
            <div class="row featurette">
                    <div class="row">
                            <div class="col-lg-4">
                                    <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
                                    <h2>Desenvolvimento de Softwares</h2>
                                    <p>Projetamos, desenvolvemos e mantemos o sistema de sua empresa. O software pode ser desenvolvido em diversas tecnologias.</p>
                                   
                            </div>
                            <div class="col-lg-4">
                                    <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
                                    <h2>Outsourcing de Aplicações</h2>
                                    <p>Realizamos ou damos continuidade a um projeto desenvolvido exclusivamente para o seu negócio com uma equipe habilitada e afinada, buscando sempre as melhores soluções alinhadas a sua real necessidade e objetivo.</p>
                            </div>
                            <div class="col-lg-4">
                                    <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
                                    <h2>Aplicativos Comerciais</h2>
                                    <p>Aplicativos próprios de gestão de Varejo e Restaurantes, com emissão de NFC-e, NF-e e todos os demais relatórios necessários ao cumprimento das obrigações fiscais e tributárias.</p>
                            </div>
                    </div>

            </div>
            <hr class="featurette-divider">

    </div>
    
@endsection
