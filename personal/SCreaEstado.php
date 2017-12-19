<?php require_once('includelibreriaphp.php');?>
<?php 
   //conexion a la base de datos
   $credenciales=conectarse("localhost","mysql","rojo","");
   $nombreEstado=     $_POST ["nombreEstado"];

   // carga la sentencia sql 
   $sqlincorporado = "INSERT INTO testado (nombreEstado) VALUES ('$nombreEstado')";
   //ejecuta la sentencia sql
   $sqlconsulta = mysql_query($sqlincorporado,$credenciales); 
  if(!$sqlconsulta) 
    die("Error: no se pudo realizar la xinsercion en el objeto");
  // Cierra la conexión al sistema de gestion de base de datos 
  mysql_close($credenciales); 
  header("Location:".$_SERVER['HTTP_REFERER']);
?>