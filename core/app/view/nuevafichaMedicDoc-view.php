<?php 
$pacients = PacientData::getAll();
$medics = MedicData::getAll();
$categorias = CategoryData::getAll();
$ficha = FichaData::getAll();
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
      <h4 class="title">Ficha Medica</h4>
  </div>
  <div class="card-content table-responsive">

		<form class="form-horizontal" method="post" id="addproduct" action="indexDoc.php?view=añadirfichaDoc" role="form">
  <div class="card">
  <div class="form-group">
    <style type="text/css">
        h4.titulo {
                margin-left: 5%;
            }
        </style> <h4 class="titulo">Datos del Paciente</h4>
      
       <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label"><h5>Fecha</h5></label>
    <div class="col-lg-3">
        <input type="date" name="date_at" required class="form-control" id="inputEmail1" placeholder="Fecha" required="">
    </div>
    
  </div>
      <label for="inputEmail1" class="col-lg-2 control-label"><h5>Paciente</h5></label>
    <div class="col-lg-3">
        <select id="controlBuscador" name="pacient_id" class="form-control" required="">
  <option value="" >
-- SELECCIONE --

</option>
  <?php foreach($pacients as $p):?>
    <option value="<?php echo $p->id; ?>"><?php echo $p->name." ".$p->lastname; ?></option>
  <?php endforeach; ?>
</select>
    </div>
  
      
      <label for="inputEmail1" class="col-lg-2 control-label"><h5>Medico</h5></label>
    <div class="col-md-3">
        <select id="controlBuscador1" name="medic_id" class="form-control">
    <option value="">-- SELECCIONE --</option>      
    <?php foreach($medics as $p):?>
    <option value="<?php echo $p->id; ?>"><?php echo $p->nameDoc." ".$p->lastnameDoc; ?></option>      
    <?php endforeach;?>
    </select>
    </div>

    
  
 
  </div>
    <div class="form-group">
<!--    <label for="inputEmail1" class="col-lg-2 control-label"><h5>Edad</h5></label>
    <div class="col-lg-1">
        <input type="number" name="age"  class="form-control" id="age" maxlength="10"> 
    </div>
   -->
<!--    <label for="inputEmail1" class="col-lg-2 control-label"><h5>Cedula</h5></label>
    <div class="col-lg-2">
        <input type="number" name="dni"  class="form-control" id="dni" >
    </div>-->
    
  <label for="inputEmail1" class="col-lg-2 control-label"><h5>Ocupacion</h5></label>
  <div class="col-lg-2">
      <input type="text" name="ocupation"  class="form-control" id="ocupation" required="">
    </div>
    </div>
  <div class="form-group">
  <label for="inputEmail1" class="col-lg-2 control-label"><h5>Sexo</h5></label>
  <div class="col-lg-2">
     
      <select name="sex" class="form-control" required>
  <option value="" >
-- SELECCIONE --
</option>
   <option>Masculino</option>
    <option>Femenino</option>
</select>
    </div>
    
    <label for="art_presion" class="col-lg-2 control-label"><h5>Fecha de Nacimiento</h5></label>
    <div class="col-lg-2">
     <input type="date" name="date_born" required class="form-control" id="inputEmail1" placeholder="Fecha">
    </div>
  
    <label for="inputEmail1" class="col-lg-1 control-label"><h5>Nacionalidad</h5></label>
    <div class="col-lg-2">
        <input type="text" name="nacionality" class="form-control" id="nacionality" required="" >
    </div>
  </div>
      <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label"><h5>Estado Civil</h5></label>
    <div class="col-lg-2">
        <input type="text" name="est_civil" class="form-control" id="est_civil" required="" >
    </div>
      </div>
  </div>    
 <br><br> <br> 
 <div class="card">
  <div class="form-group">
     <h4 class="titulo">Motivo de la consulta</h4> 
     <label for="inputEmail1" class="col-lg-2 control-label"></label>
     <div class="col-lg-8">
      
         <input type="text" name="mot_consult" class="form-control" id="mot_consult" placeholder="escriba aqui el motivo" required="">
   
  </div>
  </div>   
 </div>
<br><br> <br> 
<div class="card">
  <div class="form-group">
      <h4 class="titulo">Antecedentes de la enfermedad actual</h4>
    <label for="inputEmail1" class="col-lg-2 control-label"></label>
    <div class="col-lg-8">
        <textarea  name="antecedents" class="form-control" id="antecedents" required=""></textarea>
    </div>
  </div>
