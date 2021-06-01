@extends('layouts.principal')
@section('content')
    <div class="container">
        <div class="col-12">
            <h1 class="bg-cyan text-white text-center">Vutrat a Indcom</h1>
            <form class="row" id="fomulario">
                <div class="col-md-4">
                    <label for="pmc" class="form-label">Padron</label>
                    <input type="text" class="form-control" name="pmc" id="pmc" required >
                </div>
                <div class="col-md-2">
                    <label for="comun1" class="form-label">Buscar</label> <br>
                    <button class="btn btn-info" type="submit" id='buscarcont'><i class="fa fa-search"></i> Buscar</button>
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
                    <label for="f-19" class="form-label">f-19</label>
                    <input type="text" class="form-control" name="f-19" id="f-19" placeholder="f-19"  >
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
                    <label for="cod_acti" class="form-label">cod_acti</label>
                    <input type="text" class="form-control" name="cod_acti" id="cod_acti" placeholder="cod_acti"  >
                </div>
                <div class="col-md-2">
                    <label for="cod_acti" class="form-label">cod_acti</label>
                    <input type="text" class="form-control" name="cod_acti" id="cod_acti" placeholder="cod_acti"  >
                </div>
                <div class="col-md-2">
                    <label for="cod_acti" class="form-label">cod_acti</label>
                    <input type="text" class="form-control" name="cod_acti" id="cod_acti" placeholder="cod_acti"  >
                </div>
                <div class="col-md-2">
                    <label for="cod_acti" class="form-label">cod_acti</label>
                    <input type="text" class="form-control" name="cod_acti" id="cod_acti" placeholder="cod_acti"  >
                </div>
                <div class="col-md-2">
                    <label for="cod_acti" class="form-label">cod_acti</label>
                    <input type="text" class="form-control" name="cod_acti" id="cod_acti" placeholder="cod_acti"  >
                </div>
                <div class="col-md-2">
                    <label for="cod_acti" class="form-label">cod_acti</label>
                    <input type="text" class="form-control" name="cod_acti" id="cod_acti" placeholder="cod_acti"  >
                </div>
                <div class="col-md-2">
                    <label for="cod_acti" class="form-label">cod_acti</label>
                    <input type="text" class="form-control" name="cod_acti" id="cod_acti" placeholder="cod_acti"  >
                </div>
                <div class="col-md-2">
                    <label for="cod_acti" class="form-label">cod_acti</label>
                    <input type="text" class="form-control" name="cod_acti" id="cod_acti" placeholder="cod_acti"  >
                </div>
                <div class="col-md-2">
                    <label for="cod_acti" class="form-label">cod_acti</label>
                    <input type="text" class="form-control" name="cod_acti" id="cod_acti" placeholder="cod_acti"  >
                </div>
                <div class="col-md-2">
                    <label for="cod_acti" class="form-label">cod_acti</label>
                    <input type="text" class="form-control" name="cod_acti" id="cod_acti" placeholder="cod_acti"  >
                </div>
                <div class="col-md-2">
                    <label for="cod_acti" class="form-label">cod_acti</label>
                    <input type="text" class="form-control" name="cod_acti" id="cod_acti" placeholder="cod_acti"  >
                </div>
                <div class="col-md-2">
                    <label for="cod_acti" class="form-label">cod_acti</label>
                    <input type="text" class="form-control" name="cod_acti" id="cod_acti" placeholder="cod_acti"  >
                </div>
                <div class="col-md-2">
                    <label for="cod_acti" class="form-label">cod_acti</label>
                    <input type="text" class="form-control" name="cod_acti" id="cod_acti" placeholder="cod_acti"  >
                </div>
                <div class="col-md-2">
                    <label for="cod_acti" class="form-label">cod_acti</label>
                    <input type="text" class="form-control" name="cod_acti" id="cod_acti" placeholder="cod_acti"  >
                </div>
            </form>
            <h6 class="bg-info text-white text-center">INCOM</h6>
            <form class="row" id="fomulario">
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
                    <label for="nacionalidad" class="form-label">nacionalidad</label>
                    <input type="text" class="form-control" name="nacionalidad" id="nacionalidad" placeholder="nacionalidad"  >
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
                    <label for="categoria" class="form-label">categoria</label>
                    <input type="text" class="form-control" name="categoria" id="categoria" placeholder="categoria"  >
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
            </form>
        </div>
    </div>
    <script>
        window.onload=function (){
            var table=$('#zero_config').DataTable({
                "order": [[ 0, "desc" ]]
            });

            $('#fomulario').submit(function (){
                $.ajax({
                    url:'/vuincom/1',
                    type:'GET',
                    data:{'_token': "{{ csrf_token() }}",'pmc':$('#pmc').val()},
                    success:function (e){
                        // console.log(e[0]);
                        let vutrat=e[0];
                        let indcom=e[1];

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
