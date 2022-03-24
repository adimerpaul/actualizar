@extends('layouts.principal')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="bg-dark text-white text-center">Vutrat</h1>
            </div>
            <div class="col-12">
                <form class="row g-3" id="formulario">
                    <div class="col-md-3">
                        <label for="n_tramiteb" class="form-label">n_tramite</label>
                        <input type="text" class="form-control" id="n_tramiteb" required>
                    </div>
                    <div class="col-md-3">
                        <label for="" class="form-label">Buscar</label> <br>
                        <button class="btn btn-primary" type="submit" ><i class="fa fa-search"></i> Buscar</button>
                    </div>
                    <div class="col-md-3">
                        <label for="" class="form-label">v_mod_ic</label> <br>
                        <button class="btn btn-cyan" type="button" data-toggle="modal" data-target="#v_mod_ic" ><i class="fa fa-archive"></i> v_mod_ic</button>
                    </div>
                    <div class="col-md-3">
                        <label for="" class="form-label">v_requis</label> <br>
                        <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#v_requis" ><i class="fa fa-file-pdf"></i> v_requis</button>
                    </div>
                </form>
                <div class="modal fade" id="v_requis" tabindex="-1" role="dialog" aria-labelledby="v_requisLabel" aria-hidden="true">
                    <div class=" modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="v_requisLabel">v_requis</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <td>cod_prin</td>
                                        <td>cod_sec</td>
                                        <td>requisito</td>
                                    </tr>
                                    </thead>
                                    <tbody id="contenidov_requis">
                                    </tbody>
                                </table>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
{{--                                <button type="button" class="btn btn-primary">Save changes</button>--}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="v_mod_ic" tabindex="-1" role="dialog" aria-labelledby="v_mod_icLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="v_mod_icLabel">v_mod_ic</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <td>codigo</td>
                                        <td>detalle</td>
                                        <td>req_s1</td>
                                        <td>req_s2</td>
                                        <td>req_s3</td>
                                    </tr>
                                    </thead>
                                    <tbody id="contenidovmod_ic">
                                    </tbody>
                                </table>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
{{--                                <button type="button" class="btn btn-primary">Save changes</button>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <h1 class="bg-dark text-white text-center">tramite_ic</h1>
            </div>
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr class="thead-dark">
                            <th>n_tramite </th>
                            <th>na_ju </th>
                            <th>form </th>
                            <th>padron </th>
                            <th>t_cambio </th>
                            <th>cod_nuevo </th>
                            <th>sec_nuevo </th>
                            <th>pad_nuevo </th>
                            <th>raz_nuevo </th>
                            <th>pat_nuevo </th>
                            <th>mat_nuevo </th>
                            <th>nom_nuevo </th>
                            <th>ape_nuevo </th>
                            <th>ci_nuevo </th>
                            <th>dom_nuevo </th>
                            <th>sup_nuevo </th>
                            <th>dir_nuevo </th>
                            <th>zon_nuevo </th>
                            <th>form22 </th>
                            <th>comprob </th>
                            <th>t_requi </th>
                            <th>req_1 </th>
                            <th>req_2 </th>
                            <th>req_3 </th>
                            <th>req_4 </th>
                            <th>req_5 </th>
                            <th>req_6 </th>
                            <th>req_7 </th>
                            <th>req_8 </th>
                            <th>c_me_amb </th>
                            <th>observacio </th>
                            <th>form_pmc </th>
                            <th>n_res_tec </th>
                            <th>nit_nuevo </th>
                            <th>opciones</th>
                        </tr>
                        </thead>
                        <tbody id="contenido">
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-12">
                <h1 class="bg-dark text-white text-center">v_tramites</h1>
            </div>
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr class="thead-dark">
                            <th>n_tramite </th>
                            <th>na_ju </th>
                            <th>tipo_tram </th>
                            <th>fecha_ini </th>
                            <th>operador </th>
                            <th>estado </th>
                            <th>clave </th>
                            <th>fecha_fin </th>
                            <th>unid_dest </th>
                            <th>fech_dest </th>
                            <th>tramitador </th>
                            <th>opciones </th>
                        </tr>
                        </thead>
                        <tbody id="contenidov_tramites">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
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
                            <div class="form-group row">
                                <label for="n_tramite" class="col-sm-2 col-form-label">n_tramite</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="n_tramite" placeholder1="n_tramite" name="n_tramite">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="na_ju" class="col-sm-2 col-form-label">na_ju</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="na_ju" placeholder1="na_ju" name="na_ju">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="form" class="col-sm-2 col-form-label">form</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="form" placeholder1="form" name="form">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="padron" class="col-sm-2 col-form-label">padron</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="padron" placeholder1="padron" name="padron">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="t_cambio" class="col-sm-2 col-form-label">t_cambio</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="t_cambio" placeholder1="t_cambio" name="t_cambio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="cod_nuevo" class="col-sm-2 col-form-label">cod_nuevo</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="cod_nuevo" placeholder1="cod_nuevo" name="cod_nuevo">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="sec_nuevo" class="col-sm-2 col-form-label">sec_nuevo</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="sec_nuevo" placeholder1="sec_nuevo" name="sec_nuevo">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="pad_nuevo" class="col-sm-2 col-form-label">pad_nuevo</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="pad_nuevo" placeholder1="pad_nuevo" name="pad_nuevo">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="raz_nuevo" class="col-sm-2 col-form-label">raz_nuevo</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="raz_nuevo" placeholder1="raz_nuevo" name="raz_nuevo">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="pat_nuevo" class="col-sm-2 col-form-label">pat_nuevo</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="pat_nuevo" placeholder1="pat_nuevo" name="pat_nuevo">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="mat_nuevo" class="col-sm-2 col-form-label">mat_nuevo</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="mat_nuevo" placeholder1="mat_nuevo" name="mat_nuevo">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nom_nuevo" class="col-sm-2 col-form-label">nom_nuevo</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nom_nuevo" placeholder1="nom_nuevo" name="nom_nuevo">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="ape_nuevo" class="col-sm-2 col-form-label">ape_nuevo</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="ape_nuevo" placeholder1="ape_nuevo" name="ape_nuevo">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="ci_nuevo" class="col-sm-2 col-form-label">ci_nuevo</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="ci_nuevo" placeholder1="ci_nuevo" name="ci_nuevo">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="dom_nuevo" class="col-sm-2 col-form-label">dom_nuevo</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="dom_nuevo" placeholder1="dom_nuevo" name="dom_nuevo">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="sup_nuevo" class="col-sm-2 col-form-label">sup_nuevo</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="sup_nuevo" placeholder1="sup_nuevo" name="sup_nuevo">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="dir_nuevo" class="col-sm-2 col-form-label">dir_nuevo</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="dir_nuevo" placeholder1="dir_nuevo" name="dir_nuevo">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="zon_nuevo" class="col-sm-2 col-form-label">zon_nuevo</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="zon_nuevo" placeholder1="zon_nuevo" name="zon_nuevo">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="form22" class="col-sm-2 col-form-label">form22</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="form22" placeholder1="form22" name="form22">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="comprob" class="col-sm-2 col-form-label">comprob</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="comprob" placeholder1="comprob" name="comprob">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="t_requi" class="col-sm-2 col-form-label">t_requi</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="t_requi" placeholder1="t_requi" name="t_requi">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="req_1" class="col-sm-2 col-form-label">req_1</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="req_1" placeholder1="req_1" name="req_1">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="req_2" class="col-sm-2 col-form-label">req_2</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="req_2" placeholder1="req_2" name="req_2">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="req_3" class="col-sm-2 col-form-label">req_3</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="req_3" placeholder1="req_3" name="req_3">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="req_4" class="col-sm-2 col-form-label">req_4</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="req_4" placeholder1="req_4" name="req_4">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="req_5" class="col-sm-2 col-form-label">req_5</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="req_5" placeholder1="req_5" name="req_5">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="req_6" class="col-sm-2 col-form-label">req_6</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="req_6" placeholder1="req_6" name="req_6">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="req_7" class="col-sm-2 col-form-label">req_7</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="req_7" placeholder1="req_7" name="req_7">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="req_8" class="col-sm-2 col-form-label">req_8</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="req_8" placeholder1="req_8" name="req_8">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="c_me_amb" class="col-sm-2 col-form-label">c_me_amb</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="c_me_amb" placeholder1="c_me_amb" name="c_me_amb">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="observacio" class="col-sm-2 col-form-label">observacio</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="observacio" placeholder1="observacio" name="observacio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="form_pmc" class="col-sm-2 col-form-label">form_pmc</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="form_pmc" placeholder1="form_pmc" name="form_pmc">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="n_res_tec" class="col-sm-2 col-form-label">n_res_tec</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="n_res_tec" placeholder1="n_res_tec" name="n_res_tec">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nit_nuevo" class="col-sm-2 col-form-label">nit_nuevo</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nit_nuevo" placeholder1="nit_nuevo" name="nit_nuevo">
                                </div>
                            </div>



                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-trash"></i> Cerrar</button>
                                <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Actualizar</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <div class="modal fade" id="modalv_tramites" tabindex="-1" role="dialog" aria-labelledby="modalv_tramitesLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalv_tramitesLabel">Actualizar control</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="formulariocontrolv_tramites">
                            <div class="form-group row">
                                <label for="n_tramite2" class="col-sm-2 col-form-label">n_tramite2</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="n_tramite2" name="n_tramite2">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="na_ju2" class="col-sm-2 col-form-label">na_ju2</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="na_ju2"  name="na_ju2">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tipo_tram" class="col-sm-2 col-form-label">tipo_tram</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="tipo_tram" name="tipo_tram">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fecha_ini" class="col-sm-2 col-form-label">fecha_ini</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="fecha_ini" name="fecha_ini">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="operador" class="col-sm-2 col-form-label">operador</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="operador" name="operador">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="estado" class="col-sm-2 col-form-label">estado</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="estado" name="estado">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="clave" class="col-sm-2 col-form-label">clave</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="clave" name="clave">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fecha_fin" class="col-sm-2 col-form-label">fecha_fin</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="fecha_fin" name="fecha_fin">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="unid_dest" class="col-sm-2 col-form-label">unid_dest</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="unid_dest" name="unid_dest">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fech_dest" class="col-sm-2 col-form-label">fech_dest</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="fech_dest" name="fech_dest">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tramitador" class="col-sm-2 col-form-label">tramitador</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="tramitador" name="tramitador">
                                </div>
                            </div>

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

            $('#formulariocontrol').submit(function (e){
                e.preventDefault()
                if (confirm('Seguro de actualizar?')){
                    $.ajax({
                        url: "/v_tram_ic/"+CodAut,
                        type:'PUT',
                        data:{
                            "_token": "{{ csrf_token() }}",
                            "n_tramite":$('#n_tramite').val(),
                            "na_ju":$('#na_ju').val(),
                            "form":$('#form').val(),
                            "padron":$('#padron').val(),
                            "t_cambio":$('#t_cambio').val(),
                            "cod_nuevo":$('#cod_nuevo').val(),
                            "sec_nuevo":$('#sec_nuevo').val(),
                            "pad_nuevo":$('#pad_nuevo').val(),
                            "raz_nuevo":$('#raz_nuevo').val(),
                            "pat_nuevo":$('#pat_nuevo').val(),
                            "mat_nuevo":$('#mat_nuevo').val(),
                            "nom_nuevo":$('#nom_nuevo').val(),
                            "ape_nuevo":$('#ape_nuevo').val(),
                            "ci_nuevo":$('#ci_nuevo').val(),
                            "dom_nuevo":$('#dom_nuevo').val(),
                            "sup_nuevo":$('#sup_nuevo').val(),
                            "dir_nuevo":$('#dir_nuevo').val(),
                            "zon_nuevo":$('#zon_nuevo').val(),
                            "form22":$('#form22').val(),
                            "comprob":$('#comprob').val(),
                            "t_requi":$('#t_requi').val(),
                            "req_1":$('#req_1').val(),
                            "req_2":$('#req_2').val(),
                            "req_3":$('#req_3').val(),
                            "req_4":$('#req_4').val(),
                            "req_5":$('#req_5').val(),
                            "req_6":$('#req_6').val(),
                            "req_7":$('#req_7').val(),
                            "req_8":$('#req_8').val(),
                            "c_me_amb":$('#c_me_amb').val(),
                            "observacio":$('#observacio').val(),
                            "form_pmc":$('#form_pmc').val(),
                            "n_res_tec":$('#n_res_tec').val(),
                            "nit_nuevo":$('#nit_nuevo').val(),
                            "opciones":$('#opciones').val(),
                        },
                        success:function (r){
                            $('#controlModal').modal('hide')
                            mostrar($('#n_tramiteb').val());
                            mostrarv_tramites($('#n_tramiteb').val())
                        }
                    });
                }
                return false
            })
            $('#formulario').submit(function (e){
                e.preventDefault()
                mostrar($('#n_tramiteb').val())
                mostrarv_tramites($('#n_tramiteb').val())
                return false
            })
            var CodAut=''
            $("#contenidov_tramites").on("click", ".control2", function(){
                console.log($(this).attr('id-tipo_tram'))
                CodAut=$(this).attr('id-CodAut')
                $('#n_tramite2').val($(this).attr('id-n_tramite')=="null"?'':$(this).attr('id-n_tramite'))
                $('#na_ju2').val($(this).attr('id-na_ju')=="null"?'':$(this).attr('id-na_ju'))
                $('#tipo_tram').val($(this).attr('id-tipo_tram')=="null"?'':$(this).attr('id-tipo_tram'))
                $('#fecha_ini').val($(this).attr('id-fecha_ini')=="null"?'':$(this).attr('id-fecha_ini'))
                $('#operador').val($(this).attr('id-operador')=="null"?'':$(this).attr('id-operador'))
                $('#estado').val($(this).attr('id-estado')=="null"?'':$(this).attr('id-estado'))
                $('#clave').val($(this).attr('id-clave')=="null"?'':$(this).attr('id-clave'))
                $('#fecha_fin').val($(this).attr('id-fecha_fin')=="null"?'':$(this).attr('id-fecha_fin'))
                $('#unid_dest').val($(this).attr('id-unid_dest')=="null"?'':$(this).attr('id-unid_dest'))
                $('#fech_dest').val($(this).attr('id-fech_dest')=="null"?'':$(this).attr('id-fech_dest'))
                $('#tramitador').val($(this).attr('id-tramitador')=="null"?'':$(this).attr('id-tramitador'))
                // console.log($(this).attr('id-n_res_tec'))
                $('#modalv_tramites').modal('show')
            });
            $("#contenido").on("click", ".control", function(){
                // console.log($(this).attr('id-n_tramite'));
                CodAut=$(this).attr('id-CodAut')
                $('#n_tramite').val($(this).attr('id-n_tramite')=="null"?'':$(this).attr('id-n_tramite'))
                $('#na_ju').val($(this).attr('id-na_ju')=="null"?'':$(this).attr('id-na_ju'))
                $('#form').val($(this).attr('id-form')=="null"?'':$(this).attr('id-form'))
                $('#padron').val($(this).attr('id-padron')=="null"?'':$(this).attr('id-padron'))
                $('#t_cambio').val($(this).attr('id-t_cambio')=="null"?'':$(this).attr('id-t_cambio'))
                $('#cod_nuevo').val($(this).attr('id-cod_nuevo')=="null"?'':$(this).attr('id-cod_nuevo'))
                $('#sec_nuevo').val($(this).attr('id-sec_nuevo')=="null"?'':$(this).attr('id-sec_nuevo'))
                $('#pad_nuevo').val($(this).attr('id-pad_nuevo')=="null"?'':$(this).attr('id-pad_nuevo'))
                $('#raz_nuevo').val($(this).attr('id-raz_nuevo')=="null"?'':$(this).attr('id-raz_nuevo'))
                $('#pat_nuevo').val($(this).attr('id-pat_nuevo')=="null"?'':$(this).attr('id-pat_nuevo'))
                $('#mat_nuevo').val($(this).attr('id-mat_nuevo')=="null"?'':$(this).attr('id-mat_nuevo'))
                $('#nom_nuevo').val($(this).attr('id-nom_nuevo')=="null"?'':$(this).attr('id-nom_nuevo'))
                $('#ape_nuevo').val($(this).attr('id-ape_nuevo')=="null"?'':$(this).attr('id-ape_nuevo'))
                $('#ci_nuevo').val($(this).attr('id-ci_nuevo')=="null"?'':$(this).attr('id-ci_nuevo'))
                $('#dom_nuevo').val($(this).attr('id-dom_nuevo')=="null"?'':$(this).attr('id-dom_nuevo'))
                $('#sup_nuevo').val($(this).attr('id-sup_nuevo')=="null"?'':$(this).attr('id-sup_nuevo'))
                $('#dir_nuevo').val($(this).attr('id-dir_nuevo')=="null"?'':$(this).attr('id-dir_nuevo'))
                $('#zon_nuevo').val($(this).attr('id-zon_nuevo')=="null"?'':$(this).attr('id-zon_nuevo'))
                $('#form22').val($(this).attr('id-form22')=="null"?'':$(this).attr('id-form22'))
                $('#comprob').val($(this).attr('id-comprob')=="null"?'':$(this).attr('id-comprob'))
                $('#t_requi').val($(this).attr('id-t_requi')=="null"?'':$(this).attr('id-t_requi'))
                $('#req_1').val($(this).attr('id-req_1')=="null"?'':$(this).attr('id-req_1'))
                $('#req_2').val($(this).attr('id-req_2')=="null"?'':$(this).attr('id-req_2'))
                $('#req_3').val($(this).attr('id-req_3')=="null"?'':$(this).attr('id-req_3'))
                $('#req_4').val($(this).attr('id-req_4')=="null"?'':$(this).attr('id-req_4'))
                $('#req_5').val($(this).attr('id-req_5')=="null"?'':$(this).attr('id-req_5'))
                $('#req_6').val($(this).attr('id-req_6')=="null"?'':$(this).attr('id-req_6'))
                $('#req_7').val($(this).attr('id-req_7')=="null"?'':$(this).attr('id-req_7'))
                $('#req_8').val($(this).attr('id-req_8')=="null"?'':$(this).attr('id-req_8'))
                $('#c_me_amb').val($(this).attr('id-c_me_amb')=="null"?'':$(this).attr('id-c_me_amb'))
                $('#observacio').val($(this).attr('id-observacio')=="null"?'':$(this).attr('id-observacio'))
                $('#form_pmc').val($(this).attr('id-form_pmc')=="null"?'':$(this).attr('id-form_pmc'))
                $('#n_res_tec').val($(this).attr('id-n_res_tec')=="null"?'':$(this).attr('id-n_res_tec'))
                $('#nit_nuevo').val($(this).attr('id-nit_nuevo')=="null"?'':$(this).attr('id-nit_nuevo'))
                // console.log($(this).attr('id-n_res_tec'))
                $('#controlModal').modal('show')
            });
            $("#contenido").on("click", ".limpiar", function(){
                // console.log($(this).attr('id-n_tramite'));
                CodAut=$(this).attr('id-CodAut')
                if (confirm('Seguro de eliminar?')){
                    $.ajax({
                        url: "/v_tram_ic/"+CodAut,
                        type:'DELETE',
                        data:{
                            "_token": "{{ csrf_token() }}",
                        },
                        success:function (r){
                            mostrar($('#n_tramiteb').val());
                            mostrarv_tramites($('#n_tramiteb').val())
                        }
                    });
                }
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
                                '<button  class=" control2 btn btn-warning btn-sm" type="button" ' +
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
            function mostrar(n_tramite){
                $('#contenido').html('');
                $.ajax({
                    url: "/v_tram_ic",
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
                                '<td>'+r.na_ju+'</td>'+
                                '<td>'+r.form+'</td>'+
                                '<td>'+r.padron+'</td>'+
                                '<td>'+r.t_cambio+'</td>'+
                                '<td>'+r.cod_nuevo+'</td>'+
                                '<td>'+r.sec_nuevo+'</td>'+
                                '<td>'+r.pad_nuevo+'</td>'+
                                '<td>'+r.raz_nuevo+'</td>'+
                                '<td>'+r.pat_nuevo+'</td>'+
                                '<td>'+r.mat_nuevo+'</td>'+
                                '<td>'+r.nom_nuevo+'</td>'+
                                '<td>'+r.ape_nuevo+'</td>'+
                                '<td>'+r.ci_nuevo+'</td>'+
                                '<td>'+r.dom_nuevo+'</td>'+
                                '<td>'+r.sup_nuevo+'</td>'+
                                '<td>'+r.dir_nuevo+'</td>'+
                                '<td>'+r.zon_nuevo+'</td>'+
                                '<td>'+r.form22+'</td>'+
                                '<td>'+r.comprob+'</td>'+
                                '<td>'+r.t_requi+'</td>'+
                                '<td>'+r.req_1+'</td>'+
                                '<td>'+r.req_2+'</td>'+
                                '<td>'+r.req_3+'</td>'+
                                '<td>'+r.req_4+'</td>'+
                                '<td>'+r.req_5+'</td>'+
                                '<td>'+r.req_6+'</td>'+
                                '<td>'+r.req_7+'</td>'+
                                '<td>'+r.req_8+'</td>'+
                                '<td>'+r.c_me_amb+'</td>'+
                                '<td>'+r.observacio+'</td>'+
                                '<td>'+r.form_pmc+'</td>'+
                                '<td>'+r.n_res_tec+'</td>'+
                                '<td>'+r.nit_nuevo+'</td>'+
                                '<td>' +
                                '<div class="btn btn-group">' +
                                '<button  class=" control btn btn-warning btn-sm" type="button" ' +
                                'id-CodAut="'+r.CodAut+'" '+
                                'id-n_tramite="'+r.n_tramite+'" '+
                                'id-na_ju="'+r.na_ju+'" '+
                                'id-form="'+r.form+'" '+
                                'id-padron="'+r.padron+'" '+
                                'id-t_cambio="'+r.t_cambio+'" '+
                                'id-cod_nuevo="'+r.cod_nuevo+'" '+
                                'id-sec_nuevo="'+r.sec_nuevo+'" '+
                                'id-pad_nuevo="'+r.pad_nuevo+'" '+
                                'id-raz_nuevo="'+r.raz_nuevo+'" '+
                                'id-pat_nuevo="'+r.pat_nuevo+'" '+
                                'id-mat_nuevo="'+r.mat_nuevo+'" '+
                                'id-nom_nuevo="'+r.nom_nuevo+'" '+
                                'id-ape_nuevo="'+r.ape_nuevo+'" '+
                                'id-ci_nuevo="'+r.ci_nuevo+'" '+
                                'id-dom_nuevo="'+r.dom_nuevo+'" '+
                                'id-sup_nuevo="'+r.sup_nuevo+'" '+
                                'id-dir_nuevo="'+r.dir_nuevo+'" '+
                                'id-zon_nuevo="'+r.zon_nuevo+'" '+
                                'id-form22="'+r.form22+'" '+
                                'id-comprob="'+r.comprob+'" '+
                                'id-t_requi="'+r.t_requi+'" '+
                                'id-req_1="'+r.req_1+'" '+
                                'id-req_2="'+r.req_2+'" '+
                                'id-req_3="'+r.req_3+'" '+
                                'id-req_4="'+r.req_4+'" '+
                                'id-req_5="'+r.req_5+'" '+
                                'id-req_6="'+r.req_6+'" '+
                                'id-req_7="'+r.req_7+'" '+
                                'id-req_8="'+r.req_8+'" '+
                                'id-c_me_amb="'+r.c_me_amb+'" '+
                                'id-observacio="'+r.observacio+'" '+
                                'id-form_pmc="'+r.form_pmc+'" '+
                                'id-n_res_tec="'+r.n_res_tec+'" '+
                                'id-nit_nuevo="'+r.nit_nuevo+'" '+
                                '><i class="fa fa-edit"></i> Modificar</button>' +
                                '<button  class=" limpiar btn btn-danger btn-sm" type="button" id-CodAut="'+r.CodAut+'" ><i class="fa fa-trash"></i> Eliminar</button>' +
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
