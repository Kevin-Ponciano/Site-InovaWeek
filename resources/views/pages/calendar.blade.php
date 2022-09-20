<x-app-layout>
    {{--    <x-slot name="header">--}}
    {{--        <h2 class="font-semibold text-xl text-gray-800 leading-tight">--}}
    {{--            Calendário--}}
    {{--        </h2>--}}
    {{--    </x-slot>--}}

    <br>
    <div class="container-sm shadow bg-white">
        <br>
        <div class="" id="calendar"></div>
        <br>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="event" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" style="color:#00bed8;font-size: x-large"><b>Marcação de Consulta</b></h5>
                </div>
                <div class="modal-body">

                    <form id="form-calendar" action="">
                        {{--Chave de seguraça--}}
                        {!! csrf_field() !!}

                        <div class="form-group d-none">
                            <label for="id">ID</label>
                            <input class="form-control" type="text" name="id" id="id" placeholder=""
                                   aria-describedby="helpId">
                        </div>


                        <div class="form-group @can('user') d-none @endcan">

                            <input type="radio" class="btn-check" name="title" id="free" autocomplete="off"
                                   value='LIVRE' onclick='updateColor("#00e600");'>
                            <label class="btn btn-outline-success" for="free">Livre</label>

                            <input type="radio" class="btn-check" name="title" id="marked" autocomplete="off"
                                   value='MARCADA' onclick='updateColor(" ");' checked>
                            <label class="btn btn-outline-primary" for="marked">Criando</label>
                        </div>
                        <br id="br1">

                        <div class="form-floating" id="divPatient">
                            <input class="form-control shadow" name="patient" id="patient"
                                   @can('user') readonly @endcan>
                            <label for="patient">Paciente ID:</label>
                        </div>
                        <br>

                        <div class="form-floating">
                            <textarea class="form-control shadow" name="observation" id="observation"
                                      rows="2"></textarea>
                            <label for="observation">Observação</label>
                        </div>
                        <br>

                        <div class="form-floating">
                            <input class="form-control shadow" name="time" id="time"
                                   readonly>
                            <label for="time">Horário Consulta</label>
                        </div>

                        <div class="form-group d-none">
                            <input class="form-control" type="text" name="start" id="start">
                        </div>

                        <div class="form-group d-none">
                            <input class="form-control" type="text" name="end" id="end">
                        </div>

                        <div class="form-group d-none">
                            <input class="form-control" type="text" name="color" id="color">
                        </div>

                        <div class="form-group d-none">
                            <input class="form-control" type="text" name="display" id="display">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    @can('user')
                        <button type="button" class="btn btn-primary" id="btnChange">Marcar</button>
                    @else
                        <button type="button" class="btn btn-primary" id="btnSave">Marcar</button>
                        <button type="button" class="btn btn-primary" id="btnChange">Alterar</button>
                        <button type="button" class="btn btn-danger" id="btnRemove">Remover</button>
                    @endcan
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Sair</button>

                </div>
            </div>
        </div>
    </div>

</x-app-layout>

