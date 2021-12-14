<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
    <div class="d-block mb-4 mb-md-0">
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                <li class="breadcrumb-item">
                    <a href="#">
                        <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                    </a>
                </li>
                <li class="breadcrumb-item"><a href="#">Planes</a></li>
            </ol>
        </nav>
        <h2 class="h4">Planes</h2>
        <p class="mb-0">Vista general de todos lo planes</p>
    </div>
    <div class="btn-toolbar mb-2 mb-md-0">
        <a href="planes/agregar" class="btn btn-sm btn-gray-800 d-inline-flex align-items-center">
            <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
            Crear nuevo plan
        </a>
        <!--<div class="btn-group ms-2 ms-lg-3">
            <button type="button" class="btn btn-sm btn-outline-gray-600">Share</button>
            <button type="button" class="btn btn-sm btn-outline-gray-600">Export</button>
        </div>-->
    </div>
</div>
<div class="table-settings mb-4">
    <div class="row align-items-center justify-content-between">
        <div class="col col-md-6 col-lg-3 col-xl-4">
            <div class="input-group me-2 me-lg-3 fmxw-400">
                <span class="input-group-text">
                    <svg class="icon icon-xs" x-description="Heroicon name: solid/search" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                    </svg>
                </span>
                <input type="text" class="form-control" placeholder="Buscar plan">
            </div>
        </div>
        <div class="col-4 col-md-2 col-xl-1 ps-md-0 text-end">
            <div class="dropdown">
                <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path></svg>
                    <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu dropdown-menu-xs dropdown-menu-end pb-0">
                    <span class="small ps-3 fw-bold text-dark">Show</span>
                    <a class="dropdown-item d-flex align-items-center fw-bold" href="#">10 <svg class="icon icon-xxs ms-auto" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg></a>
                    <a class="dropdown-item fw-bold" href="#">20</a>
                    <a class="dropdown-item fw-bold rounded-bottom" href="#">30</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card card-body border-0 shadow table-wrapper table-responsive">
    <table class="table table-hover">
        <thead>
        <tr>
            <th class="border-gray-200">#</th>
            <th class="border-gray-200">Laboratorio</th>
            <th class="border-gray-200">Edificio</th>
            <th class="border-gray-200">Cuatrimestre</th>
            <th class="border-gray-200">Responsable</th>
            <th class="border-gray-200">N° Actividades</th>
            <th class="border-gray-200">Estatus</th>
        </tr>
        </thead>
        <tbody>
        @foreach($planes as $plan)
            <!-- Item -->
            <tr id="plan_{{$plan->id_plan}}">
                <td>
                    <a href="#" class="fw-bold">
                        000{{$plan->id_plan}}
                    </a>
                </td>
                <td>
                    <span class="fw-normal">{{$plan->laboratorio->nombre}}</span>
                </td>
                <td>
                    <span class="fw-normal">{{$plan->laboratorio->edificio}}</span>
                </td>
                <td><span class="fw-normal">
                            {{
                                DateTime::createFromFormat('!m', explode("-", $plan->cuatrimestre->fecha_inicio)[1])->format('F').
                                ' - '
                                .DateTime::createFromFormat('!m', explode("-", $plan->cuatrimestre->fecha_fin)[1])->format('F').
                                ' '.
                                explode("-", $plan->cuatrimestre->fecha_fin)[0]
                            }}</span></td>
                <td><span class="fw-normal">{{$plan->user->first_name.' '.$plan->user->last_name}}</span></td>
                <td><span class="fw-normal">{{count($plan->actividades_plan)}}</span></td>
                <td><span class="fw-bold">{{$plan->status}}</span></td>
                <td>
                    <div class="btn-group">
                        <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="icon icon-sm">
                                        <span class="fas fa-ellipsis-h icon-dark"></span>
                                    </span>
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu py-0">
                            <a class="dropdown-item rounded-top" href="/auxiliar/actividades?id_plan={{$plan->id_plan}}"><span class="fas fa-eye me-2"></span>Ver actividades</a>
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <!--<div class="card-footer px-3 border-0 d-flex flex-column flex-lg-row align-items-center justify-content-between">
        <nav aria-label="Page navigation example">
            <ul class="pagination mb-0">
                <li class="page-item">
                    <a class="page-link" href="#">Previous</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item active">
                    <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">4</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">5</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
        <div class="fw-normal small mt-4 mt-lg-0">Showing <b>5</b> out of <b>25</b> entries</div>
    </div>-->
</div>
<div class="col-lg-4">
    <!-- Modal Content -->
    <div class="modal fade" id="modal-notification" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
        <div class="modal-dialog modal-danger modal-dialog-centered" role="document">
            <div class="modal-content bg-gradient-secondary">
                <button type="button" class="btn-close theme-settings-close fs-6 ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-header">
                    <p class="modal-title text-gray-200" id="modal-title-notification"></p>
                </div>
                <div class="modal-body text-white">
                    <div class="py-3 text-center">
                                            <span class="modal-icon">
                                               <i class="fas fa-5x fa-info-circle"></i>
                                            </span>
                        <h2 class="h4 modal-title my-3">¿Estás seguro de eliminar este plan?</h2>
                        <p>Una vez elimnado, no se podrá recuperar</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-close-white" data-bs-toggle="modal" data-bs-target="#modal-notification">Cancelar</button>
                    <button type="button" class="btn btn-sm btn-warning" onclick="EliminarPlan()">Eliminar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Modal Content -->
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
