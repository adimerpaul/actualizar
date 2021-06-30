@extends('layouts.principal')
@section('content')
    <div class="container">
        <h1 class="text-center bg-primary text-white mt-1">Impuesto municipales a las tranferencias bienes inmuebles</h1>
        <div class="row">
            <form id="formulario" method="POST">
            <div class="col-sm-12">
                <h5 class="card-title mb-0">Inmueble</h5>
            </div>
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label for="inmueble">Reg inmueble <small class="text-muted"><i id="spinner"  class="fa fa-spinner"></i></small></label>
                            <input type="text" class="form-control " id="inmueble" placeholder="inmueble" required name="cantidad">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label for="CodAut">CodAut <small class="text-muted"></small></label>
                            <p id="CodAut">Codigo</p>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label for="nombrecall">Nombre <small class="text-muted"></small></label>
                            <input disabled type="text" class="form-control " id="nombrecall" placeholder="nombrecall" name="nombrecall">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label for="numcasa">Numero <small class="text-muted"></small></label>
                            <input disabled type="text" class="form-control " id="numcasa" placeholder="numcasa" name="numcalle">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label for="cod_ham">Alcaldia <small class="text-muted"></small></label>
                            <input disabled type="text" class="form-control " id="cod_ham" placeholder="cod_ham" name="cod_ham">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label for="manzano">manzano <small class="text-muted"></small></label>
                            <input disabled type="text" class="form-control " id="manzano" placeholder="manzano" name="manzano">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label for="distrito">distrito <small class="text-muted"></small></label>
                            <input disabled type="text" class="form-control " id="distrito" placeholder="distrito" name="distrito">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label for="lote">lote <small class="text-muted"></small></label>
                            <input disabled type="text" class="form-control " id="lote" placeholder="lote">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label for="superficie">superficie <small class="text-muted"></small></label>
                            <input disabled type="text" class="form-control " id="superficie" placeholder="superficie">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label for="sup_const">sup_const <small class="text-muted"></small></label>
                            <input disabled type="text" class="form-control " id="sup_const" placeholder="sup_const">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label for="var1">var1 <small class="text-muted"></small></label>
                            <input disabled type="text" class="form-control " id="var1" placeholder="var1">
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-sm-12">
                <h5 class="card-title mb-0">Enajenantes o cedentes</h5>
            </div>
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label for="comun1">comun1 <small class="text-muted"></small></label>
                            <input disabled type="text" class="form-control " id="comun1" placeholder="comun1">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label for="paterno1">paterno1 <small class="text-muted"></small></label>
                            <input disabled type="text" class="form-control " id="paterno1" placeholder="paterno1">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label for="materno1">materno1 <small class="text-muted"></small></label>
                            <input disabled type="text" class="form-control " id="materno1" placeholder="materno1">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label for="nombre1">nombre1 <small class="text-muted"></small></label>
                            <input disabled type="text" class="form-control " id="nombre1" placeholder="nombre1">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label for="domicilio1">domicilio1 <small class="text-muted"></small></label>
                            <input disabled type="text" class="form-control " id="domicilio1" placeholder="domicilio1">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <h5 class="card-title mb-0">Adquirientes o cesionarios</h5>
            </div>
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label for="comun2">comun2 <small class="text-muted"></small></label>
                            <input type="text" class="form-control " id="comun2" placeholder="comun2" required>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label for="paterno2">paterno2 <small class="text-muted"></small></label>
                            <input disabled type="text" class="form-control " id="paterno2" placeholder="paterno2">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label for="materno2">materno2 <small class="text-muted"></small></label>
                            <input disabled type="text" class="form-control " id="materno2" placeholder="materno2">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label for="nombre2">nombre2 <small class="text-muted"></small></label>
                            <input disabled type="text" class="form-control " id="nombre2" placeholder="nombre2">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label for="domicilio2">domicilio2 <small class="text-muted"></small></label>
                            <input disabled type="text" class="form-control " id="domicilio2" placeholder="domicilio2">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <h5 class="card-title mb-0">Determinacion de la base imponible y del impuesto</h5>
            </div>
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label for="form1800">form1800 <small class="text-muted"></small></label>
                            <input type="text" class="form-control " id="form1800"  placeholder="form1800" required>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label for="baseimponible">baseimponible <small class="text-muted"></small></label>
                            <input type="text" class="form-control " id="baseimponible" value="0" placeholder="baseimponible" required>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label for="importeventa">importeventa <small class="text-muted"></small></label>
                            <input type="text" class="form-control " id="importeventa" value="0" placeholder="importeventa" required>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group text-danger">
                            <label for="liquitacion">liquitacion <small class="text-muted"></small></label>
                            <input disabled type="text" class="form-control " id="liquitacion" value="0" placeholder="liquitacion">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="fechminuta">fechminuta <button id="veficardias" type="button" class="btn btn-danger btn-sm"><i class="fa fa-plus-square"></i></button> <span id="dias" class="text-muted"></span></label>
                            <input  type="date" class="form-control" value="{{date('Y-m-d')}}" id="fechminuta" value="0" placeholder="fechminuta">
                        </div>
                    </div>
                    <div class="col-sm-1">
                        <div class="form-group">
                            <label for="fechminuta">Corresponde?  <span id="dias" class="text-muted"></span></label>
                            <button id="corresponde" type="button" class="btn btn-warning"><i class="fa fa-trash"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="row" id="accesorios">
                    <div class="col-sm-12">
                        <h5 class="card-title mb-0">ACCESORIOS</h5>
                    </div>
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="ufv">Ufv {{date('Y-m-d')}}<small class="text-muted"></small></label>
                                    <input type="text" disabled class="form-control " id="ufv" value="0" placeholder="ufv">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="fechalimite">fecha limite minuta <button type="button" id="buscarminuta"  class="btn btn-sm btn-success"><i class="fa fa-plus-circle"></i></button> <small class="text-muted"></small></label>
                                    <input type="date" class="form-control " value="{{date('Y-m-d')}}" id="fechalimite" value="0" placeholder="fechalimite">
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="ufvdia">ufvdia <small class="text-muted"></small></label>
                                    <input disabled type="text" class="form-control " id="ufvdia" value="0" placeholder="ufvdia">
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group text-danger">
                                    <label for="mantenimiento ">Mantenimiento Valor <small class="text-muted"></small></label>
                                    <input disabled type="text" class="form-control " id="mantenimiento" value="0" placeholder="mantenimiento">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="diasmora">diasmora<small class="text-muted"></small></label>
                                    <input type="text" disabled class="form-control " id="diasmora" value="0" placeholder="diasmora">
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="tasapare">tasapare <small class="text-muted"></small></label>
                                    <input type="text" class="form-control "  id="tasapare" value="0" placeholder="tasapare">
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group text-danger">
                                    <label for="interes ">Interes <small class="text-muted"></small></label>
                                    <input disabled type="text" class="form-control " id="interes" value="0" placeholder="interes">
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group text-danger">
                                    <label for="l080 ">l080 <small class="text-muted"></small></label>
{{--                                    <input disabled type="text" class="form-control " id="l080" value="0" placeholder="l080">--}}
                                    <select class="form-control" name="l080" id="l080">
                                        <option value="false" selected>NO</option>
                                        <option value="true">SI</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="col-sm-12 text-danger">
                    <label id="totalpagar">TOTAL  A PAGAR</label>
                </div>
            <div class="col-sm-12">
                <button  type="submit" class="btn btn-success btn-block"><i class="fa fa-plus-circle"></i> Registrar </button>
            </div>
            </form>
        </div>
{{--        <div  class="row">--}}
{{--            <div class="col-sm-6">--}}
{{--                <form class="form-horizontal">--}}
{{--                    <div class="card-body">--}}
{{--                        <h4 class="card-title">Determinacion IMT</h4>--}}
{{--                        <div class="form-group row">--}}
{{--                            <label for="imt" class="col-sm-5 text-end control-label col-form-label">Deuda del IMT</label>--}}
{{--                            <div class="col-sm-7">--}}
{{--                                <input type="text" class="form-control" id="imt" placeholder="Deuda del IMT" value="0">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="form-group row">--}}
{{--                            <label for="pagado" class="col-sm-5 text-end control-label col-form-label">Monto pagado</label>--}}
{{--                            <div class="col-sm-7">--}}
{{--                                <input type="text" class="form-control" id="pagado" placeholder="Monto pagado" value="0">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="form-group row">--}}
{{--                            <label for="saldo" class="col-sm-5 text-end control-label col-form-label text-danger">Saldo</label>--}}
{{--                            <div class="col-sm-7">--}}
{{--                                <input type="text" class="form-control" disabled id="saldo" placeholder="Monto saldo">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <h4 class="card-title">Mantenimiento de valor al {{date('Y-m-d')}}</h4>--}}
{{--                        <div class="form-group row">--}}
{{--                            <label for="ufv" class="col-sm-5 text-end control-label col-form-label">UFV {{date('Y-m-d')}}</label>--}}
{{--                            <div class="col-sm-7">--}}
{{--                                <input type="text" class="form-control" id="ufv" placeholder="ufv" disabled>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="form-group row">--}}
{{--                            <label for="fechaminuta" class="col-sm-5 text-end control-label col-form-label">Fech Lim. Minu <i id="fl" class="fa fa-spinner"></i></label>--}}
{{--                            <div class="col-sm-6">--}}
{{--                                <input type="date" class="form-control" id="fechaminuta" placeholder="Fecha de la minuta" value="{{date('Y-m-d')}}">--}}
{{--                            </div>--}}
{{--                            <div class="col-sm-1">--}}
{{--                                <button id="buscarminuta" type="button" class="btn btn-sm btn-success"><i class="fa fa-plus-circle"></i></button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="form-group row">--}}
{{--                            <label for="ufvdia" class="col-sm-5 text-end control-label col-form-label">UFV dia</label>--}}
{{--                            <div class="col-sm-7">--}}
{{--                                <input type="text" class="form-control" id="ufvdia" placeholder="UFV dia" disabled>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="form-group row">--}}
{{--                            <label for="mantenimiento" class="col-sm-5 text-end control-label col-form-label text-danger">Mantenimiento al valor</label>--}}
{{--                            <div class="col-sm-7">--}}
{{--                                <input type="text" class="form-control" id="mantenimiento" placeholder="Mantenimiento al valor" disabled>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="border-top">--}}
{{--                        <div class="card-body">--}}
{{--                            <button type="button" class="btn btn-primary">Submit</button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--            <div class="col-sm-6">--}}
{{--                <form class="form-horizontal">--}}
{{--                    <div class="card-body">--}}
{{--                        <h4 class="card-title">Interes</h4>--}}
{{--                        <div class="form-group row">--}}
{{--                            <label for="diasmora" class="col-sm-5 text-end control-label col-form-label">Dias de mora</label>--}}
{{--                            <div class="col-sm-7">--}}
{{--                                <input type="text" class="form-control" id="diasmora" placeholder="Dias de mora" disabled>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="form-group row">--}}
{{--                            <label for="tasapare" class="col-sm-5 text-end control-label col-form-label">Tasapare</label>--}}
{{--                            <div class="col-sm-7">--}}
{{--                                <input type="text" class="form-control" id="tasapare" placeholder="Tasapare" >--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="form-group row">--}}
{{--                            <label for="interes" class="col-sm-5 text-end control-label col-form-label text-danger">Interes</label>--}}
{{--                            <div class="col-sm-7">--}}
{{--                                <input type="text" class="form-control" disabled id="interes" placeholder="Interes">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="border-top">--}}
{{--                        <div class="card-body">--}}
{{--                            <button type="button" class="btn btn-primary">Submit</button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
    <script>
        window.onload=function (){
            $('#l080').change(function (){
                if ($(this).val()=='true'){
                    $('#interes').val(0);
                }
            });
            $('#formulario').submit(function (e){
                if ($('#superficie').val()=='' ||$('#superficie').val()==null){
                    alert('debes selecionar una inmueble');
                    return false;
                }
                if (confirm("Seguro de guardar?")){
                let data={
                    '_token': "{{ csrf_token() }}",
                    'cantidad':$('#inmueble').val(),
                    'form1800':$('#form1800').val(),
                    'l080':$('#l080').val(),
                    'nombrecall':$('#nombrecall').val(),
                    'numcasa':$('#numcasa').val(),
                    'cod_ham':$('#cod_ham').val(),
                    'manzano':$('#manzano').val(),
                    'distrito':$('#distrito').val(),
                    'lote':$('#lote').val(),
                    'superficie':$('#superficie').val(),
                    'sup_const':$('#sup_const').val(),
                    'var1':$('#var1').val(),
                    'comun1':$('#comun1').val(),
                    'paterno1':$('#paterno1').val(),
                    'materno1':$('#materno1').val(),
                    'nombre1':$('#nombre1').val(),
                    'domicilio1':$('#domicilio1').val(),
                    'comun2':$('#comun2').val(),
                    'paterno2':$('#paterno2').val(),
                    'materno2':$('#materno2').val(),
                    'nombre2':$('#nombre2').val(),
                    'domicilio2':$('#domicilio2').val(),
                    'baseimponible':$('#baseimponible').val(),
                    'importeventa':$('#importeventa').val(),
                    'liquitacion':$('#liquitacion').val(),
                    'fechminuta':$('#fechminuta').val(),
                    'fechalimite':$('#fechalimite').val(),
                    'mantenimiento':$('#mantenimiento').val(),
                    'interes':$('#interes').val(),
                }
                $.ajax({
                    url:'transferencia',
                    type:'POST',
                    data:data,
                    success:function (e){
                        // console.log(e)
                        let dat=e[0];
                        var doc = new jsPDF('p','cm','legal')
                        console.log(dat);
                        doc.setFont("courier");
                        doc.setFontSize(11);
                        var x=1.2,y=-0.5;
                        // doc.text(1, 1, "UNO");
                        // doc.text(2, 2, "DOS");
                        // doc.text(3, 3, "TRES");
                        // doc.text(4, 4, "CUATRO");
                        /*inicio parte uno*/
                        doc.text(x+1, y+2.5, dat.calle.toString());
                        doc.text(x+6, y+2.5, dat.alcaldia.toString());
                        doc.text(x+8, y+2.5, dat.codigocatastral.toString());
                        doc.text(x+11, y+2.5, dat.superficie.toString());
                        doc.text(x+14, y+2.5, dat.supcontruida.toString());
                        doc.text(x+15.5, y+2.5, dat.cantidad.toString());
                        doc.text(x+18.5, y+2.5, dat.tipo.toString());

                        doc.text(x+1, y+3.7, dat.nombrevendedor.toString());
                        doc.text(x+12, y+3.7, dat.civendedor.toString());
                        doc.text(x+15, y+3.7, dat.domiciliovendedor.toString());

                        doc.text(x+1, y+4.5, dat.nombrecomprador.toString());
                        doc.text(x+12, y+4.5, dat.cicomprador.toString());
                        doc.text(x+15, y+4.5, dat.domiciliocomprador.toString());

                        doc.text(x+1, y+5.8, dat.baseimponible.toString());
                        doc.text(x+4, y+5.8, dat.venta.toString());
                        doc.text(x+7, y+5.8, dat.cotizacion.toString());
                        doc.text(x+10, y+5.8, dat.liquido.toString());

                        doc.text(x+1, y+7, dat.montodeterminado.toString());
                        doc.text(x+3, y+7, dat.pagoanterior.toString());
                        doc.text(x+6, y+7, dat.tipocambio.toString());
                        doc.text(x+8, y+7, dat.formapago.toString());

                        doc.text(x+1, y+7.8, dat.totalpagar.toString());
                        doc.text(x+3, y+7.8, dat.texto.toString());
                        doc.text(x+11.5, y+7.8, dat.fecha.toString());

                        doc.text(x+14.7, y+5.4, dat.mantenimientovalor.toString());
                        doc.text(x+14.7, y+5.8, dat.interes.toString());
                        doc.text(x+14.7, y+6.2, dat.multamora.toString());
                        doc.text(x+14.7, y+6.6, dat.multaincum.toString());
                        doc.text(x+14.7, y+7.0, dat.multaadmin.toString());
                        doc.text(x+16.5, y+6.5, dat.fechaminuta.toString());
                        /*fin parte uno*/
                        x=1.2;
                        y=8.3-0.5;
                        doc.text(x+1, y+2.5, dat.calle.toString());
                        doc.text(x+6, y+2.5, dat.alcaldia.toString());
                        doc.text(x+8, y+2.5, dat.codigocatastral.toString());
                        doc.text(x+11, y+2.5, dat.superficie.toString());
                        doc.text(x+14, y+2.5, dat.supcontruida.toString());
                        doc.text(x+15.5, y+2.5, dat.cantidad.toString());
                        doc.text(x+18.5, y+2.5, dat.tipo.toString());

                        doc.text(x+1, y+3.7, dat.nombrevendedor.toString());
                        doc.text(x+12, y+3.7, dat.civendedor.toString());
                        doc.text(x+15, y+3.7, dat.domiciliovendedor.toString());

                        doc.text(x+1, y+4.5, dat.nombrecomprador.toString());
                        doc.text(x+12, y+4.5, dat.cicomprador.toString());
                        doc.text(x+15, y+4.5, dat.domiciliocomprador.toString());

                        doc.text(x+1, y+5.8, dat.baseimponible.toString());
                        doc.text(x+4, y+5.8, dat.venta.toString());
                        doc.text(x+7, y+5.8, dat.cotizacion.toString());
                        doc.text(x+10, y+5.8, dat.liquido.toString());

                        doc.text(x+1, y+7, dat.montodeterminado.toString());
                        doc.text(x+3, y+7, dat.pagoanterior.toString());
                        doc.text(x+6, y+7, dat.tipocambio.toString());
                        doc.text(x+8, y+7, dat.formapago.toString());

                        doc.text(x+1, y+7.8, dat.totalpagar.toString());
                        doc.text(x+3, y+7.8, dat.texto.toString());
                        doc.text(x+11.5, y+7.8, dat.fecha.toString());

                        doc.text(x+14.7, y+5.4, dat.mantenimientovalor.toString());
                        doc.text(x+14.7, y+5.8, dat.interes.toString());
                        doc.text(x+14.7, y+6.2, dat.multamora.toString());
                        doc.text(x+14.7, y+6.6, dat.multaincum.toString());
                        doc.text(x+14.7, y+7.0, dat.multaadmin.toString());
                        doc.text(x+16.5, y+6.5, dat.fechaminuta.toString());
                        // /*fin parte dos*/
                        x=1.2;
                        y=16.8-0.5;
                        doc.text(x+1, y+2.5, dat.calle.toString());
                        doc.text(x+6, y+2.5, dat.alcaldia.toString());
                        doc.text(x+8, y+2.5, dat.codigocatastral.toString());
                        doc.text(x+11, y+2.5, dat.superficie.toString());
                        doc.text(x+14, y+2.5, dat.supcontruida.toString());
                        doc.text(x+15.5, y+2.5, dat.cantidad.toString());
                        doc.text(x+18.5, y+2.5, dat.tipo.toString());

                        doc.text(x+1, y+3.7, dat.nombrevendedor.toString());
                        doc.text(x+12, y+3.7, dat.civendedor.toString());
                        doc.text(x+15, y+3.7, dat.domiciliovendedor.toString());

                        doc.text(x+1, y+4.5, dat.nombrecomprador.toString());
                        doc.text(x+12, y+4.5, dat.cicomprador.toString());
                        doc.text(x+15, y+4.5, dat.domiciliocomprador.toString());

                        doc.text(x+1, y+5.8, dat.baseimponible.toString());
                        doc.text(x+4, y+5.8, dat.venta.toString());
                        doc.text(x+7, y+5.8, dat.cotizacion.toString());
                        doc.text(x+10, y+5.8, dat.liquido.toString());

                        doc.text(x+1, y+7, dat.montodeterminado.toString());
                        doc.text(x+3, y+7, dat.pagoanterior.toString());
                        doc.text(x+6, y+7, dat.tipocambio.toString());
                        doc.text(x+8, y+7, dat.formapago.toString());

                        doc.text(x+1, y+7.8, dat.totalpagar.toString());
                        doc.text(x+3, y+7.8, dat.texto.toString());
                        doc.text(x+11.5, y+7.8, dat.fecha.toString());

                        doc.text(x+14.7, y+5.4, dat.mantenimientovalor.toString());
                        doc.text(x+14.7, y+5.8, dat.interes.toString());
                        doc.text(x+14.7, y+6.2, dat.multamora.toString());
                        doc.text(x+14.7, y+6.6, dat.multaincum.toString());
                        doc.text(x+14.7, y+7.0, dat.multaadmin.toString());
                        doc.text(x+16.5, y+6.5, dat.fechaminuta.toString());
                        // /*fin parte tres*/
                        x=1.2;
                        y=25.2-0.5;

                        doc.text(x+1, y+2.5, dat.cantidad.toString());
                        doc.text(x+4, y+2.5, dat.codigocatastral.toString());
                        doc.text(x+7, y+2.5, dat.civendedor.toString());
                        doc.text(x+10, y+2.5, dat.alcaldia.toString());

                        doc.text(x+1, y+3.2, dat.nombrevendedor.toString());
                        doc.text(x+7, y+3.2, dat.domiciliovendedor.toString());

                        doc.text(x+1, y+4.1, dat.totalpagar.toString());
                        doc.text(x+4, y+4.1, dat.texto.toString());

                        doc.text(x+14, y+3.7, dat.fecha.toString());

                        // doc.addPage();
                        // doc.text(20, 20, 'Do you like that?');
                        doc.save('Tranferencia.pdf');
                    },fail:function (e){
                        // console.log(e);
                        alert('eror:',e);
                    }

                });
                }
                e.preventDefault();
                return false;
            });
            $('#accesorios').hide();
            $('#corresponde').hide();

            var deudas=false;
            $('#corresponde').click(function (){
                deudas=false;
                $('#accesorios').hide();
                $('#corresponde').hide();
                $('#mantenimiento').val('0');
                $('#interes').val('0');
            });
            $('#veficardias').click(function (e){
                let fecha1 = moment($('#fechminuta').val());
                let fecha2 = moment('{{date('Y-m-d')}}');
                let dias=fecha2.diff(fecha1, 'days');
                if (dias>10){
                    $('#dias').html("<span class='badge badge-danger text-white'>mas de 10 dias</span>")
                    deudas=true;
                    $('#accesorios').show();
                    $('#corresponde').show();
                }else{
                    $('#dias').html("<span class='badge badge-success text-white'>menos de 10 dias</span>")
                    deudas=false;
                    $('#accesorios').hide();
                    $('#corresponde').hide();
                }
            });
            // console.log('a');
            $('#spinner').hide('fast');
            // $('.js-example-basic-single').select2();
            $('#comun2').keyup(function (e){
                $('#paterno2').val('');
                $('#materno2').val('');
                $('#nombre2').val('');
                $('#domicilio2').val('');
                $.ajax({
                    url:'contribuyente/'+$(this).val(),
                    success:function (e){
                        // console.log(e);
                        if(e.length>0){
                            $('#paterno2').val(e[0].paterno);
                            $('#materno2').val(e[0].materno);
                            $('#nombre2').val(e[0].nombre);
                            $('#domicilio2').val(e[0].nombrecall);
                        }
                    }
                });
            });
            $('#inmueble').keyup(function (e){
                // console.log('a');
                $('#spinner').show('fast');
                $('#CodAut').html('');
                $('#nombrecall').val('');
                $('#numcasa').val('');
                $('#cod_ham').val('');
                $('#manzano').val('');
                $('#distrito').val('');
                $('#lote').val('');
                $('#superficie').val('');
                $('#sup_const').val('');
                $('#var1').val('');
                $.ajax({
                    url:'inmueble/'+$(this).val(),
                    success:function (e){
                        $('#spinner').hide('fast');
                        // console.log(e);
                        if (e.length>0){
                            let inmueble=e[0];
                            let contribuyente=e[1];
                            // console.log(contribuyente);
                            let var1="";
                            if(inmueble.var1==1){
                                var1='CASA';
                            }else if(inmueble.var1==2){
                                var1='LOTE';
                            }else if(inmueble.var1==3){
                                var1='DEPARTAMENTO';
                            }
                            $('#CodAut').html(inmueble.CodAut);
                            $('#nombrecall').val(inmueble.nombrecall);
                            $('#numcasa').val(inmueble.numcasa);
                            $('#cod_ham').val(contribuyente.cod_ham);
                            $('#manzano').val(inmueble.manzano);
                            $('#distrito').val(inmueble.distrito);
                            $('#lote').val(inmueble.lote);
                            $('#superficie').val(inmueble.superficie);
                            $('#sup_const').val(inmueble.sup_const);
                            $('#var1').val(var1);
                            $('#comun1').val(contribuyente.comun);
                            $('#paterno1').val(contribuyente.paterno);
                            $('#materno1').val(contribuyente.materno);
                            $('#nombre1').val(contribuyente.nombre);
                            $('#domicilio1').val(contribuyente.nombrecall);
                        }
                    }
                });
                e.preventDefault();
                return false;
            });

            $('#fl').hide();

            $.ajax({
                url:'transferencia/1',
                success:function (e){
                    // console.log(e);
                    // $('#ufv').val(e[0].coti)
                    $('#ufv').val(e[0].coti);
                    $('#tasapare').val(e[1].tasa);
                }
            })
            $('#imt,#pagado').keyup(function (){
                // console.log($(this).val())
                $('#saldo').val(parseFloat($('#imt').val())-parseFloat($('#pagado').val()));
            });
            function totpagar(){
                let totalpagar=parseFloat($('#liquitacion').val())+2 + parseFloat( $('#mantenimiento').val())+parseFloat($('#interes').val());
                $('#totalpagar').html( 'TOTAL   A  PAGAR: '+ totalpagar);
            }
            $('#baseimponible,#importeventa').keyup(function (){
                // console.log('a');
                // console.log(parseFloat( $('#baseimponible').val())*0.03);
                // return false;
                if ( parseFloat( $('#baseimponible').val())>parseFloat($('#importeventa').val())){
                    // console.log(parseFloat($('#baseimponible').val()));
                    $('#liquitacion').val(Math.round(parseFloat(($('#baseimponible').val())*0.03)));
                    totpagar();
                }else{
                    $('#liquitacion').val(Math.round(parseFloat(($('#importeventa').val())*0.03)));
                    totpagar();
                    // $('#imt').val($('#liquitacion').val());
                }
                // $('#saldo').val(parseFloat($('#imt').val())-parseFloat($('#pagado').val()));
            });
            $('#buscarminuta').click(function (){
                // if ($('#imt').val()==''){
                //     alert('Selecionar IMT');
                //     return false;
                // }
                $('#fl').show('fast');
                $('#ufvdia').val('');
                $('#mantenimiento').val('');
                $('#diasmora').val('');
                // console.log($(this).val());
                let data={
                    '_token':"{{ csrf_token() }}",
                    '_method':'PUT',
                    'fecha':$('#fechalimite').val()
                };
                $.ajax({
                    url:'transferencia/1',
                    type:'POST',
                    data:data,
                    success:function (e){
                        //console.log(e);
                        $('#fl').hide('fast');
                        if (e.length>0){
                            $('#ufvdia').val(e[0].coti)
                            let mv=(parseFloat($('#ufv').val()/parseFloat($('#ufvdia').val()))-1)* parseFloat($('#liquitacion').val()) ;
                            // return false;
                            // console.log(mv)
                            $('#mantenimiento').val(Math.round(mv) );
                            let fecha1 = moment($('#fechalimite').val());
                            let fecha2 = moment('{{date('Y-m-d')}}');
                            $('#diasmora').val(fecha2.diff(fecha1, 'days'))
                            let diasmora= parseFloat( $('#diasmora').val());
                            let tasapare= parseFloat( $('#tasapare').val());
                            let saldo= parseFloat( $('#liquitacion').val());
                            let mantenimiento= parseFloat( $('#mantenimiento').val());
                            let inte= ((diasmora/360)*(tasapare/100))*(saldo+mantenimiento);
                            $('#interes').val(Math.round(inte));
                            totpagar();
                        }
                    }
                })
            });
        }

    </script>
@endsection
