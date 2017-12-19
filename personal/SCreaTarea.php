<?php require_once('includelibreriaphp.php');?>
<?php 
   //conexion a la base de datos
   $credenciales=conectarse("localhost","mysql","rojo","");
   $nombreTarea=     	    $_POST ["nombreTarea"];
   $fechaInicioProyectada=  $_POST ["fechaInicioProyectada"];
   $fechaVenceProyectada=   $_POST ["fechaVenceProyectada"];
   $descripcion=            $_POST ["descripcion"];
   $nombreUsuario=          $_POST ["detecta"];
   
   // carga la sentencia sql 
   $sqlincorporado = "INSERT INTO ttarea (nombreTarea,fechaInicioProyectada,fechaVenceProyectada,descripcion,nombreUsuario) VALUES ('$nombreTarea','$fechaInicioProyectada','$fechaVenceProyectada','$descripcion','$nombreUsuario')";
   //ejecuta la sentencia sql
   $sqlconsulta = mysql_query($sqlincorporado,$credenciales); 
  if(!$sqlconsulta) 
    die("Error: no se pudo realizar la xinsercion en el objeto");
  // Cierra la conexión al sistema de gestion de base de datos 
  mysql_close($credenciales); 
  header("Location:".$_SERVER['HTTP_REFERER']);
?>