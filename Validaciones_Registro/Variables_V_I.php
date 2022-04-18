<?php

if(isset($_POST["submit_I"])){
        $Nombre_I = $_POST["Nombre_I"];
        $Contraseña_I = $_POST["Contraseña_I"];
        
        require 'Conexion.php';

      mysqli_select_db($conexion,"datos_de_los_registrados"); 

      $seleccionar = "SELECT Nombre,Contraseña FROM registro WHERE Nombre = '$Nombre_I' and Contraseña ='$Contraseña_I'";

      $query = mysqli_query($conexion,$seleccionar);

      while($Consulta = mysqli_fetch_array($query))
      {
        if(isset($Consulta['Nombre']) and isset($Consulta['Contraseña'])){
        $Nombre_Validate = $Consulta['Nombre'] and $Contraseña_Validate = $Consulta['Contraseña'];
        }
}  } 

?>