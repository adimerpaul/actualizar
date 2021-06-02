@extends('layouts.principal')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="bg-dark pt-1 text-center text-white"> Operadores</h1>
                <div class="table-responsive">
                    <table id="funcionarios" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>Cod</th>
                            <th>Nombre</th>
                            <th>Oper</th>
                            <th>Caducacion</th>
                            <th>Opciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($funcionarios as $row)
                            <tr>
                                <td>{{$row->num}}</td>
                                <td>{{$row->nc}}</td>
                                <td>{{$row->nu}}</td>
                                <td>{{$row->fech_cad}}</td>
                                <td>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-num="{{$row->num}}" data-nc="{{$row->nc}}" data-fech_cad="{{$row->fech_cad}}" > <i class="fa fa-address-card"></i> Cambiar</button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form id="modificar">
                                    <div class="form-group">
                                        <label for="fech_cad" class="col-form-label">Fecha caducacion:</label>
                                        <input type="text" class="form-control" id="fech_cad">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-trash"></i> Cerrar</button>
                                        <button type="submit" class="btn btn-success"><i class="fa fa-plus-circle"></i> Cambiar</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script>
        window.onload=function (){
            $('#funcionarios').DataTable();
            var num;
            $('#exampleModal').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var nc = button.data('nc')
                $('#fech_cad').val(button.data('fech_cad'));
                num=button.data('num');
                // Extract info from data-* attributes
                // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
                var modal = $(this)
                modal.find('.modal-title').text('Operador ' + nc)
                // modal.find('.modal-body input').val(recipient)
            })
            $('#modificar').submit(function (e){
                let data={
                    '_token': "{{ csrf_token() }}",
                    'fech_cad':$('#fech_cad').val(),
                    'num': num
                };
                    $.ajax({
                        url:'/utasas',
                        type:'POST',
                        data:data,
                        success:function (e){
                            // console.log(e);
                            $('#exampleModal').modal('hide');
                        }
                    })
                return false;
            });

            {{--// var table=$('#zero_config').DataTable({--}}
            {{--//     "order": [[ 0, "desc" ]]--}}
            {{--// });--}}

            {{--$('#fomulario').submit(function (){--}}
            {{--    $.ajax({--}}
            {{--        url:'/ufv',--}}
            {{--        type:'POST',--}}
            {{--        data:{'_token': "{{ csrf_token() }}",'fecha':$('#fecha').val(),'coti':$('#coti').val(),'tipodia':$('#tipodia').val()},--}}
            {{--        success:function (e){--}}
            {{--            // console.log(e);--}}
            {{--            mostrar();--}}
            {{--        }--}}
            {{--    })--}}
            {{--    return false;--}}
            {{--});--}}
            {{--$('#modificar').submit(function (){--}}
            {{--    // console.log('a');--}}
            {{--    let data={--}}
            {{--        '_method': "PUT",--}}
            {{--        '_token': "{{ csrf_token() }}",--}}
            {{--        'fecha':$('#fecha2').val(),--}}
            {{--        'coti':$('#coti2').val(),--}}
            {{--        'tipodia':$('#tipodia2').val()--}}
            {{--    };--}}
            {{--    $('#contenido').html('');--}}
            {{--    $.ajax({--}}
            {{--        url:'/ufv/'+CodAut,--}}
            {{--        type:'POST',--}}
            {{--        data:data,--}}
            {{--        success:function (e){--}}
            {{--            // console.log(e);--}}
            {{--            $('#exampleModal').modal('hide');--}}

            {{--            mostrar();--}}
            {{--        }--}}
            {{--    })--}}
            {{--    return false;--}}
            {{--});--}}
            {{--var CodAut;--}}
            {{--$('#contenido').on('click','.modificar',function (e){--}}
            {{--    CodAut=$(this).attr('id-CodAut');--}}
            {{--    $('#fecha2').val($(this).attr('id-fecha'));--}}
            {{--    $('#coti2').val($(this).attr('id-coti'));--}}
            {{--    $('#tipodia2').val($(this).attr('id-tipodia'));--}}
            {{--    $('#exampleModal').modal('show');--}}
            {{--    //console.log($(this).attr('id-CodAut'));--}}
            {{--    e.preventDefault();--}}
            {{--})--}}
            {{--// mostrar();--}}
            {{--function mostrar(){--}}
            {{--    $('#contenido').html('');--}}
            {{--    table.destroy();--}}
            {{--    $.ajax({--}}
            {{--        url:'/ufv/1',--}}
            {{--        success:function (e){--}}
            {{--            // console.log(e);--}}
            {{--            let t='';--}}
            {{--            e.forEach(r=>{--}}
            {{--                t+="<tr>" +--}}
            {{--                    "<td>"+r.CodAut+"</td>"+--}}
            {{--                    "<td>"+r.fecha+"</td>"+--}}
            {{--                    "<td>"+r.coti+"</td>"+--}}
            {{--                    "<td>"+r.tipodia+"</td>"+--}}
            {{--                    "<td><button id-CodAut='"+r.CodAut+"' id-fecha='"+r.fecha+"' id-coti='"+r.coti+"' id-tipodia='"+r.tipodia+"' class='modificar btn btn-warning'><i class='fa fa-edit'></i> Modificar</button></td>"+--}}
            {{--                    "</tr>";--}}
            {{--            });--}}
            {{--            $('#contenido').html(t);--}}
            {{--            table=$('#zero_config').DataTable({--}}
            {{--                "order": [[ 0, "desc" ]]--}}
            {{--            });--}}
            {{--        }--}}
            {{--    })--}}
            {{--};--}}
        }


    </script>
@endsection
