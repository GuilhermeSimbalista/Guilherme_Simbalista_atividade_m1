@extends('layouts.layout')
@section('content')
<style>
  .uper {
    margin-top: 40px;
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }

</style>

    <div class="uper" style="text-align: center">
      <h1 >Bem-Vindo a Biblioteca Laravel</h1>
      <br>
      <br>
      <h4>Para continuar ao CRUD da biblioteca Escolha uma das opções abaixo</h4>
      <br>
      <div style="font-size: 30px">
      <a href="/autor"><button type="button" class="btn btn-dark">Autor</button></a>
      <a href="/editoras"><button type="button" class="btn btn-dark">Editora</button></a>
      <a href="/livros"><button type="button" class="btn btn-dark">Livro</button></a>
    </div>
</div>
@endsection
