<?php
if(isset($_POST["submit_R"]))
{

  if(empty($Apellido)){
    $errores = '<p style="color: red">*Ingrese algún apellido</p>';
    echo  $errores;
  }
    elseif(strlen($Apellido) >= 20){
      $errores = '<p style="color: red">*Demasiados carácteres para el apellido</p>';
      echo  $errores;
    }} 
?>