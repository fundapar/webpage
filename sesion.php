<?php 
	set_include_path("/recursos");
	require_once 'conection.php';

	/**
	* 
	*/
	class sesion
	{
		
		private $db;
		private $connection;
		function __construct()
		{
			$this->db = new DB_conection();
			$this->connection = $this->db->get_Connection();
		}


		public function sesion($name,$pass,$url){
			
			$query = "SELECT * FROM usuarios WHERE NAME = '$name' AND PASSWORD = '$pass'";
			$result = mysqli_query($this->connection,$query);
			if (mysqli_num_rows($result)>0) {
				
				
				session_start();
				
				$_SESSION['username'] = $name;
				while($reg = mysqli_fetch_array($result)) {
				$_SESSION['ID'] = $reg['ID'];
				$_SESSION['nombre'] = $reg['NOMBRE'] ." ".$reg['APELLIDO'];
				if ($reg['ROLE'] == 'Admin') {
					$_SESSION['role'] = $reg['ROLE'];
				}
				}
				header("location: ".$url."");
			}else{
				echo "Error";
			}
			mysqli_close($this->connection);
		}

		public function cerrar(){
			session_start();
			$_SESSION['username'] = null;
			$_SESSION['nombre'] = null;
			$_SESSION['role'] = null;
			session_destroy();
			header("location: /");
		}
	}

$sesion = new sesion();

if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['name'],$_POST['pass']) && !empty($_POST['name']) && !empty($_POST['pass'])&& !empty($_POST['url'])) {
	$name = $_POST['name'];
	$pass = $_POST['pass'];
	$url = $_POST['url'];
	$pass_Encripted = md5($pass);
	$sesion->sesion($name,$pass_Encripted,$url);
}else if($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET['a']) && !empty($_GET['a']) ){
	$a = $_GET['a'];
	if ($a == "cerrar") {
		$sesion->cerrar();
	}
}

 ?>