<link rel="stylesheet" type="text/css" href="assets/select2/select2.min.css">
<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
  <script src="assets/select2/select2.min.js"></script>
  
<div class="row">
	<div class="col-md-12">
             <div class="card">
      <div class="card-header" data-background-color="blue">
      <h4 class="title">Citas Anteriores</h4>
  </div>
                       <?php
                    $users = ReservationData::getAll();
                    $medics = MedicData::getAll();
                    $pacients = PacientData::getAll();
                            ?>
<div class="card-content table-responsive">
		
<br>
	
                <form class="form-horizontal" role="form">
<input type="hidden" name="view" value="reservacionesanteriores">
       

  <div class="form-group">
    <div class="">
		<div class="input-group">
		  <span class="input-group-addon"></span>
                  <input type="hidden" name="q" value="<?php if(isset($_GET["q"]) && $_GET["q"]!=""){ echo $_GET["q"]; } ?>" class="form-control" placeholder="Palabra clave">
		</div>
    </div>
     <div class="col-lg-3">
		<div class="input-group">
		  <span class="input-group-addon"><i class="fa fa-user"></i></span>
<select id="controlBuscador" name="pacient_id" class="form-control">
    <option value="">PACIENTE</option>
  <?php foreach($pacients as $p):?>
    <option value="<?php echo $p->id; ?>" <?php if(isset($_GET["pacient_id"]) && $_GET["pacient_id"]==$p->id){ echo "selected"; } ?>><?php echo $p->name." ".$p->lastname; ?></option>
  <?php endforeach; ?>
</select>
		</div>
    </div>
    <div class="col-lg-3">
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
        <button class="btn btn-primary btn-block">Buscar</button>
    </div>

  </div>
</form>
    
    <?php
    $users= array();
if((isset($_GET["q"]) && isset($_GET["pacient_id"]) && isset($_GET["medic_id"]) && isset($_GET["date_at"])) && ($_GET["q"]!="" || $_GET["pacient_id"]!="" || $_GET["medic_id"]!="" || $_GET["date_at"]!="") ) {
$sql = "select * from reservation where ";
if($_GET["q"]!=""){
	$sql .= " title like '%$_GET[q]%' and note like '%$_GET[q] %' ";
}

if($_GET["pacient_id"]!=""){
if($_GET["q"]!=""){
	$sql .= " and ";
}
	$sql .= " pacient_id = ".$_GET["pacient_id"];
}

if($_GET["medic_id"]!=""){
if($_GET["q"]!=""||$_GET["pacient_id"]!=""){
	$sql .= " and ";
}

	$sql .= " medic_id = ".$_GET["medic_id"];
}





if($_GET["date_at"]!=""){
if($_GET["q"]!=""||$_GET["pacient_id"]!="" ||$_GET["medic_id"]!="" ){
	$sql .= " and ";
}

	$sql .= " date_at = \"".$_GET["date_at"]."\"";
}

		$users = ReservationData::getBySQL($sql);
                
}else{
		
                    $users = ReservationData::getOld();
               
}

		
		if(count($users)>0){
			// si hay usuarios
			?>

			<table class="table table-bordered table-responsive">
			<thead class="card-header" data-background-color="blue">
			<th>Asunto</th>
			<th>Paciente</th>
			<th>Medico</th>
			<th>Fecha</th>
			<th>Acciones</th>
			</thead>
                        
			<?php
			foreach($users as $user){
				$pacient  = $user->getPacient();
				$medic = $user->getMedic();
				?>
				<tr>
				<td><?php echo $user->title; ?></td>
				<td><?php echo $pacient->name." ".$pacient->lastname; ?></td>
				<td><?php echo $medic->nameDoc." ".$medic->lastnameDoc; ?></td>
				<td><?php echo $user->date_at." ".$user->time_at; ?></td>
				<td style="width:130px;">
				<a href="index.php?view=editreservacion&id=<?php echo $user->id;?>" class="btn btn-warning btn-xs">Editar</a>
				<a href="index.php?action=delreservacion&id=<?php echo $user->id;?>" class="btn btn-danger btn-xs">Eliminar</a>
				</td>
				</tr>
                        
				<?php

			}



		}else{
			echo "<p class='alert alert-danger'>No hay pacientes</p>";
		}


		?>
</table>

	</div>
             </div>
        </div>
</div>
  <script type="text/javascript">
	$(document).ready(function(){
		$('#controlBuscador').select2();
                $('#controlBuscador1').select2();
                
                
	});
</script>
	