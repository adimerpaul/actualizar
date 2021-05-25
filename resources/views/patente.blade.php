@extends('layouts.principal')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="bg-orange text-white text-center">Patentes</h1>
                <form class="row" id="fomulario">
{{--                    @csrf--}}
                    <div class="col-md-4">
                        <label for="fecha" class="form-label">Fecha</label>
                        <input type="date" class="form-control" name="fecha" id="fecha" required value="{{date('Y-m-d')}}" >
                    </div>
                    <div class="col-md-2">
                        <label for="tasa" class="form-label">Tasa</label>
                        <input type="text" class="form-control" name="tasa" id="tasa" required autofocus>
                    </div>
                    <div class="col-md-2">
                        <label for="comun1" class="form-label">Crear</label> <br>
                        <button class="btn btn-primary" type="submit" id='buscarcont'><i class="fa fa-upload"></i> Guardar</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-12">
            <div class="table-responsive">
                <table id="zero_config" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Fecha</th>
                        <th>Tasa</th>
                        <th>Opcion</th>
                    </tr>
                    </thead>
                    <tbody id="contenido">
                    </tbody>
                </table>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modificar</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form id="modificar">
                                    <div class="form-group">
                                        <label for="fecha2" class="col-form-label">Fecha :</label>
                                        <input type="text" class="form-control" id="fecha2">
                                    </div>
                                    <div class="form-group">
                                        <label for="tasa2" class="col-form-label">Tasa :</label>
                                        <input type="text" class="form-control" id="tasa2">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal"> <i class="fa fa-trash"></i> Cerrar</button>
                                        <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Guardar</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        window.onload=function (){
            var table=$('#zero_config').DataTable({
                "order": [[ 0, "desc" ]]
            });

            $('#fomulario').submit(function (){
                $.ajax({
                    url:'/patente',
                    type:'POST',
                    data:{'_token': "{{ csrf_token() }}",'fecha':$('#fecha').val(),'tasa':$('#tasa').val()},
                    success:function (e){
                        mostrar();
                    }
                })
                return false;
            });
            $('#modificar').submit(function (){
                // console.log('a');
                let data={
                    '_method': "PUT",
                    '_token': "{{ csrf_token() }}",
                    'fecha':$('#fecha2').val(),
                    'tasa':$('#tasa2').val(),
                };
                $('#contenido').html('');
                $.ajax({
                    url:'/patente/'+CodAut,
                    type:'POST',
                    data:data,
                    success:function (e){
                        $('#exampleModal').modal('hide');
                        mostrar();
                    }
                })
                return false;
            });
            var CodAut;
            $('#contenido').on('click','.modificar',function (e){
                CodAut=$(this).attr('id-CodAut');
                $('#fecha2').val($(this).attr('id-fecha'));
                $('#tasa2').val($(this).attr('id-tasa'));
                $('#exampleModal').modal('show');
                //console.log($(this).attr('id-CodAut'));
                e.preventDefault();
            })
            mostrar();
            function mostrar(){
                $('#contenido').html('');
                table.destroy();
                $.ajax({
                    url:'/patente/1',
                    success:function (e){
                        // console.log(e);
                        let t='';
                        e.forEach(r=>{
                            t+="<tr>" +
                                "<td>"+r.CodAut+"</td>"+
                                "<td>"+r.fecha+"</td>"+
                                "<td>"+r.tasa+"</td>"+
                                "<td><button id-CodAut='"+r.CodAut+"' id-fecha='"+r.fecha+"' id-tasa='"+r.tasa+"' class='modificar btn btn-warning'><i class='fa fa-edit'></i> Modificar</button></td>"+
                                "</tr>";
                        });
                        $('#contenido').html(t);
                        table=$('#zero_config').DataTable({
                            "order": [[ 0, "desc" ]]
                        });
                    }
                })
            };
        }


    </script>
@endsection
