<?php 

require_once 'conection.php';


/**
* 
*/
class Stream
{
	
	private $db;
	private $connection;
	function __construct()
	{
		$this->db = new DB_conection();
		$this->connection = $this->db->get_Connection();
	}


	public function Stream(){
		$query = "SELECT * FROM streaming WHERE NEW=1";
		$result = mysqli_query($this->connection,$query);
		if (mysqli_num_rows($result)>0) {
			while ($reg = mysqli_fetch_array($result)) {
				$ch = curl_init("https://www.googleapis.com/youtube/v3/videos?part=snippet&id=".$reg['LINK']."&key=AIzaSyA85R9T8MOFklcwE6m3XinnWbiSmvFYfwQ");
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			   	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: application/json'));
			   	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			    $response = curl_exec($ch);
			    curl_close($ch);
			    $data = json_decode($response,true);
		    	$items = $data['items'];

		    	foreach ($items as $key) {
		    		echo '<h3>'.$key['snippet']['title'].' <a href="streaming.php?close=close" class="btn btn-danger">Terminar Stream</a></h3>
							<div class="embed-responsive embed-responsive-16by9">
							<iframe  src="https://www.youtube.com/embed/'.$key['id'].'" frameborder="0" allowfullscreen class="embed-responsive-item"></iframe>
							</div>

				


		    		';
		    	}
			}
		}else{
			echo '
				<form class="form-horizontal" action="recursos/stream.php" method="POST">
				  <div class="form-group">
				    <label for="name" class="col-sm-1 control-label">ID:</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="name" name="ID" placeholder="ID del Video">
				    </div>
				  </div>				   
				  <div class="form-group">
				    <div class="col-sm-offset-1 col-sm-10">
				      <button type="submit" class="btn btn-success">Publicar Stream</button>
				    </div>
				  </div>
			</form>
			';
		}
		mysqli_close($this->connection);
	}

	public function endStream(){
		$query = "UPDATE streaming SET NEW=0 WHERE NEW=1";
		$result = mysqli_query($this->connection,$query);
		if ($result == 1) {
			echo '<meta http-equiv="refresh" content="0;url=/streaming.php">';
		}else{
			echo "Error";
		}
		mysqli_close($this->connection);

	}

	public function startStream($link){
		$query = "INSERT INTO streaming(LINK,NEW) VALUES ('$link',1)";
		$is_inserted = mysqli_query($this->connection,$query);
					if ($is_inserted == 1) {
						header("location: ../streaming.php");
					}else{
						echo "Error";
					}
				mysqli_close($this->connection);
	}
}



$stream = new Stream();
$stream->Stream();

if (isset($_POST['ID']) && !empty($_POST['ID'])) {
	$id = $_POST['ID'];
	$stream -> startStream($id);
}else if(isset($_GET['close']) && !empty($_GET['close'])){
	if ($_GET['close'] == "close") {
		$stream->endStream();
	}
}

 ?>