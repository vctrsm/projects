<?php
 if(isset($_POST['submit_R'])){
require 'Conexion.php';
$Nombre = $_POST['Nombre'];

$seleccionar = "SELECT Nombre FROM registro WHERE Nombre = '$Nombre' ";
  
   //Consulta
    $query = mysqli_query($conexion,$seleccionar);
  
    //Estructura while para captar los datos de sql y almacenarlos en las variables

    while($Consulta = mysqli_fetch_array($query))
    {
      $Nombre_Validate = $Consulta['Nombre'];
    }  


  if(empty($Nombre)){ 
    $errores = '<p style="color: red">*Ingrese algun nombre</p>'; 
    echo  $errores;
  }
    elseif(strlen($Nombre) >= 20){
      $errores = '<p style="color: red">*Demasiados caracteres para el nombre</p>';
      echo  $errores;
    }
      elseif(!empty($Nombre_Validate)){
        $errores = '<p style="color: red">*Ese nombre de usuario ya existe</p>';
        echo  $errores;
      }

    mysqli_close($conexion);
 }
     ?>