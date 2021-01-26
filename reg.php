<?php 
	
	require_once 'conection.php';
	class reg
	{
		
		private $db;
		private $connection;
		function __construct()
		{
			$this->db = new DB_conection();
			$this->connection = $this->db->get_Connection();
		}

		public function crearUser($user,$pass,$nombre,$apellido,$email){
			$query = "INSERT INTO usuarios(NAME,PASSWORD,EMAIL,NOMBRE,APELLIDO) VALUES ('$user','$pass','$email','$nombre','$apellido')";
				$is_inserted = mysqli_query($this->connection,$query);
					if ($is_inserted == 1) {
						header("location: /");
					}else{
						echo "Error";
					}
				mysqli_close($this->connection);
		}
	}

$reg = new reg();

if (isset($_POST['user'],$_POST['nombre'],$_POST['apellido'],$_POST['email'],$_POST['pass']) && !empty($_POST['user']) && !empty($_POST['nombre'])&& !empty($_POST['apellido'])&& !empty($_POST['email'])&& !empty($_POST['pass']) ) {
	$user = $_POST['user'];
	$nombre =  $_POST['nombre'];
	$apellido =  $_POST['apellido'];
	$email =  $_POST['email'];
	$pass =  $_POST['pass'];

	$pass_encripted = md5($pass);

	$reg->crearUser($user,$pass_encripted,$nombre,$apellido,$email);
}

 ?>