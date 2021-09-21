@extends('layouts.principal')
@section('content')
    <div class="container">
        <h1 class="bg-cyan text-white text-center">Mercados</h1>
        <div class="row">
            <div class="col-12">
                <form class="row g-3" id="formulario">
                    <div class="col-md-2">
                        <label for="eventual" class="form-label">Eventuales</label> <br>
                        <button type="button"class="btn btn-orange" data-toggle="modal" data-target="#eventual"> <i class="fa fa-file"></i> Eventuales</button>
                    </div>
                    <div class="col-md-2">
                        <label for="formales" class="form-label">Formales</label> <br>
                        <button type="button"class="btn btn-cyan" data-toggle="modal" data-target="#formal"> <i class="fa fa-file"></i> Formales</button>
                    </div>
                    <div class="col-md-3">
                        <label for="padron" class="form-label">Padron</label>
                        <input type="text" class="form-control" id="padron" required >
                    </div>
                    <div class="col-md-3">
                        <label for="comun1" class="form-label">Buscar</label> <br>
                        <button class="btn btn-primary" type="submit" id='buscarcont'><i class="fa fa-search"></i> Buscar</button>
                    </div>
                </form>
            </div>
            <div class="col-12">
                <table class="table">
                    <thead>
                    <tr class="thead-dark">
                        <th>#</th>
                        <th>Padron</th>
                        <th>Gestion</th>
                        <th>Monto</th>
                        <th>Control</th>
                        <th>Oper</th>
                        <th>Pagando en</th>
                        <th>Hora</th>
                        <th>Opciones</th>
                    </tr>
                    </thead>
                    <tbody id="contenido">
                    </tbody>

                </table>
            </div>
        </div>

{{--        <form method='POST' action='/modificar/' id='mod1'>--}}
{{--            @csrf--}}
{{--            @method('PUT')--}}
{{--            <div class="form-row">--}}
{{--                <div class="form-group col-md-2">--}}
{{--                    <label for="tipodocumento">Tipo documento</label>--}}
{{--                    <select name="tipodocumento" id="tipodocumento" name="tipodocumento" class="form-control" required disabled>--}}
{{--                        <option value="1">Carnet identidad</option>--}}
{{--                        <option value="2">Passaporte</option>--}}
{{--                    </select>--}}
{{--                </div>--}}
{{--                <div class="form-group col-md-2">--}}
{{--                    <label for="ci">Carnet de identidad</label>--}}
{{--                    <input type="text" class="form-control" id="ci" name="ci" placeholder="Carnet de identidad" required >--}}
{{--                </div>--}}
{{--                <div class="form-group col-md-2">--}}
{{--                    <label for="expedido">Expedido</label>--}}
{{--                    <select name="expedido" id="expedido" name="expedido" class="form-control" required >--}}
{{--                        <option value="O">ORURO</option>--}}
{{--                        <option value="L">LA PAZ</option>--}}
{{--                        <option value="P">POTOSI</option>--}}
{{--                        <option value="A">PANDO</option>--}}
{{--                        <option value="B">BENI</option>--}}
{{--                        <option value="T">SANTA CRUZ</option>--}}
{{--                        <option value="J">TARIJA</option>--}}
{{--                        <option value="H">COCHABAMBA</option>--}}
{{--                        <option value="C">SUCRE</option>--}}
{{--                    </select>--}}
{{--                </div>--}}
{{--                <div class="form-group col-md-8">--}}
{{--                    <b for="nombres">Nombre Completo</b>: <br>--}}
{{--                    <label type="text" class="" id="nombres" name="nombres" placeholder="Nombre Completo" ></label>--}}
{{--                </div>--}}
{{--                <div class="form-group col-md-2">--}}
{{--                    <label for="gest">Gestion</label>--}}
{{--                    <input type="text" class="form-control" id="gest" name="gest" placeholder="Gestion" >--}}
{{--                </div>--}}
{{--                <div class="form-group col-md-2">--}}
{{--                    <label for="inmuebles">Imuebles</label>--}}
{{--                    <select name="inmuebles" id="inmuebles" name="inmuebles" class="form-control" required >--}}
{{--                    </select>--}}
{{--                </div>--}}
{{--                <div class="form-group col-md-2">--}}
{{--                    <label for="gestion">Ultima Gestion</label>--}}
{{--                    <input type="text" class="form-control" id="gestion" name="gestion" placeholder="Ultima Gestion" >--}}
{{--                </div>--}}
{{--                <div class="form-group col-md-1">--}}
{{--                    <label for="cambiar">Cambiar</label>--}}
{{--                    <button id="cambio" type="button" class="btn btn-success"><i class="fa fa-edit"></i></button>--}}
{{--                </div>--}}
{{--                <div class="form-group col-md-2">--}}
{{--                    <label for="descrip">Direccion</label>--}}
{{--                    <p id="descrip" name="descrip" >--}}
{{--                </div>--}}
{{--                <div class="form-group col-12">--}}
{{--                    <h3 class="text-center text-white bg-info">Gestiones acumuladas</h3>--}}
{{--                </div>--}}
{{--                <div class="form-group col-12">--}}
{{--                    <table class="table">--}}
{{--                        <thead>--}}
{{--                        <tr class="thead-dark">--}}
{{--                            <th>#</th>--}}
{{--                            <th>Banco</th>--}}

{{--                            <th>Gestion</th>--}}

{{--                            <th>Patente</th>--}}
{{--                            <th>Control</th>--}}
{{--                            <th>Caja</th>--}}
{{--                            <th>Fecha</th>--}}
{{--                            <th>Hora</th>--}}
{{--                            <th>Opciones</th>--}}
{{--                        </tr>--}}
{{--                        </thead>--}}
{{--                        <tbody id="contenido">--}}
{{--                        </tbody>--}}

{{--                    </table>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--            <button type="submit" class="btn btn-success btn-block"  ><i class="fa fa-user-plus"></i>Modificar</button>--}}
{{--        </form>--}}
        <!-- Modal -->
        <div class="modal fade" id="eventual" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Actualizar eventual</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="row g-3" id="updatepadrone" >
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label for="padrone" class="col-sm-1 col-form-label">padrone <i class="fa fa-spinner" id="spinnerpadrone"></i></label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="padrone" placeholder="padrone">
                                    </div>
                                    <label for="pad1" class="col-sm-1 col-form-label">pad1</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="pad1" placeholder="pad1">
                                    </div>
                                    <label for="pad2" class="col-sm-1 col-form-label">pad2</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="pad2" placeholder="pad2">
                                    </div>
                                    <label for="pad3" class="col-sm-1 col-form-label">pad3</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="pad3" placeholder="pad3">
                                    </div>
                                    <label for="paterno" class="col-sm-1 col-form-label">paterno</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="paterno" placeholder="paterno">
                                    </div>
                                    <label for="materno" class="col-sm-1 col-form-label">materno</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="materno" placeholder="materno">
                                    </div>
                                    <label for="ap_esposo" class="col-sm-1 col-form-label">ap_esposo</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="ap_esposo" placeholder="ap_esposo">
                                    </div>
                                    <label for="nombres" class="col-sm-1 col-form-label">nombres</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="nombres" placeholder="nombres">
                                    </div>
                                    <label for="carnet" class="col-sm-1 col-form-label">carnet</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="carnet" placeholder="carnet">
                                    </div>
                                    <label for="fono" class="col-sm-1 col-form-label">fono</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="fono" placeholder="fono">
                                    </div>
                                    <label for="domicilio" class="col-sm-1 col-form-label">domicilio</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="domicilio" placeholder="domicilio">
                                    </div>
                                    <label for="ruc" class="col-sm-1 col-form-label">ruc</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="ruc" placeholder="ruc">
                                    </div>
                                    <label for="oper" class="col-sm-1 col-form-label">oper</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="oper" placeholder="oper">
                                    </div>
                                    <label for="fecha" class="col-sm-1 col-form-label">fecha</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="fecha" placeholder="fecha">
                                    </div>
                                    <label for="hora" class="col-sm-1 col-form-label">hora</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="hora" placeholder="hora">
                                    </div>
                                    <label for="fecha_inic" class="col-sm-1 col-form-label">fecha_inic</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="fecha_inic" placeholder="fecha_inic">
                                    </div>
                                    <label for="gest" class="col-sm-1 col-form-label">gest</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="gest" placeholder="gest">
                                    </div>
                                    <label for="codigo" class="col-sm-1 col-form-label">codigo</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="codigo" placeholder="codigo">
                                    </div>
                                    <label for="tipo_pues" class="col-sm-1 col-form-label">tipo_pues</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="tipo_pues" placeholder="tipo_pues">
                                    </div>
                                    <label for="ubicacion" class="col-sm-1 col-form-label">ubicacion</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="ubicacion" placeholder="ubicacion">
                                    </div>
                                    <label for="ancho" class="col-sm-1 col-form-label">ancho</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="ancho" placeholder="ancho">
                                    </div>
                                    <label for="largo" class="col-sm-1 col-form-label">largo</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="largo" placeholder="largo">
                                    </div>
                                    <label for="observ" class="col-sm-1 col-form-label">observ</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="observ" placeholder="observ">
                                    </div>
                                    <label for="padant" class="col-sm-1 col-form-label">padant</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="padant" placeholder="padant">
                                    </div>
                                    <label for="dias" class="col-sm-1 col-form-label">dias</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="dias" placeholder="dias">
                                    </div>
                                    <label for="compr" class="col-sm-1 col-form-label">compr</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="compr" placeholder="compr">
                                    </div>
                                    <label for="bandera" class="col-sm-1 col-form-label">bandera</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="bandera" placeholder="bandera">
                                    </div>
                                    <label for="asociado" class="col-sm-1 col-form-label">asociado</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="asociado" placeholder="asociado">
                                    </div>
                                    <label for="nro_asoc" class="col-sm-1 col-form-label">nro_asoc</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="nro_asoc" placeholder="nro_asoc">
                                    </div>
                                    <label for="n_tug" class="col-sm-1 col-form-label">n_tug</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="n_tug" placeholder="n_tug">
                                    </div>
                                    <label for="n_preim" class="col-sm-1 col-form-label">n_preim</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="n_preim" placeholder="n_preim">
                                    </div>
                                    <label for="f_regi" class="col-sm-1 col-form-label">f_regi</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="f_regi" placeholder="f_regi">
                                    </div>
                                    <label for="l07" class="col-sm-1 col-form-label">l07</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="l07" placeholder="l07">
                                    </div>
                                    <label for="tuc" class="col-sm-1 col-form-label">tuc</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="tuc" placeholder="tuc">
                                    </div>
                                    <label for="n_tuc" class="col-sm-1 col-form-label">n_tuc</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="n_tuc" placeholder="n_tuc">
                                    </div>
                                    <label for="n_pretuc" class="col-sm-1 col-form-label">n_pretuc</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="n_pretuc" placeholder="n_pretuc">
                                    </div>
                                    <label for="f_regtuc" class="col-sm-1 col-form-label">f_regtuc</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="f_regtuc" placeholder="f_regtuc">
                                    </div>
                                    <label for="ob_tuc" class="col-sm-1 col-form-label">ob_tuc</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="ob_tuc" placeholder="ob_tuc">
                                    </div>
                                    <label for="l080" class="col-sm-1 col-form-label">l080</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="l080" placeholder="l080">
                                    </div>
                                    <label for="hab" class="col-sm-1 col-form-label">hab</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="hab" placeholder="hab">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-trash"></i> Cerrar</button>
                                    <button type="submit" class="btn btn-success"><i class="fa fa-edit"></i> Actualizar</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <div class="modal fade" id="formal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Actualizar formal</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="row g-3" id="updatepadronf" >
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label for="padronf" class="col-sm-1 col-form-label">padronf <i class="fa fa-spinner" id="spinnerpadronf"></i></label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="padronf" placeholder="padronf">
                                    </div>
                                    <label for="form232" class="col-sm-1 col-form-label">form232</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="form232" placeholder="form232">
                                    </div>
                                    <label for="pad12" class="col-sm-1 col-form-label">pad12</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="pad12" placeholder="pad12">
                                    </div>
                                    <label for="pad22" class="col-sm-1 col-form-label">pad22</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="pad22" placeholder="pad22">
                                    </div>
                                    <label for="pad32" class="col-sm-1 col-form-label">pad32</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="pad32" placeholder="pad32">
                                    </div>
                                    <label for="paterno2" class="col-sm-1 col-form-label">paterno2</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="paterno2" placeholder="paterno2">
                                    </div>
                                    <label for="materno2" class="col-sm-1 col-form-label">materno2</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="materno2" placeholder="materno2">
                                    </div>
                                    <label for="ap_esposo2" class="col-sm-1 col-form-label">ap_esposo2</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="ap_esposo2" placeholder="ap_esposo2">
                                    </div>
                                    <label for="nombres2" class="col-sm-1 col-form-label">nombres2</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="nombres2" placeholder="nombres2">
                                    </div>
                                    <label for="carnet2" class="col-sm-1 col-form-label">carnet2</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="carnet2" placeholder="carnet2">
                                    </div>
                                    <label for="fono2" class="col-sm-1 col-form-label">fono2</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="fono2" placeholder="fono2">
                                    </div>
                                    <label for="domicilio2" class="col-sm-1 col-form-label">domicilio2</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="domicilio2" placeholder="domicilio2">
                                    </div>
                                    <label for="ruc2" class="col-sm-1 col-form-label">ruc2</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="ruc2" placeholder="ruc2">
                                    </div>
                                    <label for="oper2" class="col-sm-1 col-form-label">oper2</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="oper2" placeholder="oper2">
                                    </div>
                                    <label for="fecha2" class="col-sm-1 col-form-label">fecha2</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="fecha2" placeholder="fecha2">
                                    </div>
                                    <label for="hora2" class="col-sm-1 col-form-label">hora2</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="hora2" placeholder="hora2">
                                    </div>
                                    <label for="fecha_inic2" class="col-sm-1 col-form-label">fecha_inic2</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="fecha_inic2" placeholder="fecha_inic2">
                                    </div>
                                    <label for="gest2" class="col-sm-1 col-form-label">gest2</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="gest2" placeholder="gest2">
                                    </div>
                                    <label for="codigo2" class="col-sm-1 col-form-label">codigo2</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="codigo2" placeholder="codigo2">
                                    </div>
                                    <label for="tipo_pues2" class="col-sm-1 col-form-label">tipo_pues2</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="tipo_pues2" placeholder="tipo_pues2">
                                    </div>
                                    <label for="ancho2" class="col-sm-1 col-form-label">ancho2</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="ancho2" placeholder="ancho2">
                                    </div>
                                    <label for="largo2" class="col-sm-1 col-form-label">largo2</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="largo2" placeholder="largo2">
                                    </div>
                                    <label for="observ2" class="col-sm-1 col-form-label">observ2</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="observ2" placeholder="observ2">
                                    </div>
                                    <label for="padant2" class="col-sm-1 col-form-label">padant2</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="padant2" placeholder="padant2">
                                    </div>
                                    <label for="compr2" class="col-sm-1 col-form-label">compr2</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="compr2" placeholder="compr2">
                                    </div>
                                    <label for="bandera2" class="col-sm-1 col-form-label">bandera2</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="bandera2" placeholder="bandera2">
                                    </div>
                                    <label for="asociado2" class="col-sm-1 col-form-label">asociado2</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="asociado2" placeholder="asociado2">
                                    </div>
                                    <label for="nro_asoc2" class="col-sm-1 col-form-label">nro_asoc2</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="nro_asoc2" placeholder="nro_asoc2">
                                    </div>
                                    <label for="n_tug2" class="col-sm-1 col-form-label">n_tug2</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="n_tug2" placeholder="n_tug2">
                                    </div>
                                    <label for="n_preim2" class="col-sm-1 col-form-label">n_preim2</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="n_preim2" placeholder="n_preim2">
                                    </div>
                                    <label for="f_regi2" class="col-sm-1 col-form-label">f_regi2</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="f_regi2" placeholder="f_regi2">
                                    </div>
                                    <label for="l072" class="col-sm-1 col-form-label">l072</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="l072" placeholder="l072">
                                    </div>
                                    <label for="tuc2" class="col-sm-1 col-form-label">tuc2</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="tuc2" placeholder="tuc2">
                                    </div>
                                    <label for="n_tuc2" class="col-sm-1 col-form-label">n_tuc2</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="n_tuc2" placeholder="n_tuc2">
                                    </div>
                                    <label for="n_pretuc2" class="col-sm-1 col-form-label">n_pretuc2</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="n_pretuc2" placeholder="n_pretuc2">
                                    </div>
                                    <label for="f_regtuc2" class="col-sm-1 col-form-label">f_regtuc2</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="f_regtuc2" placeholder="f_regtuc2">
                                    </div>
                                    <label for="ob_tuc2" class="col-sm-1 col-form-label">ob_tuc2</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="ob_tuc2" placeholder="ob_tuc2">
                                    </div>
                                    <label for="l0802" class="col-sm-1 col-form-label">l0802</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="l0802" placeholder="l0802">
                                    </div>
                                    <label for="hab2" class="col-sm-1 col-form-label">hab2</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="hab2" placeholder="hab2">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-trash"></i> Cerrar</button>
                                    <button type="submit" class="btn btn-success"><i class="fa fa-edit"></i> Actualizar</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script>
        window.onload=function (){
            $('#spinnerpadrone').hide()
            $('#spinnerpadronf').hide()
            $('#updatepadrone').submit(function (e){
                $.ajax({
                    url:'/updatepadrone',
                    type:'POST',
                    data:{
                        _token: '{{ csrf_token() }}',
                        padron:$('#padrone').val(),
                        pad1:$('#pad1').val(),
                        pad2:$('#pad2').val(),
                        pad3:$('#pad3').val(),
                        paterno:$('#paterno').val(),
                        materno:$('#materno').val(),
                        ap_esposo:$('#ap_esposo').val(),
                        nombres:$('#nombres').val(),
                        carnet:$('#carnet').val(),
                        fono:$('#fono').val(),
                        domicilio:$('#domicilio').val(),
                        ruc:$('#ruc').val(),
                        oper:$('#oper').val(),
                        fecha:$('#fecha').val(),
                        hora:$('#hora').val(),
                        fecha_inic:$('#fecha_inic').val(),
                        gest:$('#gest').val(),
                        codigo:$('#codigo').val(),
                        tipo_pues:$('#tipo_pues').val(),
                        ubicacion:$('#ubicacion').val(),
                        ancho:$('#ancho').val(),
                        largo:$('#largo').val(),
                        observ:$('#observ').val(),
                        padant:$('#padant').val(),
                        dias:$('#dias').val(),
                        compr:$('#compr').val(),
                        bandera:$('#bandera').val(),
                        asociado:$('#asociado').val(),
                        nro_asoc:$('#nro_asoc').val(),
                        n_tug:$('#n_tug').val(),
                        n_preim:$('#n_preim').val(),
                        f_regi:$('#f_regi').val(),
                        l07:$('#l07').val(),
                        tuc:$('#tuc').val(),
                        n_tuc:$('#n_tuc').val(),
                        n_pretuc:$('#n_pretuc').val(),
                        f_regtuc:$('#f_regtuc').val(),
                        ob_tuc:$('#ob_tuc').val(),
                        l080:$('#l080').val(),
                        hab:$('#hab').val(),
                    },
                    success:function (e){
                        // console.log(e)
                        alert('Modificacion exitosa!')
                    },error: function(xhr, textStatus, error) {
                        let erro=JSON.parse(xhr.responseText)
                        alert(erro.message)
                        // console.log( erro.message);
                        // console.log(xhr.statusText);
                        // console.log(textStatus);
                        // console.log(error);
                    }
                })
                return false
            })
            $('#updatepadronf').submit(function (e){
                $.ajax({
                    url:'/updatepadronf',
                    type:'POST',
                    data:{
                        _token: '{{ csrf_token() }}',
                        padron:$('#padronf').val(),
                        form23:$('#form232').val(),
                        pad1:$('#pad12').val(),
                        pad2:$('#pad22').val(),
                        pad3:$('#pad32').val(),
                        paterno:$('#paterno2').val(),
                        materno:$('#materno2').val(),
                        ap_esposo:$('#ap_esposo2').val(),
                        nombres:$('#nombres2').val(),
                        carnet:$('#carnet2').val(),
                        fono:$('#fono2').val(),
                        domicilio:$('#domicilio2').val(),
                        ruc:$('#ruc2').val(),
                        oper:$('#oper2').val(),
                        fecha:$('#fecha2').val(),
                        hora:$('#hora2').val(),
                        fecha_inic:$('#fecha_inic2').val(),
                        gest:$('#gest2').val(),
                        codigo:$('#codigo2').val(),
                        tipo_pues:$('#tipo_pues2').val(),
                        ancho:$('#ancho2').val(),
                        largo:$('#largo2').val(),
                        observ:$('#observ2').val(),
                        padant:$('#padant2').val(),
                        compr:$('#compr2').val(),
                        bandera:$('#bandera2').val(),
                        asociado:$('#asociado2').val(),
                        nro_asoc:$('#nro_asoc2').val(),
                        n_tug:$('#n_tug2').val(),
                        n_preim:$('#n_preim2').val(),
                        f_regi:$('#f_regi2').val(),
                        l07:$('#l072').val(),
                        tuc:$('#tuc2').val(),
                        n_tuc:$('#n_tuc2').val(),
                        n_pretuc:$('#n_pretuc2').val(),
                        f_regtuc:$('#f_regtuc2').val(),
                        ob_tuc:$('#ob_tuc2').val(),
                        l080:$('#l0802').val(),
                        hab:$('#hab2').val(),
                    },
                    success:function (e){
                        // console.log(e)
                        alert('Modificacion exitosa!')
                    },error: function(xhr, textStatus, error) {
                        let erro=JSON.parse(xhr.responseText)
                        alert(erro.message)
                        // console.log( erro.message);
                        // console.log(xhr.statusText);
                        // console.log(textStatus);
                        // console.log(error);
                    }
                })
                return false
            })
            $('#padronf').keyup(function () {
                $('#spinnerpadronf').show()
                $('#form232').val('')
                $('#pad12').val('')
                $('#pad22').val('')
                $('#pad32').val('')
                $('#paterno2').val('')
                $('#materno2').val('')
                $('#ap_esposo2').val('')
                $('#nombres2').val('')
                $('#carnet2').val('')
                $('#fono2').val('')
                $('#domicilio2').val('')
                $('#ruc2').val('')
                $('#oper2').val('')
                $('#fecha2').val('')
                $('#hora2').val('')
                $('#fecha_inic2').val('')
                $('#gest2').val('')
                $('#codigo2').val('')
                $('#tipo_pues2').val('')
                $('#ancho2').val('')
                $('#largo2').val('')
                $('#observ2').val('')
                $('#padant2').val('')
                $('#compr2').val('')
                $('#bandera2').val('')
                $('#asociado2').val('')
                $('#nro_asoc2').val('')
                $('#n_tug2').val('')
                $('#n_preim2').val('')
                $('#f_regi2').val('')
                $('#l072').val('')
                $('#tuc2').val('')
                $('#n_tuc2').val('')
                $('#n_pretuc2').val('')
                $('#f_regtuc2').val('')
                $('#ob_tuc2').val('')
                $('#l0802').val('')
                $('#hab2').val('')

                if ($(this).val() != '') {
                    $.ajax({
                        url: '/padronf/' + $(this).val(),
                        success: function (e) {
                            $('#spinnerpadronf').hide()
                            // console.log(e)
                            if (e.length > 0) {
                                // console.log(e[0])
                                $('#form232').val(e[0].form23)
                                $('#pad12').val(e[0].pad1)
                                $('#pad22').val(e[0].pad2)
                                $('#pad32').val(e[0].pad3)
                                $('#paterno2').val(e[0].paterno)
                                $('#materno2').val(e[0].materno)
                                $('#ap_esposo2').val(e[0].ap_esposo)
                                $('#nombres2').val(e[0].nombres)
                                $('#carnet2').val(e[0].carnet)
                                $('#fono2').val(e[0].fono)
                                $('#domicilio2').val(e[0].domicilio)
                                $('#ruc2').val(e[0].ruc)
                                $('#oper2').val(e[0].oper)
                                $('#fecha2').val(e[0].fecha)
                                $('#hora2').val(e[0].hora)
                                $('#fecha_inic2').val(e[0].fecha_inic)
                                $('#gest2').val(e[0].gest)
                                $('#codigo2').val(e[0].codigo)
                                $('#tipo_pues2').val(e[0].tipo_pues)
                                $('#ancho2').val(e[0].ancho)
                                $('#largo2').val(e[0].largo)
                                $('#observ2').val(e[0].observ)
                                $('#padant2').val(e[0].padant)
                                $('#compr2').val(e[0].compr)
                                $('#bandera2').val(e[0].bandera)
                                $('#asociado2').val(e[0].asociado)
                                $('#nro_asoc2').val(e[0].nro_asoc)
                                $('#n_tug2').val(e[0].n_tug)
                                $('#n_preim2').val(e[0].n_preim)
                                $('#f_regi2').val(e[0].f_regi)
                                $('#l072').val(e[0].l07)
                                $('#tuc2').val(e[0].tuc)
                                $('#n_tuc2').val(e[0].n_tuc)
                                $('#n_pretuc2').val(e[0].n_pretuc)
                                $('#f_regtuc2').val(e[0].f_regtuc)
                                $('#ob_tuc2').val(e[0].ob_tuc)
                                $('#l0802').val(e[0].l080)
                                $('#hab2').val(e[0].hab)
                            }
                        }

                    })
                } else {
                    $('#spinnerpadronf').hide()
                }
            })

            $('#padrone').keyup(function (){
                $('#spinnerpadrone').show()
                    $('#pad1').val('')
                    $('#pad2').val('')
                    $('#pad3').val('')
                    $('#paterno').val('')
                    $('#materno').val('')
                    $('#ap_esposo').val('')
                    $('#nombres').val('')
                    $('#carnet').val('')
                    $('#fono').val('')
                    $('#domicilio').val('')
                    $('#ruc').val('')
                    $('#oper').val('')
                    $('#fecha').val('')
                    $('#hora').val('')
                    $('#fecha_inic').val('')
                    $('#gest').val('')
                    $('#codigo').val('')
                    $('#tipo_pues').val('')
                    $('#ubicacion').val('')
                    $('#ancho').val('')
                    $('#largo').val('')
                    $('#observ').val('')
                    $('#padant').val('')
                    $('#dias').val('')
                    $('#compr').val('')
                    $('#bandera').val('')
                    $('#asociado').val('')
                    $('#nro_asoc').val('')
                    $('#n_tug').val('')
                    $('#n_preim').val('')
                    $('#f_regi').val('')
                    $('#l07').val('')
                    $('#tuc').val('')
                    $('#n_tuc').val('')
                    $('#n_pretuc').val('')
                    $('#f_regtuc').val('')
                    $('#ob_tuc').val('')
                    $('#l080').val('')
                    $('#hab').val('')
                if ($(this).val()!=''){
                    $.ajax({
                        url:'/padrone/'+$(this).val(),
                        success:function (e){
                            $('#spinnerpadrone').hide()
                            // console.log(e)
                            if (e.length>0){
                                // console.log(e[0])
                                $('#pad1').val(e[0].pad1)
                                $('#pad2').val(e[0].pad2)
                                $('#pad3').val(e[0].pad3)
                                $('#paterno').val(e[0].paterno)
                                $('#materno').val(e[0].materno)
                                $('#ap_esposo').val(e[0].ap_esposo)
                                $('#nombres').val(e[0].nombres)
                                $('#carnet').val(e[0].carnet)
                                $('#fono').val(e[0].fono)
                                $('#domicilio').val(e[0].domicilio)
                                $('#ruc').val(e[0].ruc)
                                $('#oper').val(e[0].oper)
                                $('#fecha').val(e[0].fecha)
                                $('#hora').val(e[0].hora)
                                $('#fecha_inic').val(e[0].fecha_inic)
                                $('#gest').val(e[0].gest)
                                $('#codigo').val(e[0].codigo)
                                $('#tipo_pues').val(e[0].tipo_pues)
                                $('#ubicacion').val(e[0].ubicacion)
                                $('#ancho').val(e[0].ancho)
                                $('#largo').val(e[0].largo)
                                $('#observ').val(e[0].observ)
                                $('#padant').val(e[0].padant)
                                $('#dias').val(e[0].dias)
                                $('#compr').val(e[0].compr)
                                $('#bandera').val(e[0].bandera)
                                $('#asociado').val(e[0].asociado)
                                $('#nro_asoc').val(e[0].nro_asoc)
                                $('#n_tug').val(e[0].n_tug)
                                $('#n_preim').val(e[0].n_preim)
                                $('#f_regi').val(e[0].f_regi)
                                $('#l07').val(e[0].l07)
                                $('#tuc').val(e[0].tuc)
                                $('#n_tuc').val(e[0].n_tuc)
                                $('#n_pretuc').val(e[0].n_pretuc)
                                $('#f_regtuc').val(e[0].f_regtuc)
                                $('#ob_tuc').val(e[0].ob_tuc)
                                $('#l080').val(e[0].l080)
                                $('#hab').val(e[0].hab)
                            }
                        }

                    })
                }else{
                    $('#spinnerpadrone').hide()
                }

                //console.log($(this).val())


            })

            $("#contenido").on("click", ".limpiar", function(){
                // console.log($(this).attr('id-gest'));
                if (confirm('Seguro de limpiar?')){
                    // alert('aun no');
                    var data={
                        "_token": "{{ csrf_token() }}",
                        "gest":$(this).attr('id-gest'),
                        "padron":$(this).attr('id-padron'),
                        // "comun":$('#padron').val(),
                    }
                    $.ajax({
                        url: "/limpiarmercado",
                        type:'POST',
                        data:data,
                        success:function (r){
                            // console.log(r);
                            mostrar($('#padron').val());
                        }
                    });
                }
            });
            function mostrar(padron){
                $('#contenido').html('');
                // console.log($('#comun1').val());
                $.ajax({
                    url: "/pagosmercados/"+padron,
                    success: function (res) {
                        let t='';
                        let c=0;
                        // console.log(res);
                        res.forEach(re=>{
                            re.forEach(r=>{
                                // console.log(r);
                                c++;
                                t+='<tr>' +
                                    '<td>'+c+'</td>' +
                                    '<td>'+r.padron+'</td>' +
                                    '<td>'+r.gestion+'</td>' +
                                    '<td>'+r.imp_pagar+'</td>' +
                                    '<td>'+r.control+'</td>' +
                                    '<td>'+r.cod_caja+'</td>' +
                                    '<td>'+r.fech_pago+'</td>' +
                                    '<td>'+r.hora+'</td>' +
                                    '<td>' +
                                    '<button  class=" limpiar btn btn-danger btn-sm" type="button" id-padron="'+r.padron+'" id-gest="'+r.gestion+'"><i class="fa fa-eye-slash"></i> Anular</button>' +
                                    '</td>' +
                                    '</tr>';
                            })
                        });
                        $('#contenido').html(t);
                    }
                });
            }

            $('#formulario').submit(function(e){
                mostrar($('#padron').val());
                // $('#nombres').html('');
                // $('#gest').val('');
                // $('#contenido').html('');
                // $.ajax({
                //     url: "/dpadron/"+$('#padron').val(),
                //     success:function (re){
                //         $('#nombres').html(re.nombres);
                //         tipo=re.tipo;
                //         $('#gest').val(re.gest);
                //     },
                //     error: function(jqXHR, textStatus, errorThrown) {
                //         console.log(textStatus, errorThrown);
                //     }
                // });
                return false;
            })
        }


    </script>
@endsection
