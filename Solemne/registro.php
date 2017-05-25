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
	</div>
</header>

    <div class="testbox">
  <h1>Registro</h1>
  
  <form action="/">
      <hr> 
      Ingrese datos solicitados
    <hr>
  
  <label id="icon" for="name"><i class="icon-user"></i></label>
  <input type="text" name="name" id="rut" placeholder="Rut" required/>
  
  <label id="icon" for="name"><i class="icon-user"></i></label>
  <input type="text" name="name" id="nombre" placeholder="Nombre" required/>
  
  <label id="icon" for="name"><i class="icon-envelope "></i></label>
  <input type="text" name="name" id="email" placeholder="Email" required/>
  
  
  <label id="icon" for="name"><i class="icon-shield"></i></label>
  <input type="password" name="name" id="pass1" placeholder="Contraseña" required/>
  
   <label id="icon" for="name"><i class="icon-shield"></i></label>
  <input type="password" name="name" id="pass2" placeholder="Repita Contraseña" required/>
  
   <a href="#" class="button">Register</a>
  </form>
</div>
    <footer style="color: aliceblue;
    font-family: sans-serif"><p>Duoc. DAI5501 - Solemne2 </p></footer>   
</body>
</html>
