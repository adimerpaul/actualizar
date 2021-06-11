@extends('layouts.principal')
@section('content')
    <div class="container">
        <h1 class="bg-dark text-center text-white">Actividades Economicas-Juridico</h1>
        <form class="row g-3" id="formulario">
            <div class="col-md-4">
                <label for="comun1" class="form-label">Padron</label>
                <input type="text" class="form-control" id="comun1" required placeholder="Padron">
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
                    <label for="razon">Razon</label>
                    <input type="text" class="form-control" id="razon" name="razon" placeholder="Razon" >
                </div>
                <div class="form-group col-md-2">
                    <label for="jdireccion">Direccion</label>
                    <input type="text" class="form-control" id="jdireccion" name="jdireccion" placeholder="Direccion" >
                </div>
                <div class="form-group col-md-2">
                    <label for="jtelefono">Telefono</label>
                    <input type="text" class="form-control" id="jtelefono" name="jtelefono" placeholder="Telefono" >
                </div>
                <div class="form-group col-md-2">
                    <label for="jruc">RUC</label>
                    <input type="text" class="form-control" id="jruc" name="jruc" placeholder="RUC" >
                </div>
                <div class="form-group col-md-2">
                    <label for="jactdescri">Descripcion</label>
                    <input type="text" class="form-control" id="jactdescri" name="jactdescri" placeholder="Descripcion" >
                </div>
                <div class="form-group col-md-2">
                    <label for="jdiractiv">Diractiv</label>
                    <input type="text" class="form-control" id="jdiractiv" name="jdiractiv" placeholder="Diractiv" >
                </div>
                <div class="form-group col-md-2">
                    <label for="jsector">jsector</label>
                    <input type="text" class="form-control" id="jsector" name="jsector" placeholder="jsector" >
                </div>
                <div class="form-group col-md-2">
                    <label for="jfechainic">jfechainic</label>
                    <input type="text" class="form-control" id="jfechainic" name="jfechainic" placeholder="jfechainic" >
                </div>
                <div class="form-group col-md-2">
                    <label for="sucursales">sucursales</label>
                    <input type="text" class="form-control" id="sucursales" name="sucursales" placeholder="sucursales" >
                </div>
                <div class="form-group col-md-2">
                    <label for="nomreplega">nomreplega</label>
                    <input type="text" class="form-control" id="nomreplega" name="nomreplega" placeholder="nomreplega" >
                </div>
                <div class="form-group col-md-2">
                    <label for="numdociden">numdociden</label>
                    <input type="text" class="form-control" id="numdociden" name="numdociden" placeholder="numdociden" >
                </div>
                <div class="form-group col-md-2">
                    <label for="cargo">cargo</label>
                    <input type="text" class="form-control" id="cargo" name="cargo" placeholder="cargo" >
                </div>
                <div class="form-group col-md-2">
                    <label for="jzona">jzona</label>
                    <input type="text" class="form-control" id="jzona" name="jzona" placeholder="jzona" >
                </div>
                <div class="form-group col-md-2">
                    <label for="jmts2">MTS 2</label>
                    <input type="text" class="form-control" id="jmts2" name="jmts2" placeholder="MTS 2" >
                </div>
                <div class="form-group col-md-2">
                    <label for="numform">numform</label>
                    <input type="text" class="form-control" id="numform" name="numform" placeholder="numform" >
                </div>
                <div class="form-group col-md-2">
                    <label for="gest">Gestion</label>
                    <input type="text" class="form-control" id="gest" name="gest" placeholder="Gestion" >
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
                    <label for="l07">l07</label>
                    <input type="text" class="form-control" id="l07" name="l07" placeholder="l07" >
                </div>
                <div class="form-group col-md-2">
                    <label for="l259">l259</label>
                    <input type="text" class="form-control" id="l259" name="l259" placeholder="l259" >
                </div>
                <div class="form-group col-md-2">
                    <label for="categoria">categoria</label>
                    <input type="text" class="form-control" id="categoria" name="categoria" placeholder="categoria" >
                </div>
                <div class="form-group col-md-2">
                    <label for="horario">horario</label>
                    <input type="text" class="form-control" id="horario" name="horario" placeholder="horario" >
                </div>
                <div class="form-group col-md-2">
                    <label for="lf_ini">lf_ini</label>
                    <input type="text" class="form-control" id="lf_ini" name="lf_ini" placeholder="lf_ini" >
                </div>
                <div class="form-group col-md-2">
                    <label for="lf_fin">lf_fin</label>
                    <input type="text" class="form-control" id="lf_fin" name="lf_fin" placeholder="lf_fin" >
                </div>
                <div class="form-group col-md-2">
                    <label for="l07jmts2">l07jmts2</label>
                    <input type="text" class="form-control" id="l07jmts2" name="l07jmts2" placeholder="l07jmts2" >
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
{{--                <div class="form-group col-md-2">--}}
{{--                    <label for="l080">l080</label>--}}
{{--                    <input type="text" class="form-control" id="l080" name="l080" placeholder="l080" >--}}
{{--                </div>--}}
{{--                <div class="form-group col-md-8">--}}
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
                // $('#razon').val('');
                // $('#jdireccion').val('');
                // $('#jtelefono').val('');
                // $('#jruc').val('');
                // $('#jactdescri').val('');
                // $('#jdiractiv').val('');
                // // $('#nruc').val('');
                // // $('#nsector').val('');
                // // $('#apeesposo').val('');
                // $('#jmts2').val('');
                // // $('#ndiract').val('');
                // $('#gest').val('');
                    $('#razon').val('')
                    $('#jdireccion').val('')
                    $('#jtelefono').val('')
                    $('#jruc').val('')
                    $('#jactdescri').val('')
                    $('#jdiractiv').val('')
                    $('#jsector').val('')
                    $('#jfechainic').val('')
                    $('#sucursales').val('')
                    $('#nomreplega').val('')
                    $('#numdociden').val('')
                    $('#cargo').val('')
                    $('#jzona').val('')
                    $('#jmts2').val('')
                    $('#numform').val('')
                    $('#gest').val('')
                    $('#oper').val('')
                    $('#fed').val('')
                    $('#nufed').val('')
                    $('#adeuda').val('')
                    $('#l07').val('')
                    $('#l259').val('')
                    $('#categoria').val('')
                    $('#horario').val('')
                    $('#lf_ini').val('')
                    $('#lf_fin').val('')
                    $('#l07jmts2').val('')
                    $('#l080').val('')
                    $('#hab').val('')
                // document.getElementById("pre").textContent = "";
                $.ajax({
                    url: "/datosindustriaj/"+$('#comun1').val(),
                    success:function (re){
                        // console.log(re.length);
                        if (re.length>0){
                            $('#mod1').attr('action',"/modjuridico/"+re[0].jpadron);
                            console.log(re[0])
                            // $('#razon').val(re[0].razon);
                            // $('#jdireccion').val(re[0].jdireccion);
                            // $('#jtelefono').val(re[0].jtelefono);
                            // $('#jruc').val(re[0].jruc);
                            // $('#jactdescri').val(re[0].jactdescri);
                            // $('#jdiractiv').val(re[0].jdiractiv);
                            // // $('#nruc').val(re[0].nruc);
                            // // $('#nsector').val(re[0].nsector);
                            // // $('#apeesposo').val(re[0].apeesposo);
                            // $('#jmts2').val(re[0].jmts2);
                            // // $('#ndiract').val(re[0].ndiract);
                            // $('#gest').val(re[0].gest);
                            // $('#l080').val(re[0].l080);
                            // document.getElementById("pre").textContent = JSON.stringify(re[0], undefined, 2);
                            $('#razon').val(re[0].razon)
                            $('#jdireccion').val(re[0].jdireccion)
                            $('#jtelefono').val(re[0].jtelefono)
                            $('#jruc').val(re[0].jruc)
                            $('#jactdescri').val(re[0].jactdescri)
                            $('#jdiractiv').val(re[0].jdiractiv)
                            $('#jsector').val(re[0].jsector)
                            $('#jfechainic').val(re[0].jfechainic)
                            $('#sucursales').val(re[0].sucursales)
                            $('#nomreplega').val(re[0].nomreplega)
                            $('#numdociden').val(re[0].numdociden)
                            $('#cargo').val(re[0].cargo)
                            $('#jzona').val(re[0].jzona)
                            $('#jmts2').val(re[0].jmts2)
                            $('#numform').val(re[0].numform)
                            $('#gest').val(re[0].gest)
                            $('#oper').val(re[0].oper)
                            $('#fed').val(re[0].fed)
                            $('#nufed').val(re[0].nufed)
                            $('#adeuda').val(re[0].adeuda)
                            $('#l07').val(re[0].l07)
                            $('#l259').val(re[0].l259)
                            $('#categoria').val(re[0].categoria)
                            $('#horario').val(re[0].horario)
                            $('#lf_ini').val(re[0].lf_ini)
                            $('#lf_fin').val(re[0].lf_fin)
                            $('#l07jmts2').val(re[0].l07jmts2)
                            $('#l080').val(re[0].l080)
                            $('#hab').val(re[0].hab)
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
