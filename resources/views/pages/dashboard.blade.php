<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-gray-800 leading-tight">
            {{'Seja Bem Vindo '}}@can('user')@else
                {{'Dr. '}}
            @endcan{{ Auth::user()->name }}
        </h2>
    </x-slot>

    <div id="carouselExampleIndicators " class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('assets/carousel1.png')}}" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="{{asset('assets/carousel2.png')}}" class="d-block w-100">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Proximo</span>
        </button>
    </div>


    <div class="row m-5 ">
            <div class="card m-auto" style="width: 20rem;">
                <img src="{{asset('assets/card1.jpg')}}" class="card-img-top mt-2 rounded-sm" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Horarios Livres</h5>
                    <p class="card-text">Confira no calendário os horários disponíveis para sua consulta.</p>
                    <a href="{{route('calendar')}}" class="btn btn-primary mt-2">Acessar</a>
                </div>
            </div>

            <div class="card m-auto" style="width: 20rem;">
                <img src="{{asset('assets/card2.jpg')}}" class="card-img-top mt-2 rounded-sm" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Seus Agendamentos</h5>
                    <p class="card-text">Visualize rapidamente na agenda seus exames anteriores e futuros.</p>
                    <a href="{{route('scheduling')}}" class="btn btn-primary mt-2">Acessar</a>
                </div>
            </div>
        <div class="container-fluid" style="width: 20em; ">
            @can('user')
            @else
                <div class="container-fluid"style="width: 400px">
                    <div class="row">
                        <div class="col-auto">
{{--                            <div class="card collapsed-card">--}}
{{--                                <div class="card-header">--}}
{{--                                    <h3 class="card-title">Pacientes</h3>--}}
{{--                                    <div class="card-tools">--}}
{{--                                            <span class="badge"--}}
{{--                                                  style="background-color: #00bed8">{{$patients->count()}}</span>--}}
{{--                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">--}}
{{--                                            <i class="fas fa-minus"></i>--}}
{{--                                        </button>--}}
{{--                                        <button type="button" class="btn btn-tool" data-card-widget="remove">--}}
{{--                                            <i class="fas fa-times"></i>--}}
{{--                                        </button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="card-body p-1">--}}
{{--                                    <ul class="users-list clearfix">--}}
{{--                                        @foreach($patients as $patient)--}}
{{--                                            <li>--}}
{{--                                                <img id='' src="{{$patient->getPhoto()}}" width="70" height="70"--}}
{{--                                                     alt="User image">--}}
{{--                                                <a class="users-list-name items-center"--}}
{{--                                                   href="#">{{$patient->name}}</a>--}}
{{--                                                --}}{{-- <span class="users-list-date">Today</span>--}}
{{--                                            </li>--}}
{{--                                        @endforeach--}}

{{--                                    </ul>--}}

{{--                                </div>--}}

{{--                                <div class="card-footer text-center">--}}
{{--                                    <a href="javascript:" class="btn btn-outline-primary">Visualizar Todos</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <div class="card" >
                                <div class="card-header">
                                    <h3 class="card-title">Proximas Consultas</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="card-body px-1">
                                    <ul class="products-list product-list-in-card grid grid-cols-3">
                                        @foreach($consults as $consult)
                                            @if($consult->patient!='')
                                                <li class="item">
                                                    <div>
                                                        <a href="javascript:void(0)"
                                                           class="product-title">{{$consult->title}}
                                                            <span class="badge badge-primary float-right"
                                                                  style="background-color: #00bed8">{{$consult->end}}</span></a>
                                                        <span class="product-description">{{$consult->start}}</span>
                                                    </div>
                                                </li>
                                            @endif
                                        @endforeach

                                    </ul>
                                </div>

                                <div class="card-footer text-center">
                                    <a href="{{route('scheduling')}}" class="uppercase btn btn-outline-primary">Todas
                                        as
                                        Consultas</a>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>
            @endcan
        </div>
    </div>


</x-app-layout>
