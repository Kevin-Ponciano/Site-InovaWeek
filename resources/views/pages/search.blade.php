<x-app-layout>
    <x-slot name="header">
        <!-- <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Buscar
        </h2> -->
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <table class="min-w-full">
                            <tr>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-1 text-center">
                                    <div class="row">
                                        <form action="/buscar" method="get" id="search-form">
                                            <div class="col-md-12">
                                                <select class="js-example-responsive form-control" style="width: 50%" id="itemName" name="search">
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
        <div class="mb-3 xl:w-9/12">
            @foreach($sintomas as $sintoma)
            <h2 class="font-semibold text-2xl flex justify-center my-8">{{$sintoma->name_suspect}}</h2>
            <div class="grid grid-cols-3 gap-8">

                <div class="flex justify-center">
                    <div class="block p-6 rounded-lg shadow-lg bg-white w-full h-full">
                        <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2">Diagnóstico Diferencial</h5>
                        <p class="text-gray-700 text-base mb-4 font-medium">
                            @foreach($sintoma->differential_diagnosis as $differential_diagnosis)
                            <br>- {{$differential_diagnosis}}
                            @endforeach
                        </p>
                    </div>
                </div>

                <div class="flex justify-center">
                    <div class="block p-6 rounded-lg shadow-lg bg-white w-full h-full">
                        <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2">Sintomas</h5>
                        <p class="text-gray-700 text-base mb-4 font-medium">
                            @foreach($sintoma->symptoms as $symptoms)
                            <br>- {{$symptoms}}
                            @endforeach
                        </p>
                    </div>
                </div>

                <div class="flex justify-center">
                    <div class="block p-6 rounded-lg shadow-lg bg-white w-full h-full">
                        <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2">Tratamento</h5>
                        <p class="text-gray-700 text-base mb-4 font-medium">
                            @foreach($sintoma->treatment as $treatment)
                            <br>- {{$treatment}}
                            @endforeach
                        </p>
                    </div>
                </div>

                <div class="flex justify-center">
                    <div class="block p-6 rounded-lg shadow-lg bg-white w-full h-full">
                        <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2">Exames</h5>
                        <p class="text-gray-700 text-base mb-4 font-medium">
                            @foreach($sintoma->exams as $exams)
                            <br>- {{$exams}}
                            @endforeach
                        </p>
                    </div>
                </div>

                <div class="flex justify-center">
                    <div class="block p-6 rounded-lg shadow-lg bg-white w-full h-full">
                        <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2">Causas</h5>
                        <p class="text-gray-700 text-base mb-4 font-medium">
                            @foreach($sintoma->provoked as $provoked)
                            <br>- {{$provoked}}
                            @endforeach
                        </p>
                    </div>
                </div>

                <div class="flex justify-center">
                    <div class="block p-6 rounded-lg shadow-lg bg-white w-full h-full">
                        <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2">Sinais</h5>
                        <p class="text-gray-700 text-base mb-4 font-medium">
                            @foreach($sintoma->signals as $signals)
                            <br>- {{$signals}}
                            @endforeach
                        </p>
                    </div>
                </div>
            </div>


            <!-- <br><b>Sintomas:</b>
                @foreach($sintoma->symptoms as $symptoms)
                {{$symptoms}}
                @endforeach
                <br><b>Tratamento:</b>
                @foreach($sintoma->treatment as $treatment)
                {{$treatment}}
                @endforeach
                <br><b>Diagnóstico Diferencial:</b>
                @foreach($sintoma->differential_diagnosis as $differential_diagnosis)
                {{$differential_diagnosis}}
                @endforeach
                <br><b>Exames:</b>
                @foreach($sintoma->exams as $exams)
                {{$exams}}
                @endforeach
                <br><b>Provocações:</b>
                @foreach($sintoma->provoked as $provoked)
                {{$provoked}}
                @endforeach
                <br><b>Sinais:</b>
                @foreach($sintoma->signals as $signals)
                {{$signals}}
                @endforeach -->
            </p>


            @endforeach
            <script type="text/javascript">
                $('#itemName').select2({
                    placeholder:'@if($sintomas[0]->name_suspect!=$sintoma->name_suspect){{" Buscar"}}@else{{$sintoma->name_suspect}}@endif',
                    theme: "bootstrap-5",
                    language: $.extend({},
                        $.fn.select2.defaults.defaults.language, {
                            noResults:()=> {
                                return $("<span></span>")
                            },
                            searching:()=> {
                                return $("<span></span>")
                            },
                            errorLoading:()=> {
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
                });
                // onload.window = $('#search-form').submit();
                $('#itemName').change(function() {
                    $('#search-form').submit();
                });
            </script>
        </div>
    </div>
</x-app-layout>
