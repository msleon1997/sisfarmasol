<div class="row">
	<div class="col-md-12">

<div class="card">
  <div class="card-header" data-background-color="blue">
      <h4 class="title">Usuarios</h4>
  </div>
  <div class="card-content table-responsive">


	<a href="index.php?view=nuevousuario" class="btn btn-default"><i class='fa fa-user'></i> Nuevo Usuario</a>
<br>
		
		<?php

		$users = UserData::getAll();
		if(count($users)>0){
			// si hay usuarios
			?>
			<table class="table table-bordered table-hover">
			<thead class="card-header" data-background-color="blue">
			<th>Nombre completo</th>
			<th>Nombre Usuario</th>
			<th>Email</th>
			<th>Activo</th>
			<th>Admin</th>
			<th>Acciones</th>
			</thead>
			<?php
			foreach($users as $user){
				?>
				<tr>
				<td><?php echo $user->name." ".$user->lastname; ?></td>
				<td><?php echo $user->username; ?></td>
                                <td><?php echo $user->email; ?></td>
				
				<td>
					<?php if($user->is_active):?>
						<i class="fa fa-check"></i>
					<?php endif; ?>
				</td>
				<td>
					<?php if($user->is_admin):?>
						<i class="fa fa-check"></i>
					<?php endif; ?>
				</td>
				<td style="width:30px;"><a href="index.php?view=editusuario&id=<?php echo $user->id;?>" class="btn btn-warning btn-xs">Editar</a></td>
				</tr>
				<?php

			}
			?>
			</table>
			<?php



		}else{
			// no hay usuarios
		}


		?>

</div>
</div>
	</div>
</div>
