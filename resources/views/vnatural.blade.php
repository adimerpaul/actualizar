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
                        <button class="btn btn-primary" type="submit" id='buscarcont'><i class="fa fa-upload"></i> Buscar</button>
                    </div>
                </form>
                <br>
                <form class="row" id="fomulario" method='POST' action='/modvnatur/'>
                @csrf
                @method('PUT')
                    <div class="col-md-3">
                        <label for="a_esposo" class="form-label">Apellido esposo</label>
                        <input type="text" class="form-control" name="a_esposo" id="a_esposo" placeholder="Apellido esposo" maxlength='15'>
                        <input type="hidden" name="codaut" id="codaut" required>
                    </div>
                    <div class="col-md-3">
                        <label for="a_paterno" class="form-label">Apellido paterno</label>
                        <input type="text" class="form-control" name="a_paterno" id="a_paterno" placeholder="Apellido paterno" maxlength='15'>
                    </div>
                    <div class="col-md-3">
                        <label for="a_materno" class="form-label">Apellido materno</label>
                        <input type="text" class="form-control" name="a_materno" id="a_materno"  placeholder="Apellido materno" maxlength='15'>
                    </div>

                    <div class="col-md-3">
                        <label for="nombres" class="form-label">Nombres</label>
                        <input type="text" class="form-control" name="nombres" id="nombres"  placeholder="Nombres" maxlength='20'>
                    </div>
                    <div class="col-md-2">
                        <label for="c_i" class="form-label">CI</label>
                        <input type="number" class="form-control" name="c_i" id="c_i"  >
                    </div>
                    <div class="col-md-2">
                        <label for="nit" class="form-label">NIT</label>
                        <input type="number" class="form-control" name="nit" id="nit"  >
                    </div>

                    <div class="col-md-2">
                        <label for="fono_dom" class="form-label">Telefono dom</label>
                        <input type="number" class="form-control" name="fono_dom" id="fono_dom" placeholder="Telefono" >
                    </div>
                    <div class="col-md-2">
                        <label for="fono_ofi" class="form-label">Telefono ofi</label>
                        <input type="number" class="form-control" name="fono_ofi" id="fono_ofi"  placeholder="Telefono" >
                    </div>
                    <div class="col-md-3">
                        <label for="zona_dom" class="form-label">Zona Dom</label>
                        <input type='text' class="form-control" name="zona_dom" id="zona_dom" >
                    </div>
                    <div class="col-md-4">
                        <label for="calle_dom" class="form-label">calle Dom</label>
                        <input type='text' class="form-control" name="calle_dom" id="calle_dom" >
                    </div>

                    <div class="col-md-2">
                        <label for="n_dom" class="form-label">Num Dom</label>
                        <input type='text' class="form-control" name="n_dom" id="n_dom" >
                    </div>
                    <div class="col-md-3">
                        <label for="cod_acti" class="form-label">Cod Actividad</label>
                        <input type='text' class="form-control" name="cod_acti" id="cod_acti" >
                    </div>
                    <div class="col-md-4">
                        <label for="cod_sector" class="form-label">Cod Sector</label>
                        <input type='text' class="form-control" name="cod_sector" id="cod_sector" >
                     </div>
                    <div class="col-md-4">
                        <label for="nom_acti" class="form-label">Actividad</label>
                        <input type="text" class="form-control" name="nom_acti" id="nom_acti"  placeholder="Actividad" >
                    </div>
                    <div class="col-md-4">
                        <label for="descrip" class="form-label">Descripcion</label>
                        <input type="text" class="form-control" name="descrip" id="descrip"  placeholder="Descripcion" >
                    </div>
                    <div class="col-md-2">
                        <label for="superficie" class="form-label">Superficie</label>
                        <input type="number" step='0.01' class="form-control" name="superficie" id="superficie"  placeholder="Superficie" >
                    </div>
                    <div class="col-md-3">
                        <label for="horario" class="form-label">Horario</label>
                        <input type="text"  class="form-control" name="horario" id="horario"  placeholder="horario" >
                    </div>

                    <div class="col-md-3">
                        <label for="act_zona" class="form-label">zona Activ</label>
                        <input type="text"  class="form-control" name="act_zona" id="act_zona"  placeholder="zona" >
                    </div>


                    <div class="col-md-3">
                        <label for="act_barrio" class="form-label">barrio Activ</label>
                        <input type="text"  class="form-control" name="act_barrio" id="act_barrio"  placeholder="barrio" >
                    </div>

                    
                    <div class="col-md-6">
                        <label for="act_c_av" class="form-label">Calle/AV</label>
                        <input type="text"  class="form-control" name="act_c_av" id="act_c_av"  placeholder="calle/av" maxlength=40>
                    </div>
                    
                    <div class="col-md-6">
                        <label for="act_e_ca" class="form-label">Entre Calles</label>
                        <input type="text"  class="form-control" name="act_e_ca" id="act_e_ca"  placeholder="calles"  maxlength=40>
                    </div>
                    <div class="col-md-4">
                        <label for="act_fono" class="form-label">Act fono</label>
                        <input type="text"  class="form-control" name="act_fono" id="act_fono"  placeholder="calles"  maxlength=40>
                    </div>
                    <div class="col-md-4">
                        <label for="n_medidor_a" class="form-label">Medidor A</label>
                        <input type="number"  class="form-control" name="n_medidor_a" id="n_medidor_a"  placeholder="calles" >
                    </div>   
                    <div class="col-md-4">
                        <label for="n_medidor_e" class="form-label">Medidor E</label>
                        <input type="number"  class="form-control" name="n_medidor_e" id="n_medidor_e"  placeholder="calles" >
                    </div>

                    <div class="col-md-2">
                        <label for="comp" class="form-label">Comp</label>
                        <input type="number"  class="form-control" name="comp" id="comp"  placeholder="comp" >
                    </div>

                    <div class="col-md-2">
                        <label for="zona_trib" class="form-label">Zona trib</label>
                        <input type="number"  class="form-control" name="zona_trib" id="zona_trib"  placeholder="comp" max=9>
                    </div>
                    <div class="col-md-4">
                        <label for="fecha_iniac" class="form-label">Fecha Ini</label>
                        <input type="date"  class="form-control" name="fecha_iniac" id="fecha_iniac"  >
                    </div>
                    <div class="col-md-2">
                        <label for="in_ge_trib" class="form-label">Ini Gestion Trib</label>
                        <input type="number"  class="form-control" name="in_ge_trib" id="in_ge_trib"  placeholder="comp" max=9999>
                    </div>
                    <div class="col-md-2">
                        <label for="n_pmc_for" class="form-label">N PMC</label>
                        <input type="text"  class="form-control" name="n_pmc_for" id="n_pmc_for"  >
                    </div>
                    <div class="col-md-2">
                        <label for="n_res_tec" class="form-label">N Res Tec</label>
                        <input type="text"  class="form-control" name="n_res_tec" id="n_res_tec"  >
                    </div>
