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

    <!-- Bootstrap CSS -->

    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

    <!-- Tallwind css -->
    <script src="{{ mix('js/app.js') }}" defer> </script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">



    @livewireStyles

    <!-- jquery -->
{{--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>--}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


    <!-- FullCalendar -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5/main.min.css">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5/main.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5/locales-all.min.js"></script>

    <!-- Bootstrap 4.1 -->
    {{--    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>--}}
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!-- Select2 -->
{{--    <script src="{{ mix('js/app.js') }}" defer></script>--}}
{{--    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha1/css/bootstrap.min.css">--}}
{{--    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>--}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>



</head>

<body class="font-sans no-underline">
<x-jet-banner />

<div class="min-h-screen bg-gray-100">
    @livewire('navigation-menu')

    <!-- Page Heading -->
    @if (isset($header))
        <header class="bg-white shadow">
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
    </main>
</div>

@stack('modals')

@livewireScripts
</body>
</html>
