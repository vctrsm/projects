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
   <link rel="stylesheet" href="Recursos/Estilos_Formulario.css"/>
   <style>
      .center{
            width: 500px;
            height: auto;
            display: inline;
      }
      p {
         display: inline;
      }
      body{
         height: 630px;
         padding-top: 80px;
      }
   </style>
</head>
<body>
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
   <button class="buttonCS"><a href = "http://localhost:809/Proyectos/Menu.php" style="text-decoration: none; color: white">Atras</a></button>
   </form>
   </body>

<?php
print('<div class="center"');

if(isset($_POST['submit'])){
$X = $_POST["X"];
$Z = $X;

print('<br>'.$X);
while($Z > 1){
    print('<p>'.'+'.(--$Z).'</p>');
    $X += $Z;
 }
print(' = '.$X.'</div>');
}

?>





</html>



