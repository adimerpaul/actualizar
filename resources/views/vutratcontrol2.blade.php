@extends('layouts.principal')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="bg-dark text-white text-center">Vutrat</h1>
            </div>
            <div class="col-12">
                <form class="row g-3" id="formulario">
                    <div class="col-md-6">
                        <label for="n_tramiteb" class="form-label">n_tramite</label>
                        <input type="text" class="form-control" id="n_tramiteb" required>
                    </div>
                    <div class="col-md-6">
                        <label for="comun1" class="form-label">Buscar</label> <br>
                        <button class="btn btn-primary" type="submit" ><i class="fa fa-search"></i> Buscar</button>
                    </div>
                </form>
            </div>
            <div class="col-12">
                <table class="table">
                    <thead>
                    <tr class="thead-dark">
                        <th>n_tramite</th>
                        <th>c_tramite</th>
                        <th>c_proce</th>
                        <th>c_uni</th>
                        <th>fecha_ini</th>
                        <th>fecha_fin</th>
                        <th>operador</th>
                        <th>estado</th>
                        <th>Opciones</th>
                    </tr>
                    </thead>
                    <tbody id="contenido">
                    </tbody>

                </table>
            </div>
        </div>
        <div class="modal fade" id="controlModal" tabindex="-1" role="dialog" aria-labelledby="controlModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="controlModalLabel">Actualizar control</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="formulariocontrol">
                            <div class="form-group row">
                                <label for="n_tramite" class="col-sm-2 col-form-label">n_tramite</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="n_tramite" placeholder="n_tramite" name="n_tramite">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="c_tramite" class="col-sm-2 col-form-label">c_tramite</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="c_tramite" placeholder="c_tramite" name="c_tramite">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="c_proce" class="col-sm-2 col-form-label">c_proce</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="c_proce" placeholder="c_proce" name="c_proce">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="c_uni" class="col-sm-2 col-form-label">c_uni</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="c_uni" placeholder="c_uni" name="c_uni">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fecha_ini" class="col-sm-2 col-form-label">fecha_ini</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="fecha_ini" placeholder="fecha_ini" name="fecha_ini">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fecha_fin" class="col-sm-2 col-form-label">fecha_fin</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="fecha_fin" placeholder="fecha_fin" name="fecha_fin">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="operador" class="col-sm-2 col-form-label">operador</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="operador" placeholder="operador" name="operador">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="estado" class="col-sm-2 col-form-label">estado</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="estado" placeholder="estado" name="estado">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-trash"></i> Cerrar</button>
                                <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Actualizar</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script>
        window.onload=function (){
            $('#formulariocontrol').submit(function (e){
                e.preventDefault()
                if (confirm('Seguro de actualizar?')){
                    $.ajax({
                        url: "/vseguim/"+CodAut,
                        type:'PUT',
                        data:{
                            "_token": "{{ csrf_token() }}",
                            // "CodAut":CodAut,
                            "n_tramite":$('#n_tramite').val(),
                            "c_tramite":$('#c_tramite').val(),
                            "c_proce":$('#c_proce').val(),
                            "c_uni":$('#c_uni').val(),
                            "fecha_ini":$('#fecha_ini').val(),
                            "fecha_fin":$('#fecha_fin').val(),
                            "operador":$('#operador').val(),
                            "estado":$('#estado').val(),
                        },
                        success:function (r){
                            $('#controlModal').modal('hide')
                            mostrar($('#n_tramiteb').val());
                        }
                    });
                }
                return false
            })
            $('#formulario').submit(function (e){
                e.preventDefault()
                mostrar($('#n_tramiteb').val())
                return false
            })
            var CodAut=''
            $("#contenido").on("click", ".control", function(){
                // console.log($(this).attr('id-n_tramite'));
                CodAut=$(this).attr('id-CodAut')
                $('#n_tramite').val($(this).attr('id-n_tramite'))
                $('#c_tramite').val($(this).attr('id-c_tramite'))
                $('#c_proce').val($(this).attr('id-c_proce'))
                $('#c_uni').val($(this).attr('id-c_uni'))
                $('#fecha_ini').val($(this).attr('id-fecha_ini'))
                $('#fecha_fin').val($(this).attr('id-fecha_fin'))
                $('#operador').val($(this).attr('id-operador'))
                $('#estado').val($(this).attr('id-estado'))
                $('#controlModal').modal('show')
            });
            $("#contenido").on("click", ".limpiar", function(){
                // console.log($(this).attr('id-n_tramite'));
                CodAut=$(this).attr('id-CodAut')
                if (confirm('Seguro de eliminar?')){
                    $.ajax({
                        url: "/vseguim/"+CodAut,
                        type:'DELETE',
                        data:{
                            "_token": "{{ csrf_token() }}",
                        },
                        success:function (r){
                            mostrar($('#n_tramiteb').val());
                        }
                    });
                }
            });
            function mostrar(n_tramite){
                $('#contenido').html('');
                $.ajax({
                    url: "/vseguim",
                    type:'POST',
                    data:{
                        "_token": "{{ csrf_token() }}",
                        n_tramite:n_tramite
                    },
                    success: function (res) {
                        let t='';
                        console.log(res);
                        res.forEach(r=>{
                            t+='<tr>' +
                                '<td>'+r.n_tramite+'</td>' +
                                '<td>'+r.c_tramite+'</td>' +
                                '<td>'+r.c_proce+'</td>' +
                                '<td>'+r.c_uni+'</td>' +
                                '<td>'+r.fecha_ini+'</td>' +
                                '<td>'+r.fecha_fin+'</td>' +
                                '<td>'+r.operador+'</td>' +
                                '<td>'+r.estado+'</td>' +
                                '<td>' +
                                '<div class="btn btn-group">' +
                                '<button  class=" control btn btn-warning btn-sm" type="button" ' +
                                'id-CodAut="'+r.CodAut+'" ' +
                                'id-n_tramite="'+r.n_tramite+'" ' +
                                'id-c_tramite="'+r.c_tramite+'" ' +
                                'id-c_proce="'+r.c_proce+'" ' +
                                'id-c_uni="'+r.c_uni+'"  ' +
                                'id-fecha_ini="'+r.fecha_ini+'" ' +
                                'id-fecha_fin="'+r.fecha_fin+'" ' +
                                'id-operador="'+r.operador+'" ' +
                                'id-estado="'+r.estado+'" ' +
                                '><i class="fa fa-edit"></i> Modificar</button>' +
                                '<button  class=" limpiar btn btn-danger btn-sm" type="button" id-CodAut="'+r.CodAut+'" ><i class="fa fa-trash"></i> Eliminar</button>' +
                                '</div>'+
                                '</td>' +
                                '</tr>';
                        })
                        $('#contenido').html(t);
                    }
                });
            }
        }
    </script>
@endsection
