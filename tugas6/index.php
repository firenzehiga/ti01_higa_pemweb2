<?php
    include 'db.php';

    //show data
    $query = "SELECT * FROM produk";
    $result = $conn->query($query);
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PEMWEB | Dashboard</title>
    <link rel="icon" type="image/x-icon" href="assets/dist/img/nf.ico">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">  
    <link rel="stylesheet" href="assets/plugins/fullcalendar/main.css">
    <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="assets/plugins/daterangepicker/daterangepicker.css">
    </head>
    <body class="hold-transition sidebar-mini layout-fixed" style="background-color:	#808080;">
    <div class="wrapper">

    <!-- Preloader -->


    <!-- Navbar -->

  <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
      <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Handphone</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-hover">
                  <tr align="center">
                    <th>No</th>
                    <th>Nama</th>
                    <th>Merk</th>
                    <th>RAM (Gb)</th>
                    <th>ROM (Gb)</th>
                    <th>Harga</th>
                  </tr>
                  <?php 
            while ($row = $result->fetch_assoc()) { ?>
                  <tr align="center">
                    <td><?= $row['id']?></td>
                    <td><?= $row['nama']?></td>
                    <td><?= $row['merk']?></td>
                    <td><?= $row['ram']?></td>
                    <td><?= $row['rom']?></td>
                    <td>Rp<?= number_format($row['harga'], '0', '.', '.') ?></td>
                  </tr>
                <?php
            }
            ?>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>

    <section class="content" >
      <div class="container" >
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- jquery validation -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tambah Data</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" method="POST" action="insert.php">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Nama :</label>
                    <div class="col-sm-5">
                    <input type="text" name="nama" class="form-control" id="" placeholder="Input Nama Hanphone">
                      </div>
                  </div>
                  <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Merk :</label>
                    <div class="col-sm-5">
                    <input type="text" name="merk" class="form-control" id="" placeholder="Input Merk">
                      </div>
                  </div>
                  <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">RAM :</label>
                    <div class="col-sm-5">
                    <input type="number" name="ram" class="form-control" id="" placeholder="Input RAM">
                      </div>
                  </div>
                  <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">ROM :</label>
                    <div class="col-sm-5">
                    <input type="number" name="rom" class="form-control" id="" placeholder="Input ROM">
                      </div>
                  </div>
                  <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Harga :</label>
                    <div class="col-sm-5">
                    <input type="number" name="harga" class="form-control" id="" placeholder="Input Harga">
                      </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Tambah</button>

                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>

    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/dist/js/adminlte.js"></script>
    <script src="assets/dist/js/pages/dashboard.js"></script>
    <script src="assets/plugins/fullcalendar/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="assets/plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="assets/plugins/jquery-validation/additional-methods.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script>
    $.widget.bridge('uibutton', $.ui.button)
    </script>
    <script>
    $(function () {


        //Date for the calendar events (dummy data)
        var date = new Date()
        var d    = date.getDate(),
            m    = date.getMonth(),
            y    = date.getFullYear()

        var Calendar = FullCalendar.Calendar;
        var Draggable = FullCalendar.Draggable;

    
        var checkbox = document.getElementById('drop-remove');
        var calendarEl = document.getElementById('calendar');

        // initialize the external events
        // -----------------------------------------------------------------


        var calendar = new Calendar(calendarEl, {
        headerToolbar: {
            left  : 'prev,next today',
            center: 'title',
            right : 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        themeSystem: 'bootstrap',
        //Random default events
        events: [
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
            url            : 'https://www.google.com/',
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
        // Color chooser button
        $('#color-chooser > li > a').click(function (e) {
        e.preventDefault()
        // Save color
        currColor = $(this).css('color')
        // Add color effect to button
        $('#add-new-event').css({
            'background-color': currColor,
            'border-color'    : currColor
        })
        })
        $('#add-new-event').click(function (e) {
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
            'border-color'    : currColor,
            'color'           : '#fff'
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
    <script>
    function Logout() {
        // Tampilkan SweetAlert konfirmasi logout
        Swal.fire({
    title: "Apakah Kamu ingin Logout?",
    icon: "question",
    showDenyButton: true,
    confirmButtonText: "Lanjut Keluar",
    denyButtonText: `Batalkan`
    }).then((result) => {
    /* Read more about isConfirmed, isDenied below */
    if (result.isConfirmed) {
        setTimeout(function() {
        window.location.href = 'index.php';
    }, 500)
    } else {
    }
    });
    }
    </script>
    

    </body>
    </html>


    