<?php 

if(isset($_POST['submit_R'])){
  require 'Conexion.php';
  $Correo = $_POST['Correo'];
  
  $seleccionar = "SELECT Correo FROM registro WHERE Correo = '$Correo' ";
    
     //Consulta
      $query = mysqli_query($conexion,$seleccionar);
    
      //Estructura while para captar los datos de sql y almacenarlos en las variables
      while($Consulta = mysqli_fetch_array($query))
      {
        $Correo_Validate = $Consulta['Correo'];
      }  
    
    mysqli_close($conexion);
    } 

if(isset($_POST["submit_R"])){

    if(empty($Correo)){
      $errores = '<p style="color: red">*Ingrese algun correo</p>';
      echo  $errores;
    }
    elseif(strlen($Correo) >= 40){
      $errores = '<p style="color: red">*Demasiados caracteres para el correo</p>';
      echo  $errores;
    }
    elseif(!filter_var($Correo,FILTER_VALIDATE_EMAIL)){
      $errores = '<p style="color: red">*Ingrese bien el correo</p>';
      echo  $errores;
    }
    elseif(!empty($Correo_Validate)){
      $errores = '<p style="color: red">*Ese correo ya esta registrado</p>';
      echo  $errores;
    }}

?>