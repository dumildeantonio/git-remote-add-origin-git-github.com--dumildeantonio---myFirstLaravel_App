@extends('layouts.app')

@Section('title', 'Edicao')



@section('content')
    <!--Tudo aqui dentro vai ser renderizado no template -->
    <div class="container mt-5">
        <h1>Editar Jogo</h1>
        <hr>


        <form action="{{ route('jogos-update', ['id' => $jogos->id]) }}" method="POST">
            @method('PUT')
            @csrf

            <div class="form-group">
                <div class="form-group">
                    <label for="nome">Nome: </label>
                    <input type="text" class="form-control" name="nome" id="nome" value="{{ $jogos->nome }}">
                </div>
            </div>
            <br>
            <div class="form-group">
                <div class="form-group">
                    <label for="nome">Categoria: </label>
                    <input type="text" class="form-control" name="categoria" id="cat" value="{{ $jogos->categoria }}">
                </div>
            </div>
            <br>
            <div class="form-group">
                <div class="form-group">
                    <label for="nome">Valor: </label>
                    <input type="double" class="form-control" name="valor" id="valor" value=" {{ $jogos->valor }} ">
                </div>
            </div>
            <br>
            <div class="form-group">
                <div class="form-group">
                    <label for="nome">Ano de Criacao: </label>
                    <input type="year" class="form-control" name="ano" id="ano" value=" {{ $jogos->ano }} ">
                </div>
            </div>
            <br>
            <div class="form-group">
                <div class="form-group">
                    <input type="submit" value="Atualizar" name="submit" class="btn btn-success">
                </div>
            </div>

        </form>
    </div>
@endSection
