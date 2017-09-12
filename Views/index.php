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
</head>
<body class="valign-wrapper">
<div class="container">
    <div class="row">
        <div class="col l6 m9 s12 offset-l3 offset-m2">
            <div class="card">
                <div class="card-image ">
                    <img src="../Resources/img/background.png">
                    <span class="card-title">Inicio de sesión</span>
                    <span class="card-title"><img class="col s5" style="margin-left:-25px; margin-bottom: 50px;" src="../Resources/img/MSA.png"></span>
                  <!--  @if(isset($errors))
                        @foreach($errors as $error)
                            <div class="col s12 red" style="height:30px; padding-top:5px;">
                                <span class="white-text">
                                    {{$error}}
                                </span>
                            </div>
                        @endforeach
                    @endif-->
                </div>

                <div class="card-content">
                    <form id="form-crear" method="post" action="Home.php"  enctype="multipart/form-data">
                        <div class="input-field col s12 ">
                            <label for="correo">Correo</label>
                            <input type="email" class="validate" name="email" id="email"/><br>
                        </div>
                        <div class="input-field col s12">
                            <label for="password" class="validate">Contraseña</label>
                            <input type="password" name="password" id="password"/><br>
                        </div>
                        <div  class="input-field col right s10">
                            <div class="row">
                                <input class="waves-effect waves-light rose-code btn" style="background: #BF3364;" type="submit" name="Iniciar Sesión" value="Iniciar Sesión"/>
                              </form>
                                <a href="AltaUsuario.php" class="waves-effect waves-light rose-code btn" style="background: #BF3364;">Alta de usuario</a>
                            </div>
                        </div>
                    <p> &nbsp</p><br><br>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
