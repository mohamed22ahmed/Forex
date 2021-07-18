@extends('layouts.forex_dashboard.app')
@section('headScripts')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        function updatechart(){
            const request = new XMLHttpRequest();
            request.open('get', 'index_frame_test');
            request.onload = () => {
                const dataset = JSON.parse(request.responseText);
                var x=0,dd=''
                for(var i=0;i<54;i+=9){
                    dd+='<tr>'
                    for(var j=i;j<i+9;j++){
                        if(i==0||j==i)
                            dd+='<td>'+dataset[j]+'</td>'
                        else if(i==9||i==18)
                            dd+='<td  style="color:'+(dataset[j]*10<=30 ? "#ff3333;color:#ff3333":(dataset[j]*10>=60?"#00cc00;color:#00cc00":"#e6e600;color:#e6e600"))+'">' +(dataset[j]*10<=30 ? '<i style="margin-left:-5px; margin-right:5px ; font-size:25px"  class="fa fa-arrow-down"></i>':(dataset[j]*10>=60 ?'<i style="margin-left:-5px; margin-right:5px ; font-size:25px"  class="fa fa-arrow-up"></i>':'<i style="margin-left:-5px; margin-right:5px ; font-size:25px"  class="fa fa-arrow-right"></i>'))+ parseFloat(dataset[j]*10).toFixed(1) + '</td>'
                        else
                            dd+='<td  style="color:'+(dataset[j]*5<0?"#ff3333":"#00cc00")+'">' +(dataset[j]*5<0 ? '<i style="margin-left:-5px; margin-right:5px ; font-size:25px"  class="fa fa-arrow-down"></i>':'<i style="margin-left:-5px; margin-right:5px ; font-size:25px"  class="fa fa-arrow-up"></i>')+ parseFloat(dataset[j]*5).toFixed(1) + '</td>';
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
