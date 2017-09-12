<?PHP
error_reporting(0);
  unset($_SESSION["nombre"]);
  session_destroy();
  header('Location: ../Views/index.php');
?>
