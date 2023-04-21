
		<?php
		$users = FichaData::getAllByFichaMedicId($_GET["id"]);
		if(count($users)>0){
			// si hay usuarios
                    foreach($users as $user){
		
			?>








<?php 
$pacients = PacientData::getAll();
$medics = MedicData::getAll();
$categorias = CategoryData::getAll();
$ficha = FichaData::getAll();
?>

<div class="row">
	<div class="col-md-12">
<div class="card">
  <div class="card-header" data-background-color="blue">
      <h4 class="title">Ficha Medica</h4>
      
  </div>
  <div class="card-content table-responsive">
      
     

		<form class="form-horizontal" method="post" id="addproduct" role="form">
  <div class="card">
  <div class="form-group">
    <style type="text/css">
        h4.titulo {
                margin-left: 5%;
            }
        </style> <h4 class="titulo">Datos del Paciente</h4>
      
      
      <label for="inputEmail1" class="col-lg-2 control-label"><h5>Paciente</h5></label>
    <div class="col-lg-4">
        <output class="form-control"><?php if($user->pacient_id!=null){ echo $user->getPacient()->name." ";  echo $user->getPacient()->lastname; } ?></output>
    </div>
  
      
      <label for="inputEmail1" class="col-lg-2 control-label"><h5>Medico</h5></label>
    <div class="col-md-3">
    <output class="form-control"><?php if($user->medic_id!=null){ echo $user->getMedic()->nameDoc." ";  echo $user->getMedic()->lastnameDoc; } ?></output>
    </div>

    
  
 
  </div>
    <div class="form-group">
<!--    <label for="inputEmail1" class="col-lg-2 control-label"><h5>Edad</h5></label>
    <div class="col-lg-1">
        <output class="form-control"><?php// echo $user->age; ?></output>
    </div>-->
   
<!--    <label for="inputEmail1" class="col-lg-2 control-label"><h5>Cedula</h5></label>
    <div class="col-lg-2">
        <output class="form-control"><?php // echo $user->dni; ?></output>
    </div>-->
    
  <label for="inputEmail1" class="col-lg-2 control-label"><h5>Ocupacion</h5></label>
  <div class="col-lg-2">
      <output class="form-control"><?php echo $user->ocupation; ?></output>
    </div>
    </div>
  <div class="form-group">
  <label for="inputEmail1" class="col-lg-2 control-label"><h5>Sexo</h5></label>
  <div class="col-lg-2">
  <output class="form-control"><?php echo $user->sex; ?></output>
  </div>
    <label for="art_presion" class="col-lg-2 control-label"><h5>Fecha de Nacimiento</h5></label>
    <div class="col-lg-2">
     <output class="form-control"><?php echo $user->date_born; ?></output>
    </div>
  
    <label for="inputEmail1" class="col-lg-1 control-label"><h5>Nacionalidad</h5></label>
    <div class="col-lg-2">
        <output class="form-control"><?php echo $user->nacionality; ?></output>
    </div>
  </div>
      <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label"><h5>Estado Civil</h5></label>
    <div class="col-lg-2">
        <output class="form-control"><?php echo $user->est_civil; ?></output>
    </div>
      </div>
  </div>    
 <br><br> <br> 
 <div class="card">
  <div class="form-group">
     <h4 class="titulo">Motivo de la consulta</h4> 
     <label for="inputEmail1" class="col-lg-2 control-label"></label>
     <div class="col-lg-8">
      
         <output class="form-control"><?php echo $user->mot_consult; ?></output>
   
  </div>
  </div>   
 </div>
<br><br> <br> 
<div class="card">
  <div class="form-group">
      <h4 class="titulo">Antecedentes de la enfermedad actual</h4>
    <label for="inputEmail1" class="col-lg-2 control-label"></label>
    <div class="col-lg-8">
        <output class="form-control"><?php echo $user->antecedents; ?></output>
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
        <output class="form-control"><?php echo $user->fathers; ?></output>
    </div>
    <label for="inputEmail1" class="col-lg-2 control-label"><h5>Vivos</h5></label>
    <div class="col-lg-1">
        <output <div class="form-control"><?php echo $user->liveP; ?></output>
    </div>
 
  </div>
    <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label"><h5>Hermanos</h5></label>
    <div class="col-lg-2">
        <output class="form-control"><?php echo $user->brothers; ?></output>
    </div>
    
    <label for="inputEmail1" class="col-lg-2 control-label"><h5>Vivos</h5></label>
    <div class="col-lg-1">
       <output class="form-control"><?php echo $user->liveH; ?></output>
    </div>

  </div>
    <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label"><h5>Hijos</h5></label>
    <div class="col-lg-2">
        <output class="form-control"><?php echo $user->sons; ?></output>
    </div>
    <label for="inputEmail1" class="col-lg-2 control-label"><h5>Vivos</h5></label>
    <div class="col-lg-1">
       <output class="form-control"><?php echo $user->liveS; ?></output>
    </div>
  </div>
  </div>
     <div class="form-group">
 
    <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label"><h4>DBT</h4></label>
    
    <div class="col-lg-2">
        <output class="form-control"><?php echo $user->dbt; ?></output>
    </div>
    
   
 
  </div>
    <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label"><h4>HTA</h4></label>
   
    <div class="col-lg-2">
        <output class="form-control"><?php echo $user->hta; ?></output>
    
    </div>
    
    
   

  </div>
    <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label"><h5>TBC</h5></label>
  
    <div class="col-lg-2">
        <output class="form-control"><?php echo $user->tbc; ?></output>
    </div>
    
    
  </div>
         <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label"><h5>Gamelar</h5></label>
   
    <div class="col-lg-2">
        <output class="form-control"><?php echo $user->gamelar; ?></output>
        
    </div>
   
    
  </div>
   <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label"><h5>Otro</h5></label>
    <div class="col-lg-8">
        <output class="form-control"><?php echo $user->othersHF; ?></output>
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
        <output class="form-control"><?php echo $user->alcohol; ?></output>
    </div></div>
    <div class="form-group"><label for="inputEmail1" class="col-lg-2 control-label"><h5>Tabaco</h5></label>
    <div class="col-lg-8">
      <output class="form-control"><?php echo $user->tabaco; ?></output>
    </div></div>
    <div class="form-group"><label for="inputEmail1" class="col-lg-2 control-label"><h5>Drogas</h5></label>
    <div class="col-lg-8">
      <output class="form-control"><?php echo $user->drugs; ?></output>
    </div></div>
   
 </div> 
   
  <div class="form-group">
      <h4 class="titulo">2). Fisiológicos</h4>
      <label for="inputEmail1" class="col-lg-2 control-label"></label>
    <div class="form-group"><label for="inputEmail1" class="col-lg-2 control-label"><h5>Alimentacion</h5></label>
    <div class="col-lg-8">
        <output class="form-control"><?php echo $user->eat; ?></output>
    </div></div>
      <div class="form-group"><label for="inputEmail1" class="col-lg-2 control-label"><h5>Dipsia</h5></label>
    <div class="col-lg-8">
        <output class="form-control"><?php echo $user->dipsia; ?></output>
    </div></div>
      <div class="form-group"><label for="inputEmail1" class="col-lg-2 control-label"><h5>Diuresis</h5></label>
    <div class="col-lg-8">
        <output class="form-control"><?php echo $user->diuresis; ?></output>
    </div></div>
      <div class="form-group"><label for="inputEmail1" class="col-lg-2 control-label"><h5>Catarsis</h5></label>
    <div class="col-lg-8">
        <output class="form-control"><?php echo $user->catarsis; ?></output>
    </div></div>
      <div class="form-group"><label for="inputEmail1" class="col-lg-2 control-label"><h5>Somnia</h5></label>
    <div class="col-lg-8">
        <output class="form-control"><?php echo $user->somnia; ?></output>
    </div></div>
    <div class="form-group"><label for="inputEmail1" class="col-lg-2 control-label"><h5>Otros</h5></label>
    <div class="col-lg-8">
        <output class="form-control"><?php echo $user->othersF; ?></output>
    </div></div>
  </div>
    
    <div class="form-group">
      <h4 class="titulo">3). Patológicos</h4>
      <label for="inputEmail1" class="col-lg-2 control-label"></label>
    <div class="form-group"><label for="inputEmail1" class="col-lg-2 control-label"><h5>Infancia</h5></label>
    <div class="col-lg-8">
        <output class="form-control"><?php echo $user->child; ?></output>
    </div></div>
      <div class="form-group"><label for="inputEmail1" class="col-lg-2 control-label"><h5>Adulto</h5></label>
    <div class="col-lg-8">
        <output class="form-control"><?php echo $user->adult; ?></output>
    </div></div>
      <div class="form-group"><label for="inputEmail1" class="col-lg-2 control-label"><h5>Quirúrgicos</h5></label>
    <div class="col-lg-8">
        <output class="form-control"><?php echo $user->quirurgycs; ?></output>
    </div></div>
      <div class="form-group"><label for="inputEmail1" class="col-lg-2 control-label"><h5>Traumatológicos</h5></label>
    <div class="col-lg-8">
        <output class="form-control"><?php echo $user->traumatologycs; ?></output>
    </div></div>
      <div class="form-group"><label for="inputEmail1" class="col-lg-2 control-label"><h5>Alergicos</h5></label>
    <div class="col-lg-8">
        <output class="form-control"><?php echo $user->alergy; ?></output>
    </div></div>
    <div class="form-group"><label for="inputEmail1" class="col-lg-2 control-label"><h5>Otros</h5></label>
    <div class="col-lg-8">
        <output class="form-control"><?php echo $user->othersP; ?></output>
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
          <output  class="tratamiento" ><?php echo $user->tratamient;?></output>
    </div>
  </div>
</div>

  
     <br>
 

  

 </form> 
  </div> 
     
</div>
	</div>
</div>
<?php
                    }
		}else{
			echo "<p class='alert alert-danger'>No se ha creado Ficha Medica del paciente</p>";
		}


		?>


