<?php


include 'conexion.php';
  $consulta = "SELECT
  time_at,
  time_end

  FROM reservation WHERE date_at = 'CURRENT_DATE()' ORDER BY created_at ";

  $resultado = $conexion->query($consulta);
  
  
  if ($resultado->num_rows > 0){
    while ($row = $resultado->fetch_array()) {
      $var1 = $row['time_at'];
      $var2 = $row['time_end'];
    }
  }
  //aqui obtengo los rango de horarios de atencion de cada clinica
  $var1 = new DateTime($var1);
  $var2 = new DateTime($var2);
  $var2 = $var2->modify(' +60 minutes');

  $rangoFechas = new DatePeriod($var1, new DateInterval('PT60M'), $var2);
 $consulta = "SELECT
  MIN(time_at) AS minimo,
  MAX(time_end) AS maximo
  FROM reservation WHERE date_at = CURRENT_DATE() ORDER BY created_at";

  $resultado = $conexion->query($consulta);
  if ($resultado->num_rows > 0){
    while ($row = $resultado->fetch_array()) {
      $hora_inicio = $row['minimo'];
      $hora_fin = $row['maximo'];
    }
  }

 
  //aqui obtengo la hora minima y maxima para mostrar como disponible u ocupado en la tabla.
   $timeIn = new DateTime($hora_inicio);
   $timeOut = new DateTime($hora_fin);

 ?>

<div class="col-sm-4">
 <div class="white-box">
  <h3 class="box-title">HORAS DISPONIBLES</h3>
   <div class="table-responsive">
    <table class="table table-striped">
     <thead>
      <tr>
       <th>HORA</th>
       <th>INGRESAR</th>
      </tr>
     </thead>
     <tbody>
     <?php
     foreach($rangoFechas as $fecha){
      $time = $fecha->format("H:i");
      $arrTimes[] = $time;
      if ($time >= $timeIn->format("H:i") && $time <= $timeOut->format("H:i")){
     ?>
      <tr border: 1px solid black;>
       <td style="background-color: #ffb3b3; color: black"><?=$time?></td>
       <td style="background-color: #ffb3b3;"><a href='#' style='cursor: pointer' class="btn btn-xs btn-rounded btn-success">Disponible</a></td>
      </tr>
      <?php
      }else{
      ?>
      <tr>
       <td style="color: black"><?=$time?></td>
       <td><a href='#' style='cursor: pointer' class="btn btn-xs btn-rounded btn-danger">Ocupado</a></td>
      </tr>
      <?php
      }
     }

     ?>
     </tbody>
    </table>
   </div>
  </div>
</div>