<?PHP
error_reporting(0);

session_start();
function  conect($host = "localhost:3306", $user = "root", $psw = "", $db = "mysterydatabase"){
	$con = mysqli_connect($host,$user,$psw, $db) or die ("Error de la conexión MySQL");
    mysqli_set_charset($con,'utf8');
	if (!$con){
	}
	return $con;
}

function desconectarBD($con){
	mysqli_close($con);
}

function Loguear($username,$password){
	$con = conect();
  $username=mysqli_real_escape_string($con,$username);
	$password=mysqli_real_escape_string($con,$password);
  $sql="select * from usuario where Correo = '$username' and Password = '$password'";
	$query = mysqli_query($con, $sql);
  $data = mysqli_fetch_array($query);
  $count = mysqli_num_rows($query);
	if($count == 1){
		if($data['Tipo'] == "2"){
			header('Location: ../Views/index.php?error=admin');
		}
		 $_SESSION["nombre"]=$data['Nombre'];
	}else{
		header('Location: ../Views/index.php?error=undefine');
	}
}


function logout(){
  unset($_SESSION['tipoP']);
  unset($_SESSION['email']);
  unset($_SESSION["IDExam"]);
  session_destroy();
}





?>
