<x-app-layout>
    <br>
    <div class="container-sm shadow bg-white">
        <table class="table table-hover">
            <!-- @foreach($consults as $consult)
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Paciente</th>
                    <th>Exame</th>
                    <th>Data e Hora</th>
                    <th>Observação</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$consult->id}}</td>
                    <td>@foreach($consult->patient as $patient) {{$patient}} @endforeach</td>
                    <td>@foreach($consult->observation as $observation) {{$observation}} @endforeach</td>
                    <td>@foreach($consult->start as $start) {{$start}} @endforeach</td>
                </tr>
            </tbody>
            @endforeach -->
        </table>
    </div>
</x-app-layout>