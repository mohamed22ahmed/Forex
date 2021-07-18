@extends('layouts.forex_dashboard.app')
@section('headScripts')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        function updatechart(){
            const request = new XMLHttpRequest();
            request.open('get', 'Crypto_test');
            request.onload = () => {
                const dataset = JSON.parse(request.responseText);

                var html ='<tr><th>Pair</th><th>Buyer</th><th>Seller</th><th>Difference</th><th>Trand</th><th>Signal</th></tr>';
                for(var i=0;i<24;i+=6){
                    html += '<tr>';
                    for(var j=i;j<i+6;j++) {
                        if(i==j){
                            html+='<td style="color:#66ccff">'+dataset[j]+'</td>';
                            continue;
                        }
                        if(j==i+4){
                            html += '<td  style="color:'+(dataset[j]*100<=30?"red":(dataset[j]*100>30&&dataset[j]*100<60?"yellow":"#00cc00"))+'">'+ (dataset[j]*100>=60 ? '<i style="margin-left:-5px; margin-right:5px ; font-size:25px"  class="fa fa-arrow-up"></i>' : (dataset[j]*100<60&&dataset[j]*100>=30?'<i style="margin-left:-5px; margin-right:5px ; font-size:25px"  class="fa fa-arrow-right"></i>':'<i style="margin-left:-5px; margin-right:5px ; font-size:25px"  class="fa fa-arrow-down"></i>'))+ Math.ceil(dataset[j]*100)  +'%</td>';
                            continue;
                        }
                        if(j==i+5)
                        {
                            html += '<td  style="background-color:'+(dataset[j]=='Buy'?"#00cc00":(dataset[j]=='Sell'?"#ff3333":"blue"))+'">' + (dataset[j]=='Buy' ? '<i style="margin-left:-5px; margin-right:5px ; font-size:25px"  class="fa fa-arrow-up"></i>': (dataset[j]=='Sell'?'<i style="margin-left:-5px; margin-right:5px ; font-size:25px"  class="fa fa-arrow-down"></i>':''))+  dataset[j]+ '</td>';
                            continue;
                        }
                        html += '<td  style="color:'+(dataset[j]*217<0?"#ff3333":"#00cc00")+'">' +(dataset[j]*217<0 ? '<i style="margin-left:-5px; margin-right:5px ; font-size:25px"  class="fa fa-arrow-down"></i>':'<i style="margin-left:-5px; margin-right:5px ; font-size:25px"  class="fa fa-arrow-up"></i>')+ parseFloat(dataset[j]*217).toFixed(2) + '</td>';
                    }
                    html += '</tr>';
                }

                $('tbody').html(html);
            }
            request.send();
        }
        setInterval(()=>{updatechart();}, 500);
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
