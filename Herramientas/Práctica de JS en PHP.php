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
   <title>Decremento</title>
   <link rel="stylesheet" href="http://localhost:809/Proyectos/Recursos/Estilos_Formulario.css"/>
   <style>
      .center{
            width: 500px;
            height: auto;
            display: inline;
      }
      .fondo {
        margin-top: 120px;
        margin-bottom: 250px;
      }
      img {
        border-radius: 30%;
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
<p style="text-align: center"><button class="buttonCS"><a href="http://localhost:809/Proyectos/Logout.php">Cerrar sesion</a></button></p>

</div>
   <div class="fondo">
   <h2>Algoritmo para sumar los números por debajo</h2>
   <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
   <p>Numero a sumar:</p><input type="number" name="X" value="<?php if(isset($_POST["X"])) echo $_POST["X"] ?>"/>
   <?php
   if(isset($_POST['submit'])){
      if(empty($_POST['X'])){
         $errores = '<p style="color: red">*Ingrese algun numero</p>'; 
    echo  $errores;
  }
      }
   ?>
   <input type="submit" name="submit" value="Subir"/>
   </form>
<?php
print('<div class="center"');

if(isset($_POST['submit'])){
$X = $_POST["X"];
$Z = $X;

print('<br>'.$X);
while($Z > 1){
    print('+'.(--$Z));
    $X += $Z;
 }
print(' = '.$X);
}
print('</div>');
?>
<button class="buttonCS" style="margin-left: 500px; margin-top: 20px;"><a href = "http://localhost:809/Proyectos/Herramientas/Menu.php" style="text-decoration: none; color: white;">Atras</a></button>
</body>
</html>



