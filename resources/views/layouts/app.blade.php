<!DOCTYPE html>
<html lang="en" data-theme='light'>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tamansiswa Jakarta</title>
    <link rel="icon" type="image/x-icon" href="/image/logo_tamsis.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- <link rel="stylesheet" href="/build/assets/app-C6Gaxb5O.css"> --}}
    {{-- <link rel="stylesheet" href="/build/assets/app-DephoxPn.css"> --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="font-sans ">

    <!-- Header -->
    @if (Route::currentRouteName() === 'index')
        <x-header />
    @endif
    <!-- End Header -->

    <!-- Main -->
    <main
        class="w-full min-h-screen  {{ Route::currentRouteName() === 'index' ? 'px-7 lg:px-20 mt-20 lg:mt-28' : '' }} overflow-x-hidden">
        {{ $slot }}
    </main>
    <!-- End Main -->

    <!-- Footer -->
    <x-footer />
    <!-- End Footer -->
    {{-- <script src="/build/assets/app-Dz7wAALT.js"></script> --}}

    @livewireScripts
</body>

</html>
