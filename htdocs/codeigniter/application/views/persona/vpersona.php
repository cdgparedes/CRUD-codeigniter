<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<H1 	center>Esto  es  tomado del curso de codeigniter </H1>
 <form action="<?php echo base_url(); ?>persona/guardar"  method="POST">
 	<table>
 	<tr>
 			<td> <label> ID Persona </label></td>
 			<td><input type="text" name="txtID"> </td>
 			
 		</tr>
 	<tr>
 			<td> <label> Dni </label></td>
 			<td><input type="text" name="txtDNI"> </td>
 			
 		</tr>
 		<tr>
 			<td> <label> Nombre </label></td>
 			<td><input type="text" name="txtNombre"> </td>
 			
 		</tr>
 		<tr>
 			<td> <label> Ap paterno </label></td>
 			<td><input type="text" name="txtApPaterno"> </td>
 			
 		</tr>
 		<tr>
 			<td> <label> Ap Materno </label></td>
 			<td><input type="text" name="txtApMaterno"> </td>
 			
 		</tr>
 		<tr>
 			<td> <label> email </label></td>
 			<td><input type="email" name="txtEmail"> </td>
 			
 		</tr>
 		
 		<tr>
 			<td> <label> Fecha nacimiento </label></td>
 			<td><input type="date" name="datFecNac"> </td>
 			
 		</tr>

 		<tr>
 			<td> <label>Usuario</label></td>
 			<td><input type="text" name="txtusuario"> </td>
 			
 		</tr>
 		<tr>
 			<td> <label>Código Usuario</label></td>
 			<td><input type="text" name="txtcodigousuario"> </td>
 			
 		</tr>


 		<tr>
 			<td> <label> Contraseña</label></td>
 			<td><input type="password" name="contraseña"> </td>
 			
 		</tr>
 		<tr>

 			<td colspan="2"><input type="submit" value="guardar"></td>
 			
 			
 		</tr>

 	</table>
 </form>

 <a href="<?php echo base_url();?>clogin">Loguearse</a><!--Se va al metodo index por defecto ya que no le espesificamos a que metodo ir -->

</body>
</html>