
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Matheus Brito">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Site | Administrador </title>

    @include('template.files.files_head')
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
    @include('template.files.files_footer')
  </body>
</html>
