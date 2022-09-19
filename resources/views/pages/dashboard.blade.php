<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-gray-800 leading-tight">
            {{'Seja Bem Vindo '}}@can('user')@else
                {{'Dr. '}}
            @endcan{{ Auth::user()->name }}
        </h2>
    </x-slot>

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
{{--                                            <span class="users-list-date">Today</span>--}}
                                        </li>
                                    @endforeach

                                </ul>

                            </div>

                            <div class="card-footer text-center">
                                <a href="javascript:">View All Users</a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Recently Added Products</h3>
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
                                            <img src="dist/img/default-150x150.png" alt="Product Image"
                                                 class="img-size-50">
                                        </div>
                                        <div class="product-info">
                                            <a href="javascript:void(0)" class="product-title">Samsung TV
                                                <span class="badge badge-warning float-right">$1800</span></a>
                                            <span class="product-description">Samsung 32" 1080p 60Hz LED Smart HDTV.</span>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <div class="product-img">
                                            <img src="dist/img/default-150x150.png" alt="Product Image"
                                                 class="img-size-50">
                                        </div>
                                        <div class="product-info">
                                            <a href="javascript:void(0)" class="product-title">Bicycle
                                                <span class="badge badge-info float-right">$700</span></a>
                                            <span class="product-description">26" Mongoose Dolomite Men's 7-speed, Navy Blue</span>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <div class="product-img">
                                            <img src="dist/img/default-150x150.png" alt="Product Image"
                                                 class="img-size-50">
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
                                            <img src="dist/img/default-150x150.png" alt="Product Image"
                                                 class="img-size-50">
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
                                <a href="javascript:void(0)" class="uppercase">View All Products</a>
                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </section>
    </div>
</x-app-layout>
