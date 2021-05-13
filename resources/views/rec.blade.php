
@extends('layouts.principal')
@section('content')
    <div class="container">
        <h1>Rectificaciones</h1>
        <form class="row g-3" id="formulario">
            <div class="col-md-6">
                <label for="comun1" class="form-label">N documento</label>
                <input type="text" class="form-control" id="comun1" required >

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
                <div class="form-group col-md-3">
                    <label for="nombre">Nombre Completo</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre Completo" >
                </div>
                <div class="form-group col-md-2">
                    <label for="inmuebles">Imuebles</label>
                    <select name="inmuebles" id="inmuebles" name="inmuebles" class="form-control" required >
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="gestion">Ultima Gestion</label>
                    <input type="text" class="form-control" id="gestion" name="gestion" placeholder="Ultima Gestion" >
                </div>

                <div class="form-group col-md-2">
                    <label for="gestion">Superficie</label>
                    <input type="text" class="form-control" id="superficie" name="superficie" placeholder="Superficie" >
                </div>
                <div class="form-group col-md-2">
                    <label for="gestion">Supe_const</label>
                    <input type="text" class="form-control" id="sup_const" name="sup_const" placeholder="Superficie Construcion" >
                </div>
                <div class="form-group col-md-1">
                    <label for="cambiar">Cambiar</label>
                    <button id="cambio" type="button" class="btn btn-success"><i class="fa fa-edit"></i></button>
                </div>
                <div class="form-group col-md-12">
                    <label for="gestion">Doc ex</label>
                    <input type="text" class="form-control" id="docex" name="docex" placeholder="Superficie Construcion" >
                </div>
                <div class="form-group col-12">
                    <h2>Gestiones acumuladas</h2>
                </div>
                <div class="form-group col-12">
                    <table class="table">
                        <thead>
                        <tr class="thead-light">
                            <th>#</th>
                            <th>Pagado</th>
                            <th>Gestion</th>
                            <th>Comun</th>
                            <th>Cantidad</th>
                            <th>Pagando en</th>
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

    </div>
    <script>
        window.onload=function (){
            $('#cambio').click(function (){
                if ($('#inmuebles').val()==undefined || $('#inmuebles').val()==''){
                    alert('debes seleccionar inmuebles')
                    return false;
                }else{
                    var data={
                        "_token": "{{ csrf_token() }}",
                        "cantidad":$('#inmuebles').val(),
                        "comun":$('#comun1').val(),
                        "superficie":$('#superficie').val(),
                        "sup_const":$('#sup_const').val(),
                        "docex":$('#docex').val(),
                    }
                    // console.log(data);
                    // return  false;
                    $.ajax({
                        url: "/cambiorec",
                        type:'POST',
                        data:data,
                        success:function (r){
                            // console.log(r);
                            alert('Modificado correctamente!');
                            // mostrar($('#comun1').val(),$('#inmuebles').val());
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
                        "comun":$('#comun1').val(),

                    }
                    $.ajax({
                        url: "/actualizarrec",
                        type:'POST',
                        data:data,
                        success:function (r){
                            // console.log(r);
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
                                c++;
                                t+='<tr>' +
                                    '<td>'+c+'</td>' +
                                    '<td>'+r.Pagado+'</td>' +
                                    '<td>'+r.gest+'</td>' +
                                    '<td>'+r.comun+'</td>' +
                                    '<td>'+r.cantidad+'</td>' +
                                    '<td>'+r.pagado_en+'</td>' +
                                    '<td>'+r.hora+'</td>' +
                                    '<td>' +
                                    '<button  class=" limpiar btn btn-success btn-sm" type="button" id-cantidad="'+r.cantidad+'" id-gest="'+r.gest+'"><i class="fa fa-cog"></i> Rectificar</button>' +
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
                mostrar($('#comun1').val(),$(this).val());

                $.ajax({
                    url: "/ultimages/"+$('#inmuebles').val(),
                    success:function (re){
                        // console.log(re);
                        $('#gestion').val(re[0].gestion);
                        $('#superficie').val(re[0].superficie);
                        $('#sup_const').val(re[0].sup_const);
                        $('#docex').val(re[0].docex);
                        // $('#descrip').html(re[0].descrip);
                    }
                });
            })
            $('#formulario').submit(function(e){
                // mostrar($('#comun1').val());
                $('#inmuebles').html('');
                $('#gestion').val('');
                $.ajax({
                    url: "/inmuebles/"+$('#comun1').val(),
                    success:function (re){
                        // console.log(r);
                        let t='<option value="">Seleccionar</option>';
                        re.forEach(r=>{
                            // console.log(r);
                            t+='<option value="'+r.cantidad+'" >'+r.cantidad+'</option>';
                        })
                        $('#inmuebles').html(t);
                    }
                });
                $.ajax({
                    url: "/datoscontrib/"+$('#comun1').val(),
                    success: function (response) {
                        // console.log(response);
                        if(response.length!=0){
                            var row=response[0];
                            // console.log(row);
                            // $('#tipodocumento').val(row['tipodocum']);
                            $('#ci').val(row['comun']);
                            // $('#mod1').attr('action',"/modificar/"+row['comun']);
                            $('#expedido').val(row['expedido']);
                            // $('#paterno').val(row['paterno']);
                            // $('#materno').val(row['materno']);
                            // $('#nombre').val(row['nombre']);
                            $('#nombre').val(row['paterno'].trim()+' '+row['materno'].trim()+' '+row['nombre'].trim())
                            $('#telefono').val(row['telefono']);

                            // $('#cod_ham').val(row['cod_ham']);
                            // $('#cod_barrio').val(row['cod_barrio']);
                            // $('#tipocalle').val(row['tipocalle']);
                            // $('#nombrecall').val(row['nombrecall']);
                            // $('#numcasa').val(row['numcasa']);
                            // $('#descrip').val(row['descrip']);
                            // $('#nacimient').val(row['nacimient'].substr(0,10));
                        }
                        else{
                            $('#tipodocumento').val('');
                            $('#ci').val('');
                            $('#mod1').attr('action',"");
                            $('#expedido').val('');
                            $('#paterno').val('');
                            $('#materno').val('');
                            $('#nombre').val('');
                            $('#telefono').val('');
                            $('#cod_ham').val('');
                            $('#cod_barrio').val('');
                            $('#tipocalle').val('');
                            $('#nombrecall').val('');
                            $('#numcasa').val('');
                            $('#descrip').val('');
                            $('#nacimient').val('');}
                        // You will get response from your PHP page (what you echo or print)
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log(textStatus, errorThrown);
                    }
                });
                return false;
            })
        }


    </script>
@endsection
