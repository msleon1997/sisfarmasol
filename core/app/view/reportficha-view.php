










		<?php
                header("Content-type: application/vmd.ms-word");
                header("Content-Disposition: attachment; filename=reporteFicha.doc");
                include "conexion.php";
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
 <header class="clearfix">
      <div id="logo">
       
      </div>
      <div id="company">
          <center> <h2 class="name">Farmasol EP 27 de Febrero</h2></center>
          <div align="right"> Fecha:<output class="form-control"><?php echo $user->date_at; ?></output></div>
          <div align="right"> Cuenca-Ecuador</div>
        <div align="right">(07) 2813 467 </div>
        
      </div>
      
    </header>




<table class="egt" border="1" align="center">

  

  <thead>

    <tr>

        <th colspan="4" scope="rowgroup">Ficha Medica</th>

     

    </tr>

  </thead>

  <tbody>

    <tr>

      <th colspan="4" scope="rowgroup"><h4 class="titulo">Datos del Paciente</h4></th>

    </tr>

    <tr>

      <td><h5>Paciente</h5></td>

      <td><output class="form-control"><?php if($user->pacient_id!=null){ echo $user->getPacient()->name." ";  echo $user->getPacient()->lastname; } ?></output></td>

    </tr>
     <tr>

      <td><h5>Medico</h5></td>

      <td><output class="form-control"><?php if($user->medic_id!=null){ echo $user->getMedic()->nameDoc." ";  echo $user->getMedic()->lastnameDoc; } ?></output></td>

    </tr>
     <tr>

      <td><h5>Ocupacion</h5></td>

      <td><output class="form-control"><?php echo $user->ocupation; ?></output></td>

    </tr>
     <tr>

      <td><h5>Sexo-Genero</h5></td>

      <td>  <output class="form-control"><?php echo $user->sex; ?></output></td>

    </tr>
     <tr>

      <td><h5>Fecha de nacimiento</h5></td>

      <td>   <output class="form-control"><?php echo $user->date_born; ?></output> </td>

    </tr>
     <tr>

      <td><h5>Nacionalidad</h5></td>

      <td><output class="form-control"><?php echo $user->nacionality; ?></output></td>

    </tr>
     <tr>

      <td><h5>Estado Civil</h5></td>

      <td><output class="form-control"><?php echo $user->est_civil; ?></output></td>

    </tr>

  </tbody>

  <tbody>

    <tr>

      <th colspan="4" scope="rowgroup"><h4 class="titulo">Motivo de la consulta</h4> </th>

    </tr>

    <tr>

     

      <td><output class="form-control"><?php echo $user->mot_consult; ?></output></td>

    </tr>

  

  </tbody>

  <tbody>

    <tr>

      <th colspan="4" scope="rowgroup"><h4 class="titulo">Antecedentes de la enfermedad actual</h4></th>

    </tr>

    <tr>

   

      <td>     <output class="form-control"><?php echo $user->antecedents; ?></output></td>

    </tr>

   

  </tbody>

  <tbody>

    <tr>

      <th colspan="4" scope="rowgroup"> <h4 class="titulo">Antecedentes Heredo-Familiares</h4></th>

    </tr>

    <tr>

      <td><label for="inputEmail1" class="col-lg-2 control-label"><h5>Padres</h5></label></td>
      <td><output class="form-control"><?php echo $user->fathers; ?></output></td>
      <td><label for="inputEmail1" class="col-lg-2 control-label"><h5>Vivos</h5></label></td>
      <td><output <div class="form-control"><?php echo $user->liveP; ?></output></td>
  

    </tr>
    <tr>

      <td><label for="inputEmail1" class="col-lg-2 control-label"><h5>Hermanos</h5></label></td>
       <td><output class="form-control"><?php echo $user->brothers; ?></output></td>
      <td><label for="inputEmail1" class="col-lg-2 control-label"><h5>Vivos</h5></label></td>
        <td><output class="form-control"><?php echo $user->liveH; ?></output></td>
    </tr>
    <tr>

      <td><label for="inputEmail1" class="col-lg-2 control-label"><h5>Hijos</h5></label></td>
             <td><output class="form-control"><?php echo $user->sons; ?></output></td>
      <td><label for="inputEmail1" class="col-lg-2 control-label"><h5>Vivos</h5></label></td>
           <td><output class="form-control"><?php echo $user->liveS; ?></output></td>
    </tr>
    <tr>

      <td><label for="inputEmail1" class="col-lg-2 control-label"><h5>DBT</h5></label></td>
              <td><output class="form-control"><?php echo $user->dbt; ?></output></td>
    
    </tr>
    <tr>

      <td><label for="inputEmail1" class="col-lg-2 control-label"><h5>HTA</h5></label></td>
              <td><output class="form-control"><?php echo $user->hta; ?></output></td>
      
    </tr>
    <tr>

      <td><label for="inputEmail1" class="col-lg-2 control-label"><h5>TBC</h5></label></td>
              <td><output class="form-control"><?php echo $user->tbc; ?></output></td>
    
    </tr>
    <tr>

      <td><label for="inputEmail1" class="col-lg-2 control-label"><h5>GAMELAR</h5></label></td>
         <td><output class="form-control"><?php echo $user->gamelar; ?></output></td>
 
    </tr>
    <tr>

      <td><label for="inputEmail1" class="col-lg-2 control-label"><h5>Otro</h5></label></td>
         <td><output class="form-control"><?php echo $user->othersHF; ?></output></td>
 
    </tr>
   
    

  </tbody>
