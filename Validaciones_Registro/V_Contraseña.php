<?php if(isset($_POST["submit_R"])){


        if(empty($Contraseña)){
          $errores = '<p style="color: red">*Ingrese alguna contraseña</p>';
          echo  $errores;
        }
        elseif(strlen($Contraseña) < 8){
          $errores = '<p style="color: red">*La contraseña debe tener al menos 8 carácteres</p>';
          echo  $errores;
        }}
?>