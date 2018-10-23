<!DOCTYPE html>
<HTML>
<head>		
<title> HOLA</title>
</head>
<body>
<form action="<?php echo base_url();?>persona/actualizardatos" method="POST">
<?php echo $this->session->userdata('s_usuario')?>
<h1>Ingresó a update persona </h1>
<input type="text" name="txtnombre"  placeholder="Nombre"><br><br>
<input type="text" name="txtpaterno" placeholder="Apellido Paterno"><br><br>
<input type="text" name="txtmaterno" placeholder="Apellido Materno"><br><br>
<input type="text" name="txtemail"   placeholder="Correo"><br><br>
<input type="submit" value="actualizar">
</form>

<form action="<?php echo base_url();?>persona/eliminarpersona" method="POST">

<h1>Eliminar por id </h1>
<input type="text" name="txtIdPersona" placeholder="Id"><br><br>

<input type="submit" value="Eliminar">
</form>
</body>
</HTML>
