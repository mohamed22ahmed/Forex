@extends('layouts.forex_dashboard.app')
@section('headScripts')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        function updatechart(){
            const request = new XMLHttpRequest();
            request.open('get', 'currency_pair_test');
            request.onload = () => {
                const dataset = JSON.parse(request.responseText);
                var html;
                html ='<tr><th style="color:#FFF">Pair</th><th colspan="3">Data</th><th>Total</th><th>Trend</th><th>Signal</th></tr>'

                for(i=0;i<196;i+=7) {
                    html += '<tr>';
                    for(var j=i;j<i+7;j++){
                        if(j==i){
                            html+='<td style="color:#cc66ff">'+dataset[i]+'</td>'
                            continue;
                        }
                        if(j==i+2){
                            html += '<td  style="color:'+(dataset[j]*3<0?"#ff3333":"#00cc00")+'">' +(dataset[j]*3<0 ? '<i style="margin-left:-5px; margin-right:5px ; font-size:25px"  class="fa fa-arrow-down"></i>':'<i style="margin-left:-5px; margin-right:5px ; font-size:25px"  class="fa fa-arrow-up"></i>')+ parseFloat(dataset[j]*3).toFixed(2) + '</td>';
                            continue;
                        }
                        if(j==i+3){
                            html += '<td  style="color:'+(dataset[j+2]*15<0?"#ff3333":"#00cc00")+'">' +(dataset[j+2]*15<0 ? '<i style="margin-left:-5px; margin-right:5px ; font-size:25px"  class="fa fa-arrow-down"></i>':'<i style="margin-left:-5px; margin-right:5px ; font-size:25px"  class="fa fa-arrow-up"></i>')+ parseFloat(dataset[j+2]*15).toFixed(2) + '</td>';
                            continue;
                        }
                        if(j==i+4){
                            html += '<td  style="color:'+(dataset[j-2]*2<0?"#ff3333":"#00cc00")+'">'+ parseFloat(dataset[j-2]*2).toFixed(2) + '</td>';
                            continue;
                        }
                        if(j==i+5){
                            html += '<td  style="color:'+(dataset[j-2]*100<=30?"red":(dataset[j-2]*100>30&&dataset[j-2]*100<70?"yellow":"#00cc00"))+'">'+ (dataset[j-2]*100>=70 ? '<i style="margin-left:-5px; margin-right:5px ; font-size:25px"  class="fa fa-arrow-up"></i>' : (dataset[j-2]*100<70&&dataset[j-2]*100>=30?'<i style="margin-left:-5px; margin-right:5px ; font-size:25px"  class="fa fa-arrow-right"></i>':'<i style="margin-left:-5px; margin-right:5px ; font-size:25px"  class="fa fa-arrow-down"></i>'))+ Math.ceil(dataset[j-2]*100)  +'%</td>';
                            continue;
                        }
                        if(j==i+6){
                            html += '<td  style="background-color:'+(dataset[j-3]*100>=70?"#00cc00":(dataset[j-3]*100<70&&dataset[j-3]*100>=30?"blue":"#ff471a"))+'">'+ (dataset[j-3]*100>=70 ? '<p style="text-align:center ; font-size:25px"><i style="margin-left:-1px; margin-right:3px ; font-size:25px"  class="fa fa-arrow-up"></i> Buy</p>' : (dataset[j-3]*100<70&&dataset[j-3]*100>=30?'<p style="text-align:center ; font-size:25px"> <i style="margin-left:-1px; margin-right:3px ; font-size:25px"  class="fa fa-arrow-right"></i> Wait</p>':'<p style="text-align:center ; font-size:25px"> <i style="margin-left:-1px; margin-right:3px ; font-size:25px"  class="fa fa-arrow-down"></i> Sell</p>'))+'</td>';
                            continue;
                        }
                        html += '<td  style="color:'+(dataset[j]*125<0?"#ff3333":"#00cc00")+'">' +(dataset[j]*125<0 ? '<i style="margin-left:-5px; margin-right:5px ; font-size:25px"  class="fa fa-arrow-down"></i>':'<i style="margin-left:-5px; margin-right:5px ; font-size:25px"  class="fa fa-arrow-up"></i>')+ parseFloat(dataset[j]*125).toFixed(2) + '</td>';
                    }
                    html += '</tr>';
                }

                $('tbody').html(html);
            }
            request.send();
        }
        setInterval(()=>{updatechart();}, 1000);
    </script>
@endsection

@section('content')
<main style="margin-top:5rem">
    <div class="row">
        <div class="col-md-12 table-responsive"  style="overflow-x:auto;">
            <table  class="table table-striped table-bordered text-center" id="memo">
                <tbody></tbody>
            </table>
        </div>
    </div>
</main>
@endsection
