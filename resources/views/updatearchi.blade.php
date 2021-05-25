@extends('layouts.principal')
@section('content')
    <div class="container">
        <h2 class="bg-info text-center text-white">Actualizar archi</h2>
        <form class="row g-3" id="formulario">
            <div class="col-md-2">
                <label for="comun" class="form-label">Comun</label>
                <input type="text" class="form-control" id="comun" required placeholder="Comun">
            </div>
            <div class="col-md-2">
                <label for="cantidad" class="form-label">Cantidad</label>
                <input type="text" class="form-control" id="cantidad" required placeholder="Cantidad">
            </div>
            <div class="col-md-2">
                <label for="buscar" class="form-label">Buscar</label> <br>
                <button class="btn btn-primary" type="submit" id='buscar'><i class="fa fa-search"></i> Buscar</button>
            </div>
        </form>
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                    <tr class="thead-dark">
                        <th>#</th>
                        <th>Cantidad</th>
                        <th>Pagado</th>
                        <th>Gestion</th>
                        <th>Fecha</th>
                        <th>Oper</th>
                        <th>Pagando en</th>
                        <th>Hora</th>
                        <th>Opciones</th>
                    </tr>
                    </thead>
                    <tbody id="contenido">
                    </tbody>

                </table>
                <div class="modal fade" id="actualizar" tabindex="-1" role="dialog" aria-labelledby="actualizarLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="actualizarLabel">Actualizar</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form id="actualizararchi">
                                    <div class="form-group row">
                                        <label for="oper" class="col-sm-2 col-form-label">Oper</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="oper" value="Oper" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="pagado_en" class="col-sm-2 col-form-label">Pagado en</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="pagado_en" value="Pagado en" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="hora" class="col-sm-2 col-form-label">Hora</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="hora" value="Hora" required>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal"> <i class="fa fa-trash"></i> Cancelar</button>
                                        <button type="submit" class="btn btn-warning"> <i class="fa fa-pencil-alt"></i> Actualizar</button>
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
            var gestion,cantidad;
            $('#contenido').on("click",".cambiar",function (e){
                // console.log('a');
                $('#actualizar').modal('show');
                $('#oper').val($(this).attr('id-oper'));
                $('#pagado_en').val($(this).attr('id-pagado_en'));
                $('#hora').val($(this).attr('id-hora'));
                gestion=$(this).attr('id-gest');
                cantidad=$(this).attr('id-cantidad');
                e.preventDefault();
            })
            $('#actualizararchi').submit(function (e){
                var data={
                    "_token": "{{ csrf_token() }}",
                    "oper":$('#oper').val(),
                    "pagado_en":$('#pagado_en').val(),
                    "hora":$('#hora').val(),
                    "cantidad":cantidad,
                    "comun":$('#comun').val(),
                    "gest":gestion,
                }
                // console.log(data);
                $.ajax({
                    type:'POST',
                    data:data,
                    url:'/actualizararchi',
                    success:function (e){
                        // console.log(e);
                        mostrar($('#comun').val(),$('#cantidad').val());
                        $('#actualizar').modal('hide');
                    }
                })
                e.preventDefault();
                return false;
            });
            function mostrar(comun,cantidad){
                $('#contenido').html('');
                $.ajax({
                    url: "/gestiones/"+comun+'/'+cantidad,
                    success: function (res) {
                        let t='';
                        let c=0;
                        // console.log(res);
                        res.forEach(re=>{
                            re.forEach(r=>{
                                // console.log(r);
                                c++;
                                t+='<tr>' +
                                    '<td>'+c+'</td>' +
                                    '<td>'+r.cantidad+'</td>' +
                                    '<td>'+r.Pagado+'</td>' +
                                    '<td>'+r.gest+'</td>' +
                                    '<td>'+r.fecha+'</td>' +
                                    '<td>'+r.oper+'</td>' +
                                    '<td>'+r.pagado_en+'</td>' +
                                    '<td>'+r.hora+'</td>' +
                                    '<td>' +
                                    '<button  class="cambiar btn btn-info btn-sm" type="button" id-cantidad="'+r.cantidad+'" id-gest="'+r.gest+'" id-oper="'+r.oper+'" id-hora="'+r.hora+'" id-pagado_en="'+r.pagado_en+'"><i class="fa fa-pencil-alt"></i> Actualizar</button>' +
                                    '</td>' +
                                    '</tr>';
                            })
                        });
                        $('#contenido').html(t);
                    }
                });
            }
            $('#formulario').submit( function (e){
                $('#contenido').html('');
                // $('#buscar').html('<i class="fa fa-spinner"></i> Buscando...');
                 mostrar($('#comun').val(),$('#cantidad').val());
                // await $('#buscar').html('<i class="fa fa-search"></i> Buscar');
                // $.ajax({
                //     url:'/gestiones/'+$('#comun').val()+'/'+$('#cantidad').val(),
                //     success: function (res) {
                //         let t='';
                //         let c=0;
                //         // console.log(res);
                //         res.forEach(re=>{
                //             re.forEach(r=>{
                //                 // console.log(r);
                //                 c++;
                //                 t+='<tr>' +
                //                     '<td>'+c+'</td>' +
                //                     '<td>'+r.cantidad+'</td>' +
                //                     '<td>'+r.Pagado+'</td>' +
                //                     '<td>'+r.gest+'</td>' +
                //                     '<td>'+r.fecha+'</td>' +
                //                     '<td>'+r.oper+'</td>' +
                //                     '<td>'+r.pagado_en+'</td>' +
                //                     '<td>'+r.hora+'</td>' +
                //                     '<td>' +
                //                     '<button  class="cambiar btn btn-info btn-sm" type="button" id-oper="'+r.oper+'" id-hora="'+r.hora+'" id-pagado_en="'+r.pagado_en+'"><i class="fa fa-pencil-alt"></i> Actualizar</button>' +
                //                     '</td>' +
                //                     '</tr>';
                //             })
                //         });
                //         $('#contenido').html(t);
                //         $('#buscar').html('<i class="fa fa-search"></i> Buscar');
                //     }
                // })
                return false;
            });
        }
    </script>
@endsection
