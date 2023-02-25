@include('header')
@if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
@endif
<section>
    <div class="container">
        <div class="row row-cols-3">
            @foreach ($noticias as $noticia)
    
                <div class="col">
                    <div class="card m-3" style="width: 18rem; height:280px">
                        <div class="card-body">
                            <h5 class="card-title fw-bold m-3">  {{$noticia->titulo}} </h5>
                            
                            <p class="card-text m-3">{{$noticia->descricao}}</p>
                            <div class="d-grid gap-2 mx-auto">
                                <a href="#" class="card-link btn btn-secondary mx-auto">Acessar</a>
                            </div> 
                        </div>
                    </div>
                
                    </div>
            @endforeach
        </div>    
    </div>
</section>
@include('footer')