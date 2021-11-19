@extends('layouts.principal')
@section('content')
    <div class="container">
        <h1 class="bg-info text-white text-center">Anular Industria y comercio</h1>
        <form class="row g-3" id="formulario">
            <div class="col-md-6">
                <label for="padron" class="form-label">Padron</label>
                <input type="text" class="form-control" id="padron" required >
            </div>
            <div class="col-md-6">
                <label for="comun1" class="form-label">Buscar</label> <br>
                <button class="btn btn-primary" type="submit" id='buscarcont'><i class="fa fa-search"></i> Buscar</button>
            </div>
        </form>
        <form method='POST' action='/modificar/' id='mod1'>
            @csrf
            @method('PUT')
            <div class="form-row">
{{--                <div class="form-group col-md-2">--}}
{{--                    <label for="tipodocumento">Tipo documento</label>--}}
{{--                    <select name="tipodocumento" id="tipodocumento" name="tipodocumento" class="form-control" required disabled>--}}
{{--                        <option value="1">Carnet identidad</option>--}}
{{--                        <option value="2">Passaporte</option>--}}
{{--                    </select>--}}
{{--                </div>--}}
{{--                <div class="form-group col-md-2">--}}
{{--                    <label for="ci">Carnet de identidad</label>--}}
{{--                    <input type="text" class="form-control" id="ci" name="ci" placeholder="Carnet de identidad" required >--}}
{{--                </div>--}}
{{--                <div class="form-group col-md-2">--}}
{{--                    <label for="expedido">Expedido</label>--}}
{{--                    <select name="expedido" id="expedido" name="expedido" class="form-control" required >--}}
{{--                        <option value="O">ORURO</option>--}}
{{--                        <option value="L">LA PAZ</option>--}}
{{--                        <option value="P">POTOSI</option>--}}
{{--                        <option value="A">PANDO</option>--}}
{{--                        <option value="B">BENI</option>--}}
{{--                        <option value="T">SANTA CRUZ</option>--}}
{{--                        <option value="J">TARIJA</option>--}}
{{--                        <option value="H">COCHABAMBA</option>--}}
{{--                        <option value="C">SUCRE</option>--}}
{{--                    </select>--}}
{{--                </div>--}}
                <div class="form-group col-md-8">
                    <b for="nombre">Nombre Completo</b>: <br>
                    <label type="text" class="" id="nombre" name="nombre" placeholder="Nombre Completo" ></label>
                </div>
                <div class="form-group col-md-2">
                    <label for="gest">Gestion</label>
                    <input type="text" class="form-control" id="gest" name="gest" placeholder="Gestion" >
                </div>
{{--                <div class="form-group col-md-2">--}}
{{--                    <label for="inmuebles">Imuebles</label>--}}
{{--                    <select name="inmuebles" id="inmuebles" name="inmuebles" class="form-control" required >--}}
{{--                    </select>--}}
{{--                </div>--}}
{{--                <div class="form-group col-md-2">--}}
{{--                    <label for="gestion">Ultima Gestion</label>--}}
{{--                    <input type="text" class="form-control" id="gestion" name="gestion" placeholder="Ultima Gestion" >--}}
{{--                </div>--}}
                <div class="form-group col-md-1">
                    <label for="cambiar">Cambiar</label>
                    <button id="cambio" type="button" class="btn btn-success"><i class="fa fa-edit"></i></button>
                </div>
{{--                <div class="form-group col-md-2">--}}
{{--                    <label for="descrip">Direccion</label>--}}
{{--                    <p id="descrip" name="descrip" >--}}
{{--                </div>--}}
                <div class="form-group col-12">
                    <h3 class="text-center text-white bg-info">Gestiones acumuladas</h3>
                </div>
                <div class="form-group col-12">
                    <table class="table">
                        <thead>
                        <tr class="thead-dark">
                            <th>#</th>
                            <th>Banco</th>

                            <th>Gestion</th>

                            <th>Patente</th>
                            <th>Control</th>
                            <th>Caja</th>
                            <th>Fecha</th>
                            <th>Hora</th>
                            <th>Opciones</th>
                        </tr>
                        </thead>
                        <tbody id="contenido">
                        </tbody>

                    </table>
                </div>



            </div>
{{--            <button type="submit" class="btn btn-success btn-block"  ><i class="fa fa-user-plus"></i>Modificar</button>--}}
        </form>
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
                        <form id="formlariocontrol">
                            <div class="form-group row">
                                <label for="control" class="col-sm-2 col-form-label">Nuevo control</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="control" placeholder="Control">
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
            $('#cambio').click(function (){
                if ($('#gest').val()==undefined || $('#gest').val()==''){
                    alert('debes seleccionar gestion')
                }else{
                    var data={
                        "_token": "{{ csrf_token() }}",
                        "gest":$('#gest').val(),
                        "tipo":tipo,
                        "padron":$('#padron').val(),
                    }
                    // console.log(data);
                    // return false;
                    $.ajax({
                        type:'POST',
                        data:data,
                        url: "/cambiogesind",
                        success:function (re){
                            if (parseInt(re)==1){
                                alert('Se actualizo correctamente');
                            }else{
                                alert('Algo salio mal');
                            }
                            // console.log(re);
                            // $('#gestion').val(re[0].gestion);
                        }
                    });
                }

            });
            $("#contenido").on("click", ".limpiar", function(){
                // console.log($(this).attr('id-gest'));
                if (confirm('Seguro de limpiar?')){
                    // alert('aun no');
                    var data={
                        "_token": "{{ csrf_token() }}",
                        "gest":$(this).attr('id-gest'),
                        "padron":$(this).attr('id-padron'),
                        // "comun":$('#padron').val(),
                    }
                    $.ajax({
                        url: "/limpiarp",
                        type:'POST',
                        data:data,
                        success:function (r){
                            // console.log(r);
                            mostrar($('#padron').val());
                        }
                    });
                }
            });
            var gestion,padron
            $("#contenido").on("click", ".control", function(){
                // console.log($(this).attr('id-gest'));
                $('#control').val($(this).attr('id-control'))
                $('#controlModal').modal('show')
                gestion=$(this).attr('id-gest')
                padron=$(this).attr('id-padron')
            {{--if (confirm('Seguro de limpiar?')){--}}
                {{--    // alert('aun no');--}}
                {{--    var data={--}}
                {{--        "_token": "{{ csrf_token() }}",--}}
                {{--        "gest":$(this).attr('id-gest'),--}}
                {{--        "padron":$(this).attr('id-padron'),--}}
                {{--        // "comun":$('#padron').val(),--}}
                {{--    }--}}
                {{--    $.ajax({--}}
                {{--        url: "/limpiarp",--}}
                {{--        type:'POST',--}}
                {{--        data:data,--}}
                {{--        success:function (r){--}}
                {{--            // console.log(r);--}}
                {{--            mostrar($('#padron').val());--}}
                {{--        }--}}
                {{--    });--}}
                {{--}--}}
            });

            $('#formlariocontrol').submit(function (e){
                e.preventDefault()
                if (confirm('Seguro de actualizar control?')){
                    // alert('aun no');
                    var data={
                        "_token": "{{ csrf_token() }}",
                        "gest":gestion,
                        "padron":padron,
                        "control":$('#control').val(),
                    }
                    $.ajax({
                        url: "/controlp",
                        type:'POST',
                        data:data,
                        success:function (r){
                            // console.log(r);
                            $('#controlModal').modal('hide')
                            mostrar($('#padron').val());
                        }
                    });
                }
                return false
            })
            function mostrar(padron){
                $('#contenido').html('');
                // console.log($('#comun1').val());
                $.ajax({
                    url: "/pagosinmu/"+padron,
                    success: function (res) {
                        let t='';
                        let c=0;
                        console.log(res);
                        res.forEach(re=>{
                            re.forEach(r=>{
                                // console.log(r);
                                c++;
                                t+='<tr>' +
                                    '<td>'+c+'</td>' +
                                    '<td>'+r.banco+'</td>' +

                                    '<td>'+r.gestion+'</td>' +

                                    '<td>'+r.patente+'</td>' +
                                    '<td>'+r.control+'</td>' +
                                    '<td>'+r.cod_caja+'</td>' +
                                    '<td>'+r.fech_pago+'</td>' +
                                    '<td>'+r.hora+'</td>' +
                                    '<td>' +
                                    '<div class="btn btn-group">' +
                                    '<button  class=" limpiar btn btn-danger btn-sm" type="button" id-padron="'+r.padron+'" id-gest="'+r.gestion+'"><i class="fa fa-eye-slash"></i> Anular</button>' +
                                    '<button  class=" control btn btn-warning btn-sm" type="button"  id-control="'+r.control+'"  id-padron="'+r.padron+'" id-gest="'+r.gestion+'"><i class="fa fa-file"></i> Control</button>' +
                                    '</div>'+

                                    '</td>' +
                                    '</tr>';
                            })
                        });
                        $('#contenido').html(t);
                    }
                });
            }
            $('#inmuebles').change(function (){
                $('#gestion').val('');
                $('#descrip').html('');
                mostrar($('#comun1').val(),$(this).val());

                $.ajax({
                    url: "/ultimages/"+$('#inmuebles').val(),
                    success:function (re){
                        // console.log(re);
                        $('#gestion').val(re[0].gestion);
                        $('#descrip').html(re[0].descrip);
                    }
                });
            })
            var tipo;
            // var gest;
            $('#formulario').submit(function(e){
                mostrar($('#padron').val());
                $('#nombre').html('');
                $('#gest').val('');
                $('#contenido').html('');
                $.ajax({
                    url: "/dpadron/"+$('#padron').val(),
                    success:function (re){
                        // console.log(re);
                        $('#nombre').html(re.nombre);
                        tipo=re.tipo;
                        $('#gest').val(re.gest);
                        // tipo=re.gest;
                        // let t='<option value="">Seleccionar</option>';
                        // re.forEach(r=>{
                        //     // console.log(r);
                        //     t+='<option value="'+r.cantidad+'" >'+r.cantidad+'</option>';
                        // })
                        // $('#inmuebles').html(t);
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log(textStatus, errorThrown);
                    }
                });
                // $.ajax({
                //     url: "/pagosinmu/"+$('#padron').val(),
                //     success: function (res) {
                //         let t='';
                //         let c=0;
                //         // console.log(res);
                //         res.forEach(re=>{
                //             re.forEach(r=>{
                //                 console.log(r);
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
                //                     '<button  class=" limpiar btn btn-danger btn-sm" type="button" id-cantidad="'+r.cantidad+'" id-gest="'+r.gest+'"><i class="fa fa-trash"></i> Limpiar</button>' +
                //                     '</td>' +
                //                     '</tr>';
                //             })
                //         });
                //         $('#contenido').html(t);
                //     }
                // });
                // $.ajax({
                //     url: "/datoscontrib/"+$('#comun1').val(),
                //     success: function (response) {
                //         console.log(response);
                //         if(response.length!=0){
                //             var row=response[0];
                //             // console.log(row);
                //             // $('#tipodocumento').val(row['tipodocum']);
                //             $('#ci').val(row['comun']);
                //             // $('#mod1').attr('action',"/modificar/"+row['comun']);
                //             $('#expedido').val(row['expedido']);
                //             // $('#paterno').val(row['paterno']);
                //             // $('#materno').val(row['materno']);
                //             // $('#nombre').val(row['nombre']);
                //             $('#nombre').val(row['paterno'].trim()+' '+row['materno'].trim()+' '+row['nombre'].trim())
                //             $('#telefono').val(row['telefono']);
                //
                //             // $('#cod_ham').val(row['cod_ham']);
                //             // $('#cod_barrio').val(row['cod_barrio']);
                //             // $('#tipocalle').val(row['tipocalle']);
                //             // $('#nombrecall').val(row['nombrecall']);
                //             // $('#numcasa').val(row['numcasa']);
                //             // $('#descrip').val(row['descrip']);
                //             // $('#nacimient').val(row['nacimient'].substr(0,10));
                //         }
                //         else{
                //             $('#tipodocumento').val('');
                //             $('#ci').val('');
                //             $('#mod1').attr('action',"");
                //             $('#expedido').val('');
                //             $('#paterno').val('');
                //             $('#materno').val('');
                //             $('#nombre').val('');
                //             $('#telefono').val('');
                //             $('#cod_ham').val('');
                //             $('#cod_barrio').val('');
                //             $('#tipocalle').val('');
                //             $('#nombrecall').val('');
                //             $('#numcasa').val('');
                //             $('#descrip').val('');
                //             $('#nacimient').val('');}
                //         // You will get response from your PHP page (what you echo or print)
                //     },
                //     error: function(jqXHR, textStatus, errorThrown) {
                //         console.log(textStatus, errorThrown);
                //     }
                // });
                return false;
            })
        }


    </script>
@endsection
