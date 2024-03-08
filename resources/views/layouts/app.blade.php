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
    <link rel="stylesheet" href="Treant.css">
    <link rel="stylesheet" href="/build/assets/app-B-gXXBrj.css">
    <link rel="stylesheet" href="/build/assets/app-BA11tsjU.css">
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    @livewireStyles
</head>

<body class="font-sans">

    <!-- Header -->
    <x-header />
    <!-- End Header -->

    <!-- Main -->
    <main class="w-full min-h-screen mt-20 lg:mt-28 px-7 lg:px-20 bg-no-repeat bg-cover overflow-x-hidden">
        {{ $slot }}
    </main>
    <!-- End Main -->

    <!-- Footer -->
    <x-footer />
    <!-- End Footer -->

    <script src="/build/assets/app-QW317hHE.js"></script>
    <script src="raphael.js"></script>
    <script src="Treant.js"></script>
    <script src="basic-example.js"></script>
    <script>
        new Treant(chart_config);
    </script>
    @livewireScripts
</body>

</html>
