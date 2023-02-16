<div class="container-fluid">
  <footer class="col-12">
    <div class="float-right text-uppercase">
      <strong >Copyright &copy; 2021 <a style="color:green;" href="http://defensoria.ap.def.br" target="_blank" >DPE-AP</a>.</strong>
      todos os direitos reservados a DPE-AP/TI <br> <p class="text-right">Version 1.0.0</p>
    </div>
  </footer>
</div>
<script src="tmpt/plugins/jquery/jquery.min.js"></script>
<script src="tmpt/plugins/jquery-ui/jquery-ui.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="tmpt/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="tmpt/plugins/chart.js/Chart.min.js"></script>
<script src="tmpt/plugins/sparklines/sparkline.js"></script>
<script src="tmpt/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="tmpt/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<script src="tmpt/plugins/jquery-knob/jquery.knob.min.js"></script>
<script src="tmpt/plugins/moment/moment.min.js"></script>
<script src="tmpt/plugins/daterangepicker/daterangepicker.js"></script>
<script src="tmpt/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="tmpt/plugins/summernote/summernote-bs4.min.js"></script>
<script src="tmpt/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="tmpt/dist/js/adminlte.js"></script>
<script src="tmpt/dist/js/demo.js"></script>
<script src="tmpt/plugins/sweetalert2/sweetalert2.min.js"></script>
<script src="tmpt/plugins/toastr/toastr.min.js"></script>
<script src="tmpt/plugins/summernote/summernote-bs4.min.js"></script>
<script src="tmpt/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="tmpt/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="tmpt/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="tmpt/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script>
  $(function () {
    $('.textarea').summernote()
      })
</script>
<script src="tmpt/bibliotecas_list_buscar/DataTables-1.10.23/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready(function(){
      $('#minhaTabela').DataTable({
        	"language": {
                "lengthMenu": "Processos _MENU_ por página",
                "zeroRecords": "Nada encontrado",
                "info": " Página _PAGE_ de _PAGES_",
                "infoEmpty": "Nenhum processo disponível",
                "infoFiltered": "(filtrado de _MAX_ registros no total)",
                "search": "Pesquisar:",
                "paginate": {
                  "next": "Próximo",
                  "previous": "Anterior",
                  "first": "Primeiro",
                  "last": "Último"
    },
            }
        });
  });
  </script>
<script>
var toggler = document.getElementsByClassName("caret");
var i;
for (i = 0; i < toggler.length; i++) {
  toggler[i].addEventListener("click", function() {
    this.parentElement.querySelector(".nested").classList.toggle("active");
    this.classList.toggle("caret-down");
  });
}
</script>
<script>
$('span.alert').not('.alert-error').delay(10000).fadeOut(350);
</script>
<script>
    $('#flash-overlay-modal').modal();
</script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": false,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
    $('#example3').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": false,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>





