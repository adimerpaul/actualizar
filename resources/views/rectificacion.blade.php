@extends('layouts.principal')
@section('content')
    <div class="container">
        <h1 class="text-center bg-warning text-white mt-1">Impuesto municipales a las tranferencias R bienes inmuebles</h1>
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
                                <label for="form1800">form1800 <small class="text-muted"></small></label>
                                <input disabled type="text" class="form-control " id="form1800" placeholder="form1800" name="form1800">
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label for="tranferencia_id">tranferencia_id <small class="text-muted"></small></label>
                                <input disabled type="text"  class="form-control " id="tranferencia_id" placeholder="tranferencia_id" name="tranferencia_id">
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label for="l080">l080 <small class="text-muted"></small></label>
                                <input disabled type="text" class="form-control " id="l080" placeholder="l080" name="l080">
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label for="cantidad">cantidad <small class="text-muted"></small></label>
                                <input disabled type="text" class="form-control " id="cantidad" placeholder="cantidad">
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label for="calle">calle <small class="text-muted"></small></label>
                                <input disabled type="text" class="form-control " id="calle" placeholder="calle">
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label for="alcaldia">alcaldia <small class="text-muted"></small></label>
                                <input disabled type="text" class="form-control " id="alcaldia" placeholder="alcaldia">
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label for="codigocatastral">codigocatastral <small class="text-muted"></small></label>
                                <input  type="text" class="form-control " id="codigocatastral" placeholder="codigocatastral">
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label for="superficie">superficie <small class="text-muted"></small></label>
                                <input  type="text" class="form-control " id="superficie" placeholder="superficie">
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label for="supcontruida">supcontruida <small class="text-muted"></small></label>
                                <input  type="text" class="form-control " id="supcontruida" placeholder="supcontruida">
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label for="tipo">tipo <small class="text-muted"></small></label>
                                <input disabled type="text" class="form-control " id="tipo" placeholder="tipo">
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label for="nombrevendedor">nombrevendedor <small class="text-muted"></small></label>
                                <input  type="text" class="form-control " id="nombrevendedor" placeholder="nombrevendedor">
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label for="civendedor">civendedor <small class="text-muted"></small></label>
                                <input disabled type="text" class="form-control " id="civendedor" placeholder="civendedor">
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label for="domiciliovendedor">domiciliovendedor <small class="text-muted"></small></label>
                                <input disabled type="text" class="form-control " id="domiciliovendedor" placeholder="domiciliovendedor">
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label for="nombrecomprador">nombrecomprador <small class="text-muted"></small></label>
                                <input  type="text" class="form-control " id="nombrecomprador" placeholder="nombrecomprador">
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label for="cicomprador">cicomprador <small class="text-muted"></small></label>
                                <input disabled type="text" class="form-control " id="cicomprador" placeholder="cicomprador">
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label for="domiciliocomprador">domiciliocomprador <small class="text-muted"></small></label>
                                <input disabled type="text" class="form-control " id="domiciliocomprador" placeholder="domiciliocomprador">
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label for="baseimponible">baseimponible <small class="text-muted"></small></label>
                                <input disabled type="text" class="form-control " id="baseimponible" placeholder="baseimponible">
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label for="venta">venta <small class="text-muted"></small></label>
                                <input disabled type="text" class="form-control " id="venta" placeholder="venta">
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label for="cotizacion">cotizacion <small class="text-muted"></small></label>
                                <input disabled type="text" class="form-control " id="cotizacion" placeholder="cotizacion">
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label for="liquido">liquido <small class="text-muted"></small></label>
                                <input disabled type="text" class="form-control " id="liquido" placeholder="liquido">
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label for="texto">texto <small class="text-muted"></small></label>
                                <input disabled type="text" class="form-control " id="texto" placeholder="texto">
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label for="mantenimientovalor">mantenimientovalor <small class="text-muted"></small></label>
                                <input disabled type="text" class="form-control " id="mantenimientovalor" placeholder="mantenimientovalor">
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label for="interes">interes <small class="text-muted"></small></label>
                                <input disabled type="text" class="form-control " id="interes" placeholder="interes">
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label for="multamora">multamora <small class="text-muted"></small></label>
                                <input disabled type="text" class="form-control " id="multamora" placeholder="multamora">
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label for="multaincum">multaincum <small class="text-muted"></small></label>
                                <input disabled type="text" class="form-control " id="multaincum" placeholder="multaincum">
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label for="multaadmin">multaadmin <small class="text-muted"></small></label>
                                <input disabled type="text" class="form-control " id="multaadmin" placeholder="multaadmin">
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group text-danger">
                                <label for="montodeterminado">montodeterminado <small class="text-muted"></small></label>
                                <input disabled type="text" class="form-control " id="montodeterminado" placeholder="montodeterminado">
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label for="pagoanterior">pagoanterior <small class="text-muted"></small></label>
                                <input disabled type="text" class="form-control " id="pagoanterior" placeholder="pagoanterior">
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label for="totalpagar">totalpagar <small class="text-muted"></small></label>
                                <input disabled type="text" class="form-control " id="totalpagar" placeholder="totalpagar">
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label for="tipocambio">tipocambio <small class="text-muted"></small></label>
                                <input disabled type="text" class="form-control " id="tipocambio" placeholder="tipocambio">
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label for="formapago">formapago <small class="text-muted"></small></label>
                                <input disabled type="text" class="form-control " id="formapago" placeholder="formapago">
                            </div>
                        </div>
                        <div class="col-sm-2 text-danger">
                            <div class="form-group">
                                <label for="fechaminuta">fechaminuta <small class="text-muted"></small></label>
                                <input disabled type="text" class="form-control " id="fechaminuta" placeholder="fechaminuta">
                            </div>
                        </div>

                        <div class="col-sm-2 text-danger">
                            <div class="form-group">
                                <label for="diasmorar">diasmorar <small class="text-muted"></small></label>
                                <input disabled type="text" class="form-control " id="diasmorar" placeholder="diasmorar">
                            </div>
                        </div>
{{--                        <div class="col-sm-2">--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="fechamulta">fechamulta <small class="text-muted"></small></label>--}}
{{--                                <input disabled type="text" class="form-control " id="fechamulta" placeholder="fechamulta">--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
                <div class="col-sm-12">
                    <h5 class="card-title mb-0">Determinacion de la base imponible y del impuesto</h5>
                </div>
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label for="form1800r">form1800r <small class="text-muted"></small></label>
                                <input type="text" class="form-control " id="form1800r"  placeholder="form1800r" required>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label for="baseimponibler">baseimponibler <small class="text-muted"></small></label>
                                <input type="text" class="form-control " id="baseimponibler" value="0" placeholder="baseimponibler" required>
                            </div>
                        </div>

{{--                        <div class="col-sm-2">--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="importeventa">importeventa <small class="text-muted"></small></label>--}}
{{--                                <input type="text" class="form-control " id="importeventa" value="0" placeholder="importeventa" required>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label for="liquitacion">liquitacion <small class="text-muted"></small></label>
                                <input disabled type="text" class="form-control " id="liquitacion" value="0" placeholder="liquitacion">
                            </div>
                        </div>
                        <div class="col-sm-2 text-danger">
                            <div class="form-group">
                                <label for="saldo">saldo <small class="text-muted"></small></label>
                                <input type="text" class="form-control " id="saldo" value="0" placeholder="saldo" required>
                            </div>
                        </div>
{{--                        <div class="col-sm-3">--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="fechminuta">fechminuta <button id="veficardias" type="button" class="btn btn-danger btn-sm"><i class="fa fa-plus-square"></i></button> <span id="dias" class="text-muted"></span></label>--}}
{{--                                <input  type="date" class="form-control" value="{{date('Y-m-d')}}" id="fechminuta" value="0" placeholder="fechminuta">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-1">--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="fechminuta">Corresponde?  <span id="dias" class="text-muted"></span></label>--}}
{{--                                <button id="corresponde" type="button" class="btn btn-warning"><i class="fa fa-trash"></i></button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
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
                                        <label for="interesr">Interes <small class="text-muted"></small></label>
                                        <input disabled type="text" class="form-control " id="interesr" value="0" placeholder="interesr">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group text-danger">
                                        <label for="l080r ">l080r <small class="text-muted"></small></label>
                                        {{--                                    <input disabled type="text" class="form-control " id="l080r" value="0" placeholder="l080r">--}}
                                        <select class="form-control" name="l080r" id="l080r">
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
                    <label id="totalpagar2">TOTAL  A PAGAR</label>
                </div>
                <div class="col-sm-12">
                    <button  type="submit" class="btn btn-success btn-block"><i class="fa fa-plus-circle"></i> Registrar </button>
                </div>
            </form>
        </div>

    </div>
    <script>
        window.onload=function (){
            function totpagar(){
                // let totalpagar2=parseFloat($('#saldo').val())+2 + parseFloat( $('#mantenimiento').val())+parseFloat($('#interesr').val());
                let totalpagar2=parseFloat(parseFloat( $('#mantenimiento').val()));
                // console.log( $('#totalpagar2').html());
                $('#totalpagar2').html( 'TOTAL   A  PAGAR: '+ totalpagar2);
            }

            $('#l080r').change(function (){
                if ($(this).val()=='true'){
                    $('#interesr').val(0);
                    totpagar();
                }
            });
            $('#formulario').submit(function (e){
                if ($('#superfice').val()==''){
                    alert('debes seleccionar inmueble');
                    return false;
                }
                if (confirm("Seguro de guardar?")){
                    let data= {
                        '_token': "{{ csrf_token() }}",
                        'cantidad': $('#inmueble').val(),
                        'form1800': $('#form1800r').val(),
                        'l080': $('#l080').val(),
                        'calle': $('#calle').val(),
                        'tipo': $('#tipo').val(),
                        'alcaldia': $('#alcaldia').val(),
                        'codigocatastral': $('#codigocatastral').val(),
                        'superficie': $('#superficie').val(),
                        'supcontruida': $('#supcontruida').val(),
                        'nombrevendedor': $('#nombrevendedor').val(),
                        'civendedor': $('#civendedor').val(),
                        'fechaminuta': $('#fechaminuta').val(),
                        'fechamulta': $('#fechalimite').val(),
                        'domiciliovendedor': $('#domiciliovendedor').val(),
                        'nombrecomprador':$('#nombrecomprador').val(),
                        'cicomprador':$('#cicomprador').val(),
                        'domiciliocomprador':$('#domiciliocomprador').val(),
                        'baseimponible':$('#baseimponibler').val(),
                        'venta':$('#venta').val(),
                        'liquido':$('#liquitacion').val(),
                        // 'montodeterminado':$('#saldo').val(),
                        'montodeterminado':0,
                        'pagoanterior':$('#montodeterminado').val(),
                        'liquitacion':$('#liquitacion').val(),
                        'mantenimientovalor':$('#mantenimiento').val(),
                        // 'interes':$('#interesr').val(),
                        'interes':0,
                        'tranferencia_id':$('#tranferencia_id').val(),
                    }
                    // console.log(data);
                    $.ajax({
                        url:'rectificacion',
                        type:'POST',
                        data:data,
                        success:function (e){
                            // console.log(e)
                            let dat=e[0];
                            var doc = new jsPDF('p','cm','legal')
                            // console.log(dat);
                            doc.setFont("courier");
                            doc.setFontSize(11);
                            var x=0.2,y=0;
                            console.log(dat);
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
                            x=0.2;
                            y=8.3;
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
                            x=0.2;
                            y=16.8;
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
                            x=0.2;
                            y=25.2;

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
                            doc.save('Rectificacion.pdf');
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
                        $('#form1800').val('')
                        $('#l080').val('')
                        $('#cantidad').val('')
                        $('#calle').val('')
                        $('#alcaldia').val('')
                        $('#codigocatastral').val('')
                        $('#superficie').val('')
                        $('#supcontruida').val('')
                        $('#tipo').val('')
                        $('#nombrevendedor').val('')
                        $('#civendedor').val('')
                        $('#domicioliovendedor').val('')
                        $('#nombrecomprador').val('')
                        $('#cicomprador').val('')
                        $('#domiciliocomprador').val('')
                        $('#baseimponible').val('')
                        $('#venta').val('')
                        $('#cotizacion').val('')
                        $('#liquido').val('')
                        $('#texto').val('')
                        $('#mantenimientovalor').val('')
                        $('#interes').val('')
                        $('#multamora').val('')
                        $('#multaincum').val('')
                        $('#multaadmin').val('')
                        $('#montodeterminado').val('')
                        $('#pagoanterior').val('')
                        $('#totalpagar').val('')
                        $('#tipocambio').val('')
                        $('#formapago').val('')
                        $('#fechaminuta').val('')
                        $('#fechamulta').val('')
                        $('#tranferencia_id').val('')
                        $('#spinner').show('fast');
                $.ajax({
                    url:'rectificacion/'+$(this).val(),
                    success:function (e){
                        $('#spinner').hide('fast');
                        // console.log(e);
                        if (e.length>0){
                            $('#form1800').val(e[0].form1800);
                            $('#l080').val(e[0].l080);
                            $('#cantidad').val(e[0].cantidad);
                            $('#calle').val(e[0].calle);
                            $('#alcaldia').val(e[0].alcaldia);
                            $('#codigocatastral').val(e[0].codigocatastral);
                            $('#superficie').val(e[0].superficie);
                            $('#supcontruida').val(e[0].supcontruida);
                            $('#tipo').val(e[0].tipo);
                            $('#nombrevendedor').val(e[0].nombrevendedor);
                            $('#civendedor').val(e[0].civendedor);
                            // console.log(e[0].domicioliovendedor);
                            $('#domiciliovendedor').val(e[0].domiciliovendedor);
                            $('#nombrecomprador').val(e[0].nombrecomprador);
                            $('#cicomprador').val(e[0].cicomprador);
                            $('#domiciliocomprador').val(e[0].domiciliocomprador);
                            $('#baseimponible').val(e[0].baseimponible);
                            $('#venta').val(e[0].venta);
                            $('#cotizacion').val(e[0].cotizacion);
                            $('#liquido').val(e[0].liquido);
                            $('#texto').val(e[0].texto);
                            $('#mantenimientovalor').val(e[0].mantenimientovalor);
                            $('#interes').val(e[0].interes);
                            $('#multamora').val(e[0].multamora);
                            $('#multaincum').val(e[0].multaincum);
                            $('#multaadmin').val(e[0].multaadmin);
                            $('#montodeterminado').val(e[0].montodeterminado);
                            $('#pagoanterior').val(e[0].pagoanterior);
                            $('#totalpagar').val(e[0].totalpagar);
                            $('#tipocambio').val(e[0].tipocambio);
                            $('#formapago').val(e[0].formapago);
                            $('#fechaminuta').val(e[0].fechaminuta);
                            $('#fechamulta').val(e[0].fechamulta);
                            $('#tranferencia_id').val(e[0].id)
                            let fecha1 = moment($('#fechaminuta').val());
                            let fecha2 = moment('{{date('Y-m-d')}}');
                            if (fecha2.diff(fecha1, 'days')>10){
                                $('#diasmorar').val('MULTA '+fecha2.diff(fecha1, 'days'));
                                $('#accesorios').show('fast');
                            }else{
                                $('#diasmorar').val(fecha2.diff(fecha1, 'days'));
                                $('#accesorios').hide('fast');
                            }

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
            // $('#imt,#pagado').keyup(function (){
            //     // console.log($(this).val())
            //     $('#saldo').val(parseFloat($('#imt').val())-parseFloat($('#pagado').val()));
            // });
            $('#baseimponibler,#importeventa').keyup(function (){
                // console.log('a');
                // console.log(parseFloat( $('#baseimponibler').val())*0.03);
                // return false;
                // if ( parseFloat( $('#baseimponibler').val())>parseFloat($('#importeventa').val())){
                    // console.log(parseFloat($('#baseimponibler').val()));
                    $('#liquitacion').val(Math.round(parseFloat(($('#baseimponibler').val())*0.03)));
                    let saldo=Math.round(parseFloat($('#liquitacion').val())-parseFloat($('#montodeterminado').val()));
                    $('#saldo').val(saldo);
                    totpagar();
                    // $('#imt').val($('#liquitacion').val());
                // }else{
                //     $('#liquitacion').val(Math.round(parseFloat(($('#importeventa').val())*0.03)));
                //     // $('#imt').val($('#liquitacion').val());
                // }
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
                            let mv=(parseFloat($('#ufv').val()/parseFloat($('#ufvdia').val()))-1)* parseFloat($('#saldo').val()) ;
                            // return false;
                            // console.log(mv)
                            $('#mantenimiento').val(Math.round(mv));
                            let fecha1 = moment($('#fechalimite').val());
                            let fecha2 = moment('{{date('Y-m-d')}}');
                            $('#diasmora').val(fecha2.diff(fecha1, 'days'))
                            let diasmora= parseFloat( $('#diasmora').val());
                            let tasapare= parseFloat( $('#tasapare').val());
                            let saldo= parseFloat( $('#saldo').val());
                            let mantenimiento= parseFloat( $('#mantenimiento').val());
                            // console.log(diasmora+' '+tasapare+' '+saldo+' '+mantenimiento)
                            let i= ((diasmora/360)*(tasapare/100))*(saldo+mantenimiento);
                            $('#interesr').val( Math.round(i) );
                            totpagar();
                        }
                    }
                })
            });
        }

    </script>
@endsection
