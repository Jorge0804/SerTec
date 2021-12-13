<div class="py-4">
    <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
        <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
            <li class="breadcrumb-item">
                <a href="#">
                    <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                </a>
            </li>
            <li class="breadcrumb-item"><a href="/actividades">Actividades</a></li>
            <li class="breadcrumb-item active" aria-current="page">Agregar</li>
        </ol>
    </nav>
    <div class="d-flex justify-content-between w-100 flex-wrap">
        <div class="mb-3 mb-lg-0">
            <h1 class="h4">Agregar actividad</h1>
            <p class="mb-0">En este segmento puede agregar una actividad</p>
        </div>
        <!--<div>
            <a href="/documentation/components/forms/index.html" class="btn btn-outline-gray" target="_blank"><i class="far fa-question-circle me-1"></i> Forms Docs</a>
        </div>-->
    </div>
</div>

<form method="post" action="#" onsubmit="HacerRegistro(); return false;" id="data_form">
    @csrf
    <div class="row">
        <div class="col-12 mb-4">
            <div class="card border-0 shadow components-section">
                <div class="card-body">
                    <div class="row mb-4">
                        <h1 class="h4">Información de la actividad</h1>
                        <hr>
                        <div class="col-lg-4 col-sm-6">
                            <div class="mb-4">
                                <label for="email">Descripción</label>
                                <input name="Descripcion" type="text" class="form-control" id="email" aria-describedby="emailHelp" required>
                                <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 mb-4">
            <button class="btn btn-info" type="submit">Agregar Actividad</button>
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
                        <h2 class="h4 modal-title my-3">Actividad registrado!</h2>
                        <p>La Actividad ha sido registrada con éxito</p>
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

    function HacerRegistro(){
        $.post('/actividades/registrar', $('#data_form').serialize(), function(data){
            $('#modal-notification').modal('toggle');
            setTimeout(function() {
                window.location.replace("../actividades");
            }, 1500);
            console.log(data);
        });
    }
</script>
