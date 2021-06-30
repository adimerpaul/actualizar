@extends('layouts.principal')
@section('content')
    <div class="container">
        <h1 class="bg-info text-center text-white">Actividades Economicas-Natural</h1>
        <form class="row g-3" id="formulario">
            <div class="col-md-4">
                <label for="padron" class="form-label">Padron</label>
                <input type="text" class="form-control" id="padron" required placeholder="Padron">
            </div>
            <div class="col-md-2">
                <label for="comun1" class="form-label">Buscar</label> <br>
                <button class="btn btn-primary" type="submit" id='buscarcont'><i class="fa fa-search"></i> Buscar</button>
            </div>
        </form>
        <form method='POST' id='mod1'>
            @csrf
            @method('PUT')
            <div class="form-row row">
                <div class="form-group col-md-2">
                    <label for="paterno">Paterno</label>
                    <input type="text" class="form-control" id="paterno" name="paterno" placeholder="Paterno" >
                </div>
                <div class="form-group col-md-2">
                    <label for="materno">Materno</label>
                    <input type="text" class="form-control" id="materno" name="materno" placeholder="Materno" >
                </div>
                <div class="form-group col-md-2">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" >
                </div>
                <div class="form-group col-md-2">
                    <label for="cedula">Cedula</label>
                    <input type="text" class="form-control" id="cedula" name="cedula" placeholder="Cedula" >
                </div>
                <div class="form-group col-md-2">
                    <label for="ntelefono">Telefono</label>
                    <input type="text" class="form-control" id="ntelefono" name="ntelefono" placeholder="Telefono" >
                </div>
                <div class="form-group col-md-2">
                    <label for="ndireccion">Direccion</label>
                    <input type="text" class="form-control" id="ndireccion" name="ndireccion" placeholder="Direccion" >
                </div>
                <div class="form-group col-md-2">
                    <label for="nacionalid">nacionalid</label>
                    <input type="text" class="form-control" id="nacionalid" name="nacionalid" placeholder="nacionalid" >
                </div>
                <div class="form-group col-md-2">
                    <label for="nruc">Nruc</label>
                    <input type="text" class="form-control" id="nruc" name="nruc" placeholder="Nruc" >
                </div>
                <div class="form-group col-md-2">
                    <label for="nactdescri">nactdescri</label>
                    <input type="text" class="form-control" id="nactdescri" name="nactdescri" placeholder="nactdescri" >
                </div>
                <div class="form-group col-md-2">
                    <label for="nsector">Nsector</label>
                    <input type="text" class="form-control" id="nsector" name="nsector" placeholder="Nsector" >
                </div>
                <div class="form-group col-md-2">
                    <label for="nfechainic">nfechainic</label>
                    <input type="text" class="form-control" id="nfechainic" name="nfechainic" placeholder="nfechainic" >
                </div>
                <div class="form-group col-md-2">
                    <label for="apeesposo">Ap. esposo</label>
                    <input type="text" class="form-control" id="apeesposo" name="apeesposo" placeholder="Ap. esposo" >
                </div>
                <div class="form-group col-md-2">
                    <label for="nzona">nzona</label>
                    <input type="text" class="form-control" id="nzona" name="nzona" placeholder="nzona" >
                </div>
                <div class="form-group col-md-2">
                    <label for="nmts2">MTS 2</label>
                    <input type="text" class="form-control" id="nmts2" name="nmts2" placeholder="MTS 2" >
                </div>
                <div class="form-group col-md-2">
                    <label for="ndiract">Direccion Actual</label>
                    <input type="text" class="form-control" id="ndiract" name="ndiract" placeholder="Direccion Actual" >
                </div>
                <div class="form-group col-md-2">
                    <label for="formcaja">formcaja</label>
                    <input type="text" class="form-control" id="formcaja" name="formcaja" placeholder="formcaja" >
                </div>
                <div class="form-group col-md-2">
                    <label for="gest">Gestion</label>
                    <input type="text" class="form-control" id="gest" name="gest" placeholder="Gestion" >
                </div>
                <div class="form-group col-md-2">
                    <label for="form22">form22</label>
                    <input type="text" class="form-control" id="form22" name="form22" placeholder="form22" >
                </div>
                <div class="form-group col-md-2">
                    <label for="oper">oper</label>
                    <input type="text" class="form-control" id="oper" name="oper" placeholder="oper" >
                </div>
                <div class="form-group col-md-2">
                    <label for="fed">fed</label>
                    <input type="text" class="form-control" id="fed" name="fed" placeholder="fed" >
                </div>
                <div class="form-group col-md-2">
                    <label for="nufed">nufed</label>
                    <input type="text" class="form-control" id="nufed" name="nufed" placeholder="nufed" >
                </div>
                <div class="form-group col-md-2">
                    <label for="adeuda">adeuda</label>
                    <input type="text" class="form-control" id="adeuda" name="adeuda" placeholder="adeuda" >
                </div>
                <div class="form-group col-md-2">
                    <label for="bandera">bandera</label>
                    <input type="text" class="form-control" id="bandera" name="bandera" placeholder="bandera" >
                </div>
                <div class="form-group col-md-2">
                    <label for="asociado">asociado</label>
                    <input type="text" class="form-control" id="asociado" name="asociado" placeholder="asociado" >
                </div>
                <div class="form-group col-md-2">
                    <label for="nro_asoc">nro_asoc</label>
                    <input type="text" class="form-control" id="nro_asoc" name="nro_asoc" placeholder="nro_asoc" >
                </div>
                <div class="form-group col-md-2">
                    <label for="n_tug">n_tug</label>
                    <input type="text" class="form-control" id="n_tug" name="n_tug" placeholder="n_tug" >
                </div>
                <div class="form-group col-md-2">
                    <label for="n_preim">n_preim</label>
                    <input type="text" class="form-control" id="n_preim" name="n_preim" placeholder="n_preim" >
                </div>
                <div class="form-group col-md-2">
                    <label for="f_regi">f_regi</label>
                    <input type="text" class="form-control" id="f_regi" name="f_regi" placeholder="f_regi" >
                </div>
                <div class="form-group col-md-2">
                    <label for="bloqueo">bloqueo</label>
                    <input type="text" class="form-control" id="bloqueo" name="bloqueo" placeholder="bloqueo" >
                </div>
                <div class="form-group col-md-2">
                    <label for="l07">l07</label>
                    <input type="text" class="form-control" id="l07" name="l07" placeholder="l07" >
                </div>
                <div class="form-group col-md-2">
                    <label for="l07nmts2">l07nmts2</label>
                    <input type="text" class="form-control" id="l07nmts2" name="l07nmts2" placeholder="l07nmts2" >
                </div>
                <div class="form-group col-md-2">
                    <label for="l259">l259</label>
                    <input type="text" class="form-control" id="l259" name="l259" placeholder="l259" >
                </div>
                <div class="form-group col-md-2">
                    <label for="categtoria">categtoria</label>
                    <input type="text" class="form-control" id="categtoria" name="categtoria" placeholder="categtoria" >
                </div>
                <div class="form-group col-md-2">
                    <label for="horario">horario</label>
                    <input type="text" class="form-control" id="horario" name="horario" placeholder="horario" >
                </div>
                <div class="form-group col-md-2">
                    <label for="lfini">lfini</label>
                    <input type="text" class="form-control" id="lfini" name="lfini" placeholder="lfini" >
                </div>
                <div class="form-group col-md-2">
                    <label for="l080">l080</label>
                    <input type="text" class="form-control" id="l080" name="l080" placeholder="l080" >
                </div>
                <div class="form-group col-md-2">
                    <label for="hab">hab</label>
                    <input type="text" class="form-control" id="hab" name="hab" placeholder="hab" >
                </div>
{{--                <style>--}}
{{--                    pre {--}}
{{--                        height: auto;--}}
{{--                        max-height: 200px;--}}
{{--                        overflow: auto;--}}
{{--                        background-color: #eeeeee;--}}
{{--                        word-break: normal !important;--}}
{{--                        word-wrap: normal !important;--}}
{{--                        white-space: pre !important;--}}
{{--                    }--}}
{{--                </style>--}}
{{--                <div class="form-group col-md-4">--}}
{{--                    <pre id="pre" >--}}

{{--                    </pre>--}}
{{--                </div>--}}
                <div class="form-group col-md-2">
                    <label for="">Cambiar</label>
                    <button  type="submit" class="btn btn-warning btn-block"><i class="fa fa-edit"></i> Actualizar</button>
                </div>
{{--                <div class="form-group col-md-2">--}}
{{--                    <label for="inmuebles">Imuebles</label>--}}
{{--                    <select name="inmuebles" id="inmuebles" name="inmuebles" class="form-control" required >--}}
{{--                    </select>--}}
{{--                </div>--}}
{{--                <div class="form-group col-md-2">--}}
{{--                    <label for="gestion" class="bg-warning">Ultima Gestion</label>--}}
{{--                    <input type="text" class="form-control" id="gestion" name="gestion" placeholder="Ultima Gestion" >--}}
{{--                </div>--}}

{{--                <div class="form-group col-md-2">--}}
{{--                    <label for="gestion" class="bg-warning">Superficie</label>--}}
{{--                    <input type="text" class="form-control" id="superficie" name="superficie" placeholder="Superficie" >--}}
{{--                </div>--}}
{{--                <div class="form-group col-md-2">--}}
{{--                    <label for="gestion" class="bg-warning">Supe_const</label>--}}
{{--                    <input type="text" class="form-control" id="sup_const" name="sup_const" placeholder="Superficie Construcion" >--}}
{{--                </div>--}}
{{--                <div class="form-group col-md-1">--}}
{{--                    <label for="cambiar">Cambiar</label>--}}
{{--                    <button id="cambio" type="button" class="btn btn-warning"><i class="fa fa-edit"></i> Actualizar</button>--}}
{{--                </div>--}}

{{--                <div class="form-group col-md-4">--}}
{{--                    <label for="docex" class="badge-warning">Doc ex</label>--}}
{{--                    <input type="text" class="form-control" id="docex" name="docex" placeholder="Doc ex" >--}}
{{--                </div>--}}
{{--                <div class="form-group col-md-2">--}}
{{--                    <label for="cantidadactualizar">Cant. Sup_con</label>--}}
{{--                    <input type="number" class="form-control" id="cantidadactualizar" name="Ayuda" placeholder="Cantidad" >--}}
{{--                </div>--}}
{{--                <div class="form-group col-md-2">--}}
{{--                    <label for="resta">Resta</label>--}}
{{--                    <input type="number" class="form-control" id="resta" name="Ayuda" placeholder="Resta" >--}}
{{--                </div>--}}
{{--                <div class="form-group col-12">--}}
{{--                    <h2>Gestiones acumuladas</h2>--}}
{{--                </div>--}}
{{--                <div class="form-group col-12">--}}
{{--                    <table class="table">--}}
{{--                        <thead>--}}
{{--                        <tr class="thead-light">--}}
{{--                            <th>#</th>--}}
{{--                            <th>Pagado</th>--}}
{{--                            <th>Gestion</th>--}}
{{--                            <th>Codigo</th>--}}
{{--                            <th>Cantidad</th>--}}
{{--                            <th>Pagando en</th>--}}
{{--                            <th>Hora</th>--}}
{{--                            <th>Cajero</th>--}}
{{--                            <th>Opciones</th>--}}
{{--                        </tr>--}}
{{--                        </thead>--}}
{{--                        <tbody id="contenido">--}}
{{--                        </tbody>--}}
{{--                    </table>--}}
{{--                </div>--}}
            </div>
            {{--            <button type="submit" class="btn btn-success btn-block"  ><i class="fa fa-user-plus"></i>Modificar</button>--}}
        </form>

    </div>
    <script>
        window.onload=function (){
            $('#cantidadactualizar').keyup(function (){
                let resta=parseFloat($(this).val())-parseFloat($('#sup_const').val());
                // console.log(resta)
                $('#resta').val(resta);
            });
            $('#cambiar').click(function (e){
                if (confirm('Seguro de cambiar bandera y control?')){
                    if ($('#inmuebles').val()==undefined || $('#inmuebles').val()==''){
                        alert('debes seleccionar inmuebles')
                        return false;
                    }else{
                        var data={
                            "_token": "{{ csrf_token() }}",
                            "cantidad":$('#inmuebles').val(),
                            "comun":$('#comun1').val(),
                            "bandera":$('#bandera').val(),
                            "control":$('#control').val(),
                            "var1":$('#var1').val(),
                        }
                        $.ajax({
                            url: "/bandera",
                            type:'POST',
                            data:data,
                            success:function (r){
                                alert('Modificado correctamente!');
                            }
                        });
                    }
                }
            });
            $('#cambio').click(function (){
                if ($('#inmuebles').val()==undefined || $('#inmuebles').val()==''){
                    alert('debes seleccionar inmuebles')
                    return false;
                }else{
                    var data={
                        "_token": "{{ csrf_token() }}",
                        "cantidad":$('#inmuebles').val(),
                        "comun":$('#comun1').val(),
                        "gestion":$('#gestion').val(),
                        "superficie":$('#superficie').val(),
                        "sup_const":$('#sup_const').val(),
                        "docex":$('#docex').val(),
                    }
                    $.ajax({
                        url: "/cambiorec",
                        type:'POST',
                        data:data,
                        success:function (r){
                            alert('Modificado correctamente!');
                        }
                    });
                }
            });
            $("#contenido").on("click", ".limpiar", function(){
                // console.log($(this).attr('id-gest'));
                if (confirm('Seguro de rectificar?')){
                    // console.log('a');
                    var data={
                        "_token": "{{ csrf_token() }}",
                        "gest":$(this).attr('id-gest'),
                        "cantidad":$(this).attr('id-cantidad'),
                        "comun":$(this).attr('id-comun'),

                    }
                    $.ajax({
                        url: "/actualizarrec",
                        type:'POST',
                        data:data,
                        success:function (r){
                            console.log(r);
                            mostrar($('#comun1').val(),$('#inmuebles').val());
                        }
                    });
                }
            });
            function mostrar(comun,cantidad){
                $('#contenido').html('');
                // console.log($('#comun1').val());
                $.ajax({
                    url: "/gestiones/"+comun+'/'+cantidad,
                    success: function (res) {
                        let t='';
                        let c=0;
                        // console.log(res);
                        res.forEach(re=>{
                            re.forEach(r=>{
                                // console.log(r);
                                let cantidad;
                                if (r.comun.includes('R')){
                                    // console.log(r.cantidad);
                                    cantidad='<span class="badge badge-danger">'+r.cantidad+'</span>';
                                }else{
                                    cantidad=r.cantidad;
                                }

                                c++;
                                t+='<tr>' +
                                    '<td>'+c+'</td>' +
                                    '<td>'+r.Pagado+'</td>' +
                                    '<td>'+r.gest+'</td>' +
                                    '<td>'+r.codigo+'</td>' +
                                    '<td>'+cantidad+'</td>' +
                                    '<td>'+r.pagado_en+'</td>' +
                                    '<td>'+r.hora+'</td>' +
                                    '<td>'+r.oper+'</td>' +
                                    '<td>' +
                                    '<button  class=" limpiar btn btn-success btn-sm" type="button" id-comun="'+r.comun+'" id-cantidad="'+r.cantidad+'" id-gest="'+r.gest+'"><i class="fa fa-cog"></i> Rectificar</button>' +
                                    '</td>' +
                                    '</tr>';
                            })
                            //     th>#</th>
                            // <th>Cantidad</th>
                            // <th>Pagado</th>
                            // <th>Gestion</th>
                            // <th>Comun</th>
                            // <th>Cantidad</th>
                            // <th>Pagando en</th>
                            // <th>Hora</th>
                            // <th>Opciones</th>
                        });
                        $('#contenido').html(t);
                    }
                });
            }
            $('#inmuebles').change(function (){
                $('#gestion').val('');
                $('#descrip').html('');
                $('#bandera').html('');
                $('#control').html('');
                $('#superficie').html('');
                $('#sup_const').html('');

                document.getElementById("pre").textContent="";

                mostrar($('#comun1').val(),$(this).val());

                $.ajax({
                    url: "/ultimages/"+$('#inmuebles').val(),
                    success:function (re){
                        document.getElementById("pre").textContent = JSON.stringify(re[0], undefined, 2);
                        // console.log(re);
                        $('#gestion').val(re[0].gestion);
                        $('#superficie').val(re[0].superficie);
                        $('#sup_const').val(re[0].sup_const);
                        $('#docex').val(re[0].docex);
                        $('#bandera').val(re[0].bandera);
                        $('#control').val(re[0].control);
                        $('#var1').val(re[0].var1);
                        // $('#descrip').html(re[0].descrip);

                    }
                });
            })


            $('#formulario').submit(function(e){
                // mostrar($('#comun1').val());
                // $('#paterno').val('');
                // $('#materno').val('');
                // $('#nombre').val('');
                // $('#cedula').val('');
                // $('#ntelefono').val('');
                // $('#ndireccion').val('');
                // $('#nruc').val('');
                // $('#nsector').val('');
                // $('#apeesposo').val('');
                // $('#nmts2').val('');
                // $('#ndiract').val('');
                // $('#gest').val('');
                // $('#nactdescri').val('');
                // $('#nfechainic').val('');

                   $('#paterno').val('');
                   $('#materno').val('');
                   $('#nombre').val('');
                   $('#cedula').val('');
                   $('#ntelefono').val('');
                   $('#ndireccion').val('');
                   $('#nacionalid').val('');
                   $('#nruc').val('');
                   $('#nactdescri').val('');
                   $('#nsector').val('');
                   $('#apeesposo').val('');
                   $('#nzona').val('');
                   $('#nmts2').val('');
                   $('#ndiract').val('');
                   $('#formcaja').val('');
                   $('#gest').val('');
                   $('#form22').val('');
                   $('#oper').val('');
                   $('#fed').val('');
                   $('#nufed').val('');
                   $('#adeuda').val('');
                   $('#bandera').val('');
                   $('#asociado').val('');
                   $('#nro_asoc').val('');
                   $('#n_tug').val('');
                   $('#n_preim').val('');
                   $('#f_regi').val('');
                   $('#bloqueo').val('');
                   $('#l07').val('');
                   $('#l07nmts2').val('');
                   $('#l259').val('');
                   $('#categtoria').val('');
                   $('#horario').val('');
                   $('#lfini').val('');
                   $('#l080').val('');
                   $('#hab').val('');
                $('#nfechainic').val('');

                // document.getElementById("pre").textContent = "";
                $.ajax({
                    url: "/datosindustria/"+$('#padron').val(),
                    success:function (re){

                        if (re.length>0){
                            console.log(re[0]);
                            $('#mod1').attr('action',"/modnatural/"+re[0].npadron);
                            // $('#paterno').val(re[0].paterno);
                            // $('#materno').val(re[0].materno);
                            // $('#nombre').val(re[0].nombre);
                            // $('#cedula').val(re[0].cedula);
                            // $('#ntelefono').val(re[0].ntelefono);
                            // $('#ndireccion').val(re[0].ndireccion);
                            // $('#nruc').val(re[0].nruc);
                            // $('#nsector').val(re[0].nsector);
                            // $('#apeesposo').val(re[0].apeesposo);
                            // $('#nmts2').val(re[0].nmts2);
                            // $('#ndiract').val(re[0].ndiract);
                            // $('#gest').val(re[0].gest);
                            // $('#l080').val(re[0].l080);
                            // $('#nfechainic').val(re[0].nfechainic);
                            // $('#nactdescri').val(re[0].nactdescri);

                            $('#paterno').val(re[0].paterno)
                            $('#materno').val(re[0].materno)
                            $('#nombre').val(re[0].nombre)
                            $('#cedula').val(re[0].cedula)
                            $('#ntelefono').val(re[0].ntelefono)
                            $('#ndireccion').val(re[0].ndireccion)
                            $('#nacionalid').val(re[0].nacionalid)
                            $('#nruc').val(re[0].nruc)
                            $('#nactdescri').val(re[0].nactdescri)
                            $('#nsector').val(re[0].nsector)
                            $('#apeesposo').val(re[0].apeesposo)
                            $('#nzona').val(re[0].nzona)
                            $('#nmts2').val(re[0].nmts2)
                            $('#ndiract').val(re[0].ndiract)
                            $('#formcaja').val(re[0].formcaja)
                            $('#gest').val(re[0].gest)
                            $('#form22').val(re[0].form22)
                            $('#oper').val(re[0].oper)
                            $('#fed').val(re[0].fed)
                            $('#nufed').val(re[0].nufed)
                            $('#adeuda').val(re[0].adeuda)
                            $('#bandera').val(re[0].bandera)
                            $('#asociado').val(re[0].asociado)
                            $('#nro_asoc').val(re[0].nro_asoc)
                            $('#n_tug').val(re[0].n_tug)
                            $('#n_preim').val(re[0].n_preim)
                            $('#f_regi').val(re[0].f_regi)
                            $('#bloqueo').val(re[0].bloqueo)
                            $('#l07').val(re[0].l07)
                            $('#l07nmts2').val(re[0].l07nmts2)
                            $('#l259').val(re[0].l259)
                            $('#categtoria').val(re[0].categtoria)
                            $('#horario').val(re[0].horario)
                            $('#lfini').val(re[0].lfini)
                            $('#l080').val(re[0].l080)
                            $('#hab').val(re[0].hab)
                            $('#nfechainic').val(re[0].nfechainic);
                            // document.getElementById("pre").textContent = JSON.stringify(re[0], undefined, 2);
                        }
                        // let t='<option value="">Seleccionar</option>';
                        // re.forEach(r=>{
                        //     // console.log(r);
                        //     t+='<option value="'+r.cantidad+'" >'+r.cantidad+'</option>';
                        // })
                        // $('#inmuebles').html(t);
                    }
                });
                // $.ajax({
                //     url: "/datoscontrib/"+$('#comun1').val(),
                //     success: function (response) {
                //         // console.log(response);
                //         if(response.length!=0){
                //             var row=response[0];
                //             // console.log(row);
                //             // $('#tipodocumento').val(row['tipodocum']);
                //             $('#ci').val(row['comun']);
                            // $('#mod1').attr('action',"/modificar/"+row['comun']);
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
