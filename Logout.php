<?php
if($_SESSION['autentificado'] = 'SI'){
session_name("loginUsuario");
session_start();

session_destroy();
header('Location: Formulario de inicio de sesion.php');
}
else {

}

?>