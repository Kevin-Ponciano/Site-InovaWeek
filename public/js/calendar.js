document.addEventListener('DOMContentLoaded', function() {
    let calendarEl = document.getElementById('calendar');
    let calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        locale: 'pt-BR',

        headerToolbar: {
            left: 'prev, next today',
            center: 'title',
            right: 'dayGridMonth, timeGridWeek, listWeek',
        },

        dateClick:function(info){
            $("#evento").modal("show");
        }

    });

    calendar.render();
});
