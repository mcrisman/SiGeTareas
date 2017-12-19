<?php require_once('./personal/includelibreriaphp.php');?>
<html> 
<Title>ITareaCrear.php</Title>
<body>
  <table align="center" width="225" cellspacing="2" cellpadding="2" border="0"> 
    <tr><p>Crear Tarea</p></tr>
           <form action="./personal/SCreaTarea.php" method="post">

              <p>Nombre       		      <input type="text" name="nombreTarea"/></p>
              <p>Fecha inicial proyectada     <input type="text" name="fechaInicioProyectada"/></p>
              <p>Fecha final proyectada       <input type="text" name="fechaVenceProyectada"/></p>
              <p>Descripcion                  <input type="text" name="descripcion"/></p>
              <p>Que usuario la hace
                  
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
		        echo '<select name=detecta>?';
     			while($row = mysql_fetch_array($sqlconsulta))
     			{
			 echo '<option value='.$row["nombreUsuario"].'>'.$row["nombreUsuario"].'</option>';
         		}
                        echo '</select>';
  			// Libera los recursos que utilizo en procesar el resultado
                        mysql_free_result($sqlconsulta);
                        // Cierra la conexión al sistema de gestion de base de datos 
     			mysql_close($credenciales);
                     ?>
           <tr>
              <p><input type="Submit" name="enviar" value =" Grabar "/>
              <input type="reset" name="cancelar" value  ="Cancelar"/></p>
           </tr>
     </form>
   </table>
</body>
</html>
