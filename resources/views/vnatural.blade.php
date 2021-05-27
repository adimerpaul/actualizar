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
                <form class="row" id="fomulario">
                    <div class="col-md-3">
                        <label for="a_esposo" class="form-label">Apellido esposo</label>
                        <input type="text" class="form-control" name="a_esposo" id="a_esposo" placeholder="Apellido esposo" >
                    </div>
                    <div class="col-md-3">
                        <label for="a_materno" class="form-label">Apellido materno</label>
                        <input type="text" class="form-control" name="a_materno" id="a_materno" required placeholder="Apellido materno" >
                    </div>
                    <div class="col-md-3">
                        <label for="a_paterno" class="form-label">Apellido paterno</label>
                        <input type="text" class="form-control" name="a_paterno" id="a_paterno" required placeholder="Apellido paterno" >
                    </div>
                    <div class="col-md-3">
                        <label for="nombres" class="form-label">Nombres</label>
                        <input type="text" class="form-control" name="nombres" id="nombres" required placeholder="Nombres" >
                    </div>

                    <div class="col-md-2">
                        <label for="fono_dom" class="form-label">Telefono dom</label>
                        <input type="number" class="form-control" name="fono_dom" id="fono_dom" required placeholder="Telefono" >
                    </div>
                    <div class="col-md-2">
                        <label for="fono_ofi" class="form-label">Telefono ofi</label>
                        <input type="number" class="form-control" name="fono_ofi" id="fono_ofi"  placeholder="Telefono" >
                    </div>
                    <div class="col-md-3">
                        <label for="cod_acti" class="form-label">Cod Actividad</label>
                        <select class="form-control" name="cod_acti" id="cod_acti">
                        <?php 
                                            $re=DB::Connection('vutrat')->table('actividad')->get();
                                            foreach($re as $row){
                                            echo '<option value="'.$row->codigo.'">'.$row->detalle.'</option>';}
                        ?> 
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="cod_sector" class="form-label">Cod Sector</label>
                        <select class="form-control" name="cod_sector" id="cod_sector">
                        <?php 
                                            $re=DB::Connection('vutrat')->table('sectores')->get();
                                            foreach($re as $row){
                                            echo '<option value="'.$row->sector.'">'.$row->detalle.'</option>';}
                        ?> 
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="nom_acti" class="form-label">Actividad</label>
                        <input type="text" class="form-control" name="nom_acti" id="nom_acti" required placeholder="Actividad" >
                    </div>
                    <div class="col-md-4">
                        <label for="descrip" class="form-label">Descripcion</label>
                        <input type="text" class="form-control" name="descrip" id="descrip" required placeholder="Descripcion" >
                    </div>
                    <div class="col-md-2">
                        <label for="superficie" class="form-label">Superficie</label>
                        <input type="number" step='0.01' class="form-control" name="superficie" id="superficie" required placeholder="Superficie" >
                    </div>
                    <div class="col-md-3">
                        <label for="horario" class="form-label">Horario</label>
                        <input type="text"  class="form-control" name="horario" id="horario" required placeholder="Superficie" >
                    </div>

                    <div class="col-md-3">
                        <label for="act_zona" class="form-label">zona Activ</label>
                        <input type="text"  class="form-control" name="act_zona" id="act_zona" required placeholder="Superficie" >
                    </div>


                    <div class="col-md-3">
                        <label for="act_barrio" class="form-label">barrio Activ</label>
                        <input type="text"  class="form-control" name="act_barrio" id="act_barrio" required placeholder="Superficie" >
                    </div>

                    
                    <div class="col-md-6">
                        <label for="act_c_av" class="form-label">Calle/AV</label>
                        <input type="text"  class="form-control" name="act_c_av" id="act_c_av" required placeholder="Superficie" >
                    </div>
                    
                    <div class="col-md-6">
                        <label for="act_e_ca" class="form-label">Entre Calles</label>
                        <input type="text"  class="form-control" name="act_e_ca" id="act_e_ca" required placeholder="Superficie" >
                    </div>

                    <div class="col-md-2">
                        <label for="comp" class="form-label">Comp</label>
                        <input type="number"  class="form-control" name="comp" id="comp" required placeholder="Superficie" >
                    </div>
                    <div class="col-md-2">
                        <label for="n_pmc_for" class="form-label">N PMC</label>
                        <input type="text"  class="form-control" name="n_pmc_for" id="n_pmc_for" required placeholder="Superficie" >
                    </div>
                    <div class="col-md-2">
                        <label for="n_res_tec" class="form-label">N Res Tec</label>
                        <input type="text"  class="form-control" name="n_res_tec" id="n_res_tec" required placeholder="Superficie" >
                    </div>

                    <div class="col-md-2">
                        <label for="btna" class="form-label">Actualizar</label> <br>
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
                        $('#a_esposo').val(r.a_esposo);
                        $('#a_paterno').val(r.a_paterno);
                        $('#a_materno').val(r.a_materno);
                        $('#nombres').val(r.nombres);
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
                        $('#comp').val(r.comp);
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
