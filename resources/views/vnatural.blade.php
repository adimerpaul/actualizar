@extends('layouts.principal')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="bg-cyan text-white text-center">Vutrat Naturales</h1>
                <form class="row" id="fomulario">
{{--                    @csrf--}}
                    <div class="col-md-4">
                        <label for="tramite" class="form-label">N Tramite/PMC</label>
                        <input type="text" class="form-control" name="tramite" id="tramite" required >
                    </div>
                    <div class="col-md-2">
                        <label for="buscarcont" class="form-label">Buscar</label> <br>
                        <button class="btn btn-primary" type="submit" id='buscarcont'><i class="fa fa-search"></i> Buscar</button>
                    </div>
                </form>
                <br>
                <form class="row" method='POST' action='/modvnatur/'>
                @csrf
                @method('PUT')
                    <div class="col-md-2">
                        <label for="f_19" class="form-label">f_19</label>
                        <input type="text" class="form-control" name="f_19" id="f_19" placeholder="f_19" >
                        <input type="hidden" name="CodAut" class="CodAut" required>
                    </div>
                    <div class="col-md-2">
                        <label for="cod_acti" class="form-label">cod_acti</label>
                        <input type="text" class="form-control" name="cod_acti" id="cod_acti" placeholder="cod_acti" >
                    </div>
                    <div class="col-md-2">
                        <label for="cod_sector" class="form-label">cod_sector</label>
                        <input type="text" class="form-control" name="cod_sector" id="cod_sector" placeholder="cod_sector" >
                    </div>
                    <div class="col-md-2">
                        <label for="nom_acti" class="form-label">nom_acti</label>
                        <input type="text" class="form-control" name="nom_acti" id="nom_acti" placeholder="nom_acti" >
                    </div>
                    <div class="col-md-2">
                        <label for="descrip" class="form-label">descrip</label>
                        <input type="text" class="form-control" name="descrip" id="descrip" placeholder="descrip" >
                    </div>
                    <div class="col-md-2">
                        <label for="superficie" class="form-label">superficie</label>
                        <input type="text" class="form-control" name="superficie" id="superficie" placeholder="superficie" >
                    </div>
                    <div class="col-md-2">
                        <label for="horario" class="form-label">horario</label>
                        <input type="text" class="form-control" name="horario" id="horario" placeholder="horario" >
                    </div>
                    <div class="col-md-2">
                        <label for="a_paterno" class="form-label">a_paterno</label>
                        <input type="text" class="form-control" name="a_paterno" id="a_paterno" placeholder="a_paterno" >
                    </div>
                    <div class="col-md-2">
                        <label for="a_materno" class="form-label">a_materno</label>
                        <input type="text" class="form-control" name="a_materno" id="a_materno" placeholder="a_materno" >
                    </div>
                    <div class="col-md-2">
                        <label for="a_esposo" class="form-label">a_esposo</label>
                        <input type="text" class="form-control" name="a_esposo" id="a_esposo" placeholder="a_esposo" >
                    </div>
                    <div class="col-md-2">
                        <label for="nombres" class="form-label">nombres</label>
                        <input type="text" class="form-control" name="nombres" id="nombres" placeholder="nombres" >
                    </div>
                    <div class="col-md-2">
                        <label for="c_i" class="form-label">c_i</label>
                        <input type="text" class="form-control" name="c_i" id="c_i" placeholder="c_i" >
                    </div>
                    <div class="col-md-2">
                        <label for="nit" class="form-label">nit</label>
                        <input type="text" class="form-control" name="nit" id="nit" placeholder="nit" >
                    </div>
                    <div class="col-md-2">
                        <label for="pmc" class="form-label">pmc</label>
                        <input type="text" class="form-control" name="pmc" id="pmc" placeholder="pmc" >
                    </div>
                    <div class="col-md-2">
                        <label for="zona_dom" class="form-label">zona_dom</label>
                        <input type="text" class="form-control" name="zona_dom" id="zona_dom" placeholder="zona_dom" >
                    </div>
                    <div class="col-md-2">
                        <label for="calle_dom" class="form-label">calle_dom</label>
                        <input type="text" class="form-control" name="calle_dom" id="calle_dom" placeholder="calle_dom" >
                    </div>
                    <div class="col-md-2">
                        <label for="n_dom" class="form-label">n_dom</label>
                        <input type="text" class="form-control" name="n_dom" id="n_dom" placeholder="n_dom" >
                    </div>
                    <div class="col-md-2">
                        <label for="fono_dom" class="form-label">fono_dom</label>
                        <input type="text" class="form-control" name="fono_dom" id="fono_dom" placeholder="fono_dom" >
                    </div><div class="col-md-2">
                        <label for="fono_of" class="form-label">fono_of</label>
                        <input type="text" class="form-control" name="fono_of" id="fono_of" placeholder="fono_of" >
                    </div>
                    <div class="col-md-2">
                        <label for="casilla" class="form-label">casilla</label>
                        <input type="text" class="form-control" name="casilla" id="casilla" placeholder="casilla" >
                    </div>
                    <div class="col-md-2">
                        <label for="fax" class="form-label">fax</label>
                        <input type="text" class="form-control" name="fax" id="fax" placeholder="fax" >
                    </div>
                    <div class="col-md-2">
                        <label for="extrangero" class="form-label">extrangero</label>
                        <input type="text" class="form-control" name="extrangero" id="extrangero" placeholder="extrangero" >
                    </div>
                    <div class="col-md-2">
                        <label for="cert_ext" class="form-label">cert_ext</label>
                        <input type="text" class="form-control" name="cert_ext" id="cert_ext" placeholder="cert_ext" >
                    </div>
                    <div class="col-md-2">
                        <label for="n_dni" class="form-label">n_dni</label>
                        <input type="text" class="form-control" name="n_dni" id="n_dni" placeholder="n_dni" >
                    </div>
                    <div class="col-md-2">
                        <label for="act_zona" class="form-label">act_zona</label>
                        <input type="text" class="form-control" name="act_zona" id="act_zona" placeholder="act_zona" >
                    </div>
                    <div class="col-md-2">
                        <label for="act_barrio" class="form-label">act_barrio</label>
                        <input type="text" class="form-control" name="act_barrio" id="act_barrio" placeholder="act_barrio" >
                    </div>
                    <div class="col-md-2">
                        <label for="act_c_av" class="form-label">act_c_av</label>
                        <input type="text" class="form-control" name="act_c_av" id="act_c_av" placeholder="act_c_av" >
                    </div>
                    <div class="col-md-2">
                        <label for="act_e_ca" class="form-label">act_e_ca</label>
                        <input type="text" class="form-control" name="act_e_ca" id="act_e_ca" placeholder="act_e_ca" >
                    </div>
                    <div class="col-md-2">
                        <label for="act_piso" class="form-label">act_piso</label>
                        <input type="text" class="form-control" name="act_piso" id="act_piso" placeholder="act_piso" >
                    </div>
                    <div class="col-md-2">
                        <label for="act_fono" class="form-label">act_fono</label>
                        <input type="text" class="form-control" name="act_fono" id="act_fono" placeholder="act_fono" >
                    </div>
                    <div class="col-md-2">
                        <label for="n_medidor_a" class="form-label">n_medidor_a</label>
                        <input type="text" class="form-control" name="n_medidor_a" id="n_medidor_a" placeholder="n_medidor_a" >
                    </div>
                    <div class="col-md-2">
                        <label for="n_medidor_e" class="form-label">n_medidor_e</label>
                        <input type="text" class="form-control" name="n_medidor_e" id="n_medidor_e" placeholder="n_medidor_e" >
                    </div>
                    <div class="col-md-2">
                        <label for="fachada" class="form-label">fachada</label>
                        <input type="text" class="form-control" name="fachada" id="fachada" placeholder="fachada" >
                    </div>
                    <div class="col-md-2">
                        <label for="acera" class="form-label">acera</label>
                        <input type="text" class="form-control" name="acera" id="acera" placeholder="acera" >
                    </div>
                    <div class="col-md-2">
                        <label for="luz" class="form-label">luz</label>
                        <input type="text" class="form-control" name="luz" id="luz" placeholder="luz" >
                    </div>
                    <div class="col-md-2">
                        <label for="letreros" class="form-label">letreros</label>
                        <input type="text" class="form-control" name="letreros" id="letreros" placeholder="letreros" >
                    </div>
                    <div class="col-md-2">
                        <label for="obs" class="form-label">obs</label>
                        <input type="text" class="form-control" name="obs" id="obs" placeholder="obs" >
                    </div>
                    <div class="col-md-2">
                        <label for="establec" class="form-label">establec</label>
                        <input type="text" class="form-control" name="establec" id="establec" placeholder="establec" >
                    </div>
                    <div class="col-md-2">
                        <label for="t_requi" class="form-label">t_requi</label>
                        <input type="text" class="form-control" name="t_requi" id="t_requi" placeholder="t_requi" >
                    </div>
                    <div class="col-md-2">
                        <label for="req_1" class="form-label">req_1</label>
                        <input type="text" class="form-control" name="req_1" id="req_1" placeholder="req_1" >
                    </div>
                    <div class="col-md-2">
                        <label for="req_2" class="form-label">req_2</label>
                        <input type="text" class="form-control" name="req_2" id="req_2" placeholder="req_2" >
                    </div>
                    <div class="col-md-2">
                        <label for="req_3" class="form-label">req_3</label>
                        <input type="text" class="form-control" name="req_3" id="req_3" placeholder="req_3" >
                    </div>
                    <div class="col-md-2">
                        <label for="req_4" class="form-label">req_4</label>
                        <input type="text" class="form-control" name="req_4" id="req_4" placeholder="req_4" >
                    </div>
                    <div class="col-md-2">
                        <label for="req_5" class="form-label">req_5</label>
                        <input type="text" class="form-control" name="req_5" id="req_5" placeholder="req_5" >
                    </div>
                    <div class="col-md-2">
                        <label for="req_6" class="form-label">req_6</label>
                        <input type="text" class="form-control" name="req_6" id="req_6" placeholder="req_6" >
                    </div>
                    <div class="col-md-2">
                        <label for="req_7" class="form-label">req_7</label>
                        <input type="text" class="form-control" name="req_7" id="req_7" placeholder="req_7" >
                    </div>
                    <div class="col-md-2">
                        <label for="req_8" class="form-label">req_8</label>
                        <input type="text" class="form-control" name="req_8" id="req_8" placeholder="req_8" >
                    </div>
                    <div class="col-md-2">
                        <label for="req_9" class="form-label">req_9</label>
                        <input type="text" class="form-control" name="req_9" id="req_9" placeholder="req_9" >
                    </div>
                    <div class="col-md-2">
                        <label for="f_22" class="form-label">f_22</label>
                        <input type="text" class="form-control" name="f_22" id="f_22" placeholder="f_22" >
                    </div>
                    <div class="col-md-2">
                        <label for="comp" class="form-label">comp</label>
                        <input type="text" class="form-control" name="comp" id="comp" placeholder="comp" >
                    </div>
                    <div class="col-md-2">
                        <label for="zona_trib" class="form-label">zona_trib</label>
                        <input type="text" class="form-control" name="zona_trib" id="zona_trib" placeholder="zona_trib" >
                    </div>
                    <div class="col-md-2">
                        <label for="fecha_iniac" class="form-label">fecha_iniac</label>
                        <input type="text" class="form-control" name="fecha_iniac" id="fecha_iniac" placeholder="fecha_iniac" >
                    </div>
                    <div class="col-md-2">
                        <label for="in_ge_trib" class="form-label">in_ge_trib</label>
                        <input type="text" class="form-control" name="in_ge_trib" id="in_ge_trib" placeholder="in_ge_trib" >
                    </div>
                    <div class="col-md-2">
                        <label for="n_pmc_for" class="form-label">n_pmc_for</label>
                        <input type="text" class="form-control" name="n_pmc_for" id="n_pmc_for" placeholder="n_pmc_for" >
                    </div>
                    <div class="col-md-2">
                        <label for="n_res_tec" class="form-label">n_res_tec</label>
                        <input type="text" class="form-control" name="n_res_tec" id="n_res_tec" placeholder="n_res_tec" >
                    </div>

