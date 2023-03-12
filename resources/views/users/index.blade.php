@extends('adminlte::page')

@section('title','Painel')

@section('content_header')
<h1>Odonto Shield</h1>
@endsection

@section('content')
<div class="card">
    <table class="table table-hover text-nowrap">
        <thead>
            <tr>
                <th>CPF</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Telefone</th>
                <th>Nascimento</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{$user->cpf}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->phone}}</td>
                <td>{{$user->birthdate}}</td>
                <td>
                    <a href="" class="btn btn-info">Editar</a>
                    <form action="" method="post" class="d-inline-block" onsubmit="return confirm('Tem certeza que deseja excluir?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger ">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection