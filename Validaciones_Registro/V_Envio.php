<?php
    //Si no hay errores
if(
!empty($Correo) and strlen($Correo) <= 40 and empty($Correo_Validate) and filter_var($Correo,FILTER_VALIDATE_EMAIL) and !empty($Contraseña) and
strlen($Contraseña) >= 8 and !empty($Apellido) and strlen($Apellido) <= 20  and !empty($Nombre) and strlen($Nombre) <= 20 and empty($Nombre_Validate) 
and !empty($Numero) and empty($Numero_Validate) and  !empty($Fecha_N)
)
{
    echo 'Consultas.php';
}

?>