<?php 
session_name("loginUsuario"); session_start();

if (!isset($_SESSION['count']))
{
  $_SESSION['count'] = 1;
}
else
{
  ++$_SESSION['count'];
}


if($_SESSION['autentificado'] != 'SI'){
  session_destroy();
  header('Location: http://localhost:809/Proyectos/Formulario%20de%20inicio%20de%20sesion.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu para usuarios</title>
    <link rel="stylesheet" href="http://localhost:809/Proyectos/Recursos/Estilos_Formulario.css">
    <style>

    .fondo{
      margin-top: 90px;
      margin-bottom: 300px;
    }
    .Titulo {
      margin-top: 40px;
      margin-right: 120px;
    }
    img {
      border-radius: 100px;
    }
    </style>
</head>
<body>
<div class="MenuC">
<img src="
<?php if(!empty($_SESSION['Foto'])){echo $_SESSION['Foto']; } else{echo 'http://localhost:809/Proyectos/Recursos/Userr.png';} ?>
        "/>
          <?php
echo '<p style="text-align: center">'.$_SESSION['Nombre'].'</p>'?>
<p style="text-align: center"><button class="buttonAC"><a href="http://localhost:809/Proyectos/Herramientas/Actualizar.php">Cambiar datos</a></button><br></p>
<p style="text-align: center"><button class="buttonCS"  ><a href="http://localhost:809/Proyectos/Logout.php">Cerrar sesion</a></button></p>

</div>
<div class="fondo">

<div class="center">
<div class="Titulo"><h1>Menu de herramientas</h1></div> .

<?php

if($_SESSION['count'] == 1){echo '<script>  alert("Bienvenido/a de vuelta, '.$_SESSION['Nombre'].'"); </script>';
}

?>

<hr>

<ul type="circle">
<li><p><a href="http://localhost:809/Proyectos/Herramientas/Documento lenguajes/Lenguajes de Programación_Ronny_Jr. (1).php">Documento sobre los lenguajes de programación:</a></p>
<li><p><a href="Promedio.php">Promedio académico:</a></p>
<li><p><a href="http://localhost:809/Proyectos/Herramientas/Edad.php">Descubre la edad de una persona</a></p>
<li><p><a href="http://localhost:809/Proyectos/Herramientas/Calculadora.php">Calculadora</a></p>
<li><p><a href="Práctica de JS en PHP.php">Numero que decrece</a></p>
</ul>
</div>


                    


</form>

</div>
</body>
</html>