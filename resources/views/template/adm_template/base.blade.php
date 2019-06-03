
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Site | Administrador </title>

    <!-- Principal CSS do Bootstrap -->
    <link href="/css/app.css" rel="stylesheet">


    {{-- Datatables CSS --}}
    <link href="/css/datatables/datatables.min.css" rel="stylesheet">

    <!-- Estilos customizados para esse template -->
    <link href="/css/dashboard.css" rel="stylesheet">


    <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css"  rel="stylesheet">
    

    <!--Font Awesome 4.7.0 -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  </head>

  <body>
   @include('template.adm_template.header')

    <div class="container-fluid">
      <div class="row">
       @include('template.adm_template.sidebar')

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4" style="margin-bottom: 10px;">
          @yield('conteudo')
    
          
        </main>
      </div>
    </div>

    <!-- Principal JavaScript do Bootstrap
    ================================================== -->
    <!-- Foi colocado no final para a página carregar mais rápido -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="/js/vendor/popper.min.js"></script>
    <script src="/js/app.js"></script>

    <!-- Ícones -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>



 <!-- Datatables -->

    <script src="/js/datatables/datatables.js"></script>
    <script src="/js/datatables/traducao-datatables.js"></script>
    <script src="/js/utils/paginate.js">
      </script>
    {{-- <script src="/js/sweetalert2.js"> --}}
    {{-- </script> --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.all.min.js"></script>

  </body>
</html>
