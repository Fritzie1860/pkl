@extends('layout.app')
@section('title')
<title>Invest Islands || Dashboard</title>
@endsection
<div id="wrapper">
    @include('layout.sidebar')
    <div id="page-wrapper" class="gray-bg">
        @include('layout.header')
        <div class="wrapper wrapper-content">
            <div class="row">
                <div class="col-lg-3">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <!-- <span class="label label-success float-right">Monthly</span> -->
                            <h5>Prepared</h5>
                        </div>
                        <div class="ibox-content">
                            <h1 class="no-margins">{{$prepared}}</h1>
                            <small>Total</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <!-- <span class="label label-info float-right">Annual</span> -->
                            <h5>On Going</h5>
                        </div>
                        <div class="ibox-content">
                            <h1 class="no-margins">{{$ongoing}}</h1>
                            <!-- <div class="stat-percent font-bold text-info">20% <i class="fa fa-level-up"></i></div> -->
                            <small>Total</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <!-- <span class="label label-primary float-right">Today</span> -->
                            <h5>Finished</h5>
                        </div>
                        <div class="ibox-content">
                            <h1 class="no-margins">{{$finish}}</h1>
                            <!-- <div class="stat-percent font-bold text-navy">44% <i class="fa fa-level-up"></i></div> -->
                            <small>Total</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <!-- <span class="label label-danger float-right">Low value</span> -->
                            <h5>Users</h5>
                        </div>
                        <div class="ibox-content">
                            <h1 class="no-margins">{{$total_u}}</h1>
                            <!-- <div class="stat-percent font-bold text-danger">38% <i class="fa fa-level-down"></i></div> -->
                            <small>Total</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Pie </h5>

                        </div>
                        <div class="ibox-content">
                            <div>
                                <canvas id="doughnutChart" height="140"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="js/plugins/chartJs/Chart.min.js"></script>
    <script>
        var doughnutData = {
            labels: ["Prepared", "On Going", "Finished"],
            datasets: [{
                data: [<?=$prepared?>, <?=$ongoing?>, <?=$finish?>],
                backgroundColor: ["#a3e1d4", "#dedede", "#b5b8cf"]
            }]
        };


        var doughnutOptions = {
            responsive: true
        };


        var ctx4 = document.getElementById("doughnutChart").getContext("2d");
        new Chart(ctx4, {
            type: 'doughnut',
            data: doughnutData,
            options: doughnutOptions
        });
    </script>
