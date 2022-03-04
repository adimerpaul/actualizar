@extends('layouts.principal')
@section('content')
<div class="container">
        <h1>Buscar y/ o actualizar contribuyente</h1>
<form class="row g-3">
  <div class="col-md-4">
    <label for="comun1" class="form-label">N documuento</label>
    <input type="text" class="form-control" id="comun1" required >
  </div>
  <div class="col-md-8 ">
      <label for="buscarcont" >Buscar</label><br>
    <button class="btn btn-success" type="button" id='buscarcont'> <i class="fa fa-search"></i> Buscar</button>
  </div>
</form>
<form method='POST' action='/modificar/' id='mod1'>
@csrf
@method('PUT')
    <div class="form-row">
        <div class="form-group col-md-2">
            <label for="tipodocumento">Tipo documento</label>
            <!--                                    <input type="text" class="form-control" id="tipodocumento" placeholder="Tipo Documento">-->
            <select name="tipodocumento" id="tipodocumento" name="tipodocumento" class="form-control" required disabled>
                <option value="1">Carnet identidad</option>
                <option value="2">Passaporte</option>
            </select>
        </div>
        <div class="form-group col-md-2">
            <label for="ci">Carnet de identidad</label>
            <input type="text" class="form-control" id="ci" name="ci" placeholder="Carnet de identidad" required >
        </div>
        <div class="form-group col-md-2">
            <label for="expedido">Expedido</label>
            <!--                                    <input type="text" class="form-control" id="expedido" placeholder="Tipo Documento">-->
            <select name="expedido" id="expedido" name="expedido" class="form-control" required >
                <option value="O">ORURO</option>
                <option value="L">LA PAZ</option>
                <option value="P">POTOSI</option>
                <option value="A">PANDO</option>
                <option value="B">BENI</option>
                <option value="T">SANTA CRUZ</option>
                <option value="J">TARIJA</option>
                <option value="H">COCHABAMBA</option>
                <option value="C">SUCRE</option>
            </select>
        </div>
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
            <label for="telefono">Celular</label>
            <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Celular" >
        </div>
        <div class="form-group col-md-2">
            <label for="cod_ham">cod_ham</label>
            <select  class="form-control"  name="cod_ham" id="cod_ham" required>
                <?php
                    $re=DB::select('select codigo, alcaldia from pmcodham order By alcaldia desc');
                    foreach($re as $row){
                    echo '<option value="'.$row->codigo.'">'.$row->alcaldia.'</option>';}
                    ?>
            </select>
        </div>
        <div class="form-group col-md-2">
            <label for="cod_barrio">cod_barrio</label>
            <select  class="form-control"   name="cod_barrio" id="cod_barrio" required>
            <?php
                    $re=DB::table('pmbarrio')->select('barrio','codigo')->get();
                    foreach($re as $row){
                    echo '<option value="'.$row->codigo.'">'.$row->barrio.'</option>';}
                    ?>
            </select>
        </div>
        <div class="form-group col-md-2">
            <label for="tipocalle">tipocalle</label>
            <select class="form-control" id="tipocalle" name="tipocalle" required>
                <option value="CA">CALLE</option>
                <option value="AV">AVENIDA</option>
                <option value="PL">PLAZA</option>
                <option value="PJ">PASAJE</option>
            </select>
        </div>
        <div class="form-group col-md-2">
            <label for="nombrecall">nombrecall</label>
            <input type="text" class="form-control" id="nombrecall" name="nombrecall" placeholder="nombrecall" >
        </div>
        <div class="form-group col-md-2">
            <label for="numcasa">numcasa</label>
            <input type="text" class="form-control" id="numcasa" name="numcasa" placeholder="numcasa" >
        </div>
        <div class="form-group col-md-6">
            <label for="descrip">descrip</label>
            <input type="text" class="form-control" id="descrip" name="descrip" placeholder="descrip" >
        </div>
        <div class="form-group col-md-3">
            <label for="nacimient">nacimient</label>
            <input type="date" class="form-control" id="nacimient" name="nacimient" placeholder="nacimient">
        </div>
    </div>
    <button type="submit" class="btn btn-success btn-block"  ><i class="fa fa-check-circle"></i> Modificar</button>
</form>
<div class="row">
    <div class="col-md-12">
        <form id="frminmu" class="row">
            <div class="col-md-4">
                <label for="cantidad" class="form-label">cantidad</label>
                <input type="text" class="form-control" id="cantidad" required >
            </div>

            <div class="col-md-2">
                <label for="bandera">bandera</label>
                <input type="text" class="form-control" id="bandera" name="bandera" placeholder="bandera" >
            </div>
            <div class="col-md-6 ">
                <label for="buscarcont" >Buscar</label><br>
                <button class="btn btn-warning" type="submit" id='buscarcont'><i class="fa fa-search"></i> Buscar</button>
            </div>
        </form>
    </div>
    <div class="col-md-12">
        <form id="frmupdateinmu" class="row">
            <div class="col-md-2">
                <label for="flag_inmu">flag_inmu</label>
                <input type="text" class="form-control" id="flag_inmu" name="flag_inmu" placeholder="flag_inmu" >
            </div>
            <div class="col-md-2">
                <label for="gestion">gestion</label>
                <input type="text" class="form-control" id="gestion" name="gestion" placeholder="gestion" >
            </div>

            <div class="col-md-2">
                <label for="cod_barrioinmu">cod_barrioinmu</label>
                <input type="text" class="form-control" id="cod_barrioinmu" name="cod_barrioinmu" placeholder="cod_barrioinmu" >
            </div>
            <div class="col-md-2">
                <label for="tipocalleinmu">tipocalleinmu</label>
                <input type="text" class="form-control" id="tipocalleinmu" name="tipocalleinmu" placeholder="tipocalleinmu" >
            </div>
            <div class="col-md-2">
                <label for="nombrecallinmu">nombrecallinmu</label>
                <input type="text" class="form-control" id="nombrecallinmu" name="nombrecallinmu" placeholder="nombrecallinmu" >
            </div>
            <div class="col-md-2">
                <label for="numcasainmu">numcasainmu</label>
                <input type="text" class="form-control" id="numcasainmu" name="numcasainmu" placeholder="numcasainmu" >
            </div>
            <div class="col-md-2">
                <label for="bloque">bloque</label>
                <input type="text" class="form-control" id="bloque" name="bloque" placeholder="bloque" >
            </div>
            <div class="col-md-2">
                <label for="piso">piso</label>
                <input type="text" class="form-control" id="piso" name="piso" placeholder="piso" >
            </div>
            <div class="col-md-2">
                <label for="numdpto">numdpto</label>
                <input type="text" class="form-control" id="numdpto" name="numdpto" placeholder="numdpto" >
            </div>
            <div class="col-md-2">
                <label for="zona">zona</label>
                <input type="text" class="form-control" id="zona" name="zona" placeholder="zona" >
            </div>
            <div class="col-md-2">
                <label for="distrito">distrito</label>
                <input type="text" class="form-control" id="distrito" name="distrito" placeholder="distrito" >
            </div>
            <div class="col-md-2">
                <label for="manzano">manzano</label>
                <input type="text" class="form-control" id="manzano" name="manzano" placeholder="manzano" >
            </div>
            <div class="col-md-2">
                <label for="lote">lote</label>
                <input type="text" class="form-control" id="lote" name="lote" placeholder="lote" >
            </div>
            <div class="col-md-2">
                <label for="sublote">sublote</label>
                <input type="text" class="form-control" id="sublote" name="sublote" placeholder="sublote" >
            </div>
            <div class="col-md-2">
                <label for="descripinmu">descripinmu</label>
                <input type="text" class="form-control" id="descripinmu" name="descripinmu" placeholder="descripinmu" >
            </div>
            <div class="col-md-2">
                <label for="mat_vias">mat_vias</label>
                <input type="text" class="form-control" id="mat_vias" name="mat_vias" placeholder="mat_vias" >
            </div>
            <div class="col-md-2">
                <label for="luz">luz</label>
                <input type="text" class="form-control" id="luz" name="luz" placeholder="luz" >
            </div>
            <div class="col-md-2">
                <label for="agua">agua</label>
                <input type="text" class="form-control" id="agua" name="agua" placeholder="agua" >
            </div>
            <div class="col-md-2">
                <label for="alcantari">alcantari</label>
                <input type="text" class="form-control" id="alcantari" name="alcantari" placeholder="alcantari" >
            </div>
            <div class="col-md-2">
                <label for="telefonoinmu">telefonoinmu</label>
                <input type="text" class="form-control" id="telefonoinmu" name="telefonoinmu" placeholder="telefonoinmu" >
            </div>
            <div class="col-md-2">
                <label for="superficie">superficie</label>
                <input type="text" class="form-control" id="superficie" name="superficie" placeholder="superficie" >
            </div>
            <div class="col-md-2">
                <label for="inclinac">inclinac</label>
                <input type="text" class="form-control" id="inclinac" name="inclinac" placeholder="inclinac" >
            </div>
            <div class="col-md-2">
                <label for="viv_unifa">viv_unifa</label>
                <input type="text" class="form-control" id="viv_unifa" name="viv_unifa" placeholder="viv_unifa" >
            </div>
            <div class="col-md-2">
                <label for="prop_horiz">prop_horiz</label>
                <input type="text" class="form-control" id="prop_horiz" name="prop_horiz" placeholder="prop_horiz" >
            </div>
            <div class="col-md-2">
                <label for="sup_const">sup_const</label>
                <input type="text" class="form-control" id="sup_const" name="sup_const" placeholder="sup_const" >
            </div>
            <div class="col-md-2">
                <label for="var1">var1</label>
                <input type="text" class="form-control" id="var1" name="var1" placeholder="var1" >
            </div>
            <div class="col-md-2">
                <label for="var2">var2</label>
                <input type="text" class="form-control" id="var2" name="var2" placeholder="var2" >
            </div>
            <div class="col-md-2">
                <label for="deuda">deuda</label>
                <input type="text" class="form-control" id="deuda" name="deuda" placeholder="deuda" >
            </div>
            <div class="col-md-2">
                <label for="var3">var3</label>
                <input type="text" class="form-control" id="var3" name="var3" placeholder="var3" >
            </div>
            <div class="col-md-2">
                <label for="exento">exento</label>
                <input type="text" class="form-control" id="exento" name="exento" placeholder="exento" >
            </div>
            <div class="col-md-2">
                <label for="revalor">revalor</label>
                <input type="text" class="form-control" id="revalor" name="revalor" placeholder="revalor" >
            </div>
            <div class="col-md-2">
                <label for="cs_manz">cs_manz</label>
                <input type="text" class="form-control" id="cs_manz" name="cs_manz" placeholder="cs_manz" >
            </div>
            <div class="col-md-2">
                <label for="cs_lote">cs_lote</label>
                <input type="text" class="form-control" id="cs_lote" name="cs_lote" placeholder="cs_lote" >
            </div>
            <div class="col-md-2">
                <label for="cod_caja">cod_caja</label>
                <input type="text" class="form-control" id="cod_caja" name="cod_caja" placeholder="cod_caja" >
            </div>
            <div class="col-md-2">
                <label for="bandera">bandera</label>
                <input type="text" class="form-control" id="bandera" name="bandera" placeholder="bandera" >
            </div>
            <div class="col-md-2">
                <label for="valor_ha">valor_ha</label>
                <input type="text" class="form-control" id="valor_ha" name="valor_ha" placeholder="valor_ha" >
            </div>
            <div class="col-md-2">
                <label for="fecha_reg">fecha_reg</label>
                <input type="text" class="form-control" id="fecha_reg" name="fecha_reg" placeholder="fecha_reg" >
            </div>
            <div class="col-md-2">
                <label for="hora_reg">hora_reg</label>
                <input type="text" class="form-control" id="hora_reg" name="hora_reg" placeholder="hora_reg" >
            </div>
            <div class="col-md-2">
                <label for="control">control</label>
                <input type="text" class="form-control" id="control" name="control" placeholder="control" >
            </div>
            <div class="col-md-2">
                <label for="n_informe">n_informe</label>
                <input type="text" class="form-control" id="n_informe" name="n_informe" placeholder="n_informe" >
            </div>
            <div class="col-md-2">
                <label for="controlex">controlex</label>
                <input type="text" class="form-control" id="controlex" name="controlex" placeholder="controlex" >
            </div>
            <div class="col-md-2">
                <label for="docex">docex</label>
                <input type="text" class="form-control" id="docex" name="docex" placeholder="docex" >
            </div>
            <div class="col-md-2">
                <label for="l07">l07</label>
                <input type="text" class="form-control" id="l07" name="l07" placeholder="l07" >
            </div>
            <div class="col-md-2">
                <label for="l07terreno">l07terreno</label>
                <input type="text" class="form-control" id="l07terreno" name="l07terreno" placeholder="l07terreno" >
            </div>
            <div class="col-md-2">
                <label for="l07constru">l07constru</label>
                <input type="text" class="form-control" id="l07constru" name="l07constru" placeholder="l07constru" >
            </div>
            <div class="col-md-2">
                <label for="l080">l080</label>
                <input type="text" class="form-control" id="l080" name="l080" placeholder="l080" >
            </div>
            <div class="col-md-2">
                <label for="l080terren">l080terren</label>
                <input type="text" class="form-control" id="l080terren" name="l080terren" placeholder="l080terren" >
            </div>
            <div class="col-md-2">
                <label for="l080constr">l080constr</label>
                <input type="text" class="form-control" id="l080constr" name="l080constr" placeholder="l080constr" >
            </div>
            <div class="col-md-2">
                <label for="complemento">complemento</label>
                <input type="text" class="form-control" id="complemento" name="complemento" placeholder="complemento" >
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-warning btn-block"  ><i class="fa fa-check-circle"></i> Modificar</button>
            </div>
        </form>
    </div>

</div>
</div>
<script>
    window.onload=function (){
        $('#frmupdateinmu').submit(function (){
            $.ajax({
                url: "/inmu",
                type:'POST',
                data:{
                    '_token': "{{ csrf_token() }}",
                    cantidad:$('#cantidad').val(),
                    flag_inmu:$('#flag_inmu').val(),
                    gestion:$('#gestion').val(),
                    var1:$('#var1').val(),
                    cod_barrio:$('#cod_barrioinmu').val(),
                    tipocalle:$('#tipocalleinmu').val(),
                    nombrecall:$('#nombrecallinmu').val(),
                    numcasa:$('#numcasainmu').val(),
                    bloque:$('#bloque').val(),
                    piso:$('#piso').val(),
                    numdpto:$('#numdpto').val(),
                    zona:$('#zona').val(),
                    distrito:$('#distrito').val(),
                    manzano:$('#manzano').val(),
                    lote:$('#lote').val(),
                    sublote:$('#sublote').val(),
                    descrip:$('#descripinmu').val(),
                    mat_vias:$('#mat_vias').val(),
                    luz:$('#luz').val(),
                    agua:$('#agua').val(),
                    alcantari:$('#alcantari').val(),
                    telefono:$('#telefonoinmu').val(),
                    superficie:$('#superficie').val(),
                    inclinac:$('#inclinac').val(),
                    viv_unifa:$('#viv_unifa').val(),
                    prop_horiz:$('#prop_horiz').val(),
                    sup_const:$('#sup_const').val(),
                    var2:$('#var2').val(),
                    deuda:$('#deuda').val(),
                    var3:$('#var3').val(),
                    exento:$('#exento').val(),
                    revalor:$('#revalor').val(),
                    cs_manz:$('#cs_manz').val(),
                    cs_lote:$('#cs_lote').val(),
                    cod_caja:$('#cod_caja').val(),
                    bandera:$('#bandera').val(),
                    valor_ha:$('#valor_ha').val(),
                    fecha_reg:$('#fecha_reg').val(),
                    hora_reg:$('#hora_reg').val(),
                    control:$('#control').val(),
                    n_informe:$('#n_informe').val(),
                    controlex:$('#controlex').val(),
                    docex:$('#docex').val(),
                    l07:$('#l07').val(),
                    l07terreno:$('#l07terreno').val(),
                    l07constru:$('#l07constru').val(),
                    l080:$('#l080').val(),
                    l080terren:$('#l080terren').val(),
                    l080constr:$('#l080constr').val(),
                    complemento:$('#complemento').val(),
                },
                success: function (res) {
                    console.log(res[0]);
                }
            })
            return false
        })
        $('#frminmu').submit(function (){
                $('#flag_inmu').val('')
                $('#gestion').val('')
                $('#var1').val('')
                $('#cod_barrioinmu').val('')
                $('#tipocalleinmu').val('')
                $('#nombrecallinmu').val('')
                $('#numcasainmu').val('')
                $('#bloque').val('')
                $('#piso').val('')
                $('#numdpto').val('')
                $('#zona').val('')
                $('#distrito').val('')
                $('#manzano').val('')
                $('#lote').val('')
                $('#sublote').val('')
                $('#descripinmu').val('')
                $('#mat_vias').val('')
                $('#luz').val('')
                $('#agua').val('')
                $('#alcantari').val('')
                $('#telefonoinmu').val('')
                $('#superficie').val('')
                $('#inclinac').val('')
                $('#viv_unifa').val('')
                $('#prop_horiz').val('')
                $('#sup_const').val('')
                $('#var2').val('')
                $('#deuda').val('')
                $('#var3').val('')
                $('#exento').val('')
                $('#revalor').val('')
                $('#cs_manz').val('')
                $('#cs_lote').val('')
                $('#cod_caja').val('')
                $('#bandera').val('')
                $('#valor_ha').val('')
                $('#fecha_reg').val('')
                $('#hora_reg').val('')
                $('#control').val('')
                $('#n_informe').val('')
                $('#controlex').val('')
                $('#docex').val('')
                $('#l07').val('')
                $('#l07terreno').val('')
                $('#l07constru').val('')
                $('#l080').val('')
                $('#l080terren').val('')
                $('#l080constr').val('')
                $('#complemento').val('')
            $.ajax({
                url: "/inmu/" + $('#cantidad').val(),
                success: function (res) {
                    console.log(res[0]);
                    if (res.length!=0){
                        $('#flag_inmu').val(res[0].flag_inmu)
                        $('#gestion').val(res[0].gestion)
                        $('#var1').val(res[0].var1)
                        $('#cod_barrioinmu').val(res[0].cod_barrio)
                        $('#tipocalleinmu').val(res[0].tipocalle)
                        $('#nombrecallinmu').val(res[0].nombrecall)
                        $('#numcasainmu').val(res[0].numcasa)
                        $('#bloque').val(res[0].bloque)
                        $('#piso').val(res[0].piso)
                        $('#numdpto').val(res[0].numdpto)
                        $('#zona').val(res[0].zona)
                        $('#distrito').val(res[0].distrito)
                        $('#manzano').val(res[0].manzano)
                        $('#lote').val(res[0].lote)
                        $('#sublote').val(res[0].sublote)
                        $('#descripinmu').val(res[0].descrip)
                        $('#mat_vias').val(res[0].mat_vias)
                        $('#luz').val(res[0].luz)
                        $('#agua').val(res[0].agua)
                        $('#alcantari').val(res[0].alcantari)
                        $('#telefonoinmu').val(res[0].telefono)
                        $('#superficie').val(res[0].superficie)
                        $('#inclinac').val(res[0].inclinac)
                        $('#viv_unifa').val(res[0].viv_unifa)
                        $('#prop_horiz').val(res[0].prop_horiz)
                        $('#sup_const').val(res[0].sup_const)
                        $('#var2').val(res[0].var2)
                        $('#deuda').val(res[0].deuda)
                        $('#var3').val(res[0].var3)
                        $('#exento').val(res[0].exento)
                        $('#revalor').val(res[0].revalor)
                        $('#cs_manz').val(res[0].cs_manz)
                        $('#cs_lote').val(res[0].cs_lote)
                        $('#cod_caja').val(res[0].cod_caja)
                        $('#bandera').val(res[0].bandera)
                        $('#valor_ha').val(res[0].valor_ha)
                        $('#fecha_reg').val(res[0].fecha_reg)
                        $('#hora_reg').val(res[0].hora_reg)
                        $('#control').val(res[0].control)
                        $('#n_informe').val(res[0].n_informe)
                        $('#controlex').val(res[0].controlex)
                        $('#docex').val(res[0].docex)
                        $('#l07').val(res[0].l07)
                        $('#l07terreno').val(res[0].l07terreno)
                        $('#l07constru').val(res[0].l07constru)
                        $('#l080').val(res[0].l080)
                        $('#l080terren').val(res[0].l080terren)
                        $('#l080constr').val(res[0].l080constr)
                        $('#complemento').val(res[0].complemento)
                    }
                }
            })
            return false
        })
        $('#buscarcont').click(function(){
            // console.log($('#comun1').val());
            $.ajax({
                url: "/datoscontrib2/"+$('#comun1').val(),
                success: function (response) {
                    // console.log(response);
                    if(response.length!=0){
                        var row=response[0];
                        $('#tipodocumento').val(row['tipodocum']);
                        $('#ci').val(row['comun']);
                        $('#mod1').attr('action',"/modificar/"+row['comun']);
                        $('#expedido').val(row['expedido']);
                        $('#paterno').val(row['paterno']);
                        $('#materno').val(row['materno']);
                        $('#nombre').val(row['nombre']);
                        $('#telefono').val(row['telefono']);
                        $('#cod_ham').val(row['cod_ham']);
                        $('#cod_barrio').val(row['cod_barrio']);
                        $('#tipocalle').val(row['tipocalle']);
                        $('#nombrecall').val(row['nombrecall']);
                        $('#numcasa').val(row['numcasa']);
                        $('#descrip').val(row['descrip']);
                        $('#nacimient').val(row['nacimient'].substr(0,10));}
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
        })
    }


</script>
@endsection
