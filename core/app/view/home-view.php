<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5e0e298627773e0d832b90ea/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<?php

	
function contar_citas (){
    include 'core/app/view/conexion.php';
$query = "SELECT count(*) as total from reservation ";
if ($result = mysqli_query($conexion, $query)) {

    $data=mysqli_fetch_assoc($result);

    echo $data['total'];

}
}
function contar_pacientes (){
    include 'core/app/view/conexion.php';
$query1 = "SELECT count(*) as total from pacient ";
if ($result = mysqli_query($conexion, $query1)) {

    $data=mysqli_fetch_assoc($result);

    echo $data['total'];

}
}
function contar_medicos (){
    include 'core/app/view/conexion.php';
$query2 = "SELECT count(*) as total from medic ";
if ($result = mysqli_query($conexion, $query2)) {

    $data=mysqli_fetch_assoc($result);

    echo $data['total'];

}
}
function contar_areas (){
    include 'core/app/view/conexion.php';
$query3 = "SELECT count(*) as total from category ";
if ($result = mysqli_query($conexion, $query3)) {

    $data=mysqli_fetch_assoc($result);

    echo $data['total'];

}
}

?>
<?php



$thejson=null;
$events = ReservationData::getEvery();
$medics = MedicData::getEvery(); 
$pacients = PacientData::getAll(); 
$categories = CategoryData::getAll(); 

    
   foreach($events as $event){
   $medic = $event->getMedic();
   $pacient = $event->getPacient();
   $Category = $event->getCategory();
   
	$thejson[] = array("title"=>"Medico:"."Dr.".$medic->nameDoc." ".$medic->lastnameDoc."\n "."Paciente:".$pacient->name." ".$pacient->lastname."\n"."Area:".$Category->name ,"url"=>"./?view=editreservacion&id=".$event->id,"start"=>$event->date_at."T".$event->time_at);
} 
   
    
    
    

?>
<table class="table table-bordered table-responsive" style=" border: none; background-color: white">
			<thead style=" border: none">
                        <th style=" border: none"></th>    
                        <th style=" border: none">Nº DE CITAS REGISTRADAS</th>
			<th style=" border: none"></th>
                        <th style=" border: none">Nº PACIENTES REGISTRADOS</th>
                        <th style=" border: none"></th>
                        <th style=" border: none">Nº MEDICOS </th>
                        <th style=" border: none"></th>
                        <th style=" border: none">AREAS ESPECIALIDADES</th>
                        
							   
                        
			</thead>
			
				<tr>
                                
                                    <td style="
                                        height: auto;
                                        width: 150px;
                                       border: none;
                                    "><img src="assets/citas.jpg" style="
                                            width: 100px;
                                            height: 100px;
                                              border: none;
                                        "></td>
				<td style=" border: none; font-size: -webkit-xxx-large;"><?php contar_citas() ?></td>
				<td style="
                                        height: auto;
                                        width: 150px;
                                          border: none;
                                    "><img src="assets/pacients.png" style="
                                            width: 110px;
                                            height: 110px;
                                              border: none;
                                        "></td>
				<td style=" border: none; font-size: -webkit-xxx-large;"><?php contar_pacientes() ?></td>
				<td style="
                                        height: auto;
                                        width: 150px;
                                          border: none;
                                    "><img src="assets/medics.jpg" style="
                                            width: 100px;
                                            height: 100px;
                                              border: none;
                                        "></td>
                                <td style=" border: none; font-size: -webkit-xxx-large;"><?php contar_medicos()?></td>
                                <td style="
                                        height: auto;
                                        width: 150px;
                                          border: none;
                                    "><img src="assets/area.png" style="
                                            width: 100px;
                                            height: 100px;
                                              border: none; 
                                        "></td>
                                <td style=" border: none; font-size: -webkit-xxx-large;"><?php contar_areas()?></td>
				</tr>
				

			
			
			</table>


<div class="row">
<div class="col-md-12">
<div class="card">
  <div class="card-header" data-background-color="blue">
      <h4 class="title">Calendario de Citas</h4>
  </div>
  <div class="card-content table-responsive">
<div id="calendar"></div>

</div>
</div>
</div>
</div>



<!--<script>

  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      plugins: [ 'interaction', 'dayGrid', 'timeGrid', 'list' ],
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
      },
      defaultDate: '2019-10-03',
      navLinks: true, // can click day/week names to navigate views
      businessHours: true, // display business hours
      editable: true,
      events: [
        {
          title: 'Business Lunch',
          start: '2019-08-03T13:00:00',
          constraint: 'businessHours'
        },
        {
          title: 'Meeting',
          start: '2019-08-13T11:00:00',
          constraint: 'availableForMeeting', // defined below
          color: '#257e4a'
        },
        {
          title: 'Conference',
          start: '2019-08-18',
          end: '2019-08-20'
        },
        {
          title: 'Party',
          start: '2019-08-29T20:00:00'
        },

        // areas where "Meeting" must be dropped
        {
          groupId: 'availableForMeeting',
          start: '2019-08-11T10:00:00',
          end: '2019-08-11T16:00:00',
          rendering: 'background'
        },
        {
          groupId: 'availableForMeeting',
          start: '2019-08-13T10:00:00',
          end: '2019-08-13T16:00:00',
          rendering: 'background'
        },

        // red areas where no events can be dropped
        {
          start: '2019-08-24',
          end: '2019-08-28',
          overlap: false,
          rendering: 'background',
          color: '#ff9f89'
        },
        {
          start: '2019-08-06',
          end: '2019-08-08',
          overlap: false,
          rendering: 'background',
          color: '#ff9f89'
        }
      ]
    });

    calendar.render();
  });

</script>-->
<script>
	$(document).ready(function() {

		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next, today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			defaultDate: '<?php echo date('Y-m-d');?>',
			editable: false,
			eventLimit: true, // allow "more" link when too many events
			events: <?php echo json_encode($thejson); ?>
		});
		
	});

</script>

<style>

  body {
    margin: 60px 10px;
    padding: 0;
    font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
    font-size: 14px;
  }

  #calendar {
    max-width: 900px;
    margin: 0 auto;
  }

</style>





