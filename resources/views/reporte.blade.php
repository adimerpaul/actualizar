@extends('layouts.principal')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center bg-primary text-white mt-1">Reporte Rectificacion</h1>
            </div>
            <div class="col-12">
                <form id="formulario" method="GET">
                    <input type="date" name="fecha" id="fecha" value="{{date('Y-m-d')}}">
                    <button type="button" class="btn btn-primary" id='buscar'>Imprimir</button>
                </form>
            </div>

        </div>
    </div>
    <script>
        window.onload=function (){
            $('#buscar').click(function(e){
                if($('#fecha').val()=='')
                {
                    alert('debes seleccionar fecha');
                    return false;
                }
                console.log($('#fecha').val());
                $.ajax({
                    url:'consulta',
                    type:'POST',
                    data:{'_token': "{{ csrf_token() }}",'fecha':$('#fecha').val()},
                    success:function (res){
                        function header(fec1){
                            doc.setFont(undefined,'bold')
                            doc.setFontSize(6);
                            doc.text(0.5, 1, 'H. GOBIERNO MUNICIPAL DE ORURO')

                            doc.text(8, 2.5, 'RESUMEN FORMULARIO 2001')
                            doc.text(8, 3, 'TASAS POR SERVICIO A INMUEBLES URBANOS')
                            doc.text(8.5, 3.5, 'RESUMEN CORRESPONDIENTE AL DIA : '+ fec1 +' CAJERO: ')
                            doc.setFontSize(8);
                            doc.text(0.5, 4, 'No')
                            doc.text(3, 4, 'INMUEBLE')
                            doc.text(5.5, 4, 'COD CATASTRAL')
                            doc.text(8, 4, 'IMPORTE Bs.')
                            doc.text(10, 4, 'MINUTA')
                            doc.text(16, 4, 'TIPO')
                            doc.setFont(undefined,'normal')
                            doc.setFontSize(9);
                        }
                        // console.log(e)
                        let dat=res;
                        var doc = new jsPDF('p','cm','letter')
                        // console.log(dat);
                        doc.setFont("courier");
                        header($('#fecha').val());
                        var x=0.5,y=4, i=0,total=0;
                        console.log(dat);
                        dat.forEach(r => {
                            y+=1.5;
                            total+=r.totalpagar;
                            i=i+1;
                            doc.text(0.5, y, i+"");
                            doc.text(3, y, r.cantidad);
                            doc.text(5.5, y, r.codigocatastral);
                            doc.text(8, y, r.totalpagar+"");
                            doc.text(10, y, r.fechaminuta);
                            doc.text(16, y, r.formapago);
                        });
                        /*inicio parte uno*/
                        doc.text(1, y+1.5, 'TOTAL RECAUDADO (en bolivianos)'+ total);

                        // doc.addPage();
                        // doc.text(20, 20, 'Do you like that?');
                        doc.save('reporte.pdf');
                    },fail:function (e){
                        // console.log(e);
                        alert('eror:',e);
                    }})
            });
        }


    </script>
@endsection
