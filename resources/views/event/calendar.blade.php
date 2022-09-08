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

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-secondary btn-lg" data-toggle="modal" data-target="#event">
        Launch
    </button>

    <!-- Modal -->
    <div class="modal fade" id="event" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="">

                        <div class="form-group">
                            <label for="id">ID</label>
                            <input class="form-control" type="text" name="id" id="id" placeholder="" aria-describedby="helpId">
                            <small class="form-text text-muted" id="helpId">Help text</small>
                        </div>

                        <div class="form-group">
                            <label for="title">Titulo</label>
                            <input class="form-control" type="text" name="title" id="title" placeholder="Digite o Titulo" aria-describedby="helpId">
                            <small class="form-text text-muted" id="helpId">Help text</small>
                        </div>

                        <div class="form-group">
                            <label for="description">Descrição</label>
                            <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="start">start</label>
                            <input class="form-control" type="text" name="start" id="start" placeholder="" aria-describedby="helpId">
                            <small class="form-text text-muted" id="helpId">Help text</small>
                        </div>

                        <div class="form-group">
                            <label for="end">end</label>
                            <input class="form-control" type="text" name="end" id="end" placeholder="" aria-describedby="helpId">
                            <small class="form-text text-muted" id="helpId">Help text</small>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" id="btnSave">Salvar</button>
                    <button type="button" class="btn btn-warning" id="btnChange">Alterar</button>
                    <button type="button" class="btn btn-danger" id="btnRemove">Remover</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Sair</button>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
