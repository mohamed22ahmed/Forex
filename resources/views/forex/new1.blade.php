@extends('layouts.forex_dashboard.app')
@section('headScripts')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        function updatechart(){
            const request = new XMLHttpRequest();
            request.open('get', 'new1_test');
            request.onload = () => {
                const dataset = JSON.parse(request.responseText);
                var x=0,dd=''
                dd+='<tr><th style="color:#FFF">Pair</th><th>Buy</th><th>Sell</th><th>Difference</th><th>Signal</th></tr>' ;

                for(var i=0;i<140;i+=5){
                    dd+='<tr>'
                    for(var j=i;j<i+5;j++){
                        if(i==j)
                            dd+='<td style="color:#cc66ff">'+dataset[j]+'</td>'
                        else
                            dd+='<td>'+dataset[j]+'</td>'
                    }
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
