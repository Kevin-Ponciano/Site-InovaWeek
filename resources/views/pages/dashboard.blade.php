<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-gray-800 leading-tight">
            {{'Seja Bem Vindo '}}@can('user')@else
            {{'Dr. '}}
            @endcan{{ Auth::user()->name }}
        </h2>
    </x-slot>

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('assets/carousel1.png')}}" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="{{asset('assets/carousel2.png')}}" class="d-block w-100">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Proximo</span>
        </button>
    </div>

    <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>

    <div class="py-2">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3 position-absolute top-1 end-0">
                        <div class="card collapsed-card">
                            <div class="card-header">
                                <h3 class="card-title">Pacientes</h3>
                                <div class="card-tools">
                                    <span class="badge badge-primary">{{$patients->count()}}</span>
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
                                        <img id='' src="{{$patient->getPhoto()}}" width="70" height="70" alt="User image">
                                        <a class="users-list-name items-center" href="#">{{$patient->name}}</a>
                                        {{-- <span class="users-list-date">Today</span>--}}
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
                                    <li class="item">
                                        <div class="product-img">
                                            <img src="dist/img/default-150x150.png" alt="Product Image" class="img-size-50">
                                        </div>
                                        <div class="product-info">
                                            <a href="javascript:void(0)" class="product-title">Samsung TV
                                                <span class="badge badge-warning float-right">$1800</span></a>
                                            <span class="product-description">Samsung 32" 1080p 60Hz LED Smart HDTV.</span>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <div class="product-img">
                                            <img src="dist/img/default-150x150.png" alt="Product Image" class="img-size-50">
                                        </div>
                                        <div class="product-info">
                                            <a href="javascript:void(0)" class="product-title">Bicycle
                                                <span class="badge badge-info float-right">$700</span></a>
                                            <span class="product-description">26" Mongoose Dolomite Men's 7-speed, Navy Blue</span>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <div class="product-img">
                                            <img src="dist/img/default-150x150.png" alt="Product Image" class="img-size-50">
                                        </div>
                                        <div class="product-info">
                                            <a href="javascript:void(0)" class="product-title">
                                                Xbox One <span class="badge badge-danger float-right">$350</span>
                                            </a>
                                            <span class="product-description">Xbox One Console Bundle with Halo Master Chief Collection.</span>
                                        </div>
                                    </li>

                                    <li class="item">
                                        <div class="product-img">
                                            <img src="dist/img/default-150x150.png" alt="Product Image" class="img-size-50">
                                        </div>
                                        <div class="product-info">
                                            <a href="javascript:void(0)" class="product-title">PlayStation 4
                                                <span class="badge badge-success float-right">$399</span></a>
                                            <span class="product-description">
                                                PlayStation 4 500GB Console (PS4)
                                            </span>
                                        </div>
                                    </li>

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
    </div>
</x-app-layout>