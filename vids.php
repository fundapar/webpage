<?php 

require_once 'conection.php';
	class videos
	{
		
		// - ChannelID canal que es;
		
		function __construct()
		{
			
		}

		public function get_videos(){
			$url = "https://www.googleapis.com/youtube/v3/playlists?part=snippet&channelId=UC00aJUTAuWXs2_gQqzsxpwQ&maxResults=50&key=AIzaSyA85R9T8MOFklcwE6m3XinnWbiSmvFYfwQ";

			$ch = curl_init($url);

		   	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		   	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: application/json'));
		   	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		    $response = curl_exec($ch);
		    curl_close($ch);
		     $data = json_decode($response,true);
		    $items = $data['items'];
		   if (!empty($items)) {

		   	 $keys = "";
		   foreach ($items as $key) {

		   		$url2 = "https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=50&playlistId=".$key['id']."&key=AIzaSyA85R9T8MOFklcwE6m3XinnWbiSmvFYfwQ";
		   		$ch2 = curl_init($url2);
			   	curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
			   	curl_setopt($ch2, CURLOPT_HTTPHEADER, array('Accept: application/json'));
			   	curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, false);
			    $response2 = curl_exec($ch2);
			    curl_close($ch2);
			    if (!empty($response2)) {
			    	$datitem = json_decode($response2,true);
				    $items2 = $datitem['items'];
				    if ($datitem['pageInfo']['totalResults'] >=1) {
					    echo "<div class='col-sm-12 row'><h2>".$key['snippet']['title']."</h2>";
					    foreach ($items2 as $key2) {
					    	echo '
								<div class="col-sm-6 col-md-4">
									    <div class="thumbnail">
									      <img src="'.$key2['snippet']['thumbnails']['medium']['url'].'" alt="imagen">
									      <div class="caption">
									        <a href="?v='.$key2['snippet']['resourceId']['videoId'].'">'.$key2['snippet']['title'].'</a>        
									      </div>
									    </div>
								</div>


					    	';
				    	}
				    	echo "</div>";
				    }
			    }else{
			    	echo "Error";
			    }
		   }
		   }else{
		   		echo "No hay conexion a internet";
		   }
		   	

		}

		public function verVideo($id){
			$ch = curl_init("https://www.googleapis.com/youtube/v3/videos?part=snippet&id=".$id."&key=AIzaSyA85R9T8MOFklcwE6m3XinnWbiSmvFYfwQ");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		   	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: application/json'));
		   	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		    $response = curl_exec($ch);
		    curl_close($ch);

		    $datavid = json_decode($response,true);
		    
		    foreach ($datavid['items'] as $key) {
		    	echo '<div class="page-header">
					  <h1>'.$key['snippet']['title'].'</h1>
					</div>' ;
		    }
			echo '
				<div class="embed-responsive embed-responsive-16by9">
				<iframe  src="https://www.youtube.com/embed/'.$id.'" frameborder="0" allowfullscreen class="embed-responsive-item"></iframe>
				</div>
			';
		}

		public function busquedaVids($palabra){
			$ch = curl_init("https://www.googleapis.com/youtube/v3/search?part=snippet&channelId=UCjJBH1KyVLPkVsE_nJTwP2A&maxResults=50&q=".$palabra."&type=video&key=AIzaSyA85R9T8MOFklcwE6m3XinnWbiSmvFYfwQ");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		   	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: application/json'));
		   	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		    $response = curl_exec($ch);
		    curl_close($ch);

		    if (!empty($response)) {
		    	 $datavid = json_decode($response,true);

				   if (count($datavid['items'])>0) {
				   	 foreach ($datavid['items'] as $key) {
				    	echo '
							<div class="col-sm-6 col-md-4">
								    <div class="thumbnail">
								      <img src="'.$key['snippet']['thumbnails']['medium']['url'].'" alt="">
								      <div class="caption">
								        <a href="?v='.$key['id']['videoId'].'">'.$key['snippet']['title'].'</a>        
								      </div>
								    </div>
							</div><br>
				    	';
				    }
				   }else{
		    	echo "<h3 class='text-center'>No se ha encontrado video alguno para: <small>".$palabra."</small></h3><br><h4 class='text-center'>Prueba escribiendo el nombre del tema completo</h4>";
		    }

		    }else{
		    	echo "<h3 class='text-center'>Por favor Comprueba tu conexion a internet y recarga la pagina.</h3>";
		    }
		   
		}
	}


$videos = new videos();
if(isset($_GET['v']) && !empty($_GET['v'])){
	$id = $_GET['v'];
	
	$videos->verVideo($id);

}else if ($_SERVER['REQUEST_METHOD'] == "GET") {
	$videos->get_videos();
}else if(isset($_POST['word']) && !empty($_POST['word'])){
	$palabra = $_POST['word'];
	$videos->busquedaVids($palabra);
}


 ?>