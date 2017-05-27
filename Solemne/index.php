

<?php
   
session_start();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login, Sign up Header</title>
        <link rel="stylesheet" href="Css/cabecera.css">
        <link rel="stylesheet" href="Css/footer.css">
	<link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
        <script src="js/jquery-3.2.1.min.js"></script>

</head>
<body style=" background: #52697d">

<header class="header-login-signup">

	<div class="header-limiter">

            <h1><a href="index.php">Zona<span>Cumpleaños</span></a></h1>
                <?php
                    if(isset($_SESSION["usuario"])) {
                        echo '<p><b>Bienvenido</b>: '.$_SESSION["usuario"].'</p>';
                        
                    }
                    ?>
                <nav>
                    <?php 
                        if(isset($_SESSION["usuario"]))
                        {
                            echo '<a href="agregarFestejo.php"> Registrar Festejo </a>';
                            echo '<a href="listar_registro.php" class="selected">Cumpleaños Actuales</a>';
                            echo '<a href="logout.php"> Cerrar Session </a>';
                            
                        }else{
                            echo '<a href="login.php" class="selected">Login</a>';
                            echo '<a href="listar_registro.php" class="selected">Cumpleaños Actuales</a>';
                        }
                    ?>
                    <a href="registro.php" >Registro</a>
                    
                    
		  </nav>
        </div>  
</header>


<footer style="color: aliceblue;
    font-family: sans-serif;"><p>Duoc. DAI5501 - Solemne2 </p></footer>
</body>
</html>
