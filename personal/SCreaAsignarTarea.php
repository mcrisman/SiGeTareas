<?php require_once('includelibreriaphp.php');?>
<?php 
   //conexion a la base de datos
   $credenciales=conectarse("localhost","mysql","rojo","");
   $nombreUsuario=     	    $_POST ["detectaNombreUsuario"];
   $nombreTarea=     	    $_POST ["detectaNombreTarea"];
   $fechaAsignacion=        $_POST ["fechaAsignacion"];
   $fechaATerminar=         $_POST ["fechaATerminar"];
   $nombreEstado=           $_POST ["detectaNombreEstado"];
   $observacion=            $_POST ["observacion"];
   
   // carga la sentencia sql 
   $sqlincorporado = "INSERT INTO tusuarioxttarea (nombreUsuario,nombreTarea,fechaAsignacion,fechaATerminar,nombreEstado,observacion) VALUES ('$nombreUsuario','$nombreTarea','$fechaAsignacion','$fechaATerminar','$nombreEstado','$observacion')";
   //ejecuta la sentencia sql
   $sqlconsulta = mysql_query($sqlincorporado,$credenciales); 
  if(!$sqlconsulta) 
    die("Error: no se pudo realizar la xinsercion en el objeto");
  // Cierra la conexión al sistema de gestion de base de datos 
  mysql_close($credenciales); 
  header("Location:".$_SERVER['HTTP_REFERER']);
?>