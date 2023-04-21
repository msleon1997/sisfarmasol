<?php
	/* Connect To Database*/
	require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
	require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
	$query_perfil=mysqli_query($con,"select * from perfil where id=1");
	$rw=mysqli_fetch_assoc($query_perfil);
	$sql=mysqli_query($con, "select LAST_INSERT_ID(id) as last from facturas order by id desc limit 0,1 ");
	$rws=mysqli_fetch_array($sql);
	$numero=$rws['last']+1;
?>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Script PHP para control de notas de gastos" />
    <meta name="author" content="Obed Alvarado" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title></title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->

    <link href="assets/css/style.css" rel="stylesheet" />
	
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/css/select2.min.css" rel="stylesheet" />
<style type="text/css">
        img[src*="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"]{
            display: none;
        }
    </style>

</head>

<body >
    <div class="container outer-section" >
        
       <form class="form-horizontal" role="form" id="datos_factura" method="post">
        <div id="print-area">
                  <div class="row pad-top font-big">
                
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <strong>E-mail : </strong> <p>comunicacion@farmasol.gob.ec</p>
                    <br />
                    <strong>Teléfonos :<br></strong> <p>07 / 2 817 - 718
                    									<br>	
														07 / 2 885 - 443
														<br>
														07 / 2 813 - 767</p>
					
                   
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4" style="margin-left: 30%">
                    <strong> Dirección : </strong><p>Avenida 10 de Agosto y Adolfo Torres, Cuenca</p>
                    <br />
                   <strong>Sitio web :</strong> <a href="http://www.farmasol.gob.ec" target="_blank">www.farmasol.gob.ec </a>
                </div>

            </div>
          
            
            

            <div class="row ">
			<hr />
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <h2>Detalles del cliente :</h2>
                     <select class="cliente form-control" name="cliente" id="cliente" required>
						<option value="">Selecciona el cliente por numero de cédula</option>
					</select>
                     <h4><strong>Nº Cédula: </strong><span id="dni"></span></h4>
                    <h4><strong>Nombre: </strong><span id="name"></span> <span id="lastname"></span></h4>
                    <h4><strong>Dirección: </strong><span id="address"></span></h4>
                    
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <h2>Detalles de la factura:</h2>
                    <h4><strong>Factura #: </strong><?php echo $numero;?></h4>
                    <h4><strong>Fecha: </strong> <?php echo date("d/m/Y");?></h4>
					<h4><strong>E-mail: </strong><span id="email"></span></h4>
                    <h4><strong>Teléfono: </strong><span id="phone"></span></h4>
					
                  
                </div>
            </div>
            
         
            <div class="row">
			<hr />
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="table-responsive">
                        <table class="table table-striped  table-hover">
                            <thead>
                                <tr>
                                    <th class='text-center'>Item</th>
									<th>Descripción</th>
									<th class='text-center'>Cantidad</th>
                                    <th class='text-right'>Precio unitario</th>
                                    <th class='text-right'>Total</th>
									<th class='text-right'></th>
                                </tr>
                            </thead>
                            <tbody class='items'>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
           
           
            
		
        </div>
       <div class="row"> <hr /></div>
        <div class="row pad-bottom  pull-right">
		
            <div class="col-lg-12 col-md-12 col-sm-12">
                <button type="submit" class="btn btn-success ">Guardar factura</button>
             
              

                
            </div>
        </div>
		</form>
    </div>
	<form class="form-horizontal" name="guardar_item" id="guardar_item">
			<!-- Modal -->
			<div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document">
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Nuevo Ítem</h4>
				  </div>
				  <div class="modal-body">
					
					  <div class="row">
						<div class="col-md-12">
							<label>Descripción del producto/servicio</label>
							<select name="descripcion" class="form-control" id="descripcion" required>
							  <option value="" >
							-- SELECCIONE --
							</option>
							   <option>Servicio de Odontología</option>
							    <option>Servicio de Laboratorio</option>
							</select>
							
							<input type="hidden" class="form-control" id="action" name="action"  value="ajax">
						</div>
						
					  </div>

					  <div class="row">
						<div class="col-md-6">
							<label>Cantidad</label>
							<input type="number" class="form-control" id="cantidad" name="cantidad"  required>
						</div>
						
						<div class="col-md-6">
							<label>Precio unitario</label>
						  <input type="text" class="form-control" id="precio" name="precio" required>
						</div>
						
					  </div>
				
					
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
					<button type="submit" class="btn btn-info" >Guardar</button>
					<button type="reset"  class="btn btn-default" value="limpiar">Limpiar</button>
					
				  </div>
				</div>
			  </div>
			</div>
	</form>
	
   
</body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/VentanaCentrada.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js"></script>
	<script type="text/javascript" src="js/VentanaCentrada.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $( ".cliente" ).select2({        
    ajax: {
        url: "ajax/clientes_json.php",
        dataType: 'json',
        delay: 250,
        data: function (params) {
            return {
                q: params.term // search term
            };
        },
        processResults: function (data) {
            return {
                results: data
            };
        },
        cache: true
    },
    minimumInputLength: 2
}).on('change', function (e){
		var dni = $('.cliente').select2('data')[0].dni;
		var name = $('.cliente').select2('data')[0].name;
		var lastname = $('.cliente').select2('data')[0].lastname;
		var email = $('.cliente').select2('data')[0].email;
		var telefono = $('.cliente').select2('data')[0].phone;
		var direccion = $('.cliente').select2('data')[0].address;
		$('#dni').html(dni);
		$('#name').html(name);
		$('#lastname').html(lastname);
		$('#email').html(email);
		$('#phone').html(telefono);
		$('#address').html(direccion);
})
});

	function mostrar_items(){
		var parametros={"action":"ajax"};
		$.ajax({
			url:'ajax/items.php',
			data: parametros,
			 beforeSend: function(objeto){
			 $('.items').html('Cargando...');
		  },
			success:function(data){
				$(".items").html(data).fadeIn('slow');
		}
		})
	}
	function eliminar_item(id){
		$.ajax({
			type: "GET",
			url: "ajax/items.php",
			data: "action=ajax&id="+id,
			 beforeSend: function(objeto){
				 $('.items').html('Cargando...');
			  },
			success: function(data){
				$(".items").html(data).fadeIn('slow');
			}
		});
	}
	
	$( "#guardar_item" ).submit(function( event ) {
		parametros = $(this).serialize();
		$.ajax({
			type: "POST",
			url:'ajax/items.php',
			data: parametros,
			 beforeSend: function(objeto){
				 $('.items').html('Cargando...');
			  },
			success:function(data){
				$(".items").html(data).fadeIn('slow');
				$("#myModal").modal('hide');
			}
		})
		
	  event.preventDefault();
	})
	$("#datos_factura").submit(function(){
		  var cliente = $("#cliente").val();
		  var descripcion = $("#descripcion").val();
		 
		  
		  if (cliente>0)
		 {
			VentanaCentrada('./pdf/documentos/factura.php?cliente='+cliente+'&descripcion='+descripcion,'Presupuesto','','1024','768','true');	
		 } else {
			 alert("Selecciona el cliente");
			 return false;
		 }
		 
	 });
		

		mostrar_items();
		
		
</script>
</html>
