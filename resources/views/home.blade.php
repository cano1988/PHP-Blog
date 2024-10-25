@extends('layouts.app')

@section('title')
  Laravel 12
@endsection

@push('css')
<style>
    body {
        background-color: #baacac;
    }
</style>
@endpush

@push('css')
<style>
 body {
        color: green;
    }
</style>
@endpush




@section('content')
    <div class="max-w-2x1 mx-auto px-4">
    <x-alert>
        <x-slot name="title">
            Hola hola

        </x-slot>
        Esto es un mensaje de alerta
    </x-alert>
    <h1>hola</h1>
    </div>
@endsection


