<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario para registrarse</title>
    <link rel="stylesheet" href="Recursos/Estilos_Formulario.css">
<style>
    .fondo {
        margin-top: 10px;
        margin-bottom: 20px;
    }
    img {
        width: 150px;
    }
    .Titulo {
        width: 450px;
        margin-top: 50px;
    }
    .preview{
      width: 0px;
      height: auto;
      background-color: gray;

    }

</style>
    <?php
        if(isset($_POST["submit_R"])){
        $Nombre = $_POST["Nombre"];
        $Foto = $_FILES['FotoI']['name'];
        $Apellido = $_POST["Apellido"];
        $Numero = $_POST["Numero"];
        $Fecha_N = $_POST["Fecha_N"];
        $Correo = $_POST["Correo"];
        $Contraseña = $_POST["Contraseña"];
        }
    ?>
    
</head>
<body>
<div class="fondo">

<div class="center">
<div class="Titulo"><h1>Formulario para registrarse</h1></div> 
<img src="Recursos/Userr.png"/>
<hr>
 
</div>

<form action="<?php include('Validaciones_Registro/V_Envio.php') ?>" method="post" enctype="multipart/form-data">

<p>Foto de perfil: (Opcional)</p><br>

<input type="file" accept="image/*" name="FotoI" id="FotoI" value="<?php if(isset($Foto)){echo $Foto;} ?>">

  <p>Nombre:</p> <input type="text" name="Nombre" value="<?php if(isset($Nombre)){echo $Nombre;} ?>" size="80px" placeholder="Ingrese un nombre" autocomplete="off"/><br>
  <?php include('Validaciones_Registro/V_Nombre.php') ?>

  <p>Apellido:</p> <input type="text" name="Apellido" value="<?php if(isset($Apellido)){echo $Apellido;} ?>" size="80px" placeholder="Ingrese un apellido" autocomplete="off"/>
  <?php include('Validaciones_Registro/V_Apellido.php') ?>

  <p>Numero de telefono:</p> <input type="tel" pattern="\([0-9]{3}\) [0-9]{3}[ -][0-9]{4}" title="Un número de teléfono válido debe tener  dígitos, un guión (-) y cuatro dígitos más" name="Numero" value="<?php if(isset($Numero)){echo $Numero;} ?>" size="80px"  placeholder="(XXX) XXX-XXXX" autocomplete="off"/>
  <?php include('Validaciones_Registro/V_Numero.php') ?>

  <p>Fecha de nacimiento:</p> <input type="date" name="Fecha_N" value="<?php if(isset($Fecha_N)){echo $Fecha_N;} ?>" size="80px"/>
  <?php include('Validaciones_Registro/V_Fecha_N.php') ?>

  <p>Correo:</p> <input type="text" name="Correo" value="<?php if(isset($Correo)){echo $Correo;} ?>" size="80px"  placeholder="Ejemplo@gmail.com" autocomplete="off"/>
  <?php include('Validaciones_Registro/V_Correo.php') ?>

  <p>Contraseña:</p> <input type="password" name="Contraseña" value="<?php if(isset($Contraseña)){echo $Contraseña;} ?>" size="80px"  placeholder="********" autocomplete="off"/>
  <?php include('Validaciones_Registro/V_Contraseña.php') ?>

<div class="center"><input type="submit" value="Enviar" class="button" name="submit_R"/>
                    <input type="reset" value="Restablecer" class="button" name="restablecer"/></div> 
                    

    <p class="center">¿Ya tiene una cuenta?<a href="Formulario de inicio de sesion.php"> Inicie sesion pulsando aqui</a></p>


</form>

</div>
<script src="Previsualizar.js"></script>
</body>
</html>
