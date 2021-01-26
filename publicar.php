<?php 

	require_once 'conection.php';
	

	class publicaciones
	{
		private $db;
		private $connection;
		function __construct()
		{
			$this->db = new DB_conection();
			$this->connection = $this->db->get_Connection();	
		}

		public function publicar($nombre,$texto,$link,$tags){
			$query = "INSERT INTO pub(NOMBRE,TEXTO,LINK,TAG) VALUES ('$nombre','$texto','$link','$tags')";
			$is_inserted = mysqli_query($this->connection,$query);
					if ($is_inserted == 1) {
						$json['success'] = "Publicacion Realizada";
						header('Location: /cms.php');
					}else{
						$json['error'] = 'Error';
						header('Location: /cms.php');
					}
			echo json_encode($json);
			mysqli_close($this->connection);
		}

		public function publicar2($nombre,$texto){
			$query = "INSERT INTO pub(NOMBRE,TEXTO) VALUES ('$nombre','$texto')";
			$is_inserted = mysqli_query($this->connection,$query);
					if ($is_inserted == 1) {
						$json['success'] = "Publicacion Realizada";
						header('Location: /cms.php');
					}else{
						$json['error'] = 'Error';
						header('Location: /cms.php');
					}
			echo json_encode($json);
			mysqli_close($this->connection);
		}

		public function publicar3($nombre,$texto,$tags){
			$query = "INSERT INTO pub(NOMBRE,TEXTO,TAG) VALUES ('$nombre','$texto','$tags')";
			$is_inserted = mysqli_query($this->connection,$query);
					if ($is_inserted == 1) {
						$json['success'] = "Publicacion Realizada";
						header('Location: /cms.php');
						
					}else{
						$json['error'] = 'Error';
						header('Location: /cms.php');
						
					}
			echo json_encode($json);
			mysqli_close($this->connection);
		}
		public function publicar4($nombre,$texto,$recurso){
			$query = "INSERT INTO pub(NOMBRE,TEXTO,LINK) VALUES ('$nombre','$texto','$recurso')";
			$is_inserted = mysqli_query($this->connection,$query);
					if ($is_inserted == 1) {
						$json['success'] = "Publicacion Realizada";
						header('Location: /cms.php');
						
					}else{
						$json['error'] = 'Error';
						header('Location: /cms.php');
						
					}
			echo json_encode($json);
			mysqli_close($this->connection);
		}
	}

$pub = new publicaciones();
if(isset($_POST['name'],$_POST['body'],$_POST['resource']) && !empty($_POST['name']) && !empty($_POST['body']) && !empty($_POST['resource'])){
	$nombre = $_POST['name'];
	$texto = $_POST['body'];
	$recurso = $_POST['resource'];
	if (!empty($nombre) && !empty($texto)&& !empty($recurso)) {
		$pub -> publicar4($nombre,$texto,$recurso);
	}
} else if(isset($_POST['name'],$_POST['body'],$_POST['tags']) && !empty($_POST['name']) && !empty($_POST['body']) && !empty($_POST['tags'])){
	$nombre = $_POST['name'];
	$texto = $_POST['body'];
	$tags = $_POST['tags'];
	if (!empty($nombre) && !empty($texto)&& !empty($tags)) {
		$pub -> publicar3($nombre,$texto,$tags);
	}

}else if(isset($_POST['name'],$_POST['body']) && !empty($_POST['name']) && !empty($_POST['body'])){
	$nombre = $_POST['name'];
	$texto = $_POST['body'];
	if (!empty($nombre) && !empty($texto)) {
		$pub -> publicar2($nombre,$texto);
	}
} else  if (isset($_POST['name'],$_POST['body'],$_POST['resource'],$_POST['tags']) && !empty($_POST['name']) && !empty($_POST['body']) && !empty($_POST['resource'])&& !empty($_POST['tags'])) {
	$nombre = $_POST['name'];
	$texto = $_POST['body'];
	$link = $_POST['resource'];
	$tags = $_POST['tags'];
	if (!empty($nombre) && !empty($texto) && !empty($link)&& !empty($tags)) {
		$pub -> publicar($nombre,$texto,$link,$tags);
	}
}


 ?>