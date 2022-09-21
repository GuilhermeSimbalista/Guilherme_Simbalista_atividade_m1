@extends('layouts.layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Nome do autor</td>
          <td>Nascionalidade do autor</td>
        </tr>
    </thead>
    <tbody>
        @foreach($autores as $autor)
        <tr>
            <td>{{$autor->id}}</td>
            <td>{{$autor->nome_autor}}</td>
            <td>{{$autor->nacion_autor}}</td>
            <td><a href="{{ route('autor.edit', $autor->id)}}" class="btn btn-primary">Editar</a></td>
            <td>
                <form action="{{ route('autor.destroy', $autor->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Deletar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection