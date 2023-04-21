<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<meta name="description" content="Happy template" />
	<meta name="keywords" content="happy, template" />	
	<link rel="stylesheet" href="assets/odontograma/css/main.css" type="text/css" />
        <script src="assets/odontograma/scripts/jquery-2.1.4.js"></script>
        <script src="assets/odontograma/scripts/angular.js"></script>
        <link href="assets/odontograma/css/estilosOdontograma.css" rel="stylesheet" type="text/css"/>
	
</head>
<body ng-app="app" >
        
    <div class="row">
	<div class="col-md-12">
    <div class="card">
  <div class="card-header" data-background-color="blue">
      <h4 class="title">Ficha Odontológica</h4>
  </div>
        
        <?php 
$pacients = PacientData::getAll();
$medics = MedicData::getMed();
$categorias = CategoryData::getAll();
$ficha = FichaData::getAll();

?>
<link rel="stylesheet" type="text/css" href="assets/select2/select2.min.css">
<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
  <script src="assets/select2/select2.min.js"></script>

  <div class="card-content table-responsive">

		<form class="form-horizontal" method="post" id="addproduct" action="indexDoc.php?view=añadirodontologia" role="form">
  <div class="card">
  <div class="form-group">
    <style type="text/css">
        h4.titulo {
                margin-left: 5%;
            }
        </style> <h4 class="titulo">1).Datos del Paciente</h4>
      
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
   <label for="inputEmail1" class="col-lg-3 control-label"><h5>Edad del paciente</h5></label>
    <div class="col-lg-1">
        <input type="number" name="age"  class="form-control" id="age" maxlength="10"> 
    </div>
   
<!--    <label for="inputEmail1" class="col-lg-2 control-label"><h5>Cedula</h5></label>
    <div class="col-lg-2">
        <input type="number" name="dni"  class="form-control" id="dni" >
    </div>-->
    
  <label for="inputEmail1" class="col-lg-3 control-label"><h5>Ocupacion</h5></label>
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
     <h4 class="titulo">2).Motivo de la consulta</h4> 
     <label for="inputEmail1" class="col-lg-2 control-label"></label>
     <div class="col-lg-8">
      
         <input type="text" name="mot_consult" class="form-control" id="mot_consult" placeholder="escriba aqui el motivo" required="">
   
  </div>
  </div>   
 </div>
<br><br> <br> 
<div class="card">
  
      <div class="form-group">
           <h4 class="titulo">3).Antecedentes del paciente</h4>
      <h4 class="titulo">¿Está el paciente bajo algún tratamiento o medicamento?</h4> 
  
  <label for="inputEmail1" class="col-lg-1 control-label"><h5>Si</h5></label>
 <div class="col-lg-1">
     <input type="radio" name="antecedents" class="form-control" id="yes" value="si">
         
     </input>
    </div>
<div class="col-lg-3">
          <input type="text" name="antecedents" class="form-control" id="explicar" placeholder="explicar cual"></input>
         </div>
     
            
    
    <label for="inputEmail1" class="col-lg-1 control-label"><h5>No</h5></label>
    <div class="col-lg-1">
      <input type="radio" name="antecedents" class="form-control" id="no" value="no"></input>
    </div>
  
    <label for="inputEmail1" class="col-lg-1 control-label"><h5>No se sabe</h5></label>
    <div class="col-lg-2">
         <input type="radio" name="antecedents" class="form-control" id="nosabe" value="no sabe"></input>
    </div>
  </div>
    <div class="form-group">
     
      <h4 class="titulo">¿Presenta alguna de las enfermedades o alteraciones?</h4> 
    
    
    <label for="inputEmail1" class="col-lg-2 control-label"><h5>Diabetes</h5></label>
 <div class="col-lg-1">
     <input type="radio" name="sick" class="form-control" id="diabetes" value="diabetes"></input>
    </div>

    
    <label for="inputEmail1" class="col-lg-1 control-label"><h5>Enf.Cardio Vascular</h5></label>
    <div class="col-lg-1">
        <input type="radio" name="sick" class="form-control" id="cardio" value="Enf.Cardio Vascular"></input>
    </div>
  
    <label for="inputEmail1" class="col-lg-1 control-label"><h5>Enf.Congénitas</h5></label>
    <div class="col-lg-1">
        <input type="radio" name="sick" class="form-control" id="congenitas" value="Enf.Congénitas"></input>
    </div>
    <label for="inputEmail1" class="col-lg-1 control-label"><h5>Otro</h5></label>
    <div class="col-lg-1">
        <input type="radio" name="sick" class="form-control" id="otro"> </div>
        <div class="col-lg-2">
        <input type="text" name="otro" class="form-control" id="otro" placeholder="especifique"></input>
   </div>
  </div>
   <div class="form-group">
     
      <h4 class="titulo">¿Es alérgico o ha reaccionado de forma adversa a alguno de estos medicamentos ?</h4> 
        <label for="inputEmail1" class="col-lg-3 control-label"><h5>Penisilina o Derivados</h5></label>
 <div class="col-lg-1">
     <input type="radio" name="alergy" class="form-control" id="penisilina" value="penicilina"></input>
    </div>

    
    <label for="inputEmail1" class="col-lg-1 control-label"><h5>Anastésia Local</h5></label>
    <div class="col-lg-1">
        <input type="radio" name="alergy" class="form-control" id="anestesia" value="Anestésia Local"></input>
    </div>
  
    
    <label for="inputEmail1" class="col-lg-1 control-label"><h5>Otro</h5></label>
    <div class="col-lg-1">
        <input type="radio" name="alergy" class="form-control" id="otro"></input> </div>
        <div class="col-lg-2">
        <input type="text" name="otroA" class="form-control" id="otro" placeholder="especifique"></input>
   </div>
  </div>
  <div class="form-group">
      
      <h4 class="titulo">¿Presento el/la paciente algun problema relacionado al tratamiento odontologico(hemorragias anormales, reacciones alergicas, etc ) ?</h4> 
    <label for="inputEmail1" class="col-lg-1 control-label"><h5>Si</h5></label>
 <div class="col-lg-1">
      <input type="radio" name="ptratamiento" class="form-control" id="yes" value="si"></input>
    </div>
  <div class="col-lg-3">
                <input type="text" name="ptratamiento" class="form-control" id="yes" placeholder="explicar cual"></input>
            </div>
    
    <label for="inputEmail1" class="col-lg-1 control-label"><h5>No</h5></label>
    <div class="col-lg-1">
      <input type="radio" name="ptratamiento" class="form-control" id="no" value="no"></input>
    </div>
  
    <label for="inputEmail1" class="col-lg-1 control-label"><h5>No se sabe</h5></label>
    <div class="col-lg-2">
         <input type="radio" name="ptratamiento" class="form-control" id="nosabe" value="no sabe"></input>
    </div>
  </div>
