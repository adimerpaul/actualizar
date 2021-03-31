
@extends('layouts.principal')
@section('content')
<div class="container">
        <h1>Buscar y/ o actualizar contribuyente</h1>
<form class="row g-3">
  <div class="col-md-4">
    <label for="comun1" class="form-label">N documuento</label>
    <input type="text" class="form-control" id="comun1" required >

  </div>
<br>


<hr>
  <div class="col-12">
    <button class="btn btn-primary" type="button" id='buscarcont'>Buscar</button>
  </div>
</form>

                        <form method='POST' action='/modificar' id='mod1'>
                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <label for="tipodocumento">Tipo documento</label>
                                    <!--                                    <input type="text" class="form-control" id="tipodocumento" placeholder="Tipo Documento">-->
                                    <select name="tipodocumento" id="tipodocumento" name="tipodocumento" class="form-control" required disabled>
                                        <option value="1">Carnet identidad</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="ci">Carnet de identidad</label>
                                    <input type="text" class="form-control" id="ci" name="ci" placeholder="Carnet de identidad" required readonly>
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
                                    <input type="text" class="form-control" id="tipocalle" name="tipocalle" placeholder="tipocalle" >
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
                            <button type="submit" class="btn btn-success btn-block"  ><i class="fa fa-user-plus"></i>Modificar</button>
                        </form>

    </div>  
    <script>
    $('#buscarcont').click(function(){
        console.log($('#comun1').val());
        $.ajax({
        url: "/datoscontrib/"+$('#comun1').val(),
        success: function (response) {
            console.log(response);
            var row=response[0];
            $('#tipodocumento').val(row['tipodocum']);
            $('#ci').val(row['comun']);
            $('#mod1').attr('action','/modificar/'+row['comun']);

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
            $('#nacimient').val(row['nacimient'].substr(0,10));
           // You will get response from your PHP page (what you echo or print)
        },
        error: function(jqXHR, textStatus, errorThrown) {
           console.log(textStatus, errorThrown);
        }
    });
    })
    
    </script>
    @endsection
