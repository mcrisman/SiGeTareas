<?php require_once('includelibreriaphp.php');?>
<html>
<body>
<title>SConsultaAsignarTarea.php</title>
<p>Consulta de Asignacion de Tareas</p>
<?php 
 //conexion a la base de datos
 $credenciales=conectarse("localhost","mysql","rojo","");
   // carga la sentencia sql 
  $sqlincorporado = "SELECT tusuarioxttarea.nombreUsuario,
                            tusuarioxttarea.nombreTarea,
			    tusuarioxttarea.fechaAsignacion,
			    tusuarioxttarea.fechaATerminar,
			    tusuarioxttarea.nombreEstado,
                            tusuarioxttarea.observacion,
                            ttarea.fechaInicioProyectada,
                            ttarea.fechaVenceProyectada,
			    ttarea.descripcion
                        FROM tusuarioxttarea,tusuario,ttarea
                        WHERE ((tusuarioxttarea.nombreTarea=ttarea.nombreTarea)
                            AND (tusuarioxttarea.nombreUsuario=tusuario.nombreUsuario))
                        ORDER BY tusuarioxttarea.nombreTarea ASC";
  // Ejecuta la sentencia SQL 
  $sqlconsulta = mysql_query($sqlincorporado, $credenciales); 
  if(!$sqlconsulta) 
    die("Error: no se pudo realizar la consulta en el objeto");
  // Muestra el contenido del objeto como un malla HTML	
  consulta_registros_base_datos_mysql($sqlconsulta,9); 
  // Libera los recursos que utilizo en procesar el resultado
  mysql_free_result($sqlconsulta);
  // Cierra la conexión al sistema de gestion de base de datos 
  mysql_close($credenciales); 
?> 
</body> 
</html>
