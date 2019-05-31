<thml lang="pt-br">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="/css/login.css">
        <link rel="stylesheet" type="text/css" href="/css/app.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    </head>

    <body class="my-login-page">
        <section class="h-100">
            <div class="container h-100">
                <div class="row justify-content-md-center h-100">
                    <div class="card-wrapper center" style="margin-top: 10%; ">
                        
                        <div class="card fat">
                            <div class="card-body">
                                <h4 class="card-title">Login</h4>
                            <form method="POST" class="my-login-validation" novalidate="" action="{{route('login')}}">
                                {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="usuario">Email</label>
                                        <input id="email" type="email" class="form-control" name="email" required autofocus>
                                        <div class="invalid-feedback">
                                                Email invalido
                                            </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="password">Senha
                                          
                                        </label>
                                        <input id="password" type="password" class="form-control" name="password" required data-eye>
                                   
                                        <div class="invalid-feedback">
                                                Senha obrigatória
                                            </div>
                                    </div>

                                    

                                    <div class="form-group m-0" >
                                        <button type="submit" class="btn btn-primary btn-block" style="margin-top: 10%;">
                                            Acessar
                                        </button>
                                    </div>
                                   
                                </form>
                            </div>
                        </div>
                        <div class="footer">
                            Copyright &copy; 2019 &mdash; Lorem Ipsum
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>  
        <script src="/js/login.js"></script>
    </body>
</thml>