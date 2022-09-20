<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Odonto On{{-- config('app.name', 'Odonto On') --}}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <!-- Icon -->
    <link type="image/png" sizes="32x32" rel="icon" href='{{url('assets/favicon.png')}}'>

    <!-- AdminLTE -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- Tallwind css -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @livewireStyles

    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


    <!-- FullCalendar -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5/main.min.css">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5/main.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5/locales-all.min.js"></script>
    <script type="text/javascript">
        let rootUrl = {!! json_encode(url('/')) !!}
    </script>
    <link href="{{ asset('css/calendar.css') }}" rel="stylesheet">

    {{--    Referencia disnecessaria, comentado para verificar se irá fazer falta xd!!--}}
    {{--     <!-- Bootstrap 4.1 JS-->--}}

    {{--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>--}}

    <!--adminLTE-->
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css"/>

    <!-- Select2 -->
    <link href="{{asset('css/select2.css')}}" rel="stylesheet"/>
    <script src="{{asset('js/select2.js')}}"></script>


</head>

<body class="font-sans no-underline">
<x-jet-banner/>

<div class="bg-gray-100" style="height: border-box">
    @livewire('navigation-menu')

    <!-- Page Heading -->
    @if (isset($header))
        <header class="bg-white shadow ">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
    @endif
    <!-- Calendar_Script -->
    <script src="{{ asset('js/calendar.js') }}" defer></script>
    <!-- Page Content -->
    <main>
        {{ $slot }}
        <br>
    </main>


</div>

@stack('modals')

@livewireScripts
</body>
</html>
