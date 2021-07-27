@extends('layouts.principal')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="h3 bg-info text-center text-white">Cobro de transferencia</div>
            </div>
            <div class="col-md-4">
{{--                <form action="">--}}
                    <label for="">Ingrese numero de registro <i class="fa fa-spinner" id="spinner"></i></label>
                    <input type="text" id="inmueble" class="form-control" placeholder="Ingresar num reg">
{{--                </form>--}}
            </div>
            <div class="col-md-4">
                <label for="nombrecomprador">nombrecomprador</label>
                <input type="text" disabled class="form-control" id="nombrecomprador" placeholder="nombrecomprador">
            </div>
            <div class="col-md-4">
                <label for="nombrevendedor">nombrevendedor</label>
                <input type="text" disabled class="form-control" id="nombrevendedor" placeholder="nombrevendedor">
            </div>
            <div class="col-md-4">
                <label for="totalpagar">totalpagar</label>
                <input type="text" disabled class="form-control" id="totalpagar" placeholder="totalpagar">
            </div>
            <div class="col-md-12">
{{--                <label for="totalpagar">totalpagar</label>--}}
{{--                <input type="text" disabled class="form-control" id="totalpagar" placeholder="totalpagar">--}}
                <button class="btn btn-block btn-success" id="cobrar"> <i class="fa fa-plus-circle"></i> Realizar cobro</button>
            </div>
        </div>
    </div>
@endsection
<script>
    window.onload=function (){
        $('#spinner').hide('fast')
        var id=0;
        $('#cobrar').click(function (e){
            if ($('#inmueble').val()=="" ||$('#nombrecomprador').val()==""){
                alert("Selecionar un inmueble")
                return false
            }
            if (id==0){
                alert("Nose encontro inmueble un inmueble")
                return false
            }
            if (confirm('Seguro de cobrar?')){
                $.ajax({
                    url:'/cobraracaja/'+id,
                    success:function (e){
                        // let dato= JSON.parse(e);
                        // console.log(e)
                        // if (dato)
                        // $('#spinner').hide('fast')
                        // if (e.length==1){
                        //     $('#nombrecomprador').val(e[0].nombrecomprador)
                        //     $('#nombrevendedor').val(e[0].nombrevendedor)
                        //     $('#totalpagar').val(e[0].totalpagar)
                        //     id=e[0].id
                        // }
                        $('#inmueble').val('');
                        $('#nombrecomprador').val('')
                        $('#nombrevendedor').val('')
                        $('#totalpagar').val('')
                        let dat=e[0];
                        var doc = new jsPDF('p','cm','legal')
                        // console.log(dat);
                        doc.setFont("courier");
                        doc.setFontSize(7);
                        var x=0.2,y=0;
                        doc.text(x+16.5, y+6.7, "Gobierno Municipal Oruro");
                        doc.text(x+16.5, y+7, "PMC"+dat.cantidad.toString()+' CAT:'+dat.codigocatastral.toString());
                        doc.text(x+16.5, y+7.3, "Cajero:"+dat.cajero.toString()+' Fecha:'+dat.fechacobro.toString());
                        doc.text(x+16.5, y+7.7, "**"+dat.totalpagar.toString()+'Bs RECTIFICADO');
                        // /*fin parte uno*/
                        x=0.2;
                        y=8.3;
                        doc.text(x+16.5, y+6.7, "Gobierno Municipal Oruro");
                        doc.text(x+16.5, y+7, "PMC"+dat.cantidad.toString()+' CAT:'+dat.codigocatastral.toString());
                        doc.text(x+16.5, y+7.3, "Cajero:"+dat.cajero.toString()+' Fecha:'+dat.fechacobro.toString());
                        doc.text(x+16.5, y+7.7, "**"+dat.totalpagar.toString()+'Bs RECTIFICADO');

                        // // /*fin parte dos*/
                        x=0.2;
                        y=16.8;
                        doc.text(x+16.5, y+6.7, "Gobierno Municipal Oruro");
                        doc.text(x+16.5, y+7, "PMC"+dat.cantidad.toString()+' CAT:'+dat.codigocatastral.toString());
                        doc.text(x+16.5, y+7.3, "Cajero:"+dat.cajero.toString()+' Fecha:'+dat.fechacobro.toString());
                        doc.text(x+16.5, y+7.7, "**"+dat.totalpagar.toString()+'Bs RECTIFICADO');
                        // // /*fin parte tres*/
                        x=0.2;
                        y=21.5;
                        doc.text(x+16.5, y+6.7, "Gobierno Municipal Oruro");
                        doc.text(x+16.5, y+7, "PMC"+dat.cantidad.toString()+' CAT:'+dat.codigocatastral.toString());
                        doc.text(x+16.5, y+7.3, "Cajero:"+dat.cajero.toString()+' Fecha:'+dat.fechacobro.toString());
                        doc.text(x+16.5, y+7.7, "**"+dat.totalpagar.toString()+'Bs RECTIFICADO');
                        window.open(doc.output('bloburl'), '_blank');
                    }
                })
            }
            e.preventDefault();
        });
        $('#inmueble').keyup(function (){
            // console.log($(this).val())
            $('#nombrecomprador').val('')
            $('#nombrevendedor').val('')
            $('#totalpagar').val('')
            $('#spinner').show('fast')
            id=0;
            $.ajax({
                url:'/buscar/'+$(this).val(),
                success:function (e){
                    // let dato= JSON.parse(e);
                    // console.log(e)
                    // if (dato)
                    $('#spinner').hide('fast')
                    if (e.length==1){
                        $('#nombrecomprador').val(e[0].nombrecomprador)
                        $('#nombrevendedor').val(e[0].nombrevendedor)
                        $('#totalpagar').val(e[0].totalpagar)
                        id=e[0].id
                    }
                }
            })
            return false;
        });

    }
</script>
