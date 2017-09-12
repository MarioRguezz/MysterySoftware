<?PHP
error_reporting(0);

session_start();
function  conect($host = "localhost:3306", $user = "root", $psw = "", $db = "mysterydatabase"){
//conect($host = "localhost:3306", $user = "seminario", $psw = "seminario12345", $db = "durango"){
//189.211.207.17

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

	if ($password!=NULL)
	{
        $sql="select * from usuario where Correo = '$username'";
		$query = mysqli_query($con, $sql);
        $data = mysqli_fetch_array($query);
		//print_r($data);

		if(($data['Correo'] != $username ))
		{
            return 0;
		}

		if($data['Password'] == $password)
		{
      $_SESSION["nombre"]=$data['Nombre'];
            return 1;
        }
    }
    return 0;
}


function logout(){
  unset($_SESSION['tipoP']);
  unset($_SESSION['email']);
  unset($_SESSION["IDExam"]);
  session_destroy();
}





?>
