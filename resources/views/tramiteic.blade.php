@extends('layouts.principal')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1 class="bg-purple pt-1 text-center text-white"> Tramitec IC</h1>
                <div class="table-responsive">
                    <table id="funcionarios" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>tramites</th>
                            <th>NJ</th>
                            <th>form</th>
                            <th>padron</th>
                            <th>Direccion</th>
                            <th>Opciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($tramites as $row)
                            <tr>
                                <td>{{$row->n_tramite}}</td>
                                <td>{{$row->na_ju}} </td>
                                <td>{{$row->form}}</td>
                                <td>{{$row->padron}}</td>
                                <td>{{$row->dir_nuevo}}</td>
                                <td>
                                    <button class="btn btn-warning btn-circle btn-sm" data-toggle="modal" data-target="#exampleModal"
                                            data-n_tramite="{{$row->n_tramite}}"
                                            data-na_ju="{{$row->na_ju}}"
                                            data-form="{{$row->form}}"
                                            data-padron="{{$row->padron}}"
                                            data-t_cambio="{{$row->t_cambio}}"
                                            data-cod_nuevo="{{$row->cod_nuevo}}"
                                            data-sec_nuevo="{{$row->sec_nuevo}}"
                                            data-pad_nuevo="{{$row->pad_nuevo}}"
                                            data-raz_nuevo="{{$row->raz_nuevo}}"
                                            data-pat_nuevo="{{$row->pat_nuevo}}"
                                            data-mat_nuevo="{{$row->mat_nuevo}}"
                                            data-nom_nuevo="{{$row->nom_nuevo}}"
                                            data-ape_nuevo="{{$row->ape_nuevo}}"
                                            data-ci_nuevo="{{$row->ci_nuevo}}"
                                            data-dom_nuevo="{{$row->dom_nuevo}}"
                                            data-dir_nuevo="{{$row->dir_nuevo}}"
                                            data-zon_nuevo="{{$row->zon_nuevo}}"
                                            data-form22="{{$row->form22}}"
                                            data-comprob="{{$row->comprob}}"
                                            data-t_requi="{{$row->t_requi}}"
                                            data-req_1="{{$row->req_1}}"
                                            data-req_2="{{$row->req_2}}"
                                            data-req_3="{{$row->req_3}}"
                                            data-req_4="{{$row->req_4}}"
                                            data-req_5="{{$row->req_5}}"
                                            data-req_6="{{$row->req_6}}"
                                            data-req_7="{{$row->req_7}}"
                                            data-req_8="{{$row->req_8}}"
                                            data-c_me_amb="{{$row->c_me_amb}}"
                                            data-observacio="{{$row->observacio}}"
                                            data-form_pmc="{{$row->form_pmc}}"
                                            data-n_res_tec="{{$row->n_res_tec}}"
                                    ><i class="fa fa-save"></i> </button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" style="min-width: 98%" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form class="row" id="fomulario" method="POST" action="/tramites">
                                    @csrf
                                    <div class="col-md-3"><label for="n_tramite" >n_tramite</label><input class="form-control" name="n_tramite" id="n_tramite" placeholder="n_tramite"></div>
                                    <div class="col-md-3"><label for="na_ju" >na_ju</label><input class="form-control" name="na_ju" id="na_ju" placeholder="na_ju"></div>
                                    <div class="col-md-3"><label for="form" >form</label><input class="form-control" name="form" id="form" placeholder="form"></div>
                                    <div class="col-md-3"><label for="padron" >padron</label><input class="form-control" name="padron" id="padron" placeholder="padron"></div>
                                    <div class="col-md-3"><label for="t_cambio" >t_cambio</label><input class="form-control" name="t_cambio" id="t_cambio" placeholder="t_cambio"></div>
                                    <div class="col-md-3"><label for="cod_nuevo" >cod_nuevo</label><input class="form-control" name="cod_nuevo" id="cod_nuevo" placeholder="cod_nuevo"></div>
                                    <div class="col-md-3"><label for="sec_nuevo" >sec_nuevo</label><input class="form-control" name="sec_nuevo" id="sec_nuevo" placeholder="sec_nuevo"></div>
                                    <div class="col-md-3"><label for="pad_nuevo" >pad_nuevo</label><input class="form-control" name="pad_nuevo" id="pad_nuevo" placeholder="pad_nuevo"></div>
                                    <div class="col-md-3"><label for="raz_nuevo" >raz_nuevo</label><input class="form-control" name="raz_nuevo" id="raz_nuevo" placeholder="raz_nuevo"></div>
                                    <div class="col-md-3"><label for="pat_nuevo" >pat_nuevo</label><input class="form-control" name="pat_nuevo" id="pat_nuevo" placeholder="pat_nuevo"></div>
                                    <div class="col-md-3"><label for="mat_nuevo" >mat_nuevo</label><input class="form-control" name="mat_nuevo" id="mat_nuevo" placeholder="mat_nuevo"></div>
                                    <div class="col-md-3"><label for="nom_nuevo" >nom_nuevo</label><input class="form-control" name="nom_nuevo" id="nom_nuevo" placeholder="nom_nuevo"></div>
                                    <div class="col-md-3"><label for="ape_nuevo" >ape_nuevo</label><input class="form-control" name="ape_nuevo" id="ape_nuevo" placeholder="ape_nuevo"></div>
                                    <div class="col-md-3"><label for="ci_nuevo" >ci_nuevo</label><input class="form-control" name="ci_nuevo" id="ci_nuevo" placeholder="ci_nuevo"></div>
                                    <div class="col-md-3"><label for="dom_nuevo" >dom_nuevo</label><input class="form-control" name="dom_nuevo" id="dom_nuevo" placeholder="dom_nuevo"></div>
                                    <div class="col-md-3"><label for="dir_nuevo" >dir_nuevo</label><input class="form-control" name="dir_nuevo" id="dir_nuevo" placeholder="dir_nuevo"></div>
                                    <div class="col-md-3"><label for="zon_nuevo" >zon_nuevo</label><input class="form-control" name="zon_nuevo" id="zon_nuevo" placeholder="zon_nuevo"></div>
                                    <div class="col-md-3"><label for="form22" >form22</label><input class="form-control" name="form22" id="form22" placeholder="form22"></div>
                                    <div class="col-md-3"><label for="comprob" >comprob</label><input class="form-control" name="comprob" id="comprob" placeholder="comprob"></div>
                                    <div class="col-md-3"><label for="t_requi" >t_requi</label><input class="form-control" name="t_requi" id="t_requi" placeholder="t_requi"></div>
                                    <div class="col-md-3"><label for="req_1" >req_1</label><input class="form-control" name="req_1" id="req_1" placeholder="req_1"></div>
                                    <div class="col-md-3"><label for="req_2" >req_2</label><input class="form-control" name="req_2" id="req_2" placeholder="req_2"></div>
                                    <div class="col-md-3"><label for="req_3" >req_3</label><input class="form-control" name="req_3" id="req_3" placeholder="req_3"></div>
                                    <div class="col-md-3"><label for="req_4" >req_4</label><input class="form-control" name="req_4" id="req_4" placeholder="req_4"></div>
                                    <div class="col-md-3"><label for="req_5" >req_5</label><input class="form-control" name="req_5" id="req_5" placeholder="req_5"></div>
                                    <div class="col-md-3"><label for="req_6" >req_6</label><input class="form-control" name="req_6" id="req_6" placeholder="req_6"></div>
                                    <div class="col-md-3"><label for="req_7" >req_7</label><input class="form-control" name="req_7" id="req_7" placeholder="req_7"></div>
                                    <div class="col-md-3"><label for="req_8" >req_8</label><input class="form-control" name="req_8" id="req_8" placeholder="req_8"></div>
                                    <div class="col-md-3"><label for="c_me_amb" >c_me_amb</label><input class="form-control" name="c_me_amb" id="c_me_amb" placeholder="c_me_amb"></div>
                                    <div class="col-md-3"><label for="observacio" >observacio</label><input class="form-control" name="observacio" id="observacio" placeholder="observacio"></div>
                                    <div class="col-md-3"><label for="form_pmc" >form_pmc</label><input class="form-control" name="form_pmc" id="form_pmc" placeholder="form_pmc"></div>
                                    <div class="col-md-3"><label for="n_res_tec" >n_res_tec</label><input class="form-control" name="n_res_tec" id="n_res_tec" placeholder="n_res_tec"></div>
                                    <div class="col-12">
                                        <button class="btn btn-warning" type="submit" id="btna"><i class="fa fa-check-circle"></i> Actualizar</button>
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
            var cod_per;
            $('#exampleModal').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                $('#n_tramite').val(button.data('n_tramite'));
                $('#na_ju').val(button.data('na_ju'));
                $('#form').val(button.data('form'));
                $('#padron').val(button.data('padron'));
                $('#t_cambio').val(button.data('t_cambio'));
                $('#cod_nuevo').val(button.data('cod_nuevo'));
                $('#sec_nuevo').val(button.data('sec_nuevo'));
                $('#pad_nuevo').val(button.data('pad_nuevo'));
                $('#raz_nuevo').val(button.data('raz_nuevo'));
                $('#pat_nuevo').val(button.data('pat_nuevo'));
                $('#mat_nuevo').val(button.data('mat_nuevo'));
                $('#nom_nuevo').val(button.data('nom_nuevo'));
                $('#ape_nuevo').val(button.data('ape_nuevo'));
                $('#ci_nuevo').val(button.data('ci_nuevo'));
                $('#dom_nuevo').val(button.data('dom_nuevo'));
                $('#dir_nuevo').val(button.data('dir_nuevo'));
                $('#zon_nuevo').val(button.data('zon_nuevo'));
                $('#form22').val(button.data('form22'));
                $('#comprob').val(button.data('comprob'));
                $('#t_requi').val(button.data('t_requi'));
                $('#req_1').val(button.data('req_1'));
                $('#req_2').val(button.data('req_2'));
                $('#req_3').val(button.data('req_3'));
                $('#req_4').val(button.data('req_4'));
                $('#req_5').val(button.data('req_5'));
                $('#req_6').val(button.data('req_6'));
                $('#req_7').val(button.data('req_7'));
                $('#req_8').val(button.data('req_8'));
                $('#c_me_amb').val(button.data('c_me_amb'));
                $('#observacio').val(button.data('observacio'));
                $('#form_pmc').val(button.data('form_pmc'));
                $('#n_res_tec').val(button.data('n_res_tec'));
                // Extract info from data-* attributes
                // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
                var modal = $(this)
                modal.find('.modal-title').text('Tramite ' + button.data('n_tramite'))
                // modal.find('.modal-body input').val(recipient)
            })
            $('#modificar').submit(function (e){
                let data={
                    '_token': "{{ csrf_token() }}",
                    'fech_caduca':$('#fech_caduca').val(),
                    'cod_per': cod_per
                };
                    $.ajax({
                        url:'/vutrat',
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
