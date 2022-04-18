<?php 
session_name("loginUsuario"); session_start();
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
    <title>Entrada para el promedio académico</title>
    <link rel="stylesheet" href="http://localhost:809/Proyectos/Recursos/Estilos_Formulario.css">
</head>
<style>
  .fondo {
    margin-top: 30px;
    margin-bottom: 60px;
  }
  img {
        border-radius: 30%;
      }
</style>

<?php
if(isset($_POST["submit"]))
{
$Nombre_A = $_POST["Nombre_A"];

$Nombre_M = $_POST["Nombre_M"];

$Nota1 = $_POST['Nota1'];
$Nota2 = $_POST['Nota2'];
$Nota3 = $_POST['Nota3'];
}
?>
<body>
<div class="MenuC">
<img src="
<?php if(!empty($_SESSION['Foto'])){echo $_SESSION['Foto']; } else{echo 'http://localhost:809/Proyectos/Recursos/Userr.png';} ?>
        "/>
          <?php
echo '<p style="text-align: center">'.$_SESSION['Nombre'].'</p> '?>
<p style="text-align: center"><button class="buttonAC"><a href="http://localhost:809/Proyectos/Herramientas/Actualizar.php">Cambiar datos</a></button><br></p>
<p style="text-align: center"><button class="buttonCS"><a href="http://localhost:809/Proyectos/Logout.php">Cerrar sesion</a></button></p>

</div>
<div class="fondo">

<div class="center">
  <h1>Calcular el promedio academico</h1>
</div>


<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">

  <p>Nombre_A:</p> <input type="text" name="Nombre_A" value="<?php if(isset($Nombre_A)){echo $Nombre_A;} ?>"  size="80px" placeholder="Ingrese el nombre" autocomplete="off"/><br>

  <p>Nombre_M:</p> <input type="text" name="Nombre_M"  size="80px" value="<?php if(isset($Nombre_M)){echo $Nombre_M;} ?>" placeholder="Ingrese la materia" autocomplete="off"/>

  <p>Nota1:</p> <input type="number" name="Nota1" size="80px" value="<?php if(isset($Nota1)){echo $Nota1;} ?>"  placeholder="Ingrese la primera nota" autocomplete="off"/>

  <p>Nota2:</p> <input type="number" name="Nota2" size="80px" value="<?php if(isset($Nota2)){echo $Nota2;} ?>"  placeholder="Ingrese la segunda nota" autocomplete="off"/>

  <p>Nota3:</p> <input type="number" name="Nota3" size="80px" value="<?php if(isset($Nota3)){echo $Nota3;} ?>"  placeholder="Ingrese la tercera nota" autocomplete="off"/>


<div class="center">
<input type="submit" value="Calcular" class="button" name="submit"/>
<button class="buttonCS" style="margin-left: 400px; "><a href = "http://localhost:809/Proyectos/Herramientas/Menu.php" style="text-decoration: none; color: white; ">Atras</a></button>
</div> 




<?php 
include("Validacion del promedio.php")
?>

</form>

</div>
</body>
</html>
