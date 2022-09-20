<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-gray-800 leading-tight">
            {{'Seja Bem Vindo '}}@can('user')@else
                {{'Dr. '}}
            @endcan{{ Auth::user()->name }}
        </h2>
    </x-slot>

    <div class="py-2">
        @can('user')
        @else
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3 position-absolute top-1 end-0">
                            <div class="card collapsed-card">
                                <div class="card-header">
                                    <h3 class="card-title">Pacientes</h3>
                                    <div class="card-tools">
                                        <span class="badge"
                                              style="background-color: #00bed8">{{$patients->count()}}</span>
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body p-1">
                                    <ul class="users-list clearfix">
                                        @foreach($patients as $patient)
                                            <li>
                                                <img id='' src="{{$patient->getPhoto()}}" width="70" height="70"
                                                     alt="User image">
                                                <a class="users-list-name items-center" href="#">{{$patient->name}}</a>
                                                {{--                                            <span class="users-list-date">Today</span>--}}
                                            </li>
                                        @endforeach

                                    </ul>

                                </div>

                                <div class="card-footer text-center">
                                    <a href="javascript:" class="btn btn-outline-primary">Visualizar Todos</a>
                                </div>
                            </div>
                            <div class="card">
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

                                <div class="card-body p-0">
                                    <ul class="products-list product-list-in-card pl-2 pr-2">
                                        @foreach($consults as $consult)
                                            @if($consult->patient!='')
                                                <li class="item">
                                                    <div>
                                                        <a href="javascript:void(0)"
                                                           class="product-title">{{$consult->title}}
                                                            <span class="badge badge-primary float-right"
                                                                  style="background-color: #00bed8">{{$consult->end}}</span></a>
                                                        <span
                                                            class="product-description">{{$consult->start}}</span>
                                                    </div>
                                                </li>
                                            @endif
                                        @endforeach

                                    </ul>
                                </div>

                                <div class="card-footer text-center">
                                    <a href="{{route('scheduling')}}" class="uppercase btn btn-outline-primary">Todas as
                                        Consultas</a>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>
            </section>
        @endcan
    </div>
</x-app-layout>
