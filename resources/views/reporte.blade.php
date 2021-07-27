@extends('layouts.principal')
@section('content')
    <div class="container">
        <h1 class="text-center bg-primary text-white mt-1">Reporte Rectificacion</h1>
        <div class="row">
            <form id="formulario" method="GET">
                <input type="date" name="fecha" id="fecha">
                <button type="button" class="btn btn-primary" id='buscar'>Imprimir</button>
            </form>
        </div>
    </div>
    <script>
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
                            console.log(res);
                            function header(fec1){
                            doc.setFont(undefined,'bold')
                            doc.text(0.5, 1, 'H. GOBIERNO MUNICIPAL DE ORURO')

                            doc.text(8, 2.5, 'RESUMEN FORMULARIO 2001')
                            doc.text(8, 3, 'TASAS POR SERVICIO A INMUEBLES URBANOS')
                            doc.text(0.5, 4, 'RESUMEN CORRESPONDIENTE AL DIA : '+ fec1 +' CAJERO: ')
                            doc.setFontSize(9);
                            doc.text(0.5, 4, 'No')
                            doc.text(3, 4, 'INMUEBLE')
                            doc.text(5, 4, 'COD CATASTRAL')
                            doc.text(7, 4, 'IMPORTE Bs.')
                            doc.text(16, 4, 'MINUTA')
                            doc.text(18, 4, 'TIPO')
                            doc.setFont(undefined,'normal')
                            doc.setFontSize(9);
                             }
                            // console.log(e)
                            let dat=res;
                            var doc = new jsPDF('p','cm','legal')
                            // console.log(dat);
                            doc.setFont("courier");
                            doc.setFontSize(11);
                            header($('#fecha').val());
                            var x=0.5,y=4, i=0,total=0;
                            console.log(dat);
                            dat.forEach(r => {
                                y+=0.5;
                                total+=r.totalpagar;
                                doc.text(0.5, y, i++)
                                doc.text(3, y, r.cantidad)
                                doc.text(5, y, r.codigocatastral)
                                doc.text(7, y, r.totalpagar)
                                doc.text(16, y, r.fechaminuta)
                                doc.text(18, y, r.formapago)
                            });
                            /*inicio parte uno*/
                            doc.text(1, y+1, 'TOTAL RECAUDADO (en bolivianos)'+ total);

                            // doc.addPage();
                            // doc.text(20, 20, 'Do you like that?');
                            doc.save('reporte.pdf');
                        },fail:function (e){
                            // console.log(e);
                            alert('eror:',e);
                        }})
        });
        
    </script>
@endsection
