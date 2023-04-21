
<!doctype html>
<html lang="en">
<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
<link href="assets/css/material-dashboard.css" rel="stylesheet"/>

<body>
<?php if(isset($_SESSION["user_id"])):?>
  
<?php 
  // puedo cargar otras funciones iniciales
  // dentro de la funcion donde cargo la vista actual
  // como por ejemplo cargar el corte actual
  View::load("login");

?>

<?php else:?>
  <?php 
  View::load("login");

?>

<?php endif;?>
</body>

 


</html>

