<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Clínica</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="http://localhost/Clinica-L8/public/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="http://localhost/Clinica-L8/public/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="http://localhost/Clinica-L8/public/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="http://localhost/Clinica-L8/public/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="http://localhost/Clinica-L8/public/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="http://localhost/Clinica-L8/public/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="http://localhost/Clinica-L8/public/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="http://localhost/Clinica-L8/public/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="http://localhost/Clinica-L8/public/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="http://localhost/Clinica-L8/public/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="http://localhost/Clinica-L8/public/bower_components/datatables.net-bs/css/responsive.bootstrap.min.css">
  <!-- FullCalendar -->
  <link rel="stylesheet" href="http://localhost/Clinica-L8/public/bower_components/fullcalendar/dist/fullcalendar.min.css">
  <link rel="stylesheet" href="http://localhost/Clinica-L8/public/bower_components/fullcalendar/dist/fullcalendar.print.min.css" media="print">
  <!-- Select 2 -->
  <link rel="stylesheet" href="http://localhost/Clinica-L8/public/bower_components/select2/dist/css/select2.min.css">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini" style="background-color:#f2f2f2;">

@if(Auth::user())
<div class="wrapper">
  @include('modulos.cabecera')
      @if(auth()->user()->rol == "Secretaria")
          @include('modulos.menuSecretaria')
      @elseif(auth()->user()->rol == "Doctor")
          @include('modulos.menuDoctor')
      @elseif(auth()->user()->rol == "Paciente")
          @include('modulos.menuPaciente')
      @else
          @include('modulos.menuAdministrador')
      @endif
  @yield('content')
</div>

@else
  @yield('contenido')
@endif
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="http://localhost/Clinica-L8/public/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="http://localhost/Clinica-L8/public/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="http://localhost/Clinica-L8/public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="http://localhost/Clinica-L8/public/bower_components/raphael/raphael.min.js"></script>
<script src="http://localhost/Clinica-L8/public/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="http://localhost/Clinica-L8/public/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jQuery Knob Chart -->
<script src="http://localhost/Clinica-L8/public/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="http://localhost/Clinica-L8/public/bower_components/moment/min/moment.min.js"></script>
<script src="http://localhost/Clinica-L8/public/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="http://localhost/Clinica-L8/public/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Slimscroll -->
<script src="http://localhost/Clinica-L8/public/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="http://localhost/Clinica-L8/public/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="http://localhost/Clinica-L8/public/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="http://localhost/Clinica-L8/public/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="http://localhost/Clinica-L8/public/dist/js/demo.js"></script>
<!-- DataTables -->
<script src="http://localhost/Clinica-L8/public/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="http://localhost/Clinica-L8/public/bower_components/datatables.net-bs/js/dataTables.responsive.min.js"></script>
<script src="http://localhost/Clinica-L8/public/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- FullCalendar -->
<script src="http://localhost/Clinica-L8/public/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
<script src="http://localhost/Clinica-L8/public/bower_components/fullcalendar/dist/locale/es.js"></script>
<script src="http://localhost/Clinica-L8/public/bower_components/moment/moment.js"></script>
<!-- Select2 -->
<script src="http://localhost/Clinica-L8/public/bower_components/select2/dist/js/select2.js"></script>

  <script>
      $(".table").DataTable({
          "language":{
              "sSearch": "Buscar:",
              "sEmptyTable": "No hay datos en la tabla",
              "sZeroRecords": "No se encontraron resultados",
              "sInfo": "Mostrar registros del  _START_ al _END_ de un total _TOTAL_",
              "sInfoEmpty": "Mostrar registros del  0 al 0 de un total de 0",
              "sInfoFiltered": "(filtrando de un total de _MAX_registros)",
              "oPaginate":{
                  "sFirst": "Primero",
                  "sLast": "Ultimo",
                  "sNext": "Siguiente",
                  "sPrevious": "Anterior",
              },
              "sLoadingRecords": "Cargando...",
              "sLengthMenu": "Mostrar  _MENU_ registros"
          }
      });

    $('#select2').select2();
  </script>


