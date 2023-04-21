
<?php 
$user = FichaData::getById($_GET["id"]);
$medics = MedicData::getAll();
$pacients = PacientData::getAll();
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
      <h4 class="title">Editar Ficha Medica</h4>
  </div>
  <div class="card-content table-responsive">
		<form class="form-horizontal" method="post" id="addproduct" action="index.php?view=updateficha" role="form">
<div class="card">
  <div class="form-group">
  <style type="text/css">
        h4.titulo {
                margin-left: 5%;
            }
        </style> <h4 class="titulo">Datos del Paciente</h4>
        <div class="form-group"><label for="inputEmail1" class="col-lg-3 control-label">Fecha de Creación*</label>
    <div class="col-lg-2">
      <input type="date" name="date_at" value="<?php echo $user->date_at;?>" class="form-control" id="date_at" placeholder="Fecha de creacion">
    </div></div>
        
        <label for="inputEmail1" class="col-lg-2 control-label">Paciente*</label>
    <div class="col-lg-3">
        <select id="controlBuscador" name="pacient_id" class="form-control" >
  <option value="" >
-- SELECCIONE --

</option>


  <?php foreach($pacients as $p):?>
 <option value="<?php echo $p->id; ?>" <?php if($user->pacient_id==$p->id){ echo "selected"; }?>><?php echo $p->name." ".$p->lastname; ?></option>
  <?php endforeach; ?>
</select>
    </div>
                   
  
    <label for="inputEmail1" class="col-lg-2 control-label">Medico*</label>
    <div class="col-lg-3">
        <select id="controlBuscador1" name="medic_id" class="form-control">
    <option value="">-- SELECCIONE --</option>      
    <?php foreach($medics as $p):?>
    <option value="<?php echo $p->id; ?>" <?php if($user->medic_id==$p->id){ echo "selected"; }?>><?php echo $p->nameDoc." ".$p->lastnameDoc; ?></option>      
    <?php endforeach;?>
    </select>
    </div>
  
 </div>                  
   <div class="form-group">
<!--    <label for="inputEmail1" class="col-lg-2 control-label">Edad*</label>
    <div class="col-lg-1">
      <input type="text" name="age" value="<?php //echo $user->age;?>" class="form-control" id="age" placeholder="Edad">
    </div>-->
  
    
  
    <label for="inputEmail1" class="col-lg-2 control-label">Ocupacion*</label>
    <div class="col-lg-2">
      <input type="text" name="ocupation" value="<?php echo $user->ocupation;?>" required class="form-control" id="ocupation" placeholder="Ocupacion">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Sexo*</label>
    <div class="col-lg-2">
      
      <input type="text" name="sex" value="<?php echo $user->sex;?>" class="form-control" required id="sex" placeholder="Sexo">
    
      <!--<input type="text" name="sex" value="<?php // echo $user->sex;?>" class="form-control" required id="sex" placeholder="Sexo">-->
    </div>
  
    <label for="inputEmail1" class="col-lg-2 control-label">Fecha Nacimiento*</label>
    <div class="col-lg-2">
      <input type="date" name="date_born" value="<?php echo $user->date_born;?>" class="form-control" id="date_born" placeholder="Fecha Nacimiento">
    </div>
  
    <label for="inputEmail1" class="col-lg-1 control-label">Nacionalidad</label>
    <div class="col-lg-2">
      <input type="text" name="nacionality"  value="<?php echo $user->nacionality;?>"  class="form-control" id="nacionality" placeholder="Nacionalidad">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Estado Civil</label>
    <div class="col-lg-2">
      <input type="text" name="est_civil"  value="<?php echo $user->est_civil;?>"  class="form-control" id="est_civil" placeholder="Estado civil">
    </div>
  </div>
