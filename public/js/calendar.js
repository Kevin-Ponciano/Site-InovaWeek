// import the third-party stylesheets directly from your JS
import 'bootstrap/dist/css/bootstrap.css';
import '@fortawesome/fontawesome-free/css/all.css'; // needs additional webpack config!

import { Calendar } from '@fullcalendar/core';
import bootstrapPlugin from '@fullcalendar/bootstrap';

document.addEventListener('DOMContentLoaded', function () {
    let calendarEl = document.getElementById('calendar');
    let calendar = new FullCalendar.Calendar(calendarEl, {
        themeSystem: 'bootstrap',
        initialView: 'dayGridMonth',
        locale: 'pt-BR',
        headerToolbar: {
            left: 'prev today next',
            center: 'title',
            right: 'dayGridMonth timeGridWeek listWeek',
        },
        height: 550,

        dateClick: function (info) {
            $("#evento").modal("show");
        }

    });
    calendar.render();
});
