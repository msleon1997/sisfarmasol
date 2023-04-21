<div class="row">
	<div class="col-md-12">
<div class="btn-group pull-right">
<!--<div class="btn-group pull-right">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
    <i class="fa fa-download"></i> Descargar <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="report/clients-word.php">Word 2007 (.docx)</a></li>
  </ul>
</div>
-->
</div>
<div class="card">
  <div class="card-header" data-background-color="blue">
      <h4 class="title">Pacientes</h4>
  </div>
  <div class="card-content table-responsive">
      <a href="index.php?view=nuevopaciente" class="btn btn-default" ><i class='fa fa-male'></i> Nuevo Paciente</a>
    
      


		<?php
                include "conexion.php";
                $por_pagina = 5;
                if(isset($_GET['pagina'])){
                    $pagina= $_GET['pagina'];
                }else{
                    $pagina=1;
                }
                $empieza = ($pagina-1)* $por_pagina;
                $query = "SELECT * FROM pacient LIMIT $empieza, $por_pagina";
                $resultado = mysqli_query($conexion, $query);
		$users = PacientData::getAll();  
              
		if(count($users)>0){
			// si hay usuarios
			?>

			<table class="table table-bordered table-hover">
			<thead class="card-header" data-background-color="blue">
                        <th>Cédula</th>
			<th>Nombre completo</th>
			<th>Direccion</th>
		  <th>Email</th>
			<th>Telefono</th>
			<th>Acciones</th>
			</thead>
			<?php
                                                while ($fila = mysqli_fetch_assoc($resultado)){
//			foreach($users as $user){
				?>
				<tr>
        <td><?php echo $fila['dni']; ?></td>    
				<td><?php echo $fila['name']." ".$fila['lastname']; ?></td>
				<td><?php echo $fila['address']; ?></td>
				<td><?php echo $fila['email']; ?></td>
				<td><?php echo $fila['phone']; ?></td>
				<td style="width:280px;">
				<a href="index.php?view=historialpaciente&id=<?php echo $fila['id'];?>" class="btn btn-default btn-xs">Historial</a>
				<a href="index.php?view=editpaciente&id=<?php echo $fila['id'];?>" class="btn btn-warning btn-xs">Editar</a>
				<a href="index.php?view=delpaciente&id=<?php echo $fila['id'];?>" class="btn btn-danger btn-xs">Eliminar</a>
                                
				</td>
				</tr>
				<?php
                                                }
//			}
			?>
			</table>
                        <div>
                            <?php
                            $query = "SELECT * FROM pacient";
                            $resultado = mysqli_query($conexion, $query);
                            $total_registros = mysqli_num_rows($resultado);
                            $total_paginas = ceil($total_registros/$por_pagina);
                            echo "<nav aria-label='Page navigation example'>";
                            echo "<ul class='pagination'>";
                            echo "<li class='page-item'><a href='index.php?view=pacientes&pagina=1'>".'PRIMERA '. "</a></li>";
                            for($i=1; $i<=$total_paginas; $i++){
                                echo "<li class='page-item'><a href= 'index.php?view=pacientes&pagina=".$i."'>".$i."</a></li>";
                            }
                            echo "<li class='page-item'><a href='index.php?view=pacientes&pagina=$total_paginas'>".'ULTIMA '. "</a></li>";
                            echo "<ul>";
                            echo "</nav>";
                            ?>
                            
                          
                        </div>
			
			</div>
			</div>
			<?php



		}else{
			echo "<p class='alert alert-danger'>No hay pacientes</p>";
		}


		?>


	</div>
</div>