<!--calendario-->
<!-- jQuery -->
<script src="tmpt/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="tmpt/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jQuery UI -->
<script src="tmpt/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- AdminLTE App -->
<script src="tmpt/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="tmpt/dist/js/demo.js"></script>
<!-- fullCalendar 2.2.5 -->
<script src="tmpt/plugins/moment/moment.min.js"></script>
<script src="tmpt/plugins/fullcalendar/main.min.js"></script>
<script src="tmpt/plugins/fullcalendar-daygrid/main.min.js"></script>
<script src="tmpt/plugins/fullcalendar-timegrid/main.min.js"></script>
<script src="tmpt/plugins/fullcalendar-interaction/main.min.js"></script>
<script src="tmpt/plugins/fullcalendar-bootstrap/main.min.js"></script>
<!-- Page specific script -->
<script>
  $(function () {

    /* initialize the external events
     -----------------------------------------------------------------*/
    function ini_events(ele) {
      ele.each(function () {

        // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
        // it doesn't need to have a start or end
        var eventObject = {
          title: $.trim($(this).text()) // use the element's text as the event title
        }

        // store the Event Object in the DOM element so we can get to it later
        $(this).data('eventObject', eventObject)

        // make the event draggable using jQuery UI
        $(this).draggable({
          zIndex        : 1070,
          revert        : true, // will cause the event to go back to its
          revertDuration: 0  //  original position after the drag
        })

      })
    }

    ini_events($('#external-events div.external-event'))

    /* initialize the calendar
     -----------------------------------------------------------------*/
    //Date for the calendar events (dummy data)
    var date = new Date()
    var d    = date.getDate(),
        m    = date.getMonth(),
        y    = date.getFullYear()

    var Calendar = FullCalendar.Calendar;
    var Draggable = FullCalendarInteraction.Draggable;

    var containerEl = document.getElementById('external-events');
    var checkbox = document.getElementById('drop-remove');
    var calendarEl = document.getElementById('calendar');

    // initialize the external events
    // -----------------------------------------------------------------

    new Draggable(containerEl, {
      itemSelector: '.external-event',
      eventData: function(eventEl) {
        console.log(eventEl);
        return {
          title: eventEl.innerText,
          backgroundColor: window.getComputedStyle( eventEl ,null).getPropertyValue('background-color'),
          borderColor: window.getComputedStyle( eventEl ,null).getPropertyValue('background-color'),
          textColor: window.getComputedStyle( eventEl ,null).getPropertyValue('color'),
        };
      }
    });

    var calendar = new Calendar(calendarEl, {
      plugins: [ 'bootstrap', 'interaction', 'dayGrid', 'timeGrid' ],
      header    : {
        left  : 'prev,next today',
        center: 'title',
        right : 'dayGridMonth,timeGridWeek,timeGridDay'
      },
      'themeSystem': 'bootstrap',
      //Random default events
      events    : [
        {
          title          : 'All Day Event',
          start          : new Date(y, m, 1),
          backgroundColor: '#f56954', //red
          borderColor    : '#f56954', //red
          allDay         : true
        },
        {
          title          : 'Long Event',
          start          : new Date(y, m, d - 5),
          end            : new Date(y, m, d - 2),
          backgroundColor: '#f39c12', //yellow
          borderColor    : '#f39c12' //yellow
        },
        {
          title          : 'Meeting',
          start          : new Date(y, m, d, 10, 30),
          allDay         : false,
          backgroundColor: '#0073b7', //Blue
          borderColor    : '#0073b7' //Blue
        },
        {
          title          : 'Lunch',
          start          : new Date(y, m, d, 12, 0),
          end            : new Date(y, m, d, 14, 0),
          allDay         : false,
          backgroundColor: '#00c0ef', //Info (aqua)
          borderColor    : '#00c0ef' //Info (aqua)
        },
        {
          title          : 'Birthday Party',
          start          : new Date(y, m, d + 1, 19, 0),
          end            : new Date(y, m, d + 1, 22, 30),
          allDay         : false,
          backgroundColor: '#00a65a', //Success (green)
          borderColor    : '#00a65a' //Success (green)
        },
        {
          title          : 'Click for Google',
          start          : new Date(y, m, 28),
          end            : new Date(y, m, 29),
          url            : 'http://google.com/',
          backgroundColor: '#3c8dbc', //Primary (light-blue)
          borderColor    : '#3c8dbc' //Primary (light-blue)
        }
      ],
      editable  : true,
      droppable : true, // this allows things to be dropped onto the calendar !!!
      drop      : function(info) {
        // is the "remove after drop" checkbox checked?
        if (checkbox.checked) {
          // if so, remove the element from the "Draggable Events" list
          info.draggedEl.parentNode.removeChild(info.draggedEl);
        }
      }    
    });

    calendar.render();
    // $('#calendar').fullCalendar()

    /* ADDING EVENTS */
    var currColor = '#3c8dbc' //Red by default
    //Color chooser button
    var colorChooser = $('#color-chooser-btn')
    $('#color-chooser > li > a').click(function (e) {
      e.preventDefault()
      //Save color
      currColor = $(this).css('color')
      //Add color effect to button
      $('#add-new-event').css({
        'background-color': currColor,
        'border-color'    : currColor
      })
    })
    $('#add-new-event').click(function (e) {
      e.preventDefault()
      //Get value and make sure it is not null
      var val = $('#new-event').val()
      if (val.length == 0) {
        return
      }

      //Create events
      var event = $('<div />')
      event.css({
        'background-color': currColor,
        'border-color'    : currColor,
        'color'           : '#fff'
      }).addClass('external-event')
      event.html(val)
      $('#external-events').prepend(event)

      //Add draggable funtionality
      ini_events(event)

      //Remove event from text input
      $('#new-event').val('')
    })
  })
</script>
<!--calendario-->
</body>
</html>