</div>
<div class="card">
  <div class="form-group">
      <h4 class="titulo">Antecedentes Heredo-Familiares</h4>
    <label for="inputEmail1" class="col-lg-2 control-label"></label>
    <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label"><h5>Padres</h5></label>
    <div class="col-lg-2">
        <input type="number" name="fathers" class="form-control" id="fathers" placeholder="Nº padres" required="">
    </div>
    <label for="inputEmail1" class="col-lg-2 control-label"><h5>Vivos</h5></label>
    <div class="col-lg-1">
        <input type="number" name="liveP" class="form-control" id="liveP" required="">
    </div>
 
  </div>
    <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label"><h5>Hermanos</h5></label>
    <div class="col-lg-2">
        <input type="number" name="brothers" class="form-control" id="brothers" placeholder="Nº hermanos" required="">
    </div>
    
    <label for="inputEmail1" class="col-lg-2 control-label"><h5>Vivos</h5></label>
    <div class="col-lg-1">
        <input type="number" name="liveH" class="form-control" id="liveH" required="">
    </div>

  </div>
    <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label"><h5>Hijos</h5></label>
    <div class="col-lg-2">
        <input type="number" name="sons" class="form-control" id="sons" placeholder="Nº hijos">
    </div>
    <label for="inputEmail1" class="col-lg-2 control-label"><h5>Vivos</h5></label>
    <div class="col-lg-1">
        <input type="number" name="liveS" class="form-control" id="lives" required="">
    </div>
  </div>
  </div>
     <div class="form-group">
 
    <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label"><h4>DBT</h4></label>
    <label for="inputEmail1" class="col-lg-2 control-label"><h5>Si</h5></label>
    <div class="col-lg-1">
        <input type="radio" name="dbt" class="form-control" id="yes" value="si" required="">
    </div>
    <label for="inputEmail1" class="col-lg-2 control-label"><h5>No</h5></label>
    <div class="col-lg-1">
        <input type="radio" name="dbt" class="form-control" id="no" value="no" required="">
    </div>
 
  </div>
    <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label"><h4>HTA</h4></label>
    <label for="inputEmail1" class="col-lg-2 control-label"><h5>Si</h5></label>
    <div class="col-lg-1">
        <input type="radio" name="hta" class="form-control" id="yes" value="si" required="">
    
    </div>
    
    <label for="inputEmail1" class="col-lg-2 control-label"><h5>No</h5></label>
    <div class="col-lg-1">
        <input type="radio" name="hta" class="form-control" id="no" value="no" required="">
    </div>

  </div>
    <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label"><h5>TBC</h5></label>
    <label for="inputEmail1" class="col-lg-2 control-label"><h5>Si</h5></label>
    <div class="col-lg-1">
        <input type="radio" name="tbc" class="form-control" id="yes" value="si" required="">
    </div>
    <label for="inputEmail1" class="col-lg-2 control-label"><h5>No</h5></label>
    <div class="col-lg-1">
        <input type="radio" name="tbc" class="form-control" id="no" value="no" required="">
    </div>
  </div>
         <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label"><h5>Gamelar</h5></label>
    <label for="inputEmail1" class="col-lg-2 control-label"><h5>Si</h5></label>
    <div class="col-lg-1">
        <input type="radio" name="gamelar" class="form-control" id="yes" value="si" required="">
        
    </div>
    <label for="inputEmail1" class="col-lg-2 control-label"><h5>No</h5></label>
    <div class="col-lg-1">
        <input type="radio" name="gamelar" class="form-control" id="no" value="no" required="">
    </div>
  </div>
   <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label"><h5>Otro</h5></label>
    <div class="col-lg-8">
        <input type="text" name="othersHF" class="form-control" id="othersHF" placeholder="Especifique">
    </div>
    
  </div>     
   
  </div>
