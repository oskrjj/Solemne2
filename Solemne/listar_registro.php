<?php
   
    session_start();

    include_once __DIR__."/controller/PersonaController.php";
 

    $listadoPersonas = PersonaController::listarPersonasRegistradas();
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST["txtRut"])){
            $exito = PersonaController::eliminarPersona($_POST["txtRut"]);
            if($exito){
               header("location: listar_registro.php");
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
<html>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login, Sign up Header</title>
        <link rel="stylesheet" href="Css/cabecera.css">
	<link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
        <script src="js/jquery-3.2.1.min.js"></script>
  <link rel="stylesheet" href="Css/footer.css">
</head>
<body style=" background: #52697d;">

<header class="header-login-signup">
	<div class="header-limiter">
		<h1><a href="index.php">Zona<span>Cumpleaños</span></a></h1>
		<nav>
                    <a href="index.php" >Volver</a>
                    <a href="login.php" class="selected">Login</a>
		  </nav>
                <hav>
                    
                </hav>
	</div>
</header>


</header>

<!-- The content of your page would go here. -->
<body>
    <div id="registros">
        <table>
            <thead>
                <tr>
                    <th>RUT</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Fecha Nacimiento</th>
                    <th>E-Mail</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <td colspan="5">
                        Listado de personas registradas
                    </td>
                </tr>
            </tfoot>
            <tbody>
                <?php
                    foreach($listadoPersonas as $persona) {
                        /*@var $persona Persona */
                ?>
                <tr>
                    
                    <form action="listar_registro.php" method="POST">
                        <td><input type="hidden" name="txtRut" value="<?= $persona->getRut() ?>"</td>
                        <td><?= $persona->getNombre() ?></td>
                        <td><?= $persona->getApellido() ?></td>
                        <td><?= $persona->getFecha_Nacimiento() ?></td>
                        <td><?= $persona->getEmail() ?></td>
                        <td><input type="submit" value="eliminar" name="Eliminar"></td>        
                    </form>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>

<footer style="color: aliceblue;
    font-family: sans-serif"><p>Duoc. DAI5501 - Solemne2 </p></footer>
</body>
</html>
