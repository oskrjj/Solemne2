
<?php
   
session_start();

include_once __DIR__."/controller/UsuarioController.php";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["email"]) && isset($_POST["password"])) {

       $exito = UsuarioController::validarUsuarioClave($_POST["email"], $_POST["password"]);
       
       if($exito) {
           header("location: agregarFestejo.php");
           return;
       } else {
           $errorMessage = "usuario o clave incorrectos";
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
<html style=" background: #52697d;">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login, Sign up Header</title>
        <link rel="stylesheet" href="Css/cabecera.css">
        <link rel="stylesheet" href="Css/footer.css">
        <link rel="stylesheet" href="Css/Formulario_registro.css">
	<link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/Formateo-Rut.js"></script>
        <script src="js/login.js"></script>
        

</head>
<body >

<header class="header-login-signup">
	<div class="header-limiter">
		<h1><a href="index.php">Zona<span>Cumpleaños</span></a></h1>
		<nav>
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


<div class="testbox1">
  <h1>Login</h1>
  
  <form action="login.php" method="POST">
      <hr>
      Ingrese datos solicitados
    <hr>
  
  <label id="icon" for="name"><i class="icon-envelope"></i></label>
  <input type="email" name="email" id="email" placeholder="E-Mail" required/>
  
  <label id="icon" for="name"><i class="icon-shield"></i></label>
  <input type="password" name="password" id="pass1" placeholder="Contraseña" required/>
   
  
  <input type="submit" name="enviar" value="Ingresar">
   <a href="registro.php" class="button">Registrarse</a>
  </form>
</div>

    <footer style="color: aliceblue;
    font-family: sans-serif"><p>Duoc. DAI5501 - Solemne2 </p></footer>
   
</body>
</html>
