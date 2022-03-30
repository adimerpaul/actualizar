@extends('layouts.principal')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="bg-cyan text-white text-center">Bajas naturales</h1>
            </div>
            <div class="col-12">
                <form class="row g-3" id="formulario">
                    <div class="col-md-6">
                        <label for="npadronb" class="form-label">npadron</label>
                        <input type="text" class="form-control" id="npadronb" required>
                    </div>
                    <div class="col-md-6">
                        <label for="comun1" class="form-label">Buscar</label> <br>
                        <button class="btn btn-primary" type="submit" ><i class="fa fa-search"></i> Buscar</button>
                    </div>
                </form>
            </div>
            <div class="col-12">
                <form id="formulariocontrol">
                    <div class="form-group row">
                        <label for="paterno" class="col-sm-1 col-form-label">paterno</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="paterno" placeholder1="paterno" name="paterno">
                        </div>
                        <label for="materno" class="col-sm-1 col-form-label">materno</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="materno" placeholder1="materno" name="materno">
                        </div>
                        <label for="nombre" class="col-sm-1 col-form-label">nombre</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="nombre" placeholder1="nombre" name="nombre">
                        </div>
                        <label for="ndireccion" class="col-sm-1 col-form-label">ndireccion</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="ndireccion" placeholder1="ndireccion" name="ndireccion">
                        </div>
                        <label for="cedula" class="col-sm-1 col-form-label">cedula</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="cedula" placeholder1="cedula" name="cedula">
                        </div>
                        <label for="ndiract" class="col-sm-1 col-form-label">ndiract</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="ndiract" placeholder1="ndiract" name="ndiract">
                        </div>
                        <label for="nactdescri" class="col-sm-1 col-form-label">nactdescri</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="nactdescri" placeholder1="nactdescri" name="nactdescri">
                        </div>
                        <label for="nsector" class="col-sm-1 col-form-label">nsector</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="nsector" placeholder1="nsector" name="nsector">
                        </div>
                        <label for="nzona" class="col-sm-1 col-form-label">nzona</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="nzona" placeholder1="nzona" name="nzona">
                        </div>
                        <label for="nmts2" class="col-sm-1 col-form-label">nmts2</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="nmts2" placeholder1="nmts2" name="nmts2">
                        </div>
                        <label for="gest" class="col-sm-1 col-form-label">gest</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="gest" placeholder1="gest" name="gest">
                        </div>
                        <label for="nfechainic" class="col-sm-1 col-form-label">nfechainic</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="nfechainic" placeholder1="nfechainic" name="nfechainic">
                        </div>
                        <label for="form_23" class="col-sm-1 col-form-label">form_23</label>
                        <div class="col-sm-5">
                            <input type="text" required class="form-control" id="form_23" placeholder1="form_23" name="form_23">
                        </div>
                        <label for="comp_baja" class="col-sm-1 col-form-label">comp_baja</label>
                        <div class="col-sm-5">
                            <input type="text" required class="form-control" id="comp_baja" placeholder1="comp_baja" name="comp_baja">
                        </div>
                        <label for="fe_baja" class="col-sm-1 col-form-label">fe_baja</label>
                        <div class="col-sm-5">
                            <input type="text" required class="form-control" id="fe_baja" placeholder1="fe_baja" name="fe_baja">
                        </div>
                        <label for="cau_baja" class="col-sm-1 col-form-label">cau_baja</label>
                        <div class="col-sm-5">
                            <input type="text" required class="form-control" id="cau_baja" placeholder1="cau_baja" name="cau_baja">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success btn-block"><i class="fa fa-save"></i> Dar de baja</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        window.onload=function (){
            // $('#npadronb').val('1-129-16047')
            $('#formulariocontrol').submit(function (e){
                e.preventDefault()
                if (confirm('Seguro de actualizar?')){
                    $.ajax({
                        url: "/natur_baja",
                        type:'POST',
                        data:{
                            "_token": "{{ csrf_token() }}",
                            npadron:$('#npadronb').val(),
                            paterno:$('#paterno').val(),
                            materno:$('#materno').val(),
                            nombre:$('#nombre').val(),
                            ndireccion:$('#ndireccion').val(),
                            cedula:$('#cedula').val(),
                            ndiract:$('#ndiract').val(),
                            nactdescri:$('#nactdescri').val(),
                            nsector:$('#nsector').val(),
                            nzona:$('#nzona').val(),
                            nmts2:$('#nmts2').val(),
                            gest:$('#gest').val(),
                            nfechainic:$('#nfechainic').val(),
                            form_23:$('#form_23').val(),
                            comp_baja:$('#comp_baja').val(),
                            fe_baja:$('#fe_baja').val(),
                            cau_baja:$('#cau_baja').val(),
                            form22:form22,
                            ntelefono:ntelefono,
                            nacionalid:nacionalid,
                            nruc:nruc,
                            apeesposo:apeesposo,
                            formcaja:formcaja,
                            fed:fed,
                            nufed:nufed,
                            adeuda:adeuda,
                            bandera:bandera,
                            asociado:asociado,
                            nro_asoc:nro_asoc,
                            n_tug:n_tug,
                            n_preim:n_preim,
                            f_regi:f_regi,
                            bloqueo:bloqueo,
                            l07:l07,
                            l07nmts2:l07nmts2,
                            l259:l259,
                            categtoria:categtoria,
                            horario:horario,
                            lfini:lfini,
                        },
                        success:function (r){
                            // $('#controlModal').modal('hide')
                            // mostrar($('#n_tramiteb').val());
                            if (r=='existe'){
                                alert('existe el padron ya fue dado de baja!')
                                return false
                            }
                        }
                    });
                }
                return false
            })
            $('#formulario').submit(function (e){
                e.preventDefault()
                mostrar($('#npadronb').val())
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
            var form22
            var ntelefono
            var nacionalid
            var nruc
            var apeesposo
            var formcaja
            var fed
            var nufed
            var adeuda
            var bandera
            var asociado
            var nro_asoc
            var n_tug
            var n_preim
            var f_regi
            var bloqueo
            var l07
            var l07nmts2
            var l259
            var categtoria
            var horario
            var lfini
            function mostrar(n_padron){
                $('#paterno').val('')
                $('#materno').val('')
                $('#nombre').val('')
                $('#ndireccion').val('')
                $('#cedula').val('')
                $('#ndiract').val('')
                $('#nactdescri').val('')
                $('#nsector').val('')
                $('#nzona').val('')
                $('#nmts2').val('')
                $('#gest').val('')
                $('#nfechainic').val('')
                $.ajax({
                    url: "/natur_baja/"+n_padron,
                    success: function (res) {
                        console.log(res)
                        // return false
                        let dat=res[0]
                        $('#paterno').val(dat.paterno)
                        $('#materno').val(dat.materno)
                        $('#nombre').val(dat.nombre)
                        $('#ndireccion').val(dat.ndireccion)
                        $('#cedula').val(dat.cedula)
                        $('#ndiract').val(dat.ndiract)
                        $('#nactdescri').val(dat.nactdescri)
                        $('#nsector').val(dat.nsector)
                        $('#nzona').val(dat.nzona)
                        $('#nmts2').val(dat.nmts2)
                        $('#gest').val(dat.gest)
                        $('#nfechainic').val(dat.nfechainic)
                        form22=dat.form22
                        ntelefono=dat.ntelefono
                        nacionalid=dat.nacionalid
                        nruc=dat.nruc
                        apeesposo=dat.apeesposo
                        formcaja=dat.formcaja
                        fed=dat.fed
                        nufed=dat.nufed
                        adeuda=dat.adeuda
                        bandera=dat.bandera
                        asociado=dat.asociado
                        nro_asoc=dat.nro_asoc
                        n_tug=dat.n_tug
                        n_preim=dat.n_preim
                        f_regi=dat.f_regi
                        bloqueo=dat.bloqueo
                        l07=dat.l07
                        l07nmts2=dat.l07nmts2
                        l259=dat.l259
                        categtoria=dat.categtoria
                        horario=dat.horario
                        lfini=dat.lfini
                        // let t='';
                        // // console.log(res);
                        // res.forEach(r=>{
                        //     t+='<tr>' +
                        //         '<td>'+r.npadron+'</td>'+
                        //         '<td>'+r.paterno+'</td>'+
                        //         '<td>'+r.materno+'</td>'+
                        //         '<td>'+r.nombre+'</td>'+
                        //         '<td>'+r.cedula+'</td>'+
                        //         '<td>'+r.ntelefono+'</td>'+
                        //         '<td>'+r.ndireccion+'</td>'+
                        //         '<td>'+r.nacionalid+'</td>'+
                        //         '<td>'+r.nruc+'</td>'+
                        //         '<td>'+r.nactdescri+'</td>'+
                        //         '<td>'+r.nsector+'</td>'+
                        //         '<td>'+r.nfechainic+'</td>'+
                        //         '<td>'+r.apeesposo+'</td>'+
                        //         '<td>'+r.nzona+'</td>'+
                        //         '<td>'+r.nmts2+'</td>'+
                        //         '<td>'+r.ndiract+'</td>'+
                        //         '<td>'+r.formcaja+'</td>'+
                        //         '<td>'+r.gest+'</td>'+
                        //         '<td>'+r.form22+'</td>'+
                        //         '<td>'+r.oper+'</td>'+
                        //         '<td>'+r.fed+'</td>'+
                        //         '<td>'+r.nufed+'</td>'+
                        //         '<td>'+r.adeuda+'</td>'+
                        //         '<td>'+r.bandera+'</td>'+
                        //         '<td>'+r.asociado+'</td>'+
                        //         '<td>'+r.nro_asoc+'</td>'+
                        //         '<td>'+r.n_tug+'</td>'+
                        //         '<td>'+r.n_preim+'</td>'+
                        //         '<td>'+r.f_regi+'</td>'+
                        //         '<td>'+r.bloqueo+'</td>'+
                        //         '<td>'+r.l07+'</td>'+
                        //         '<td>'+r.l07nmts2+'</td>'+
                        //         '<td>'+r.l259+'</td>'+
                        //         '<td>'+r.categtoria+'</td>'+
                        //         '<td>'+r.horario+'</td>'+
                        //         '<td>'+r.lfini+'</td>'+
                        //         '<td>'+r.form_23+'</td>'+
                        //         '<td>'+r.comp_baja+'</td>'+
                        //         '<td>'+r.fe_baja+'</td>'+
                        //         '<td>'+r.cau_baja+'</td>'+
                        //         '<td>' +
                        //         '<div class="btn btn-group">' +
                        //         '<!-- button  class=" control btn btn-warning btn-sm" type="hidden" ' +
                        //         'id-CodAut="'+r.CodAut+'" ' +
                        //         '><i class="fa fa-edit"></i> Modificar</button>' +
                        //         '<button  class=" limpiar btn btn-danger btn-sm" type="hidden" id-CodAut="'+r.CodAut+'" ><i class="fa fa-trash"></i> Eliminar</button-->' +
                        //         '</div>'+
                        //         '</td>' +
                        //         '</tr>';
                        // })
                        // $('#contenido').html(t);
                    }
                });
            }
        }
    </script>
@endsection
