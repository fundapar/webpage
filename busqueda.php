<?php 

require_once 'conection.php';


class busqueda
{
	
	private $db;
	private $connection;
	function __construct()
	{
		$this->db = new DB_conection();
		$this->connection = $this->db->get_Connection();
	}

	public function busqueda($valor){
		$query = "SELECT NAME FROM usuarios WHERE NAME LIKE '%$valor%'";
		$result = mysqli_query($this->connection,$query);;
		if (mysqli_num_rows($result)>0) {
			echo "Valido";
		}else{
			echo "No Valido";
		}
		mysqli_close($this->connection);
	}
}

$bus = new busqueda();
if (isset($_POST['valorBusqueda']) && !empty($_POST['valorBusqueda'])) {
	$consultaBusqueda = $_POST['valorBusqueda'];
	$bus->busqueda($consultaBusqueda);
}

 ?>