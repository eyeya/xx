
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ตารางการประชุม</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- fullCalendar -->
  <link rel="stylesheet" href="plugins/fullcalendar/main.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="css/stylenews.css" type="text/css">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=K2D&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Prompt', sans-serif;

    }

    .columnnn {
      float: left;
      width: 40%;
      padding: 8px;
      text-align: center;
      border-radius: 20px;
      /* border:double 5px rgb(243, 172, 206); */
    }

    .container-fluid {
      justify-content: center;
      margin: 0 auto;
    }

    #calendar {
      color: rgb(44, 17, 77);
      background-color: #FFFAFA;
      width: 100%;
      height: auto;
    }

    .card-body p-0 {
      justify-content: center;

    }

    .col-md-9 {
      margin-left: 150px;
    }
  </style>
</head>

<body class="hold-transition sidebar-mini">
  <section class="content-header">


    <!-- <div class="container-fluid">
        
      </div> -->

    <div id="external-events">
    </div>

    
    </div>
    <div class="card card-primary">

      <div class="card-body p-0">

        <div id="calendar"></div>
      </div>
  </section>

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- jQuery UI -->
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- fullCalendar 2.2.5 -->
  <script src="plugins/moment/moment.min.js"></script>
  <script src="plugins/fullcalendar/main.js"></script>
  <script src='plugins/fullcalendar/locales-all.js'></script>
  <!-- AdminLTE for demo purposes -->
  <!-- <script src="dist/js/demo.js"></script> -->
  <!-- Page specific script -->
  <script>
    $(function() {

      /* initialize the external events
       -----------------------------------------------------------------*/
      function ini_events(ele) {
        ele.each(function() {

          // create an Event Object (https://fullcalendar.io/docs/event-object)
          // it doesn't need to have a start or end
          var eventObject = {
            title: $.trim($(this).text()) // use the element's text as the event title
          }

          // store the Event Object in the DOM element so we can get to it later
          $(this).data('eventObject', eventObject)

          // make the event draggable using jQuery UI
          $(this).draggable({
            zIndex: 1070,
            revert: true, // will cause the event to go back to its
            revertDuration: 0 //  original position after the drag
          })

        })
      }

      ini_events($('#external-events div.external-event'))

      /* initialize the calendar
       -----------------------------------------------------------------*/
      //Date for the calendar events (dummy data)
      var date = new Date()
      var d = date.getDate(),
        m = date.getMonth(),
        y = date.getFullYear()

      var Calendar = FullCalendar.Calendar;
      var Draggable = FullCalendar.Draggable;

      var containerEl = document.getElementById('external-events');
      var checkbox = document.getElementById('drop-remove');
      var calendarEl = document.getElementById('calendar');

      // initialize the external events
      // -----------------------------------------------------------------

      new Draggable(containerEl, {
        itemSelector: '.external-event',
        eventData: function(eventEl) {
          return {
            title: eventEl.innerText,
            backgroundColor: window.getComputedStyle(eventEl, null).getPropertyValue('background-color'),
            borderColor: window.getComputedStyle(eventEl, null).getPropertyValue('background-color'),
            textColor: window.getComputedStyle(eventEl, null).getPropertyValue('color'),
          };
        }
      });



      <?php

$objDB = @mssql_select_db("work1");
$data = @mssql_query("SELECT * FROM appointment where status='1' ");

//สร้าง Array เปล่า
$events = array();


while ($info = @mssql_fetch_array($data)) {
    $meetmonth = iconv("tis-620", "utf-8", $info['Meetmonth']);
    $appointment = iconv("tis-620", "utf-8", $info['Appointment']);
    $date = iconv("tis-620", "utf-8", $info['Date']);
    $time = iconv("tis-620", "utf-8", $info['Time']);
    $day = iconv("tis-620", "utf-8", $info['Day']);
    $invite = iconv("tis-620", "utf-8", $info['Invite']);
    $send = iconv("tis-620", "utf-8", $info['Send']);
    $location = iconv("tis-620", "utf-8", $info['Location']);
    $note = iconv("tis-620", "utf-8", $info['Note']);
    $dd = iconv("tis-620", "utf-8", $info['DD']);
    $mm = iconv("tis-620", "utf-8", $info['MM']);
    $yy = iconv("tis-620", "utf-8", $info['YY']);

    // เอาตัวแปร ข้างบนนี้ไปยัดใส่ใน array
    $item = array();
    $item["meetmonth"] = $meetmonth;
    $item["appointment"] = $appointment;
    $item["date"] = $date;
    $item["time"] = $time;
    $item["day"] = $day;
    $item["invite"] = $invite;
    $item["send"] = $send;
    $item["location"] = $location;
    $item["note"] = $note;

    $item["dd"] = $dd;
    $item["mm"] = $mm;
    $item["yy"] = $yy;
    


        
    // "meetmonth" => $meetmonth,
        // "appointment" => $appointment,
        // "date" => $date,
        // "time" => $time,
        // "day" => $day,
        // "invite" => $invite,
        // "send" => $send,
        // "location" => $location,
        // "note" => $note,
    
    // print_r($item);
    array_push($events,$item);
    
} 
// print_r($events);
 
 //แปลง Array ให้กลายเป็น String และ return ออกไป
//  return json_encode($data, JSON_UNESCAPED_UNICODE);
//  echo json_encode($events);
?>

        let data = JSON.parse(`<?php echo json_encode($events);?>`);
      var calendar = new Calendar(calendarEl, {
        locale: 'th',
        headerToolbar: {
          left: 'prev,next today',
          center: 'title',
          right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        themeSystem: 'bootstrap',
        //Random default events

       
        events : data.map(function(item){
          // console.log(new Date(number(item.yy), 7, 16));
          
          return {
            title: item.appointment,
            // start: new Date(Number(item.yy), 7, 16),
            start: new Date(Number(item.yy), Number(item.mm)-1, Number(item.dd)),
            allDay: true,
            backgroundColor: '#f39c12', //yellow
            borderColor: '#f39c12' //yellow
            
          };
        }),

        // events: [{
        //     title: "ประชุมครั้งที่ 1",
        //     start: new Date(y - 1, m + 3, 19),
        //     allDay: true,
        //     backgroundColor: '#f39c12', //yellow
        //     borderColor: '#f39c12' //yellow
        //   },

        //   {
        //     title: "ประชุมครั้งที่ 2",
        //     start: new Date(y - 1, m + 4, 9),
        //     allDay: true,
        //     backgroundColor: '#0073b7', //Blue
        //     borderColor: '#0073b7' //Blue
        //   },

        //   {
        //     title: "ประชุมครั้ง ที่ 3",
        //     start: new Date(y, m - 5, 8),
        //     allDay: true,
        //     backgroundColor: '#00a65a', //Primary (light-blue)
        //     borderColor: '#00a65a' //Primary (light-blue)
        //   },

        //   {
        //     title: "ประชุมครั้ง ที่ 4",
        //     start: new Date(y, m - 4, 15),
        //     allDay: true,
        //     backgroundColor: '#f56954', //Primary (light-blue)
        //     borderColor: '#f56954' //Primary (light-blue)
        //   },
        //   {
        //     title: "ประชุมครั้ง ที่ 5",
        //     start: new Date(y, m - 3, 19),
        //     allDay: true,
        //     backgroundColor: '#3c8dbc', //Primary (light-blue)
        //     borderColor: '#3c8dbc' //Primary (light-blue)
        //   },

        //   {
        //     title: "ประชุมครั้งที่ 6",
        //     start: new Date(y, m - 2, 17),
        //     allDay: true,
        //     backgroundColor: '#00a65a', //Success (green)
        //     borderColor: '#00a65a' //Success (green)
        //   },

        //   {
        //     title: "ประชุมครั้งที่ 7",
        //     start: new Date(y, m - 1, 14),
        //     allDay: true,
        //     backgroundColor: '#00c0ef', //Info (aqua)
        //     borderColor: '#00c0ef' //Info (aqua)
        //   },

        //   {
        //     title: "ประชุมครั้งที่ 8",
        //     start: new Date(y, m, 12),
        //     backgroundColor: "#f56954", //red
        //     borderColor: "#f56954", //red
        //     allDay: true,
        //   },

        //   {
        //     title: "ประชุมครั้งที่ 9",
        //     start: new Date(y, m + 1, 16),
        //     allDay: true,
        //     backgroundColor: '#f39c12', //yellow
        //     borderColor: '#f39c12' //yellow
        //   },

        //   {
        //     title: "ประชุมครั้งที่ 10",
        //     start: new Date(y, m + 2, 13),
        //     allDay: true,
        //     backgroundColor: '#0073b7', //Blue
        //     borderColor: '#0073b7' //Blue
        //   },

        // ],
        editable: true,
        droppable: true, // this allows things to be dropped onto the calendar !!!
        drop: function(info) {
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
      // Color chooser button
      $('#color-chooser > li > a').click(function(e) {
        e.preventDefault()
        // Save color
        currColor = $(this).css('color')
        // Add color effect to button
        $('#add-new-event').css({
          'background-color': currColor,
          'border-color': currColor
        })
      })
      $('#add-new-event').click(function(e) {
        e.preventDefault()
        // Get value and make sure it is not null
        var val = $('#new-event').val()
        if (val.length == 0) {
          return
        }

        // Create events
        var event = $('<div />')
        event.css({
          'background-color': currColor,
          'border-color': currColor,
          'color': '#fff'
        }).addClass('external-event')
        event.text(val)
        $('#external-events').prepend(event)

        // Add draggable funtionality
        ini_events(event)

        // Remove event from text input
        $('#new-event').val('')
      })
    })
  </script>
</body>
<footer>หมายเหตุ : แผนการประชุมคณะกรรมการกิจการสัมพันธ์ ประจำปีงบประมาณ 2565 อาจมีการเปลี่ยนแปลงตามมติที่ประชุม</footer>

</html>