<?php
$categories = CategoryData::getAll();
?>
<div class="row">
	<div class="col-md-12">

<div class="card">
  <div class="card-header" data-background-color="blue">
      <h4 class="title">Nuevo Medico</h4>
  </div>
  <div class="card-content table-responsive">
		<form class="form-horizontal" method="post" id="addproduct" action="index.php?view=añadirmedico" role="form">

  <div class="form-group">
      <label for="inputEmail1" class="col-lg-2 control-label"><h5>Area</h5></label>
    <div class="col-md-6">
    <select name="category_id" class="form-control">
    <option value="">-- SELECCIONE --</option>      
    <?php foreach($categories as $cat):?>
    <option value="<?php echo $cat->id; ?>"><?php echo $cat->name; ?></option>      
    <?php endforeach;?>
    </select>
    </div>
  </div>
  <div class="form-group">
      <label for="inputEmail1" class="col-lg-2 control-label"><h5>Cedula</h5></label>
    <div class="col-lg-3">
        <input type="number" name="dni" class="form-control" id="dni" maxlength="10" required >
    </div>
  
    <label for="inputEmail1" class="col-lg-2 control-label"><h5>Nombre</h5></label>
    <div class="col-lg-3">
        <input type="text" name="nameDoc" class="form-control" id="name" required >
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label"><h5>Apellido</h5></label>
    <div class="col-lg-3">
      <input type="text" name="lastnameDoc" required class="form-control" id="lastname">
    </div>
  
    <label for="inputEmail1" class="col-lg-2 control-label"><h5>Direccion</h5></label>
    <div class="col-lg-3">
        <input type="text" name="address" class="form-control"  id="address" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label"><h5>Email</h5></label>
    <div class="col-lg-3">
        <input type="email" name="email" class="form-control" id="email" required  pattern="a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" >
    </div>
  
    <label for="inputEmail1" class="col-lg-2 control-label"><h5>Telefono</h5></label>
    <div class="col-lg-3">
        <input type="number" name="phone" class="form-control" id="phone" required maxlength="7">
    </div>
  </div>
  
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary"><h5></h5>Agregar Medico</button>
    </div>
  
</form>
</div>
</div>
	</div>
</div>