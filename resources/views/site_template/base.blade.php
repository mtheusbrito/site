<thml>
  <head>
        <link rel='stylesheet' type='text/css' href='/css/app.css'>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <title>Site</title>
  </head>  
  <body>
        <style>
                html{
                font-size: 14px;
                }
                @media (min-width: 768px) {
                html {
                    font-size: 16px;
                }
                }

                .container {
                max-width: 960px;
                }

                .pricing-header {
                max-width: 700px;
                }

                .card-deck .card {
                min-width: 220px;
                }
                .bd-placeholder-img {
                  font-size: 1.125rem;
                  text-anchor: middle;
                  -webkit-user-select: none;
                  -moz-user-select: none;
                  -ms-user-select: none;
                  user-select: none;
                }
          
                @media (min-width: 768px) {
                  .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                  }
                }
        </style>
        <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
                <h5 class="my-0 mr-md-auto font-weight-normal">Lorem ipsum</h5>
                <nav class="my-2 my-md-0 mr-md-3">
                  <a class="p-2 text-dark" href="/">Início</a>
                  <a class="p-2 text-dark" href="/empresa">A empresa</a>
                  <a class="p-2 text-dark" href="/projetos">Projetos</a>
                  <a class="p-2 text-dark" href="/solucoes">Soluções</a>
                  <a class="p-2 text-dark" href="/contato">Contato</a>

                </nav>
              </div>
     <main role="main" class="container">
        @yield('conteudo')

     </main>

  </body>
</thml>