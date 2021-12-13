<div class="py-4">
    <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
        <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
            <li class="breadcrumb-item">
                <a href="#">
                    <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                </a>
            </li>
            <li class="breadcrumb-item"><a href="/planes">Planes</a></li>
            <li class="breadcrumb-item active" aria-current="page">Visualizar</li>
        </ol>
    </nav>
    <div class="d-flex justify-content-between w-100 flex-wrap">
        <div class="mb-3 mb-lg-0">
            <h1 class="h4">Visualizar Plan 000{{$plan->id_plan}}</h1>
            <p class="mb-0">En este segmento puede visualizar un plan</p>
        </div>
        <!--<div>
            <a href="/documentation/components/forms/index.html" class="btn btn-outline-gray" target="_blank"><i class="far fa-question-circle me-1"></i> Forms Docs</a>
        </div>-->
    </div>
</div>

<div class="row">
    <div class="col-12 mb-4">
        <div class="card border-0 shadow components-section">
            <div class="card-body">
                <div class="row mb-4">
                    <h1 class="h4">Información del plan</h1>
                    <hr>
                    <div class="col-lg-4 col-sm-6">
                        <fieldset>
                            <legend class="h6">Radios</legend>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    Default radio
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                <label class="form-check-label" for="exampleRadios2">
                                    Second default radio
                                </label>
                            </div>
                            <!-- End of Radio -->
                        </fieldset>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="mb-4">
                            <label for="email">Estatus</label>
                            <input name="responsable" type="text" class="form-control" value="{{$plan->status}}" aria-describedby="emailHelp" readonly>
                            <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="mb-4">
                            <label for="email">Laboratorio</label>
                            <input name="responsable" type="text" class="form-control" value="{{$plan->laboratorio->nombre.' - edificio '.$plan->laboratorio->edificio}}" aria-describedby="emailHelp" readonly>
                            <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="mb-4">
                            <label for="email">Cuatrimestre</label>
                            <input name="responsable" type="text" class="form-control" value="{{
                                        DateTime::createFromFormat('!m', explode("-", $plan->cuatrimestre->fecha_inicio)[1])->format('F').
                                        ' - '.
                                        DateTime::createFromFormat('!m', explode("-", $plan->cuatrimestre->fecha_fin)[1])->format('F').
                                        ' '.
                                        explode("-", $plan->cuatrimestre->fecha_fin)[0]
                                    }}" aria-describedby="emailHelp" readonly>
                            <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
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
                    @foreach($plan->actividades_plan as $actividad)
                        <div class="col-lg-4 col-sm-6">
                            <div class="mb-4">
                                <label for="email">Actividad</label>
                                <input name="responsable" type="text" class="form-control" value="{{$actividad->actividad->Descripcion}}" aria-describedby="emailHelp" readonly>
                                <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="mb-4">
                                <label for="email">Equipo</label>
                                <input name="responsable" type="text" class="form-control" value="{{$actividad->equipo->nombre.' - '.$actividad->equipo->Descripcion}}" aria-describedby="emailHelp" readonly>
                                <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="mb-4">
                                <label for="email">N° serie del equipo</label>
                                <input name="responsable" type="text" class="form-control" value="{{$actividad->equipo->Serie}}" aria-describedby="emailHelp" readonly>
                                <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="mb-4">
                                <label for="email">Tipo de mantenimiento</label>
                                <input name="responsable" type="text" class="form-control" value="{{$actividad->tipo_mtento}}" aria-describedby="emailHelp" readonly>
                                <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="mb-4">
                                <label for="email">Estatus</label>
                                <input name="responsable" type="text" class="form-control" value="{{$actividad->status}}" aria-describedby="emailHelp" readonly>
                                <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                            </div>
                        </div>
                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-6">
        <div class="mb-4">
            <a href="/planes/descargar"><button class="btn btn-success">Descargar formato</button></a>
        </div>
    </div>
</div>
