<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
        rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
        crossorigin="anonymous">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" 
         crossorigin="anonymous">
        </script>
        <style type="text/css">
            .btn-search{
                position: absolute;
                left: -39px;
            }
            </style>
      <title>Desafio Investidor10 -  Eu quero muito passar nesse teste</title>
    </head>

    <body>
        <header class="container-fluid relative-top bg-secondary">
            <div class="text-center p-4 fw-bold">
                <div class="row ">
                    <div class="col">Logo</div>
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                   <a href="{{url('noticias/create')}}" class="link-dark">Cadastrar Notícias</a>
                            </div>
                            <div class="col">
                                <a href="{{url('noticias')}}" class="link-dark">Exibir Notícias</a>

                                </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="container">
                          <form action="noticias" method="GET">  
                            <div class="btn-group" role="group" >
                                <input class="form-control border-end-0 border rounded-pill" type="text" placeholder="Pesquisar" name="search">
                        
                                <button class="btn btn-outline-secondary bg-white border-start-0 border rounded-pill ms-n3 btn-search" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            
                            </div>
                          </form>  
                        </div>
                    </div>
                </div>
            </div>
        </header>
