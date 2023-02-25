@include('header')
<div class="container mt-4">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  <div class="card">
    <div class="card-header text-center font-weight-bold">
      Cadastro de Notícias
    </div>
    <div class="card-body">
      <form  method="post" action="{{ route('noticias.store') }}">
       @csrf
       <div class="form-group">
          <label for="exampleInputEmail1">Categoria</label>
          <input type="text" id="categoria" name="categoria" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Título</label>
          <input type="text"  name="titulo" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Descrição</label>
          <textarea name="descricao" class="form-control" required=""></textarea>
        </div>
        <button type="submit" class="btn btn-secondary m-3">Cadastrar</button>
      </form>
    </div>
</div>
@include('footer')