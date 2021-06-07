@extends('layouts.principal')
@section('content')
    <div class="container">
        <h2 class="bg-info text-center text-white">Actualizar archi</h2>
        <form class="row g-3" id="formulario">
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
                            <div class="modal-header bg-info text-white">
                                <h5 class="modal-title " id="actualizarLabel">Actualizar</h5>
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
                <div class="modal fade" id="ver" tabindex="-1" role="dialog" aria-labelledby="verLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-warning text-dark">
                                <h5 class="modal-title " id="verLabel">Actualizar</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form id="actualizararchi">
                                    <div class="form-group row">
                                        <label for="compro" class="col-sm-2 col-form-label">compro</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="compro">
                                        </div>
                                        <label for="flag_tasas" class="col-sm-2 col-form-label">flag_tasas</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="flag_tasas">
                                        </div>
                                        <label for="comun" class="col-sm-2 col-form-label">comun</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="comun">
                                        </div>
                                        <label for="cantidad" class="col-sm-2 col-form-label">cantidad</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="cantidad">
                                        </div>
                                        <label for="distrito" class="col-sm-2 col-form-label">distrito</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="distrito">
                                        </div>
                                        <label for="manzano" class="col-sm-2 col-form-label">manzano</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="manzano">
                                        </div>
                                        <label for="lote" class="col-sm-2 col-form-label">lote</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="lote">
                                        </div>
                                        <label for="sublote" class="col-sm-2 col-form-label">sublote</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="sublote">
                                        </div>
                                        <label for="codigo" class="col-sm-2 col-form-label">codigo</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="codigo">
                                        </div>
                                        <label for="tipo" class="col-sm-2 col-form-label">tipo</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="tipo">
                                        </div>
                                        <label for="Habdep" class="col-sm-2 col-form-label">Habdep</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="Habdep">
                                        </div>
                                        <label for="nf" class="col-sm-2 col-form-label">nf</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="nf">
                                        </div>
                                        <label for="Frente" class="col-sm-2 col-form-label">Frente</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="Frente">
                                        </div>
                                        <label for="gest" class="col-sm-2 col-form-label">gest</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="gest">
                                        </div>
                                        <label for="Item1" class="col-sm-2 col-form-label">Item1</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="Item1">
                                        </div>
                                        <label for="Item2" class="col-sm-2 col-form-label">Item2</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="Item2">
                                        </div>
                                        <label for="Item3" class="col-sm-2 col-form-label">Item3</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="Item3">
                                        </div>
                                        <label for="Item4" class="col-sm-2 col-form-label">Item4</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="Item4">
                                        </div>
                                        <label for="Item5" class="col-sm-2 col-form-label">Item5</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="Item5">
                                        </div>
                                        <label for="Item6" class="col-sm-2 col-form-label">Item6</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="Item6">
                                        </div>
                                        <label for="Item7" class="col-sm-2 col-form-label">Item7</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="Item7">
                                        </div>
                                        <label for="Item8" class="col-sm-2 col-form-label">Item8</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="Item8">
                                        </div>
                                        <label for="Item9" class="col-sm-2 col-form-label">Item9</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="Item9">
                                        </div>
                                        <label for="Item10" class="col-sm-2 col-form-label">Item10</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="Item10">
                                        </div>
                                        <label for="Pagado" class="col-sm-2 col-form-label">Pagado</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="Pagado">
                                        </div>
                                        <label for="Inter" class="col-sm-2 col-form-label">Inter</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="Inter">
                                        </div>
                                        <label for="mMora" class="col-sm-2 col-form-label">mMora</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="mMora">
                                        </div>
                                        <label for="Minclu" class="col-sm-2 col-form-label">Minclu</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="Minclu">
                                        </div>
                                        <label for="Formu" class="col-sm-2 col-form-label">Formu</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="Formu">
                                        </div>
                                        <label for="nomb" class="col-sm-2 col-form-label">nomb</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="nomb">
                                        </div>
                                        <label for="descuento" class="col-sm-2 col-form-label">descuento</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="descuento">
                                        </div>
                                        <label for="fecha" class="col-sm-2 col-form-label">fecha</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="fecha">
                                        </div>
                                        <label for="oper" class="col-sm-2 col-form-label">oper</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="oper">
                                        </div>
                                        <label for="pagado_en" class="col-sm-2 col-form-label">pagado_en</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="pagado_en">
                                        </div>
                                        <label for="hora" class="col-sm-2 col-form-label">hora</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="hora">
                                        </div>
                                        <label for="descriphab" class="col-sm-2 col-form-label">descriphab</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="descriphab">
                                        </div>
                                    </div>
                                    <div class="modal-footer flex">
                                        <button type="button" id="creararchi" class="btn btn-success"> <i class="fa fa-plus-circle"></i> Crear</button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal"> <i class="fa fa-trash-alt"></i> Cerrar</button>
                                        <button type="button" id="actualizararchic" class="btn btn-warning"> <i class="fa fa-pencil-alt"></i> Actualizar</button>
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
            var gestion,cantidad,CodAut;
            $('#creararchi').click(function (e){
                if (confirm("seguro de crear")){
                    var data={
                        "_token": "{{ csrf_token() }}",
                        compro:$('#compro').val(),
                        flag_tasas:$('#flag_tasas').val(),
                        comun:$('#comun').val(),
                        cantidad:$('#cantidad').val(),
                        distrito:$('#distrito').val(),
                        manzano:$('#manzano').val(),
                        lote:$('#lote').val(),
                        sublote:$('#sublote').val(),
                        codigo:$('#codigo').val(),
                        tipo:$('#tipo').val(),
                        Habdep:$('#Habdep').val(),
                        nf:$('#nf').val(),
                        Frente:$('#Frente').val(),
                        gest:$('#gest').val(),
                        Item1:$('#Item1').val(),
                        Item2:$('#Item2').val(),
                        Item3:$('#Item3').val(),
                        Item4:$('#Item4').val(),
                        Item5:$('#Item5').val(),
                        Item6:$('#Item6').val(),
                        Item7:$('#Item7').val(),
                        Item8:$('#Item8').val(),
                        Item9:$('#Item9').val(),
                        Item10:$('#Item10').val(),
                        Pagado:$('#Pagado').val(),
                        Inter:$('#Inter').val(),
                        mMora:$('#mMora').val(),
                        Minclu:$('#Minclu').val(),
                        Formu:$('#Formu').val(),
                        nomb:$('#nomb').val(),
                        descuento:$('#descuento').val(),
                        fecha:$('#fecha').val(),
                        oper:$('#oper').val(),
                        pagado_en:$('#pagado_en').val(),
                        hora:$('#hora').val(),
                        descriphab:$('#descriphab').val(),
                    }
                    // console.log(data);
                    $.ajax({
                        type:'POST',
                        data:data,
                        url:'/creararchi',
                        success:function (e){
                            // console.log(e);
                            mostrar($('#cantidad').val());
                            $('#ver').modal('hide');
                            // $('#actualizar').modal('hide');
                        }
                    })
                }

                e.preventDefault();
                return false;
            });
            $('#actualizararchic').click(function (e){
                var data={
                    "_token": "{{ csrf_token() }}",
                    CodAut:CodAut,
                    compro:$('#compro').val(),
                    flag_tasas:$('#flag_tasas').val(),
                    comun:$('#comun').val(),
                    cantidad:$('#cantidad').val(),
                    distrito:$('#distrito').val(),
                    manzano:$('#manzano').val(),
                    lote:$('#lote').val(),
                    sublote:$('#sublote').val(),
                    codigo:$('#codigo').val(),
                    tipo:$('#tipo').val(),
                    Habdep:$('#Habdep').val(),
                    nf:$('#nf').val(),
                    Frente:$('#Frente').val(),
                    gest:$('#gest').val(),
                    Item1:$('#Item1').val(),
                    Item2:$('#Item2').val(),
                    Item3:$('#Item3').val(),
                    Item4:$('#Item4').val(),
                    Item5:$('#Item5').val(),
                    Item6:$('#Item6').val(),
                    Item7:$('#Item7').val(),
                    Item8:$('#Item8').val(),
                    Item9:$('#Item9').val(),
                    Item10:$('#Item10').val(),
                    Pagado:$('#Pagado').val(),
                    Inter:$('#Inter').val(),
                    mMora:$('#mMora').val(),
                    Minclu:$('#Minclu').val(),
                    Formu:$('#Formu').val(),
                    nomb:$('#nomb').val(),
                    descuento:$('#descuento').val(),
                    fecha:$('#fecha').val(),
                    oper:$('#oper').val(),
                    pagado_en:$('#pagado_en').val(),
                    hora:$('#hora').val(),
                    descriphab:$('#descriphab').val(),
                }
                // console.log(data);
                $.ajax({
                    type:'POST',
                    data:data,
                    url:'/actualizararchic',
                    success:function (e){
                        // console.log(e);
                        mostrar($('#cantidad').val());
                        $('#ver').modal('hide');
                        // $('#actualizar').modal('hide');
                    }
                })
                e.preventDefault();
                return false;
            });
            $('#contenido').on("click",".ver",function (e){
                // console.log( $(this).attr('id-datos'));
                // $('#actualizar').modal('show');
                let dat= JSON.parse($(this).attr('id-datos'));
                // console.log(dat);
                $('#ver').modal('show');
                    CodAut=dat.CodAut;
                    $('#compro').val(dat.compro);
                    $('#flag_tasas').val(dat.flag_tasas);
                    $('#comun').val(dat.comun);
                    $('#cantidad').val(dat.cantidad);
                    $('#distrito').val(dat.distrito);
                    $('#manzano').val(dat.manzano);
                    $('#lote').val(dat.lote);
                    $('#sublote').val(dat.sublote);
                    $('#codigo').val(dat.codigo);
                    $('#tipo').val(dat.tipo);
                    $('#Habdep').val(dat.Habdep);
                    $('#nf').val(dat.nf);
                    $('#Frente').val(dat.Frente);
                    $('#gest').val(dat.gest);
                    $('#Item1').val(dat.Item1);
                    $('#Item2').val(dat.Item2);
                    $('#Item3').val(dat.Item3);
                    $('#Item4').val(dat.Item4);
                    $('#Item5').val(dat.Item5);
                    $('#Item6').val(dat.Item6);
                    $('#Item7').val(dat.Item7);
                    $('#Item8').val(dat.Item8);
                    $('#Item9').val(dat.Item9);
                    $('#Item10').val(dat.Item10);
                    $('#Pagado').val(dat.Pagado);
                    $('#Inter').val(dat.Inter);
                    $('#mMora').val(dat.mMora);
                    $('#Minclu').val(dat.Minclu);
                    $('#Formu').val(dat.Formu);
                    $('#nomb').val(dat.nomb);
                    $('#descuento').val(dat.descuento);
                    $('#fecha').val(dat.fecha);
                    $('#oper').val(dat.oper);
                    $('#pagado_en').val(dat.pagado_en);
                    $('#hora').val(dat.hora);
                    $('#descriphab').val(dat.descriphab);
                // console.log(dat);
                // $('#oper').val($(this).attr('id-oper'));
                // $('#pagado_en').val($(this).attr('id-pagado_en'));
                // $('#hora').val($(this).attr('id-hora'));
                // gestion=$(this).attr('id-gest');
                // cantidad=$(this).attr('id-cantidad');
                $('#verLabel').html('Gestion: '+dat.gest );
                e.preventDefault();
            })
            $('#contenido').on("click",".cambiar",function (e){
                // console.log('a');
                $('#actualizar').modal('show');
                $('#oper').val($(this).attr('id-oper'));
                $('#pagado_en').val($(this).attr('id-pagado_en'));
                $('#hora').val($(this).attr('id-hora'));
                gestion=$(this).attr('id-gest');
                cantidad=$(this).attr('id-cantidad');
                $('#actualizarLabel').html('Gestion: '+gestion );
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
                        mostrar($('#cantidad').val());
                        $('#actualizar').modal('hide');
                    }
                })
                e.preventDefault();
                return false;
            });
            function mostrar(cantidad){
                $('#contenido').html('');
                $('#buscar').html('<i class="fa fa-spinner"></i> Buscando....');

                $.ajax({
                    url: "/barchi/"+cantidad,
                    success: function (res) {
                        let t='';
                        let c=0;
                        // console.log(res);
                        res.forEach(re=>{
                            re.forEach(r=>{
                                // console.log(r);
                                // if (typeof re != 'string') {
                                    let datos = JSON.stringify(r);
                                    // console.log(datos)
                                // }else{
                                //     let datos='';
                                // }
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
                                    '<div class="btn-group">'+
                                    '<button  class="cambiar btn btn-info btn-sm" type="button" id-cantidad="'+r.cantidad+'" id-gest="'+r.gest+'" id-oper="'+r.oper+'" id-hora="'+r.hora+'" id-pagado_en="'+r.pagado_en+'"><i class="fa fa-pencil-alt"></i> Actu</button>' +
                                    "<button  class='ver btn btn-warning btn-sm' type='button' id-datos='"+datos+"'><i class='fa fa-eye'></i> Ver</button>" +
                                    '</div>' +
                                    '</td>' +
                                    '</tr>';
                            })
                        });
                        $('#buscar').html('<i class="fa fa-search"></i> Buscar')
                        $('#contenido').html(t);
                    }
                });
            }
            $('#formulario').submit( function (e){
                // $('#buscar').html('<i class="fa fa-spinner"></i> Buscando...');
                 mostrar($('#cantidad').val());
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
