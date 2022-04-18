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
   <title>Calculadora</title>
   <link rel="stylesheet" href="http://localhost:809/Proyectos/Recursos/Estilos_Formulario.css"/>
   <style>
      .center{
            width: 500px;
            height: auto;
            display: inline;
      }
      .inputs {
         width: 400px;
      }
      .fondo {
         width: 400px;
      }
      h2 {
         margin-right: 180px;
      }
      body{
         height: 630px;
         padding-top: 80px;
      }
      select {
    margin-bottom: 0px;
    height: 34px;
    border: #9D4786 solid 2px;
    border-left: none;
    border-right: none;
    border-top: none;
      }
      .submit {
         margin-left: 120px;
      }
     img {
        border-radius: 30%;
     }
  
   </style>
   <?php 
   if(isset($_POST['submit']) and isset($_POST['A']) and isset($_POST['Operacion']) and isset($_POST['B'])){
        $A = $_POST['A'];
        $Operacion = $_POST['Operacion'];
        $B = $_POST['B'];
        
        function Suma($A,$B){
            $Total = $A+$B;
            print('= '.$Total);
        }
        function Resta($A,$B){
            $Total = $A-$B;
            print('= '.$Total);
        }
        function Multiplicacion($A,$B){
            $Total = $A*$B;
            print('= '.$Total);
        }
        function Division($A,$B){
            $Total = $A/$B;
            print('= '.$Total);
        }
        function Potencia($A,$B){
           $Total = $A**$B;
           print('= '.$Total);
        }
        function Raiz($A,$B){
           $Total = $B**(1/$A);
           print('= '.$Total);
        }
        function Porcentaje($A,$B){
           $Total = ($A*$B)/100;
           print('= '.$Total);
        }
   
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
   
   <div class="center"><h2>Calculadora</h2></div>
   <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
 <div class="inputs">  
   <input type="number" name="A" style="text-align: center" value="<?php if(isset($_POST["A"])){echo $_POST["A"];}?>" placeholder="Valor1"/>
   
  
<select name="Operacion">
<option><?php if(isset($_POST["Operacion"])){echo $_POST["Operacion"];}?></option>
<option value="+">+</option>
<option value="-">-</option>
<option value="*">*</option>
<option value="/">/</option>
<option value="^">^</option>
<option  value="^(/)">^(/)</option>
<option value="%">%</option>
</select>   

   <input type="number" style="text-align: center" name="B" value="<?php if(isset($_POST["B"])){echo $_POST["B"];}?>" placeholder="Valor2"/>
   
  <?php
 
if(isset($_POST['submit'])and isset($_POST['A']) and isset($_POST['Operacion']) and isset($_POST['B'])){

if($Operacion == '+'){
    Suma($A,$B);
}
else if($Operacion == '-'){
 Resta($A,$B);
}
else if($Operacion == '*'){
 Multiplicacion($A,$B);
}
else if($Operacion == '/'){
 Division($A,$B);
}
else if($Operacion == '^'){
 Potencia($A,$B);
}
else if($Operacion == '^(/)'){
 Raiz($A,$B);
}
else if($Operacion == '%'){
 Porcentaje($A,$B);
}
}
 ?>  
 </div>
 <br>
   <div class="center"> 
   <input type="reset" name="reset" value="←----" />
   <input type="submit" name="submit" value="Calcular" style="margin-left: 130px; "/>
   
</div>
</form>

<button class="buttonCS" style="margin-left: 270px"><a href = "http://localhost:809/Proyectos/Herramientas/Menu.php" style="text-decoration: none; color: white">Atras</a></button>  
   </body>

