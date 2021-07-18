@extends('layouts.forex_dashboard.app')

@section('content')
    <main>
        <div class="container">
            <div class="row justify-content-center" style="padding-top: 80px;">
                <div class="col-sm-10 col-xs-12" style="padding-top:50px ; margin-bottom:5rem">
                    <canvas id="myChart"width="300" height="500"></canvas>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script>
        var v_arr = [20,20,20,20,20,30,30];
        var l_arr = ["Gold","Silver","Xaueur","Oil"];
        var color_code={"Gold":"rgba(255, 99, 132, 1)","Silver":"red","Xaueur":"#e6e600", "Oil":"rgba(75, 192, 192, 1)"};
        var color;
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: l_arr,
                datasets: [{
                    label: '',
                    data: v_arr,
                    backgroundColor: [
                        'rgba(255, 99, 132, 1)',
                        'red',
                        'yellow',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(25, 159, 64, 1)',
                        'rgba(255, 255, 255, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                tooltips : true,
                maintainAspectRatio: false,
                legend: {
                    labels: {
                        fontColor: "white"
                    }
                },
                scales: {
                    scaleLabel:{
                        fontColor: 'white'
                    },
                    yAxes: [{
                    gridLines: {
                        drawBorder: false,
                        color: [
                        'green',
                        'green',
                        'green',
                        'green',
                        'yellow',
                        'yellow',
                        'yellow',
                        'red',
                        'red',
                        'red'
                        ]
                    },

                    ticks: {
                        beginAtZero: true,
                        max: 100,
                        fontColor: 'white'
                    }
                }],
                xAxes: [{
                    ticks: {
                    fontFamily:'Glyphter',
                    fontColor: 'white',
                    }
                }]
                }
            }
        });

        function updatechart(){
            const request = new XMLHttpRequest();
            request.open('get', 'commodities_dashboard_test');
                request.onload = () => {
                    const data = JSON.parse(request.responseText);
                    v_arr = [];
                    l_arr = [];
                    color = [];
                    for(i in data ){
                        v_arr.push(data[i]*10);
                        l_arr.push(i);
                        color.push(color_code[i]);
                    }
                }
                request.send();
                myChart.data.labels = l_arr;
                myChart.data.datasets[0].data = v_arr;
                myChart.data.datasets[0].backgroundColor = color;
                myChart.update();
        }
        setInterval(()=>{updatechart();}, 1000);
    </script>
@endsection
