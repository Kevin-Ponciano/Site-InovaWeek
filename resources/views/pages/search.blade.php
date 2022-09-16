<x-app-layout>
    <x-slot name="header">
        <!-- <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Buscar
        </h2> -->
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="overflow-hidden ">
                        <table class="min-w-full">
                            <tr>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-1 text-center ">
                                    <div class="row ">
                                        <form action="/buscar" method="get" id="search-form">
                                            <div class="col-md-12 ">
                                                <select class="js-example-responsive form-control" style="width: 50%"
                                                        id="itemName" name="search">
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                </th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>

    <div class="flex justify-center">
        <div class="mb-1 xl:w-9/12">
            @foreach($suspects as $suspect)
                <h2 class="font-semibold text-2xl flex justify-center my-8">{{$suspect->name_suspect}}</h2>
                <div class="grid grid-cols-3 gap-8">

                    <div class="flex justify-center">
                        <div class="block p-6 rounded-lg shadow-lg bg-white w-full h-full">
                            <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2">Diagnóstico
                                Diferencial</h5>
                            <p class="text-gray-700 text-base mb-4 font-medium">
                                @foreach($suspect->differential_diagnosis as $differential_diagnosis)
                                    <br>- {{$differential_diagnosis}}
                                @endforeach
                            </p>
                        </div>
                    </div>

                    <div class="flex justify-center">
                        <div class="block p-6 rounded-lg shadow-lg bg-white w-full h-full">
                            <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2">Sintomas</h5>
                            <p class="text-gray-700 text-base mb-4 font-medium">
                                @foreach($suspect->symptoms as $symptoms)
                                    <br>- {{$symptoms}}
                                @endforeach
                            </p>
                        </div>
                    </div>

                    <div class="flex justify-center">
                        <div class="block p-6 rounded-lg shadow-lg bg-white w-full h-full">
                            <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2">Tratamento</h5>
                            <p class="text-gray-700 text-base mb-4 font-medium">
                                @foreach($suspect->treatment as $treatment)
                                    <br>- {{$treatment}}
                                @endforeach
                            </p>
                        </div>
                    </div>

                    <div class="flex justify-center">
                        <div class="block p-6 rounded-lg shadow-lg bg-white w-full h-full">
                            <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2">Exames</h5>
                            <p class="text-gray-700 text-base mb-4 font-medium">
                                @foreach($suspect->exams as $exams)
                                    <br>- {{$exams}}
                                @endforeach
                            </p>
                        </div>
                    </div>

                    <div class="flex justify-center">
                        <div class="block p-6 rounded-lg shadow-lg bg-white w-full h-full">
                            <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2">Causas</h5>
                            <p class="text-gray-700 text-base mb-4 font-medium">
                                @foreach($suspect->provoked as $provoked)
                                    <br>- {{$provoked}}
                                @endforeach
                            </p>
                        </div>
                    </div>

                    <div class="flex justify-center">
                        <div class="block p-6 rounded-lg shadow-lg bg-white w-full h-full">
                            <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2">Sinais</h5>
                            <p class="text-gray-700 text-base mb-4 font-medium">
                                @foreach($suspect->signals as $signals)
                                    <br>- {{$signals}}
                                @endforeach
                            </p>
                        </div>
                    </div>
                </div>


                <!-- <br><b>Sintomas:</b>
                @foreach($suspect->symptoms as $symptoms)
                    {{$symptoms}}
                @endforeach
                <br><b>Tratamento:</b>
                @foreach($suspect->treatment as $treatment)
                    {{$treatment}}
                @endforeach
                <br><b>Diagnóstico Diferencial:</b>
                @foreach($suspect->differential_diagnosis as $differential_diagnosis)
                    {{$differential_diagnosis}}
                @endforeach
                <br><b>Exames:</b>
                @foreach($suspect->exams as $exams)
                    {{$exams}}
                @endforeach
                <br><b>Provocações:</b>
                @foreach($suspect->provoked as $provoked)
                    {{$provoked}}
                @endforeach
                <br><b>Sinais:</b>
                @foreach($suspect->signals as $signals)
                    {{$signals}}
                @endforeach -->
                </p>
                <br>

            @endforeach
            <script type="text/javascript">
                $('#itemName').select2({
                    placeholder: '@if($suspects[0]->name_suspect!=$suspect->name_suspect){{" Buscar"}}@else{{$suspect->name_suspect}}@endif',
                    theme: "bootstrap-5",
                    language: $.extend({},
                        $.fn.select2.defaults.defaults.language, {
                            noResults: () => {
                                return $("<span></span>")
                            },
                            searching: () => {
                                return $("<span></span>")
                            },
                            errorLoading: () => {
                                return $("<span></span>")
                            },
                        }),
                    ajax: {
                        url: '/select2',
                        dataType: 'json',
                        delay: 1,
                        processResults: data => ({
                            results: $.map(data, item => ({
                                text: item.name_suspect,
                                id: item.name_suspect
                            }))
                        }),
                        cache: true
                    },
                }).change(()=> {$('#search-form').submit()})
                // jQuery(document).ready(function() {
                //     init();
                // })
                //
                //
                // function init() {
                //     $('#select').select2({
                //         width: "100%",
                //         allowClear: false
                //     }).on('select2:open', function(e) {
                //         $('.select2-dropdown').hide();
                //         setTimeout(function() {
                //             jQuery('.select2-dropdown').slideDown(1000);
                //         });
                //     }).on('select2:closing', function(e) {
                //         e.preventDefault();
                //         setTimeout(function() {
                //             jQuery('.select2-dropdown').slideUp(1000, function() {
                //                 close();
                //             });
                //         }, 0);
                //     });
                // }
                //
                // function close() {
                //     $("#select").select2('destroy');
                //     init();
                // }
            </script>
        </div>
    </div>
</x-app-layout>
