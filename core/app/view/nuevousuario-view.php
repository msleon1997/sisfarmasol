<div class="row">
	<div class="col-md-12">
<div class="card">
  <div class="card-header" data-background-color="blue">
      <h4 class="title">Nuevo usuario</h4>
  </div>
  <div class="card-content table-responsive">

		<form class="form-horizontal" method="post" id="addproduct" action="index.php?view=añadirusuario" role="form">


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label"><h5>Nombre</h5></label>
    <div class="col-lg-3">
      <input type="text" name="name" class="form-control" id="name"  required>
    </div>
  
    <label for="inputEmail1" class="col-lg-2 control-label"><h5>Apellido</h5></label>
    <div class="col-lg-3">
      <input type="text" name="lastname" required class="form-control" id="lastname" 
    </div>
  </div>
  </div>                  
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label"><h5>Nombre de usuario</h5></label>
    <div class="col-lg-3">
      <input type="text" name="username" class="form-control" required id="username" >
    </div>
  
    <label for="inputEmail1" class="col-lg-2 control-label"><h5>Email</h5></label>
    <div class="col-lg-3">
      <input type="email" name="email" class="form-control" id="email" pattern="a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label"><h5>Contrase&ntilde;a</h5></label>
    <div class="col-lg-3">
      <input type="password" name="password" class="form-control" id="inputEmail1" required>
    </div>
  </div>
                    <br><br><br><br>
  <div class="form-group">
      <label for="inputEmail1" class="col-lg-2 control-label"><h5>Es administrador</h5></label>
    <div class="col-lg-3">
<div class="checkbox">
    <label>
      <input type="checkbox" name="is_admin"> 
    </label>
  </div>
    </div>
  </div>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary">Agregar Usuario</button>
    </div>
  </div>
</form>
	
</div>
</div>
</div>
</div>