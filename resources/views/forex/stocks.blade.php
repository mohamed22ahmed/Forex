@extends('layouts.forex_dashboard.app')
@section('headScripts')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        function updatechart(){
            const request = new XMLHttpRequest();
            request.open('get', 'stocks_test');
            request.onload = () => {
                const dataset = JSON.parse(request.responseText);
                var count=28;
                var html ='<tr><th style="color:#FFF">Pair</th><th>Buyer</th><th>Seller</th><th>Difference</th><th>Trend</th><th>Signal</th></tr>' ;

                html += '<tr>';
                html+='<td style="color:rgb(115, 230, 0)">DJI</td>';
                for( i=dataset.length/count*25+1 ; i<dataset.length/count*26;i++) {
                if(i==dataset.length/count*25+5)
                {

                html += '<td  style="background-color:'+(dataset[i]*100>=60?"#00cc00":(dataset[i]*100<60&&dataset[i]*100>=30?"blue":"#ff471a"))+'">'+ (dataset[i]*100>=60 ? '<p style="text-align:center ; font-size:25px"><i style="margin-left:-1px; margin-right:3px ; font-size:25px"  class="fa fa-arrow-up"></i> Buy</p>' : (dataset[i]*100<60&&dataset[i]*100>=30?'<p style="text-align:center ; font-size:25px"> <i style="margin-left:-1px; margin-right:3px ; font-size:25px"  class="fa fa-arrow-right"></i> Wait</p>':'<p style="text-align:center ; font-size:25px"> <i style="margin-left:-1px; margin-right:3px ; font-size:25px"  class="fa fa-arrow-down"></i> Sell</p>'))+'</td>';
                continue;
                }
                if(i==dataset.length/count*25+4){
                html += '<td  style="color:'+(dataset[i]*100<=30?"red":(dataset[i]*100>30&&dataset[i]*100<60?"yellow":"#00cc00"))+'">'+ (dataset[i]*100>=60 ? '<i style="margin-left:-5px; margin-right:5px ; font-size:25px"  class="fa fa-arrow-up"></i>' : (dataset[i]*100<60&&dataset[i]*100>=30?'<i style="margin-left:-5px; margin-right:5px ; font-size:25px"  class="fa fa-arrow-right"></i>':'<i style="margin-left:-5px; margin-right:5px ; font-size:25px"  class="fa fa-arrow-down"></i>'))+ Math.ceil(dataset[i]*100)  +'%</td>';
                continue;
                }
                html += '<td  style="color:'+(dataset[i]*217<0?"#ff3333":"#00cc00")+'">' +(dataset[i]*217<0 ? '<i style="margin-left:-5px; margin-right:5px ; font-size:25px"  class="fa fa-arrow-down"></i>':'<i style="margin-left:-5px; margin-right:5px ; font-size:25px"  class="fa fa-arrow-up"></i>')+ parseFloat(dataset[i]*217).toFixed(2) + '</td>';
                }
                html += '</tr>';


                html += '<tr>';
                html+='<td style="color:yellow">Gold</td>';
                for( i=dataset.length/count*26+1 ; i<dataset.length/count*27;i++) {
                if(i==dataset.length/count*26+5)
                {
                html += '<td  style="background-color:'+(dataset[i]*100>=60?"#00cc00":(dataset[i]*100<60&&dataset[i]*100>=30?"blue":"#ff471a"))+'">'+ (dataset[i]*100>=60 ? '<p style="text-align:center ; font-size:25px"><i style="margin-left:-1px; margin-right:3px ; font-size:25px"  class="fa fa-arrow-up"></i> Buy</p>' : (dataset[i]*100<60&&dataset[i]*100>=30?'<p style="text-align:center ; font-size:25px"> <i style="margin-left:-1px; margin-right:3px ; font-size:25px"  class="fa fa-arrow-right"></i> Wait</p>':'<p style="text-align:center ; font-size:25px"> <i style="margin-left:-1px; margin-right:3px ; font-size:25px"  class="fa fa-arrow-down"></i> Sell</p>'))+'</td>';
                continue;
                }
                if(i==dataset.length/count*26+4){
                html += '<td  style="color:'+(dataset[i]*100<=30?"red":(dataset[i]*100>30&&dataset[i]*100<60?"yellow":"#00cc00"))+'">'+ (dataset[i]*100>=60 ? '<i style="margin-left:-5px; margin-right:5px ; font-size:25px"  class="fa fa-arrow-up"></i>' : (dataset[i]*100<60&&dataset[i]*100>=30?'<i style="margin-left:-5px; margin-right:5px ; font-size:25px"  class="fa fa-arrow-right"></i>':'<i style="margin-left:-5px; margin-right:5px ; font-size:25px"  class="fa fa-arrow-down"></i>'))+ Math.ceil(dataset[i]*100)  +'%</td>';
                continue;
                }
                html += '<td  style="color:'+(dataset[i]*217<0?"#ff3333":"#00cc00")+'">' +(dataset[i]*217<0 ? '<i style="margin-left:-5px; margin-right:5px ; font-size:25px"  class="fa fa-arrow-down"></i>':'<i style="margin-left:-5px; margin-right:5px ; font-size:25px"  class="fa fa-arrow-up"></i>')+ parseFloat(dataset[i]*217).toFixed(2) + '</td>';
                }
                html += '</tr>';


                html += '<tr>';
                html+='<td style="color:rgba(255, 99, 132, 1)">Oil</td>';
                for( i=dataset.length/count*27+1 ; i<dataset.length/count*28;i++) {
                if(i==dataset.length/count*27+5)
                {
                html += '<td  style="background-color:'+(dataset[i]*100>=60?"#00cc00":(dataset[i]*100<60&&dataset[i]*100>=30?"blue":"#ff471a"))+'">'+ (dataset[i]*100>=60 ? '<p style="text-align:center ; font-size:25px"><i style="margin-left:-1px; margin-right:3px ; font-size:25px"  class="fa fa-arrow-up"></i> Buy</p>' : (dataset[i]*100<60&&dataset[i]*100>=30?'<p style="text-align:center ; font-size:25px"> <i style="margin-left:-1px; margin-right:3px ; font-size:25px"  class="fa fa-arrow-right"></i> Wait</p>':'<p style="text-align:center ; font-size:25px"> <i style="margin-left:-1px; margin-right:3px ; font-size:25px"  class="fa fa-arrow-down"></i> Sell</p>'))+'</td>';
                continue;
                }
                if(i==dataset.length/count*27+4){
                html += '<td  style="color:'+(dataset[i]*100<=30?"red":(dataset[i]*100>30&&dataset[i]*100<60?"yellow":"#00cc00"))+'">'+ (dataset[i]*100>=60 ? '<i style="margin-left:-5px; margin-right:5px ; font-size:25px"  class="fa fa-arrow-up"></i>' : (dataset[i]*100<60&&dataset[i]*100>=30?'<i style="margin-left:-5px; margin-right:5px ; font-size:25px"  class="fa fa-arrow-right"></i>':'<i style="margin-left:-5px; margin-right:5px ; font-size:25px"  class="fa fa-arrow-down"></i>'))+ Math.ceil(dataset[i]*100)  +'%</td>';
                continue;
                }
                html += '<td  style="color:'+(dataset[i]*217<0?"#ff3333":"#00cc00")+'">' +(dataset[i]*217<0 ? '<i style="margin-left:-5px; margin-right:5px ; font-size:25px"  class="fa fa-arrow-down"></i>':'<i style="margin-left:-5px; margin-right:5px ; font-size:25px"  class="fa fa-arrow-up"></i>')+ parseFloat(dataset[i]*217).toFixed(2) + '</td>';
                }
                html += '</tr>';

                html += '<tr>';
                html+='<td style="color:red">DAX</td>';
                for( i=dataset.length/count*15+1 ; i<dataset.length/count*16;i++) {
                if(i==dataset.length/count*15+5)
                {
                html += '<td  style="background-color:'+(dataset[i]*100>=60?"#00cc00":(dataset[i]*100<60&&dataset[i]*100>=30?"blue":"#ff471a"))+'">'+ (dataset[i]*100>=60 ? '<p style="text-align:center ; font-size:25px"><i style="margin-left:-1px; margin-right:3px ; font-size:25px"  class="fa fa-arrow-up"></i> Buy</p>' : (dataset[i]*100<60&&dataset[i]*100>=30?'<p style="text-align:center ; font-size:25px"> <i style="margin-left:-1px; margin-right:3px ; font-size:25px"  class="fa fa-arrow-right"></i> Wait</p>':'<p style="text-align:center ; font-size:25px"> <i style="margin-left:-1px; margin-right:3px ; font-size:25px"  class="fa fa-arrow-down"></i> Sell</p>'))+'</td>';
                continue;
                }
                if(i==dataset.length/count*15+4){
                html += '<td  style="color:'+(dataset[i]*100<=30?"red":(dataset[i]*100>30&&dataset[i]*100<60?"yellow":"#00cc00"))+'">'+ (dataset[i]*100>=60 ? '<i style="margin-left:-5px; margin-right:5px ; font-size:25px"  class="fa fa-arrow-up"></i>' : (dataset[i]*100<60&&dataset[i]*100>=30?'<i style="margin-left:-5px; margin-right:5px ; font-size:25px"  class="fa fa-arrow-right"></i>':'<i style="margin-left:-5px; margin-right:5px ; font-size:25px"  class="fa fa-arrow-down"></i>'))+ Math.ceil(dataset[i]*100)  +'%</td>';
                continue;
                }
                html += '<td  style="color:'+(dataset[i]*217<0?"#ff3333":"#00cc00")+'">' +(dataset[i]*217<0 ? '<i style="margin-left:-5px; margin-right:5px ; font-size:25px"  class="fa fa-arrow-down"></i>':'<i style="margin-left:-5px; margin-right:5px ; font-size:25px"  class="fa fa-arrow-up"></i>')+ parseFloat(dataset[i]*217).toFixed(2) + '</td>';
                }
                html += '</tr>';

                html += '<tr>';
                html+='<td style="color:#cc99ff">ND100</td>';
                for( i=dataset.length/count*16+1 ; i<dataset.length/count*17;i++) {
                if(i==dataset.length/count*16+5)
                {
                html += '<td  style="background-color:'+(dataset[i]*100>=60?"#00cc00":(dataset[i]*100<60&&dataset[i]*100>=30?"blue":"#ff471a"))+'">'+ (dataset[i]*100>=60 ? '<p style="text-align:center ; font-size:25px"><i style="margin-left:-1px; margin-right:3px ; font-size:25px"  class="fa fa-arrow-up"></i> Buy</p>' : (dataset[i]*100<60&&dataset[i]*100>=30?'<p style="text-align:center ; font-size:25px"> <i style="margin-left:-1px; margin-right:3px ; font-size:25px"  class="fa fa-arrow-right"></i> Wait</p>':'<p style="text-align:center ; font-size:25px"> <i style="margin-left:-1px; margin-right:3px ; font-size:25px"  class="fa fa-arrow-down"></i> Sell</p>'))+'</td>';
                continue;
                }
                if(i==dataset.length/count*16+4){
                html += '<td  style="color:'+(dataset[i]*100<=30?"red":(dataset[i]*100>30&&dataset[i]*100<60?"yellow":"#00cc00"))+'">'+ (dataset[i]*100>=60 ? '<i style="margin-left:-5px; margin-right:5px ; font-size:25px"  class="fa fa-arrow-up"></i>' : (dataset[i]*100<60&&dataset[i]*100>=30?'<i style="margin-left:-5px; margin-right:5px ; font-size:25px"  class="fa fa-arrow-right"></i>':'<i style="margin-left:-5px; margin-right:5px ; font-size:25px"  class="fa fa-arrow-down"></i>'))+ Math.ceil(dataset[i]*100)  +'%</td>';
                continue;
                }
                html += '<td  style="color:'+(dataset[i]*217<0?"#ff3333":"#00cc00")+'">' +(dataset[i]*217<0 ? '<i style="margin-left:-5px; margin-right:5px ; font-size:25px"  class="fa fa-arrow-down"></i>':'<i style="margin-left:-5px; margin-right:5px ; font-size:25px"  class="fa fa-arrow-up"></i>')+ parseFloat(dataset[i]*217).toFixed(2) + '</td>';
                }
                html += '</tr>';



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
