<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de inicio de sesion</title>
    <link rel="stylesheet" href="Recursos/Estilos_Formulario_I.css">
    <?php
        include('Validaciones_Registro\Variables_V_I.php');
    ?>
</head>
<style>
  body {
    background-image: url(Recursos/FM.png);
    background-repeat: no-repeat;
    background-size: 2000px;
  }
</style>
<body>
<div class="fondo">



<div class="center">
<div class="Titulo"><h1>Formulario de inicio de sesion</h1></div> 
</div>
<img src="Recursos/Userr.png"/>

<form action="<?php if(isset($Nombre_I) and isset($Contraseña_I) and isset($Nombre_Validate) and isset($Contraseña_Validate)) echo 'Consultas.php'; ?>" method="post">

  <p>Nombre:</p> <input type="text" name="Nombre_I" 
  
  
  value="<?php session_name("Nombre"); session_start(); if(isset($_SESSION['Nombre'])){echo $_SESSION['Nombre'];} elseif(isset($Nombre_I)){echo $Nombre_I;} session_destroy();?>" size="80px" placeholder="Ingrese su nombre" autocomplete="off"/><br>

  <?php 
if(isset($_POST["submit_I"]))
{
  if(empty($Nombre_I)){
    echo '<p style="color: red">*Ingrese algun nombre</p>';
  }
}
    ?>
  <p>Contraseña:</p> <input type="password" name="Contraseña_I" value="<?php if(isset($Contraseña_I)){echo $Contraseña_I;} ?>" size="80px"  placeholder="Ingrese su constraseña" autocomplete="off"/>

  <?php 

if(isset($_POST["submit_I"]))
{
  if(empty($Contraseña_I)){
    echo '<p style="color: red">*Ingrese alguna contraseña</p>';
  }

if(!empty($Nombre_I) and !empty($Contraseña_I)){
  if(empty($Nombre_Validate) or empty($Contraseña_Validate)){
  echo '<p style="color: red">*Usuario/Contraseña incorrecto(s)</p>';
  }
}
}

  ?>
<div class="center"><input type="submit" value="Enviar" class="button" name="submit_I"/>
                    <input type="reset" value="Restablecer" class="button" name="restablecer"/></div> 


   <p class="center">¿No tiene una cuenta?<a href="Formulario de registro.php"> Cree una pulsando aqui</a></p>



</form>

</div>
</body>
</html>
