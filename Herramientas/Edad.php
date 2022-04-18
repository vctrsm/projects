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
    <title>Herramienta para la edad</title>
    <link rel="stylesheet" href="http://localhost:809/Proyectos/Recursos/Estilos_Formulario.css">
    <style>

    h2 {
      margin: 10px;
    }
      .center {
        height: auto;
      }
      input.button {
        margin: 10px;
      }
      .fondo {
        margin-top: 120px;
        margin-bottom: 150px;
      }
      .Titulo {
        width: 600px;
      }
      img {
        border-radius: 30%;
      }

    </style>
     <?php
  if(isset($_POST['submit_e'])){
      $Nombre = $_POST['Nombre'];
      $Fecha_Na = $_POST['Fecha_Na'];
      $Fecha_Ac = date("Y-m-d");
  }
      ?>
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

<div class="center">
<div class="Titulo"><h1>¡Descubre la edad de una persona!</h1></div> 
</div>

<hr>



<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">

  <p>Nombre:</p> <input type="text" name="Nombre" value="<?php if(isset($Nombre)){echo $Nombre;} ?>" size="80px" placeholder="Ingrese el nombre"/><br>
  <?php
  if(isset($_POST['submit_e'])){
    if(empty($Nombre)){ 
        $errores = '<p style="color: red">*Ingrese algun nombre</p>'; 
        echo  $errores;
      }
  }
  ?>
  <p>Su fecha de nacimiento:</p> <input type="date" name="Fecha_Na" value="<?php if(isset($Fecha_Na)){echo $Fecha_Na;} ?>" size="80px"/>
  <?php 
  if(isset($_POST["submit_e"])){

    if(empty($Fecha_Na)){
      $errores = '<p style="color: red">*Seleccione alguna fecha</p>';
      echo '<p style="color: red">*Seleccione alguna fecha</p>';
   }}


 


   if(isset($_POST["submit_e"]) and !empty($Nombre) and !empty($Fecha_Na)){

    function edad($Fecha_N,$Fecha_A){
        $Edad = ((int)$Fecha_A-(int)$Fecha_N);
        return $Edad;
    }
       echo '<h2><div class="center">La edad de '.$Nombre.' es '.edad($Fecha_Na,$Fecha_Ac).' años'.'</div></h2>';
}
session_abort();
      
       
       
       
  
?>






  <div class="center"><input type="submit" value="Enviar" class="button" name="submit_e"/>
                    <input type="reset" value="Restablecer" class="button" name="restablecer"/>
<div class="CS">               
<button class="buttonCS"><a href = "http://localhost:809/Proyectos/Herramientas/Menu.php" style="text-decoration: none; color: white">Atras</a></button>
</div>
</div> 


                    


</form>

</div>
</body>
</html>