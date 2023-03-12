@extends('adminlte::page')

@section('title','Painel')

@section('content_header')
<h1>Odonto Shield</h1>
<h2 class="mt-3 mb-3 text-bold">+ Cadastro de pacientes</h2>
<hr>
@endsection

@section('content')
@if ($errors->any())
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert"aria-hidden="true">x</button>
        <h5>
            <i class="icon fas fa-ban"></i>
           Ocorreu um erro
        </h5>

            <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
            </ul>

    </div>
@endif
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Cadastre seu paciente</h3>
        </div>
        <form action="{{route('patients.store')}}" method="POST" class="form-horizontal" >
            @csrf
            <div class="card-body">
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">
                        Nome
                    </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" placeholder="Digite nome do paciente" name="name" value="{{old('name')}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">
                        E-mail
                    </label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" placeholder="Digite e-mail do paciente" name="email">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="cpf" class="col-sm-2 col-form-label">
                        CPF
                    </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="cpf" placeholder="Digite CPF do paciente" name="cpf">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="birthdate" class="col-sm-2 col-form-label">
                        Data de nascimento
                    </label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="birthdate" name="birthdate">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="phone" class="col-sm-2 col-form-label">
                        Telefone
                    </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Informe o telefone do paciente">
                    </div>
                </div>
                
                
            </div>
            <div class="card-footer">
                <input type="submit" value="Cadastrar" class="btn btn-primary">
            </div>
        </form>
    </div>
@endsection

@section('js')
<script src="https://unpkg.com/imask"></script>
<script>
    IMask(
        document.getElementById('cpf'), {
            mask: '000.000.000-00'
        },
    )
    IMask(
        document.getElementById('phone'), {
            mask:'(00)00000-0000'
        }
    )
</script>
@endsection