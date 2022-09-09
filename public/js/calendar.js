document.addEventListener('DOMContentLoaded',  () => {

    let form = document.querySelector('form')

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

        dateClick:(info) => {
            $('#event').modal('show');
        }

    });
    calendar.render();

    document.getElementById('btnSave').addEventListener('click',()=>{
        const formData = new formData(form);
    })
});
