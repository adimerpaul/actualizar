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
                            <label for="saldo" class="col-sm-5 text-end control-label col-form-label">Saldo</label>
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
                            <label for="fechaminuta" class="col-sm-5 text-end control-label col-form-label">Fecha limite minuta</label>
                            <div class="col-sm-7">
                                <input type="date" class="form-control" id="fechaminuta" placeholder="Fecha de la minuta" value="{{date('Y-m-d')}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ufvdia" class="col-sm-5 text-end control-label col-form-label">UFV dia</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="ufvdia" placeholder="UFV dia" disabled>
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
            $('#fechaminuta').change(function (){
                // console.log($(this).val());
                let data={
                    '_token':"{{ csrf_token() }}",
                    '_method':'PUT',
                    'fecha':$(this).val()
                };
                $.ajax({
                    url:'transferencia/1',
                    type:'POST',
                    data:data,
                    success:function (e){
                        console.log(e);
                        // $('#ufv').val(e[0].coti)
                    }
                })
            });
        }

    </script>
@endsection
