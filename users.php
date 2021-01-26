<?php 
	set_include_path("/recursos");
	require_once 'conection.php';

	/**
	* 
	*/
	class user
	{
		
		private $db;
		private $connection;
		function __construct()
		{
			$this->db = new DB_conection();
			$this->connection = $this->db->get_Connection();
		}

		public function getDatos($id){
			$query = "SELECT * FROM usuarios WHERE ID = '$id'";
			$result = mysqli_query($this->connection,$query);;
			if (mysqli_num_rows($result)>0) {
				while ($regresult = mysqli_fetch_array($result)) {
					echo '
						
								<div >	
									<form class="form-horizontal">

										<div class="form-group">
									    <label for="inputPassword3" class="col-sm-2 control-label">Nombres:</label>
									    <div class="col-sm-10">
									      <input type="text" class="form-control" id="nombre" placeholder="'.$regresult['NOMBRE'].'">
									    </div>
									  </div>
										
									<div class="form-group">
									    <label for="inputPassword3" class="col-sm-2 control-label">Apellidos:</label>
									    <div class="col-sm-10">
									      <input type="text" class="form-control" id="nombre" placeholder="'.$regresult['APELLIDO'].'">
									    </div>
									  </div>

									  <div class="form-group">
									    <label for="inputEmail3" class="col-sm-2 control-label">Email:</label>
									    <div class="col-sm-10">
									      <input type="email" class="form-control" id="email" placeholder="'.$regresult['EMAIL'].'">
									    </div>
									  </div>
									  
									  
									  <div class="form-group">
									    <div class="col-sm-offset-2 col-sm-10">
									      <button type="submit" class="btn btn-default">Cambiar</button>
									    </div>
									  </div>
									</form>	
										
								</div>
						


					';
				}
			}
			mysqli_close($this->connection);

		}

		public function cambioContra($id){
			$query = "SELECT PASSWORD FROM usuarios WHERE ID = '$id'";
			$result = mysqli_query($this->connection,$query);;
			if (mysqli_num_rows($result)>0) {
				while ($regresult = mysqli_fetch_array($result)) {
					echo '
							
								<div >	
									<div class="form-group col-sm-12">
									    <label for="inputPassword3" class="col-sm-2 control-label">Contraseña Anterior:</label>
									    <div class="col-sm-10">
									      <input type="password" class="form-control" id="oldpass" placeholder="Contraseña Anterior." required>
									    </div>
									  </div>
	
									<div class="form-group col-sm-12">
									    <label for="inputPassword3" class="col-sm-2 control-label">Contraseña:</label>
									    <div class="col-sm-10" id="passs">
									      <input type="password" class="form-control" id="pass" placeholder="Contraseña Nueva." required>
									    </div>
									  </div>
										
									<div class="form-group col-sm-12">
									    <label for="inputPassword3" class="col-sm-2 control-label">Reingrese Contraseña:</label>
									    <div class="col-sm-10" id="pass22">
									      <input type="password" class="form-control" id="pass2" placeholder="Reingresa Contraseña." required onKeyUp="verificar()">
									    </div>
									  </div>
									  
									  
									  <div class="form-group">
									    <div class="col-sm-offset-2 col-sm-10">
									      <button type="submit" class="btn btn-default"  id="changepass" disabled="disabled" data-toggle="modal" data-target="#myModal">Cambiar Contraseña</button>
									    </div>
									    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
											  <div class="modal-dialog" role="document">
											    <div class="modal-content">
											      <div class="modal-header">
											        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											        <h4 class="modal-title" id="myModalLabel">Cambio de Contraseña</h4>
											      </div>
											      <div class="modal-body">
											        ¿Estas seguro? <br> <br>
											        <button type="button" class="btn btn-primary" onclick="cambiarContra()">Confirmar</button>
											        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											      </div>
											      <div class="modal-footer">
											       
											      </div>
											    </div>
											  </div>
											</div>
									  </div>
										
										
								</div>
						


					';
				}
			}
			mysqli_close($this->connection);

		}

		public function changepass($id,$newpass,$oldpass){
			$query1 = "SELECT * FROM usuarios WHERE ID = '$id'";

			$result = mysqli_query($this->connection,$query1);

			if (mysqli_num_rows($result)>0) {
				while ($reg = mysqli_fetch_array($result)) {
					if ($reg['PASSWORD'] === $oldpass) {
						$query = "UPDATE usuarios SET PASSWORD='$newpass' WHERE ID = '$id'";
						$is_inserted = mysqli_query($this->connection,$query);
								if ($is_inserted == 1) {
									$json['result'] = "Success";
									
									echo "Success";
								}else{
									$json['result'] = 'Error';
									echo 'Error';
								}
					}else{
									$json['result'] = 'ErrorOLD';
									echo 'Error en la Contraseña antigua';
					}
				}
			}
			mysqli_close($this->connection);

		}

	}

$sesion = new user();
if (isset($_GET['id'],$_GET['pass']) && !empty($_GET['id']) && !empty($_GET['pass'])) {
	if ($_GET['pass'] === "true") {
		$a = $_GET['id'];
		$sesion->cambioContra($a);
	}


}else if(isset($_GET['id']) && !empty($_GET['id']) ){
	$a = $_GET['id'];
	
		$sesion->getDatos($a);

}elseif (isset($_POST['newpass'],$_POST['id'],$_POST['oldpass']) && !empty($_POST['newpass']) && !empty($_POST['id'])&& !empty($_POST['oldpass'])) {
	$id = $_POST['id'];
	$oldpass = md5($_POST['oldpass']);
	$newpass = md5($_POST['newpass']);

	$sesion->changepass($id,$newpass,$oldpass);
	
}

 ?>