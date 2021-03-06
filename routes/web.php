<?php

use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\BootstrapTables;
use App\Http\Livewire\Components\Buttons;
use App\Http\Livewire\Components\Forms;
use App\Http\Livewire\Components\Modals;
use App\Http\Livewire\Components\Notifications;
use App\Http\Livewire\Components\Typography;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Err404;
use App\Http\Livewire\Err500;
use App\Http\Livewire\ForgotPassword;
use App\Http\Livewire\ForgotPasswordExample;
use App\Http\Livewire\Lock;
use App\Http\Livewire\LoginExample;
use App\Http\Livewire\Profile;
use App\Http\Livewire\ProfileExample;
use App\Http\Livewire\RegisterExample;
use App\Http\Livewire\ResetPassword;
use App\Http\Livewire\ResetPasswordExample;
use App\Http\Livewire\Transactions;
use App\Http\Livewire\UpgradeToPro;
use App\Http\Livewire\Users;
use Illuminate\Support\Facades\Route;

//Planes
use App\Http\Controllers\Componentes\Planes\Agregar;
use App\Http\Controllers\Componentes\Planes\General;
use App\Http\Controllers\Componentes\Planes\Visualizar;
use App\Http\Controllers\Componentes\Planes\Actividades;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::redirect('/', '/login');

Route::get('/register', Register::class)->name('register');

Route::get('/login', Login::class)->name('login');

Route::get('/forgot-password', ForgotPassword::class)->name('forgot-password');

Route::get('/reset-password/{id}', ResetPassword::class)->name('reset-password')->middleware('signed');

Route::get('/404', Err404::class)->name('404');
Route::get('/500', Err500::class)->name('500');
Route::get('/upgrade-to-pro', UpgradeToPro::class)->name('upgrade-to-pro');

Route::middleware('auth')->group(function () {
    Route::get('/profile', Profile::class)->name('profile');
    Route::get('/profile-example', ProfileExample::class)->name('profile-example');
    Route::get('/users', Users::class)->name('users');
    Route::get('/login-example', LoginExample::class)->name('login-example');
    Route::get('/register-example', RegisterExample::class)->name('register-example');
    Route::get('/forgot-password-example', ForgotPasswordExample::class)->name('forgot-password-example');
    Route::get('/reset-password-example', ResetPasswordExample::class)->name('reset-password-example');
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/transactions', Transactions::class)->name('transactions');
    Route::get('/bootstrap-tables', BootstrapTables::class)->name('bootstrap-tables');
    Route::get('/lock', Lock::class)->name('lock');
    Route::get('/buttons', Buttons::class)->name('buttons');
    Route::get('/notifications', Notifications::class)->name('notifications');
    Route::get('/forms', Forms::class)->name('forms');
    Route::get('/modals', Modals::class)->name('modals');
    Route::get('/typography', Typography::class)->name('typography');

    //Planes
    Route::get('/planes', General::class)->name('planes');
    Route::get('/planes/agregar', Agregar::class)->name('agregarPlan');
    Route::get('/planes/visualizar', Visualizar::class)->name('visualizarPlan');
    Route::get('/planes/actividades', Actividades::class)->name('planActividades');
    Route::post('/planes/registrar', [Agregar::class, 'Registrar']);
    Route::post('/planes/eliminar', [General::class, 'EliminarPlan']);
    Route::get('/planes/descargar', [General::class, 'DescargarPlan']);
    Route::get('/planes/gvisualizar', [Visualizar::class, 'infoPlan']);

    //Equipos
    Route::get('equipos', \App\Http\Controllers\Componentes\Equipos\General::class)->name('equipos');
    Route::get('equipos/agregar', \App\Http\Controllers\Componentes\Equipos\Agregar::class)->name('equiposAgregar');
    Route::post('equipos/registrar', [\App\Http\Controllers\Componentes\Equipos\Agregar::class, 'Registrar']);

    //Actividades
    Route::get('actividades', \App\Http\Controllers\Componentes\Actividades\General::class)->name('actividades');
    Route::get('actividades/agregar', \App\Http\Controllers\Componentes\Actividades\Agregar::class)->name('actividadesAgregar');
    Route::post('actividades/registrar', [\App\Http\Controllers\Componentes\Actividades\Agregar::class, 'Registrar']);

    //Usuarios
    Route::get('usuarios', \App\Http\Controllers\Componentes\Usuarios\General::class)->name('usuarios');
    Route::get('usuarios/agregar', \App\Http\Controllers\Componentes\Usuarios\Agregar::class)->name('usuariosAgregar');
    Route::post('usuarios/registrar', [\App\Http\Controllers\Componentes\Usuarios\Agregar::class, 'Registrar']);

    //Auxiliar
    Route::get('auxiliar/planes', \App\Http\Controllers\Componentes\Auxiliar\Planes::class)->name('auxPlanes');
    Route::get('auxiliar/actividades', \App\Http\Controllers\Componentes\Auxiliar\Actividades::class)->name('auxActividades');
    Route::get('auxiliar/descargar', [\App\Http\Controllers\Componentes\Auxiliar\Actividades::class, 'Descargar']);
    Route::post('auxiliar/terminarActividad', [\App\Http\Controllers\Componentes\Auxiliar\Actividades::class, 'TerminarActividad']);

    Route::get('/menu', function(){
        return \Illuminate\Support\Facades\DB::select('select * from menu inner join menu_rol on menu.id_menu = menu_rol.id_menu where id_rol = 1');
    });

    Route::get('/gequipos', function(){
        return auth()->id();
    });

    //Obtener Usuario
    Route::get('/Usuario', function(){
        return auth()->user();
    });

    Route::get('/gplanes', function(){
        return \App\Models\User::Where('id_rol', '=', 3)->get();
    });
});
