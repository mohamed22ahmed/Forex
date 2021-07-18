@extends('layouts.forex_dashboard.app')

@section('headScripts')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        function updatechart(){
            const request = new XMLHttpRequest();
            request.open('get', 'index_liquidity_test');
            request.onload = () => {
                const dataset = JSON.parse(request.responseText);
                var dd='';
                for(var i=0;i<32;i+=8){
                    dd+='<tr>'
                    for(var j=i;j<i+8;j++)
                        if(i==0)
                            dd+='<th style="color:white">'+dataset[j]+'</th>'
                        else if(i==8)
                            dd+='<td style="color:'+(dataset[j]*10<=30 ? "#ff3333":(dataset[j]*10>=60?"#00cc00":"yellow"))+'">' +(dataset[j]*10<=30 ? '<i class="fa fa-arrow-down"></i>':(dataset[j]*10>=60 ?'<i class="fa fa-arrow-up"></i>':'<i class="fa fa-arrow-right"></i>'))+ parseFloat(dataset[j]*10).toFixed(1) + '</td>';
                        else
                            dd+='<td style="color:'+(dataset[j]<0?"#ff3333":"#00cc00")+'">' +(dataset[j]<0 ? '<i class="fa fa-arrow-down"></i>':'<i class="fa fa-arrow-up"></i>')+ dataset[j]*2 + '</td>';
                    dd+='</tr>'
                }
                $('tbody').html(dd);
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
