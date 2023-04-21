
<?php 
$user = OdontoData::getById($_GET["id"]);
$medics = MedicData::getMed();
$pacients = PacientData::getAll();
$ficha = OdontoData::getAll();
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
      <h4 class="title">Editar Ficha Odontológica</h4>
  </div>
  <div class="card-content table-responsive">
    <form class="form-horizontal" method="post" id="addproduct" action="indexDoc.php?view=updateodontology" role="form">
<div class="card">
  <div class="form-group">
  <style type="text/css">
        h4.titulo {
                margin-left: 5%;
            }
        </style> <h4 class="titulo">1).Datos del Paciente</h4>
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
    <label for="inputEmail1" class="col-lg-2 control-label">Edad*</label>
    <div class="col-lg-1">
      <input type="text" name="age" value="<?php echo $user->age;?>" class="form-control" id="age" placeholder="Edad">
    </div>
  
    
  
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
      <h4 class="titulo">2).Motivo de la consulta</h4> 
    <label for="inputEmail1" class="col-lg-2 control-label"></label>
    <div class="col-lg-8">
      <input type="text" name="mot_consult"  value="<?php echo $user->mot_consult;?>"  class="form-control" id="mot_consult" placeholder="motivo de la consulta">
    </div>
  </div>
     </div>                 
                    
    <div class="card">                  
  
    </div>                  
<div class="card">
<div class="form-group">
           <h4 class="titulo">3).Antecedentes del paciente</h4>
      <h4 class="titulo">¿Está el paciente bajo algún tratamiento o medicamento?</h4> 
  
  <label for="inputEmail1" class="col-lg-1 control-label"><h5>Si</h5></label>
 <div class="col-lg-1">
      <input type="radio" name="antecedents" class="form-control" id="yes" value="si"  <?php if($user->antecedents=='si') print "checked=true"?> >
         
       
    </div>
  
    
    <label for="inputEmail1" class="col-lg-1 control-label"><h5>No</h5></label>
    <div class="col-lg-1">
      <input type="radio" name="antecedents" class="form-control" id="no" value="no" <?php if($user->antecedents=='no') print "checked=true"?>>
    </div>
  
    <label for="inputEmail1" class="col-lg-1 control-label"><h5>No se sabe</h5></label>
    <div class="col-lg-2">
         <input type="radio" name="antecedents" class="form-control" id="nosabe" value="No se sabe" <?php if($user->antecedents=='No se sabe') print "checked=true"?> >
    </div>
  </div>

    <div class="form-group">
     
      <h4 class="titulo">¿Presenta alguna de las enfermedades o alteraciones?</h4> 
    
    
    <label for="inputEmail1" class="col-lg-2 control-label"><h5>Diabetes</h5></label>
 <div class="col-lg-1">
     <input type="radio" name="sick" class="form-control" id="diabetes" value="diabetes" <?php if($user->sick=='diabetes') print "checked=true"?>>
    </div>

    
    <label for="inputEmail1" class="col-lg-1 control-label"><h5>Enf.Cardio Vascular</h5></label>
    <div class="col-lg-1">
        <input type="radio" name="sick" class="form-control" id="cardio" value="Enf.Cardio Vascular" <?php if($user->sick=='Enf.Cardio Vascular') print "checked=true"?>>
    </div>
  
    <label for="inputEmail1" class="col-lg-1 control-label"><h5>Enf.Congénitas</h5></label>
    <div class="col-lg-2">
        <input type="radio" name="sick" class="form-control" id="congenitas" value="enf.congenitas" <?php if($user->sick=='enf.congenitas') print "checked=true"?>>
    </div>
    <label for="inputEmail1" class="col-lg-1 control-label"><h5>Otro</h5></label>
    
        <div class="col-lg-2">
            <input type="text" name="otro" class="form-control" id="otro" placeholder="especifique" value="<?php echo $user->otro;?>">
   </div>
  </div>
