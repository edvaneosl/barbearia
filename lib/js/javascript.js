(function(win,doc){
    'use strict';

    //Exibir o calendário
    function getCalendar(perfil, div)
    {
        let calendarEl=doc.querySelector(div);
        let calendar = new FullCalendar.Calendar(calendarEl, {
          /*Configuracoes*/
            initialView: 'dayGridMonth',
            headerToolbar:{
                start: 'dayGridMonth, timeGridWeek, timeGridDay',
                center: 'title',
                end: 'prev,next,today'
            },
            buttonText:{
                today:    'hoje',
                month:    'mês',
                week:     'semana',
                day:      'dia'
            },
            locale:'pt-br',
            dateClick: function(info) {
                if(perfil == 'manager'){
                    if(info.view.type == 'dayGridMonth'){
                        calendar.changeView('timeGrid', info.dateStr);
                    }else{
                        window.location.href='/barbearia/views/manager/add.php?date='+info.dateStr;
                    }
                }else{
                    if(info.view.type == 'dayGridMonth'){
                        calendar.changeView('timeGrid', info.dateStr);
                    }else{
                        window.location.href='/barbearia/views/user/add.php?date='+info.dateStr;
                    }
                }
                /*alert('Clicked on: ' + info.dateStr);
                alert('Coordinates: ' + info.jsEvent.pageX + ',' + info.jsEvent.pageY);
                alert('Current view: ' + info.view.type);*/
            },
            events: '/barbearia/controllers/ControllerEvents.php',
            eventClick: function(info) {
                if(perfil == 'manager'){
                    window.location.href=`/barbearia/views/manager/edit?id=${info.event.id}`;
                }
            },
            
            /*Definições*/
            businessHours: {
              // days of week. an array of zero-based day of week integers (0=Sunday)
              daysOfWeek: [ 1, 2, 3, 4, 5 ], // Monday - Thursday

              startTime: '08:00', // a start time (10am in this example)
              endTime: '18:00', // an end time (6pm in this example)
            },
             weekends: false,
            slotMinTime: "08:00:00",
            slotMaxTime: "18:00:00",
            slotDuration: "00:20:00",
            slotLabelInterval: "00:20:00",
            slotLabelFormat: {
              hour: 'numeric',
              minute: '2-digit',
              omitZeroMinute: false,
              meridiem: 'short'
            },
            dayMaxEvents: true,
            selectOverlap: false,
            validRange: function(nowDate) { //inicia o calendario na data atual
                return {
                  start: nowDate
                };
            }

        });
        calendar.render();
    }

    if(doc.querySelector('.calendarUser')){
        getCalendar('user','.calendarUser');
    }else if(doc.querySelector('.calendarManager')){
        getCalendar('manager','.calendarManager');
    }

    /*se existir delete cria a variavel select
    if(doc.querySelector('#delete')){
        let btn=doc.querySelector('#delete');
        btn.addEventListener('click',(event)=>{
            event.preventDefault();
            if(confirm("Deseja mesmo apagar este dado?")){
                window.location.href=event.target.parentNode.href;
            }
        },false);
    }*/

})(window,document);


