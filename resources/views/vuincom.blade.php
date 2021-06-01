@extends('layouts.principal')
@section('content')
    <div class="container">
        <div class="col-12">
            <h1 class="bg-cyan text-white text-center">Vutrat a Indcom</h1>
            <form class="row" id="fomulario">
                <div class="col-md-4">
                    <label for="bpadron" class="form-label">Padron</label>
                    <input type="text" class="form-control" name="bpadron" id="bpadron" required value="1-157-40043">
                </div>
                <div class="col-md-2">
                    <label for="comun1" class="form-label">Buscar</label> <br>
                    <button class="btn btn-info" type="submit" id='buscarcont' autofocus>
                        <i class="fa fa-search"></i> Buscar
                    </button>
                </div>
            </form>
        </div>
        <div class="col-12">
            <h6 class="bg-success text-white text-center">VUTRAT</h6>
            <form class="row" id="fomulario">
                <div class="col-md-2">
                    <label for="n_tramite" class="form-label">n_tramite</label>
                    <input type="text" class="form-control" name="n_tramite" id="n_tramite" placeholder="n_tramite"  >
                </div>
                <div class="col-md-2">
                    <label for="f_19" class="form-label">f_19</label>
                    <input type="text" class="form-control" name="f_19" id="f_19" placeholder="f_19"  >
                </div>
                <div class="col-md-2">
                    <label for="cod_acti" class="form-label">cod_acti</label>
                    <input type="text" class="form-control" name="cod_acti" id="cod_acti" placeholder="cod_acti"  >
                </div>
                <div class="col-md-2">
                    <label for="cod_sector" class="form-label">cod_sector</label>
                    <input type="text" class="form-control" name="cod_sector" id="cod_sector" placeholder="cod_sector"  >
                </div>
                <div class="col-md-2">
                    <label for="nom_acti" class="form-label">nom_acti</label>
                    <input type="text" class="form-control" name="nom_acti" id="nom_acti" placeholder="nom_acti"  >
                </div>
                <div class="col-md-2">
                    <label for="descrip" class="form-label">descrip</label>
                    <input type="text" class="form-control" name="descrip" id="descrip" placeholder="descrip"  >
                </div>
                <div class="col-md-2">
                    <label for="superficie" class="form-label">superficie</label>
                    <input type="text" class="form-control" name="superficie" id="superficie" placeholder="superficie"  >
                </div>
                <div class="col-md-2">
                    <label for="horario" class="form-label">horario</label>
                    <input type="text" class="form-control" name="horario" id="horario" placeholder="horario"  >
                </div>
                <div class="col-md-2">
                    <label for="a_paterno" class="form-label">a_paterno</label>
                    <input type="text" class="form-control" name="a_paterno" id="a_paterno" placeholder="a_paterno"  >
                </div>
                <div class="col-md-2">
                    <label for="a_materno" class="form-label">a_materno</label>
                    <input type="text" class="form-control" name="a_materno" id="a_materno" placeholder="a_materno"  >
                </div>
                <div class="col-md-2">
                    <label for="a_esposo" class="form-label">a_esposo</label>
                    <input type="text" class="form-control" name="a_esposo" id="a_esposo" placeholder="a_esposo"  >
                </div>
                <div class="col-md-2">
                    <label for="nombres" class="form-label">nombres</label>
                    <input type="text" class="form-control" name="nombres" id="nombres" placeholder="nombres"  >
                </div>
                <div class="col-md-2">
                    <label for="c_i" class="form-label">c_i</label>
                    <input type="text" class="form-control" name="c_i" id="c_i" placeholder="c_i"  >
                </div>
                <div class="col-md-2">
                    <label for="nit" class="form-label">nit</label>
                    <input type="text" class="form-control" name="nit" id="nit" placeholder="nit"  >
                </div>
                <div class="col-md-2">
                    <label for="pmc" class="form-label">pmc</label>
                    <input type="text" class="form-control" name="pmc" id="pmc" placeholder="pmc"  >
                </div>
                <div class="col-md-2">
                    <label for="zona_dom" class="form-label">zona_dom</label>
                    <input type="text" class="form-control" name="zona_dom" id="zona_dom" placeholder="zona_dom"  >
                </div>
                <div class="col-md-2">
                    <label for="n_dom" class="form-label">n_dom</label>
                    <input type="text" class="form-control" name="n_dom" id="n_dom" placeholder="n_dom"  >
                </div>
                <div class="col-md-2">
                    <label for="fono_dom" class="form-label">fono_dom</label>
                    <input type="text" class="form-control" name="fono_dom" id="fono_dom" placeholder="fono_dom"  >
                </div>
                <div class="col-md-2">
                    <label for="fono_of" class="form-label">fono_of</label>
                    <input type="text" class="form-control" name="fono_of" id="fono_of" placeholder="fono_of"  >
                </div>
                <div class="col-md-2">
                    <label for="casilla" class="form-label">casilla</label>
                    <input type="text" class="form-control" name="casilla" id="casilla" placeholder="casilla"  >
                </div>
                <div class="col-md-2">
                    <label for="fax" class="form-label">fax</label>
                    <input type="text" class="form-control" name="fax" id="fax" placeholder="fax"  >
                </div>
                <div class="col-md-2">
                    <label for="extrangero" class="form-label">extrangero</label>
                    <input type="text" class="form-control" name="extrangero" id="extrangero" placeholder="extrangero"  >
                </div>
                <div class="col-md-2">
                    <label for="cert_ext" class="form-label">cert_ext</label>
                    <input type="text" class="form-control" name="cert_ext" id="cert_ext" placeholder="cert_ext"  >
                </div>
                <div class="col-md-2">
                    <label for="n_dni" class="form-label">n_dni</label>
                    <input type="text" class="form-control" name="n_dni" id="n_dni" placeholder="n_dni"  >
                </div>
                <div class="col-md-2">
                    <label for="act_zona" class="form-label">act_zona</label>
                    <input type="text" class="form-control" name="act_zona" id="act_zona" placeholder="act_zona"  >
                </div>
                <div class="col-md-2">
                    <label for="act_barrio" class="form-label">act_barrio</label>
                    <input type="text" class="form-control" name="act_barrio" id="act_barrio" placeholder="act_barrio"  >
                </div>
                <div class="col-md-2">
                    <label for="act_c_av" class="form-label">act_c_av</label>
                    <input type="text" class="form-control" name="act_c_av" id="act_c_av" placeholder="act_c_av"  >
                </div>
                <div class="col-md-2">
                    <label for="act_e_ca" class="form-label">act_e_ca</label>
                    <input type="text" class="form-control" name="act_e_ca" id="act_e_ca" placeholder="act_e_ca"  >
                </div>
                <div class="col-md-2">
                    <label for="act_piso" class="form-label">act_piso</label>
                    <input type="text" class="form-control" name="act_piso" id="act_piso" placeholder="act_piso"  >
                </div>
                <div class="col-md-2">
                    <label for="act_fono" class="form-label">act_fono</label>
                    <input type="text" class="form-control" name="act_fono" id="act_fono" placeholder="act_fono"  >
                </div>
                <div class="col-md-2">
                    <label for="n_medidor_a" class="form-label">n_medidor_a</label>
                    <input type="text" class="form-control" name="n_medidor_a" id="n_medidor_a" placeholder="n_medidor_a"  >
                </div>
                <div class="col-md-2">
                    <label for="n_medidor_e" class="form-label">n_medidor_e</label>
                    <input type="text" class="form-control" name="n_medidor_e" id="n_medidor_e" placeholder="n_medidor_e"  >
                </div>
                <div class="col-md-2">
                    <label for="fachada" class="form-label">fachada</label>
                    <input type="text" class="form-control" name="fachada" id="fachada" placeholder="fachada"  >
                </div>
                <div class="col-md-2">
                    <label for="acera" class="form-label">acera</label>
                    <input type="text" class="form-control" name="acera" id="acera" placeholder="acera"  >
                </div>
                <div class="col-md-2">
                    <label for="luz" class="form-label">luz</label>
                    <input type="text" class="form-control" name="luz" id="luz" placeholder="luz"  >
                </div>
                <div class="col-md-2">
                    <label for="letreros" class="form-label">letreros</label>
                    <input type="text" class="form-control" name="letreros" id="letreros" placeholder="letreros"  >
                </div>
                <div class="col-md-2">
                    <label for="obs" class="form-label">obs</label>
                    <input type="text" class="form-control" name="obs" id="obs" placeholder="obs"  >
                </div>
                <div class="col-md-2">
                    <label for="establec" class="form-label">establec</label>
                    <input type="text" class="form-control" name="establec" id="establec" placeholder="establec"  >
                </div>
                <div class="col-md-2">
                    <label for="t_requi" class="form-label">t_requi</label>
                    <input type="text" class="form-control" name="t_requi" id="t_requi" placeholder="t_requi"  >
                </div>
                <div class="col-md-2">
                    <label for="req_1" class="form-label">req_1</label>
                    <input type="text" class="form-control" name="req_1" id="req_1" placeholder="req_1"  >
                </div>
                <div class="col-md-2">
                    <label for="req_2" class="form-label">req_2</label>
                    <input type="text" class="form-control" name="req_2" id="req_2" placeholder="req_2"  >
                </div>
                <div class="col-md-2">
                    <label for="req_3" class="form-label">req_3</label>
                    <input type="text" class="form-control" name="req_3" id="req_3" placeholder="req_3"  >
                </div>
                <div class="col-md-2">
                    <label for="req_4" class="form-label">req_4</label>
                    <input type="text" class="form-control" name="req_4" id="req_4" placeholder="req_4"  >
                </div>
                <div class="col-md-2">
                    <label for="req_5" class="form-label">req_5</label>
                    <input type="text" class="form-control" name="req_5" id="req_5" placeholder="req_5"  >
                </div>
                <div class="col-md-2">
                    <label for="req_6" class="form-label">req_6</label>
                    <input type="text" class="form-control" name="req_6" id="req_6" placeholder="req_6"  >
                </div>
                <div class="col-md-2">
                    <label for="req_7" class="form-label">req_7</label>
                    <input type="text" class="form-control" name="req_7" id="req_7" placeholder="req_7"  >
                </div>
                <div class="col-md-2">
                    <label for="req_8" class="form-label">req_8</label>
                    <input type="text" class="form-control" name="req_8" id="req_8" placeholder="req_8"  >
                </div>
                <div class="col-md-2">
                    <label for="req_9" class="form-label">req_9</label>
                    <input type="text" class="form-control" name="req_9" id="req_9" placeholder="req_9"  >
                </div>
                <div class="col-md-2">
                    <label for="f_22" class="form-label">f_22</label>
                    <input type="text" class="form-control" name="f_22" id="f_22" placeholder="f_22"  >
                </div>
                <div class="col-md-2">
                    <label for="comp" class="form-label">comp</label>
                    <input type="text" class="form-control" name="comp" id="comp" placeholder="comp"  >
                </div>
                <div class="col-md-2">
                    <label for="zona_trib" class="form-label">zona_trib</label>
                    <input type="text" class="form-control" name="zona_trib" id="zona_trib" placeholder="zona_trib"  >
                </div>
                <div class="col-md-2">
                    <label for="fecha_iniac" class="form-label">fecha_iniac</label>
                    <input type="text" class="form-control" name="fecha_iniac" id="fecha_iniac" placeholder="fecha_iniac"  >
                </div>
                <div class="col-md-2">
                    <label for="in_ge_trib" class="form-label">in_ge_trib</label>
                    <input type="text" class="form-control" name="in_ge_trib" id="in_ge_trib" placeholder="in_ge_trib"  >
                </div>
                <div class="col-md-2">
                    <label for="n_pmc_for" class="form-label">n_pmc_for</label>
                    <input type="text" class="form-control" name="n_pmc_for" id="n_pmc_for" placeholder="n_pmc_for"  >
                </div>
                <div class="col-md-2">
                    <label for="n_res_tec" class="form-label">n_res_tec</label>
                    <input type="text" class="form-control" name="n_res_tec" id="n_res_tec" placeholder="n_res_tec"  >
                </div>
                <div class="col-12 text-center pb-1">
                    <button class="btn btn-warning" type="button" style="width: 120px" id="cambiar"><i class="fa fa-edit"></i> Cambiar</button>
                    <button class="btn btn-info" type="button" style="width: 120px" id="addindcom"><i class="fa fa-plus-circle"></i> add Indcom</button>
                </div>
            </form>
            <h6 class="bg-info text-white text-center">INCOM</h6>
            <form class="row" id="fomulario">
                <div class="col-md-2">
                    <label for="npadron" class="form-label">npadron</label>
                    <input type="text" class="form-control" name="npadron" id="npadron" placeholder="npadron"  >
                </div>
                <div class="col-md-2">
                    <label for="paterno" class="form-label">paterno</label>
                    <input type="text" class="form-control" name="paterno" id="paterno" placeholder="paterno"  >
                </div>
                <div class="col-md-2">
                    <label for="materno" class="form-label">materno</label>
                    <input type="text" class="form-control" name="materno" id="materno" placeholder="materno"  >
                </div>
                <div class="col-md-2">
                    <label for="nombre" class="form-label">nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="nombre"  >
                </div>
                <div class="col-md-2">
                    <label for="cedula" class="form-label">cedula</label>
                    <input type="text" class="form-control" name="cedula" id="cedula" placeholder="cedula"  >
                </div>
                <div class="col-md-2">
                    <label for="ntelefono" class="form-label">ntelefono</label>
                    <input type="text" class="form-control" name="ntelefono" id="ntelefono" placeholder="ntelefono"  >
                </div>
                <div class="col-md-2">
                    <label for="ndireccion" class="form-label">ndireccion</label>
                    <input type="text" class="form-control" name="ndireccion" id="ndireccion" placeholder="ndireccion"  >
                </div>
                <div class="col-md-2">
                    <label for="nacionalid" class="form-label">nacionalid</label>
                    <input type="text" class="form-control" name="nacionalid" id="nacionalid" placeholder="nacionalid"  >
                </div>
                <div class="col-md-2">
                    <label for="nruc" class="form-label">nruc</label>
                    <input type="text" class="form-control" name="nruc" id="nruc" placeholder="nruc"  >
                </div>
                <div class="col-md-2">
                    <label for="nactdescri" class="form-label">nactdescri</label>
                    <input type="text" class="form-control" name="nactdescri" id="nactdescri" placeholder="nactdescri"  >
                </div>
                <div class="col-md-2">
                    <label for="nsector" class="form-label">nsector</label>
                    <input type="text" class="form-control" name="nsector" id="nsector" placeholder="nsector"  >
                </div>
                <div class="col-md-2">
                    <label for="nfechainic" class="form-label">nfechainic</label>
                    <input type="text" class="form-control" name="nfechainic" id="nfechainic" placeholder="nfechainic"  >
                </div>
                <div class="col-md-2">
                    <label for="apeesposo" class="form-label">apeesposo</label>
                    <input type="text" class="form-control" name="apeesposo" id="apeesposo" placeholder="apeesposo"  >
                </div>
                <div class="col-md-2">
                    <label for="nzona" class="form-label">nzona</label>
                    <input type="text" class="form-control" name="nzona" id="nzona" placeholder="nzona"  >
                </div>
                <div class="col-md-2">
                    <label for="nmts2" class="form-label">nmts2</label>
                    <input type="text" class="form-control" name="nmts2" id="nmts2" placeholder="nmts2"  >
                </div>
                <div class="col-md-2">
                    <label for="ndiract" class="form-label">ndiract</label>
                    <input type="text" class="form-control" name="ndiract" id="ndiract" placeholder="ndiract"  >
                </div>
                <div class="col-md-2">
                    <label for="formcaja" class="form-label">formcaja</label>
                    <input type="text" class="form-control" name="formcaja" id="formcaja" placeholder="formcaja"  >
                </div>
                <div class="col-md-2">
                    <label for="gest" class="form-label">gest</label>
                    <input type="text" class="form-control" name="gest" id="gest" placeholder="gest"  >
                </div>
                <div class="col-md-2">
                    <label for="form22" class="form-label">form22</label>
                    <input type="text" class="form-control" name="form22" id="form22" placeholder="form22"  >
                </div>
                <div class="col-md-2">
                    <label for="oper" class="form-label">oper</label>
                    <input type="text" class="form-control" name="oper" id="oper" placeholder="oper"  >
                </div>
                <div class="col-md-2">
                    <label for="fed" class="form-label">fed</label>
                    <input type="text" class="form-control" name="fed" id="fed" placeholder="fed"  >
                </div>
                <div class="col-md-2">
                    <label for="nufed" class="form-label">nufed</label>
                    <input type="text" class="form-control" name="nufed" id="nufed" placeholder="nufed"  >
                </div>
                <div class="col-md-2">
                    <label for="adeuda" class="form-label">adeuda</label>
                    <input type="text" class="form-control" name="adeuda" id="adeuda" placeholder="adeuda"  >
                </div>
                <div class="col-md-2">
                    <label for="bandera" class="form-label">bandera</label>
                    <input type="text" class="form-control" name="bandera" id="bandera" placeholder="bandera"  >
                </div>
                <div class="col-md-2">
                    <label for="asociado" class="form-label">asociado</label>
                    <input type="text" class="form-control" name="asociado" id="asociado" placeholder="asociado"  >
                </div>
                <div class="col-md-2">
                    <label for="nro_asoc" class="form-label">nro_asoc</label>
                    <input type="text" class="form-control" name="nro_asoc" id="nro_asoc" placeholder="nro_asoc"  >
                </div>
                <div class="col-md-2">
                    <label for="n_tug" class="form-label">n_tug</label>
                    <input type="text" class="form-control" name="n_tug" id="n_tug" placeholder="n_tug"  >
                </div>
                <div class="col-md-2">
                    <label for="n_preim" class="form-label">n_preim</label>
                    <input type="text" class="form-control" name="n_preim" id="n_preim" placeholder="n_preim"  >
                </div>
                <div class="col-md-2">
                    <label for="f_regi" class="form-label">f_regi</label>
                    <input type="text" class="form-control" name="f_regi" id="f_regi" placeholder="f_regi"  >
                </div>
                <div class="col-md-2">
                    <label for="bloqueo" class="form-label">bloqueo</label>
                    <input type="text" class="form-control" name="bloqueo" id="bloqueo" placeholder="bloqueo"  >
                </div>
                <div class="col-md-2">
                    <label for="l07" class="form-label">l07</label>
                    <input type="text" class="form-control" name="l07" id="l07" placeholder="l07"  >
                </div>
                <div class="col-md-2">
                    <label for="l07nmts2" class="form-label">l07nmts2</label>
                    <input type="text" class="form-control" name="l07nmts2" id="l07nmts2" placeholder="l07nmts2"  >
                </div>
                <div class="col-md-2">
                    <label for="l259" class="form-label">l259</label>
                    <input type="text" class="form-control" name="l259" id="l259" placeholder="l259"  >
                </div>
                <div class="col-md-2">
                    <label for="categtoria" class="form-label">categtoria</label>
                    <input type="text" class="form-control" name="categtoria" id="categtoria" placeholder="categtoria"  >
                </div>
                <div class="col-md-2">
                    <label for="horario" class="form-label">horario</label>
                    <input type="text" class="form-control" name="horario" id="horario" placeholder="horario"  >
                </div>
                <div class="col-md-2">
                    <label for="lfini" class="form-label">lfini</label>
                    <input type="text" class="form-control" name="lfini" id="lfini" placeholder="lfini"  >
                </div>
                <div class="col-md-2">
                    <label for="l080" class="form-label">l080</label>
                    <input type="text" class="form-control" name="l080" id="l080" placeholder="l080"  >
                </div>
                <div class="col-md-2">
                    <label for="hab" class="form-label">hab</label>
                    <input type="text" class="form-control" name="hab" id="hab" placeholder="hab"  >
                </div>
                <div class="col-12 text-center pb-1">
                    <button class="btn btn-success" type="button" style="width: 120px" id="addIndcom"><i class="fa fa-plus-circle"></i> Agregar</button>
                    <button class="btn btn-warning" type="button" style="width: 120px" id="updateIndcom"><i class="fa fa-edit"></i> Cambiar</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        window.onload=function (){
            $('#updateIndcom').click(function (){
                if ($('#bpadron').val()==''){
                    alert('debes colocar padron');
                    return false;
                }
                $.ajax({
                    url:'vuincom/1',
                    type:'POST',
                    data:{
                        '_token': "{{ csrf_token() }}",
                        '_method': "DELETE",
                        'CodAut':CodAuti,
                        'npadron':$('#npadron').val(),
                        'paterno':$('#paterno').val(),
                        'materno':$('#materno').val(),
                        'nombre':$('#nombre').val(),
                        'cedula':$('#cedula').val(),
                        'ntelefono':$('#ntelefono').val(),
                        'ndireccion':$('#ndireccion').val(),
                        'nacionalid':$('#nacionalid').val(),
                        'nruc':$('#nruc').val(),
                        'nactdescri':$('#nactdescri').val(),
                        'nsector':$('#nsector').val(),
                        'nfechainic':$('#nfechainic').val(),
                        'apeesposo':$('#apeesposo').val(),
                        'nzona':$('#nzona').val(),
                        'nmts2':$('#nmts2').val(),
                        'ndiract':$('#ndiract').val(),
                        'formcaja':$('#formcaja').val(),
                        'gest':$('#gest').val(),
                        'form22':$('#form22').val(),
                        'oper':$('#oper').val(),
                        'fed':$('#fed').val(),
                        'nufed':$('#nufed').val(),
                        'adeuda':$('#adeuda').val(),
                        'bandera':$('#bandera').val(),
                        'asociado':$('#asociado').val(),
                        'nro_asoc':$('#nro_asoc').val(),
                        'n_tug':$('#n_tug').val(),
                        'n_preim':$('#n_preim').val(),
                        'f_regi':$('#f_regi').val(),
                        'bloqueo':$('#bloqueo').val(),
                        'l07':$('#l07').val(),
                        'l07nmts2':$('#l07nmts2').val(),
                        'l259':$('#l259').val(),
                        'categtoria':$('#categtoria').val(),
                        'horario':$('#horario').val(),
                        'lfini':$('#lfini').val(),
                        'l080':$('#l080').val(),
                        'hab':$('#hab').val(),
                    },
                    success:function (e){
                        // console.log(e);
                        if (e==1){
                            alert('Modificado Correctamente!');
                        }else{
                            alert('Algo salio mal');
                        }
                    }
                })
            });
            $('#addIndcom').click(function (){
                if ($('#bpadron').val()==''){
                    alert('debes colocar padron');
                    return false;
                }
                $.ajax({
                    url:'vuincom/1',
                    type:'POST',
                    data:{
                        '_token': "{{ csrf_token() }}",
                        '_method': "PUT",
                        'npadron':$('#npadron').val(),
                        'paterno':$('#paterno').val(),
                        'materno':$('#materno').val(),
                        'nombre':$('#nombre').val(),
                        'cedula':$('#cedula').val(),
                        'ntelefono':$('#ntelefono').val(),
                        'ndireccion':$('#ndireccion').val(),
                        'nacionalid':$('#nacionalid').val(),
                        'nruc':$('#nruc').val(),
                        'nactdescri':$('#nactdescri').val(),
                        'nsector':$('#nsector').val(),
                        'nfechainic':$('#nfechainic').val(),
                        'apeesposo':$('#apeesposo').val(),
                        'nzona':$('#nzona').val(),
                        'nmts2':$('#nmts2').val(),
                        'ndiract':$('#ndiract').val(),
                        'formcaja':$('#formcaja').val(),
                        'gest':$('#gest').val(),
                        'form22':$('#form22').val(),
                        'oper':$('#oper').val(),
                        'fed':$('#fed').val(),
                        'nufed':$('#nufed').val(),
                        'adeuda':$('#adeuda').val(),
                        'bandera':$('#bandera').val(),
                        'asociado':$('#asociado').val(),
                        'nro_asoc':$('#nro_asoc').val(),
                        'n_tug':$('#n_tug').val(),
                        'n_preim':$('#n_preim').val(),
                        'f_regi':$('#f_regi').val(),
                        'bloqueo':$('#bloqueo').val(),
                        'l07':$('#l07').val(),
                        'l07nmts2':$('#l07nmts2').val(),
                        'l259':$('#l259').val(),
                        'categtoria':$('#categtoria').val(),
                        'horario':$('#horario').val(),
                        'lfini':$('#lfini').val(),
                        'l080':$('#l080').val(),
                        'hab':$('#hab').val(),
                    },
                    success:function (e){
                        // console.log(e);
                        if (e==1){
                                alert('Insertado Correctamente, precione buscar!');
                                // CodAuti='');
                                $('#npadron').val('');
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
                                $('#nfechainic').val('');
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
                        }else if (e==2) {
                            alert('NO Insertado YA EXISTE USUARIO!!');
                        }else{
                            alert('Algo salio mal');
                        }
                    }
                })
            });

            $('#cambiar').click(function (){
                if ($('#bpadron').val()==''){
                    alert('debes colocar padron');
                    return false;
                }
                $.ajax({
                    url:'vuincom',
                    type:'POST',
                    data:{
                        '_token': "{{ csrf_token() }}",
                        CodAut,
                        n_tramite:$('#n_tramite').val(),
                        f_19:$('#f_19').val(),
                        cod_acti:$('#cod_acti').val(),
                        cod_sector:$('#cod_sector').val(),
                        nom_acti:$('#nom_acti').val(),
                        descrip:$('#descrip').val(),
                        superficie:$('#superficie').val(),
                        horario:$('#horario').val(),
                        a_paterno:$('#a_paterno').val(),
                        a_materno:$('#a_materno').val(),
                        a_esposo:$('#a_esposo').val(),
                        nombres:$('#nombres').val(),
                        c_i:$('#c_i').val(),
                        nit:$('#nit').val(),
                        pmc:$('#pmc').val(),
                        zona_dom:$('#zona_dom').val(),
                        n_dom:$('#n_dom').val(),
                        fono_dom:$('#fono_dom').val(),
                        fono_of:$('#fono_of').val(),
                        casilla:$('#casilla').val(),
                        fax:$('#fax').val(),
                        extrangero:$('#extrangero').val(),
                        cert_ext:$('#cert_ext').val(),
                        n_dni:$('#n_dni').val(),
                        act_zona:$('#act_zona').val(),
                        act_barrio:$('#act_barrio').val(),
                        act_c_av:$('#act_c_av').val(),
                        act_e_ca:$('#act_e_ca').val(),
                        act_piso:$('#act_piso').val(),
                        act_fono:$('#act_fono').val(),
                        n_medidor_a:$('#n_medidor_a').val(),
                        n_medidor_e:$('#n_medidor_e').val(),
                        fachada:$('#fachada').val(),
                        acera:$('#acera').val(),
                        luz:$('#luz').val(),
                        letreros:$('#letreros').val(),
                        obs:$('#obs').val(),
                        establec:$('#establec').val(),
                        t_requi:$('#t_requi').val(),
                        req_1:$('#req_1').val(),
                        req_2:$('#req_2').val(),
                        req_3:$('#req_3').val(),
                        req_4:$('#req_4').val(),
                        req_5:$('#req_5').val(),
                        req_6:$('#req_6').val(),
                        req_7:$('#req_7').val(),
                        req_8:$('#req_8').val(),
                        req_9:$('#req_9').val(),
                        f_22:$('#f_22').val(),
                        comp:$('#comp').val(),
                        zona_trib:$('#zona_trib').val(),
                        fecha_iniac:$('#fecha_iniac').val(),
                        in_ge_trib:$('#in_ge_trib').val(),
                        n_pmc_for:$('#n_pmc_for').val(),
                        n_res_tec:$('#n_res_tec').val(),
                    },
                    success:function (e){
                        // console.log(e);
                        if (e==1){
                            alert('Modificado Correctamente');
                        }else{
                            alert('Algo salio mal');
                        }
                    }
                })
            });

            var CodAut,CodAuti;
            $('#fomulario').submit(function (){
                    CodAut=0;
                    CodAuti=0;
                    $('#buscarcont').html('<i class="fa fa-spinner"></i> Buscando...');
                    $('#n_tramite').val('');
                    $('#f_19').val('');
                    $('#cod_acti').val('');
                    $('#cod_sector').val('');
                    $('#nom_acti').val('');
                    $('#descrip').val('');
                    $('#superficie').val('');
                    $('#horario').val('');
                    $('#a_paterno').val('');
                    $('#a_materno').val('');
                    $('#a_esposo').val('');
                    $('#nombres').val('');
                    $('#c_i').val('');
                    $('#nit').val('');
                    $('#pmc').val('');
                    $('#zona_dom').val('');
                    $('#n_dom').val('');
                    $('#fono_dom').val('');
                    $('#fono_of').val('');
                    $('#casilla').val('');
                    $('#fax').val('');
                    $('#extrangero').val('');
                    $('#cert_ext').val('');
                    $('#n_dni').val('');
                    $('#act_zona').val('');
                    $('#act_barrio').val('');
                    $('#act_c_av').val('');
                    $('#act_e_ca').val('');
                    $('#act_piso').val('');
                    $('#act_fono').val('');
                    $('#n_medidor_a').val('');
                    $('#n_medidor_e').val('');
                    $('#fachada').val('');
                    $('#acera').val('');
                    $('#luz').val('');
                    $('#letreros').val('');
                    $('#obs').val('');
                    $('#establec').val('');
                    $('#t_requi').val('');
                    $('#req_1').val('');
                    $('#req_2').val('');
                    $('#req_3').val('');
                    $('#req_4').val('');
                    $('#req_5').val('');
                    $('#req_6').val('');
                    $('#req_7').val('');
                    $('#req_8').val('');
                    $('#req_9').val('');
                    $('#f_22').val('');
                    $('#comp').val('');
                    $('#zona_trib').val('');
                    $('#fecha_iniac').val('');
                    $('#in_ge_trib').val('');
                    $('#n_pmc_for').val('');
                    $('#n_res_tec').val('');

                    $('#npadron').val('');
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
                    $('#nfechainic').val('');
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

                $.ajax({
                    url:'/vuincom/1',
                    type:'GET',
                    data:{'_token': "{{ csrf_token() }}",'pmc':$('#bpadron').val()},
                    success:function (e){
                        // console.log(e[0]);
                        // return false;
                        $('#buscarcont').html('<i class="fa fa-search"></i> Buscar');
                        let vutrat=e[0];
                        let indcom=e[1];
                        if (vutrat!=null) {
                            CodAut = vutrat.CodAut;
                            $('#n_tramite').val(vutrat.n_tramite);
                            $('#f_19').val(vutrat.f_19);
                            $('#cod_acti').val(vutrat.cod_acti);
                            $('#cod_sector').val(vutrat.cod_sector);
                            $('#nom_acti').val(vutrat.nom_acti);
                            $('#descrip').val(vutrat.descrip);
                            $('#superficie').val(vutrat.superficie);
                            $('#horario').val(vutrat.horario);
                            $('#a_paterno').val(vutrat.a_paterno);
                            $('#a_materno').val(vutrat.a_materno);
                            $('#a_esposo').val(vutrat.a_esposo);
                            $('#nombres').val(vutrat.nombres);
                            $('#c_i').val(vutrat.c_i);
                            $('#nit').val(vutrat.nit);
                            $('#pmc').val(vutrat.pmc);
                            $('#zona_dom').val(vutrat.zona_dom);
                            $('#n_dom').val(vutrat.n_dom);
                            $('#fono_dom').val(vutrat.fono_dom);
                            $('#fono_of').val(vutrat.fono_of);
                            $('#casilla').val(vutrat.casilla);
                            $('#fax').val(vutrat.fax);
                            $('#extrangero').val(vutrat.extrangero);
                            $('#cert_ext').val(vutrat.cert_ext);
                            $('#n_dni').val(vutrat.n_dni);
                            $('#act_zona').val(vutrat.act_zona);
                            $('#act_barrio').val(vutrat.act_barrio);
                            $('#act_c_av').val(vutrat.act_c_av);
                            $('#act_e_ca').val(vutrat.act_e_ca);
                            $('#act_piso').val(vutrat.act_piso);
                            $('#act_fono').val(vutrat.act_fono);
                            $('#n_medidor_a').val(vutrat.n_medidor_a);
                            $('#n_medidor_e').val(vutrat.n_medidor_e);
                            $('#fachada').val(vutrat.fachada);
                            $('#acera').val(vutrat.acera);
                            $('#luz').val(vutrat.luz);
                            $('#letreros').val(vutrat.letreros);
                            $('#obs').val(vutrat.obs);
                            $('#establec').val(vutrat.establec);
                            $('#t_requi').val(vutrat.t_requi);
                            $('#req_1').val(vutrat.req_1);
                            $('#req_2').val(vutrat.req_2);
                            $('#req_3').val(vutrat.req_3);
                            $('#req_4').val(vutrat.req_4);
                            $('#req_5').val(vutrat.req_5);
                            $('#req_6').val(vutrat.req_6);
                            $('#req_7').val(vutrat.req_7);
                            $('#req_8').val(vutrat.req_8);
                            $('#req_9').val(vutrat.req_9);
                            $('#f_22').val(vutrat.f_22);
                            $('#comp').val(vutrat.comp);
                            $('#zona_trib').val(vutrat.zona_trib);
                            $('#fecha_iniac').val(vutrat.fecha_iniac);
                            $('#in_ge_trib').val(vutrat.in_ge_trib);
                            $('#n_pmc_for').val(vutrat.n_pmc_for);
                            $('#n_res_tec').val(vutrat.n_res_tec);
                        }
                        if (indcom!=null){
                            CodAuti=indcom.CodAut;
                            $('#npadron').val(indcom.npadron);
                            $('#paterno').val(indcom.paterno);
                            $('#materno').val(indcom.materno);
                            $('#nombre').val(indcom.nombre);
                            $('#cedula').val(indcom.cedula);
                            $('#ntelefono').val(indcom.ntelefono);
                            $('#ndireccion').val(indcom.ndireccion);
                            $('#nacionalid').val(indcom.nacionalid);
                            $('#nruc').val(indcom.nruc);
                            $('#nactdescri').val(indcom.nactdescri);
                            $('#nsector').val(indcom.nsector);
                            $('#nfechainic').val(indcom.nfechainic);
                            $('#apeesposo').val(indcom.apeesposo);
                            $('#nzona').val(indcom.nzona);
                            $('#nmts2').val(indcom.nmts2);
                            $('#ndiract').val(indcom.ndiract);
                            $('#formcaja').val(indcom.formcaja);
                            $('#gest').val(indcom.gest);
                            $('#form22').val(indcom.form22);
                            $('#oper').val(indcom.oper);
                            $('#fed').val(indcom.fed);
                            $('#nufed').val(indcom.nufed);
                            $('#adeuda').val(indcom.adeuda);
                            $('#bandera').val(indcom.bandera);
                            $('#asociado').val(indcom.asociado);
                            $('#nro_asoc').val(indcom.nro_asoc);
                            $('#n_tug').val(indcom.n_tug);
                            $('#n_preim').val(indcom.n_preim);
                            $('#f_regi').val(indcom.f_regi);
                            $('#bloqueo').val(indcom.bloqueo);
                            $('#l07').val(indcom.l07);
                            $('#l07nmts2').val(indcom.l07nmts2);
                            $('#l259').val(indcom.l259);
                            $('#categtoria').val(indcom.categtoria);
                            $('#horario').val(indcom.horario);
                            $('#lfini').val(indcom.lfini);
                            $('#l080').val(indcom.l080);
                            $('#hab').val(indcom.hab);
                        }
                        // mostrar();
                    }
                })
                return false;
            });
            $('#addindcom').click(function (){
                $('#npadron').val($('#pmc').val());
                $('#paterno').val($('#a_paterno').val());
                $('#materno').val($('#a_materno').val());
                $('#nombre').val($('#nombres').val());
                $('#cedula').val($('#c_i').val());
                $('#ntelefono').val($('#fono_of').val());
                $('#ndireccion').val($('#act_c_av').val());
                $('#nacionalid').val('');
                $('#nruc').val('');
                $('#nactdescri').val($('#descrip').val());
                $('#nsector').val('');
                $('#nfechainic').val($('#fecha_iniac').val());
                $('#apeesposo').val($('#a_esposo').val());
                $('#nzona').val($('#zona_trib').val());
                $('#nmts2').val($('#superfice').val());
                $('#ndiract').val($('#act_e_ca').val());
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
                // console.log('a');
            });
            $('#modificar').submit(function (){
                // console.log('a');
                let data={
                    '_method': "PUT",
                    '_token': "{{ csrf_token() }}",
                    'fecha':$('#fecha2').val(),
                    'coti':$('#coti2').val(),
                    'tipodia':$('#tipodia2').val()
                };
                $('#contenido').html('');
                $.ajax({
                    url:'/ufv/'+CodAut,
                    type:'POST',
                    data:data,
                    success:function (e){
                        // console.log(e);
                        $('#exampleModal').modal('hide');

                        mostrar();
                    }
                })
                return false;
            });
            var CodAut;
            $('#contenido').on('click','.modificar',function (e){
                CodAut=$(this).attr('id-CodAut');
                $('#fecha2').val($(this).attr('id-fecha'));
                $('#coti2').val($(this).attr('id-coti'));
                $('#tipodia2').val($(this).attr('id-tipodia'));
                $('#exampleModal').modal('show');
                //console.log($(this).attr('id-CodAut'));
                e.preventDefault();
            })
            // mostrar();
            function mostrar(){
                $('#contenido').html('');
                table.destroy();
                $.ajax({
                    url:'/ufv/1',
                    success:function (e){
                        // console.log(e);
                        let t='';
                        e.forEach(r=>{
                            t+="<tr>" +
                                "<td>"+r.CodAut+"</td>"+
                                "<td>"+r.fecha+"</td>"+
                                "<td>"+r.coti+"</td>"+
                                "<td>"+r.tipodia+"</td>"+
                                "<td><button id-CodAut='"+r.CodAut+"' id-fecha='"+r.fecha+"' id-coti='"+r.coti+"' id-tipodia='"+r.tipodia+"' class='modificar btn btn-warning'><i class='fa fa-edit'></i> Modificar</button></td>"+
                                "</tr>";
                        });
                        $('#contenido').html(t);
                        table=$('#zero_config').DataTable({
                            "order": [[ 0, "desc" ]]
                        });
                    }
                })
            };
        }


    </script>
@endsection
