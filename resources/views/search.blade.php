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
            @foreach($sintomas as $sintoma)
                <p>
                    <br><b>Nome da Doença:</b> {{$sintoma->name_suspect}}
                    <br><b>Sintomas:</b>
                    @foreach($sintoma->symptoms as $symptoms)
                        {{$symptoms}},
                    @endforeach
                    <br><b>Tratamento:</b>
                    @foreach($sintoma->treatment as $treatment)
                        {{$treatment}},
                    @endforeach
                    <br><b>Diagnóstico Diferencial:</b>
                    @foreach($sintoma->differential_diagnosis as $differential_diagnosis)
                        {{$differential_diagnosis}},
                    @endforeach
                    <br><b>Exames:</b>
                    @foreach($sintoma->exams as $exams)
                        {{$exams}},
                    @endforeach
                    <br><b>Provocações:</b>
                    @foreach($sintoma->provoked as $provoked)
                        {{$provoked}},
                    @endforeach
                    <br><b>Sinais:</b>
                    @foreach($sintoma->signals as $signals)
                        {{$signals}},
                    @endforeach
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
                                text: item.name_suspect,
                                id: item.name_suspect
                            }))
                        }),
                        cache: true
                    }
                });

                $('#itemName').change(function () {
                    $('#search-form').submit();
                });
            </script>
        </div>
    </div>
</x-app-layout>
