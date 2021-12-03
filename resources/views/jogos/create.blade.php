@extends('layouts.app')

@Section('title', 'Criacao')



@section('content')
    <!--Tudo aqui dentro vai ser renderizado no template -->
  <div class="container mt-5">
      <h1>Crie um Novo Jogo</h1>
      <hr>
      <form action="{{ route('jogos-store') }}" method="POST">
        @csrf

            <div class="form-group">
                <div class="form-group">
                    <label for="nome">Nome: </label>
                    <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite o seu Nome">
                </div>
            </div> 
            <br>
            <div class="form-group">
                <div class="form-group">
                    <label for="nome">Categoria: </label>
                    <input type="text" class="form-control" name="categoria" id="cat" placeholder="Digite a Categoria do Jogo">
                </div>
            </div>
            <br>
            <div class="form-group">
                <div class="form-group">
                    <label for="nome">Valor: </label>
                    <input type="number" class="form-control" name="valor" id="valor" placeholder="Digite o valor do Jogo">
                </div>
            </div>
            <br>
            <div class="form-group">
                <div class="form-group">
                    <label for="nome">Ano de Criacao: </label>
                    <input type="number" class="form-control" name="ano" id="ano" placeholder="Ano de Criacao do Jogo">
                </div>
            </div>
            <br>
            <div class="form-group">
                <div class="form-group">
                    <input type="submit" value="Enviar" name="submit" class="btn btn-primary">
                </div>
            </div>
             
      </form>
  </div>
@endSection