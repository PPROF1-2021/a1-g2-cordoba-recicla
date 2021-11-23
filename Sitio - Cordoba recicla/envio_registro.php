<!DOCTYPE html>
<html lang="es">
   <head>
	 <meta charset="UTF-8">
     <title>Cba recicla - Envio</title>
     <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
     <meta name="description" content="Encuentra información sobre reciclaje y los puntos de reciclaje activos en la ciudad de Córdoba.">
     <meta name="keywords" content="reciclar, reciclaje, verde, cordoba, capital, puntos verdes, centro reciclaje">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <link rel="shortcut icon" href="img/ico/ico.jpg" type="image/x-icon">
     <link rel="stylesheet" href="css/style_cuenta.css">
  </head> 
  <header class="container-sm">
    
  </header>
  <body> 
  <main>
    <div class="container">
        <a href= "index.html"><img src="img/ico/logo_cuenta.png" alt="logo_inicio" class="logo"></a>
        </div>
   
        <section id="register" class="mb-5">
            
                    <div class="col-xs-12 col-sm-6 com-md-4 mx-auto text-center pt-5">
                        <h1 class="h1" style="font-weight: 900; font-style:oblique; color: white;">Registro</h1>
                    </div>
               
    
<!-- Inicio de datos del formulario -->
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-6 com-md-4 mx-auto pt-5 card">
    <div class= "text-left ms-4" style="font-size: 24px;">


<br>
<?php
include('db.php');
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$dni = $_POST["dni"];
$correo = $_POST["correo"];
$password = $_POST["password"];
$telefono = $_POST["telefono"];
$pais = $_POST["pais"];
$provincia = $_POST["provincia"];
$ciudad = $_POST["ciudad"];

print " <p> Su nombre es: <strong>$nombre</strong>.</p>\n";
print "\n";
print " <p> Su apellido es: <strong>$apellido</strong>.</p>\n";
print "\n";
print " <p> Su dni es: <strong>$dni</strong>.</p>\n";
print "\n";
print " <p> Su correo es: <strong>$correo</strong>.</p>\n";
print "\n";
print " <p> Su contraseña es: <strong>$password</strong>.</p>\n";
print "\n";
print " <p> Su teléfono es: <strong>$telefono</strong>.</p>\n";
print "\n";
print " <p> Su país es: <strong>$pais</strong>.</p>\n";
print "\n";
print " <p> Su provincia es: <strong>$provincia</strong>.</p>\n";
print "\n";
print " <p> Su ciudad es: <strong>$ciudad</strong>.</p>\n";
print "\n";

// Datos conexion y funciones.


$conexion=mysqli_connect("localhost","gabriela","1234","ddl_reciclaje");

//INSERT DATOS

$consulta = "INSERT INTO usuario (Nombre, Apellido, Telefono, DNI) VALUES ('$nombre', '$apellido','$telefono', '$dni')";

$ejecutado = mysqli_query($conexion, $consulta);

$lastid = mysqli_insert_id($conexion); 

echo "Ultimo ID : ".$lastid; 

if ($ejecutado == 1){
$consulta2 = "INSERT INTO login (Username, pass, idUsuarioLogin) VALUES ('$correo', '$password', '$lastid')";
$ejecutado2 = mysqli_query ($conexion, $consulta2);
echo "<p><strong>-->Registro completo.<--</strong></p>";
}
else {
  echo "<p><strong>-->Error de registro.<--</strong></p>";
}

mysqli_close($conexion);


?>

<!-- Fin de datos del formulario -->
</div>
</div>
</div>
</div>
<div id="delayMsg" style="text-align: center;">
<button type="button" onclick="delayRedirect()" class="btn btn-danger">Click para salir</button>
</div>


<!-- FIN FORMULARIO -->


</main>

     
<footer>
    <h2 class="titulo-final">&copy; Córdoba recicla 2021 | Todos los derechos reservados.</h2>
 </footer> 
 <script src="js/funcionesGrupo02.js"></script>
 <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
</body>
</html>