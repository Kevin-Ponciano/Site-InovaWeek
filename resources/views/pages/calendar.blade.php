<x-app-layout>
    {{--    <x-slot name="header">--}}
    {{--        <h2 class="font-semibold text-xl text-gray-800 leading-tight">--}}
    {{--            Calendário--}}
    {{--        </h2>--}}
    {{--    </x-slot>--}}
    {{-- DIV utilizando Bootstrap 4  --}}
    <div class="container-sm">
        <br>
        <div id="calendar"></div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="event" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Consulta</h5>
                </div>
                <div class="modal-body">

                    <form id="form-calendar" action="">
                    {{--Chave de seguraça--}}
                    {!! csrf_field() !!}

                        <div class="form-group d-none">
                            <label for="id">ID</label>
                            <input class="form-control" type="text" name="id" id="id" placeholder="" aria-describedby="helpId">
                        </div>

                        <div class="form-group">
                            <input type="radio" class="btn-check" name="title" id="free" autocomplete="off" value='LIVRE' onclick='updateColor("green");'>
                            <label class="btn btn-outline-success" for="free">Livre</label>

                            <input type="radio" class="btn-check" name="title" id="marked" autocomplete="off" value='MARCADA' onclick='updateColor(" ");'>
                            <label class="btn btn-outline-primary" for="marked">Marcada</label>
                        </div>

                        <div class="form-group" id="divPatient">
                            <label for="patient">Paciente ID:</label>
                            <input class="form-control" name="patient" id="patient">
                        </div>

                        <div class="form-group">
                            <label for="observation">Observação</label>
                            <textarea class="form-control" name="observation" id="observation" rows="2"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="time">Horário Consulta</label>
                            <input class="form-control" type="text" name="time" id="time" value="Sem hora marcada" readonly
                                   style="display: block;width: 100%;padding: 0.375rem 0;margin-bottom: 0;line-height: 1.5;color: #212529;background-color: transparent;border: solid transparent;border-width: 1px 0;">
                        </div>
                        {{--lembrete: alterar para horarios de consulta e separar data e hora para cada campo--}}
                        <div class="form-group d-none">
                            <label for="start">start</label>
                            <input class="form-control" type="text" name="start" id="start">
                        </div>

                        <div class="form-group d-none">
                            <label for="end">end</label>
                            <input class="form-control" type="text" name="end" id="end">
                        </div>

                        <div class="form-group d-none">
                            <label for="color">Color</label>
                            <input class="form-control" type="text" name="color" id="color">
                        </div>

                        <div class="form-group d-none">
                            <label for="display">Display</label>
                            <input class="form-control" type="text" name="display" id="display">
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" id="btnSave">Criar</button>
                    <button type="button" class="btn btn-warning" id="btnChange">Alterar</button>
                    <button type="button" class="btn btn-danger" id="btnRemove">Remover</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Sair</button>

                </div>
            </div>
        </div>
    </div>

</x-app-layout>