<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if(session('registrado') == 'Si')
    <script>
      Swal.fire(
                    'Doct@r agregado Correctamente',
                    ' ',
                    'success'
                  )
    </script>
@elseif(session('actualizadoD') == 'Si')
   <script>
      Swal.fire(
                    'El Doctor ha sido Actualizado Correctamente',
                    ' ',
                    'success'
                  )
    </script>
@elseif(session('Eliminado') == 'Si')
   <script>
      Swal.fire(
                    'El Doctor ha sido Eliminado Correctamente',
                    ' ',
                    'success'
                  )
    </script>
@elseif(session('Agregado') == 'Si')
   <script>
      Swal.fire(
                    'El Paciente ha sido Agregado',
                    ' ',
                    'success'
                  )
    </script>
@elseif(session('actualizadoP') == 'Si')
   <script>
      Swal.fire(
                    'El Paciente ha sido Actualizado',
                    ' ',
                    'success'
                  )
    </script>
@elseif(session('elimadoP') == 'ok')
   <script>
      Swal.fire(
                    'El Paciente ha sido Eliminado Correctamente',
                    ' ',
                    'success'
                  )
    </script>
@elseif(session('Registrado') == 'Si')
   <script>
      Swal.fire(
                    'La Cita  ha sido Registrada',
                    ' ',
                    'success'
                  )
    </script>
@elseif(session('Cancelar') == 'No')
   <script>
      Swal.fire(
                    'La Cita  ha sido Cancelada Correctamente',
                    ' ',
                    'success'
                  )
    </script>
@elseif(session('SecretariaCreada') == 'Si')
   <script>
      Swal.fire(
                    'La Secretaria ha sido Creada Correctamente',
                    ' ',
                    'success'
                  )
    </script>
@elseif(session('actualizadoS') == 'Si')
   <script>
      Swal.fire(
                    'La Secretaria ha sido Actualizada Correctamente',
                    ' ',
                    'success'
                  )
    </script>
@elseif(session('SecretariaEliminada') == 'Si')
   <script>
      Swal.fire(
                    'La Secretaria ha sido Eliminada Correctamente',
                    ' ',
                    'success'
                  )
    </script>
@elseif(session('Inicio') )
   <script>
      Swal.fire({
  title: 'Auto close alert!',
  html: 'I will close in <b></b> milliseconds.',
  timer: 2000,
  timerProgressBar: true,
  didOpen: () => {
    Swal.showLoading()
    const b = Swal.getHtmlContainer().querySelector('b')
    timerInterval = setInterval(() => {
      b.textContent = Swal.getTimerLeft()
    }, 100)
  },
  willClose: () => {
    clearInterval(timerInterval)
  }
}).then((result) => {
  /* Read more about handling dismissals below */
  if (result.dismiss === Swal.DismissReason.timer) {
    console.log('I was closed by the timer')
  }
})
    </script>
@endif

<script >
  $('.table').on('click', '.EliminarDoctor',function(){
    var Did = $(this).attr('Did');
       Swal.fire({
            title: '¿Desea Eliminar este Doctor?',
            icon: 'warning',
            showCancelButton: true,
            cancelButtonText: 'Cancelar',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Eliminar',
            confirmButtonColor: '#3085d6'
          }).then((result) => {
            if(result.isConfirmed){
                window.location = "Eliminar-Doctor/"+Did;
            }
       })
  })
</script>

<script >
  $('.table').on('click', '.EliminarPaciente',function(){
    var Pid = $(this).attr('Pid');
    var Paciente = $(this).attr('Paciente');
       Swal.fire({
            title: '¿Desea Eliminar este Paciente:'+Paciente+'?',
            icon: 'warning',
            showCancelButton: true,
            cancelButtonText: 'Cancelar',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Eliminar',
            confirmButtonColor: '#3085d6'
          }).then((result) => {
            if(result.isConfirmed){
                window.location = "Eliminar-Paciente/"+Pid;
            }
       })
  })
</script>