</div>            
     <div class="card">              
  <div class="form-group">
      <h4 class="titulo">Motivo de la consulta</h4> 
    <label for="inputEmail1" class="col-lg-2 control-label"></label>
    <div class="col-lg-8">
      <input type="text" name="mot_consult"  value="<?php echo $user->mot_consult;?>"  class="form-control" id="mot_consult" placeholder="motivo de la consulta">
    </div>
  </div>
     </div>                 
                    
    <div class="card">                  
  <div class="form-group">
      <h4 class="titulo">Antecedentes de la enfermedad actual</h4>
    <label for="inputEmail1" class="col-lg-2 control-label"></label>
    <div class="col-lg-8">
      <input type="text" name="antecedents"  value="<?php echo $user->antecedents;?>"  class="form-control" id="antecedents" placeholder="describa">
    </div>
  </div>
    </div>                  
<div class="card">                   
<div class="form-group">
    <h4 class="titulo">Antecedentes Heredo-Familiares</h4>
    <label for="inputEmail1" class="col-lg-2 control-label"></label>
   <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Padres</label>
    <div class="col-lg-2">
        <input type="number" name="fathers"  value="<?php echo $user->fathers;?>"  class="form-control" id="fathers" placeholder="Nº padres">
    </div> 
    <label for="inputEmail1" class="col-lg-2 control-label">vivos</label>
    <div class="col-lg-2">
        <input type="number" name="liveP"  value="<?php echo $user->liveP;?>"  class="form-control" id="nacionality" placeholder="Nº padres vivos">
    </div>
  </div>
</div>
 <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Hermanos</label>
    <div class="col-lg-2">
        <input type="number" name="brothers"  value="<?php echo $user->brothers;?>"  class="form-control" id="brothers" placeholder="Nº Hermanos">
    </div>
    <label for="inputEmail1" class="col-lg-2 control-label">vivos</label>
    <div class="col-lg-2">
        <input type="number" name="liveH"  value="<?php echo $user->liveH;?>"  class="form-control" id="nacionality" placeholder="Nº hermanos vivos">
    </div>
  </div>
    
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">hijos</label>
    <div class="col-lg-2">
        <input type="number" name="sons"  value="<?php echo $user->sons;?>"  class="form-control" id="sons" placeholder="Nº Hijos">
    </div>
    <label for="inputEmail1" class="col-lg-2 control-label">vivos</label>
    <div class="col-lg-2">
        <input type="number" name="liveS"  value="<?php echo $user->liveS;?>"  class="form-control" id="nacionality" placeholder="Nº hijos vivos">
    </div>
  </div>
                    
                    
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">DBT</label>
    <div class="col-lg-1">
      <input type="text" name="dbt"  value="<?php echo $user->dbt;?>"  class="form-control" id="nacionality" placeholder="describa si es Si o No">
    </div>
  </div>                  
   <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">HTA</label>
    <div class="col-lg-1">
      <input type="text" name="hta"  value="<?php echo $user->hta;?>"  class="form-control" id="nacionality" placeholder="describa si es Si o No">
    </div>
  </div>                 
                    
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">TBC</label>
    <div class="col-lg-1">
      <input type="text" name="tbc"  value="<?php echo $user->tbc;?>"  class="form-control" id="nacionality" placeholder="describa si es Si o No">
    </div>
  </div>                  
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">gamelar</label>
    <div class="col-lg-1">
      <input type="text" name="gamelar"  value="<?php echo $user->gamelar;?>"  class="form-control" id="nacionality" placeholder="describa si es Si o No">
    </div>
  </div>                  


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">otro</label>
    <div class="col-lg-8">
      <input type="text" name="othersHF"  value="<?php echo $user->othersHF;?>"  class="form-control" id="nacionality" placeholder="especifique">
    </div>
  </div>                  
