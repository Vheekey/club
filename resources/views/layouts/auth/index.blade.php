@extends('layouts.base')

@section('header')
    @livewireStyles
@endsection

@section('content')

<livewire:auth.login />
<livewire:auth.forgot-password />


@livewireScripts
@endsection