<script >
  $('.table').on('click', '.EliminarSecretaria',function(){
    var Sid = $(this).attr('Sid');
       Swal.fire({
            title: '¿Desea Eliminar esta Secretaria',
            icon: 'warning',
            showCancelButton: true,
            cancelButtonText: 'Cancelar',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Eliminar',
            confirmButtonColor: '#3085d6'
          }).then((result) => {
            if(result.isConfirmed){
                window.location = "Eliminar-Secretaria/"+Sid;
            }
       })
  })
</script>

<?php
  $exp = explode("/", $_SERVER["REQUEST_URI"]);
?>

@if($exp[3] == "Citas")
<script type="text/javascript">
    var date = new Date();
    var d = date.getDate(),
          d = date.getMonth(),
          d = date.getFullYear()
    $('#calendario').fullCalendar({
      defaultView: 'agendaWeek',
      hiddenDays : [0,6],

      //para mostrar las citas
      events:[
        @foreach($citas as $cita)
          @if(auth()->user()->rol == "Doctor")
            {
              id: '{{$cita->id}}',
              title: '{{$cita->PAC->name}}',
              start: '{{$cita->FyHinicio}}',
              end: '{{$cita->FyHfinal}}'
            },
          @elseif(auth()->user()->rol == "Paciente")
            @if($cita->id_paciente == auth()->user()->id)
              {
                id: '{{$cita->id}}',
                title: '{{$cita->PAC->name}}',
                start: '{{$cita->FyHinicio}}',
                end: '{{$cita->FyHfinal}}'
              },
            @else
            {
              id: '{{$cita->id}}',
              title: 'Ocupado',
              start: '{{$cita->FyHinicio}}',
              end: '{{$cita->FyHfinal}}'
            },
            @endif
          @endif
        @endforeach
      ],

      @if($horarios != null)
        scrollTime: "{{$hora->horaInicio}}",
        minTime: "{{$hora->horaInicio}}",
        maxTime: "{{$hora->horaFin}}",
      @else
        scrollTime: null,
        minTime: null,
        maxTime: null,
      @endif

      dayClick:function(date,jsEvent,view){

        var fecha = date.format();
        var hora = ("01:00:00").split(":");
        fecha = fecha.split("T");
        var hora1 = (fecha[1]).split(":");
        HI = parseFloat(hora1[0]);
        HA = parseFloat(hora[0]);
        var horaFinal = HI + HA;

        if(horaFinal < 10 && horaFinal >0){
          var HF = "0"+horaFinal+":00:00";
        }else{
          var HF = horaFinal+":00:00";
        }

        n = new Date();
        y  = n.getFullYear();
        m = n.getMonth() + 1;
        d  = n.getDate();

        if(m < 10){
              M = "0"+m;
              if (d < 10) {
                D = "0"+d;
                diaActual = y +"-"+M+"-"+D;
              }else{
                diaActual = y +"-"+M+"-"+d;
              }
        }else{
          diaActual = y +"-"+m+"-"+d;
        }

        if(diaActual <= fecha[0]){
          if ("{{auth()->user()->rol}}" == "Doctor") {
            $('#CitaModal').modal();
          }else if("{{auth()->user()->rol}}" == "Paciente"){
            $('#Cita').modal();
          }
        }

        $('#Fecha').val(fecha[0]);
        $('#Hora').val(hora1[0]+":00:00");
        $('#FyHinicio').val(fecha[0]+" "+hora1[0]+":00:00");
        $('#FyHfinal').val(fecha[0]+" "+HF);

        $('#FechaP').val(fecha[0]);
        $('#HoraP').val(hora1[0]+":00:00");
        $('#FyHinicioP').val(fecha[0]+" "+hora1[0]+":00:00");
        $('#FyHfinalP').val(fecha[0]+" "+HF);

      },

      eventClick:function(calEvent,jsEvent, view){
        if("{{auth()->user()->rol}}" == "Doctor" ){
            $('#EventModal').modal();
        }

        $('#paciente').html(calEvent.title);
        $('#idCita').val(calEvent.id);
        $('#texta').val(calEvent.id);
      }

    });
</script>
@endif

</body>
</html>
