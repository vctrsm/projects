<?php
if(isset($_POST["submit"]))
{
    if(empty($Nombre_A)){$errores = '<p style="color: red">*Ingrese algun nombre</p>'; 
        echo  $errores;
    }

        if(empty($Nombre_M)){
            $errores = '<p style="color: red">*Ingrese el nombre de la materia</p>'; 
            echo  $errores;
        }

if(empty($Nota1) or empty($Nota2) or empty($Nota3)){
    $errores = '<p style="color: red">*Llene todas las notas</p>'; 
    echo  $errores;
}


if(!empty($Nota1) and !empty($Nota2) and !empty($Nota3)){
$Promedio = ($Nota1+$Nota2+$Nota3)/3;
}
if(!empty($Nota1) or !empty($Nota2) or !empty($Nota3)){
if($Nota1 < 0 or $Nota1 > 100 or $Nota2 < 0 or $Nota2 > 100 or $Nota3 < 0 or $Nota3 > 100){
    $errores = '<p style="color: red">*Maximo 100, minimo 0 en todas las notas</p>'; 
    echo  $errores;
}
}



if(!empty($Nota1) and !empty($Nota2) and !empty($Nota3) and !empty($Nombre_A) and !empty($Nombre_M) and $Nota1 >= 0 and $Nota1 <= 100 and $Nota2 >= 0 and $Nota2 <= 100 and $Nota3 >= 0 and $Nota3 <= 100){
echo '<h2>'.$Nombre_A.', tu promedio en '.$Nombre_M.' es: '.round($Promedio).' y '; 

if(round($Promedio) > 70){echo 'Aprobaste</h2>';}else{echo 'Reprobaste</h2>';}
}
}
?> 