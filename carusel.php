<?php 
require_once 'conection.php';

/**
* 
*/
class carusel
{
	
	private $db;
	private $connection;
	function __construct()
	{
		$this->db = new DB_conection();
		$this->connection = $this->db->get_Connection();
	}

	public function carusel(){
		$i = 0;
		$query = "SELECT * FROM pub ORDER BY ID DESC LIMIT 5";
		$query2 = "SELECT * FROM streaming WHERE NEW=1";
		$result = mysqli_query($this->connection,$query);
		$result2 = mysqli_query($this->connection,$query2);
		if (mysqli_num_rows($result2)>0) {
			
				while ($reg2 = mysqli_fetch_array($result2)) {
				$ch = curl_init("https://www.googleapis.com/youtube/v3/videos?part=snippet&id=".$reg2['LINK']."&key=AIzaSyA85R9T8MOFklcwE6m3XinnWbiSmvFYfwQ");
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			   	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: application/json'));
			   	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			    $response = curl_exec($ch);
			    curl_close($ch);
			    $data = json_decode($response,true);
		    	$items = $data['items'];

		    	foreach ($items as $key) {
		    		echo '
					  
					    <div class="item active">
					    <a href="/videos.php?v='.$key['id'].'">
					      <img src="img/youtube.png" alt="imagen" class="carusel">
					      <div class="carousel-caption">
					       <h3 class="caruserNombre">'.$key['snippet']['title'].'</h3>
					      </div>
					      </a>
					    </div>				 
					 
					';
					$i++;
		    	}
		    }

			
		}

		if (mysqli_num_rows($result)>0) {
			while ($reg = mysqli_fetch_array($result)) {
				if ($i != 0) {
					echo '
					  
					    <div class="item">
					    <a href="/?id='.$reg['ID'].'">
					      <img src="img/banner.png" alt="imagen" class="carusel">
					      <div class="carousel-caption">
					       <h3 class="caruserNombre"> '.$reg['NOMBRE'].'</h3>
					      </div>
					      </a>
					    </div>				 
					 
					';
					$i++;
				}else{
					echo '
				 
				    <div class="item active">
				     <a href="/?id='.$reg['ID'].'">
				      <img src="img/banner.png" alt="imagen" class="carusel">
				      <div class="carousel-caption">
				        <h3 class="caruserNombre">'.$reg['NOMBRE'].'</h3>
				      </div>
				      </a>
				    </div>				 
				 
					';
					$i++;
				}
			}
		}
		mysqli_close($this->connection);
	}
}

$carusel = new carusel();
$carusel->carusel();

 ?>