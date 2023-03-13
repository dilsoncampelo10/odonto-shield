@extends('adminlte::page')

@section('title','Painel')

@section('content_header')
<h1 class="mt-3 mb-3 text-bold">Dashboard</h1>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-3 col-6">
        <div class="small-box bg-info">
            <div class="inner">
                <h3>150</h3>
                <p>Pacientes Cadastrados</p>
            </div>
            <div class="icon">
                <i class="far fa-fw fa-user"></i>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
            <div class="inner">
                <h3>150</h3>
                <p>Dentistas cadastrados</p>
            </div>
            <div class="icon">
                <i class="far fa-fw fa-sticky-note"></i>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <div class="small-box bg-warning">
            <div class="inner">
                <h3>150</h3>
                <p>Funcionários</p>
            </div>
            <div class="icon">
                <i class="far fa-fw fa-eye"></i>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <div class="small-box bg-danger">
            <div class="inner">
                <h3>150</h3>
                <p>Total de consultas</p>
            </div>
            <div class="icon">
                <i class="far fa-fw fa-heart"></i>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><i class="fas fa-chart-pie mr-1"></i>Consultas</h3>
                <div class="card-tools">
                    <ul class="nav nav-pills ml-auto">
                        <li class="nav-item"><a class="nav-link active" href="#revenue-chart" data-toggle="tab">Area</a></li>
                        <li class="nav-item"><a class="nav-link" href="#appointments" data-toggle="tab">Donut</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card-body">
                <div class="tab-content p-0">
                    <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;">
                        <canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas>
                    </div>
                    <div class="chart tab-pane" id="appointments" style="position: relative; height: 300px;">
                        <canvas id="appointments-canvas" height="300" style="height: 300px;"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    window.onload = function(){
        let ctx = document.querySelector('#revenue-chart-canvas').getContext('2d');
        window.revenue-chart-canvas = new Chart(ctx,{
            type:'pie',
            data:{
                datasets:[
                    data['2','3']
                ],
                labels:['P1','P2']
            },
            options:{
                responsive:true,
                legend:{
                    display:false
                }
            }
        })
    }
</script>
    
@endsection