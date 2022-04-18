<?php
session_name("loginUsuario"); 
session_start();
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
    <title>Actualizar</title>
    <link rel="stylesheet" href="http://localhost:809/Proyectos/Recursos/Estilos_Formulario.css"/>
    <?php
        if(isset($_POST["submit"])){
          $Nombre = $_POST["Nombre"];
          $Foto = $_POST["Foto"];
          $Apellido = $_POST["Apellido"];
          $Numero = $_POST["Numero"];
          $Fecha_N = $_POST["Fecha_N"];
          $Correo = $_POST["Correo"];
          $Contraseña = $_POST["Contraseña"];
          $NombreC = $_SESSION['NombreV'];
      }  
    ?>
    <style>

    </style>
</head>
<body>
<div class="fondo">

<div class="center">
  <h1>Cambiar sus datos</h1>
</div>

<form action="<?php if(!empty($Nombre) or !empty($Apellido) or !empty($Numero) or !empty($Correo)  or !empty($Contraseña)  or !empty($Fecha_N) or !empty($Foto_Url)){$_SERVER['PHP_SELF']; } ?>" method="post">

<p>Foto de perfil: (Opcional) </p> <input type="file" name="Foto" value="<?php if(isset($Foto)) {echo $Foto;}else{echo $_SESSION['Foto'];} ?>" >

  <p>Nombre: </p> <input type="text" name="Nombre" value="<?php if(isset($Nombre)){echo $Nombre;}else{echo $_SESSION['NombreV'];}?>" size="80px" placeholder="Ingrese un nombre" autocomplete="off"/><br>


  <p>Apellido: </p> <input type="text" name="Apellido" value="<?php if(isset($Apellido)){echo $Apellido;}else{echo $_SESSION['ApellidoV'];} ?>" size="80px" placeholder="Ingrese un apellido" autocomplete="off"/>


  <p>Numero de telefono: </p> <input type="tel" pattern="\([0-9]{3}\) [0-9]{3}[ -][0-9]{4}" title="Un número de teléfono válido debe tener  dígitos, un guión (-) y cuatro dígitos más" name="Numero" value="<?php if(isset($Numero)){echo $Numero;}else{echo $_SESSION['NumeroV'];} ?>" size="80px"  placeholder="(XXX) XXX-XXXX" autocomplete="off"/>


  <p>Fecha de nacimiento: </p> <input type="date" name="Fecha_N" value="<?php if(isset($Fecha_N)){echo $Fecha_N;}else{echo $_SESSION['Fecha_NV'];} ?>" size="80px"/>


  <p>Correo: </p> <input type="text" name="Correo" value="<?php if(isset($Correo)){echo $Correo;}else{echo $_SESSION['CorreoV'];} ?>" size="80px"  placeholder="Ejemplo@gmail.com" autocomplete="off"/>


  <p>Contraseña: </p> <input type="password" name="Contraseña" value="<?php if(isset($Contraseña)){echo $Contraseña;}else{echo $_SESSION['ContraseñaV'];} ?>" size="80px"  placeholder="********" autocomplete="off"/>




<div class="center"><input type="submit" value="Consultar" class="button" name="submit"/>
                    <input type="reset" value="Restablecer" class="button" name="restablecer"/>
                    <button class="buttonCS"><a href = "http://localhost:809/Proyectos/Herramientas/Menu.php" style="text-decoration: none; color: white">Atras</a></button>

                  </div> 



</form>

</div>
</body>
</html>


<?php 
if(isset($_POST['submit'])){
  if(!empty($Nombre) or !empty($Apellido) or !empty($Numero) or !empty($Correo)  or !empty($Contraseña)  or !empty($Fecha_N) or !empty($Foto) )



  $hostname = "localhost";
  $usuariodb = "root";
  $contraseñadb = "";
  $namedb = "datos_de_los_registrados";

  $conexion = mysqli_connect($hostname,$usuariodb,$contraseñadb,$namedb);

  if(!empty($Nombre)){
    mysqli_select_db($conexion,'datos_de_los_registrados'); 
    
    $query = "UPDATE registro 
    SET Nombre = '$Nombre'
    WHERE Nombre = '$NombreC' ";
    
    $Consulta = mysqli_query($conexion,$query);
    }
    if(!empty($Foto)){
      mysqli_select_db($conexion,'datos_de_los_registrados'); 
      
      $query = "UPDATE registro 
      SET Foto = '$Foto'
      WHERE Nombre = '$NombreC' ";
      
      $Consulta = mysqli_query($conexion,$query);
      }
      if(!empty($Apellido)){
        mysqli_select_db($conexion,'datos_de_los_registrados'); 
        
        $query = "UPDATE registro 
        SET Apellido = '$Apellido'
        WHERE Nombre = '$NombreC' ";
        
        $Consulta = mysqli_query($conexion,$query);
        }
        if(!empty($Numero)){
          mysqli_select_db($conexion,'datos_de_los_registrados'); 
          
          $query = "UPDATE registro 
          SET Numero_Telefono = '$Numero'
          WHERE Nombre = '$NombreC' ";
          
          $Consulta = mysqli_query($conexion,$query);
          }
          if(!empty($Correo)){
            mysqli_select_db($conexion,'datos_de_los_registrados'); 
            
            $query = "UPDATE registro 
            SET Correo = '$Correo'
            WHERE Nombre = '$NombreC' ";
            
            $Consulta = mysqli_query($conexion,$query);
            }
            if(!empty($Fecha_N)){
              mysqli_select_db($conexion,'datos_de_los_registrados'); 
              
              $query = "UPDATE registro 
              SET Fecha_Nacimiento = '$Fecha_N'
              WHERE Nombre = '$NombreC' ";
              
              $Consulta = mysqli_query($conexion,$query);
              }
              if(!empty($Contraseña)){
                mysqli_select_db($conexion,'datos_de_los_registrados'); 
                
                $query = "UPDATE registro 
                SET Contraseña = '$Contraseña'
                WHERE Nombre = '$NombreC' ";
                
                $Consulta = mysqli_query($conexion,$query);
                }
              


if($Consulta){

    echo '<script> alert("Cambios realizados correctamente, los cambios se aplicaran al volver a iniciar sesion");
    
    </script> ';
    
}
else{
    echo '<script> alert("No guardado");
    
    </script> ';
}
}

?>