@extends('layouts.principal')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="bg-cyan text-white text-center">UFV's</h1>
                <form class="row" id="fomulario">
{{--                    @csrf--}}
                    <div class="col-md-4">
                        <label for="fecha" class="form-label">Fecha</label>
                        <input type="date" class="form-control" name="fecha" id="fecha" required value="{{date('Y-m-d')}}" >
                    </div>
                    <div class="col-md-2">
                        <label for="coti" class="form-label">Cotizacion</label>
                        <input type="text" class="form-control" name="coti" id="coti" required autofocus>
                    </div>
                    <div class="col-md-2">
                        <label for="tipodia" class="form-label">Tipo Dia</label>
                        <select name="tipodia" id="tipodia" name="tipodia" class="form-control" >
                            <option value="">Selecionar</option>
                            <option value="H" selected>Habil</option>
                            <option value="">Inabil</option>
                        </select>
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
                        <th>Cotizacion</th>
                        <th>Tipo dia</th>
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
                                        <label for="coti2" class="col-form-label">Cotizacion :</label>
                                        <input type="text" class="form-control" id="coti2">
                                    </div>
                                    <div class="form-group">
                                        <label for="tipodia2" class="col-form-label">Tipo dia:</label>
                                        <input type="text" class="form-control" id="tipodia2">
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
                    url:'/ufv',
                    type:'POST',
                    data:{'_token': "{{ csrf_token() }}",'fecha':$('#fecha').val(),'coti':$('#coti').val(),'tipodia':$('#tipodia').val()},
                    success:function (e){
                        // console.log(e);
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
                    'coti':$('#coti2').val(),
                    'tipodia':$('#tipodia2').val()
                };
                $('#contenido').html('');
                $.ajax({
                    url:'/ufv/'+CodAut,
                    type:'POST',
                    data:data,
                    success:function (e){
                        // console.log(e);
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
                $('#coti2').val($(this).attr('id-coti'));
                $('#tipodia2').val($(this).attr('id-tipodia'));
                $('#exampleModal').modal('show');
                //console.log($(this).attr('id-CodAut'));
                e.preventDefault();
            })
            mostrar();
            function mostrar(){
                $('#contenido').html('');
                table.destroy();
                $.ajax({
                    url:'/ufv/1',
                    success:function (e){
                        // console.log(e);
                        let t='';
                        e.forEach(r=>{
                            t+="<tr>" +
                                "<td>"+r.CodAut+"</td>"+
                                "<td>"+r.fecha+"</td>"+
                                "<td>"+r.coti+"</td>"+
                                "<td>"+r.tipodia+"</td>"+
                                "<td><button id-CodAut='"+r.CodAut+"' id-fecha='"+r.fecha+"' id-coti='"+r.coti+"' id-tipodia='"+r.tipodia+"' class='modificar btn btn-warning'><i class='fa fa-edit'></i> Modificar</button></td>"+
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
