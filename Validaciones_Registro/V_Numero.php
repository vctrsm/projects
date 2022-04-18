<?php 

if(isset($_POST['submit_R'])){
  require 'Conexion.php';
  $Numero = $_POST['Numero'];
  
  $seleccionar = "SELECT Numero_Telefono FROM registro WHERE Numero_Telefono = '$Numero' ";
    
     //Consulta
      $query = mysqli_query($conexion,$seleccionar);
    
      //Estructura while para captar los datos de sql y almacenarlos en las variables
      while($Consulta = mysqli_fetch_array($query))
      {
        $Numero_Validate = $Consulta['Numero_Telefono'];
      }  
    
    mysqli_close($conexion);
    } 

if(isset($_POST["submit_R"])){


    if(empty($Numero)){
      $errores = '<p style="color: red">*Ingrese algún número telefónico</p>';
      echo  $errores;
    }
      elseif(!empty($Numero_Validate)){
        $errores = '<p style="color: red">*Ese número de telefono ya está registrado</p>';
        echo  $errores;
      }}
      ?>