<br>
                    <div class="col-md-12">
                        <button class="btn btn-warning" type="submit" id='btna'><i class="fa fa-check-circle"></i> Actualizar</button>
                    </div>
                    
                </form>
            </div>

        </div>
    </div>
    <script>
        window.onload=function (){

            $('#fomulario').submit(function (){
                $.ajax({
                    url:'/bvnatural',
                    type:'POST',
                    data:{'_token': "{{ csrf_token() }}", 'tramite':$('#tramite').val()},
                    success:function (e){
                        console.log(e);
                        r=e[0];

                        $('#codaut').val(r.CodAut);
                        $('#a_esposo').val(r.a_esposo);
                        $('#a_paterno').val(r.a_paterno);
                        $('#a_materno').val(r.a_materno);
                        $('#nombres').val(r.nombres);
                        $('#c_i').val(r.c_i);
                        $('#nit').val(r.nit);
                        $('#zona_dom').val(r.zona_dom);
                        $('#calle_dom').val(r.calle_dom);
                        $('#n_dom').val(r.n_dom);
                        $('#nit').val(r.nit);
                        $('#cod_acti').val(r.cod_acti);
                        $('#nom_acti').val(r.nom_acti);
                        $('#descrip').val(r.descrip);
                        $('#superficie').val(r.superficie);
                        $('#horario').val(r.horario);
                        $('#cod_sector').val(r.cod_sector); 
                        $('#fono_dom').val(r.fono_dom);
                        $('#fono_of').val(r.fono_of);
                        $('#act_zona').val(r.act_zona);
                        $('#act_barrio').val(r.act_barrio);
                        $('#act_c_av').val(r.act_c_av);
                        $('#act_e_ca').val(r.act_e_ca);
                        $('#act_fono').val(r.act_fono);
                        $('#comp').val(r.comp);
                        $('#n_medidor_a').val(r.n_medidor_a);
                        $('#n_medidor_e').val(r.n_medidor_e);
                        $('#zona_trib').val(r.zona_trib);
                        $('#fecha_iniac').val((r.fecha_iniac).substr(0,10));
                        $('#in_ge_trib').val(r.in_ge_trib);
                        $('#n_pmc_for').val(r.n_pmc_for);
                        $('#n_res_tec').val(r.n_res_tec);
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
