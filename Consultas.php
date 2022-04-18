<?php


//Si se sube el formulario de registro

if(isset($_POST["submit_R"])){
    $Nombre = $_POST["Nombre"];

    $Foto = $_FILES['FotoI']['name'];
    $Foto_tmp = $_FILES['FotoI']['tmp_name'];
    $ruta = "Herramientas/";
    $Destino = $ruta.$Foto;
    move_uploaded_file($Foto_tmp, $Destino);
    $Apellido = $_POST["Apellido"];
    $Numero = $_POST["Numero"];
    $Fecha_N = $_POST["Fecha_N"];
    $Correo = $_POST["Correo"];
    $Contraseña = $_POST["Contraseña"];

    
    
    //conexion
    
    require 'Conexion.php';


    //Tipo de consultas

$insertar = "INSERT INTO registro(Nombre,Apellido,Numero_Telefono,Fecha_Nacimiento,Correo,Contraseña,Foto)
VALUES ('$Nombre','$Apellido','$Numero','$Fecha_N','$Correo','$Contraseña','$Foto')";

    //Consulta
if(!empty($Correo) and strlen($Correo) <= 40 and empty($Correo_Validate) and filter_var($Correo,FILTER_VALIDATE_EMAIL) and !empty($Contraseña) and
    strlen($Contraseña) >= 8 and !empty($Apellido) and strlen($Apellido) <= 20  and !empty($Nombre) and strlen($Nombre) <= 20 and empty($Nombre_Validate) 
    and !empty($Numero) and empty($Numero_Validate) and  !empty($Fecha_N))
{
$query = mysqli_query($conexion, $insertar);


$Seleccionar = 
"SELECT Foto
 from registro WHERE
  Nombre =
   '$Nombre' ";
$queryy = mysqli_query($conexion,$Seleccionar);

while($Consulta = mysqli_fetch_array($queryy))
{
  $Foto_V = $Consulta['Foto'];
}  

session_name("Nombre");
session_start();
$_SESSION['Nombre'] = $Nombre;
session_abort();

session_name("loginUsuario");
session_start();
$_SESSION['Nombre'] = $Nombre;
if(isset($Foto_V)){
$_SESSION['Foto'] = $Foto_V;
}

if($queryy){
  echo '<script> alert("Guardado correctamente y bienvenido, '.$Nombre.'.");
  location.href = "http://localhost:809/Proyectos/Formulario%20de%20inicio%20de%20sesion.php"
  
  </script> ';
}
    
}
else {
    echo '<script> alert("No guardado");
    location.href = "window.history.go(-1);"
    
    </script> ';
}
}
else{
  echo '<script> alert("No guardado, hubo algun error envie nuevamente");
    window.history.go(-1); 
    
    </script> ';
}

//Si se sube el formulario de inicio

if(isset($_POST["submit_I"])){
    $Nombre_I = $_POST["Nombre_I"];
    $Contraseña_I = $_POST["Contraseña_I"];

    
    //conexion
    require 'Conexion.php';
    mysqli_select_db($conexion,"datos_de_los_registrados"); 
  
    //Tipo de consulta
   $seleccionar = "SELECT Nombre,Contraseña,Foto FROM registro WHERE Nombre = '$Nombre_I' and Contraseña ='$Contraseña_I' ";
  
   //Consulta
    $query = mysqli_query($conexion,$seleccionar);
  
    //Estructura while para captar los datos de sql y almacenarlos en las variables
    while($Consulta = mysqli_fetch_array($query))
    {
      $Nombre_Validate = $Consulta['Nombre'] and $Contraseña_Validate = $Consulta['Contraseña'] and $Foto_V = $Consulta['Foto'];
    }  
  
    //Condicion para acceso

  if(isset($Nombre_Validate) and isset($Contraseña_Validate))
  {
    session_name("loginUsuario");
    session_start();
    $_SESSION["autentificado"]= "SI";
    $_SESSION['Nombre'] = $Nombre_Validate;
    $_SESSION['Contraseña'] = $_POST['Contraseña_I'];
    $_SESSION['Foto'] = $Foto_V;

    $Foto = $_SESSION['Foto'];
    

    require 'Conexion.php';

    $Seleccionar = 
    "SELECT *
     from registro WHERE
      Nombre =
       '$Nombre_Validate' ";

    $query = mysqli_query($conexion,$Seleccionar);

    while($Consulta = mysqli_fetch_array($query))
    {
      $_SESSION['Foto'] = $Consulta['Foto'];
      $_SESSION['NombreV'] = $Consulta['Nombre'];
      $_SESSION['ApellidoV'] = $Consulta['Apellido'];
      $_SESSION['NumeroV'] = $Consulta['Numero_Telefono'];
      $_SESSION['Fecha_NV'] = $Consulta['Fecha_Nacimiento'];
      $_SESSION['CorreoV'] = $Consulta['Correo'];
      $_SESSION['ContraseñaV'] = $Consulta['Contraseña'];
    }  
    header('Location: Herramientas/Menu.php');
  }
  else{
   echo 
   '<script>
   alert("Sesion incorrecta");
   window.history.go(-1);
   </script>';
  }
  
  mysqli_close($conexion);
}
?>