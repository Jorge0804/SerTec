<div class="py-4">
    <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
        <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
            <li class="breadcrumb-item">
                <a href="#">
                    <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                </a>
            </li>
            <li class="breadcrumb-item"><a href="/planes">Planes</a></li>
            <li class="breadcrumb-item active" aria-current="page">Agregar</li>
        </ol>
    </nav>
    <div class="d-flex justify-content-between w-100 flex-wrap">
        <div class="mb-3 mb-lg-0">
            <h1 class="h4">Agregar Plan</h1>
            <p class="mb-0">En este segmento puede agregar un plan</p>
        </div>
        <!--<div>
            <a href="/documentation/components/forms/index.html" class="btn btn-outline-gray" target="_blank"><i class="far fa-question-circle me-1"></i> Forms Docs</a>
        </div>-->
    </div>
</div>

<form method="get" action="#" onsubmit="HacerRegistro(); return false;" id="data_form">
    @csrf
    <div class="row">
        <div class="col-12 mb-4">
            <div class="card border-0 shadow components-section">
                <div class="card-body">
                    <div class="row mb-4">
                        <h1 class="h4">Información del plan</h1>
                        <hr>
                        <div class="col-lg-4 col-sm-6">
                            <div class="mb-4">
                                <label for="email">Responsable</label>
                                <input name="responsable" type="text" class="form-control" id="email" aria-describedby="emailHelp" required>
                                <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="mb-4">
                                <label class="my-1 me-2" for="country">Cuatrimestre</label>
                                <select name="id_cuatrimestre" class="form-select" id="country" aria-label="Default select example" required>
                                    <option selected disabled>Selecciona un cuatrimestre</option>
                                    @foreach($cuatrimestres as $cuatri)
                                        <option value="{{$cuatri->id_cuatrimestre}}">{{
                                        DateTime::createFromFormat('!m', explode("-", $cuatri->fecha_inicio)[1])->format('F').
                                        ' - '.
                                        DateTime::createFromFormat('!m', explode("-", $cuatri->fecha_fin)[1])->format('F').
                                        ' '.
                                        explode("-", $cuatri->fecha_fin)[0]
                                    }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="mb-4">
                                <label class="my-1 me-2" for="country">Laboratorio</label>
                                <select class="form-select" id="country" aria-label="Default select example" name="id_laboratorio" required>
                                    <option selected disabled>Selecciona un laboratorio</option>
                                    @foreach($laboratorios as $lab)
                                        <option value="{{$lab->id_laboratorio}}">{{$lab->nombre.' - edificio '.$lab->edificio}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 mb-4">
            <div class="card border-0 shadow components-section"    >
                <div class="card-body">
                    <div class="row mb-4" id="cont_act">
                        <h1 class="h4">Actividades</h1>
                        <hr>
                        <div class="col-lg-4 col-sm-6">
                            <div class="mb-4">
                                <label class="my-1 me-2" for="country">Actividad</label>
                                <select class="form-select" name="actividades[actividad1][id_actividad]" id="country" aria-label="Default select example" required>
                                    <option selected disabled>Selecciona una actividad</option>
                                    @foreach($actividades as $acti)
                                        <option value="{{$acti->id_actividad}}">{{$acti->Descripcion}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="mb-4">
                                <label class="my-1 me-2" for="country">Equipo</label>
                                <select name="actividades[actividad1][id_equipo]" class="form-select" id="country" aria-label="Default select example" required>
                                    <option selected disabled>Selecciona un equipo</option>
                                    @foreach($equipos as $equipo)
                                        <option value="{{$equipo->id_equipo}}">{{$equipo->nombre}} ({{$equipo->Descripcion}})</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="mb-4">
                                <label for="birthday">Fecha asiganada</label>
                                <div class="input-group">
                                <span class="input-group-text">
                                    <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                                </span>
                                    <input name="actividades[actividad1][fecha]" data-datepicker="" class="form-control" type="text" placeholder="dd/mm/yyyy" required>
                                </div>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <button class="btn btn-danger" type="button">-</button>
                    <button class="btn btn-success" type="button" onclick="AgregarActividad()">+</button>
                </div>
            </div>
        </div>
        <div class="col-12 mb-4">
            <button class="btn btn-info" type="submit">Agregar plan</button>
        </div>
    </div>
</form>

<div class="col-lg-4">
    <!-- Button Modal -->
    <!--<button type="button" class="btn btn-block btn-gray-800 mb-3" data-bs-toggle="modal" data-bs-target="#modal-notification">Notification</button>-->
    <!-- Modal Content -->
    <div class="modal fade" id="modal-notification" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
        <div class="modal-dialog modal-success modal-dialog-centered" role="document">
            <div class="modal-content bg-gradient-secondary">
                <button type="button" class="btn-close theme-settings-close fs-6 ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body text-white">
                    <div class="py-3 text-center">
                                            <span class="modal-icon">
                                                <i class="fas fa-5x fa-check-circle"></i>
                                            </span>
                        <h2 class="h4 modal-title my-3">Plan registrado!</h2>
                        <p>El plan ha sido registrado con éxito</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-white">Regresar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Modal Content -->
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
    var i = 2;
    $(document).ready(function(){
        //alert('{{count($equipos)}}');
    });

    function AgregarActividad(){
        console.log(i);
        $('#cont_act').append('<div class="col-lg-4 col-sm-6"> <div class="mb-4"> <label class="my-1 me-2" for="country">Actividad</label> <select name="actividades[actividad'+i+'][id_actividad]" class="form-select" id="country" aria-label="Default select example" required> <option selected disabled>Selecciona una actividad</option> @foreach($actividades as $acti) <option value="{{$acti->id_actividad}}">{{$acti->Descripcion}}</option> @endforeach </select> </div> </div> <div class="col-lg-4 col-sm-6"> <div class="mb-4"> <label class="my-1 me-2" for="country">Equipo</label> <select name="actividades[actividad'+i+'][id_equipo]" class="form-select" id="country" aria-label="Default select example" required> <option selected disabled>Selecciona un equipo</option> @foreach($equipos as $equipo) <option value="{{$equipo->id_equipo}}">{{$equipo->nombre}} ({{$equipo->Descripcion}})</option> @endforeach </select> </div> </div> <div class="col-lg-4 col-sm-6"> <div class="mb-4"> <label for="birthday">Fecha asiganada</label> <div class="input-group"> <span class="input-group-text"> <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg> </span> <input name="actividades[actividad'+i+'][fecha]" data-datepicker="" class="form-control" id="birthday" type="text" placeholder="dd/mm/yyyy" required> </div> </div> </div><hr>');
        i++;
    }

    function HacerRegistro(){
        $.post('/planes/registrar', $('#data_form').serialize(), function(data){
            $('#modal-notification').modal('toggle');
            setTimeout(function() {
                window.location.replace("../planes");
            }, 1500);
            console.log(data);
        });
    }
</script>
