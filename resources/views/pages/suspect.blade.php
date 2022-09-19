<x-app-layout>
    <div class="flex justify-center">
        <div class="mb-1 xl:w-9/12">
            @foreach($suspects as $suspect)
                <h2 class="font-semibold text-2xl flex justify-center my-8">{{$suspect->name_suspect}}</h2>
                <div class="grid grid-cols-3 gap-8">
                    <div class="flex justify-center">
                        <div class="block p-6 rounded-lg shadow-lg bg-white w-full h-full">
                            <h5 class="text-gray-900 text-lg leading-tight font-medium mb-2">Diagnóstico
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
                            <h5 class="text-gray-900 text-lg leading-tight font-medium mb-2">Sintomas</h5>
                            <p class="text-gray-700 text-base mb-4 font-medium">
                                @foreach($suspect->symptoms as $symptoms)
                                    <br>- {{$symptoms}}
                                @endforeach
                            </p>
                        </div>
                    </div>

                    <div class="flex justify-center">
                        <div class="block p-6 rounded-lg shadow-lg bg-white w-full h-full">
                            <h5 class="text-gray-900 text-lg leading-tight font-medium mb-2">Tratamento</h5>
                            <p class="text-gray-700 text-base mb-4 font-medium">
                                @foreach($suspect->treatment as $treatment)
                                    <br>- {{$treatment}}
                                @endforeach
                            </p>
                        </div>
                    </div>

                    <div class="flex justify-center">
                        <div class="block p-6 rounded-lg shadow-lg bg-white w-full h-full">
                            <h5 class="text-gray-900 text-lg leading-tight font-medium mb-2">Exames</h5>
                            <p class="text-gray-700 text-base mb-4 font-medium">
                                @foreach($suspect->exams as $exams)
                                    <br>- {{$exams}}
                                @endforeach
                            </p>
                        </div>
                    </div>

                    <div class="flex justify-center">
                        <div class="block p-6 rounded-lg shadow-lg bg-white w-full h-full">
                            <h5 class="text-gray-900 text-lg leading-tight font-medium mb-2">Causas</h5>
                            <p class="text-gray-700 text-base mb-4 font-medium">
                                @foreach($suspect->provoked as $provoked)
                                    <br>- {{$provoked}}
                                @endforeach
                            </p>
                        </div>
                    </div>

                    <div class="flex justify-center">
                        <div class="block p-6 rounded-lg shadow-lg bg-white w-full h-full">
                            <h5 class="text-gray-900 leading-tight font-medium mb-2">Sinais</h5>
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
</x-app-layout>
