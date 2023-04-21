

<?php

if(SessionDoc::getUID()!=""){
		print "<script>window.location='indexDoc.php?view=home';</script>";
}

?>
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
        background-image: url("assets/images/loginDC.png")}
        </style>
<br><br><br><br><br>
<div class="container">
<div class="row">
    	<div class="col-md-4 col-md-offset-4">
    	<?php if(isset($_COOKIE['password_updated'])):?>
    		<div class="alert alert-success">
    		<p><i class='glyphicon glyphicon-off'></i> Se ha cambiado la contraseña exitosamente !!</p>
    		<p>Pruebe iniciar sesion con su nueva contraseña.</p>

    		</div>
    	<?php setcookie("password_updated","",time()-18600);
    	 endif; ?>

<div class="card">
  <div class="card-header" data-background-color="blue">
      <h4 class="title">Acceder a FARMASOL EP</h4>
  </div>
  <div class="card-content table-responsive">
			    	<form accept-charset="UTF-8" role="form" method="post" action="indexDoc.php?view=processloginDoc">
                                <fieldset>
			    	  	<div class="form-group">
                                           
                                                <i class="fa fa-user"></i>
                                             
                                                <input class="form-control"  class="fa fa-calendar" placeholder="Usuario" name="mail" type="text" required>
                                            
                                            
			    		</div>
			    		<div class="form-group">
                                             <i class="fa fa-key"></i>
                                            <input class="form-control" placeholder="Contraseña" name="password" type="password" value="" required>
			    		</div>
			    		<input class="btn btn-primary btn-block" type="submit" value="Iniciar Sesion">
                                        <script type="text/javascript">
                                            
                                        </script>
			    	</fieldset>
			      	</form>
                                        <a href="index.php?view=registrarse" >
                                        <input class="btn btn-facebook btn-block" type="submit" value="Registrarse Administrador">
                                        </a>
                                        <a href="indexDoc.php?view=registrarDoc" >
                                            <input class="btn btn-danger btn-block" type="submit" value="Registrarse Doctores">
                                        </a>
                                </div>
			      	</div>
		</div>
	</div>
    </div>
 </body>
</html>

