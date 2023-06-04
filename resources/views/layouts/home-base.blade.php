
    @extends('layouts.base')

    @section('header')
        @livewireStyles
    @endsection

    @section('content')

        <livewire:common.main-menu />
        <div class="page">
            @include('layouts.notify')

            @yield('page')
        </div>
    @endsection