</div>                    
 <div class="card">                   
  <div class="form-group">
         <h4 class="titulo">Antecedentes Personales</h4>
      <br>
    <h4 class="titulo">1).Habitos Tóxicos</h4>
    <label for="inputEmail1" class="col-lg-2 control-label"></label>
    <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Alcohol</label>
    <div class="col-md-6">
      <input type="text" name="alcohol"  value="<?php echo $user->alcohol;?>"  class="form-control" id="nacionality" placeholder="especifique">
    </div>
    </div>
    <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">tabaco</label>
    <div class="col-md-6">
      <input type="text" name="tabaco"  value="<?php echo $user->tabaco;?>"  class="form-control" id="nacionality" placeholder="especifique">
    </div>
    </div>
    <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">drogas</label>
    <div class="col-md-6">
      <input type="text" name="drugs"  value="<?php echo $user->drugs;?>"  class="form-control" id="nacionality" placeholder="especifique">
    </div>
    </div>
  </div>                 
  <div class="form-group">
      <h4 class="titulo">2). Fisiológicos</h4>
      <label for="inputEmail1" class="col-lg-2 control-label"></label>
      <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">alimentacion</label>
    <div class="col-lg-8">
      <input type="text" name="eat"  value="<?php echo $user->eat;?>"  class="form-control" id="nacionality" placeholder="especifique">
    </div>
      </div>
                   
                    
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">dipsia</label>
    <div class="col-lg-8">
      <input type="text" name="dipsia"  value="<?php echo $user->dipsia;?>"  class="form-control" id="nacionality" placeholder="especifique">
    </div>
  </div>                  
                    
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">diuresis</label>
    <div class="col-lg-8">
      <input type="text" name="diuresis"  value="<?php echo $user->diuresis;?>"  class="form-control" id="nacionality" placeholder="especifique">
    </div>
  </div>                  
                    
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">catarsis</label>
    <div class="col-lg-8">
      <input type="text" name="catarsis"  value="<?php echo $user->catarsis;?>"  class="form-control" id="nacionality" placeholder="especifique">
    </div>
  </div>                  
                    
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">somnia</label>
    <div class="col-lg-8">
      <input type="text" name="somnia"  value="<?php echo $user->somnia;?>"  class="form-control" id="nacionality" placeholder="especifique">
    </div>
  </div>                  
                    
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">otros</label>
    <div class="col-lg-8">
      <input type="text" name="othersF"  value="<?php echo $user->othersF;?>"  class="form-control" id="nacionality" placeholder="especifique">
    </div>
  </div>      
     
  </div> 
     
 
     
  <div class="form-group">
      <h4 class="titulo">3). Patológicos</h4>
      <label for="inputEmail1" class="col-lg-2 control-label"></label>
      <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">infancia</label>
    <div class="col-lg-8">
      <input type="text" name="child"  value="<?php echo $user->child;?>"  class="form-control" id="nacionality" placeholder="especifique">
    </div>
      </div>
                   
   <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">adult</label>
    <div class="col-lg-8">
      <input type="text" name="adult"  value="<?php echo $user->adult;?>"  class="form-control" id="nacionality" placeholder="especifique">
    </div>
  </div>                 
   <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">quirurgicos</label>
    <div class="col-lg-8">
      <input type="text" name="quirurgycs"  value="<?php echo $user->quirurgycs;?>"  class="form-control" id="nacionality" placeholder="especifique">
    </div>
  </div>                 
    <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">traumatologicos</label>
    <div class="col-lg-8">
      <input type="text" name="traumatologycs"  value="<?php echo $user->traumatologycs;?>"  class="form-control" id="nacionality" placeholder="especifique">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">alergicos</label>
    <div class="col-lg-8">
      <input type="text" name="alergy"  value="<?php echo $user->alergy;?>"  class="form-control" id="nacionality" placeholder="especifique">
    </div>
  </div>                  
                    
 <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">otros</label>
    <div class="col-lg-8">
      <input type="text" name="othersP"  value="<?php echo $user->othersP;?>"  class="form-control" id="nacionality" placeholder="especifique">
    </div>
  </div>                   
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
          <input type="text"name="tratamient" value="<?php echo $user->tratamient;?>" id="othersP" class="tratamiento">
    </div>
  </div>
</div>
                    <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
    <input type="hidden" name="user_id" value="<?php echo $user->id;?>">
      <button type="submit" class="btn btn-primary">Actualizar Ficha Medica</button>
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
	