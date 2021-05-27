@extends('layouts.principal')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="bg-cyan text-white text-center">Ufvs</h1>
                <form class="row" id="fomulario">
{{--                    @csrf--}}
                    <div class="col-md-4">
                        <label for="tramite" class="form-label">Tramite</label>
                        <input type="text" class="form-control" name="tramite" id="tramite" required >
                    </div>
                    <div class="col-md-2">
                        <label for="buscarcont" class="form-label">Buscar</label> <br>
                        <button class="btn btn-primary" type="submit" id='buscarcont'><i class="fa fa-upload"></i> Buscar</button>
                    </div>
                </form>
                <form class="row" id="fomulario">
                    <div class="col-md-2">
                        <label for="a_esposo" class="form-label">Apellido esposo</label>
                        <input type="text" class="form-control" name="a_esposo" id="a_esposo" required placeholder="Apellido esposo" >
                    </div>
                    <div class="col-md-2">
                        <label for="a_materno" class="form-label">Apellido materno</label>
                        <input type="text" class="form-control" name="a_materno" id="a_materno" required placeholder="Apellido materno" >
                    </div>
                    <div class="col-md-2">
                        <label for="a_paterno" class="form-label">Apellido paterno</label>
                        <input type="text" class="form-control" name="a_paterno" id="a_paterno" required placeholder="Apellido paterno" >
                    </div>
                    <div class="col-md-2">
                        <label for="nombres" class="form-label">Nombres</label>
                        <input type="text" class="form-control" name="nombres" id="nombres" required placeholder="Nombres" >
                    </div>
                    <div class="col-md-2">
                        <label for="act_barrio" class="form-label">Act. Barrio</label>
                        <input type="text" class="form-control" name="act_barrio" id="act_barrio" required placeholder="Act. Barrio" >
                    </div>
                    <div class="col-md-2">
                        <label for="act_fono" class="form-label">Telefono</label>
                        <input type="text" class="form-control" name="act_fono" id="act_fono" required placeholder="Telefono" >
                    </div>
                    <div class="col-md-2">
                        <label for="descrip" class="form-label">Descripcion</label>
                        <input type="text" class="form-control" name="descrip" id="descrip" required placeholder="Descripcion" >
                    </div>
                    <div class="col-md-2">
                        <label for="nom_acti" class="form-label">Actividad</label>
                        <input type="text" class="form-control" name="nom_acti" id="nom_acti" required placeholder="Actividad" >
                    </div>
                    <div class="col-md-2">
                        <label for="superficie" class="form-label">Superficie</label>
                        <input type="text" class="form-control" name="superficie" id="superficie" required placeholder="Superficie" >
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
