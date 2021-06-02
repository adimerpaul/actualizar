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
                        <th>Operacion</th>
                    </tr>
                    </thead>

                    <tbody  id='list'>
                    </tbody>
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modificar Tramite <label for="" id="numtram" name="numtram"></label></h5>
                            </div>
                            <div class="modal-body">
                                <form id="modificar">
                                <div class="form-row">
                                    <div class="form-group col-md-2">
                                        <label for="na_ju">NA/JU</label>
                                        <input type="text" class="form-control" id="na_ju" name="na_ju" pattern="N|J">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="tipo_tram">Tipo Tram</label>
                                        <input type="text" class="form-control" id="tipo_tram" name="tipo_tram" pattern="[0-9]{1}">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="fecha_ini">Fecha Ini</label>
                                        <input type="text" class="form-control" id="fecha_ini" name="fecha_ini" >
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-2">
                                        <label for="estado">Estado</label> 
                                        <input type="text" class="form-control" id="estado" name="estado" pattern="T|F">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="fecha_fin">Fecha Fin</label> 
                                        <input type="text" class="form-control" id="fecha_fin" name="fecha_fin">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="unid_dest">Unidad Dest</label> 
                                        <input type="text" class="form-control" id="unid_dest" name="unid_dest" pattern="[0-9]{1}">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="fech_dest">Fecha Dest</label> 
                                        <input type="text" class="form-control" id="fech_dest" name="fech_dest">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="tramitador">Tramitador</label>
                                    <input type="text" class="form-control" id="tramitador" name="tramitador">
                                </div>
                                <button type="submit" class="btn btn-primary">Guardar</button>
                                </form>
                            </div>
                            </div>
                        </div>
                    </div>


                </table>
                <div class="modal fade" id="seguiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Seguimiento Tramite <label for="" id="numtram2" name="numtram2"></label></h5>
                                </div>
                                <div class="modal-body">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                        <th>C_tramite</th>
                                        <th>C_Proce</th>
                                        <th>C_uni</th>
                                        <th>Fecha Ini</th>
                                        <th>Fecha Fin</th>
                                        <th>Operador</th>
                                        <th>Estado</th>
                                        <th>Obs</th>
                                        </tr>
                                        </thead>
                                        <tbody id="lsegui">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

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
                        cadena+='<td><button type="button" class="btn btn-primary" data-id="'+r.CodAut+'" data-toggle="modal" data-target="#exampleModal">Modificar</button></td>';
                        cadena+='<td><button type="button" class="btn btn-warning" data-ntram="'+r.n_tramite+'" data-toggle="modal" data-target="#seguiModal">Ver Seg</button></td>';
                        cadena+='</tr>';
                        });
                        $('#list').html(cadena);
                        // mostrar();
                    }
                })
                return false;
            });

            $('#seguiModal').on('show.bs.modal', function(e) {    
                var ntram = $(e.relatedTarget).data().ntram;
                console.log(ntram);
                $.ajax({
                    url:'/vertram/'+ntram,
                    type:'POST',
                    data:{'_token': "{{ csrf_token() }}", 'ntramite':ntram},
                    success:function (t){
                        cadena2='';
                        $('#numtram2').html(ntram);
                        $.each(t, function(index,rr) {
                            cadena2+='<tr>';
                            cadena2+='<td>'+rr.c_tramite+'</td>';
                            cadena2+='<td>'+rr.c_proce+'</td>';
                            cadena2+='<td>'+rr.c_uni+'</td>';
                            cadena2+='<td>'+rr.fecha_ini+'</td>';
                            cadena2+='<td>'+rr.fecha_fin+'</td>';
                            cadena2+='<td>'+rr.operador+'</td>';
                            cadena2+='<td>'+rr.estado+'</td>';
                            cadena2+='<td>'+rr.obs+'</td>';
                            cadena2+='</tr>';
                        })

                        $('#lsegui').html(cadena2);

                    }
                    })
            });

            $('#exampleModal').on('show.bs.modal', function(e) {    
                var id = $(e.relatedTarget).data().id;
                console.log(id);
                $.ajax({
                    url:'/btram/'+id,
                    type:'POST',
                    data:{'_token': "{{ csrf_token() }}", 'id':id},
                    success:function (e){
                        console.log(e[0]);
                        row=e[0];                                               
                        $('#numtram').val(row.n_tramite);
                        $('#na_ju').val(row.na_ju);
                        $('#tipo_tram').val(row.tipo_tram);
                        $('#fecha_ini').val(row.fecha_ini);
                        $('#estado').val(row.estado);
                        $('#fecha_fin').val(row.fecha_fin);
                        $('#unid_dest').val(row.unid_dest);
                        $('#fech_dest').val(row.fech_dest);
                        $('#tramitador').val(row.tramitador);

                    }
               
                
                });
                
                $('#modificar').submit(function(){
                    let data={
                    '_token': "{{ csrf_token() }}",
                    'CodAut':id,
                    'n_tramite':$('#numtram').val(),
                    'na_ju':$('#na_ju').val(),
                    'tipo_tram':$('#tipo_tram').val(),
                    'fecha_ini':$('#fecha_ini').val(),
                    'estado':$('#estado').val(),
                    'fecha_fin':$('#fecha_fin').val(),
                    'unid_dest':$('#unid_dest').val(),
                    'fech_dest':$('#fech_dest').val(),
                    'tramitador':$('#tramitador').val()}
                    console.log(data);
                    $.ajax({
                        url:'/modtram/'+id,
                        type:'PUT',
                        data:data,
                        success:function (e){
                            // console.log(e);
                            $('#exampleModal').modal('hide');
                        }
                    })
        })


        });
        
        }
    </script>
@endsection
