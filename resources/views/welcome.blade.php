@extends('layouts.base')

@section('header')
    @livewireStyles
@endsection

<div class="container-fluid"
     style="
         background-image: url({{ asset('images/1496352.png') }});
         background-size: cover;
         min-height: 100vh;
         min-width: 100vw;
         background-repeat: no-repeat;
         ">
    <a href="{{ route('login') }}"
       class="btn btn-dark btn-lg mt-4">
        Login
    </a>
</div>
