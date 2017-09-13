
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
    <script type="text/javascript" src="../JS/jquery.validate.js"></script>
    <script type="text/javascript" src="../JS/validation.js"></script>
</head>
<body class="valign-wrapper">
<div class="container">
    <div class="row">
        <div class="col l6 m12 s12 offset-l3 ">
            <div class="card">
                <div class="card-image ">
                    <img src="../Resources/img/background.png">
                    <span class="card-title">Alta de usuario</span>
                    <span class="card-title"><img class="col s5" style="margin-left:-25px; margin-bottom: 50px;" src="../Resources/img/MSA.png"></span>
                    </div>
                            <div class="card-content">
                      <form id="form-crear" method="post" action="../php/altausuario.php" class="col s12" enctype="multipart/form-data">
                          <div class="row">
                              <div class="input-field col s12">
                                  <input id="nombre" name="nombre"  type="text" class="validate">
                                  <label for="nombre">Nombre</label>
                              </div>
                              <div class="input-field col s12">
                                  <input id="correo" name="correo" type="text" class="validate">
                                  <label for="correo">Correo</label>
                              </div>
                              <div class="input-field col s12">
                                  <input id="password" name="password" type="password" class="validate">
                                  <label for="password">Contraseña</label>
                              </div>
                              <div class="input-field col s12">
                                  <input id="password2" name="password2" type="password" class="validate">
                                  <label for="password2">Repetir contraseña</label>
                              </div>
                              <div class="input-field col s12 ">
                                  <select required id="prioridad"  name="prioridad" class="select-wrapper validate">
                                      <option value=""  selected>Elige una opción</option>
                                          <option value="1">Administrador</option>
                                          <option value="2">Usuario</option>
                                  </select>
                              </div>
                                  <input class="input-field btn right" id="btnAlta" style="background: #BF3364;" type="submit" value="Registrar">
                          </div>
                      </form>
                    <p> &nbsp</p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>


  </html>
