@extends('layouts.principal')
@section('content')
    <div class="container">
        <h1 class="text-center bg-primary text-white mt-1">Impuesto municipales a las tranferencias bienes inmuebles</h1>
        <div class="row">
            <div class="col-sm-6">
                <form class="form-horizontal">
                    <div class="card-body">
                        <h4 class="card-title">Determinacion IMT</h4>

                        <div class="form-group row">
                            <label for="imt" class="col-sm-5 text-end control-label col-form-label">Deuda del IMT</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="imt" placeholder="Deuda del IMT">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="pagado" class="col-sm-5 text-end control-label col-form-label">Monto pagado</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="pagado" placeholder="Monto pagado">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="saldo" class="col-sm-5 text-end control-label col-form-label text-danger">Saldo</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" disabled id="saldo" placeholder="Monto saldo">
                            </div>
                        </div>
                        <h4 class="card-title">Mantenimiento de valor al {{date('Y-m-d')}}</h4>
                        <div class="form-group row">
                            <label for="ufv" class="col-sm-5 text-end control-label col-form-label">UFV {{date('Y-m-d')}}</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="ufv" placeholder="ufv" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fechaminuta" class="col-sm-5 text-end control-label col-form-label">Fech Lim. Minu <i id="fl" class="fa fa-spinner"></i></label>
                            <div class="col-sm-6">
                                <input type="date" class="form-control" id="fechaminuta" placeholder="Fecha de la minuta" value="{{date('Y-m-d')}}">
                            </div>
                            <div class="col-sm-1">
                                <button id="buscarminuta" type="button" class="btn btn-sm btn-success"><i class="fa fa-plus-circle"></i></button>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ufvdia" class="col-sm-5 text-end control-label col-form-label">UFV dia</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="ufvdia" placeholder="UFV dia" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="mantenimiento" class="col-sm-5 text-end control-label col-form-label text-danger">Mantenimiento al valor</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="mantenimiento" placeholder="Mantenimiento al valor" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button type="button" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-sm-6">
                <form class="form-horizontal">
                    <div class="card-body">
                        <h4 class="card-title">Interes</h4>
                        <div class="form-group row">
                            <label for="diasmora" class="col-sm-5 text-end control-label col-form-label">Dias de mora</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="diasmora" placeholder="Dias de mora" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tasapare" class="col-sm-5 text-end control-label col-form-label">Tasapare</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="tasapare" placeholder="Tasapare" value="9.99">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="interes" class="col-sm-5 text-end control-label col-form-label text-danger">Interes</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" disabled id="interes" placeholder="Interes">
                            </div>
                        </div>
                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button type="button" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <script>
        window.onload=function (){
            $('#fl').hide();
            $.ajax({
                url:'transferencia/1',
                success:function (e){
                    // console.log(e);
                    $('#ufv').val(e[0].coti)
                }
            })
            $('#imt,#pagado').keyup(function (){
                // console.log($(this).val())
                $('#saldo').val(parseFloat($('#imt').val())-parseFloat($('#pagado').val()));
            });
            $('#buscarminuta').click(function (){
                if ($('#imt').val()==''){
                    alert('Selecionar IMT');
                    return false;
                }
                $('#fl').show('fast');
                // console.log($(this).val());
                let data={
                    '_token':"{{ csrf_token() }}",
                    '_method':'PUT',
                    'fecha':$('#fechaminuta').val()
                };
                $.ajax({
                    url:'transferencia/1',
                    type:'POST',
                    data:data,
                    success:function (e){
                        // console.log(e);
                        $('#fl').hide('fast');
                        if (  e.length>0){
                            $('#ufvdia').val(e[0].coti)
                            $('#mantenimiento').val( ((parseFloat($('#ufv').val())/parseFloat($('#ufvdia').val()))-1)* parseFloat($('#saldo').val()) );
                            let fecha1 = moment($('#fechaminuta').val());
                            let fecha2 = moment('{{date('Y-m-d')}}');
                            $('#diasmora').val(fecha2.diff(fecha1, 'days'))
                            let diasmora=$('#diasmora').val();
                            let i= ((((diasmora/360))*($('#tasapare').val()/100))*$('#saldo').val())+$('#mantenimiento').val();
                            $('#interes').val(i);
                        }else{
                            $('#ufvdia').val('');
                            $('#mantenimiento').val('');
                            $('#diasmora').val('');
                        }
                    }
                })
            });
        }

    </script>
@endsection
