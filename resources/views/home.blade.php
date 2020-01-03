@extends('layouts.app')
@section('extra_styles')

@endsection
@section('contents')
<div class="row">
    <div class="col-md-2">
        <div class="ibox ">
            <div class="ibox-title">
                <span class="label label-success float-right">Monthly</span>
                <h5>Views</h5>
            </div>
            <div class="ibox-content">
                <h1 class="no-margins">386,200</h1>
                <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>
                <small>Total views</small>
            </div>
        </div>
    </div>
    <div class="col-md-2">
        <div class="ibox ">
            <div class="ibox-title">
                <span class="label label-info float-right">Annual</span>
                <h5>Orders</h5>
            </div>
            <div class="ibox-content">
                <h1 class="no-margins">80,800</h1>
                <div class="stat-percent font-bold text-info">20% <i class="fa fa-level-up"></i></div>
                <small>New orders</small>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="ibox ">
            <div class="ibox-title">
                <span class="label label-primary float-right">Today</span>
                <h5>visits</h5>
            </div>
            <div class="ibox-content">

                <div class="row">
                    <div class="col-md-6">
                        <h1 class="no-margins">$ 406,420</h1>
                        <div class="font-bold text-navy">44% <i class="fa fa-level-up"></i> <small>Rapid pace</small></div>
                    </div>
                    <div class="col-md-6">
                        <h1 class="no-margins">206,120</h1>
                        <div class="font-bold text-navy">22% <i class="fa fa-level-up"></i> <small>Slow pace</small></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="ibox ">
            <div class="ibox-title">
                <h5>Monthly income</h5>
                <div class="ibox-tools">
                    <span class="label label-primary">Updated 12.2015</span>
                </div>
            </div>
            <div class="ibox-content no-padding">
                <div class="flot-chart m-t-lg" style="height: 55px;">
                    <div class="flot-chart-content" id="flot-chart1"></div>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-8">
        <div class="ibox ">
            <div class="ibox-content">
                <div>
                    <span class="float-right text-right">
                        <small>Average value of sales in the past month in: <strong>United states</strong></small>
                        <br/>
                        All sales: 162,862
                    </span>
                    <h3 class="font-bold no-margins">
                        Half-year revenue margin
                    </h3>
                    <small>Sales marketing.</small>
                </div>

                <div class="m-t-sm">

                    <div class="row">
                        <div class="col-md-8">
                            <div>
                            <canvas id="lineChart" height="114"></canvas>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <ul class="stat-list m-t-lg">
                                <li>
                                    <h2 class="no-margins">2,346</h2>
                                    <small>Total orders in period</small>
                                    <div class="progress progress-mini">
                                        <div class="progress-bar" style="width: 48%;"></div>
                                    </div>
                                </li>
                                <li>
                                    <h2 class="no-margins ">4,422</h2>
                                    <small>Orders in last month</small>
                                    <div class="progress progress-mini">
                                        <div class="progress-bar" style="width: 60%;"></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

                <div class="m-t-md">
                    <small class="float-right">
                        <i class="fa fa-clock-o"> </i>
                        Update on 16.07.2015
                    </small>
                    <small>
                        <strong>Analysis of sales:</strong> The value has been changed over time, and last month reached a level over $50,000.
                    </small>
                </div>

            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="ibox ">
            <div class="ibox-title">
                <span class="label label-warning float-right">Data has changed</span>
                <h5>User activity</h5>
            </div>
            <div class="ibox-content">
                <div class="row">
                    <div class="col-4">
                        <small class="stats-label">Pages / Visit</small>
                        <h4>236 321.80</h4>
                    </div>

                    <div class="col-4">
                        <small class="stats-label">% New Visits</small>
                        <h4>46.11%</h4>
                    </div>
                    <div class="col-4">
                        <small class="stats-label">Last week</small>
                        <h4>432.021</h4>
                    </div>
                </div>
            </div>
            <div class="ibox-content">
                <div class="row">
                    <div class="col-4">
                        <small class="stats-label">Pages / Visit</small>
                        <h4>643 321.10</h4>
                    </div>

                    <div class="col-4">
                        <small class="stats-label">% New Visits</small>
                        <h4>92.43%</h4>
                    </div>
                    <div class="col-4">
                        <small class="stats-label">Last week</small>
                        <h4>564.554</h4>
                    </div>
                </div>
            </div>
            <div class="ibox-content">
                <div class="row">
                    <div class="col-4">
                        <small class="stats-label">Pages / Visit</small>
                        <h4>436 547.20</h4>
                    </div>

                    <div class="col-4">
                        <small class="stats-label">% New Visits</small>
                        <h4>150.23%</h4>
                    </div>
                    <div class="col-4">
                        <small class="stats-label">Last week</small>
                        <h4>124.990</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('extra_scripts')
<script>
    
    $(document).ready(function() {


        var d1 = [[1262304000000, 6], [1264982400000, 3057], [1267401600000, 20434], [1270080000000, 31982], [1272672000000, 26602], [1275350400000, 27826], [1277942400000, 24302], [1280620800000, 24237], [1283299200000, 21004], [1285891200000, 12144], [1288569600000, 10577], [1291161600000, 10295]];
        var d2 = [[1262304000000, 5], [1264982400000, 200], [1267401600000, 1605], [1270080000000, 6129], [1272672000000, 11643], [1275350400000, 19055], [1277942400000, 30062], [1280620800000, 39197], [1283299200000, 37000], [1285891200000, 27000], [1288569600000, 21000], [1291161600000, 17000]];

        var data1 = [
            { label: "Data 1", data: d1, color: '#17a084'},
            { label: "Data 2", data: d2, color: '#127e68' }
        ];
        $.plot($("#flot-chart1"), data1, {
            xaxis: {
                tickDecimals: 0
            },
            series: {
                lines: {
                    show: true,
                    fill: true,
                    fillColor: {
                        colors: [{
                            opacity: 1
                        }, {
                            opacity: 1
                        }]
                    },
                },
                points: {
                    width: 0.1,
                    show: false
                },
            },
            grid: {
                show: false,
                borderWidth: 0
            },
            legend: {
                show: false,
            }
        });

        var lineData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [
                {
                    label: "Example dataset",
                    backgroundColor: "rgba(8,8,138,0.67)",
                    borderColor: "#08088",
                    pointBackgroundColor: "rgba(26,179,148,1)",
                    pointBorderColor: "#fff",
                    data: [48, 48, 60, 39, 56, 37, 30]
                },
                {
                    label: "Example dataset",
                    backgroundColor: "rgba(220,220,220,0.5)",
                    borderColor: "rgba(220,220,220,1)",
                    pointBackgroundColor: "rgba(220,220,220,1)",
                    pointBorderColor: "#fff",
                    data: [65, 59, 40, 51, 36, 25, 40]
                }
            ]
        };

        var lineOptions = {
            responsive: true
        };


        var ctx = document.getElementById("lineChart").getContext("2d");
        new Chart(ctx, {
            type: 'line',
            data: lineData,
            options:lineOptions
        });
    });
</script>
@endsection