<x-app-layout>
    <br>
    <div class="container-sm shadow bg-white">
        <table class="table table-hover align-middle">
            <thead>
            <tr>
                <th>Paciente</th>
                <th>Exame</th>
                <th>Data</th>
                <th>Hora</th>
                <th>Observação</th>
            </tr>
            </thead>
            <tbody class="align-middle">
            @foreach($consults as $consult)
                @can('user')
                @if($consult->patient==Auth::user()->name)
                    <tr>
                        <td>{{$consult->patient}}</td>
                        <td></td>
                        <td>{{$consult->start}}</td>
                        <td>{{$consult->end}}</td>
                        <td>{{$consult->observation}}</td>
                    </tr>
                @endif
                @elsecan('admin')
                    @if($consult->patient!='')
                    <tr>
                        <td>{{$consult->patient}}</td>
                        <td></td>
                        <td>{{$consult->start}}</td>
                        <td>{{$consult->end}}</td>
                        <td>{{$consult->observation}}</td>
                    </tr>
                    @endif
                @endcan
            @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
