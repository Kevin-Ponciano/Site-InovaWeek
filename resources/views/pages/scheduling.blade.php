<x-app-layout>
    <br>
    <div class="container-sm shadow bg-white">
        <table class="table table-hover align-middle">
            <thead>
            <tr>
                <th>ID</th>
                <th>Paciente</th>
                <th>Exame</th>
                <th>Data</th>
                <th>Hora</th>
                <th>Observação</th>
            </tr>
            </thead>
            <tbody>
            @foreach($consults as $consult)
                @if($consult->patient!="")
                    <tr>
                        <td>{{$consult->id}}</td>
                        <td>{{$consult->patient}}</td>
                        <td></td>
                        <td>{{$consult->start}}</td>
                        <td>{{$consult->end}}</td>
                        <td>{{$consult->observation}}</td>
                    </tr>
                @endif
            @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
