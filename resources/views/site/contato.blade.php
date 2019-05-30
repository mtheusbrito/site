@extends('site_template.base') @section('conteudo')
<div class="container marketing">
    <hr class="featurette-divider">
    <h2 class="featurette-heading">Entre em contato conosco</h2>

    <div class="row">
        <div class="col-md-8">
            <form>
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" aria-describedby="emailHelp" placeholder="Seu nome">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Seu email">
                </div>
                <div class="form-group">
                    <label for="assunto">Assunto</label>
                    <input type="text" class="form-control" id="assunto" placeholder="Assunto">
                </div>
                <div class="form-group">
                    <label for="mensagem">Sua mensagem</label>
                    <textarea class="form-control" id="mensagem" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
        <div class="col-md-4">
            <div class="contato" style="margin-top: 30px">
                <span><i class="fas fa-map-marker-alt"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                <br/>
                <span><i class="fas fa-phone"></i>(22) 999979775</span>
                <br/>
                <span><i class="fas fa-envelope"></i><a href="mailto:mtheus.dev@gmail.com">contato@gmail.com</a></span>
                <br/>
            </div>
        </div>
    </div>
    <hr class="featurette-divider">
    <div class="map-responsive">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7441.615651418025!2d-41.56664940000001!3d-21.160044799999987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1559183836554!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <hr class="featurette-divider">
</div>

@endsection