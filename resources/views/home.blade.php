<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 11</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    {{-- <h1>Bienvenido a la página principal</h1> --}}



    <x-alert>
        <x-slot name="title">
            Hola hola

        </x-slot>
        Esto es un mensaje de alerta
    </x-alert>


</body>

</html>
