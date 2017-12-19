<?php 

  // Devuelve todas las filas de una consulta a una tabla de la base de datos en forma de malla en HTML 

  function consulta_registros_base_datos_mysql($c,$num) 
  {


     if($num==9)
     {
        include('TConsultaAsignacionTarea.html');
        $numero = 0;
        while($row = mysql_fetch_array($c))
        {
          echo "<tr><td width=\"25%\"><font face=\"verdana\">" . 
	    $row["nombreUsuario"] . "</font></td>";	
          echo "<td width=\"25%\"><font face=\"verdana\">" . 
	    $row["nombreTarea"] . "</font></td>";
          echo "<td width=\"25%\"><font face=\"verdana\">" . 
	    $row["fechaAsignacion"] . "</font></td>";   
          echo "<td> width=\"25%\"><font face=\"verdana\">" . 
	    $row["fechaATerminar"] . "</font></td>";
          echo "<td width=\"25%\"><font face=\"verdana\">" . 
	    $row["nombreEstado"] . "</font></td>";
          echo "<td width=\"25%\"><font face=\"verdana\">" . 
	    $row["observacion"] . "</font></td>";    
          echo "<td> width=\"25%\"><font face=\"verdana\">" . 
	    $row["fechaInicioProyectada"] . "</font></td>";
          echo "<td width=\"25%\"><font face=\"verdana\">" . 
	    $row["fechaVenceProyectada"] . "</font></td>";
          echo "<td width=\"25%\"><font face=\"verdana\">" . 
	    $row["descripcion"] . "</font></td></tr>";    
          $numero++;
         }
      }
      echo "<tr><td colspan=\"15\"><font face=\"verdana\"><b>Registros: " . $numero . "</b></font></td></tr>";
     
 }

  function conectarse($url,$db,$usuario,$password)  
  {  
     // Se conecta al SGBD 
    if(!($credenciales = mysql_connect($url,$usuario,$password))) 
      {
       die("Error no se puede acceder al SMDB");
       exit();
      }
    // Selecciona la base de datos 
    if(!mysql_select_db($db,$credenciales))
      {
       die("Error al acceder a la base de datos mysql"); 
       exit();
      }
    return $credenciales;  
   } 

  // Devuelve cada fila con un registro para cargar la lista en HTML 
  function carga_lista_registros_base_datos_mysql($c) 
  { 
       echo '<select name=detecta>';
       while($row = mysql_fetch_array($c))
        {
         echo '<option value='.$row["nombreUsuario"].'>'.$row["nombreUsuario"].'</option>';
        }
       echo '</select>';

  }

?>