</div>

<div class="card">
  <div class="form-group">
      <h4 class="titulo">4).Antecedentes Personales</h4>
      <br>
    <h4 class="titulo">Malos Habitos</h4>
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
    <div class="form-group"><label for="inputEmail1" class="col-lg-2 control-label"><h5>Mala Alimentacion</h5></label>
    <div class="col-lg-8">
      <textarea name="eat" class="form-control" id="drugs"  placeholder="especifique"></textarea>
    </div></div>
   
 </div> 

    <div class="form-group">
     
    <div class="form-group"><label for="inputEmail1" class="col-lg-2 control-label"><h5>Otros</h5></label>
    <div class="col-lg-8">
        <textarea name="othersP" class="form-control" id="othersP" placeholder="especifique"></textarea>
    </div></div>
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
          <textarea name="tratamient"  id="othersP" class="tratamiento" placeholder="especifique el tratamiento que debe seguir el paciente"></textarea>
    </div>
  </div>
</div>
    
   </div>
  <div class="card-header" data-background-color="blue">
      <h4 class="title">Odontograma</h4>
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
  <iframe src="indexReport.php?view=odontogramaR" width="1730" height="750"  frameborder="0" allowfullscreen style="margin-left:-45%"></iframe>
</div>
  
  
    </div>
  </div>
                        

            
            
            
           </div>
        </div>
    </div>


        <!-- Angular Modulos-->
        <script type="text/javascript" src="assets/odontograma/scripts/modulos/app.js"></script>
        <!-- Angular Controladores-->
        <script type="text/javascript" src="assets/odontograma/scripts/controladores/controller.js"></script>
        <!--Angular Directives-->
        <script type="text/javascript" src="assets/odontograma/scripts/directivas/canvasodontograma.js"></script>
        <script type="text/javascript" src="assets/odontograma/scripts/directivas/opcionescanvas.js"></script>
        <script type="text/javascript" src="assets/odontograma/scripts/directivas/odontogramaGeneral.js"></script>
        
        <script>
            $btnbuscar = $('#btnbuscar');
            $txtbuscar = $('#txtbuscar');
            $txtnombre = $('#txtnombre');
            $txtapellidopaterno = $('#txtapellidopaterno');
            $txtapellidomaterno = $('#txtapellidomaterno');
            $txtcodigo = $('#txtcodigo');
            $btnbuscar.click(function(){
                $.ajax({
                    url:'odontogramaRegistros.php',
                    dataType:'json',
                    type:'POST',
                    data:{dni:$txtbuscar.val()},
                    success:function(data)
                    {
                        $txtnombre.val(data[0].nombre);
                        $txtapellidopaterno.val(data[0].apellido_paterno);
                        $txtapellidomaterno.val(data[0].apellido_materno);
                        $txtcodigo.val(data[0].cod_persona);
                    }
                });
            });
        </script>

  <div class="form-group">
    <div class="col-lg-offset-4 col-lg-10">
      <button type="submit" class="btn btn-primary">Agendar Ficha Odontológica</button>
    </div>
  </div>

 </form> 
  </div> 
     



  <script type="text/javascript">
	$(document).ready(function(){
		$('#controlBuscador').select2();
                $('#controlBuscador1').select2();
                
                
	});
</script>
        
        
        
        
	
</body>
</html>