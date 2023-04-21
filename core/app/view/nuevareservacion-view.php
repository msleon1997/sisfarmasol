<?php
$pacients = PacientData::getAll();
$medics = MedicData::getAll();
$statuses = StatusData::getAll();
$category = CategoryData::getAll();
$reservation = ReservationData::getAll();
//$payments = PaymentData::getAll();
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
      <h4 class="title">Nueva Cita</h4>
  </div>

<div class="card-content table-responsive">

<form class="form-horizontal" role="form" method="post" action="./?action=añadirreservacion">
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label"></label>
    <div class="col-lg-8">
      <input type="text" name="title" required class="form-control" id="inputEmail1" placeholder="Asunto">
    </div>
  </div>
  <div class="form-group">
      <label for="inputEmail1" class="col-lg-2 control-label"><h5>Paciente</h5></label>
    <div class="col-lg-2">
<select id="controlBuscador" name="pacient_id" class="form-control" required style="width: 150%">
  <option value="">
    -- SELECCIONE --
</option>
  <?php foreach($pacients as $p):?>
    <option value="<?php echo $p->id; ?>"><?php echo $p->name." ".$p->lastname; ?></option>
  <?php endforeach; ?>
</select>
    </div>
    
    
    <label for="inputEmail1" class="col-lg-2 control-label"><h5>Medico</h5></label>
    <div class="col-lg-2">
<select id="controlBuscador1" name="medic_id" class="form-control" required>
<option value="">
    -- SELECCIONE --
</option>

  <?php foreach($medics as $p):?>

    <option value="<?php echo $p->id; ?>"><?php echo $p->nameDoc." ".$p->lastnameDoc ?></option>
  <?php endforeach; ?>
 
</select>
    </div>
  <label for="inputEmail1" class="col-lg-2 control-label"><h5>Area de Especialidad</h5></label>
    <div class="col-lg-2">
<select name="category" class="form-control" required>
<option value="">
    -- SELECCIONE --
</option>

  <?php foreach($category as $a):?>
     <option value="<?php echo $a->id; ?>"><?php echo $a->name ?></option>
    <?php endforeach; ?>
     
</select>
    </div>
  </div>
  
    
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label"><h5>Fecha/Hora</h5></label>
    <div class="col-lg-2">
      <input type="date" name="date_at" required class="form-control" id="inputEmail1" placeholder="Fecha">
    </div>
    
    <label for="inputEmail1" class="col-lg-2 control-label"><h5>Ver horario</h5></label>
        <div class="col-lg-2">
       
        <select id="controlBuscador1" class="form-control" >
        <option value="">
            -- Ver --
        </option>

  <?php foreach($reservation as $p):?>

        <option disabled="" value="<?php echo $p->id; ?>"><?php echo $p->time_at. " OCUPADO " ?>
        
    </option>
    
  <?php endforeach; ?>
 
</select>
    </div>
  
  <label for="inputEmail1" class="col-lg-1 control-label"><h5>Hora</h5></label>
    <div class="col-lg-2"> 
     <input type="time" required="" name="time_at" class="form-control" id="inputEmail1">
    </div>
  
  
  </div> 
    
    
       
   
    
 
 <!--  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label"></label>
    <div class="col-lg-8">
    <textarea class="form-control" name="note" placeholder="Notificación"></textarea>
    </div>
  </div>
    <div class="form-group">
        <label for="inputEmail1" class="col-lg-2 control-label"><h5>Enfermedad</h5></label>
    <div class="col-lg-8">
        <select id="controlBuscador2" name="sick" class="form-control" required>
<option value="">-- SELECCIONE --</option>
  <?php foreach($pacients as $p):?>
    <option value="<?php echo $p->id; ?>"><?php echo $p->sick; ?></option>
  <?php endforeach; ?>
</select>
    </div>
  </div>
      <div class="form-group">
          <label for="inputEmail1" class="col-lg-2 control-label"><h5>Sintomas</h5></label>
    <div class="col-lg-8">
    <textarea class="form-control" name="symtoms"></textarea>
    </div>
  </div>
        <div class="form-group">
            <label for="inputEmail1" class="col-lg-2 control-label"><h5>Medicamentos</h5></label>
    <div class="col-lg-3">
        <select id="controlBuscador3" name="medicaments" class="form-control" required>
    <option value="" >-- SELECCIONE --</option>
  <?php foreach($pacients as $p):?>
    <option value="<?php echo $p->id; ?>"><?php echo $p->medicaments; ?></option>
  <?php endforeach; ?>
</select>
    </div> -->
  
  
   <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label"><h5>Estado de la cita</h5></label>
    <div class="col-lg-3">
<select name="status_id" class="form-control" required>
  <?php foreach($statuses as $p):?>
    <option value="<?php echo $p->id; ?>"><?php echo $p->name; ?></option>
  <?php endforeach; ?>
</select>
    </div>
  
  </div>
</div>



 
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary">Agregar Cita</button>
    </div>
  </div>
</form>


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