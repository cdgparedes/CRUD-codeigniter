<!DOCTYPE html>	

<html>
<head>
	<title> Esto es un Login</title>
</head>
<body>

 <form action="<?php echo base_url();?>clogin/ingresar" method="POST">
 
<table>
  <tr>
      <td><label>Usuario</label></td>
       <td><input type="text"   name="txtusuario"> </input></td>
   </tr>
   

    <tr>
      <td><label>Contraseña</label></td>
       <td><input type="password"   name="txtclave"> </input></td>
   </tr> 

   <tr>
    
       <td><input type="submit"   name="ingresar"> </input></td>
   </tr>   

 </table>  
 </form>
 <?php echo $mensaje;?>
</body>
</html>