<tbody>

    <tr>

      <th colspan="4" scope="rowgroup"> <h4 class="titulo">Antecedentes personales</h4></th>

    </tr>

    <tr>

      <td><label for="inputEmail1" class="col-lg-2 control-label"><h5>Alcohol</h5></label></td>
      <td><output class="form-control"><?php echo $user->alcohol; ?></output></td>
      
  

    </tr>
    <tr>

      <td><label for="inputEmail1" class="col-lg-2 control-label"><h5>Tabaco</h5></label></td>
       <td><output class="form-control"><?php echo $user->tabaco; ?></output></td>
      
    </tr>
    <tr>

      <td><label for="inputEmail1" class="col-lg-2 control-label"><h5>Drogas</h5></label></td>
        <td><output class="form-control"><?php echo $user->drugs; ?></output></td>
     
    </tr>
   
    

  </tbody>
  <tbody>

    <tr>

      <th colspan="4" scope="rowgroup"> <h4 class="titulo">Fisiológicos</h4></th>

    </tr>

    <tr>

      <td><label for="inputEmail1" class="col-lg-2 control-label"><h5>Alimentacion</h5></label></td>
      <td><output class="form-control"><?php echo $user->eat; ?></output></td>
      
  

    </tr>
    <tr>

      <td><label for="inputEmail1" class="col-lg-2 control-label"><h5>Dipsia</h5></label></td>
          <td><output class="form-control"><?php echo $user->dipsia; ?></output></td>
      
    </tr>
    <tr>

      <td><label for="inputEmail1" class="col-lg-2 control-label"><h5>Diuresis</h5></label></td>
        <td><output class="form-control"><?php echo $user->diuresis; ?></output></td>
     
    </tr>
   <tr>

      <td><label for="inputEmail1" class="col-lg-2 control-label"><h5>Catarsis</h5></label></td>
         <td><output class="form-control"><?php echo $user->catarsis; ?></output></td>
     
    </tr>
    <tr>

      <td><label for="inputEmail1" class="col-lg-2 control-label"><h5>Somnia</h5></label></td>
          <td><output class="form-control"><?php echo $user->somnia; ?></output></td>
     
    </tr>
    <tr>

      <td><label for="inputEmail1" class="col-lg-2 control-label"><h5>Otros</h5></label></td>
       <td><output class="form-control"><?php echo $user->othersF; ?></output></td>
     
    </tr>

  </tbody>
   <tbody>

    <tr>

      <th colspan="4" scope="rowgroup"> <h4 class="titulo">Patológicos</h4></th>

    </tr>

    <tr>

      <td><label for="inputEmail1" class="col-lg-2 control-label"><h5>Infancia</h5></label></td>
      <td><output class="form-control"><?php echo $user->child; ?></output></td>
      
  

    </tr>
    <tr>

      <td><label for="inputEmail1" class="col-lg-2 control-label"><h5>Adulto</h5></label></td>
      <td><output class="form-control"><?php echo $user->adult; ?></output></td>
      
    </tr>
    <tr>

      <td><label for="inputEmail1" class="col-lg-2 control-label"><h5>Quirúrgicos</h5></label></td>
       <td><output class="form-control"><?php echo $user->quirurgycs; ?></output></td>
     
    </tr>
   <tr>

      <td><label for="inputEmail1" class="col-lg-2 control-label"><h5>Traumatológicos</h5></label></td>
      <td><output class="form-control"><?php echo $user->traumatologycs; ?></output></td>
     
    </tr>
    <tr>

      <td><label for="inputEmail1" class="col-lg-2 control-label"><h5>Alergicos</h5></label></td>
       <td><output class="form-control"><?php echo $user->alergy; ?></output></td>
     
    </tr>
    <tr>

      <td><label for="inputEmail1" class="col-lg-2 control-label"><h5>Otros</h5></label></td>
       <td><output class="form-control"><?php echo $user->othersP; ?></output></td>
     
    </tr>

  </tbody>
    <tbody>

    <tr>

      <th colspan="4" scope="rowgroup"> <h4 class="titulo">Tratamiento</h4></th>

    </tr>

    <tr>


      <td><output class="form-control"><?php echo $user->tratamient; ?></output></td>
      
  

    </tr>
  
   

  </tbody>
</table>

<div align="right"><a href="#">mercadeo@farmasol.gob.ec</a></div>
 
<?php
                    }
		}else{
			echo "<p class='alert alert-danger'>No se ha creado Ficha Medica del paciente</p>";
		}


		?>


