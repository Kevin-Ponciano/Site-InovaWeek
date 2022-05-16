<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Buscar
        </h2>

    </x-slot>
    <div class="flex justify-center">
        <div class="mb-3 xl:w-96">
            <div class="container mt-4">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="card">
                            <div class="card-header">
                                <h4>Laravel - Dynamic autocomplete search using select2 JS Ajax</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <form action="/buscar" method="get" id="search-form">
                                        <div class="col-md-12">
                                            <select class="itemName form-control" id="itemName" name="search">
                                            </select>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
{{--            <form action="/buscar" method="get">--}}
{{--                <input--}}
{{--                    name="search"--}}
{{--                    id="search"--}}
{{--                    placeholder="Search"--}}
{{--                    type="search"--}}
{{--                    class="--}}
{{--                        form-control--}}
{{--                        block--}}
{{--                        w-full--}}
{{--                        px-3--}}
{{--                        py-1.5--}}
{{--                        text-base--}}
{{--                        font-normal--}}
{{--                        text-gray-700--}}
{{--                        bg-white bg-clip-padding--}}
{{--                        border border-solid border-gray-300--}}
{{--                        rounded--}}
{{--                        transition--}}
{{--                        ease-in-out--}}
{{--                        m-0--}}
{{--                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none--}}
{{--                      "/>--}}
{{--            </form>--}}
            @foreach($users as $user)
                <p>
                    </br>Nome: {{$user->name}} {{$user->sobrenome}}<br>
                    Email: {{$user->email}}<br>
                </p>
            @endforeach
            <script type="text/javascript">
                $('#itemName').select2({
                    placeholder: 'Digite o nome do Perfil',
                    ajax: {
                        url: '/select2',
                        dataType: 'json',
                        delay: 1,
                        processResults: data => ({
                            results: $.map(data, item => ({
                                text: item.name,
                                id: item.name
                            }))
                        }),
                        cache: true
                    }
                });

                $('#itemName').change(function(){
                    $('#search-form').submit();
                });
            </script>
        </div>
    </div>
</x-app-layout>

