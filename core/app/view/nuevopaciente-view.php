<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<div class="row">
	<div class="col-md-12">
<div class="card">
  <div class="card-header" data-background-color="blue">
      <h4 class="title">Nuevo Paciente</h4>
  </div>
  <div class="card-content table-responsive">

		<form class="form-horizontal" method="post" id="addproduct" action="index.php?view=añadirpaciente" role="form">

 <div class="form-group">
     <label for="inputEmail1" class="col-lg-2 control-label"><h5>Cedula</h5></label>
    <div class="col-lg-3">
        <input type="text" name="dni" required class="form-control" id="dni"  maxlength="10" >
    </div>
  
  
    <label for="inputEmail1" class="col-lg-2 control-label"><h5>Nombre</h5></label>
    <div class="col-lg-3">
      <input type="text" name="name" required class="form-control" id="name" >
    </div>
  </div>
    <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label"><h5>Apellido</h5></label>
    <div class="col-lg-3">
      <input type="text" name="lastname"  class="form-control" id="lastname" required >
    </div>
   
    <label for="inputEmail1" class="col-lg-2 control-label"><h5>Genero</h5></label>
    <div class="col-lg-3">
<label class="checkbox-inline">
  <input type="radio" id="inlineCheckbox1" name="gender" required value="h"> Hombre
</label>
<label class="checkbox-inline">
  <input type="radio" id="inlineCheckbox2" name="gender" required value="m"> Mujer
</label>

    </div>
 </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label"><h5>Edad</h5></label>
    <div class="col-lg-1">
      <input type="number" name="age" class="form-control"  id="address1" required>
    </div>
  
    <label for="inputEmail1" class="col-lg-1 control-label"><h5>Email</h5></label>
    <div class="col-lg-3">
      <input type="email" name="email" required class="form-control" id="email1" pattern="a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" required>
    </div> 
 

    <label for="inputAddress" class="col-lg-1 control-label"><h5>Direccion</h5></label>
    <div class="col-md-3">
      <input type="text" name="address" required class="form-control" id="address" >
    </div>
  
 </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label"><h5>Telefono/Celular</h5></label>
    <div class="col-lg-3">
        <input type="text" name="phone" class="form-control" id="phone1"  maxlength="10"  required>
    </div>
  
   <!--  <label for="inputEmail1" class="col-lg-2 control-label"><h5>Enfermedad</h5></label>
    <div class="col-lg-3">
      <textarea name="sick" class="form-control" id="sick" required></textarea>
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label"><h5>Medicamentos</h5></label>
    <div class="col-md-6">
      <textarea name="medicaments" class="form-control" id="sick" required></textarea>
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label"><h5>Alergia</h5></label>
    <div class="col-md-6">
      <textarea name="alergy" class="form-control" id="sick" required></textarea>
    </div>
  </div> -->
   

   
 </div>
                    <br><br><br>
<div class="card-header" data-background-color="red">
      <h4 class="title">llenar la casilla "Representante" en caso de que el paciente sea menor de edad</h4>
  </div>
      <div class="form-group"> 
          <label for="inputEmail1" class="col-lg-2 control-label"><h5>Representante</h5></label>             
    <div class="col-lg-3">
        
        <input type="text" name="represent" class="form-control" id="phone1" placeholder="Nombre">
    </div>
      </div>
         <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary">Agregar Paciente</button>
    </div>
  </div>            
                    
 </form>
</div>
</div>
	</div>
</div>