<div class="form-group">
     
      <h4 class="titulo">¿Es alérgico o ha reaccionado de forma adversa a alguno de estos medicamentos ?</h4> 
        <label for="inputEmail1" class="col-lg-3 control-label"><h5>Penisilina o Derivados</h5></label>
 <div class="col-lg-1">
     <input type="radio" name="alergy" class="form-control" id="penisilina" value="penisilina"  <?php if($user->alergy=='penisilina') print "checked=true"?>>
    </div>

    
    <label for="inputEmail1" class="col-lg-1 control-label"><h5>Anastésia Local</h5></label>
    <div class="col-lg-1">
        <input type="radio" name="alergy" class="form-control" id="anestesia" value="anestesia local"  <?php if($user->alergy=='anestesia local') print "checked=true"?>>
    </div>
  
    
    <label for="inputEmail1" class="col-lg-1 control-label"><h5>Otro</h5></label>
   
        <div class="col-lg-2">
            <input type="text" name="otroA" class="form-control" id="otro" placeholder="especifique" value="<?php echo $user->otroA;?>">
   </div>
  </div>

         <div class="form-group">
      
      <h4 class="titulo">¿Presento el/la paciente algun problema relacionado al tratamiento odontologico(hemorragias anormales, reacciones alergicas, etc ) ?</h4> 
    <label for="inputEmail1" class="col-lg-1 control-label"><h5>Si</h5></label>
 <div class="col-lg-1">
      <input type="radio" name="ptratamiento" class="form-control" id="yes" value="si" <?php if($user->ptratamiento=='si') print "checked=true"?>>
    </div>
  
    
    <label for="inputEmail1" class="col-lg-1 control-label"><h5>No</h5></label>
    <div class="col-lg-1">
      <input type="radio" name="ptratamiento" class="form-control" id="no" value="no" <?php if($user->ptratamiento=='no') print "checked=true"?>>
    </div>
  
    <label for="inputEmail1" class="col-lg-1 control-label"><h5>No se sabe</h5></label>
    <div class="col-lg-2">
         <input type="radio" name="ptratamiento" class="form-control" id="nosabe" value="no se sabe" <?php if($user->ptratamiento=='no se sabe') print "checked=true"?>>
    </div>
  </div>
                    
                  
</div>                    
 <div class="card">                   
  <div class="form-group">
         <h4 class="titulo">4).Antecedentes Personales</h4>
      <br>
    <h4 class="titulo">1).Malos Habitos</h4>
    <label for="inputEmail1" class="col-lg-2 control-label"></label>
    <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Alcohol</label>
    <div class="col-md-6">
      <input type="text" name="alcohol"  value="<?php echo $user->alcohol;?>"  class="form-control" id="nacionality" placeholder="especifique">
    </div>
    </div>
    <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Tabaco</label>
    <div class="col-md-6">
      <input type="text" name="tabaco"  value="<?php echo $user->tabaco;?>"  class="form-control" id="nacionality" placeholder="especifique">
    </div>
    </div>
    <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Drogas</label>
    <div class="col-md-6">
      <input type="text" name="drugs"  value="<?php echo $user->drugs;?>"  class="form-control" id="nacionality" placeholder="especifique">
    </div>
    </div>
    <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Mala Alimentación</label>
    <div class="col-md-6">
      <input type="text" name="eat"  value="<?php echo $user->eat;?>"  class="form-control" id="nacionality" placeholder="especifique">
    </div>
    </div>
  </div>                 
 
                 
       
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">otros</label>
    <div class="col-lg-8">
      <input type="text" name="othersP"  value="<?php echo $user->othersP;?>"  class="form-control" id="nacionality" placeholder="especifique">
    </div>
  </div>      
     
               
  </div>
  <div class="card">
     <div class="form-group">
      <h4 class="titulo">5). TRATAMIENTO</h4>
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

  <div class="card-header" data-background-color="blue">
      <h4 class="title">6). Odontograma</h4>
  </div>
            <style type="css/stylesheet">
                .embed-container {
                    position: relative;
                    padding-bottom: 56.25%;
                    height: 100%;
                    overflow: hidden;
                }
                .embed-container iframe {
                    position: absolute;
                    top:0;
                    left: 0;
                    width: 100%;
                    height: 100%;
        }
                
                
            </style>
  <div class="form-group">
    <div class="col-lg-offset-4 col-lg-10">
        
        <div class="embed-container">
  <iframe src="indexReport.php?view=odontogramaR" width="1000" height="1000"  frameborder="0" allowfullscreen style="margin-left:-45%"></iframe>
</div>
  
  
    </div>
  </div>

                    <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
    <input type="hidden" name="user_id" value="<?php echo $user->id;?>">
    <button type="submit" class="btn btn-primary" style=" margin-left: 20%">Actualizar Ficha Odontológica</button>
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
  