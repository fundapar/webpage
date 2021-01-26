<?php 

require_once 'conection.php';

class pubs
{
	private $db;
	private $connection;
	function __construct()
	{
		$this->db = new DB_conection();
		$this->connection = $this->db->get_Connection();
	}

	public function pubs(){
		$query = "SELECT * FROM pub ORDER BY ID DESC LIMIT 12 ";
		$result = mysqli_query($this->connection,$query);
		if (mysqli_num_rows($result)>0) {
			while ($regresult = mysqli_fetch_array($result)) {
				$descrip = preg_replace("/((http|https|www)[^\s]+)/", ' ', $regresult['TEXTO']);
				$descrip = preg_replace("/href=\"www/", ' ', $descrip);
				$descrip = str_replace('<img src=""', " ", $descrip);
				echo '
						<a href="/?id='.$regresult['ID'].'">
							<div class="col-sm-6 col-xs-6  col-md-4 pubs">
							    <div class="thumbnail">
							      <img src="img/Logo.png" alt="imagen" width="80" heigth="80">
							      <div class="caption">
							        <a href="/?id='.$regresult['ID'].'"><h5>'.$regresult['NOMBRE'].'</h5></a>
							      </div>
							    </div>
							  </div>
						</a>
					';

			}
		}
		mysqli_close($this->connection);
	}


	public function getpub($id){
		$query = "SELECT * FROM pub WHERE ID = '$id'";
		$result = mysqli_query($this->connection,$query);
		if (mysqli_num_rows($result)>0) {
			while ($get = mysqli_fetch_array($result)) {
			echo '
			
				   <div class="page-header">
					  <h1>'.$get['NOMBRE'].' ';
				if (!empty($_SESSION['role'])) {
					echo '
					  <a href="/?id='.$get['ID'].'&delete=eliminar" class="btn btn-danger">Eliminar</a></h1> </div>
					';
				}else{
					echo '</h1> </div>';
				}
			echo' 
				
  				<div class="panel-body"><blockquote><p>
					'.$get['TEXTO'].' </p></blockquote>';
					if (isset($get['LINK']) && !empty($get['LINK'])) {
						echo "<br><br><a href=".$get['LINK']." class='btn btn-primary' target='_blank'>Descargar Recursos</a>";
					}
			echo '
				</div>
				
				';

				echo "<div id='disqus_thread'></div>
				<script>
				   
				    var disqus_config = function () {
				        this.page.url = '';  
				        this.page.identifier = ''; 
				    };
				    
				    (function() {  
				        var d = document, s = d.createElement('script');
				        
				        s.src = '//httprandyzabaletanet23net.disqus.com/embed.js';
				        
				        s.setAttribute('data-timestamp', +new Date());
				        (d.head || d.body).appendChild(s);
				    })();
				</script>
				<noscript>Please enable JavaScript to view the <a href='https://disqus.com/?ref_noscript' rel='nofollow'>comments powered by Disqus.</a></noscript>";

			}
			mysqli_close($this->connection);
		}else{
			header('Location: /');
		}

	}

	public function busqueda($valor){
		$query = "SELECT * FROM pub WHERE NOMBRE LIKE '%$valor%' OR TAG LIKE '%$valor%'";
		$result = mysqli_query($this->connection,$query);
		if (mysqli_num_rows($result)>0) {
			while ($regresult = mysqli_fetch_array($result)) {
				echo '
						<a href="/?id='.$regresult['ID'].'">
							<div class="col-sm-6 col-xs-6 col-md-4 pubs">
							    <div class="thumbnail">
							      <img src="img/Logo.png" alt="imagen" width="80" heigth="80">
							      <div class="caption">
							        <a href="/?id='.$regresult['ID'].'"><h5>'.$regresult['NOMBRE'].'</h5></a>
							      </div>
							    </div>
							  </div>
						</a>
					';

			}

		}else{
			echo "<h3 class='text-center'>No se encuetran publicaciones para: <small>".$valor."</small></h3> ";
		}
		mysqli_close($this->connection);
	}

	public function eliminar($id){
		$query ="DELETE FROM pub WHERE ID = '$id'";
		mysqli_query($this->connection,$query);
		header("location: /");
	}
}

$pubs = new pubs();
if(isset($_GET['id'],$_GET['delete']) && !empty($_GET['id']) && !empty($_GET['delete'])){
	$id = $_GET['id'];
	$delte = $_GET['delete'];
	if ($delte == "eliminar") {
		$pubs->eliminar($id);
	}
}else if (isset($_POST['valorBusqueda']) && !empty($_POST['valorBusqueda'])) {
	$consultaBusqueda = $_POST['valorBusqueda'];
	$pubs->busqueda($consultaBusqueda);
}else if(isset($_GET['id'])){
	$id = $_GET['id'];
	$pubs->getpub($id);
}else if ($_SERVER['REQUEST_METHOD'] == "GET") {
	$pubs->pubs();
}



 ?>