<script>
    // lembrate: configurar timeGridWeek para começar com o dia atual
    // Bloquear acesso a consulta para o usuario
    // Definir horário como disponível utilizando evento e com background
    // Para isso, n posso criar um novo evento, e sim só alterar ele
    // Criar um mini calendário com as consultas de hoje
    // Cada consulta deve ser única naquele horario
    // Tranferir toda regra do calendar.js para o Controller
    // adiciinar legenda das cores
    // corrigir o botao alterar


    const d = new Date()
    d.setHours(d.getHours() - 3)

    // window.addEventListener('contextmenu', (event) => {
    //     event.preventDefault()
    // })

    updateColor = (values) => {
        document.getElementById('color').value = values
        if (values === '#00e600') {
            document.getElementById('divPatient').classList.add('d-none')
            document.getElementById('br1').classList.add('d-none')
            document.getElementById('display').value = 'background'
        } else {
            document.getElementById('divPatient').classList.remove('d-none')
            document.getElementById('br1').classList.remove('d-none')
            document.getElementById('display').value = ' '
            document.getElementById('patient').value = ' '
        }

    }


    document.addEventListener('DOMContentLoaded', () => {

        let form = document.querySelector('#form-calendar')

        let calendarEl = document.getElementById('calendar')

        let calendar = new FullCalendar.Calendar(calendarEl, {
            themeSystem: 'bootstrap5',
            initialView: 'timeGridFourDay',//'dayGridMonth',
            locale: 'pt-BR',
            timeZone: 'UTC',
            headerToolbar: {
                left: 'prev today next',
                center: 'title',
                right: 'dayGridMonth timeGridFourDay timeGridDay listMonth',
            },
            views: {
                timeGrid: {
                    eventMinHeight: 1,
                    allDaySlot: false,

                },
                timeGridFourDay: {
                    type: 'timeGrid',
                    duration: {days: 7},
                    buttonText: 'Semana'
                }
            },
            nowIndicator: true,
            now: d,
            slotMinTime: '07:00:00',
            slotMaxTime: '17:00:00',
            slotDuration: '01:00:00',
            slotLabelFormat: {
                hour: '2-digit',
                minute: '2-digit',
                omitZeroMinute: false,
                hour12: false
            },
            height: 500,
            expandRows: true,
            @can('user')
                @else
            editable: true,
            @endcan
            dayMaxEvents: true,
            eventSources: {
                @can('user')
                url: rootUrl + "/calendario/show/{{Auth::user()->name}}",
                @else
                url: rootUrl + '/calendario/show',
                @endcan
                method: 'POST',
                extraParams: {
                    _token: form._token.value,
                }
            },

            // eventDidMount:(info) => {
            //     $(info.el).tooltip({
            //         title:'Paciente: ' + info.event.extendedProps.patient,
            //         placement: 'top',
            //         trigger: 'hover',
            //         container: 'body'
            //     });
            //
            // },
            @can('user')
                @else
            dateClick: (info) => {
                if (info.view.type !== 'dayGridMonth') {
                    // Reseta as informações do Modal
                    form.reset();
                    document.getElementById('divPatient').classList.remove('d-none')
                    document.getElementById('br1').classList.remove('d-none')

                    let time = new Date(info.dateStr.replace(/[^0-9,:-]/gi, ' '))
                    form.time.value = time.toLocaleString()

                    // Get data e hora atual e coloca no campo data
                    form.start.value = info.dateStr.replace(/[^0-9,:-]/gi, ' ')
                    form.end.value = info.dateStr.replace(/[^0-9,:-]/gi, ' ')


                    $('#event').modal('show')
                }

            },
            @endcan
            eventOverlap: function (stillEvent, movingEvent) {
                return stillEvent.allDay && movingEvent.allDay;
            },
            eventClick: (info) => {// adicionar if para abrir somente para alterar
                @can('user')
                if (info.event._def.ui.backgroundColor !== 'red') {
                    axios.post(rootUrl + '/calendario/edit/' + info.event.id).then(
                        // Se der certo, o modal será aberto com as informações do banco
                        (res) => {
                            // Recupero as informações do Controller e as insiro no form
                            form.id.value = res.data.id
                            document.getElementById('br1').classList.remove('d-none')

                            form.patient.value = '{{Auth::user()->name}}'

                            form.observation.value = res.data.observation

                            let time = new Date(info.event.startStr.replace(/[^0-9,:-]/gi, ' '))
                            form.time.value = time.toLocaleString()

                            form.start.value = res.data.start
                            form.end.value = res.data.end

                            $('#event').modal('show')
                        }).catch(
                        // Caso um erro for encontrado será imprimido no console
                        error => {
                            if (error.response) {
                                console.log(error.response.data)
                            }
                        }
                    )
                } else {
                    console.log('bloqueado')
                }
                @else
                axios.post(rootUrl + '/calendario/edit/' + info.event.id).then(
                    // Se der certo, o modal será aberto com as informações do banco
                    (res) => {
                        // Recupero as informações do Controller e as insiro no form
                        document.getElementById('br1').classList.remove('d-none')

                        form.id.value = res.data.id

                        form.title.value = 'MARCADA'
                        form.patient.value = res.data.patient

                        form.observation.value = res.data.observation

                        let time = new Date(info.event.startStr.replace(/[^0-9,:-]/gi, ' '))
                        form.time.value = time.toLocaleString()

                        form.start.value = res.data.start
                        form.end.value = res.data.end

                        console.log(form.id.value+ ' '+ res.data.id)
                        $('#event').modal('show')
                    }).catch(
                    // Caso um erro for encontrado será imprimido no console
                    error => {
                        if (error.response) {
                            console.log(error.response.data)
                        }
                    }
                )
                @endcan
            },
            eventDrop: (info) => {
                axios.post(rootUrl + '/calendario/edit/' + info.event.id).then(
                    // Se der certo, o modal será aberto com as informações do banco
                    (res) => {
                        // Recupero as informações do Controller e as insiro no form
                        form.id.value = res.data.id

                        form.title.value = res.data.title
                        form.patient.value = res.data.patient
                        form.observation.value = res.data.observation

                        let time = new Date(info.event.startStr.replace(/[^0-9,:-]/gi, ' '))
                        form.time.value = time.toLocaleString()

                        form.start.value = info.event.startStr.replace(/[^0-9,:-]/gi, ' ')
                        form.end.value = form.start.value

                        $('#event').modal('show')
                    }).catch(
                    // Caso um erro for encontrado será imprimido no console
                    error => {
                        if (error.response) {
                            console.log(error.response.data)
                        }
                    }
                )
            }

        });

        calendar.render()

        calenUpdate =()=>{
            calendar.refetchEvents()
        }
        setInterval(calenUpdate,1000)

        document.getElementById('btnChange').addEventListener('click', () => {
            sendData('/calendario/update/' + form.id.value)
        })
        @can('user')
        @else
        document.getElementById('btnSave').addEventListener('click', () => {
            sendData('/calendario/store')
        })

        document.getElementById('btnRemove').addEventListener('click', () => {
            sendData('/calendario/destroy/' + form.id.value)
        })
        @endcan

            sendData = (url) => {
            const formData = new FormData(form)

            // Axios envia informações via url
            axios.post(rootUrl + url, formData).then(
                // Se der certo, o modal será fechado e a informação enviada
                (res) => {
                    calendar.refetchEvents()
                    $('#event').modal('hide')
                }).catch(
                // Caso um erro for encontrado será imprimido no console
                error => {
                    if (error.response) {
                        console.log(error.response.data)
                    }
                }
            )
        }
    })
</script>
