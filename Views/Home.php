<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MysterySoftware - Iniciar sesión</title>
  <!--  <link rel="shortcut icon" type="image/png" href="{{ url('/img/icono.png') }}" />-->
    <link rel="stylesheet" href="../CSS/materialize/css/materialize.min.css">
    <link rel="stylesheet" href="../CSS/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script type="text/javascript" src="../JS/jquery-1.12.3.js"></script>
    <script type="text/javascript" src="../CSS/materialize/js/materialize.js"></script>
    <?php
    include '../php/conexion.php';
    $conexia = conect();
    Loguear($_POST["email"],$_POST["password"]);
    $Nombre = $_SESSION["nombre"];
    ?>
</head>
<body class="valign-wrapper">
    <h1 style="margin-right:20px;">Bienvenido <?php echo $Nombre ?></h1>
    <form method="POST" action="../php/cerrarsesion.php">
          <input class="waves-effect waves-light rose-code btn" style="background: #BF3364;" type="submit" name="Cerrar Sesión" value="Cerrar Sesión"/>
    </form>
</body>
</html>
