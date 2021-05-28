@extends('layouts.principal')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="bg-cyan text-black text-center">Vutrat Tramites</h1>
                <form class="row" id="fomulario">
{{--                    @csrf--}}
                    <div class="col-md-4">
                        <label for="tramite" class="form-label">Num Tramite</label>
                        <input type="text" class="form-control" name="tramite" id="tramite" required min=5 maxlength=8>
                    </div>
                    <div class="col-md-2">
                        <label for="buscarcont" class="form-label">Buscar</label> <br>
                        <button class="btn btn-primary" type="submit" id='buscarcont'><i class="fa fa-upload"></i> Buscar</button>
                    </div>
                </form>
                <br>
                <table class='table table-striped'>
                    <thead class="table-dark">
                    <tr>
                        <th>N Tramite</th>
                        <th>Nat/Jur</th>
                        <th>Tipo Tr</th>
                        <th>Fecha ini</th>
                        <th>Operador</th>
                        <th>Estado</th>
                        <th>Fecha Fin</th>
                        <th>U Destino</th>
                        <th>Fecha Des</th>
                        <th>Tramitador</th>
                    </tr>
                    </thead>
                    <tbody  id='list'>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <script>
        window.onload=function (){

            $('#fomulario').submit(function (){
                $.ajax({
                    url:'/bustramite',
                    type:'POST',
                    data:{'_token': "{{ csrf_token() }}", 'tramite':$('#tramite').val()},
                    success:function (e){
                        console.log(e);
                        cadena='';
                        $.each(e, function(index,r) {
                        cadena+='<tr>';
                        cadena+='<td>'+r.n_tramite+'</td>';
                        cadena+='<td>'+r.na_ju+'</td>';
                        cadena+='<td>'+r.tipo_tram+'</td>';
                        if(r.fecha_ini == null)
                            cadena+='<td></td>';
                        else
                        cadena+='<td>'+((r.fecha_ini).substr(0,10))+'</td>';
                        cadena+='<td>'+r.operador+'</td>';
                        cadena+='<td>'+r.estado+'</td>';
                        if(r.fecha_fin== null)
                            cadena+='<td></td>';
                        else
                        cadena+='<td>'+((r.fecha_fin).substr(0,10))+'</td>';
                        cadena+='<td>'+r.unid_dest+'</td>';
                        if(r.fech_dest==null)
                            cadena+='<td></td>';
                        else
                        cadena+='<td>'+((r.fech_dest).substr(0,10))+'</td>';
                        cadena+='<td>'+r.tramitador+'</td>';
                        cadena+='</tr>';
                        });
                        $('#list').html(cadena);
                        // mostrar();
                    }
                })
                return false;
            });


        }


    </script>
@endsection
