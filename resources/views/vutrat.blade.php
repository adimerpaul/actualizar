@extends('layouts.principal')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="bg-dark text-white text-center">Archivos vutrar</h1>
            </div>
            <div class="col-sm-3">
                <button class="btn btn-info btn-block" data-toggle="modal" data-target="#mactividades"><i class="fa fa-cog"></i> Actividades</button>
            </div>
            <div class="col-sm-3">
                <button class="btn btn-success btn-block" data-toggle="modal" data-target="#msectores"><i class="fa fa-file-pdf"></i> Sectores</button>
            </div>
            <div class="col-sm-3">
                <button class="btn btn-warning btn-block" data-toggle="modal" data-target="#mprocesos"><i class="fa fa-bell"></i> Procesos</button>
            </div>
            <div class="col-sm-3">
                <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#mrequisitos"><i class="fa fa-box"></i> Requisitos</button>
            </div>
            <div class="modal fade" id="mrequisitos" tabindex="-1" role="dialog" aria-labelledby="mactividadesTitle" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-primary text-white ">
                            <h5 class="modal-title text-center" style="width: 100%" id="mactividadesTitle">Requisitos</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <table id="requisitos" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>cod_prin</th>
                                    <th>cod_sec</th>
                                    <th>requisito</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($requisitos as $row)
                                    <tr>
                                        <td>{{$row->cod_prin}}</td>
                                        <td>{{$row->cod_sec}}</td>
                                        <td>{{$row->requisito}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="mactividades" tabindex="-1" role="dialog" aria-labelledby="mactividadesTitle" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-info text-white ">
                            <h5 class="modal-title text-center" style="width: 100%" id="mactividadesTitle">Actividades</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <table id="actividades" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Sector</th>
                                    <th>Codigo</th>
                                    <th>Detalle</th>
                                    <th>Registro</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($actividades as $row)
                                    <tr>
                                        <td>{{$row->sector}}</td>
                                        <td>{{$row->codigo}}</td>
                                        <td>{{$row->detalle}}</td>
                                        <td>{{$row->registro}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="msectores" tabindex="-1" role="dialog" aria-labelledby="mactividadesTitle" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-success text-white ">
                            <h5 class="modal-title text-center" style="width: 100%" id="mactividadesTitle">Sectores</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <table id="sectores" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Sector</th>
                                    <th>Detalle</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($sectores as $row)
                                    <tr>
                                        <td>{{$row->sector}}</td>
                                        <td>{{$row->detalle}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="mprocesos" tabindex="-1" role="dialog" aria-labelledby="mactividadesTitle" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-warning text-white ">
                            <h5 class="modal-title text-center" style="width: 100%" id="mactividadesTitle">Procesos</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <table id="procesos" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Cod_tramite</th>
                                    <th>Cod_proc</th>
                                    <th>Unidad</th>
                                    <th>Proceso</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($procesos as $row)
                                    <tr>
                                        <td>{{$row->cod_tram}}</td>
                                        <td>{{$row->cod_proc}}</td>
                                        <td>{{$row->unidad}}</td>
                                        <td>{{$row->proceso}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <h1 class="bg-dark pt-1 text-center text-white"> Funcionarios</h1>
                <div class="table-responsive">
                    <table id="funcionarios" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>Cod</th>
                            <th>Nombre</th>
                            <th>Oper</th>
                            <th>Caducacion</th>
                            <th>Opciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($funcionarios as $row)
                            <tr>
                                <td>{{$row->cod_per}}</td>
                                <td>{{$row->paterno}} {{$row->materno}} {{$row->nombres}}</td>
                                <td>{{$row->oper}}</td>
                                <td>{{$row->fech_caduca}}</td>
                                <td>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-cod_per="{{$row->cod_per}}" data-oper="{{$row->oper}}" data-fech_caduca="{{$row->fech_caduca}}" > <i class="fa fa-address-card"></i> Cambiar</button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form id="modificar">
                                    <div class="form-group">
                                        <label for="fech_caduca" class="col-form-label">Fecha caducacion:</label>
                                        <input type="text" class="form-control" id="fech_caduca">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-trash"></i> Cerrar</button>
                                        <button type="submit" class="btn btn-success"><i class="fa fa-plus-circle"></i> Cambiar</button>
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
            $('#actividades').DataTable();
            $('#sectores').DataTable();
            $('#procesos').DataTable();
            $('#requisitos').DataTable();
            $('#funcionarios').DataTable();
            var cod_per;
            $('#exampleModal').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var oper = button.data('oper')
                $('#fech_caduca').val(button.data('fech_caduca'));
                cod_per=button.data('cod_per');
                // Extract info from data-* attributes
                // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
                var modal = $(this)
                modal.find('.modal-title').text('Operador ' + oper)
                // modal.find('.modal-body input').val(recipient)
            })
            $('#modificar').submit(function (e){
                let data={
                    '_token': "{{ csrf_token() }}",
                    'fech_caduca':$('#fech_caduca').val(),
                    'cod_per': cod_per
                };
                    $.ajax({
                        url:'/vutrat',
                        type:'POST',
                        data:data,
                        success:function (e){
                            // console.log(e);
                            $('#exampleModal').modal('hide');
                        }
                    })
                return false;
            });

            {{--// var table=$('#zero_config').DataTable({--}}
            {{--//     "order": [[ 0, "desc" ]]--}}
            {{--// });--}}

            {{--$('#fomulario').submit(function (){--}}
            {{--    $.ajax({--}}
            {{--        url:'/ufv',--}}
            {{--        type:'POST',--}}
            {{--        data:{'_token': "{{ csrf_token() }}",'fecha':$('#fecha').val(),'coti':$('#coti').val(),'tipodia':$('#tipodia').val()},--}}
            {{--        success:function (e){--}}
            {{--            // console.log(e);--}}
            {{--            mostrar();--}}
            {{--        }--}}
            {{--    })--}}
            {{--    return false;--}}
            {{--});--}}
            {{--$('#modificar').submit(function (){--}}
            {{--    // console.log('a');--}}
            {{--    let data={--}}
            {{--        '_method': "PUT",--}}
            {{--        '_token': "{{ csrf_token() }}",--}}
            {{--        'fecha':$('#fecha2').val(),--}}
            {{--        'coti':$('#coti2').val(),--}}
            {{--        'tipodia':$('#tipodia2').val()--}}
            {{--    };--}}
            {{--    $('#contenido').html('');--}}
            {{--    $.ajax({--}}
            {{--        url:'/ufv/'+CodAut,--}}
            {{--        type:'POST',--}}
            {{--        data:data,--}}
            {{--        success:function (e){--}}
            {{--            // console.log(e);--}}
            {{--            $('#exampleModal').modal('hide');--}}

            {{--            mostrar();--}}
            {{--        }--}}
            {{--    })--}}
            {{--    return false;--}}
            {{--});--}}
            {{--var CodAut;--}}
            {{--$('#contenido').on('click','.modificar',function (e){--}}
            {{--    CodAut=$(this).attr('id-CodAut');--}}
            {{--    $('#fecha2').val($(this).attr('id-fecha'));--}}
            {{--    $('#coti2').val($(this).attr('id-coti'));--}}
            {{--    $('#tipodia2').val($(this).attr('id-tipodia'));--}}
            {{--    $('#exampleModal').modal('show');--}}
            {{--    //console.log($(this).attr('id-CodAut'));--}}
            {{--    e.preventDefault();--}}
            {{--})--}}
            {{--// mostrar();--}}
            {{--function mostrar(){--}}
            {{--    $('#contenido').html('');--}}
            {{--    table.destroy();--}}
            {{--    $.ajax({--}}
            {{--        url:'/ufv/1',--}}
            {{--        success:function (e){--}}
            {{--            // console.log(e);--}}
            {{--            let t='';--}}
            {{--            e.forEach(r=>{--}}
            {{--                t+="<tr>" +--}}
            {{--                    "<td>"+r.CodAut+"</td>"+--}}
            {{--                    "<td>"+r.fecha+"</td>"+--}}
            {{--                    "<td>"+r.coti+"</td>"+--}}
            {{--                    "<td>"+r.tipodia+"</td>"+--}}
            {{--                    "<td><button id-CodAut='"+r.CodAut+"' id-fecha='"+r.fecha+"' id-coti='"+r.coti+"' id-tipodia='"+r.tipodia+"' class='modificar btn btn-warning'><i class='fa fa-edit'></i> Modificar</button></td>"+--}}
            {{--                    "</tr>";--}}
            {{--            });--}}
            {{--            $('#contenido').html(t);--}}
            {{--            table=$('#zero_config').DataTable({--}}
            {{--                "order": [[ 0, "desc" ]]--}}
            {{--            });--}}
            {{--        }--}}
            {{--    })--}}
            {{--};--}}
        }


    </script>
@endsection