{{--                    <div class="col-md-3">--}}
{{--                        <label for="a_esposo" class="form-label">Apellido esposo</label>--}}
{{--                        <input type="text" class="form-control" name="a_esposo" id="a_esposo" placeholder="Apellido esposo" maxlength='15'>--}}
{{--                        <input type="hidden" name="codaut" id="codaut" required>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-3">--}}
{{--                        <label for="a_paterno" class="form-label">Apellido paterno</label>--}}
{{--                        <input type="text" class="form-control" name="a_paterno" id="a_paterno" placeholder="Apellido paterno" maxlength='15'>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-3">--}}
{{--                        <label for="a_materno" class="form-label">Apellido materno</label>--}}
{{--                        <input type="text" class="form-control" name="a_materno" id="a_materno"  placeholder="Apellido materno" maxlength='15'>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-3">--}}
{{--                        <label for="nombres" class="form-label">Nombres</label>--}}
{{--                        <input type="text" class="form-control" name="nombres" id="nombres"  placeholder="Nombres" maxlength='20'>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-2">--}}
{{--                        <label for="c_i" class="form-label">CI</label>--}}
{{--                        <input type="number" class="form-control" name="c_i" id="c_i"  >--}}
{{--                    </div>--}}
{{--                    <div class="col-md-2">--}}
{{--                        <label for="nit" class="form-label">NIT</label>--}}
{{--                        <input type="number" class="form-control" name="nit" id="nit"  >--}}
{{--                    </div>--}}
{{--                    <div class="col-md-2">--}}
{{--                        <label for="fono_dom" class="form-label">Telefono dom</label>--}}
{{--                        <input type="number" class="form-control" name="fono_dom" id="fono_dom" placeholder="Telefono" >--}}
{{--                    </div>--}}
{{--                    <div class="col-md-2">--}}
{{--                        <label for="fono_ofi" class="form-label">Telefono ofi</label>--}}
{{--                        <input type="number" class="form-control" name="fono_ofi" id="fono_ofi"  placeholder="Telefono" >--}}
{{--                    </div>--}}
{{--                    <div class="col-md-3">--}}
{{--                        <label for="zona_dom" class="form-label">Zona Dom</label>--}}
{{--                        <input type='text' class="form-control" name="zona_dom" id="zona_dom" >--}}
{{--                    </div>--}}
{{--                    <div class="col-md-4">--}}
{{--                        <label for="calle_dom" class="form-label">calle Dom</label>--}}
{{--                        <input type='text' class="form-control" name="calle_dom" id="calle_dom" >--}}
{{--                    </div>--}}
{{--                    <div class="col-md-2">--}}
{{--                        <label for="n_dom" class="form-label">Num Dom</label>--}}
{{--                        <input type='text' class="form-control" name="n_dom" id="n_dom" >--}}
{{--                    </div>--}}
{{--                    <div class="col-md-3">--}}
{{--                        <label for="cod_acti" class="form-label">Cod Actividad</label>--}}
{{--                        <input type='text' class="form-control" name="cod_acti" id="cod_acti" >--}}
{{--                    </div>--}}
{{--                    <div class="col-md-4">--}}
{{--                        <label for="cod_sector" class="form-label">Cod Sector</label>--}}
{{--                        <input type='text' class="form-control" name="cod_sector" id="cod_sector" >--}}
{{--                     </div>--}}
{{--                    <div class="col-md-4">--}}
{{--                        <label for="nom_acti" class="form-label">Actividad</label>--}}
{{--                        <input type="text" class="form-control" name="nom_acti" id="nom_acti"  placeholder="Actividad" >--}}
{{--                    </div>--}}
{{--                    <div class="col-md-4">--}}
{{--                        <label for="descrip" class="form-label">Descripcion</label>--}}
{{--                        <input type="text" class="form-control" name="descrip" id="descrip"  placeholder="Descripcion" >--}}
{{--                    </div>--}}
{{--                    <div class="col-md-2">--}}
{{--                        <label for="superficie" class="form-label">Superficie</label>--}}
{{--                        <input type="number" step='0.01' class="form-control" name="superficie" id="superficie"  placeholder="Superficie" >--}}
{{--                    </div>--}}
{{--                    <div class="col-md-3">--}}
{{--                        <label for="horario" class="form-label">Horario</label>--}}
{{--                        <input type="text"  class="form-control" name="horario" id="horario"  placeholder="horario" >--}}
{{--                    </div>--}}
{{--                    <div class="col-md-3">--}}
{{--                        <label for="act_zona" class="form-label">zona Activ</label>--}}
{{--                        <input type="text"  class="form-control" name="act_zona" id="act_zona"  placeholder="zona" >--}}
{{--                    </div>--}}
{{--                    <div class="col-md-3">--}}
{{--                        <label for="act_barrio" class="form-label">barrio Activ</label>--}}
{{--                        <input type="text"  class="form-control" name="act_barrio" id="act_barrio"  placeholder="barrio" >--}}
{{--                    </div>--}}
{{--                    <div class="col-md-6">--}}
{{--                        <label for="act_c_av" class="form-label">Calle/AV</label>--}}
{{--                        <input type="text"  class="form-control" name="act_c_av" id="act_c_av"  placeholder="calle/av" maxlength=40>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-6">--}}
{{--                        <label for="act_e_ca" class="form-label">Entre Calles</label>--}}
{{--                        <input type="text"  class="form-control" name="act_e_ca" id="act_e_ca"  placeholder="calles"  maxlength=40>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-4">--}}
{{--                        <label for="act_fono" class="form-label">Act fono</label>--}}
{{--                        <input type="text"  class="form-control" name="act_fono" id="act_fono"  placeholder="calles"  maxlength=40>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-4">--}}
{{--                        <label for="n_medidor_a" class="form-label">Medidor A</label>--}}
{{--                        <input type="number"  class="form-control" name="n_medidor_a" id="n_medidor_a"  placeholder="calles" >--}}
{{--                    </div>   --}}
{{--                    <div class="col-md-4">--}}
{{--                        <label for="n_medidor_e" class="form-label">Medidor E</label>--}}
{{--                        <input type="number"  class="form-control" name="n_medidor_e" id="n_medidor_e"  placeholder="calles" >--}}
{{--                    </div>--}}
{{--                    <div class="col-md-2">--}}
{{--                        <label for="comp" class="form-label">Comp</label>--}}
{{--                        <input type="number"  class="form-control" name="comp" id="comp"  placeholder="comp" >--}}
{{--                    </div>--}}
{{--                    <div class="col-md-2">--}}
{{--                        <label for="zona_trib" class="form-label">Zona trib</label>--}}
{{--                        <input type="number"  class="form-control" name="zona_trib" id="zona_trib"  placeholder="comp" max=9>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-4">--}}
{{--                        <label for="fecha_iniac" class="form-label">Fecha Ini</label>--}}
{{--                        <input type="date"  class="form-control" name="fecha_iniac" id="fecha_iniac"  >--}}
{{--                    </div>--}}
{{--                    <div class="col-md-2">--}}
{{--                        <label for="in_ge_trib" class="form-label">Ini Gestion Trib</label>--}}
{{--                        <input type="number"  class="form-control" name="in_ge_trib" id="in_ge_trib"  placeholder="comp" max=9999>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-2">--}}
{{--                        <label for="n_pmc_for" class="form-label">N PMC</label>--}}
{{--                        <input type="text"  class="form-control" name="n_pmc_for" id="n_pmc_for"  >--}}
{{--                    </div>--}}
{{--                    <div class="col-md-2">--}}
{{--                        <label for="n_res_tec" class="form-label">N Res Tec</label>--}}
{{--                        <input type="text"  class="form-control" name="n_res_tec" id="n_res_tec"  >--}}
{{--                    </div>--}}
                    <div class="col-md-12">
                        <button class="btn btn-warning btn-block" type="submit" id='btna'><i class="fa fa-check-circle"></i> Actualizar natural</button>
                    </div>
                </form>
                <form class="row" method='POST' action='/modvtramite'>
                    @csrf
                    <div class="col-md-2">
                        <label for="na_ju" class="form-label">na_ju</label>
                        <input type="text" class="form-control" name="na_ju" id="na_ju" placeholder="na_ju" >
                        <input type="hidden" name="CodAut" class="CodAut" required>
                    </div>
                    <div class="col-md-2">
                        <label for="tipo_tram" class="form-label">tipo_tram</label>
                        <input type="text" class="form-control" name="tipo_tram" id="tipo_tram" placeholder="tipo_tram" >
                    </div>
                    <div class="col-md-2">
                        <label for="fecha_ini" class="form-label">fecha_ini</label>
                        <input type="text" class="form-control" name="fecha_ini" id="fecha_ini" placeholder="fecha_ini" >
                    </div>
                    <div class="col-md-2">
                        <label for="operador" class="form-label">operador</label>
                        <input type="text" class="form-control" name="operador" id="operador" placeholder="operador" >
                    </div>
                    <div class="col-md-2">
                        <label for="estado" class="form-label">estado</label>
                        <input type="text" class="form-control" name="estado" id="estado" placeholder="estado" >
                    </div>
                    <div class="col-md-2">
                        <label for="clave" class="form-label">clave</label>
                        <input type="text" class="form-control" name="clave" id="clave" placeholder="clave" >
                    </div>
                    <div class="col-md-2">
                        <label for="fecha_fin" class="form-label">fecha_fin</label>
                        <input type="text" class="form-control" name="fecha_fin" id="fecha_fin" placeholder="fecha_fin" >
                    </div>
                    <div class="col-md-2">
                        <label for="unid_dest" class="form-label">unid_dest</label>
                        <input type="text" class="form-control" name="unid_dest" id="unid_dest" placeholder="unid_dest" >
                    </div>
                    <div class="col-md-2">
                        <label for="tramitador" class="form-label">tramitador</label>
                        <input type="text" class="form-control" name="tramitador" id="tramitador" placeholder="tramitador" >
                    </div>
                    <div class="col-md-12">
                        <button class="btn btn-success btn-block" type="submit" id='btna'><i class="fa fa-check-circle"></i> Actualizar tramite</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
    <script>
        window.onload=function (){

            $('#fomulario').submit(function (){
                $('#buscarcont').html("<i class='fa fa-spinner'></i> Buscar")
                $.ajax({
                    url:'/bvnatural',
                    type:'POST',
                    data:{'_token': "{{ csrf_token() }}", 'tramite':$('#tramite').val()},
                    success:function (e){
                        r=e[0];
                        $('.CodAut').val(r.CodAut);
                        $('#f_19').val(r.f_19)
                        $('#cod_acti').val(r.cod_acti)
                        $('#cod_sector').val(r.cod_sector)
                        $('#nom_acti').val(r.nom_acti)
                        $('#descrip').val(r.descrip)
                        $('#superficie').val(r.superficie)
                        $('#horario').val(r.horario)
                        $('#a_paterno').val(r.a_paterno)
                        $('#a_materno').val(r.a_materno)
                        $('#a_esposo').val(r.a_esposo)
                        $('#nombres').val(r.nombres)
                        $('#c_i').val(r.c_i)
                        $('#nit').val(r.nit)
                        $('#pmc').val(r.pmc)
                        $('#zona_dom').val(r.zona_dom)
                        $('#calle_dom').val(r.calle_dom)
                        $('#n_dom').val(r.n_dom)
                        $('#fono_dom').val(r.fono_dom)
                        $('#fono_of').val(r.fono_of)
                        $('#casilla').val(r.casilla)
                        $('#fax').val(r.fax)
                        $('#extrangero').val(r.extrangero)
                        $('#cert_ext').val(r.cert_ext)
                        $('#n_dni').val(r.n_dni)
                        $('#act_zona').val(r.act_zona)
                        $('#act_barrio').val(r.act_barrio)
                        $('#act_c_av').val(r.act_c_av)
                        $('#act_e_ca').val(r.act_e_ca)
                        $('#act_piso').val(r.act_piso)
                        $('#act_fono').val(r.act_fono)
                        $('#n_medidor_a').val(r.n_medidor_a)
                        $('#n_medidor_e').val(r.n_medidor_e)
                        $('#fachada').val(r.fachada)
                        $('#acera').val(r.acera)
                        $('#luz').val(r.luz)
                        $('#letreros').val(r.letreros)
                        $('#obs').val(r.obs)
                        $('#establec').val(r.establec)
                        $('#t_requi').val(r.t_requi)
                        $('#req_1').val(r.req_1)
                        $('#req_2').val(r.req_2)
                        $('#req_3').val(r.req_3)
                        $('#req_4').val(r.req_4)
                        $('#req_5').val(r.req_5)
                        $('#req_6').val(r.req_6)
                        $('#req_7').val(r.req_7)
                        $('#req_8').val(r.req_8)
                        $('#req_9').val(r.req_9)
                        $('#f_22').val(r.f_22)
                        $('#comp').val(r.comp)
                        $('#zona_trib').val(r.zona_trib)
                        $('#fecha_iniac').val(r.fecha_iniac)
                        $('#in_ge_trib').val(r.in_ge_trib)
                        $('#n_pmc_for').val(r.n_pmc_for)
                        $('#n_res_tec').val(r.n_res_tec)

                        $.ajax({
                            url:'/bvtramite',
                            type:'POST',
                            data:{'_token': "{{ csrf_token() }}", 'tramite':$('#tramite').val()},
                            success:function (e){
                                r=e[0];
                                $('#na_ju').val(r.na_ju)
                                $('#tipo_tram').val(r.tipo_tram)
                                $('#fecha_ini').val(r.fecha_ini)
                                $('#operador').val(r.operador)
                                $('#estado').val(r.estado)
                                $('#clave').val(r.clave)
                                $('#fecha_fin').val(r.fecha_fin)
                                $('#unid_dest').val(r.unid_dest)
                                $('#tramitador').val(r.tramitador)
                                $('#buscarcont').html("<i class='fa fa-search'></i> Buscar")
                            }
                        })


                        // $('#codaut').val(r.CodAut);
                        // $('#a_esposo').val(r.a_esposo);
                        // $('#a_paterno').val(r.a_paterno);
                        // $('#a_materno').val(r.a_materno);
                        // $('#nombres').val(r.nombres);
                        // $('#c_i').val(r.c_i);
                        // $('#nit').val(r.nit);
                        // $('#zona_dom').val(r.zona_dom);
                        // $('#calle_dom').val(r.calle_dom);
                        // $('#n_dom').val(r.n_dom);
                        // $('#nit').val(r.nit);
                        // $('#cod_acti').val(r.cod_acti);
                        // $('#nom_acti').val(r.nom_acti);
                        // $('#descrip').val(r.descrip);
                        // $('#superficie').val(r.superficie);
                        // $('#horario').val(r.horario);
                        // $('#cod_sector').val(r.cod_sector);
                        // $('#fono_dom').val(r.fono_dom);
                        // $('#fono_of').val(r.fono_of);
                        // $('#act_zona').val(r.act_zona);
                        // $('#act_barrio').val(r.act_barrio);
                        // $('#act_c_av').val(r.act_c_av);
                        // $('#act_e_ca').val(r.act_e_ca);
                        // $('#act_fono').val(r.act_fono);
                        // $('#comp').val(r.comp);
                        // $('#n_medidor_a').val(r.n_medidor_a);
                        // $('#n_medidor_e').val(r.n_medidor_e);
                        // $('#zona_trib').val(r.zona_trib);
                        // $('#fecha_iniac').val((r.fecha_iniac).substr(0,10));
                        // $('#in_ge_trib').val(r.in_ge_trib);
                        // $('#n_pmc_for').val(r.n_pmc_for);
                        // $('#n_res_tec').val(r.n_res_tec);
                        // mostrar();
                    }
                })
                return false;
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
        }


    </script>
@endsection
