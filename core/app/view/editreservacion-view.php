<?php 
$reservation = ReservationData::getById($_GET["id"]);
$pacients = PacientData::getAll();
$medics = MedicData::getAll();
$categories = CategoryData::getAll(); 
$statuses = StatusData::getAll();

?>
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
      <h4 class="title">Modificar Cita</h4>
  </div>
  <div class="card-content table-responsive">
<form class="form-horizontal" role="form" method="post" action="./?action=updatereservacion">
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Asunto</label>
    <div class="col-lg-10">
      <input type="text" name="title" value="<?php echo $reservation->title; ?>" required class="form-control" id="inputEmail1" placeholder="Asunto">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Paciente</label>
    <div class="col-lg-4">
        <select id="controlBuscador" name="pacient_id" class="form-control" required>
<option value="">-- SELECCIONE --</option>
  <?php foreach($pacients as $p):?>
    <option value="<?php echo $p->id; ?>" <?php if($p->id==$reservation->pacient_id){ echo "selected"; }?>><?php echo $p->name." ".$p->lastname; ?></option>
  <?php endforeach; ?>
</select>
    </div>
    <label for="inputEmail1" class="col-lg-2 control-label">Medico</label>
    <div class="col-lg-4">
<select name="medic_id" class="form-control" required>
<option value="">-- SELECCIONE --</option>
  <?php foreach($medics as $p):?>
    <option value="<?php echo $p->id; ?>" <?php if($p->id==$reservation->medic_id){ echo "selected"; }?>><?php echo $p->nameDoc." ".$p->lastnameDoc; ?></option>
  <?php endforeach; ?>
</select>
    </div>
     <label for="inputEmail1" class="col-lg-2 control-label"><h5>Area de Especialidad</h5></label>
    <div class="col-lg-2">
<select name="category" class="form-control" required>
<option value="">-- SELECCIONE --</option>

  <?php foreach($categories as $p):?>
<option value="<?php echo $p->id; ?>" <?php if($p->id==$reservation->category){ echo "selected"; }?>><?php echo $p->name ?></option>
    <?php endforeach; ?>
     
</select>
    </div>

  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Fecha/Hora</label>
    <div class="col-lg-5">
      <input type="date" name="date_at" value="<?php echo $reservation->date_at; ?>" required class="form-control" id="inputEmail1" placeholder="Fecha">
    </div>
    <div class="col-lg-5">
      <input type="time" name="time_at" value="<?php echo $reservation->time_at; ?>" required class="form-control" id="inputEmail1" placeholder="Hora">
    </div>
  </div>
  <div class="form-group">
    
    <!-- <label for="inputEmail1" class="col-lg-2 control-label">Nota</label>
    <div class="col-lg-4">
    <textarea class="form-control" name="note" placeholder="Nota"><?php echo $reservation->note;?></textarea>
    </div>
    <label for="inputEmail1" class="col-lg-2 control-label">Enfermedad</label>
    <div class="col-lg-4">
        <select id="controlBuscador1" name="sick" class="form-control" required>
<option value="">-- SELECCIONE --</option>
  <?php foreach($pacients as $p):?>
    <option value="<?php echo $p->id; ?>" <?php if($p->id==$reservation->sick){ echo "selected"; }?>><?php echo $p->sick; ?></option>
  <?php endforeach; ?>
</select>
    </div>

  </div>

      <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Sintomas</label>
    <div class="col-lg-4">
    <textarea class="form-control" name="symtoms" placeholder="Sintomas"><?php echo $reservation->symtoms;?></textarea>
    </div>
    <label for="inputEmail1" class="col-lg-2 control-label">Medicamentos</label>
    <div class="col-lg-4">
        <select id="controlBuscador2" name="medicaments" class="form-control" required>
<option value="">-- SELECCIONE --</option>
  <?php foreach($pacients as $p):?>
    <option value="<?php echo $p->id; ?>" <?php if($p->id==$reservation->medicaments){ echo "selected"; }?>><?php echo $p->medicaments; ?></option>
  <?php endforeach; ?>
</select>
    </div> -->

  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Estado de la cita</label>
    <div class="col-lg-4">
<select name="status_id" class="form-control" required>
  <?php foreach($statuses as $p):?>
    <option value="<?php echo $p->id; ?>" <?php if($p->id==$reservation->status_id){ echo "selected"; }?>><?php echo $p->name; ?></option>
  <?php endforeach; ?>
</select>
    </div>
   
  </div>
  <div class="form-group">

  </div>

    

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
    <input type="hidden" name="id" value="<?php echo $reservation->id; ?>">
      <button type="submit" class="btn btn-default">Actualizar Cita</button>
    </div>
  </div>
</form>
</div>
</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('#controlBuscador').select2();
                $('#controlBuscador1').select2();
                $('#controlBuscador2').select2();
                $('#controlBuscador3').select2();
                
	});
</script>