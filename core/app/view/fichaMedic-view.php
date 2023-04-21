<link rel="stylesheet" type="text/css" href="assets/select2/select2.min.css">
<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
  <script src="assets/select2/select2.min.js"></script>
<div class="row">
	<div class="col-md-12">
<div class="btn-group pull-right">

</div>
<div class="card">
  <div class="card-header" data-background-color="blue">
      <h4 class="title">Historiales Clinicos</h4>
  </div>
    <div class="card-content table-responsive">
        <a href="index.php?view=nuevafichaMedic" class="btn btn-default"><i class='fa fa-male'></i> Nueva Ficha Medica</a>
    <form class="form-horizontal" role="form">
<input type="hidden" name="view" value="fichaMedic">
        <?php
$users = FichaData::getAll();
$medics = MedicData::getAll();
$pacients = PacientData::getAll();
        ?>

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
$sql = "select * from fichamedic where ";
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

		$users = FichaData::getBySQL($sql);
                
}else{
		$users = FichaData::getAll();
                    
               
}

        if(count($users)>0){
			// si hay usuarios
			?>

			<table class="table table-bordered table-hover">
			<thead class="card-header" data-background-color="blue">
<!--                        <th>Cedula</th>-->
			<th>Paciente</th>
			<th>Especialista</th>
			<th>Motivo de la consulta</th>
                        <th>Fecha de creación</th>
                        <th>Tratamiento</th>
			<th>Acciones</th>
			</thead>
			<?php
			foreach($users as $user){
                                $medic = $user->getMedic();
                               
				?>
				<tr>
<!--                                <td><?php // echo $user->dni; ?></td>    -->
                                    <td><?php if($user->pacient_id!=null){ echo $user->getPacient()->name." ";  echo $user->getPacient()->lastname; } ?></td>
                                    <td><?php if($user->medic_id!=null){ echo $user->getMedic()->nameDoc." ";  echo $user->getMedic()->lastnameDoc; } ?></td>
                                    <td><?php echo $user->mot_consult; ?></td>
                                    <td><?php echo $user->date_at; ?></td>
                                    <td><?php echo $user->tratamient; ?></td>

			
				<td style="width:280px;">
				<a href="index.php?view=historialCli&id=<?php echo $user->id;?>" class="btn btn-default btn-xs">Historial</a>
				<a href="index.php?view=editfichaMedic&id=<?php echo $user->id;?>" class="btn btn-warning btn-xs">Editar</a>
				<a href="index.php?view=delfichaMedic&id=<?php echo $user->id;?>" class="btn btn-danger btn-xs">Eliminar</a>
				</td>
				</tr>
				<?php

			}
			?>
			</table>
			</div>
			</div>
			<?php



		}else{
			echo "<p class='alert alert-danger'>El Paciente no tiene agendada una Ficha Medica</p>";
		}

    ?>
        </div>
</div>
    
    
    
    
    
  <script type="text/javascript">
	$(document).ready(function(){
		$('#controlBuscador').select2();
                $('#controlBuscador1').select2();
                
                
	});
</script>
	