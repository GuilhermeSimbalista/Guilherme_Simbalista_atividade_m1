@extends('layouts.layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Editar dados dos livros
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('livros.update', $livro->id ) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="nome_livro">Nome</label>
              <input type="text" class="form-control" name="nome_livro" value="{{ $livro->nome_livro }}"/>
          </div>
          <div class="form-group">
            <label for="nome_original">Nome Original</label>
            <input type="text" class="form-control" name="nascion_autor" value="{{ $livro->nome_original }}"/>
          </div>
          <div class="form-group">
            <label for="genero_livro">Genero</label>
            <input type="text" class="form-control" name="genero_livro" value="{{ $livro->genero_livro }}"/>
          </div>
          <div class="form-group">
            <label for="sinopse_livro">Sinopse</label>
            <input type="text" class="form-control" name="sinopse_livro" value="{{ $livro->sinopse_livro }}"/>
          </div>
          <div class="form-group">
            <label for="paginas_livro">Paginas</label>
            <input type="text" class="form-control" name="paginas_livro" value="{{ $livro->paginas_livro }}"/>
          </div>
          <div class="form-group">
            <label for="anopub_livro">Ano de Publicação</label>
            <input type="text" class="form-control" name="anopub_livro" value="{{ $livro->anopub_livro }}"/>
          </div>
          <div class="form-group">
            <label for="editora_livro">Editora</label>
            <input type="text" class="form-control" name="editora_livro" value="{{ $livro->editora_livro }}"/>
          </div>
          <button type="submit" class="btn btn-primary">Atualizar Dados</button>
      </form>
  </div>
</div>
@endsection