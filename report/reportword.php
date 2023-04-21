
<?php
header("Content-type: application/vmd.ms-word");
header("Content-Disposition: attachment; filename=reporte.doc");
include "conexion.php";
?>
<style>
    @font-face {
  font-family: SourceSansPro;
  src: url(SourceSansPro-Regular.ttf);
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}

a {
  color: #0087C3;
  text-decoration: none;
}

body {
  position: relative;
  width: 21cm;  
  height: 29.7cm; 
  margin: 0 auto; 
  color: #555555;
  background: #FFFFFF; 
  font-family: Arial, sans-serif; 
  font-size: 14px; 
  font-family: SourceSansPro;
}

header {
  padding: 10px 0;
  margin-bottom: 20px;
  border-bottom: 1px solid #AAAAAA;
}

#logo {
  float: left;
  margin-top: 8px;
}

#logo img {
  height: 70px;
}

#company {
  float: right;
  text-align: right;
}


#details {
  margin-bottom: 50px;
}

#client {
  padding-left: 6px;
  border-left: 6px solid #0087C3;
  float: left;
}

#client .to {
  color: #777777;
}

h2.name {
  font-size: 1.4em;
  font-weight: normal;
  margin: 0;
}

#invoice {
  float: right;
  text-align: right;
}

#invoice h1 {
  color: #0087C3;
  font-size: 2.4em;
  line-height: 1em;
  font-weight: normal;
  margin: 0  0 10px 0;
}

#invoice .date {
  font-size: 1.1em;
  color: #777777;
}

table {
  width: 100%;
  border-collapse: collapse;
  border-spacing: 0;
  margin-bottom: 20px;
}

table th,
table td {
  padding: 20px;
  background: #EEEEEE;
  text-align: center;
  border-bottom: 1px solid #FFFFFF;
}

table th {
  white-space: nowrap;        
  font-weight: normal;
}

table td {
  text-align: right;
}

table td h3{
  color: #57B223;
  font-size: 1.2em;
  font-weight: normal;
  margin: 0 0 0.2em 0;
}

table .no {
  color: #FFFFFF;
  font-size: 1.6em;
  background: #57B223;
}

table .desc {
  text-align: left;
}

table .unit {
  background: #DDDDDD;
}

table .qty {
}

table .total {
  background: #57B223;
  color: #FFFFFF;
}

table td.unit,
table td.qty,
table td.total {
  font-size: 1.2em;
}

table tbody tr:last-child td {
  border: none;
}

table tfoot td {
  padding: 10px 20px;
  background: #FFFFFF;
  border-bottom: none;
  font-size: 1.2em;
  white-space: nowrap; 
  border-top: 1px solid #AAAAAA; 
}

table tfoot tr:first-child td {
  border-top: none; 
}

table tfoot tr:last-child td {
  color: #57B223;
  font-size: 1.4em;
  border-top: 1px solid #57B223; 

}

table tfoot tr td:first-child {
  border: none;
}

#thanks{
  font-size: 2em;
  margin-bottom: 50px;
}

#notices{
  padding-left: 6px;
  border-left: 6px solid #0087C3;  
}

#notices .notice {
  font-size: 1.2em;
}

footer {
  color: #777777;
  width: 100%;
  height: 30px;
  position: absolute;
  bottom: 0;
  border-top: 1px solid #AAAAAA;
  padding: 8px 0;
  text-align: center;
}


</style>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>reporte pacientes</title>
<!--    <link rel="stylesheet" href="style.css" media="all" />-->
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="logo.png">
      </div>
      <div id="company">
        <h2 class="name">Farmasol EP</h2>
        <div>27 de Febrero Cuenca-Ecuador</div>
        <div>(07) 2813 467 </div>
        <div><a href="#">mercadeo@farmasol.gob.ec</a></div>
      </div>
      
    </header>
      <div id="details" class="clearfix">
        <div id="client">
         
          <h2 class="name">Lista de Pacientes</h2>
         
        </div>
        
      </div>
    <main>
      
      <table border="0" cellspacing="0" cellpadding="0">
        <thead>
          <tr>
            <th class="no">#</th>
            <th class="no">Cedula</th>
            <th class="no">Nombre completo</th>
            <th class="no">Direccion</th>
            <th class="no">Email</th>
            <th class="no">Telefono</th>
          </tr>
        </thead>
        <?php
                
                
                $query = "SELECT * FROM pacient";
                $resultado = mysqli_query($conexion, $query);
                while ($fila = mysqli_fetch_assoc($resultado)){
//			foreach($users as $user){
				?>
        <tbody>
          <tr>  
                                <td><?php echo $fila['id']; ?></td>   
                                <td><?php echo "0".$fila['dni']; ?></td>    
				<td><?php echo $fila['name']." ".$fila['lastname']; ?></td>
				<td><?php echo $fila['address']; ?></td>
				<td><?php echo $fila['email']; ?></td>
				<td><?php echo $fila['phone']; ?></td>
				
				</tr>
        </tbody>
        <?php
                                                }
//			}
			?>
      </table>
      
      
    </main>
   
  </body>
</html>