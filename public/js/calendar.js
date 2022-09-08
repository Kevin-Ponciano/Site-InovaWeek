document.addEventListener('DOMContentLoaded', function () {
    let calendarEl = document.getElementById('calendar');
    let calendar = new FullCalendar.Calendar(calendarEl, {

        initialView: 'dayGridMonth',
        locale: 'pt-BR',
        headerToolbar: {
            left: 'prev today next',
            center: 'title',
            right: 'dayGridMonth timeGridWeek listWeek',
        },
        height: 550,

        dateClick:function(info) {
            $("#event").modal("show");
            console.log('clicado')
        }

    });
    calendar.render();
});
