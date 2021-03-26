
@extends('layouts.principal')
@section('content')
<div class="container">
        <h1>Buscar y/ o actualizar contribuyente</h1>
<form class="row g-3" action=''>
  <div class="col-md-4">
    <label for="comun1" class="form-label">N documuento</label>
    <input type="text" class="form-control" id="comun1" required >

  </div>
<br>


<hr>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Buscar</button>
  </div>
</form>

                        <form action=''>
                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <label for="tipodocumento">Tipo documento</label>
                                    <!--                                    <input type="text" class="form-control" id="tipodocumento" placeholder="Tipo Documento">-->
                                    <select name="tipodocumento" id="tipodocumento" class="form-control" required disabled>
                                        <option value="1">Carnet identidad</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="ci">Carnet de identidad</label>
                                    <input type="text" class="form-control" id="ci" placeholder="Carnet de identidad" required readonly>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="expedido">Expedido</label>
                                    <!--                                    <input type="text" class="form-control" id="expedido" placeholder="Tipo Documento">-->
                                    <select name="expedido" id="expedido" class="form-control" required >
                                        <option value="O">ORURO</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="paterno">Paterno</label>
                                    <input type="text" class="form-control" id="paterno" placeholder="Paterno" >
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="materno">Materno</label>
                                    <input type="text" class="form-control" id="materno" placeholder="Materno" >
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control" id="nombre" placeholder="Nombre" >
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="telefono">Celular</label>
                                    <input type="text" class="form-control" id="telefono" placeholder="Celular" >
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="cod_ham">cod_ham</label>
                                    <select  class="form-control"  name="cod_ham" id="cod_ham" required>
                                    </select>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="cod_barrio">cod_barrio</label>
                                    <select  class="form-control"   name="cod_barrio" id="cod_barrio" required>
                                    </select>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="tipocalle">tipocalle</label>
                                    <input type="text" class="form-control" id="tipocalle" placeholder="tipocalle" >
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="nombrecall">nombrecall</label>
                                    <input type="text" class="form-control" id="nombrecall" placeholder="nombrecall" >
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="numcasa">numcasa</label>
                                    <input type="text" class="form-control" id="numcasa" placeholder="numcasa" >
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="descrip">descrip</label>
                                    <input type="text" class="form-control" id="descrip" placeholder="descrip" >
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="nacimient">nacimient</label>
                                    <input type="date" class="form-control" id="nacimient" placeholder="nacimient">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success btn-block"  ><i class="fa fa-user-plus"></i>Modificar</button>
                        </form>

    </div>  
    <script>
    
    </script>
    @endsection
