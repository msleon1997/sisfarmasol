<link rel="stylesheet" type="text/css" href="assets/select2/select2.min.css">
<!--<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>-->
  <script src="assets/select2/select2.min.js"></script>

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

<table class="table table-bordered table-responsive" style=" border: none; background-color: white">
			<thead style=" border: none">
                        <th style=" border: none"></th>    
                        <th style=" border: none">Nº DE CITAS REGISTRADAS DE HOY</th>
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
    
 <form class="form-horizontal" role="form">
<input type="hidden" name="view" value="homeDoc">
        <?php
$users = FichaData::getAll();
$medics = MedicData::getAll();
$pacients = PacientData::getAll();
        ?>

  <div class="card">
      <div style="margin-left: 10%;">
    <div>
		<div class="input-group">
		  <span class="input-group-addon"></span>
                  <input type="hidden" name="q" value="<?php if(isset($_GET["q"]) && $_GET["q"]!=""){ echo $_GET["q"]; } ?>" class="form-control" placeholder="Palabra clave">
		</div>
    </div>
     
    <div class="col-lg-4">
		<div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-support"></i></span>
                    <select id="controlBuscador1" name="medic_id" class="form-control">
                    <option value="">MEDICO</option>
                      <?php foreach($medics as $p):?>
                        <option value="<?php echo $p->id; ?>" <?php if(isset($_GET["medic_id"]) && $_GET["medic_id"]==$p->id){ echo "selected"; } ?>><?php echo $p->nameDoc." ".$p->lastnameDoc; ?></option>
                      <?php endforeach; ?>
                    </select>
		</div>
    </div>
    <div class="col-lg-4">
		<div class="input-group">
		  <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
		  <input type="date" name="date_at" value="<?php if(isset($_GET["date_at"]) && $_GET["date_at"]!=""){ echo $_GET["date_at"]; } ?>" class="form-control" placeholder="Palabra clave">
		</div>
    </div>

    <div class="col-lg-2">
        <button class="btn btn-primary openBtn" style=" margin-left: 100px; margin-top: 20px;">Buscar</button>
    </div>
      </div>
  </div>
</form>

    <?php
    $users= array();
if((isset($_GET["q"]) && isset($_GET["medic_id"]) && isset($_GET["date_at"])) && ($_GET["q"]!="" || $_GET["medic_id"]!="" || $_GET["date_at"]!="") ) {
$sql = "select * from reservation where ";
if($_GET["q"]!=""){
	$sql .= " title like '%$_GET[q]%' and note like '%$_GET[q] %' ";
}



if($_GET["medic_id"]!=""){
if($_GET["q"]!=""){
	$sql .= " and ";
}

	$sql .= " medic_id = ".$_GET["medic_id"];
}





if($_GET["date_at"]!=""){
if($_GET["q"]!=""||$_GET["medic_id"]!="" ){
	$sql .= " and ";
}

	$sql .= " date_at = \"".$_GET["date_at"]."\"";
}

		$users = ReservationData::getBySQL($sql);
                
}else{
		$users = ReservationData::getAll();
                    
               
}

        if(count($users)>0){
			// si hay usuarios
			?>
			<center>

			<table class="table table-bordered table-hover" style="width: 900px; margin-left: 18px; ">
                            <thead class="card-header" data-background-color="blue">
<!--                        <th>Cedula</th>-->
			<th>Paciente</th>
			<th>Especialista</th>
			
                        <th>Fecha y hora Cita</th>
                        
			</thead>
			<?php
			foreach($users as $user){
                                $medic = $user->getMedic();
                               
				?>
				<tr>
<!--                                <td><?php // echo $user->dni; ?></td>    -->
                                    <td><?php if($user->pacient_id!=null){ echo $user->getPacient()->name." ";  echo $user->getPacient()->lastname; } ?></td>
                                <td><?php if($user->medic_id!=null){ echo $user->getMedic()->nameDoc." ";  echo $user->getMedic()->lastnameDoc; } ?></td>
				
                                <td><?php echo $user->date_at." \n".$user->time_at; ?></td>
                               
				
			
				
				</tr>
				<?php

			}
			?>
			</table>
			</center>
			<?php



		}else{
			//echo "<p class='alert alert-danger'>El Paciente no tiene agendada una Ficha</p>";
		}

    ?>

    
   <?php



$thejson=null;
$events = ReservationData::getEvery();
$medics = MedicData::getEvery(); 
$pacients = PacientData::getAll(); 

    
     foreach($events as $event){
        $medic = $event->getMedic();
        $pacient = $event->getPacient();
	$thejson[] = array("title"=>"Medico:"."Dr.".$medic->nameDoc." ".$medic->lastnameDoc."\n "."Paciente:".$pacient->name." ".$pacient->lastname ,"url"=>"indexDoc.php?view=editreservacionDoc&id=".$event->id,"start"=>$event->date_at."T".$event->time_at);
} 
    
    
    

?>
  
    
    
    
    
    
    
  <div class="card-content table-responsive">
<div id="calendar"></div>

</div>
</div>
</div>
    <br> <br> <br> <br>
</div>



<script>
	$(document).ready(function() {
                
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next, today',
				center: 'title',
				right: 'month,  agendaWeek,agendaDay'
			},
			defaultDate: '<?php echo date('Y-m-d');?>',
			editable: false,
			eventLimit: true, // allow "ver mas" link when too many events
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




