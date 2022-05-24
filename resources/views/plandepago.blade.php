@extends('layouts.principal')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form class="row g-3" id="formulario">
                    <div class="col-md-3">
                        <label for="padronb" class="form-label">padronb</label>
                        <input type="text" class="form-control" id="padronb" required placeholder="padronb">
                    </div>
                    <div class="col-md-3">
                        <label for="" class="form-label">Buscar</label> <br>
                        <button class="btn btn-primary" type="submit" ><i class="fa fa-search"></i> Buscar</button>
                    </div>
{{--                    <div class="col-md-3">--}}
{{--                        <label for="" class="form-label">v_mod_ic</label> <br>--}}
{{--                        <button class="btn btn-cyan" type="button" data-toggle="modal" data-target="#v_mod_ic" ><i class="fa fa-archive"></i> v_mod_ic</button>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-3">--}}
{{--                        <label for="" class="form-label">v_requis</label> <br>--}}
{{--                        <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#v_requis" ><i class="fa fa-file-pdf"></i> v_requis</button>--}}
{{--                    </div>--}}
                </form>
            </div>

            <div class="col-12">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr class="thead-dark">
                            <th>padron </th>
                            <th>control </th>
                            <th>cuota </th>
                            <th>fec_term </th>
                            <th>imp_pagar </th>
                            <th>hora </th>
                            <th>cod_caja </th>
                            <th>fech_pago </th>
                            <th>opciones</th>
                        </tr>
                        </thead>
                        <tbody id="contenido">
                        </tbody>
                    </table>
                    <div class="modal fade" id="controlModal" tabindex="-1" role="dialog" aria-labelledby="controlModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="controlModalLabel">Actualizar control</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form id="formulariocontrol">
{{--                                        <div class="form-group row">--}}
{{--                                            <label for="control" class="col-sm-2 col-form-label">Nuevo control</label>--}}
{{--                                            <div class="col-sm-10">--}}
{{--                                                <input type="text" class="form-control" id="control" placeholder="Control">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
                                        <div class="form-group row">
                                            <label for="cod_caja" class="col-sm-2 col-form-label">cod_caja</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="cod_caja" placeholder="cod_caja" name="cod_caja">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="fec_term" class="col-sm-2 col-form-label">fec_term</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="fec_term" placeholder="fec_term" name="fec_term">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="control" class="col-sm-2 col-form-label">control</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="control" placeholder="control" name="control">
                                            </div>
                                        </div>
{{--                                        <div class="form-group row">--}}
{{--                                            <label for="horamercado" class="col-sm-2 col-form-label">horamercado</label>--}}
{{--                                            <div class="col-sm-10">--}}
{{--                                                <input type="text" class="form-control" id="horamercado" placeholder="horamercado" name="horamercado">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-trash"></i> Cerrar</button>
                                            <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Actualizar</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        window.onload=function (){
            $.ajax({
                url: "/v_mod_ic",
                success: function (res) {
                    let t='';
                    // console.log(res);
                    res.forEach(r=>{
                        t+='<tr>' +
                            '<td>'+r.codigo+'</td>' +
                            '<td>'+r.detalle+'</td>' +
                            '<td>'+r.req_s1+'</td>' +
                            '<td>'+r.req_s2+'</td>' +
                            '<td>'+r.req_s3+'</td>' +
                            '</tr>';
                    })
                    $('#contenidovmod_ic').html(t);
                }
            });
            $.ajax({
                url: "/v_requis",
                success: function (res) {
                    let t='';
                    // console.log(res);
                    res.forEach(r=>{
                        t+='<tr>' +
                            '<td>'+r.cod_prin+'</td>' +
                            '<td>'+r.cod_sec+'</td>' +
                            '<td>'+r.requisito+'</td>' +
                            '</tr>';
                    })
                    $('#contenidov_requis').html(t);
                }
            });
            $('#formulariocontrolv_tramites').submit(function (e){
                e.preventDefault()
                if (confirm('Seguro de actualizar?')){
                    $.ajax({
                        url: "/v_tramites/"+CodAut,
                        type:'PUT',
                        data:{
                            "_token": "{{ csrf_token() }}",
                            "n_tramite":$('#n_tramite2').val(),
                            "na_ju":$('#na_ju2').val(),
                            "tipo_tram":$('#tipo_tram').val(),
                            "fecha_ini":$('#fecha_ini').val(),
                            "operador":$('#operador').val(),
                            "estado":$('#estado').val(),
                            "clave":$('#clave').val(),
                            "fecha_fin":$('#fecha_fin').val(),
                            "unid_dest":$('#unid_dest').val(),
                            "fech_dest":$('#fech_dest').val(),
                            "tramitador":$('#tramitador').val(),
                        },
                        success:function (r){
                            $('#modalv_tramites').modal('hide')
                            mostrar($('#n_tramiteb').val());
                            mostrarv_tramites($('#n_tramiteb').val())
                        }
                    });
                }
                return false
            })
            var id;
            $('#formulariocontrol').submit(function (e){
                e.preventDefault()
                if (confirm('Seguro de actualizar?')){
                    $.ajax({
                        url: "/p_cuotas/"+id,
                        type:'PUT',
                        data:{
                            "_token": "{{ csrf_token() }}",
                            "cod_caja":$('#cod_caja').val(),
                            "control":$('#control').val(),
                            // "hora":$('#hora').val(),
                            // "cod_caja":$('#cod_caja').val(),
                            "fec_term":$('#fec_term').val(),
                        },
                        success:function (r){
                            $('#controlModal').modal('hide')
                            mostrar($('#padronb').val());
                        }
                    });
                }
                return false
            })
            $('#formulario').submit(function (e){
                e.preventDefault()
                mostrar($('#padronb').val())
                return false
            })

            $("#contenido").on("click", ".control", function(){
                // console.log($(this).attr('id-n_tramite'));
                // console.log('s')
                id=$(this).attr('id-id')
                $('#padron').val($(this).attr('id-padron')=="null"?'':$(this).attr('id-padron'))
                $('#control').val($(this).attr('id-control')=="null"?'':$(this).attr('id-control'))
                $('#fec_term').val($(this).attr('id-fec_term')=="null"?'':$(this).attr('id-fec_term'))
                $('#imp_pagar').val($(this).attr('id-imp_pagar')=="null"?'':$(this).attr('id-imp_pagar'))
                $('#hora').val($(this).attr('id-hora')=="null"?'':$(this).attr('id-hora'))
                $('#cod_caja').val($(this).attr('id-cod_caja')=="null"?'':$(this).attr('id-cod_caja'))
                $('#fech_pago').val($(this).attr('id-fech_pago')=="null"?'':$(this).attr('id-fech_pago'))
                $('#controlModal').modal('show')
            });

            function mostrarv_tramites(n_tramite){
                $('#contenido').html('');
                $.ajax({
                    url: "/v_tramites",
                    type:'POST',
                    data:{
                        "_token": "{{ csrf_token() }}",
                        n_tramite:n_tramite
                    },
                    success: function (res) {
                        let t='';
                        console.log(res);
                        res.forEach(r=>{
                            t+='<tr>' +
                                '<td>'+r.n_tramite+'</td>'+
                                '<th>'+r.na_ju +'</th>'+
                                '<th>'+r.tipo_tram +'</th>'+
                                '<th>'+r.fecha_ini +'</th>'+
                                '<th>'+r.operador +'</th>'+
                                '<th>'+r.estado +'</th>'+
                                '<th>'+r.clave +'</th>'+
                                '<th>'+r.fecha_fin +'</th>'+
                                '<th>'+r.unid_dest +'</th>'+
                                '<th>'+r.fech_dest +'</th>'+
                                '<th>'+r.tramitador +'</th>'+
                                '<td>' +
                                '<div class="btn btn-group">' +
                                '<button  class=" control btn btn-warning btn-sm" type="button" ' +
                                'id-CodAut="'+r.CodAut+'" '+
                                'id-n_tramite="'+r.n_tramite+'" '+
                                'id-na_ju="'+r.na_ju+'" '+
                                'id-tipo_tram="'+r.tipo_tram+'" '+
                                'id-fecha_ini="'+r.fecha_ini+'" '+
                                'id-operador="'+r.operador+'" '+
                                'id-estado="'+r.estado+'" '+
                                'id-clave="'+r.clave+'" '+
                                'id-fecha_fin="'+r.fecha_fin+'" '+
                                'id-unid_dest="'+r.unid_dest+'" '+
                                'id-fech_dest="'+r.fech_dest+'" '+
                                'id-tramitador="'+r.tramitador+'" '+
                                '><i class="fa fa-edit"></i> Modificar</button>' +
                                '<button  class=" limpiar2 btn btn-danger btn-sm" type="button" id-CodAut="'+r.CodAut+'" ><i class="fa fa-trash"></i> Eliminar</button>' +
                                '</div>'+
                                '</td>' +
                                '</tr>';
                        })
                        $('#contenidov_tramites').html(t);
                    }
                });
            }

            $('#padronb').val('1-420-16123')
            function mostrar(padron){
                $('#contenido').html('');
                $.ajax({
                    url: "/p_cuotas/"+padron,
                    success: function (res) {
                        let t='';
                        // console.log(res);
                        res.forEach(r=>{
                            t+='<tr>' +
                                '<td>'+r.padron+'</td>'+
                                '<td>'+r.control+'</td>'+
                                '<td>'+r.cuota+'</td>'+
                                '<td>'+r.fec_term+'</td>'+
                                '<td>'+r.imp_pagar+'</td>'+
                                '<td>'+r.hora+'</td>'+
                                '<td>'+r.cod_caja+'</td>'+
                                '<td>'+r.fech_pago+'</td>'+
                                '<td>' +
                                '<div class="btn btn-group">' +
                                '<button  class=" control btn btn-warning btn-sm" type="button" ' +
                                'id-id="'+r.id+'" '+
                                'id-padron="'+r.padron+'" '+
                                'id-control="'+r.control+'" '+
                                'id-fec_term="'+r.fec_term+'" '+
                                'id-imp_pagar="'+r.imp_pagar+'" '+
                                'id-hora="'+r.hora+'" '+
                                'id-cod_caja="'+r.cod_caja+'" '+
                                'id-fech_pago="'+r.fech_pago+'" '+
                                '><i class="fa fa-edit"></i> Modificar</button>' +
                                '</div>'+
                                '</td>' +
                                '</tr>';
                        })
                        $('#contenido').html(t);
                    }
                });
            }
        }
    </script>
@endsection