</div>
<div class="card">
  <div class="form-group">
      <h4 class="titulo">Antecedentes Personales</h4>
      <br>
    <h4 class="titulo">1).Habitos Tóxicos</h4>
    <label for="inputEmail1" class="col-lg-2 control-label"></label>
    <div class="form-group"><label for="inputEmail1" class="col-lg-2 control-label"><h5>Alcohol</h5></label>
    <div class="col-lg-8">
        <textarea name="alcohol" class="form-control" id="alcohol" placeholder="especifique"></textarea>
    </div></div>
    <div class="form-group"><label for="inputEmail1" class="col-lg-2 control-label"><h5>Tabaco</h5></label>
    <div class="col-lg-8">
      <textarea name="tabaco" class="form-control" id="tabaco"  placeholder="especifique" ></textarea>
    </div></div>
    <div class="form-group"><label for="inputEmail1" class="col-lg-2 control-label"><h5>Drogas</h5></label>
    <div class="col-lg-8">
      <textarea name="drugs" class="form-control" id="drugs"  placeholder="especifique"></textarea>
    </div></div>
   
 </div> 
   
  <div class="form-group">
      <h4 class="titulo">2). Fisiológicos</h4>
      <label for="inputEmail1" class="col-lg-2 control-label"></label>
    <div class="form-group"><label for="inputEmail1" class="col-lg-2 control-label"><h5>Alimentacion</h5></label>
    <div class="col-lg-8">
        <textarea name="eat" class="form-control" id="eat" placeholder="especifique"></textarea>
    </div></div>
      <div class="form-group"><label for="inputEmail1" class="col-lg-2 control-label"><h5>Dipsia</h5></label>
    <div class="col-lg-8">
        <textarea name="dipsia" class="form-control" id="dipsia" placeholder="especifique"></textarea>
    </div></div>
      <div class="form-group"><label for="inputEmail1" class="col-lg-2 control-label"><h5>Diuresis</h5></label>
    <div class="col-lg-8">
        <textarea name="diuresis" class="form-control" id="diuresis" placeholder="especifique"></textarea>
    </div></div>
      <div class="form-group"><label for="inputEmail1" class="col-lg-2 control-label"><h5>Catarsis</h5></label>
    <div class="col-lg-8">
        <textarea name="catarsis" class="form-control" id="catarsis" placeholder="especifique"></textarea>
    </div></div>
      <div class="form-group"><label for="inputEmail1" class="col-lg-2 control-label"><h5>Somnia</h5></label>
    <div class="col-lg-8">
        <textarea name="somnia" class="form-control" id="somnia" placeholder="especifique"></textarea>
    </div></div>
    <div class="form-group"><label for="inputEmail1" class="col-lg-2 control-label"><h5>Otros</h5></label>
    <div class="col-lg-8">
        <textarea name="othersF" class="form-control" id="othersF" placeholder="especifique"></textarea>
    </div></div>
  </div>
    
    <div class="form-group">
      <h4 class="titulo">3). Patológicos</h4>
      <label for="inputEmail1" class="col-lg-2 control-label"></label>
    <div class="form-group"><label for="inputEmail1" class="col-lg-2 control-label"><h5>Infancia</h5></label>
    <div class="col-lg-8">
        <textarea name="child" class="form-control" id="child" placeholder="especifique"></textarea>
    </div></div>
      <div class="form-group"><label for="inputEmail1" class="col-lg-2 control-label"><h5>Adulto</h5></label>
    <div class="col-lg-8">
        <textarea name="adult" class="form-control" id="adult" placeholder="especifique"></textarea>
    </div></div>
      <div class="form-group"><label for="inputEmail1" class="col-lg-2 control-label"><h5>Quirúrgicos</h5></label>
    <div class="col-lg-8">
        <textarea name="quirurgycs" class="form-control" id="quirurgycs" placeholder="especifique"></textarea>
    </div></div>
      <div class="form-group"><label for="inputEmail1" class="col-lg-2 control-label"><h5>Traumatológicos</h5></label>
    <div class="col-lg-8">
        <textarea name="traumatologycs" class="form-control" id="traumatologycs" placeholder="especifique"></textarea>
    </div></div>
      <div class="form-group"><label for="inputEmail1" class="col-lg-2 control-label"><h5>Alergicos</h5></label>
    <div class="col-lg-8">
        <textarea name="alergy" class="form-control" id="alergy" placeholder="especifique"></textarea>
    </div></div>
    <div class="form-group"><label for="inputEmail1" class="col-lg-2 control-label"><h5>Otros</h5></label>
    <div class="col-lg-8">
        <textarea name="othersP" class="form-control" id="othersP" placeholder="especifique"></textarea>
    </div></div>
  </div>
    
   </div> 
<div class="card">
     <div class="form-group">
      <h4 class="titulo">4). TRATAMIENTO</h4>
      <div class="col-lg-8">
          <style type="text/css">
               .tratamiento{
    margin-left: 20%;
    height: 200px;
    width: 120%;
    background-color: ghostwhite;
    border: aliceblue;                
}
          </style>
          <textarea name="tratamient"  id="othersP" class="tratamiento" placeholder="especifique el tratamiento que debe seguir el paciente"></textarea>
    </div>
  </div>
</div>
    

  
     <br>
 

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary">Agendar Ficha Medica</button>
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
                
                
	});
</script>