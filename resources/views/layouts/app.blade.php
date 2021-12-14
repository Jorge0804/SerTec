<x-layouts.base>
    @if(in_array(request()->route()->getName(), ['dashboard', 'planes', 'profile', 'profile-example', 'users', 'bootstrap-tables', 'transactions',
    'buttons',
    'agregarPlan', 'visualizarPlan', 'planActividades', 'equipos', 'equiposAgregar', 'actividades', 'actividadesAgregar', 'usuarios', 'usuariosAgregar',
    'auxPlanes', 'auxActividades',
    'forms', 'modals', 'notifications', 'typography', 'upgrade-to-pro']))

    {{-- Nav --}}
    @include('layouts.nav')
    {{-- SideNav --}}
    @include('layouts.sidenav')
    <main class="content" style="background-color: rgba(94,175,131,0.33)">
        {{-- TopBar --}}
        @include('layouts.topbar')
        {{ $slot }}
        {{-- Footer --}}
        {{--@include('layouts.footer')--}}
    </main>

    @elseif(in_array(request()->route()->getName(), ['register', 'register-example', 'login', 'login-example',
    'forgot-password', 'forgot-password-example', 'reset-password','reset-password-example']))

    {{ $slot }}
    {{-- Footer --}}
    {{--@include('layouts.footer2')--}}


    @elseif(in_array(request()->route()->getName(), ['404', '500', 'lock']))

    {{ $slot }}

    @endif
</x-layouts.base>

