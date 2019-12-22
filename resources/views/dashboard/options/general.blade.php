@extends('dashboard.content')

@section('title', 'Page Title')

@section('main_section')
    <div class="container center-dashboard">
        <div class="row row-section">
            <div class="col list-content">
                <div class="card" style="width: 100%;">
                    <div class="card-header">
                        <h5 class="card-title">USAGE RELATED INFORMATION</h5>
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Active</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Last Two Weeks</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#">This month</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                    <table class="table table-hover table-text">
                        <thead>
                        <tr>
                            <th>Date</th>
                            <th>Connections</th>
                            <th>Requests</th>
                            <th>Logged</th>
                            <th>New Accounts</th>
                            <th>Deleted Accounts</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>09am - 10am</td>
                            <td>1</td>
                            <td>1</td>
                            <td>0</td>
                            <td>1</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>10am - 11am</td>
                            <td>12</td>
                            <td>3</td>
                            <td>2</td>
                            <td>8</td>
                            <td>6</td>
                        </tr>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 100%;">
                    <div class="card-header">
                        <h5 class="card-title">USAGE RELATED CHARTS</h5>
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Active</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Last Two Weeks</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#">This month</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <canvas id="donutUsage" width="400" height="400"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-section">
            <div class="col">
                <div class="card" style="width: 100%;">
                    <div class="card-header">
                        <h5 class="card-title">USAGE RELATED HISTOGRAM</h5>
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Active</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Last Two Weeks</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#">This month</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <canvas id="histoUsage" width="400" height="400"></canvas>
                    </div>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </div>
@endsection

@section('styles')
    @parent
    <link rel="stylesheet" href="/assets/styles/general.css" /> 
@endsection

@section('scripts')
    @parent
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js" type="text/javascript"></script>
    <script>
        var ctx = document.getElementById('histoUsage');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
    <script>
        var ctx = document.getElementById('donutUsage');
        var myDoughnutChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                datasets: [{
                    data: [10, 20, 30]
                }],
                // These labels appear in the legend and in the tooltips when hovering different arcs
                labels: [
                    'Red',
                    'Yellow',
                    'Blue'
                ]
            },
            options: {
                cutoutPercentage: 0
            }
        });
    </script>
@endsection