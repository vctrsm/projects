<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultas manuales</title>
    <link rel="stylesheet" href="http://localhost:809/Proyectos/Recursos/Estilos_Formulario_e.css"/>
    <?php
        if(isset($_POST["submit_DB"])){
        $insertar = $_POST["Insertar"];
        $eliminar = $_POST["Eliminar"];
        $actualizar = $_POST["Actualizar"];
        $DB = $_POST["DB"];
        }
    ?>
    <style>
        label {
    text-align: center;
    margin-bottom: 5px;  
}
    </style>
</head>
<body>
<div class="fondo">

<div class="center">
  <h1>Ejecutar consulta</h1>
</div>

<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">

  <p>Nombre de la DB:</p> <input type="text" name="DB" value="<?php if(isset($DB)){echo $DB;} ?>" size="80px" placeholder="Nombre de la DB" autocomplete="off"/><br>
        <div style="display: inline">
  <label>Insertar:</label> <input type="radio" name="Tipo_Consulta" value="Insertar" size="5px" class="radio"/>
  <label>Eliminar:</label> <input type="radio" name="Tipo_Consulta" value="Eliminar" size="5px" class="radio"/>
  <label>Actualizar:</label> <input type="radio" name="Tipo_Consulta" value="Actualizar" size="5px" class="radio"/>
    </div>
  <p>Codigo Mysql para Insertar:</p> <input type="text" name="Insertar" value="<?php if(isset($insertar)){echo $insertar;} ?>" size="80px" placeholder="Ingresa un codigo" autocomplete="off"/><br>

  <p>Codigo Mysql para Eliminar:</p> <input type="text" name="Eliminar" value="<?php if(isset($eliminar)){echo $eliminar;} ?>" size="80px" placeholder="Ingresa un codigo" autocomplete="off"/>

  <p>Codigo Mysql para Actualizar:</p> <input type="text" name="Actualizar" value="<?php if(isset($actualizar)){echo $actualizar;} ?>" size="80px"  placeholder="Ingresa un codigo" autocomplete="off"/>




<div class="center"><input type="submit" value="Consultar" class="button" name="submit_DB"/>
                    <input type="reset" value="Restablecer" class="button" name="restablecer"/></div> 



</form>

</div>
</body>
</html>


<?php 
if(isset($_POST['submit_DB'])){
require 'Conexion.php';

mysqli_select_db($conexion,$DB); 

$C_Elegida = $_POST["Tipo_Consulta"];

$query;
if($C_Elegida == "Insertar"){$query = $insertar;}
elseif($C_Elegida == "Eliminar"){$query = $eliminar;}
elseif($C_Elegida == "Actualizar"){$query = $actualizar;}

$Consulta = mysqli_query($conexion,$query);

/* Orientativo
$insertar = "INSERT INTO registro(Nombre,Apellido,Numero_Telefono,Fecha_Nacimiento,Correo,Contraseña)
VALUES ('$Nombre','$Apellido',$Numero,'$Fecha_N','$Correo','$Contraseña')";

$eliminar = "DELETE from registro 
WHERE Id = 1 or Id = 2 or Id = 3";

$update = "UPDATE from registro 
SET Id = 1
WHERE Nombre = 'Jhon'; ";
*/

if($Consulta){

    echo '<script> alert("Cambios realizados correctamente");
    
    </script> ';
    
}
else{
    echo '<script> alert("No guardado");
    
    </script> ';
}
}
?>