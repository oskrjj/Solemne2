<?php
   
session_start();

include_once __DIR__."/controller/UsuarioController.php";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["txtemail"]) && isset($_POST["txtpass1"]) && 
       isset($_POST["txtpass2"])) {

       $exito = UsuarioController::registrarUsuario($_POST["txtemail"],
                                                    $_POST["txtpass1"],
                                                    $_POST["txtpass2"]);
       
       if($exito) {
           header("location: index.php");
           return;
       }
    }  
}

?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html style=" background:#52697d;">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login, Sign up Header</title>
        <link rel="stylesheet" href="Css/Formulario_registro.css">
        <link rel="stylesheet" href="Css/cabecera.css">
	<link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/Formateo-Rut.js"></script>
        <script src="js/registro.js"></script>
          <link rel="stylesheet" href="Css/footer.css">
        
        

</head>
<body style=" background:#52697d;">

<header class="header-login-signup">
	<div class="header-limiter">
		<h1><a href="index.php">Zona<span>Cumpleaños</span></a></h1>
		<nav>        
                    <a href="login.php" class="selected">Login</a>
                     <a href="index.php" >Volver</a>
		  </nav>
                 <hav>
                     <?php
                    if(isset($_SESSION["usuario"])) {
                        echo '<p><b>Usuario autenticado</b>: '.$_SESSION["usuario"].'</p>';
                    }
                ?>
                </hav>
	</div>
</header>

    <div class="testbox">
  <h1>Registro</h1>
  
  <form action="registro.php" method="POST">
      <hr> 
      Ingrese datos solicitados
    <hr>
  
  <label id="icon" for="name"><i class="icon-envelope "></i></label>
  <input type="email" name="txtemail" id="email" placeholder="Email" required/>
  
  
  <label id="icon" for="name"><i class="icon-shield"></i></label>
  <input type="password" name="txtpass1" id="pass1" placeholder="Contraseña" required/>
  
   <label id="icon" for="name"><i class="icon-shield"></i></label>
  <input type="password" name="txtpass2" id="pass2" placeholder="Repita Contraseña" required/>
  
  <input type="submit" name="enviar" value="Registrarse">
  </form>
</div>
    <footer style="color: aliceblue;
    font-family: sans-serif"><p>Duoc. DAI5501 - Solemne2 </p></footer>   
</body>
</html>
