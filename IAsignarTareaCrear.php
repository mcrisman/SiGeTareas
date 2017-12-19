<?php require_once('./personal/includelibreriaphp.php');?>
<html> 
<Title>IAsignarTareaCrear.php</Title>
<body>
  <table align="center" width="225" cellspacing="2" cellpadding="2" border="0"> 
    <tr><p>Asigna Tarea</p></tr>
           <form action="./personal/SCreaAsignarTarea.php" method="post">
		<?php
 	           //conexion a la base de datos
 		   $credenciales=conectarse("localhost","mysql","rojo","");
   		   // carga la sentencia sql 
		
  		   $sqlincorporado = "SELECT nombreUsuario FROM tusuario ORDER BY nombreUsuario ASC"; 
  		   // Ejecuta la sentencia SQL 
  		   $sqlconsulta = mysql_query($sqlincorporado, $credenciales); 
  		   if(!$sqlconsulta) 
    		      die("Error: no se pudo realizar la consulta en el objeto");
  		   // Muestra el contenido del objeto como un malla HTML	
  		   //carga_lista_registros_base_datos_mysql($sqlconsulta); 

                   echo '<p>Que usuario la hace';
		   echo '<select name=detectaNombreUsuario>';
     		   while($row = mysql_fetch_array($sqlconsulta))
     			{
			 echo '<option value='.$row["nombreUsuario"].'>'.$row["nombreUsuario"].'</option>';
         		}
                   echo '</select>';

  		   $sqlincorporado = "SELECT nombreTarea FROM ttarea ORDER BY nombreTarea ASC"; 
  		   // Ejecuta la sentencia SQL 
  		   $sqlconsulta = mysql_query($sqlincorporado, $credenciales); 
  		   if(!$sqlconsulta) 
    		      die("Error: no se pudo realizar la consulta en el objeto");
  		   // Muestra el contenido del objeto como un malla HTML	
  		   //carga_lista_registros_base_datos_mysql($sqlconsulta); 

                   echo '<p>Que tarea realiza';
		   echo '<select name=detectaNombreTarea>';
     		   while($row = mysql_fetch_array($sqlconsulta))
     			{
			 echo '<option value='.$row["nombreTarea"].'>'.$row["nombreTarea"].'</option>';
         		}
                   echo '</select>';

  		   $sqlincorporado = "SELECT nombreEstado FROM testado ORDER BY nombreEstado ASC"; 
  		   // Ejecuta la sentencia SQL 
  		   $sqlconsulta = mysql_query($sqlincorporado, $credenciales); 
  		   if(!$sqlconsulta) 
    		      die("Error: no se pudo realizar la consulta en el objeto");
  		   // Muestra el contenido del objeto como un malla HTML	
		   //carga_lista_registros_base_datos_mysql($sqlconsulta); 

                   echo '<p>A que estado pasa';
		   echo '<select name=detectaNombreEstado>';
     		   while($row = mysql_fetch_array($sqlconsulta))
     			{
			 echo '<option value='.$row["nombreEstado"].'>'.$row["nombreEstado"].'</option>';
         		}
                   echo '</select>';

    		   // Libera los recursos que utilizo en procesar el resultado
                   mysql_free_result($sqlconsulta);
                   // Cierra la conexión al sistema de gestion de base de datos 
    		   mysql_close($credenciales);
               ?>
                   <p>Fecha de asignacion  <input type="text" name="fechaAsignacion"/></p>
                   <p>Fecha de terminacion <input type="text" name="fechaATerminar"/></p>
                   <p>Observacion          <input type="text" name="observacion"/></p>

           <tr>
              <p><input type="Submit" name="enviar" value =" Asignar "/>
              <input type="reset" name="cancelar" value  ="Cancelar"/></p>
           </tr>
     </form>
   </table>
</body>
</html>
