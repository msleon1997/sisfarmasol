<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
       
    <script  required src='https://www.google.com/recaptcha/api.js'></script>
    </head>
    <body>
        <style type="text/css">
        body {
        background-image: url("assets/fondo.jpg")}
        </style>
<br><br><br><br><br>
<div class="container">
<div class="row">
    	<div class="col-md-4 col-md-offset-4">
    	
<div class="card">
  <div class="card-header" data-background-color="blue">
      <h4 class="title">Registrate a FARMASOL EP</h4>
  </div>
  <div class="card-content table-responsive">
			    	<form accept-charset="UTF-8" role="form" method="post" action="index.php?view=registrar">
                                <fieldset>
			    	  	<div class="form-group">
                                           
                                               
                                             
                                                <input class="form-control"  class="fa fa-calendar" placeholder="Nombre" name="name" type="text" required>
			    		</div>
                                        <div class="form-group">
                                           
                                               
                                             
                                                <input class="form-control"  class="fa fa-calendar" placeholder="Apellido" name="lastname" type="text" required>
                                            
                                            
			    		</div>
                                        <div class="form-group">
                                             <i class="fa fa-user"></i>
                                             <input class="form-control" placeholder="Usuario" name="username" type="text"  required>
			    		</div>
                                    
			    		<div class="form-group">
                                             <i class="fa fa-key"></i>
                                            <input class="form-control" placeholder="Contraseña" name="password" type="password"  required>
			    		</div>
			    		
                                        <input class="btn btn-primary btn-block" type="submit" value="Registrarse">
                                        
			    	</fieldset>
			      	</form>
                                        <a href="index.php?view=login" >
                                        <input class="btn btn-facebook btn-block" type="submit" value="Ir a Iniciar Sesion">
                                        </a>
                                        
                                </div>
			      	</div>
		</div>
	</div>
    </div>
 </body>
</html>


