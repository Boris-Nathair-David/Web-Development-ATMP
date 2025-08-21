document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            plugins: [ 'interaction', 'dayGrid', 'timeGrid', 'list', 'bootstrap' ],
            defaultView: 'dayGridMonth',
            themeSystem: 'bootstrap',
            locale: 'es',
            header:{
                left:'today,prevYear,prev,next',
                center:'title',
                right:'dayGridMonth,dayGridWeek,timeGridDay,listYear'
                
            },
            navLinks:true,
            selectable:true,
            selectMirror:true,
            /*select: function(arg){
                var title = prompt('Introduzca el nombre del torneo');
                if(title){
                    calendar.addEvent({
                        title: title,
                        start:arg.start,
                        end:arg.eng,
                        allDay: arg.allDay,
                    })
                }
                calendar.unselect()
            },*/
            /*dateClick: function() {
                alert('a day has been clicked!');
            },*/
            editable: true,
            weekNumbers: true,
            eventLimit: true, // allow "more" link when too many events
            events: [
            {
                groupId: 1,
                title: 'Copa Friendship InterClubes 2019',
                start: '2019-07-06T14:00:00',
                end: '2019-07-06T23:00:00',
                url:'https://www.facebook.com/158947301461128/photos/a.158955884793603/348611489161374/?type=3&theater'
            },
            {
                groupId: 1,
                title: 'Copa Friendship InterClubes 2019',
                start: '2019-07-07T09:30:00',
                end: '2019-07-07T17:00:00',
                url:'https://www.facebook.com/158947301461128/photos/a.158955884793603/348611489161374/?type=3&theater'
            },
            {
                title:'Open Panamá Oeste 2019',
                start:'2019-10-19T14:00:00',
                end:'2019-10-19T18:00:00'
            },
            {
                title:'Torneo Nacional por Equipos 2019',
                start:'2019-11-29T17:00:00',
                end:'2019-11-29T22:00:00'
            },
            {
                title:'Torneo Nacional por Equipos 2019',
                start:'2019-11-30T09:00:00',
                end:'2019-11-30T17:00:00'
            },
            {
                title:'Torneo Nacional por Equipos 2019',
                start:'2019-12-01T10:00:00',
                end:'2019-12-01T19:00:00'
            }

            ],
            eventBackgroundColor:'rgba(255,255,255,0)',
            eventTextColor:'#fff',
            eventBorderColor:'rgba(255,255,255,0)',
            eventClick: function(info) {
                info.jsEvent.preventDefault(); // don't let the browser navigate
            
                if (info.event.url) {
                  window.open(info.event.url);
                }
              }
            

        });

        calendar.setOption('locale', 'es');
        
        calendar.render();

        
        });