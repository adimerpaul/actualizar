@extends('layouts.principal')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="bg-dark text-white text-center">Vutrat</h1>
            </div>
            <div class="col-12">
                <example-component></example-component>
                <div class="card">
                    <h5 class="bg-cyan text-white text-center">Vutrat juridica</h5>
                    <div class="table-responsive">
                        <table id="tablavjuridica" class=" ">
                            <thead>
                            <tr>
                                <th>Opciones</th>
                                <th>a_esposo_rl</th>
                                <th>a_materno_rl</th>
                                <th>a_paterno_rl</th>
                                <th>acera</th>
                                <th>act_barrio</th>
                                <th>act_c_av</th>
                                <th>act_e_ca</th>
                                <th>act_fono</th>
                                <th>act_piso</th>
                                <th>act_zona</th>
                                <th>boliviano</th>
                                <th>c_i_rl</th>
                                <th>calle_dom</th>
                                <th>casilla</th>
                                <th>cert_ext</th>
                                <th>cod_acti</th>
                                <th>cod_sector</th>
                                <th>comp</th>
                                <th>descrip</th>
                                <th>establec</th>
                                <th>f_19</th>
                                <th>f_22</th>
                                <th>fachada</th>
                                <th>fax</th>
                                <th>fecha_iniac</th>
                                <th>fono_dom</th>
                                <th>fono_of</th>
                                <th>horario</th>
                                <th>in_ge_trib</th>
                                <th>letreros</th>
                                <th>luz</th>
                                <th>n_dni</th>
                                <th>n_dom</th>
                                <th>n_medidor_a</th>
                                <th>n_medidor_e</th>
                                <th>n_pmc_for</th>
                                <th>n_res_tec</th>
                                <th>n_tramite</th>
                                <th>nit</th>
                                <th>nit_rl</th>
                                <th>nombres_rl</th>
                                <th>obs</th>
                                <th>pmc</th>
                                <th>razon_social</th>
                                <th>req_1</th>
                                <th>req_2</th>
                                <th>req_3</th>
                                <th>req_4</th>
                                <th>req_5</th>
                                <th>req_6</th>
                                <th>req_7</th>
                                <th>req_8</th>
                                <th>req_9</th>
                                <th>superfice</th>
                                <th>t_requi</th>
                                <th>zona_dom</th>
                                <th>zona_trib</th>
                            </tr>
                            </thead>
                        </table>
                        <div class="modal fade" id="vjmodal" tabindex="-1" role="dialog" aria-labelledby="vjmodalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="vjmodalLabel">New message</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Recipient:</label>
                                                <input type="text" class="form-control" id="recipient-name">
                                            </div>
                                            <div class="form-group">
                                                <label for="message-text" class="col-form-label">Message:</label>
                                                <textarea class="form-control" id="message-text"></textarea>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Send message</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script>
        window.onload=function (){
            var t = $('#tablavjuridica').DataTable();
            var CodAut=''
            var a_esposo_rl=''
            var a_materno_rl=''
            var a_paterno_rl=''
            var acera=''
            var act_barrio=''
            var act_c_av=''
            var act_e_ca=''
            var act_fono=''
            var act_piso=''
            var act_zona=''
            var boliviano=''
            var c_i_rl=''
            var calle_dom=''
            var casilla=''
            var cert_ext=''
            var cod_acti=''
            var cod_sector=''
            var comp=''
            var descrip=''
            var establec=''
            var f_19=''
            var f_22=''
            var fachada=''
            var fax=''
            var fecha_iniac=''
            var fono_dom=''
            var fono_of=''
            var horario=''
            var in_ge_trib=''
            var letreros=''
            var luz=''
            var n_dni=''
            var n_dom=''
            var n_medidor_a=''
            var n_medidor_e=''
            var n_pmc_for=''
            var n_res_tec=''
            var n_tramite=''
            var nit=''
            var nit_rl=''
            var nombres_rl=''
            var obs=''
            var pmc=''
            var razon_social=''
            var req_1=''
            var req_2=''
            var req_3=''
            var req_4=''
            var req_5=''
            var req_6=''
            var req_7=''
            var req_8=''
            var req_9=''
            var superfice=''
            var t_requi=''
            var zona_dom=''
            var zona_trib=''
            axios.get('/vj').then(function (res) {
                    // console.log(res.data);
                    t.clear().draw();
                    res.data.forEach(r=>{
                        // console.log(r)

                        t.row.add( [
                            '<button data-toggle="modal" data-target="#vjmodal" data-a_esposo_rl="@mdo" type="button" class="btn btn-warning btn-sm">' +
                            ' <i class="fa fa-pencil-alt"></i> Modificar ' +
                            '</button>',
                            // r.CodAut,
                            r.a_esposo_rl,
                            r.a_materno_rl,
                            r.a_paterno_rl,
                            r.acera,
                            r.act_barrio,
                            r.act_c_av,
                            r.act_e_ca,
                            r.act_fono,
                            r.act_piso,
                            r.act_zona,
                            r.boliviano,
                            r.c_i_rl,
                            r.calle_dom,
                            r.casilla,
                            r.cert_ext,
                            r.cod_acti,
                            r.cod_sector,
                            r.comp,
                            r.descrip,
                            r.establec,
                            r.f_19,
                            r.f_22,
                            r.fachada,
                            r.fax,
                            r.fecha_iniac,
                            r.fono_dom,
                            r.fono_of,
                            r.horario,
                            r.in_ge_trib,
                            r.letreros,
                            r.luz,
                            r.n_dni,
                            r.n_dom,
                            r.n_medidor_a,
                            r.n_medidor_e,
                            r.n_pmc_for,
                            r.n_res_tec,
                            r.n_tramite,
                            r.nit,
                            r.nit_rl,
                            r.nombres_rl,
                            r.obs,
                            r.pmc,
                            r.razon_social,
                            r.req_1,
                            r.req_2,
                            r.req_3,
                            r.req_4,
                            r.req_5,
                            r.req_6,
                            r.req_7,
                            r.req_8,
                            r.req_9,
                            r.superfice,
                            r.t_requi,
                            r.zona_dom,
                            r.zona_trib,
                        ] ).draw( false );
                    })

                })
            $('#vjmodal').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var recipient = button.data('a_esposo_rl') // Extract info from data-* attributes
                // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
                var modal = $(this)
                modal.find('.modal-title').text('New message to ' + recipient)
                modal.find('.modal-body input').val(recipient)
            })

        }
    </script>
@endsection
